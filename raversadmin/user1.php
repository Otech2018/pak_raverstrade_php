<?php

include('../settings.php');

?>
<!doctype html>

<html>

<head>

  <?php
  require "script/mlc/script_head.php";
  ?>

  <meta name="viewport" content="width=1024">



  <meta name="description" content="BEST INVESTMENT IN NIGERIA,  MAKE MONEY ONLINE, ">

  <meta name="keywords" content=" diploiders  ">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">

  <meta http-equiv="pragma" content="no-cache" />

  <title> <?php echo $site_name; ?> | ADMIN users </title>


</head>

<body>
  <?php
  require "header_admin.php";
  ?>



  <br /><br /><br /><br /><br />


  <main>
    <div class="container">
      <br />
      <div class="row dip_font deep-orange-text">

        <h1>USERS </h1>
        <hr />

        <div class="col m2 l2 s12"><br /> <br /></div>


        <div class="col m8 s12">

          <div>



            <ul class="collapsible popout" data-collapsible="accordion">

              <?php

              $queryts_user = "select * from users  ";

              $query_run_user  = new run_query($queryts_user);
              $num1 = 1;
              if ($query_run_user->num_rows >= 1) {
                while ($data_user =  $query_run_user->result()) {
                  extract($data_user);


                  if ($user_status == 'Active') {
                    $button = " 
<input type=\"submit\" class=\"btn red white-text\" name=\"block$user_id\" value=\"block\"/>
   
<a href='invest.php?user=$user_id' class='btn blue'>Investments</a>
  
	<a class=\"btn modal-trigger green\" href=\"#modal1$user_id\">EDIT</a>
	<div id=\"modal1$user_id\" class=\"modal\">
    <div class=\"modal-content\">
	
	<div class=\"input-field col s12\">
          <input id=\"email\" type=\"text\" class=\"validate\" value=\"$user_phone\" name=\"try_User_phone\" >
          <label for=\"email\" data-error=\"wrong\" data-success=\"right\">PHONE NUMBER</label>
        </div>
	
	
	
  <div class=\"input-field col s12\">
          <input id=\"email\" type=\"text\" class=\"validate\" value=\"$acc_name\" name=\"User_bank_acc_name\" >
          <label for=\"email\" data-error=\"wrong\" data-success=\"right\">ACCOUNT NAME</label>
        </div>
   

        


    <div class=\"input-field col s12\">
        <select name=\"User_bank_name\">
	<option value=\"$acc_bank\">$acc_bank</option>
     
     
                                                                        <option value=\"Access Bank\">Access Bank</option>
                                                                        <option value=\"Citibank\">Citibank</option>
                                                                        <option value=\"Diamond Bank\">Diamond Bank</option>
                                                                        <option value=\"Dynamic Standard Bank\">Dynamic Standard Bank</option>
                                                                        <option value=\"Ecobank Nigeria\">Ecobank Nigeria</option>
                                                                        <option value=\"Fidelity Bank Nigeria\">Fidelity Bank Nigeria</option>
                                                                        <option value=\"First Bank of Nigeria\">First Bank of Nigeria</option>
                                                                        <option value=\"First City Monument Bank\">First City Monument Bank</option>
                                                                        <option value=\"Guaranty Trust Bank\">Guaranty Trust Bank</option>
                                                                        <option value=\"Heritage Bank Plc\">Heritage Bank Plc</option>
                                                                        <option value=\"1Keystone Bank Limited\">Keystone Bank Limited</option>
                                                                        <option value=\"Providus Bank Plc\">Providus Bank Plc</option>
                                                                        <option value=\"Skye Bank\">Skye Bank</option>
                                                                        <option value=\"Stanbic IBTC Bank Nigeria Limited\">Stanbic IBTC Bank Nigeria Limited</option>
                                                                        <option value=\"Standard Chartered Bank\">Standard Chartered Bank</option>
                                                                        <option value=\"Sterling Bank\">Sterling Bank</option>
                                                                        <option value=\"Suntrust Bank Nigeria Limited\">Suntrust Bank Nigeria Limited</option>
                                                                        <option value=\"Union Bank of Nigeria\">Union Bank of Nigeria</option>
                                                                        <option value=\"United Bank for Africa\">United Bank for Africa</option>
                                                                        <option value=\"Unity Bank Plc\">Unity Bank Plc</option>
                                                                        <option value=\"Wema Bank\">Wema Bank</option>
                                                                        <option value=\"Zenith Bank\">Zenith Bank</option>
                                                                    </select> </div>
   
		
		 <div class=\"input-field col s12\">
          <input id=\"email\" type=\"text\" class=\"validate\" value=\"$acc_num\" name=\"User_bank_acc_num\" >
          <label for=\"email\" data-error=\"wrong\" data-success=\"right\">ACCOUNT NUMBER</label>
        </div>


        <div class=\"input-field col s12\">
          <input id=\"email\" type=\"text\" class=\"validate\" value=\"$user_password\" name=\"user_password\" >
          <label for=\"email\" data-error=\"wrong\" data-success=\"right\">User Password</label>
        </div>


        <div class=\"input-field col s12\">
          <input id=\"email\" type=\"number\" class=\"validate\" name=\"bal\" >
          <label for=\"email\" data-error=\"wrong\" data-success=\"right\">User Balance ($)</label>
        </div>
		
		<input type=\"submit\" value=\"UPDATE\" name=\"update$user_id\" class=\"btn green\"  />
		
		
		 </div>
    <div class=\"modal-footer\">
      <a href=\"#!\" class=\"modal-action modal-close btn right\">close</a>
    </div>
  </div>

	 ";
                  } else {
                    $button = "
  <input type=\"submit\" class=\"btn green white-text\" name=\"unblock$user_id\" value=\"Unblock\"/> 
 ";
                  }

                  echo "<li>
      <div class=\"collapsible-header\" > $num1  | &nbsp; &nbsp; <b>$user_email</b></div>
     <div class=\"collapsible-body\" style=\"color:black; font-size:12px;\"> 
     NAME: $user_name <br/>
     PASSWORD: $user_password <br/>
     PHONE: $user_phone <br/>
     STATUS: $user_status <br/>
     REG DATE: $reg_date <br/> 
   EMAIL: $user_email <hr/>
     WALLET ADDRESS:<br> $btc_address <hr/>
     ACC BAL: $bal 
   <br/>
    REF BONUS: $user_ref_bonus <br/>
    
 
<form method=\"POST\" action=\"user1.php\"> 
 $button
	</form>
	</div>
    
	</li>
    ";





                  $num1++;


                  if (isset($_POST['update' . $user_id])) {
                    $acc_bank_acc_name1 = addslashes(htmlentities($_POST['User_bank_acc_name']));
                    $acc_bank_name1 = addslashes(htmlentities($_POST['User_bank_name']));
                    $acc_bank_acc_num1 = addslashes(htmlentities($_POST['User_bank_acc_num']));
                    $try_User_phone = addslashes(htmlentities($_POST['try_User_phone']));
                    $user_password = addslashes(htmlentities($_POST['user_password']));
                    $bal = addslashes(htmlentities($_POST['bal']));

                    $query121wx = new run_query("UPDATE `users` SET  bal= bal+$bal, `user_password` ='$user_password', `acc_name` ='$acc_bank_acc_name1', `acc_bank` ='$acc_bank_name1',  `acc_num` ='$acc_bank_acc_num1' ,  `user_phone` ='$try_User_phone'  where user_id='$user_id' ");


                    echo "<script>alert(\"UPDATED!\");</script>";
                    echo "<script>window.location.replace(\"user1.php\");</script>";
                  }




                  if (isset($_POST['block' . $user_id])) {
                    $query121wx = new run_query("UPDATE `users` SET `user_status` ='blocked'  where user_id='$user_id' ");


                    echo "<script>alert(\" USER BLOCKED! \");</script>";
                    echo "<script>window.location.replace(\"user1.php\");</script>";
                  }



                  if (isset($_POST['unblock' . $user_id])) {
                    $query121wx = new run_query("UPDATE `users` SET `user_status` ='Active'  where user_id='$user_id' ");


                    echo "<script>alert(\"USER ACTIVATED!\");</script>";
                    echo "<script>window.location.replace(\"user1.php\");</script>";
                  }
                }
              } else {
                echo "<script>alert(\"NO RESULT FOUND!\");</script>";
              }


              ?>

            </ul>


          </div>


        </div>




        <div class="col m2 l2 s12"><br /> <br /></div>


      </div>





    </div>


  </main>


  <?php

  require "script/mlc/script_foot.php";
  ?>


</body>

</html>