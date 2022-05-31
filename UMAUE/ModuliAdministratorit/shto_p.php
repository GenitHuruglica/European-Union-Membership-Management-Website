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

if(isset($_POST['shto_p'])) {	
	$perdoruesi = $_POST['perdoruesi'];
	$fjalkalimi = $_POST['fjalkalimi'];
	$email = $_POST['email'];
		
	if(empty($perdoruesi) || empty($fjalkalimi) || empty($email)) {			
		if(empty($perdoruesi)) {echo "<font color='red'>Fusha perdoruesi eshte e zbrazet.</font><br/>";}
		if(empty($fjalkalimi)) {echo "<font color='red'>Fusha fjalkalimi eshte e zbrazet.</font><br/>";}
		if(empty($email)) {echo "<font color='red'> fusha Email eshte e zbrazet.</font><br/>";}
		
		echo "<br/><a href='javascript:self.history.back();'>Kthehu mbrapa</a>";
	} else { 
		 
		
		$rezultati = mysqli_query($lidh, "INSERT INTO umaue_perdoruesit(perdoruesi,fjalkalimi,email) VALUES('$perdoruesi','$fjalkalimi','$email')");
		
	echo "<script>
         setTimeout(function(){
            window.location.href = 'perdoruesit.php';
         }, 3000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 3 sekonda. <b></p>";
	
		
	}
}
?>
</body>
</html>