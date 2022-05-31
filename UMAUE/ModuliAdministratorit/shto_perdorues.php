<?php
	include("kontroll.php");	
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
		<?php include_once("koka.php"); ?>

		<!-- Nav -->
		

			<?php include_once("meny.php"); ?>



		<!-- Banner -->
			

			

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					
				<!-- Section -->
					

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<div class="box">
							<h3>SHTO TË DHËNAT E PËRDORUESIT</h3>

										<form method="post" action="shto_p.php">
											<div class="col uniform">
												<div class="6u 12u$(xsmall)">
													<input type="text" name="perdoruesi"  value="" placeholder="Perdoruesi" />
												</div>
												<br>
												<div class="6u$ 12u$(xsmall)">
													<input type="password" name="fjalkalimi"  value="" placeholder="Fjalkalimi" />
												</div>
											    <br>
											    <div class="6u$ 12u$(xsmall)">
													<input type="email" name="email"  value="" placeholder="Email-i" />
												</div>
											    <br>
												<div class="12u$">
													<ul class="actions">
														<li><input type="submit" name="shto_p" value="Shto" /></li>
													</ul>
												</div>
											</div>
							   			</form>
							 </div>
						</div>
					</section>

			</div>

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
