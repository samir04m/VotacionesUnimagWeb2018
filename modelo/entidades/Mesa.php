<?php

class Mesa {

	protected $id;

	public function __construct($id){
		$this->id = $id;
	}

	public function getid(){
		return $this->id;
	}

	public function setid($id){
		$this->id = $id;
		return $this;
	}

}