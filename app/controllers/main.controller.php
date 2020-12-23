<?php
require_once 'app/views/main.view.php';
require_once 'app/models/truck.model.php';
require_once 'auth.helper.php';


class MainController
{

    private $view;
    private $model;

    //instanciamos los objetos
    function __construct()
    {
        $this->view = new MainView();
        $this->model = new TruckModel();
    }

    function showParking()
    {
        AuthHelper::simpleCheck();

        $row1 = $this->model->countRows('1');
        $row2 = $this->model->countRows('2');
        $row3 = $this->model->countRows('3');
        $row4 = $this->model->countRows('4');
        $row5 = $this->model->countRows('5');
        $row6 = $this->model->countRows('6');
        $row7 = $this->model->countRows('7');
        $row8 = $this->model->countRows('8');
        $row9 = $this->model->countRows('9');
        $row10 = $this->model->countRows('10');
        $row11 = $this->model->countRows('11');
        $row12 = $this->model->countRows('12');
        $row13 = $this->model->countRows('13');
        $row14 = $this->model->countRows('14');
        $row15 = $this->model->countRows('15');
        $row16 = $this->model->countRows('16');
        $row17 = $this->model->countRows('17');
        $row18 = $this->model->countRows('18');
        $allRows = $this->model->countAllRows();



        $this->view->showParking(
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
        );
    }

    function addTruckForm()
    {
        AuthHelper::checkLoggedIn();

        $this->view->showTruckForm();
    }

    function addTruck()
    {
        AuthHelper::checkLoggedIn();

        $row = $_POST['fila'];
        $patent = $_POST['patente'];
        $patent = strtoupper($patent);
        $datetime = $_POST['fecha'] . " " . $_POST['hora'];
        $product = $_POST['producto'];

        $this->model->addTruck($row, $patent, $product, $datetime);

        header("Location: " . BASE_URL . '../show-parking');
    }

    function showRow($params)
    {
        AuthHelper::simpleCheck();

        $row = $params[':ROW'];
        $rows = $this->model->getRowsByNumber($row);
        if ($rows) {
            $this->view->showRow($rows);
        } else {
            $rows = $row;
            $this->view->showEmptyRow($rows);
        }
    }

    function deletePatent($params)
    {
        AuthHelper::checkLoggedIn();

        $row = $params[':ROW'];
        $rows = $this->model->delete($row);

        header("Location: " . BASE_URL . 'show-parking');
    }
    function showEdit($params)
    {
        $id = $params[':ID'];

        $truck = $this->model->getTruckByID($id);

        $this->view->showEdit($truck);
    }

    function editPatent()
    {
        AuthHelper::checkLoggedIn();

        $id = $_POST['id'];
        $patent = $_POST['patent'];
        $datetime = $_POST['datetime'];
        $row = $_POST['fila'];
        $product = $_POST['product'];

        $this->model->editTruck($id, $patent, $datetime, $product, $row);

        header("Location: " . BASE_URL . 'show-parking');
    }

    function searchlist()
    {
        $this->view->showSearchList();
    }

    function searchByProduct()
    {
        $product = $_POST['producto'];
        $truckList = $this->model->searchByProduct($product);

        $this->view->showSearch($truckList);
    }
    function searchByPatent()
    {
        $patent = $_POST['patent'];
        $patent = strtoupper($patent);
        $truckList = $this->model->searchByPatent($patent);
        $this->view->showSearch($truckList);
    }
}
