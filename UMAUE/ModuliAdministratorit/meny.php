
		<?php
            $rezultati = mysqli_query($lidh, "SELECT * FROM umaue_tedhenat WHERE Pamja_Faqes='Meny_Administratorit'");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  	 echo $Pershkrimi;
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

			}
            ?>