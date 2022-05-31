<?php
include("konfigurim.php");
$ID_Shteti = $_GET['ID_Shteti'];

$rezultati = mysqli_query($lidh,"DELETE FROM umaue_shtetet WHERE ID_Shteti=$ID_Shteti");


header("Location:ballina.php");
?>

