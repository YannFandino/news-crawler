<?php

class User {
	
	private $id;
	private $email;
	private $nombre;
	private $listaRSS;

    /**
     * User constructor.
     * @param $email
     * @param $nombre
     */
    public function __construct($email, $nombre) {
        $this->email = $email;
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getListaRSS() {
        return $this->listaRSS;
    }

    /**
     * @param mixed $listaRSS
     */
    public function setListaRSS($listaRSS) {
        $this->listaRSS = $listaRSS;
    }
}

?>
