<?php
include("konfigurim.php");
$ID_Kerkese = $_GET['ID_Kerkese'];

$rezultati = mysqli_query($lidh,"DELETE FROM umaue_kerkese WHERE ID_Kerkese=$ID_Kerkese");


header("Location:kerkesat.php");
?>
