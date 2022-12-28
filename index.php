<!doctype html>
<?php
session_start();
if(empty($_SESSION['od']) || $_SESSION['od'] == "") {
	$_SESSION['od'] = $_SESSION['do'] = $_SESSION['datum'] = "";
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

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/daterangepicker.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">

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
				<a href="index.php" class="logo m-0">Tour <span class="text-primary">.</span></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					<li><a href="index.php">Pretrazite</a></li>
					<li><a href="pages/services.php">Objavljene voznje</a></li>
					<li><a href="pages/about.php">Inbox</a></li>
					<li><a href="pages/contact.php">Profil</a></li>
				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>


	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="intro-wrap">
						<h1 class="mb-5"><span class="d-block">Uzivajte u Vasem</span> putu do <span class="typed-words"></span></h1>

						<?php
						if($_SERVER['REQUEST_METHOD'] == 'POST') {
							if(isset($_POST['dodaj'])) {
								if(!empty($_POST['poljeOd']) && !empty($_POST['poljeDo']) && !empty($_POST['datum'])) {
									$_SESSION['od'] = $_POST['poljeOd'];
									$_SESSION['do'] = $_POST['poljeDo'];
									$_SESSION['datum'] = $_POST['datum'];
									include './php/pretraziRezervaciju.php';
								}
							}
						}
						?>

						<div class="row">
							<div class="col-12">
								<form class="form" action="pages/services.php" method="POST">
									<div class="row mb-2">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
											<select name="poljeOd" id="" class="form-control custom-select">
												<option value="">Polazim iz</option>
												<option value="beograd">Beograd</option>
												<option value="kragujevac">Kragujevac</option>
												<option value="novi sad">Novi Sad</option>
												<option value="kraljevo">Kraljevo</option>
												<option value="smederevo">Smederevo</option>
											</select>
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
											<select name="poljeDo" id="" class="form-control custom-select">
												<option value="">Idem u</option>
												<option value="beograd">Beograd</option>
												<option value="kragujevac">Kragujevac</option>
												<option value="novi sad">Novi Sad</option>
												<option value="kraljevo">Kraljevo</option>
												<option value="smederevo">Smederevo</option>
											</select>
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
											<input type="date" name="datum" class="form-control">
										</div>
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
											<input type="text" class="form-control" placeholder="Broj ljudi">
										</div>

									</div>    
									<div class="row align-items-center">
										<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
											<input type="submit" name="dodaj" class="btn btn-primary btn-block" value="Objavljene voznje">
										</div>
									</div>
								</form>
								
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="slides">
						<img src="images/hero-slider-1.jpg" alt="Image" class="img-fluid active">
						<img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid">
						<img src="images/hero-slider-3.jpg" alt="Image" class="img-fluid">
						<img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid">
						<img src="images/hero-slider-5.jpg" alt="Image" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>
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
						<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. 
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
	<script>
		$(function() {
			var slides = $('.slides'),
			images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: ["Beograda."," Novog Sada."," Kragujevca.", " Kraljeva.", " Smedereva."],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true,
				preStringTyped: (arrayPos, self) => {
					arrayPos++;
					console.log(arrayPos);
					$('.slides img').removeClass('active');
					$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
				}

			});
		})
	</script>

	<script src="js/custom.js"></script>

</body>

</html>
