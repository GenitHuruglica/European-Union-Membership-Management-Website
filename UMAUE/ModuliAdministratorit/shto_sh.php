<html>
	<head>
		<title>UMAUE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
 <?php
 include_once("konfigurim.php");

 if(isset($_POST['shto_sh']))
{	
	$Emri_Shtetit = $_POST['Emri_Shtetit'];
	$Gjuha = $_POST['Gjuha'];
	$Numri_Popullsise = $_POST['Numri_Popullsise'];
	$ID_Kontinenti = $_POST['ID_Kontinenti'];

    $Foto_Flamurit =addslashes (file_get_contents($_FILES['Foto_Flamurit']['tmp_name']));
	$Emri_Dosjes = $_FILES['Foto_Flamurit']['name'];

	
	 $maxsize = 10000000; //set to approx 10 MB

		
	
	if(empty($Emri_Shtetit) || empty($Gjuha))
	 {
		if(empty($Emri_Shtetit)) {echo "<font color='red'>Fusha Emri_Shtetit eshte e zbrazet.</font><br/>";}

		if(empty($Gjuha)) {echo "<font color='red'> Fusha Gjuha eshte e zbrazet.</font><br/>";}
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	 } 
		else 
	  { 	
		$rezultati = mysqli_query($lidh, "INSERT INTO umaue_shtetet(Emri_Shtetit,Gjuha,Numri_Popullsise,ID_Kontinenti,Foto_Flamurit,Emri_Dosjes) VALUES('$Emri_Shtetit','$Gjuha','$Numri_Popullsise','$ID_Kontinenti','$Foto_Flamurit','$Emri_Dosjes')");
		

		echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
         }, 3000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 3 sekonda. <b></p>";
	
	  }
 }
 ?>
 </body>
</html>