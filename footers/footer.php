<!-- Date automatique du copyright -->
<?php 
function auto_copyright($startYear = null) {
	$thisYear = date('Y');  
    if (!is_numeric($startYear)) {
		$year = $thisYear; 
	} else {
		$year = intval($startYear);
	}
	if ($year == $thisYear || $year > $thisYear) { 
		echo "© $thisYear"; 
	} else {
		echo "© $year–$thisYear"; 
	}   
 } 
 ?>
 <!-- FIN de la date automatique du copyrihgt -->

 

 <!--====== FOOTER ======-->
 <footer class="footer mt-auto py-3 bg-dark">
   <div class="container text-light" style="text-align: center">
      <?php auto_copyright(); ?> All Rights Reserved: jpvenant.fr
   </div>
 </footer>
 <!--====== FIN du footer ======-->

  
