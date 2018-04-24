<?php

class Rol {

	protected $id;
	protected $rol;

	public function __construct($id, $rol){
		$this->id = $id;
		$this->rol = $rol;
	}
	
	public function getid(){
		return $this->id;
	}

	public function setid($id){
		$this->id = $id;
		return $this;
	}

	public function getrol(){
		return $this->rol;
	}

	public function setrol($rol){
		$this->rol = $rol;
		return $this;
	}

}