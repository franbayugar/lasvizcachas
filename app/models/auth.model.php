<?php

class UserModel
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

    function getAll()
    {
        $query = $this->db->prepare('SELECT * FROM usuario');
        $query->execute();

        //Obtengo la respuesta con un fetch
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function getUser($user)
    {
        $query = $this->db->prepare('SELECT * FROM usuario WHERE usuario = ?');
        $query->execute([$user]);

        //Obtengo la respuesta con un fetch
        return $query->fetch(PDO::FETCH_OBJ);
    }
}
