<?php

class TruckModel
{
    private $db;

    function __construct()
    {
        // 1. Abro la conexión
        $this->db = $this->connect();
    }

    //Abre conexión a la base de datos;
    private function connect()
    {
        $db = new PDO('mysql:host=fdb29.awardspace.net;' . 'dbname=3670302_lasvizcachas;charset=utf8', '3670302_lasvizcachas', 'franbayugar12');
        return $db;
    }

    function getRows()
    {
        $query = $this->db->prepare('SELECT * FROM `ingresos`;');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function countRows($number)
    {
        $query = $this->db->prepare('SELECT COUNT(fila) FROM `ingresos` WHERE `fila` = ?;
        ');
        $query->execute([$number]);

        return  $query->fetch(PDO::FETCH_COLUMN);
    }


    function countAllRows()
    {
        $query = $this->db->prepare('SELECT COUNT(fila) FROM `ingresos` WHERE fila;');
        $query->execute();

        return $query->fetch(PDO::FETCH_COLUMN);
    }

    function getAll()
    {
        $query = $this->db->prepare('SELECT * FROM `ingresos`;');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getTruckByID($id)
    {
        $query = $this->db->prepare('SELECT * FROM `ingresos` WHERE id = ?;');
        $query->execute([$id]);

        return $query->fetch(PDO::FETCH_OBJ);
    }
    function addTruck($row, $patent, $product, $datetime)
    {
        $query = $this->db->prepare('INSERT INTO `ingresos` (`fila`, `patente`, `producto`, `fechaing`) VALUES (?,?,?,?);');
        $query->execute([$row, $patent, $product, $datetime]);
    }

    function getRowsByNumber($row)
    {
        $query = $this->db->prepare('SELECT * FROM `ingresos` WHERE `fila` = ? ORDER BY `fechaing` ASC;');
        $query->execute([$row]);

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function delete($rowid)
    {
        $query = $this->db->prepare('DELETE FROM `ingresos` WHERE `id` = ?;');
        $query->execute([$rowid]);
    }

    function editTruck($id, $patent, $datetime, $product, $row)
    {
        $query = $this->db->prepare('UPDATE ingresos
        SET fila = ?, patente = ?, producto = ?, fechaing = ?
        WHERE id = ?');
        $query->execute([$row, $patent, $product, $datetime, $id]);
    }
        function searchByProduct($product)
    {
        $query = $this->db->prepare('SELECT * FROM `ingresos` WHERE `producto` = ? ORDER BY fechaing DESC;');
        $query->execute([$product]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function searchByPatent($patent)
    {
        $query = $this->db->prepare('SELECT * FROM `ingresos` WHERE `patente` = ?;');
        $query->execute([$patent]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
