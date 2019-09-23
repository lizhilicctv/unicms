<?php
use UNI\tools\Db;
class newsController extends uni{
	public function __init(){
		parent::__init();
	}
	public function index(){
		
		$this->display();
	}	
	public function show(){
		
		$this->display();
	}	
}