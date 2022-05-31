<header id="header" class="alt">
				<div class="logo"></div>
				<a href="#menu">Mënytë</a>
			</header>

			<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM umaue_tedhenat WHERE Pamja_Faqes='Koka.P'");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>

            <section id="banner">
				<div class="inner">
					
					<header>
						<h1><?php echo $Titulli ?></h1>	
					</header>
				</div>
			</section>
			<?php } ?>