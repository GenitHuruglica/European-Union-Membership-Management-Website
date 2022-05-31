<?php
	session_start();
	include("konfigurim.php"); 
	
	$error = "";
	if(isset($_POST["paraqit"]))
	{
		if(empty($_POST["perdoruesi"]) || empty($_POST["fjalkalimi"]))
		{
			$error = "Dy fushat jane te zbrazeta.";
		}else
		{
			
			$perdoruesi=$_POST['perdoruesi'];
			$fjalkalimi=$_POST['fjalkalimi'];
			
			$sql="SELECT PID FROM umaue_perdoruesit WHERE perdoruesi='$perdoruesi' 
			and fjalkalimi='$fjalkalimi'";
			$rezultati=mysqli_query($lidh,$sql);
			$rresht=mysqli_fetch_array($rezultati,MYSQLI_ASSOC);
			if(mysqli_num_rows($rezultati) == 1)
			{
				$_SESSION['perdoruesi'] = $perdoruesi; 
				header("location: shtepia_administratorit.php"); 
			}else
			{
				$error = "Keni dhene gabim perdoruesin ose fjalkalimin.";
			}
		}
	}
?>