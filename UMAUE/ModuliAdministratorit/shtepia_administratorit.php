<?php

	include("kontroll.php");	
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
				<script src="jquery.js"></script>


	
	<script>
    $(document).ready(function () {
        $.getJSON("test.json", function (data) {

            var arrItems = [];      // THE ARRAY TO STORE JSON ITEMS.
            $.each(data, function (index, value) {
                arrItems.push(value);       // PUSH THE VALUES INSIDE THE ARRAY.
            });

            // EXTRACT VALUE FOR TABLE HEADER.
            var col = [];
            for (var i = 0; i < arrItems.length; i++) {
                for (var key in arrItems[i]) {
                    if (col.indexOf(key) === -1) {
                        col.push(key);
                    }
                }
            }

            // CREATE DYNAMIC TABLE.
            var table = document.createElement("table");

            // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

            var tr = table.insertRow(-1);                   // TABLE ROW.

           /* for (var i = 0; i < col.length; i++) {
                var th = document.createElement("th");      // TABLE HEADER.
                th.innerHTML = col[i];
                tr.appendChild(th);
            }*/

            // ADD JSON DATA TO THE TABLE AS ROWS.
            for (var i = 0; i < arrItems.length; i++) {

                tr = table.insertRow(-1);

                for (var j = 0; j < col.length; j++) {
                    var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = arrItems[i][col[j]];
                }
            }

            // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
            var divContainer = document.getElementById("shfaq_tedhena");
            divContainer.innerHTML = "";
            divContainer.appendChild(table);
        });
    });
</script>
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
					
				<!-- Section -->
					

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<p style="text-align:left;">Përshëndetje, <em><?php  echo $kycja_perdoruesit;?>.</em> </p>
							<header class="align-center">
								<h2>MODULI ADMINISTRATORIT</h2>
								<p id="shfaq_tedhena"></p>
							</header>
							
							</div>
							<a class="button" href="Ajax/index.php">Voto</a>
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
