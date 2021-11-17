<!DOCTYPE html>
<html lang="fr"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Click Boissons</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/custom.css">

</head>

<SCRIPT language="JavaScript">
  function cacherDiv() {
       document.getElementById("reussie").style.display = "none";
  }
	function cacherDiv2() {
			 document.getElementById("erreur").style.display = "none";
	}
	</SCRIPT>
	<?php
		ini_set('display_errors', 'off');
		if($_GET['msg'] == 2) { ?>
		<body onload="setTimeout(cacherDiv2,2000);">
			<div id="erreur" class="erreur">
				<?php echo "Veuillez réessayer plus tard !";}?>
			</div>
		</body>

	<?php
		ini_set('display_errors', 'off');
		if($_GET['msg'] == 1) { ?>
			<body onload="setTimeout(cacherDiv,2000);">
				<div id="reussie" class="message">
					<?php echo "Message envoyé avec succès !";}?>
				</div>
			</body>


<body>
	<!-- Navbar -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="accueil.html">
					<img src="../images/logo_CB.png"/>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="accueil.html">Accueil</a></li>
						<li class="nav-item"><a class="nav-link" href="societe.html">La société</a></li>
						<li class="nav-item"><a class="nav-link" href="produits.html">Produits</a></li>
						<li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
						<li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- Navbar -->

	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

	<!--  Contact -->
	<section class="contact-us">
            <div class="container">
							<div class="row">
								<div class="col-lg-12">
									<div class="heading-title text-center">
										<h2>Nous Contacter</h2>
										<p style="color:#482382">Vous avez une question ?</p>
										<p style="color:#482382">N'hésitez pas à nous en faire part, nous vous répondrons dans les meilleurs délais !</p>
									</div>
								</div>
							</div>
                <div class="row">
                    <div class="col-lg-7">
                        <form action="../traitement/contact.php" method="POST" class="mb-4 mb-lg-0">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" required/>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required/>
                                </div>
                            </div>
														<div class="form-group">
															<div class="form-group">
																<select class="custom-select d-block form-control" name="sujet" id="sujet" placeholder="Sujet" required>
																  <option disabled selected>Quel est le sujet de votre demande ?</option>
																  <option value="Information">Information</option>
																  <option value="Recrutement">Recrutement</option>
																	<option value="Devis">Devis</option>
																</select>
																<div class="help-block with-errors"></div>
															</div>
														</div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-submit">Envoyer</button>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <div class="map">
														<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2614.7521815310747!2d2.162667915095559!3d49.053335394915464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e65e51a925baa7%3A0x9309ab8688d75d9b!2s21%20Chem.%20des%20B%C5%93ufs%2C%2095540%20M%C3%A9ry-sur-Oise!5e0!3m2!1sfr!2sfr!4v1634726724192!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section><p></p>
	<!--  Contact -->

	<!-- Informations -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Téléphone</h4>
						<p class="lead">
							01 34 48 00 77
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>E-mail</h4>
						<p class="lead"><a href="contact.php" class="lead">contact@click-boissons.fr</a></p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Position</h4>
					<p class="lead">21 chemin des Bœufs,<p class="lead">95540 Méry-sur-Oise</p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Informations -->


	<!-- Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>Navigation</h3>
					<p><a href="accueil.html">Accueil</a></p>
					<p><a href="societe.html">La société</a></p>
					<p><a href="produits.html">Produits</a></p>
					<p><a href="services.html">Services</a></p>
					<p><a href="contact.php">Contact</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Horaires</h3>
					<p><span class="text-color">Lundi - Vendredi :</span> 9h-12h | 13h-17h</p>
					<p><span class="text-color">Samedi - Dimanche :</span> Fermé </p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Informations</h3>
					<p class="lead">21 chemin des Bœufs,<p class="lead">95540 Méry-sur-Oise</p></p>
					<p class="lead">01 34 48 00 77</a></p>
					<p class="lead">contact@click-boissons.fr</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Réseaux sociaux</h3>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://www.facebook.com/Click-Boissons-111114248024147"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.linkedin.com/company/click-boissons/?viewAsMember=true"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/clickboissons/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">&copy; 2021 | CLICK BOISSONS</p>
						<p class="company-name">L'abus d'alcool est dangereux pour la santé à comsommer avec modération !</p>
						<p class="company-name"><a href="../images/Mentions_légales.pdf">Mentions légales</a> | <a href="../images/Politique_confidentialité.pdf">Politique de Confidentialité</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- Script -->

		<script src="../js/jquery-3.2.1.min.js"></script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/jquery.superslides.min.js"></script>
		<script src="../js/images-loded.min.js"></script>
		<script src="../js/isotope.min.js"></script>
		<script src="../js/baguetteBox.min.js"></script>
		<script src="../js/form-validator.min.js"></script>
	  <script src="../js/contact-form-script.js"></script>
	  <script src="../js/custom.js"></script>

		<script src="../contactform/js/jquery.min.js"></script>
  	<script src="../contactform/js/popper.js"></script>
  	<script src="../contactform/js/bootstrap.min.js"></script>
  	<script src="../contactform/js/jquery.validate.min.js"></script>
  	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  	<script src="../contactform/js/google-map.js"></script>
  	<script src="../contactform/js/main.js"></script>

		<!-- Script -->

</body>
</html>
