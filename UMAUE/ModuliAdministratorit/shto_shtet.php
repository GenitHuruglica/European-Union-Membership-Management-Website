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
							<h3>SHTO TË DHËNAT E SHTETIT</h3>

										<form enctype="multipart/form-data" method="post" action="shto_sh.php" >

											<div class="col uniform">
												<div class="6u 12u$(xsmall)">
														<select name="ID_Kontinenti" id="ID_Kontinenti">
															<option selected="selected">Zgjedh Kontinentin</option>
															<?php
														$res=mysqli_query($lidh,"SELECT * FROM umaue_kontinentet");
														while($rresht=$res->fetch_array())
														{
															?>
															<option value="<?php echo $rresht['ID_Kontinenti']; ?>">
															<?php echo $rresht['Kontinenti']; ?>
															</option>
															<?php
														}
														?>
														</select>
													</div>
													<br>
												<div class="6u 12u$(xsmall)">
													<input type="text" name="Emri_Shtetit" id="Emri_Shtetit" value="" placeholder="Emri_Shtetit" />
												</div>
												<br>
												<div class="6u$ 12u$(xsmall)">
													<input type="text" name="Gjuha"  value="" placeholder="Gjuha" />
												</div>
											    <br>
											    <div class="6u$ 12u$(xsmall)">
													<input type="text" name="Numri_Popullsise" value="" placeholder="Numri_Popullsise" />
												</div>
												<br>
												<div class="6u$ 12u$(xsmall)">
													Foto_Flamurit : 
													<input type="hidden" name="Emri_Dosjes" value="10000000" />
													<input name="Foto_Flamurit"  type="file" />
												</div>
											    <br>
												<div class="12u$">
													<ul class="actions">
														<li><input type="submit" name="shto_sh"  value="Shto" /></li>
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