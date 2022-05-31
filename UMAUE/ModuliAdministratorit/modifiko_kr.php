<?php
	include("kontroll.php");	
?>

<?php
include_once("konfigurim.php");

if(isset($_POST['modifiko_kr']))
{	
	$ID_Kerkese = $_POST['ID_Kerkese'];
	$Emri_Shtetit = $_POST['Emri_Shtetit'];
	$Gjuha = $_POST['Gjuha'];
	$Numri_Popullsise = $_POST['Numri_Popullsise'];
	$Arsyet = $_POST['Arsyet'];
	$Email = $_POST['Email'];	
	$ID_Kontinenti = $_POST['ID_Kontinenti'];	
	
	$Foto_Flamurit =addslashes (file_get_contents($_FILES['Foto_Flamurit']['tmp_name']));
	$Emri_Dosjes = $_FILES['Foto_Flamurit']['name'];
	$maxsize = 10000000; 
	
	
	if(empty($Emri_Shtetit) || empty($Gjuha) || empty($Arsyet) || empty($Email)) {	
			
		if(empty($Emri)) {
			echo "<font color='red'>Fusha Emri_Shtetit eshte e zbrazet.</font><br/>";
		}
		
		if(empty($Gjuha)) {
			echo "<font color='red'>Fusha Gjuha eshte zbrazet.</font><br/>";
		}
		if(empty($Arsyet)) {
			echo "<font color='red'>Fusha Arsyet eshte zbrazet.</font><br/>";
		}
		if(empty($Email)) {
			echo "<font color='red'>Fusha Email eshte zbrazet.</font><br/>";
		}
				
	} else {	
		
		$rezultati = mysqli_query($lidh,"UPDATE umaue_kerkese SET Emri_Shtetit='$Emri_Shtetit',Gjuha='$Gjuha',Numri_Popullsise='$Numri_Popullsise',Arsyet='$Arsyet',Email='$Email',ID_Kontinenti='$ID_Kontinenti',Foto_Flamurit='$Foto_Flamurit',Emri_Dosjes='$Emri_Dosjes'  WHERE ID_Kerkese=$ID_Kerkese");
		
		header("Location: kerkesat.php");
	}
}
?>
<?php
$ID_Kerkese = $_GET['ID_Kerkese'];

$rezultati = mysqli_query($lidh,"SELECT * FROM umaue_kerkese WHERE ID_Kerkese=$ID_Kerkese");

while($res = mysqli_fetch_array($rezultati))
{
	$Emri_Shtetit = $res['Emri_Shtetit'];
	$Gjuha = $res['Gjuha'];
	$Numri_Popullsise = $res['Numri_Popullsise'];
	$Arsyet = $res['Arsyet'];
	$Email = $res['Email'];	
	$ID_Kontinenti = $res['ID_Kontinenti'];
}
?>
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
							<h3>SHTO TË DHËNAT E KËRKESËS PËR MODIFIKIM</h3>

										<form enctype="multipart/form-data" method="post" action="modifiko_kr.php" name="form1" >

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
													<input type="text" name="Emri_Shtetit" id="Emri_Shtetit"  value="<?php echo $Emri_Shtetit;?>" placeholder="Emri_Shtetit" required /> 
												</div>
												<br>
												<div class="6u$ 12u$(xsmall)">
													<input type="text" name="Gjuha" id="Gjuha"  value="<?php echo $Gjuha;?>" placeholder="Gjuha" required />
												</div>
											    <br>
											    <div class="6u$ 12u$(xsmall)">
													<input type="text" name="Numri_Popullsise" id="Numri_Popullsise" value="<?php echo $Numri_Popullsise;?>" placeholder="Numri_Popullsise" required />
												</div>
												<br>
												<div class="6u$ 12u$(xsmall)">
													<input type="text" name="Arsyet" id="Arsyet"  value="<?php echo $Arsyet;?>" placeholder="Aresyet e kerkeses per antaresim" required />
												</div>
											    <br>
											    <div class="6u$ 12u$(xsmall)">
													<input type="text" name="Email" id="Email"  value="<?php echo $Email;?>" placeholder="Email" required />
												</div>
											    <br>
												<div class="6u$ 12u$(xsmall)">
													Foto_Flamurit : 
													<input type="hidden" name="Emri_Dosjes" value="10000000" />
													<input name="Foto_Flamurit"  type="file" />
												</div>
												<br>
												<div class="12u$">
													
														<input type="hidden" name="ID_Kerkese"  value='<?php echo $_GET['ID_Kerkese'];?>' />
														<input type="submit" name="modifiko_kr"  value="Modifiko" />
													
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