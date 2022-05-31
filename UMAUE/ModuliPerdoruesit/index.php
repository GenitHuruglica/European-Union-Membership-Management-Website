<?php include_once("konfigurim.php"); ?>
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
			
				<br>
				<header class="align-center">
								<h2>SHTET ANETARE TE UNIONIT EUROPIAN</h2>	
				</header>
                <hr/>
				<!-- Section -->
				<section class="wrapper style1">
						<div class="inner">
							<div class="flex flex-3">

							<?php
            $rezultati = mysqli_query($lidh, "SELECT  f.Kontinenti,s.Emri_Shtetit,s.Gjuha,s.Numri_Popullsise,s.Foto_Flamurit,s.Emri_Dosjes FROM umaue_shtetet s
LEFT OUTER JOIN umaue_kontinentet f ON s.ID_Kontinenti = f.ID_Kontinenti
GROUP BY f.Kontinenti,s.Emri_Shtetit,s.Gjuha,s.Numri_Popullsise,s.Foto_Flamurit,s.Emri_Dosjes
ORDER BY f.ID_Kontinenti, s.ID_Kontinenti DESC");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
							
							
								<div class="col align-center">
									<div class="box">
									   <div class="image round fit">
										<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $rresht['Foto_Flamurit'] ).'" width="100%" height="100%">'; ?>
									    </div>
									<h3><?php echo $Emri_Shtetit; ?> </h3>
									 <p>Kontinenti: <?php echo $Kontinenti; ?> </p>
									 <p>Gjuha: <?php echo $Gjuha; ?> </p>
									 <p>Numri Popullsise: <?php echo $Numri_Popullsise; ?> </p>
								     </div>
								</div>
							    
							
							    <?php } ?>
							
								
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
