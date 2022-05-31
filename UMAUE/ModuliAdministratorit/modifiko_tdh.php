<?php
	include("kontroll.php");	
?>
<?php

include_once("konfigurim.php");

if(isset($_POST['modifiko_tdh']))
{	
	$id_tedhenat = $_POST['ID_Tedhenat'];
	
	$titulli=$_POST['Titulli'];
	$pershkrimi=$_POST['Pershkrimi'];
	$dosje=$_POST['Dosje'];	
		$pamja_faqes=$_POST['Pamja_Faqes'];	
	if(empty($titulli) || empty($pershkrimi) || empty($dosje) || empty($pamja_faqes)){	
			
		if(empty($titulli)) {
			echo "<font color='red'>Titulli eshte i zbrazet.</font><br/>";
		}
		
		if(empty($pershkrimi)) {
			echo "<font color='red'>Pershkrimi eshte i zbrazet.</font><br/>";
		}
		
		if(empty($dosje)) {
			echo "<font color='red'>Dosje eshte e zbrazet.</font><br/>";
		}	
	if(empty($pamja_faqes)) {
			echo "<font color='red'>Pamja_Faqes eshte e zbrazet.</font><br/>";
		}		
	} else {	
		
		$rezultati = mysqli_query($lidh,"UPDATE umaue_tedhenat SET Titulli='$titulli',Pershkrimi='$pershkrimi',Dosje='$dosje',Pamja_Faqes='$pamja_faqes' WHERE ID_Tedhenat=$id_tedhenat");
		
		
		header("Location: ballina.php");
	}
}
?>
<?php

$id_tedhenat = $_GET['ID_Tedhenat'];


$rezultati = mysqli_query($lidh,"SELECT * FROM umaue_tedhenat WHERE ID_Tedhenat=$id_tedhenat");

while($res = mysqli_fetch_array($rezultati))
{
	$titulli = $res['Titulli'];
	$pershkrimi = $res['Pershkrimi'];
	$dosje = $res['Dosje'];
		$pamja_faqes = $res['Pamja_Faqes'];
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
							<h3>SHTO TË DHËNAT PËR MODIFIKIM</h3>

				<form  method="post" action="modifiko_tdh.php">
				
				<div class="6u 12u$(xsmall)">
				<input type="text" placeholder="Titulli" name="Titulli" value='<?php echo $titulli;?>'    required />
				</div>
				<br>
				<div class="6u 12u$(xsmall)">
				<textarea name="Pershkrimi" placeholder="Pershkrimi" rows="10" cols="30"><?php echo $pershkrimi;?></textarea>
				</div>
				<br>
				<div class="6u 12u$(xsmall)">
				<input type="text" name="Dosje" placeholder="Dosje" value='<?php echo $dosje;?>'   required /> 
				</div>
				<br >
				<div class="6u 12u$(xsmall)">
				<input type="text" placeholder="Pamja_Faqes" name="Pamja_Faqes" value='<?php echo $pamja_faqes;?>'   required />
				</div>
				<br >
				<div class="12u$">									
				<input type="hidden" name="ID_Tedhenat" value='<?php echo $_GET['ID_Tedhenat'];?>' />
				<input type="submit" name="modifiko_tdh" value="Modifiko">									
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