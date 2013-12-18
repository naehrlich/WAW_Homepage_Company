	<?php require_once 'session.inc.php';?>
	<?php require_once 'cl_menu_item.inc.php';?>	
	<?php require_once 'cl_menu.inc.php';?>	
<!DOCTYPE html>
<html lang="en">
	<?php require_once 'head.inc.php';?>

<body>
	<?php require_once 'brand.inc.php';?>
	<?php require_once 'menu.inc.php';?>
	
	
	<?php 
	if(isset($_REQUEST["page"])){
		$include = $menu->getIncludeByPageName($_REQUEST["page"]);
		require_once $include;
		/*
		switch($_REQUEST["page"]){
			case 'team':	require_once 'team.inc.php'; break;		
			case 'contact': require_once 'contact.inc.php'; break;
			case 'impressum': require_once 'impressum.inc.php'; break;
			case 'login': require_once 'signin_check.php'; break;
			default: require_once 'home.inc.php'; break;
		}*/
	}else{
		require_once 'home.inc.php';
	}
	
	
	?>

	 
	<?php require_once 'footer.inc.php';?>
	<?php require_once 'bootstrap.inc.php';?>

</body>
</html>
