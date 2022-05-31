<?php
$dbhostimi ="localhost";
$dbperdoruesi = "root";
$dbfjalkalimi = "";
$dbemri ="umaue";
//lidhect to tedhenatbase
$lidh = @mysqli_connect($dbhostimi, $dbperdoruesi, $dbfjalkalimi, $dbemri) or die("nuk mund te lidhet me tedhenatzen.");

$pyetje = "SELECT shtepia_a FROM umaue_shtepia_a_tdh";

$rezultati = mysqli_query($lidh, $pyetje);
if(!$rezultati){ echo "nuk mund te ekzekutohet"; die();}
else{

 $tedhenat = array();
  while($rresht = mysqli_fetch_assoc($rezultati)){
    $tedhenat[]=$rresht;
  }

$fp = fopen('test.json', 'w');

fwrite($fp, json_encode($tedhenat, JSON_PRETTY_PRINT));
echo "Dosja eshte krijuar";

fclose($fp);
}
?>