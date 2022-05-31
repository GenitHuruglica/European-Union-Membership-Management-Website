<?php
	include("kontroll.php");	
?>
<?php
include_once("konfigurim.php");

if(isset($_POST['modifiko_p']))
{	
	$PID = $_POST['PID'];
	
	$perdoruesi=$_POST['perdoruesi'];
	$fjalkalimi=$_POST['fjalkalimi'];
	$email=$_POST['email'];	
	
	
	if(empty($perdoruesi) || empty($fjalkalimi) || empty($email)) {	
			
		if(empty($perdoruesi)) {
			echo "<font color='red'>perdoruesi field eshte e zbrazet.</font><br/>";
		}
		
		if(empty($fjalkalimi)) {
			echo "<font color='red'>fjalkalimi eshte e zbrazet.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email eshte e zbrazet.</font><br/>";
		}		
	} else {	
		
		$rezultati = mysqli_query($lidh,"UPDATE umaue_perdoruesit SET perdoruesi='$perdoruesi',fjalkalimi='$fjalkalimi',email='$email' WHERE PID=$PID");
		
		header("Location: perdoruesit.php");
	}
}
?>
<?php
$PID = $_GET['PID'];

$rezultati = mysqli_query($lidh,"SELECT * FROM umaue_perdoruesit WHERE PID=$PID");

while($res = mysqli_fetch_array($rezultati))
{
	$perdoruesi = $res['perdoruesi'];
	$fjalkalimi = $res['fjalkalimi'];
	$email = $res['email'];
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
							<h3>SHTO TË DHËNAT E PËRDORUESIT PER MODIFIKIM</h3>

										<form method="post" action="modifiko_p.php">
											<div class="col uniform">
												<div class="6u 12u$(xsmall)">
													<input type="text" name="perdoruesi"   value='<?php echo $perdoruesi;?>' placeholder="Perdoruesi" />
												</div>
												<br>
												<div class="6u$ 12u$(xsmall)">
													<input type="password" name="fjalkalimi"   value='<?php echo $fjalkalimi;?>' placeholder="Fjalkalimi" />
												</div>
											    <br>
											    <div class="6u$ 12u$(xsmall)">
													<input type="email" name="email"   value='<?php echo $email;?>' placeholder="Email-i" />
												</div>
											    <br>
												<div class="12u$">
													<ul class="actions">
														<li><input type="hidden" name="PID" value='<?php echo $_GET['PID'];?>' /></li>
														<li><input type="submit" name="modifiko_p" value="Modifiko" /></li>
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