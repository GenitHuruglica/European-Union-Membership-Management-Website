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

 if(isset($_POST['shto_tdh']))
{	
	$Titulli = $_POST['Titulli'];
	$Pershkrimi = $_POST['Pershkrimi'];
	$Dosje = $_POST['Dosje'];
	$Pamja_Faqes = $_POST['Pamja_Faqes'];

	
	
	if(empty($Titulli) || empty($Pershkrimi) || empty($Dosje) || empty($Pamja_Faqes))
	 {
		if(empty($Titulli)) {echo "<font color='red'>Fusha Titulli eshte e zbrazet.</font><br/>";}

		if(empty($Pershkrimi)) {echo "<font color='red'> Fusha Pershkrimi eshte e zbrazet.</font><br/>";}

		if(empty($Dosje)) {echo "<font color='red'> Fusha Dosje eshte e zbrazet.</font><br/>";}

		if(empty($Pamja_Faqes)) {echo "<font color='red'> Fusha Pamja_Faqes eshte e zbrazet.</font><br/>";}
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	 } 
		else 
	  { 	
		$rezultati = mysqli_query($lidh, "INSERT INTO umaue_tedhenat(Titulli,Pershkrimi,Dosje,Pamja_Faqes) VALUES('$Titulli','$Pershkrimi','$Dosje','$Pamja_Faqes')");
		

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