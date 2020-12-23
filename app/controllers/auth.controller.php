<?php
require_once 'app/views/auth.view.php';
require_once 'app/models/auth.model.php';
require_once 'auth.helper.php';


class AuthController
{

    private $view;
    private $model;

    //instanciamos los objetos
    function __construct()
    {
        $this->view = new AuthView();
        $this->model = new UserModel();
    }

    function showLogin()
    {
        $this->view->showLogin();
    }

    function loginUser()
    {
        //se verifican que los campos esten completos
        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            $user = $_POST['user'];
            $password = $_POST['password'];
            $user_db = $this->model->getUser($user);
            if ($user_db && password_verify($password, $user_db->password)) {
                //chequeamos que la password ingresada sea correcta y el usuario exista
                session_start();
                $_SESSION['user'] = $user;
                header("Location: " . BASE_URL . '../show-parking');
            } else {
                //muestro el login con mensaje de error por usuario o pass incorrectos
                $this->view->showLogin('Usuario o contraseña incorrectos');
            }
        } else {
            //muestro el login con mensaje de error por falta de datos
            $this->view->showLogin('Faltan datos obligatorios');
        }
    }

    function adminPage()
    {
        AuthHelper::checkLoggedIn();
        $this->view->showAdminPage();
    }

    function logout()
    {
        AuthHelper::logout();
    }
}
