	<footer id="footer">
				<div class="copyright">	
						<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM umaue_tedhenat WHERE Pamja_Faqes='fundifaqes_Adresa'");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						<section>
							<h4><?php echo $Titulli ?></h4>
							<p><?php echo $Pershkrimi; ?>
							</p>
						</section>
			<?php } ?>
					

					<hr />
					<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM umaue_tedhenat WHERE Pamja_Faqes='fundifaqes_RrjeteSociale'");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						<section>
							<h4><?php echo $Titulli ?></h4>
							<p><?php echo $Pershkrimi; ?>
							</p>
						</section>
			<?php } ?>
					<hr/>
					<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM umaue_tedhenat WHERE Pamja_Faqes='fundifaqes_E_Drejta_Autorit'");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
					
					
							<?php echo $Pershkrimi; ?>
					
			<?php } ?>
				</div>

			</footer>