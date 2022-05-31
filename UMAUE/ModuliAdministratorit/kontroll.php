<?php
include('konfigurim.php');
session_start();
$kontrolli_perdoruesit=$_SESSION['perdoruesi'];
$ses_sql = mysqli_query($lidh,"SELECT perdoruesi FROM umaue_perdoruesit WHERE perdoruesi='$kontrolli_perdoruesit' ");
$rresht=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$kycja_perdoruesit=$rresht['perdoruesi'];
if(!isset($kontrolli_perdoruesit))
{ header("Location: tregues.php");} 
?>