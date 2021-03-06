<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<title>Sign In – Swipe</title>
		<meta name="description" content="#">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap core CSS -->
		<link href="./asset/css/lib/bootstrap.min.css" type="text/css" rel="stylesheet">
		<!-- Swipe core CSS -->
		<link href="./asset/css/swipe.min.css" type="text/css" rel="stylesheet">
		<!-- Favicon -->
		<link href="./asset/img/favicon.png" type="image/png" rel="icon">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<style>
/* Chrome, Safari, Edge, Opera */
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
		}

		/* Firefox */
		input[type=number] {
		-moz-appearance: textfield;
}
		</style>
	</head>
	<body class="start">
		<main>
			<div class="layout">
				<!-- Start of Sign In -->
				<div class="main order-md-1">
					<div class="start">
						<div class="container">
							<div class="col-md-12">
								<div class="content">
									<h1>Sign in to Swipe</h1>
									<div class="third-party">
										<button class="btn item bg-blue">
											<i class="material-icons">pages</i>
										</button>
										<button class="btn item bg-teal">
											<i class="material-icons">party_mode</i>
										</button>
										<button class="btn item bg-purple">
											<i class="material-icons">whatshot</i>
										</button>
									</div>
									<p>or use your email account:</p>
									<form  action="?signin=1" method="POST">
										<div class="form-group">
											<input type="number" name="inputPhone" id="inputPhone" class="form-control" placeholder="Your Phone" onchange="CheckPhone()" onkeydown="CheckPhone()" required>
											<button class="btn icon"><i class="material-icons">phone</i></button>
										</div>
										<div class="form-group">
											<input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
											<button class="btn icon"><i class="material-icons">lock_outline</i></button>
										</div>
										<button type="submit" class="btn button" >Sign In</button> <!--formaction="index-2.html" -->
										<p id="SignupNotification"></p>
										<div class="callout">
											<span>Don't have account? <a href="?signup">Create Account</a></span>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of Sign In -->
				<!-- Start of Sidebar -->
				<div class="aside order-md-2">
					<div class="container">
						<div class="col-md-12">
							<div class="preference">
								<h2>Hello, Friend!</h2>
								<p>Enter your personal details and start your journey with Swipe today.</p>
								<a href="?signup" class="btn button">Sign Up</a>
							</div>
						</div>
					</div>
				</div>
				<!-- End of Sidebar -->
			</div> <!-- Layout -->
		</main>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="./asset/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="./asset/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="./asset/js/vendor/popper.min.js"></script>
		<script src="./asset/js/bootstrap.min.js"></script>
		<script src="./script.js"></script>
	</body>

</html>