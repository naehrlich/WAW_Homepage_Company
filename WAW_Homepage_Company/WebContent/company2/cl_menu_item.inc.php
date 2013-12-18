<?php
class MenuItem{
	
	private $id;
	private $pageName;
	private $include;	
	private $pageTitle;

	private $subMenutItems = array();
	
	public function __construct($id, $pageName, $include, $pageTitle){
		$this->id = $id;
		$this->pageName = $pageName;
		$this->include = $include;
		$this->pageTitle = $pageTitle;
	}
	
	public function addSubMenu($subMenu, $order){
		$this->subMenutItems[$order] = $subMenu;		
	}
	
	public function getSubMenuitems(){
		return $this->subMenutItems;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getPageName(){
		return $this->pageName;
	}
	
	public function getInclude(){
		return $this->include;
	}
	
	public function getPageTitle(){
		return $this->pageTitle;
	}
	
}
?>