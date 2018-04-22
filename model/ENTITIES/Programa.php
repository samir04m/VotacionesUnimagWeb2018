<?php

class Programa {

	protected $id;
	protected $nombre;
	protected $facultad_id;

	public function __construct($id, $nombre, $facultad_id){
		$this->id = $id;
		$this->nombre = $nombre;
		$this->facultad_id = $facultad_id;

	}

	public function getid(){
		return $this->id;
	}

	public function setid($id){
		$this->id = $id;
		return $this;
	}
	public function getnombre(){
		return $this->nombre;
	}

	public function setnombre($nombre){
		$this->nombre = $nombre;
		return $this;
	}
	public function getfacultad_id(){
		return $this->facultad_id;
	}

	public function setfacultad_id($facultad_id){
		$this->facultad_id = $facultad_id;
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