<?php

$user_data_id = $_SESSION['user_id'];
  
  $user = new run_query("select * from users where user_id = '$user_data_id' and user_status ='Active'");
  $user_data =	$user->result();
  extract($user_data );
  

if(isset($_POST['close_not'])  ) { 

$query121wx =  new run_query( "UPDATE `users` SET `user_notification` ='read'  where user_id='$user_id' ");
echo "<script>window.location.replace(\"account.php\");</script>"; 
    
}











?>