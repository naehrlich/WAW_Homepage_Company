<?php

class Menu{
	
	private $menu = array();
	private $menuSorted = array();
	
	private function connectDb(){
		$dbHost = "localhost";
		$dbUser = "REPLACE";
		$dbPw = "REPLACE";
		$dbName = "REPLACE";
				
		$this->db = new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPw);
	}
	
	public function __construct(){
		$this->connectDb();
	}
	
	private function fetchMenu(){
		
		$q = "select mi.id, mi.pageName, mi.include, mi.pageTitle, parentMenuItemId, sort "
			." from MenuItemUsage as mu join MenuItem as mi on mu.menuItemId = mi.id"
			." order by mu.parentMenuItemId;";
		
		foreach($this->db->query($q) as $z){
			//echo "<p>";
			//echo $z["id"].";";
			$id = $z["id"];
			//echo $z["pageName"].";";
			//echo $z["include"].";";
			//echo isset($z["parentMenuItemId"])? $z["parentMenuItemId"].";":"null;";
			//echo $z["sort"].";";
			$sort = $z["sort"];
			
			if(!isset($this->menu[$id])){
				$this->menu[$id] = new MenuItem($id, $z["pageName"], $z["include"], $z["pageTitle"]);
			}
			if(isset($z["parentMenuItemId"])){
				$parentMenuItemId = $z["parentMenuItemId"];
				$this->menu[$parentMenuItemId]->addSubMenu($this->menu[$id], $sort);
			}else{
				$this->menuSorted[$sort] = $this->menu[$id];
			}
		}
		
		/*echo "<p> Menu <p>";
		foreach($this->menu as $element){
			echo "<p>";
			echo $element->getId();
			foreach($element->getSubMenuitems() as $subMenuItem){
				echo "<p>";
				echo " -".$subMenuItem->getId();
			}
		}*/
		
	}
	
	public function renderMenu(){
		$this->fetchMenu();			
		echo "<ul class=\"nav navbar-nav\">";
		
		foreach($this->menuSorted as$currentMenuItem){
			
			if(sizeof($currentMenuItem->getSubMenuitems()) != 0){
				$this->renderSubMenu($currentMenuItem);
			}else{
				echo $this->getListItemHtml($currentMenuItem->getPageName(), $currentMenuItem->getPageTitle());
			}
		}
		
		echo "</ul>";
	}
	
	private function getListItemHtml($pageName, $pageTitle){
		return "<li><a href=\"index.php?page=".$pageName."\">".$pageTitle."</a></li>";
		
	}
	
	private function getListItemHtmlSubMenuTitle($pageTitle){
		return "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">".$pageTitle."<b class=\"caret\"></b></a>";	
	}
	
	private function renderSubMenu($menuItem){
		echo "<li class=\"dropdown\">";
		echo $this->getListItemHtmlSubMenuTitle($menuItem->getPageTitle());
		echo "<ul class=\"dropdown-menu\">";
		foreach($menuItem->getSubMenuitems() as $subMenuItem){
			if(sizeof($subMenuItem->getSubMenuitems()) != 0){
				$this->renderSubMenu($subMenuItem);
			}else{
				echo $this->getListItemHtml($subMenuItem->getPageName(), $subMenuItem->getPageTitle());
			}
		}
		echo "</ul>";		
		echo "</li>";
	}
	
	public function getIncludeByPageName($pageName){
		foreach($this->menu as $menuItem){
			if($menuItem->getPageName() == $pageName){
				return $menuItem->getInclude();
			}
		}
		return 'home.inc.php';
	}
	
	
}
?>
