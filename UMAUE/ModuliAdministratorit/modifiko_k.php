<?php
	include("kontroll.php");	
?>
<?php
include_once("konfigurim.php");

if(isset($_POST['modifiko_k']))
{	
	$ID_Kontinenti = $_POST['ID_Kontinenti'];
	
	$Kontinenti=$_POST['Kontinenti'];
	
	
	
	if(empty($Kontinenti) ) {	
			
		if(empty($Kontinenti)) {
			echo "<font color='red'>Fusha kontinentit eshte e zbrazet.</font><br/>";
		}
		
	
	} else {	
	
		$rezultati = mysqli_query($lidh,"UPDATE umaue_kontinentet SET Kontinenti='$Kontinenti' WHERE ID_Kontinenti=$ID_Kontinenti");
		
		
		header("Location: ballina.php");
	}
}
?>

<?php

$ID_Kontinenti = $_GET['ID_Kontinenti'];


$rezultati = mysqli_query($lidh,"SELECT * FROM umaue_kontinentet WHERE ID_Kontinenti=$ID_Kontinenti");

while($res = mysqli_fetch_array($rezultati))
{
	$Kontinenti = $res['Kontinenti'];
	
}
?>

<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>UMAUE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
		<?php include_once("koka.php"); ?>

		<!-- Nav -->
		

	    <?php include_once("meny.php"); ?>



		<!-- Banner -->
			
			

			

		<!-- Main -->
			<div id="main">

				<!-- Section -->
				  
			        
					<section class="wrapper style1">
						
						
					<form Kontinenti="form1" method="post" action="modifiko_k.php">
											<div class="col align-center">
												<h4>KËRKO TË DHËNAT E KONTINENTEVE PËR MODIFIKIM</h4>
												<hr/>
												<div class="12u$">
													<ul class="actions">
														<li><input type="text" name="Kontinenti"  value='<?php echo $Kontinenti;?>' placeholder="Kontinenti"     required/></li>
														<li><input type="hidden" name="ID_Kontinenti"  value='<?php echo $_GET['ID_Kontinenti'];?>' placeholder="Kontinenti" required/></li>
														<li><input type="submit" name="modifiko_k" value="Modifiko" /></li>
													</ul>
												</div>
											</div>
										</form>
										<hr/>


										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>Kontinenti</th>
														<th>Modifiko</th>
														
													</tr>
												</thead>
												<?php
                                                     if (!empty($_REQUEST['kontinent'])) {
                                                     $term = mysqli_real_escape_string
                                                     ($lidh,$_REQUEST['kontinent']);     
                                                     $sql = mysqli_query($lidh,
                                                     "SELECT * FROM umaue_kontinentet 
                                                     WHERE Kontinenti LIKE '%".$term."%'"); 
                                                     while($rresht = mysqli_fetch_array($sql)) { 		
		                                                  echo "<tr>";
		                                                  echo "<td>".$rresht['Kontinenti']."</td>";
		                                                  echo "<td><a href=\"modifiko_k.php?ID_Kontinenti=$rresht[ID_Kontinenti]\" class='button' class='button primary'>
		                                                  Modifiko</a></td></tr>";		
	}

}

?>
								
												
											</table>
										</div>
					</section>
					
			
					

			</div>

		<!-- Footer -->
			<?php include_once("fundifaqes.php"); ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>