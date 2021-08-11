<?php include('settings.php');


if (isset($_POST['reg_btn'])) {

	//if isset statement starts
	$name = addslashes(htmlentities($_POST['name']));
	$fullname = addslashes(htmlentities($_POST['fullname']));
	$ref_email1 = addslashes(htmlentities($_POST['ref_email']));
	$email = addslashes(htmlentities($_POST['email']));
	$password = addslashes(htmlentities($_POST['password']));
	$user_phone = addslashes(htmlentities($_POST['user_phone']));
	$password_confirmation = addslashes(htmlentities($_POST['password_confirmation']));
	$btc_address = addslashes(htmlentities($_POST['btc_address']));


	if ($password === $password_confirmation)  //check password match starts
	{

		//check user existence
		$query = "SELECT * from users where user_email ='$email'  or user_name ='$name'  ";
		$query_run  = new run_query($query);
		if ($query_run->num_rows != 1) {


			$json_data = array(
				"callback" => array(
					'url' => 'https://raverstrade.com/callback.php',
					'data' => array(
						'invoice_id' => "$email",
						'secret' => "$secret"
					)
				)
			);

			$api_base = "https://apirone.com/api/v2/wallets/" . $wallet . "/addresses";

			$curl = curl_init($api_base);
			curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($json_data));
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			$http_status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
			$response = curl_exec($curl);
			curl_close($curl);


			$decoded = json_decode($response, true);
			//   echo "Please send the payment to the following bitcoin address: " .
			$pay_address = $decoded["address"];


			if (!empty($ref_email1)) {   //check and credit referrer email starts
				$queryss = "SELECT * from user_ref where user_ref_email ='$ref_email1' ";
				$query_runaa  = new run_query($queryss);
				if ($query_runaa->num_rows == 0) {

					echo "<script>alert(\"Invalid Referral  !!! Please Check the Referral or leave it blank\"); window.location.replace(\"signup.php\"); </script>";
				} else {
					$user_ref_data =    $query_runaa->result();
					extract($user_ref_data);

					$query211 = new run_query("INSERT into user_ref set user_ref_email='$name', gen1_email='$ref_email1',  reg_date='$reg_Date', gen2_email='$gen1_email',gen3_email='$gen2_email' ");

					$query21 =  "INSERT into users set  user_name='$name', pay_address='$pay_address', btc_address='$btc_address', user_phone='$user_phone', fullname='$fullname', user_password='$password',  user_email='$email',     reg_date='$reg_Date', user_referrer='$ref_email1', user_ref_bonus='0', user_status='Active' ";

					$query_runer = new run_query($query21);

					echo "<script>alert(\"Account Registered Successfully!!! Its Now Time TO LogIn\"); window.location.replace(\"login.php\"); </script>";
				}
			} else {     //check and credit referrer email ends
				$query21 =  "INSERT into users set  user_name='$name', user_password='$password', pay_address='$pay_address', btc_address='$btc_address', user_phone='$user_phone', fullname='$fullname',  user_email='$email',   reg_date='$reg_Date', user_referrer='$ref_email1', user_status='Active', user_ref_bonus='0'  ";
				$query211 = new run_query("INSERT into user_ref set user_ref_email='$name'  ");


				if ($query_runer = new run_query($query21)) {


					$site_email_send = $site_email;
					$welcome_email_subject = "Welcome to $site_name";
					$welcome_email_headers = "Content-type:text/html;charset=UTF-8 \r\n";
					$welcome_email_headers .= "From: $site_name";


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

					mail($email, $welcome_email_subject, $welcome_email_body, $welcome_email_headers);



					echo "<script> window.location.replace(\"done.php\"); </script>";
				} else {
					echo "<script>alert(\"An Error Occurred Please Try Again \"); window.location.replace(\"signup.php\"); </script>";
				}
			}
		} else {

			echo "<script>alert(\"Username or Email Already Exits \"); window.location.replace(\"signup.php\"); </script>";
		}   //check user existence ends

	} else {
		echo "<script>alert(\"Password Not Match!!! \"); window.location.replace(\"signup.php\"); </script>";
	}   //check password match ends


}



