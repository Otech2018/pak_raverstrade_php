<?php

include('settings.php');

$email = "ajahogonnaya2012@gmail.com";

$site_email_send = $site_email;
					$welcome_email_subject = "Welcome to $site_name";
					// $welcome_email_headers = "Content-type:text/html;charset=UTF-8 \r\n";
					$welcome_email_headers = "From: <$site_email>";


					$welcome_email_body = "

<html>
<head>
<title> Welcome to $site_name </title>
</head>
<body>
<b>Hi, $name<b> <br/>
<h2> $site_name we are happy to have you!</h2>
You Have Successfully Registered on $site_name, <br/>
<b><i>We are Happy To Have  you on Board. </i></b><br/>

<hr/>
Get In Touch <br/>


<b>
$site_email <br/>

$site_phone <br/>
</b>
Visit us on <br/>

$site_link <br/><br/><br/>

best Regards,  $site_name.
</body>
</html>

";

		if(			mail($email, $welcome_email_subject, $welcome_email_body, $welcome_email_headers) ) echo "MAIL - OK";
    else echo "MAIL FAILED";
    
    
    
    
    
    ?>