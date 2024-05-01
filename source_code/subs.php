<?php
include_once ("models/Template.php");
include_once ("models/DB.php");
include_once ("controllers/SubsController.php");
include_once ("controllers/FormControl.php");

$controller = new SubsController();
$control = new FormControl();

if (!empty($_GET['id_hapus'])) {
    //memanggil add
    $id = $_GET['id_hapus'];
    $controller->delete($id);
} else if (!empty($_GET['id_edit'])) {
    //memanggil add
    $id = $_GET['id_edit'];
    // $controller->edit($id);
    $control->edit_form($id);
} else{
    $controller->index();
}