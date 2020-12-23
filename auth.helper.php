<?php

class AuthHelper
{
    public function __construct()
    {
    }

    //se chequea el login en la pagina de login, si esta logeado deriva a administrador
    public static function checkLoggedIn()
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . 'loginPage');
            die();
        } else {
            return true;
        }
    }

    public static function logout()
    {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . 'loginPage');
        die();
    }

    public static function simpleCheck()
    {
        session_start();
    }
}
