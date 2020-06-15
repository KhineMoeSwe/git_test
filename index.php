<?php
include_once("inc/header.inc.php");
include_once("inc/menu.inc.php");
?>

	<?php	
		if($page<>NULL){
			if(!file_exists("pages/".$page.".php")){
				echo '<h1>Oops, our bad...</h1><br /><p>The page you requested was not found. This might be because you typed the URL incorrectly.<br /><br />Click <a href="/">here</a> to get you back on track!</p>';
			} else {
				include("pages/".$page.".php");
			}
		} else {
			include("pages/home.php");
		}
	?>


<?php
include_once("inc/footer.inc.php");

?>


			 	
  