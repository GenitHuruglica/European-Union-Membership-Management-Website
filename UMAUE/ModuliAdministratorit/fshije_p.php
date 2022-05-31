<?php
include("konfigurim.php");

$PID = $_GET['PID'];

$rezultati = mysqli_query($lidh,"DELETE FROM umaue_perdoruesit WHERE PID=$PID");

header("Location:perdoruesit.php");
?>