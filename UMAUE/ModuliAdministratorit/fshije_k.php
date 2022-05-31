<?php
include("konfigurim.php");


$ID_Kontinenti = $_GET['ID_Kontinenti'];


$rezultati = mysqli_query($lidh,"DELETE FROM umaue_kontinentet WHERE ID_Kontinenti=$ID_Kontinenti");

header("Location:ballina.php");
?>
