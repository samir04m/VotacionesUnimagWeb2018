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

	public function toArray() {
        $vars = get_object_vars ( $this );
        $array = array ();
        foreach ( $vars as $key => $value ) {
            $array [ltrim ( $key, '_' )] = $value;
        }
        return $array;
    }

}