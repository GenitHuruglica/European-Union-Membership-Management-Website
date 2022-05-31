<?php
	include("kontroll.php");	
?>
<?php
include_once("konfigurim.php");

$rezultati = mysqli_query($lidh,
"SELECT * FROM umaue_tedhenat ORDER BY ID_Tedhenat DESC");
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
				  
			        
					<section class="wrapper style1">
						
						
					<form method="post" action="#">
											<div class="col align-center">
												<hr/>
												<h4>KËRKO TË DHËNAT  PËR FSHIRJE</h4>
												<hr/>
												<div class="12u$">
													<ul class="actions">
														<li><input type="text" name="fshije"  value="" placeholder="Titulli ose Pamja_Faqes" /></li>
														<li><input type="submit"  value="Kerko" /></li>
													</ul>
												</div>
											</div>
										</form>
										<hr/>


										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>Titulli</th>
														<th>Pershkrimi</th>
														<th>Dosje</th>
														<th>Pamja_Faqes</th>
														<th>Fshijë</th>
													</tr>
												</thead>
												<?php
if (!empty($_REQUEST['fshije'])) {
$term = mysqli_real_escape_string
($lidh,$_REQUEST['fshije']);     
$sql = mysqli_query($lidh,
"SELECT * FROM umaue_tedhenat 
WHERE Titulli LIKE '%".$term."%' 
OR  Pamja_Faqes LIKE '%".$term."%'"); 
while($rresht = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$rresht['Titulli']."</td>";
		echo "<td>".$rresht['Pershkrimi']."</td>";
		echo "<td>".$rresht['Dosje']."</td>";	
		echo "<td>".$rresht['Pamja_Faqes']."</td>";	
		echo "<td><a href=\"fshije_tdh.php?ID_Tedhenat=$rresht[ID_Tedhenat]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini te dhenen?')\" class='button' class='button primary'>Fshijë</a></td> </td>";				
	}

}

?>
												

													
												
											</table>
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