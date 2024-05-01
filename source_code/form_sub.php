<?php

include_once 'conf.php';
include_once 'models/DB.php';
include_once 'models/Template.php';
include_once 'controllers/FormControl.php';
include_once 'controllers/SubsController.php';

$controller = new FormControl();
$subControl = new SubsController();

if(!empty($_GET['id_edit'])){
    $controller->edit_form($_GET['id_edit']);
    if(isset($_POST['submit'])) {
        $subControl->edit($_POST);
    }
}else {
    $controller->add_form();
    if (isset($_POST['submit'])) {
        $subControl->add($_POST);
    }
}
