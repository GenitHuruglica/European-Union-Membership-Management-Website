<?php
    session_start();
    require("dbcontroller.php");
	$dbController = new DBController();
	
	$pergjigje_id = $_POST['answer'];
	$pyetje_id = $_POST['question'];
	
	$pyetje = "INSERT INTO umaue_t_sondazhi(pyetje_id,pergjigje_id,antar_id) VALUES ('" . $pyetje_id ."','" . $pergjigje_id . "','" . $_SESSION["antar_id"] . "')";
    $insert_id = $dbController->insertQuery($pyetje);
    
    if(!empty($insert_id)) {
        $pyetje = "SELECT * FROM umaue_t_pergjigjet WHERE pyetje_id = " . $pyetje_id;
        $answer = $dbController->runQuery($pyetje);
    }
    
    if(!empty($answer)) {
?>        
        <div class="poll-heading"> Rezultati </div> 
<?php
        $pyetje = "SELECT count(pergjigje_id) as total_count FROM umaue_t_sondazhi WHERE pyetje_id = " . $pyetje_id;
        $total_rating = $dbController->runQuery($pyetje);

        foreach($answer as $k=>$v) {
            $pyetje = "SELECT count(pergjigje_id) as answer_count FROM umaue_t_sondazhi WHERE pyetje_id = " .$pyetje_id . " AND pergjigje_id = " . $answer[$k]["id"];
            $answer_rating = $dbController->runQuery($pyetje);
            $answers_count = 0;
            if(!empty($answer_rating)) {
                $answers_count = $answer_rating[0]["answer_count"];
            }
            $percentage = 0;
            if(!empty($total_rating)) {
                $percentage = ( $answers_count / $total_rating[0]["total_count"] ) * 100;
                if(is_float($percentage)) {
                    $percentage = number_format($percentage,2);
                }
            }
            
?>
		<div class="answer-rating"> <span class="answer-text"><?php echo $answer[$k]["pergjigje"]; ?></span><span class="answer-count"> <?php echo $percentage . "%"; ?></span></div>      
<?php 
        }
    }
?>
<div class="poll-bottom">
	<button class="next-link" onClick="show_poll();">Vazhdo</button>
</div>