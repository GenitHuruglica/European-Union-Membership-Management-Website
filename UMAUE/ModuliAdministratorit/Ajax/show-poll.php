<html>
<head>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />

		
<?php
include('../konfigurim.php');
session_start();
$kontrolli_perdoruesit=$_SESSION['perdoruesi'];
$ses_sql = mysqli_query($lidh,"SELECT PID, perdoruesi FROM umaue_perdoruesit WHERE perdoruesi='$kontrolli_perdoruesit' ");
$rresht=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$kycja_perdoruesit=$rresht['perdoruesi'];
if(!isset($kontrolli_perdoruesit))
{ header("Location: index.php");} 

	
    $_SESSION["antar_id"] =  $rresht['PID'];
    
	require("dbcontroller.php");
	$dbController = new DBController();
	
	$pyetje = "SELECT DISTINCT pyetje_id from umaue_t_sondazhi WHERE antar_id = " . $_SESSION["antar_id"]; 
	$rezultati = $dbController->getids($pyetje);
	
	$condition = "";
	if(!empty($rezultati)) {
	    $condition = " WHERE id NOT IN (" . implode(",", $rezultati) . ")";
    }
    
    $pyetje = "SELECT * FROM `umaue_t_pyetje` " . $condition . " limit 1";
    $pyetjet = $dbController->runQuery($pyetje);
    
    if(!empty($pyetjet)) {
?>      
		<div class="question"><?php echo $pyetjet[0]["pyetje"]; ?><input type="hidden" name="pyetjet" id="question" value="<?php echo $pyetjet[0]["id"]; ?>" ></div>      
<?php 
        $pyetje = "SELECT * FROM umaue_t_pergjigjet WHERE pyetje_id = " . $pyetjet[0]["id"];
        $pergjigjet = $dbController->runQuery($pyetje);
        if(!empty($pergjigjet)) {
            foreach($pergjigjet as $k=>$v) {
                ?>
			<div class="question"><input type="radio" name="answer" class="radio-input" value="<?php echo $pergjigjet[$k]["id"]; ?>" /><?php echo $pergjigjet[$k]["pergjigje"]; ?></div>      
<?php 
            }
        }
?>
		<div class="poll-bottom">
			<button id="btnSubmit" onClick="addPoll()">Dergo</button>
		</div>
<?php        
    } else {
?>

<div class="error">Votimi perfundoi me sukses!</div>

<?php 
    }
?>