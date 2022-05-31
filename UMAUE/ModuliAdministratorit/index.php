<?php

	include('kycu.php'); 
	if ((isset($_SESSION['perdoruesi']) != '')) 
	{
		header('Location: shtepia_administratorit.php');
	}	
?>
<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>UMAUE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			

		<!-- Nav -->
		
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Uebaplikacioni për Menaxhimin e Antarësimeve në Unionin Europian</h1>
						
					</header>
					
				</div>
			</section>
			

		<!-- Main -->
			
				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<div class="col align-left">
								<h3>Udhëzim</h3>
								<p>Për t`u kycur në webaplikacion ju duhet të keni krijuar llogarinë. Ju lutem kontaktone administratorin . </p>
							</div>
						</div>
							<!-- Form -->
							    <div class="col align-center">
										<h3>Kycja në webaplikacion</h3>

										<form method="post" action="">
											
												<ul class="actions">
														<li>
													<input type="text" name="perdoruesi" id="perdoruesi" value="" placeholder="Përdoruesit" />
												 </li>
														<li>
													<input type="password" name="fjalkalimi" id="fjalkalimi" value="" placeholder="Fjalkalimi" />
												 </li>
													</ul>
												
												
												<div class="12u$">
														<input type="submit" name="paraqit" value="Kycu" class="primary" />	
								</div>				</div>
					</section>

			

		<!-- Footer -->
		

					<?php include_once("fundifaqes.php"); ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>