<?php

class MainView
{

    function showParking(
        $row1,
        $row2,
        $row3,
        $row4,
        $row5,
        $row6,
        $row7,
        $row8,
        $row9,
        $row10,
        $row11,
        $row12,
        $row13,
        $row14,
        $row15,
        $row16,
        $row17,
        $row18,
        $allRows
    ) {
        include_once 'templates/header.php';
        echo '<div class="sticky-top text-center bg-dark "><a href="add-truck" class="btn btn-md btn-primary m-2">Agregar camión</a><a href="searchlist" class="btn btn-md btn-danger m-2">Filtrar</a></div>';
        echo "<div class='alert alert-info text-center mb-0'><h2>Hay $allRows camiones en playa</h2></div>";
        echo "<div class='list-group'> 
        <a href='verfila/1' class='list-group-item list-group-item-action list-group-item-warning'>Fila 1<div> ";
        for ($i = 0; $i < $row1; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row1; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/2' class='list-group-item list-group-item-action list-group-item-warning'>Fila 2 <div> ";
        for ($i = 0; $i < $row2; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row2; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/3' class='list-group-item list-group-item-action list-group-item-warning'>Fila 3 <div> ";
        for ($i = 0; $i < $row3; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row3; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo " <a href='verfila/4' class='list-group-item list-group-item-action list-group-item-warning'>Fila 4 <div> ";
        for ($i = 0; $i < $row4; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row4; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/5' class='list-group-item list-group-item-action list-group-item-warning'>Fila 5<div> ";
        for ($i = 0; $i < $row5; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row5; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/6' class='list-group-item list-group-item-action list-group-item-warning'>Fila 6<div> ";
        for ($i = 0; $i < $row6; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row6; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/7' class='list-group-item list-group-item-action list-group-item-warning'>Fila 7<div> ";
        for ($i = 0; $i < $row7; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row7; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/8' class='list-group-item list-group-item-action list-group-item-warning'>Fila 8<div> ";
        for ($i = 0; $i < $row8; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row8; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/9' class='list-group-item list-group-item-action list-group-item-warning'>Fila 9<div> ";
        for ($i = 0; $i < $row9; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row9; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/10' class='list-group-item list-group-item-action list-group-item-warning'>Fila 10<div> ";
        for ($i = 0; $i < $row10; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row10; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/11' class='list-group-item list-group-item-action list-group-item-warning'>Fila 11<div> ";
        for ($i = 0; $i < $row11; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row11; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/12' class='list-group-item list-group-item-action list-group-item-warning'>Fila 12<div> ";
        for ($i = 0; $i < $row12; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row12; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/13' class='list-group-item list-group-item-action list-group-item-danger'>Fila 13<div> ";
        for ($i = 0; $i < $row13; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row13; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/14' class='list-group-item list-group-item-action list-group-item-danger'>Fila 14<div> ";
        for ($i = 0; $i < $row14; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row14; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/15' class='list-group-item list-group-item-action list-group-item-info'>Fila 15<div> ";
        for ($i = 0; $i < $row15; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row15; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/16' class='list-group-item list-group-item-action list-group-item-success'>Fila 16<div> ";
        for ($i = 0; $i < $row16; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row16; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/17' class='list-group-item list-group-item-action list-group-item-success'>Fila 17<div> ";
        for ($i = 0; $i < $row17; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row17; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };
        echo '</div></a>';
        echo "
        <a href='verfila/18' class='list-group-item list-group-item-action list-group-item-success'>Fila 18<div> ";
        for ($i = 0; $i < $row18; $i++) {
            echo '<span class="badge rounded-pill bg-danger ml-2 p-2"> </span>';
        };
        for ($j = 14; $j > $row18; $j--) {
            echo '<span class="badge rounded-pill bg-success ml-2 p-2"> </span>';
        };

        echo '</div></a></div>';

        include_once 'templates/footer.php';
    }

    function showTruckForm()
    {

        include_once 'templates/header.php';
        echo '<div class="sticky-top text-center bg-dark"><a href="show-parking" class="btn btn-md btn-success m-2">Ver playa</a></div>';
        echo '    <form class="container mt-5" action="../newTruck" method="POST">
        <div class="form-group"> <label for="patente">Patente:</label>
            <input class="form-control" type="text"  style="text-transform:uppercase;" name="patente" ></div>

            <div class="form-group"> <label for="fila">Fila:</label>
            <select class="form-control" name="fila" id="fila">
                <option value="1">Fila 1</option>
                <option value="2">Fila 2</option>
                <option value="3">Fila 3</option>
                <option value="4">Fila 4</option>
                <option value="5">Fila 5</option>
                <option value="6">Fila 6</option>
                <option value="7">Fila 7</option>
                <option value="8">Fila 8</option>
                <option value="9">Fila 9</option>
                <option value="10">Fila 10</option>
                <option value="11">Fila 11</option>
                <option value="12">Fila 12</option>
                <option value="13">Fila 13</option>
                <option value="14">Fila 14</option>
                <option value="15">Fila 15</option>
                <option value="16">Fila 16</option>
                <option value="17">Fila 17</option>
                <option value="18">Fila 18</option>
            </select></div>
            <div class="form-group"> <label for="producto">Producto:</label>
            <select class="form-control" name="producto" id="producto">
                <option value="CEBADA">CEBADA</option>
                <option value="SEMILLA">SEMILLA</option>
                <option value="MALTA">MALTA</option>
                <option value="EXPELLER">EXPELLER</option>
                <option value="CUARTA">CUARTA</option>
                <option value="TRIGO">TRIGO</option>
                <option value="ESTACIONAMIENTO">ESTACIONAMIENTO</option>


            </select></div>
        <div class="form-group"> <label for="fecha">Fecha de ingreso:</label>
            <input class="form-control" type="date" name="fecha">
            <input class="form-control" type="time" name="hora">

        </div>

        <button class="btn btn-md btn-success">Agregar</button>
    </form>';
        include_once 'templates/footer.php';
    }

    function showRow($rows)
    {
        echo '<!DOCTYPE html>
        <html lang="en">
        
        <head>
            <base href="{BASE_URL}">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Las Vizcachas</title>
            <link rel="stylesheet" href="../css/main.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </head>
        <main>';
        echo '<div class="sticky-top text-center bg-dark"><a href="../show-parking" class="btn btn-md btn-success m-2">Ver playa</a><a href="../add-truck" class="btn btn-md btn-primary m-2">Agregar camión</a></div>';
        $rownumber = $rows[0]->fila;
        echo "<div class='container mt-4'>
        <h1>Fila $rownumber</h1> ";
        echo "<div class='table-container'>
        <table class='table table-striped'><thead><tr><th>Patente</th><th>Producto</th><th>Fecha de ingreso</th>";
        if (isset($_SESSION['user'])) {
            echo "<th></th>";
        }
        echo "</tr></thead><tbody>";
        foreach ($rows as $row) {

            $newDate = date("d/m/Y | H:i", strtotime($row->fechaing));

            echo "<tr>
          <td>$row->patente</td>
          <td>$row->producto</td>
          <td>$newDate </td>";
            if (isset($_SESSION['user'])) {
                echo "
            <td class='d-flex flex-column'><a class='btn btn-danger btn-sm mb-1' href='../eliminar/{$row->id}'>Dar salida</a>
            <a class='btn-edit btn btn-warning btn-sm p-1' id='{$row->id}'>Editar</a>
            </td>
            ";
            }
            echo " </tr>";
        }
        echo '</tbody></table>
        </div>
        <div class="text-center mb-4"><a href="../show-parking">Volver</a></div>
        ';
        echo '<script src="../js/edit.js"></script>';
        include_once 'templates/footer.php';
    }
    function showEmptyRow($row)
    {
        include_once 'templates/header.php';
        echo '<div class="sticky-top text-center bg-dark"><a href="../show-parking" class="btn btn-md btn-success m-2">Ver playa</a></div>';
        echo "<div class='container mt-4'><div class='alert alert-info'>No hay camiones ingresados en la fila $row</div></div>";
        echo ' <div class="text-center mb-4"><a href="../show-parking">Volver</a></div>';

        include_once 'templates/footer.php';
    }

    function showEdit($truck)
    {
        echo "<aside class='modal-result d-flex justify-content-center align-items-center'>
        <div class='card-modal bg-white p-5 rounded-left rounded-right'>
            <h3>Editar datos</h3>
            <form action='../editar/patente' method='POST' class='my-4' enctype='multipart/form-data'>
                <div class='row'>
                    <div class='col-sm-7'>
                        <div class='form-group'>
                            <input type='hidden' name='id' value='$truck->id'>
                            <label>Patente</label>
                            <input name='patent' type='text' class='form-control' value='$truck->patente' required>
                        </div>
                    </div>
                    <div class='form-group col-sm-5'>
                    <label>Fecha</label>
                    <input type='datetime' name='datetime' class='form-control' rows='2' value='$truck->fechaing' required>
                </div>
                </div>
                    <div class='row'>
                        <div class='form-group col-sm-6'>
                                   <label for='producto'>Producto:</label>
            <select class='form-control' name='product' id='producto' value='$truck->producto'>
                <option value='CEBADA'"; if($truck->producto == 'CEBADA'){echo "selected";} echo ">CEBADA</option>
                <option value='SEMILLA'"; if($truck->producto == 'SEMILLA'){echo "selected";} echo">SEMILLA</option>
                <option value='MALTA'"; if($truck->producto == 'MALTA'){echo "selected";}echo ">MALTA</option>
                <option value='EXPELLER'"; if($truck->producto == 'EXPELLER'){echo "selected";} echo">EXPELLER</option>
                <option value='CUARTA'"; if($truck->producto == 'CUARTA'){echo "selected";}echo">CUARTA</option>
                <option value='TRIGO'"; if($truck->producto == 'TRIGO'){echo "selected";}echo ">TRIGO</option>
                <option value='ESTACIONAMIENTO'"; if($truck->producto == 'ESTACIONAMIENTO'){echo "selected";} echo ">ESTACIONAMIENTO</option>


            </select></div>
                        <div class='form-group col-sm-6'>
                        <label>Fila</label>
                        <input name='fila' type='text' class='form-control' value='$truck->fila' required>
                        </div>
                    </div>
                    <button type='submit' class='btn-success btn btn-primary'>Guardar</button>
                    <button id='btn-back' class='btn-back btn btn-primary'>Volver</button>
            </form>
        </div>
    </aside>";
    }

    function showSearchList()
    {
        include_once 'templates/header.php';
        echo '<section class="container mt-5">
            <form action="searchbyproduct" method="POST">
            <h3>Buscar por producto:</h3>
            <div class="form-group"> 
            <label for="producto">Producto</label>
            <select class="form-control" name="producto" id="producto">
                <option value="CEBADA">CEBADA</option>
                <option value="SEMILLA">SEMILLA</option>
                <option value="MALTA">MALTA</option>
                <option value="EXPELLER">EXPELLER</option>
                <option value="CUARTA">CUARTA</option>
                <option value="TRIGO">TRIGO</option>
                <option value="ESTACIONAMIENTO">ESTACIONAMIENTO</option>
            </select>
            </div>
            <button class="btn btn-danger btn-sm">Buscar</button>
            </form>
            <hr>
            <form action="searchbypatent" method="POST">
            <h3>Buscar por patente:</h3>
            <div class="form-group"> 
            <label for="producto">Patente</label>
            <input name="patent" type="text" class="form-control" required>
            </div>
            <button class="btn btn-danger btn-sm">Buscar</button>
            </form>
        </section>
                <div class="text-center mb-4"><a href="../show-parking">Volver</a></div>
        ';
        include_once 'templates/footer.php';
    }

    function showSearch($truckList)
    {
        echo '<!DOCTYPE html>
        <html lang="en">
        
        <head>
            <base href="{BASE_URL}">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Las Vizcachas</title>
            <link rel="stylesheet" href="../css/main.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </head>
        <main>';
        echo '<div class="sticky-top text-center bg-dark"><a href="../show-parking" class="btn btn-md btn-success m-2">Ver playa</a><a href="../add-truck" class="btn btn-md btn-primary m-2">Agregar camión</a></div>';
        echo "<div class='container mt-4'>
        <div class='table-container'>
        <table class='table table-striped'><thead><tr><th>Patente</th><th>Producto</th><th>Fecha de ingreso</th><th>Fila</th>";
        echo "</tr></thead><tbody>";
        foreach ($truckList as $row) {

            $newDate = date("d/m/Y | H:i", strtotime($row->fechaing));

            echo "<tr>
          <td>$row->patente</td>
          <td>$row->producto</td>
          <td>$newDate </td>
          <td>$row->fila</td>
        </tr>";
        }
        echo '</tbody></table>
        </div>
        <div class="text-center mb-4"><a href="../show-parking">Volver</a></div>
        ';
        include_once 'templates/footer.php';
    }
}
