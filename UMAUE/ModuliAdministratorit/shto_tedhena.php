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
							<h3>SHTO TË DHËNAT </h3>

										<form enctype="multipart/form-data" method="post" action="shto_tdh.php">

											<div class="col uniform">
												
												<div class="6u 12u$(xsmall)">
													<input type="text" name="Titulli"  value="" placeholder="Titulli" />
												</div>
												<br>
												<div class="6u$ 12u$(xsmall)">
													<textarea name="Pershkrimi" placeholder="Pershkrimi" rows="10" cols="30"></textarea>
												</div>
											    <br>
											    <div class="6u 12u$(xsmall)">
													<input type="text" name="Dosje"  value="" placeholder="Dosje" />
												</div>
												<br>
											    <div class="6u$ 12u$(xsmall)">
													<input type="text" name="Pamja_Faqes" value="" placeholder="Pamja_Faqes" />
												</div>
												<br>
												<div class="12u$">
													<ul class="actions">
														<li><input type="submit" name="shto.tdh" value="Shto" /></li>
													</ul>
												</div>
											</div>
						                    </form>                 
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