@$ref_email1 = addslashes(htmlentities($_GET['ref']));


?>




<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<link href="assets/css/sweetalert2.min.css" rel="stylesheet">
	<script src="assets/js/sweetalert2.all.min.js"></script>
	<script src="assets/js/ext-component-sweet-alerts.js"></script>
	<title>Ravers Trade - Investment Project Registration Form</title>

	
</head>

<body class="bg-login">
	<!--wrapper-->




	<div class="wrapper">
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="my-4 text-center">
							<a href="index.php">
								<img src="cardstyles/images/logo/logo.png" width="180" alt="" />
							</a>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="text-white">Sign Up</h3>
										<p>Already have an account? <a href="login.php">Sign in here</a>
										</p>
										<h4 style="color:white;">
											<tr>
												<td>Your Upline:</td>
												<td>

													<?php if (isset( $_GET['ref'] )) { echo $ref_email1 ;}else{echo "No Upliner";}?>
												</td>
											</tr>
										</h4>
									</div>

									<div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
										<hr />
									</div>
									<div class="form-body">
										<form method=post class="row g-3">


											<input type=hidden name=ref_email value="<?php if (isset($ref_email1)) {echo $ref_email1;} ?>">
											<div class="col-sm-6">
												<label for="fullname" class="form-label">Full Name</label>
												<input type="text" name=fullname class="form-control" value="" placeholder="Name Surname" required>
											</div>
											<div class="col-sm-6">
												<label for="username" class="form-label">Username</label>
												<input type=text name=name value="" class="form-control" id="username" placeholder="Nick Name" required>
											</div>
											<div class="col-12">
												<label class="form-label">Email Address</label>
												<input type=email name="email" id="email" value="" class="form-control" placeholder="email@example.com" required>
											</div>

											<div class="col-12">
												<label class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type=password name="password" id="password" value="" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password" required>
													<a href="javascript:;" class="input-group-text bg-transparent text-white"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-12 ">
												<label class="form-label">Retype Password</label>
												<div class="input-group" id="show_hide_password">
													<input type=password name="password_confirmation" id="password2" value="" class="form-control border-end-0" value="12345678" placeholder="Enter Password" required>
													<a href="javascript:;" class="input-group-text bg-transparent text-white"><i class='bx bx-hide'></i></a>
												</div>
											</div>

											<div class="col-12">
												<label class="form-label">BTC Wallet Address</label>
												<input type=text name="btc_address" id="email" value="" class="form-control" placeholder="BTC Wallet Address" required>
											</div>


											<div class="col-12">
												<label class="form-label">Phone Number</label>
												<input type=text name="user_phone" id="email" value="" class="form-control" placeholder="Phone Number" required>
											</div>
											<!-- <div class="col-12">
												<label for="inputSelectCountry" class="form-label">Country</label>
												<select name=country class="form-select" id="inputSelectCountry" aria-label="Default select example">
													<option value="" selected>--SELECT--</option>
													<option>United States</option>
													<option>Afghanistan</option>
													<option>Albania</option>
													<option>Algeria</option>
													<option>American Samoa</option>
													<option>Andorra</option>
													<option>Angola</option>
													<option>Anguilla</option>
													<option>Antarctica</option>
													<option>Antigua and Barbuda</option>
													<option>Argentina</option>
													<option>Armenia</option>
													<option>Aruba</option>
													<option>Australia</option>
													<option>Austria</option>
													<option>Azerbaidjan</option>
													<option>Bahamas</option>
													<option>Bahrain</option>
													<option>Bangladesh</option>
													<option>Barbados</option>
													<option>Belarus</option>
													<option>Belgium</option>
													<option>Belize</option>
													<option>Benin</option>
													<option>Bermuda</option>
													<option>Bhutan</option>
													<option>Bolivia</option>
													<option>Bosnia-Herzegovina</option>
													<option>Botswana</option>
													<option>Bouvet Island</option>
													<option>Brazil</option>
													<option>British Indian Ocean Territory</option>
													<option>Brunei Darussalam</option>
													<option>Bulgaria</option>
													<option>Burkina Faso</option>
													<option>Burundi</option>
													<option>Cambodia</option>
													<option>Cameroon</option>
													<option>Canada</option>
													<option>Cape Verde</option>
													<option>Cayman Islands</option>
													<option>Central African Republic</option>
													<option>Chad</option>
													<option>Chile</option>
													<option>China</option>
													<option>Christmas Island</option>
													<option>Cocos (Keeling) Islands</option>
													<option>Colombia</option>
													<option>Comoros</option>
													<option>Congo</option>
													<option>Congo (Democratic Republic)</option>
													<option>Cook Islands</option>
													<option>Costa Rica</option>
													<option>Croatia</option>
													<option>Cuba</option>
													<option>Cyprus</option>
													<option>Czech Republic</option>
													<option>Denmark</option>
													<option>Djibouti</option>
													<option>Dominica</option>
													<option>Dominican Republic</option>
													<option>East Timor</option>
													<option>Ecuador</option>
													<option>Egypt</option>
													<option>El Salvador</option>
													<option>Equatorial Guinea</option>
													<option>Eritrea</option>
													<option>Estonia</option>
													<option>Ethiopia</option>
													<option>Falkland Islands</option>
													<option>Faroe Islands</option>
													<option>Fiji</option>
													<option>Finland</option>
													<option>France</option>
													<option>France (European Territory)</option>
													<option>French Guiana</option>
													<option>French Southern Territories</option>
													<option>Gabon</option>
													<option>Gambia</option>
													<option>Georgia</option>
													<option>Germany</option>
													<option>Ghana</option>
													<option>Gibraltar</option>
													<option>Great Britain</option>
													<option>Greece</option>
													<option>Greenland</option>
													<option>Grenada</option>
													<option>Guadeloupe</option>
													<option>Guam</option>
													<option>Guatemala</option>
													<option>Guinea</option>
													<option>Guinea Bissau</option>
													<option>Guyana</option>
													<option>Haiti</option>
													<option>Heard and McDonald Islands</option>
													<option>Holy See (Vatican City State)</option>
													<option>Honduras</option>
													<option>Hong Kong</option>
													<option>Hungary</option>
													<option>Iceland</option>
													<option>India</option>
													<option>Indonesia</option>
													<option>Iran</option>
													<option>Iraq</option>
													<option>Ireland</option>
													<option>Israel</option>
													<option>Italy</option>
													<option>Ivory Coast (Cote D`Ivoire)</option>
													<option>Jamaica</option>
													<option>Japan</option>
													<option>Jordan</option>
													<option>Kazakhstan</option>
													<option>Kenya</option>
													<option>Kiribati</option>
													<option>Kuwait</option>
													<option>Kyrgyz Republic (Kyrgyzstan)</option>
													<option>Laos</option>
													<option>Latvia</option>
													<option>Lebanon</option>
													<option>Lesotho</option>
													<option>Liberia</option>
													<option>Libya</option>
													<option>Liechtenstein</option>
													<option>Lithuania</option>
													<option>Luxembourg</option>
													<option>Macau</option>
													<option>Macedonia</option>
													<option>Madagascar</option>
													<option>Malawi</option>
													<option>Malaysia</option>
													<option>Maldives</option>
													<option>Mali</option>
													<option>Malta</option>
													<option>Marshall Islands</option>
													<option>Martinique</option>
													<option>Mauritania</option>
													<option>Mauritius</option>
													<option>Mayotte</option>
													<option>Mexico</option>
													<option>Micronesia</option>
													<option>Moldavia</option>
													<option>Monaco</option>
													<option>Mongolia</option>
													<option>Montserrat</option>
													<option>Morocco</option>
													<option>Mozambique</option>
													<option>Myanmar</option>
													<option>Namibia</option>
													<option>Nauru</option>
													<option>Nepal</option>
													<option>Netherlands</option>
													<option>Netherlands Antilles</option>
													<option>New Caledonia</option>
													<option>New Zealand</option>
													<option>Nicaragua</option>
													<option>Niger</option>
													<option>Nigeria</option>
													<option>Niue</option>
													<option>Norfolk Island</option>
													<option>North Korea</option>
													<option>Northern Mariana Islands</option>
													<option>Norway</option>
													<option>Oman</option>
													<option>Pakistan</option>
													<option>Palau</option>
													<option>Panama</option>
													<option>Papua New Guinea</option>
													<option>Paraguay</option>
													<option>Peru</option>
													<option>Philippines</option>
													<option>Pitcairn Island</option>
													<option>Poland</option>
													<option>Polynesia</option>
													<option>Portugal</option>
													<option>Puerto Rico</option>
													<option>Qatar</option>
													<option>Reunion</option>
													<option>Romania</option>
													<option>Russian Federation</option>
													<option>Rwanda</option>
													<option>S. Georgia &amp; S. Sandwich Isls.</option>
													<option>Saint Helena</option>
													<option>Saint Kitts &amp; Nevis Anguilla</option>
													<option>Saint Lucia</option>
													<option>Saint Pierre and Miquelon</option>
													<option>Saint Vincent &amp; Grenadines</option>
													<option>Samoa</option>
													<option>San Marino</option>
													<option>Sao Tome and Principe</option>
													<option>Saudi Arabia</option>
													<option>Senegal</option>
													<option>Seychelles</option>
													<option>Sierra Leone</option>
													<option>Singapore</option>
													<option>Slovak Republic</option>
													<option>Slovenia</option>
													<option>Solomon Islands</option>
													<option>Somalia</option>
													<option>South Africa</option>
													<option>South Korea</option>
													<option>Spain</option>
													<option>Sri Lanka</option>
													<option>Sudan</option>
													<option>Suriname</option>
													<option>Svalbard and Jan Mayen Islands</option>
													<option>Swaziland</option>
													<option>Sweden</option>
													<option>Switzerland</option>
													<option>Syria</option>
													<option>Taiwan</option>
													<option>Tajikistan</option>
													<option>Tanzania</option>
													<option>Thailand</option>
													<option>Togo</option>
													<option>Tokelau</option>
													<option>Tonga</option>
													<option>Trinidad and Tobago</option>
													<option>Tunisia</option>
													<option>Turkey</option>
													<option>Turkmenistan</option>
													<option>Turks and Caicos Islands</option>
													<option>Tuvalu</option>
													<option>USA Minor Outlying Islands</option>
													<option>Uganda</option>
													<option>Ukraine</option>
													<option>United Arab Emirates</option>
													<option>United Kingdom</option>
													<option>Uruguay</option>
													<option>Uzbekistan</option>
													<option>Vanuatu</option>
													<option>Venezuela</option>
													<option>Vietnam</option>
													<option>Virgin Islands (British)</option>
													<option>Virgin Islands (USA)</option>
													<option>Wallis and Futuna Islands</option>
													<option>Weather Stations</option>
													<option>Western Sahara</option>
													<option>Yemen</option>
													<option>Yugoslavia</option>
													<option>Zaire</option>
													<option>Zambia</option>
													<option>Zimbabwe</option>
												</select>
											</div> -->



											<div class="col-12">
												<div class="form-check form-switch">
													<input class="form-check-input" type=checkbox name=agree value=1 required> I agree with <a href="rules.php">Terms and conditions</a></td>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary" name="reg_btn"><i class='bx bx-user'></i>Sign up</button>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->

	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function() {
			$("#show_hide_password a").on('click', function(event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			//////////////
			$("#email").on('keyup change', function() {
				var ema = $("#email").val();
				$("#email1").val(ema);
			});
			$("#username").keyup(function() {
				$("#fullname").val(this.value);
			});

			$("#password").keyup(function() {
				$("#password2").val(this.value);
			});

			$('.btncclose').click(function() {
				$('.modal').removeClass('displayinlne');
			})
			$('.btnclogn').click(function() {
				$('.modal').addClass('displayinlne');
			})

		});
	</script>

</body>


<!-- Mirrored from Ravers Trade.com/signup by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Aug 2021 11:45:29 GMT -->

</html>