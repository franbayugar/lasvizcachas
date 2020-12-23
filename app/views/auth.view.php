<?php

class AuthView
{
    function showLogin($error = null)
    {
        $login = 1;
        include_once 'templates/header.php';
        include_once 'templates/loginform.php';
        if ($error) {
            echo ("<div class= 'container'><div class='alert-danger'><p>  $error </p></div></div>");
        }
        echo '<div class="text-center"><a href="show-parking" class="btn btn-md btn-danger m-2">Ver playa</a></div>';

        include_once 'templates/footer.php';
    }

    function showAdminPage()
    {
        include_once 'templates/header.php';
        echo '<section class="container-fluid text-center">
        <div class="m-5">
            <div>
            <h1 class= "mb-3">Agro Las Vizcachas</h1>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a type="button" href="add-truck" class="btn btn-primary">Agregar camión</a>
                    <a type="button" href="show-parking" class="btn btn-success">Ver Playa</a>
                </div>
            </div>
            <img src="assets/playa-estacionamiento.jpg" class="w-100 m-2" alt="vizcachas">

        </div>
    </section>';
        include_once 'templates/footer.php';
    }
}
