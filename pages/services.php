<!doctype html>
<?php
session_start();
if (empty($_SESSION['od']) || $_SESSION['od'] == "") {
	$_SESSION['od'] = $_SESSION['do'] = $_SESSION['datum'] = "";
} else {
	$od = $_SESSION['od'];
	$do = $_SESSION['do'];
	$datum = $_SESSION['datum'];
}
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="../fonts/icomoon/style.css">
	<link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="../css/daterangepicker.css">
	<link rel="stylesheet" href="../css/aos.css">
	<link rel="stylesheet" href="../css/style.css">

	<title>TOUR</title>
</head>

<body>


	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="site-navigation">
				<a href="../index.php" class="logo m-0">Tour <span class="text-primary">.</span></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					<li><a href="../index.php">Pretrazite</a></li>
					<li><a href="./services.php">Objavljene voznje</a></li>
					<li><a href="./about.php">Inbox</a></li>
					<li><a href="./contact.php">Profil</a></li>
				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>


	<div class="hero hero-inner">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 mx-auto text-center">
					<div class="intro-wrap">
						<h1 class="mb-0">OBAJVLJENE VOZNJE</h1>
						<p class="text-white">Ovde mozete pogledati sve voznje i odluciti koja voznja vam najvise odgovara.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php

	require '../php/konekcija.php';

	$od = $_SESSION['od'];
	$do = $_SESSION['do'];
	$datum = $_SESSION['datum'];

	$sql = "SELECT * FROM voznje WHERE od = `$od` AND do = `$do` AND datum = `$datum`";
	$res = mysqli_query($conn, $sql);

	if ($res) {
		if (mysqli_num_rows($res) > 0) {
			while ($row = mysqli_fetch_assoc($res)) {
				echo $row['id'] . " " . $row['od'] . " " . $row['do'] . " " . $row['datum'];
			}
		} else {
			echo 'Nema voznji danas';
		}
	}
	?>


	<div class="site-footer">
		<div class="inner first">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Tour</h3>
							<p>Web sajt koji ce Vam pomoci da lakse i brze stignete do vaseg odredista.</p>
						</div>
						<div class="widget">
							<ul class="list-unstyled social">
								<li><a href="https://twitter.com/i/flow/login"><span class="icon-twitter"></span></a></li>
								<li><a href="https://www.instagram.com/accounts/login/"><span class="icon-instagram"></span></a></li>
								<li><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
								<li><a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&ifkv=AeAAQh5D2j_sbU5Cf9Qkh-SoUMWK_EpcYl1IyEVuihj1SwOMr17Z6Es0pokuyB9D20XNm6SwnRipbA&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><span class="icon-google"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-2 pl-lg-5">
						<div class="widget">
							<h3 class="heading">Pretrazite</h3>
							<ul class="links list-unstyled">
								<li><a href="#">Objavljene voznje</a></li>
								<li><a href="#">Inbox</a></li>
								<li><a href="#">Profil</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Kontakt</h3>
							<ul class="list-unstyled quick-info links">
								<li class="email"><a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&ifkv=AeAAQh5D2j_sbU5Cf9Qkh-SoUMWK_EpcYl1IyEVuihj1SwOMr17Z6Es0pokuyB9D20XNm6SwnRipbA&flowName=GlifWebSignIn&flowEntry=ServiceLogin">urosdrndarevic04@gmail.com</a></li>
								<li class="phone"><a> +381 358 5689</a></li>
								<li class="address"><a href="https://www.google.com/maps/place/%D0%9E%D0%BC%D0%BB%D0%B0%D0%B4%D0%B8%D0%BD%D1%81%D0%BA%D0%B0+20,+%D0%9A%D1%80%D0%B0%D1%99%D0%B5%D0%B2%D0%BE/@43.7241531,20.6836166,17z/data=!3m1!4b1!4m5!3m4!1s0x475700e4bd3c3e4b:0xd81b8b161fda1742!8m2!3d43.7241492!4d20.6858053"> Omladinska 20, 36000, Kraljevo</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="inner dark">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 mb-3 mb-md-0 mx-auto">
						<p>Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script>. All Rights Reserved.
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>



	<div class="inner dark">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-8 mb-3 mb-md-0 mx-auto">
					</p>
				</div>

			</div>
		</div>
	</div>
	</div>

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>

	<script src="js/typed.js"></script>

	<script src="js/custom.js"></script>

</body>

</html>