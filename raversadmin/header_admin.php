<?php
 
if( !AdminLoggedin() ){

	echo "<script>	window.location.replace(\"index.php\"); </script>";
}

 $Admin_data_id = $_SESSION['Admin_id'];
	
	 $admin = new run_query( "select * from admin where admin_id = '$Admin_data_id' " );
$Admin_data =	$admin->result();
	extract($Admin_data );
	
	




 
?>	

<nav>
    <div class="nav-wrapper ">
      <a href="../index.php"  class="brand-logo dip_font"><?php echo $site_name; ?></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
		
	   <li><a href="admin_dash.php" class="dip_font white-text">Dasboard</a></li>
	   <li><a href="tra1.php" class="dip_font white-text">Transaction</a></li>
		
	         <li><a href="user.php" class="dip_font white-text">Users </a></li>
		 <li><a href="text.php" class="dip_font white-text">Testimony </a></li>
		<li><a href="../logout.php" class="dip_font white-text ">Log Out</a></li>
 
      </ul>
    </div>
  </nav>
        