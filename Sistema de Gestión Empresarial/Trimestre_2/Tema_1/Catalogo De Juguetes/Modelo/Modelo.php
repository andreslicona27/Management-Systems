<?php
class Juguete
{
    private $juguete;
    private $db;
    public function __construct()
    {
        $this->juguete = array();
        $this->db = new PDO('mysql:host=localhost;dbname=ejemplo_mvc', "root", "");
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
    public function setJuguete($id, $nombre, $precio, $imagen, $descripcion, $stock)
    {

        $sql = "INSERT INTO empleados(id, nombre, precio, imagen, descripcion, stock) VALUES ('" .
            $id . "', '" . $nombre . "', '" . $precio . "', '" . $imagen . "' , '" . $descripcion . "' , '" . $stock ."')";
        $result = $this->db->query($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>