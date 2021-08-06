<!doctype html>
<html lang="en">



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
	<title>Raverstrade - Investment Project Login Form</title>
</head>



<body class="bg-login">

	<script language=javascript>
		function checkform() {
			if (document.mainform.username.value == '') {
				alert("Please type your username!");
				document.mainform.username.focus();
				return false;
			}
			if (document.mainform.password.value == '') {
				alert("Please type your password!");
				document.mainform.password.focus();
				return false;
			}
			return true;
		}
	</script>


	<br><br>

	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
							<a href="index.php">
								<img src="cardstyles/images/logo/logo.png" width="180" alt="" />
							</a>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="text-white">Sign in</h3>
										<p>Don't have an account yet? <a href="signup.php">Sign up here</a>
										</p>
									</div>

									<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
										<hr />
									</div>
									<div class="form-body">
										<form method=post name=mainform onsubmit="return checkform()" class="row g-3"><input type="hidden" name="form_id" value="16281636932616"><input type="hidden" name="form_token" value="3b4e4a54e2418639be2c945ef4307715">
											<input type=hidden name=a value='do_login'>
											<input type=hidden name=follow value=''>
											<input type=hidden name=follow_id value=''>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Login Name</label>
												<input type=text name=username value='' class="form-control" id="inputEmailAddress" placeholder="Username" autofocus="autofocus" required>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter Password</label>
												<div class="input-group" id="show_hide_password">
													<input type=password name=password value='' class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password" required>
													<a href="javascript:;" class="input-group-text bg-transparent text-white"><i class='bx bx-hide'></i></a>
												</div>
											</div>



											<style>
												div.g-recaptcha {
													margin: 0 auto;
													width: 304px;
													padding: 5px;
												}
											</style>
											<script src='../www.google.com/recaptcha/api.js'></script>
											<tr>
												<td class=menutxt colspan=2>
													<div class="g-recaptcha" data-sitekey="6LeJaJsbAAAAAA1SHUbpSZ0SJinMUvL6oahRHgwQ"></div>
												</td>
											</tr>




											<div class="col-md-6 text-end"> <a href="password_recovery.php">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
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
	<!--app JS-->
	<script src="assets/js/app.js"></script>
	<!-- Code injected by live-server -->
	<script type="text/javascript">
		// <![CDATA[  <-- For SVG support
		if ('WebSocket' in window) {
			(function() {
				function refreshCSS() {
					var sheets = [].slice.call(document.getElementsByTagName("link"));
					var head = document.getElementsByTagName("head")[0];
					for (var i = 0; i < sheets.length; ++i) {
						var elem = sheets[i];
						var parent = elem.parentElement || head;
						parent.removeChild(elem);
						var rel = elem.rel;
						if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
							var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
							elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
						}
						parent.appendChild(elem);
					}
				}
				var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
				var address = protocol + window.location.host + window.location.pathname + '/ws';
				var socket = new WebSocket(address);
				socket.onmessage = function(msg) {
					if (msg.data == 'reload') window.location.reload();
					else if (msg.data == 'refreshcss') refreshCSS();
				};
				if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
					console.log('Live reload enabled.');
					sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
				}
			})();
		} else {
			console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
		}
		// ]]>
	</script>
</body>



</html>