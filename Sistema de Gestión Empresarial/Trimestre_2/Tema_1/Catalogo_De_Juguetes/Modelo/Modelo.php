<?php
class Juguete
{
    private $juguete;
    private $db;
    public function __construct()
    {
        $this->juguete = array();
        $this->db = new PDO('mysql:host=localhost;dbname=catalogojuguetes', "root", "");
    }
    public function getJuguete()
    {
        $sql = "SELECT id, nombre, precio, imagen, descripcion, stock FROM juguetes";
        foreach ($this->db->query($sql) as $res) {
            $this->juguete[] = $res;
        }
        $this->db = null;
        return $this->juguete;
    }
    public function setJuguete($nombre, $precio, $imagen, $descripcion, $stock)
    {

        $sql = "INSERT INTO juguetes(nombre, precio, imagen, descripcion, stock) VALUES ('". $nombre . "', '" . $precio . "', '" . $imagen . "' , '" . $descripcion . "' , '" . $stock ."')";
        $result = $this->db->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>