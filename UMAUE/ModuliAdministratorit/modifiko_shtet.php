<?php
	include("kontroll.php");	
?>
<?php
include_once("konfigurim.php");

$rezultati = mysqli_query($lidh,
"SELECT * FROM umaue_kontinentet ORDER BY ID_Kontinenti DESC");
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
			

				<!-- Section -->
				  
			        
					<section class="wrapper style1">
						
						
				                    	<form method="post" action="#">
											<div class="col align-center">
												<hr/>
												<h4>KËRKO TË DHËNAT E SHTETIT PËR MODIFIKIM</h4>
												<hr/>
												<div class="12u$">
													<ul class="actions">
														<li><input type="text" name="modifiko_sh"  value="" placeholder="Emri_Shtetit" /></li>
														<li><input type="submit" value="Kerko" /></li>
													</ul>
												</div>
											</div>
										</form>
										<hr/>


										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>Emri_Shtetit</th>
														<th>Gjuha</th>
														<th>Numri_Popullsise</th>
														<th>Kontinenti</th>
														<th>Foto_Flamurit</th>
														<th>Emri_Dosjes</th>
														<th>Modifiko</th>
													</tr>
												</thead>
												
<?php
	if (!empty($_REQUEST['modifiko_sh'])) {

	$term = mysqli_real_escape_string($lidh,$_REQUEST['modifiko_sh']);     

	$sql = mysqli_query($lidh,	
"SELECT
	s.ID_Shteti,
  s.Emri_Shtetit,
  s.Gjuha,
  s.Numri_Popullsise,
  k.Kontinenti,
  s.Foto_Flamurit,
  s.Emri_Dosjes

FROM
  umaue_shtetet s
INNER JOIN
  umaue_kontinentet k ON s.ID_Kontinenti = k.ID_Kontinenti
WHERE
  s.Emri_Shtetit LIKE '%".$term."%'"
	); 

	while($rresht = mysqli_fetch_array($sql)) { 		
			echo "<tr>";
			echo "<td>".$rresht['Emri_Shtetit']."</td>";
			echo "<td>".$rresht['Gjuha']."</td>";
			echo "<td>".$rresht['Numri_Popullsise']."</td>";
			echo "<td>".$rresht['Kontinenti']."</td>";	
			
			
			echo "<td><img src=data:image/jpeg;base64,".base64_encode($rresht['Foto_Flamurit'])." width='80'  height='100'/></td>";
			echo "<td>".$rresht['Emri_Dosjes']."</td>";	
			
			echo "<td><a href=\"modifiko_sh.php?ID_Shteti=$rresht[ID_Shteti]\" class='button' class='button primary'>Modifiko</a> </td>";			
		}

	}

	?>
													
												
											</table>
										</div>
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