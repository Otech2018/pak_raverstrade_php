<?php session_start(); 



$site_name ="RaversTrade";
$site_link ="raverstrade.com";
$site_email ="admin@raverstrade.com";
$site_email_pw ='password@2021';
$site_address ="";
$site_phone ="+44 7520 633267";
$site_telegram ="https://t.me/joinchat/FCCom-wmNEu7H9Ad";
$site_whatsapp ="https://wa.me/joinchat/FCCom-dghhgf";



//Central Wallet From Apirone
  $wallet = "btc-19a671072aa9e611515d6b08621432d4";
  $secret = "7j0ap91o99cxj8k9";
//Central Wallet From Apirone


			$min_amt = "50";




//dtatbase connection_aborted





class connect{

	public  $host = 'localhost';
		
			
	// public  $username = 'frankchris_raverstrade';
    //    public  $password = 'raverstrade';
	// public  $db = 'frankchris_raverstrade';			
	
	
	public  $username = 'ben';
       public  $password = '1991';
	public  $db = 'bitwave_db';		
		
	}
	

	
		class run_query extends connect{
		
		public function __construct( $query_mlc){
			$this->connect_db = new PDO("mysql:host=$this->host;dbname=$this->db",$this->username,$this->password);

			$this->query_run = $this->connect_db ->query($query_mlc);
			$this->num_rows = $this->query_run->rowCount();
			
			
			}


			public	 function result(){
			$this->result =  $this->query_run ->fetch(PDO::FETCH_BOTH);
			
			return $this->result;
			}
		
	
	}


//site variables
$reg_Date = date('Y-m-d');
$deposite_exp_date = date('Y-m-d',strtotime('30 Days') );


// $site_lowest_amt = 5000;











//days online

$todays_date = date('Y-m-d H:i:s');


$start_date_c = '2019-12-17 00:00:00';


$t1 = strtotime($start_date_c);

$t2 = strtotime($todays_date);



$diff = $t2 -$t1;


$days_online_d =  $diff  /86400;
 
$days_online = round($days_online_d);



//login function

function loggedin(){
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        return true;
    }else{
     return false;
    }
}


function AdminLoggedin(){
  if(isset($_SESSION['Admin_id']) && !empty($_SESSION['Admin_id'])){
        return true;
    }else{
     return false;
    }
}



 $settings = new run_query( "select * from  settings " );
$settings_data =	$settings->result();
	extract($settings_data);
	
	

	
	$total_cashout = new run_query("select sum(trant_amt) as total_cash_out from transaction where  tran_desc ='CASH_OUT'  ");
								$total_cashout_data =	$total_cashout->result();
							extract($total_cashout_data );
				$all_cashout = 		$total_cash_out + $total_cashout_manipulation;			
			
			
			
				$total_deposit = new run_query("select sum(trant_amt) as total_deposit_ from transaction where  tran_desc ='DEPOSIT'  ");
								$total_deposit_data =	$total_deposit->result();
							extract($total_deposit_data );
			$all_deposit = 		$total_deposit_ + $total_deposit_manipulation;			





			$min_amt_dep_btc = "700";
			$min_amt_dep_eth = "2000";
			
	
			



















			function usd_btc($amt){
	
				$getrate = "https://api.alternative.me/v2/ticker/?convert=USD";
			
			$price = file_get_contents($getrate);
			$result = json_decode($price, true);
			
			// BTC in USD
			$result = $result['data'][1]['quotes']['USD']['price'];
			
			$quantity = $amt;
			$value = $quantity / $result;
				
				return $value;
			}
			
			
			
			
			function btc_usd($amt){
				
				$getrate = "https://api.alternative.me/v2/ticker/?convert=USD";
			
			$price = file_get_contents($getrate);
			$result = json_decode($price, true);
			
			// BTC in USD
			$result = $result['data'][1]['quotes']['USD']['price'];
			
			$quantity = $amt;
			$value = $quantity / $result;
				
				return $result;
			}