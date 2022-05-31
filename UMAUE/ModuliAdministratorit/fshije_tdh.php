<?php
include("konfigurim.php");

$ID_Tedhenat = $_GET['ID_Tedhenat'];

$rezultati = mysqli_query($lidh,"DELETE FROM umaue_tedhenat WHERE ID_Tedhenat=$ID_Tedhenat");

header("Location:ballina.php");
?>
