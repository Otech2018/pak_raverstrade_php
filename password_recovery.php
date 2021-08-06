<html lang="en">

<!-- Mirrored from Raverstrade.com/password_recovery by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Aug 2021 11:58:21 GMT -->
<!-- Added by HTTrack -->
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
	<title>Raverstrade - Investment Project Forgot Password</title>
</head>

<body class="bg-login">
	<!--wrapper-->


	<script language=javascript>
		function checkform() {
			if (document.forgotform.email.value == '') {
				alert("Please type your username or email!");
				document.forgotform.email.focus();
				return false;
			}
			return true;
		}
	</script>








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

									<div class="login-separater text-center mb-4"> <span>1 Step left to recover your password</span>
										<hr />
									</div>
									<div class="form-body">

										<form method=post name=forgotform onsubmit="return checkform();" class="row g-3"><input type="hidden" name="form_id" value="16281639189104"><input type="hidden" name="form_token" value="68e9fb35dcaefea8cb25e552c0a45820">
											<input type=hidden name=a value="forgot_password">
											<input type=hidden name=action value="forgot_password">
											<div class="col-12">
												<label class="form-label">Type your username or e-mail:</label>
												<input type=text name='email' value="" class="form-control" placeholder="Username or E-mail" required>
											</div>

											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Forgot</button>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<a href="login.php" class="btn btn-light btn-lg"><i class="bx bx-arrow-back me-1"></i>Back to Login</a>
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


<!-- Mirrored from Raverstrade.com/password_recovery by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Aug 2021 11:58:22 GMT -->

</html>