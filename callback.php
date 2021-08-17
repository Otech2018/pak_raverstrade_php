<?php include('settings.php'); 




function btc_usd($amt){
	
	$getrate = "https://api.alternative.me/v2/ticker/?convert=USD";

$price = file_get_contents($getrate);
$result = json_decode($price, true);

// BTC in USD
$result = $result['data'][1]['quotes']['USD']['price'];

$quantity = $amt;
$value = $quantity * $result;
	
	return $value;
}






//receive JSON data
$data = file_get_contents('php://input');

if ($data) {
    $params = json_decode($data, true);

	// $secret = "7j0ap91o99cxj8k9";

	// check your secret code
	// if ($params["data"]["secret"] !== $secret) die();

	$invoice_id = $params["data"]["invoice_id"];
	$input_address = $params["input_address"];
	$input_transaction_hash = $params["input_transaction_hash"];
	$value_in_satoshi = $params["value"];
	$amt = $value_in_satoshi / 100000000;
	$mat = btc_usd($amt);
	//Save unconfirmed transaction and data to your Database.
    if ($params["confirmations"] == 0) {
	
		 $qw = "INSERT into transaction set tran_user_id='$invoice_id',  tran_email='$invoice_id',
     tran_username='$invoice_id', tran_desc='DEPOSIT', trant_amt='$mat', coin_amt='$amt',
      tran_status='PENDING', tran_date='$reg_Date', tran_invoice='$input_transaction_hash',
      trans_id='$input_address', coin='BTC',hash_id='$input_transaction_hash' "; 
    $deposite_run =new run_query($qw);
		
	}
	

    if ($params["confirmations"] >= 3) {
		
		//Update invoice status - payment Done.
        $query21 =  "update users set  bal=bal+$mat where pay_address='$input_address' ";
      
      if($query_runer =new run_query($query21)){

      	$update_tran  = new run_query("UPDATE `transaction` SET start_tran_date='$reg_Date',tran_exp_date='$deposite_exp_date',  trant_amt='$mat', tran_status='CONFIRMED' where  hash_id ='$input_transaction_hash' ");
      	echo "*ok*";
      } 
		
		//After respond *ok*, Gateway will stop to send callbacks for this task.
		
		
	}
}


?>