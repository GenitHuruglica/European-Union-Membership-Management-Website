<?php
	include("kontroll.php");	
?>
<?php
include_once("konfigurim.php");

$rezultati = mysqli_query($lidh,
"SELECT * FROM umaue_perdoruesit ORDER BY PID DESC");
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
												<h4>KËRKO TË DHËNAT E PËRDORUESIT PËR MODIFIKIM</h4>
												<hr/>
												<div class="12u$">
													<ul class="actions">
														<li><input type="text" name="modifiko"  value="" placeholder="Përdoruesin ose Email-in" /></li>
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
														<th>Perdoruesi</th>
														<th>Fjalkalimi</th>
														<th>Email-i</th>
														<th>Modifiko</th>
													</tr>
												</thead>
												<?php
if (!empty($_REQUEST['modifiko'])) {
$term = mysqli_real_escape_string
($lidh,$_REQUEST['modifiko']);     
$sql = mysqli_query($lidh,
"SELECT * FROM umaue_perdoruesit 
WHERE perdoruesi LIKE '%".$term."%' 
OR  email LIKE '%".$term."%'"); 
while($rresht = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$rresht['perdoruesi']."</td>";
		echo "<td>".$rresht['fjalkalimi']."</td>";
		echo "<td>".$rresht['email']."</td>";	
		echo "<td><a href=\"modifiko_p.php?PID=$rresht[PID]\" class='button' class='button primary'>
		Modifiko</a></td></tr>";		
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