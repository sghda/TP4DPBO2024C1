<?php
include_once ("models/Members.php");
include_once ("models/DB.php");
include_once ("controllers/MembersController.php");

$controller = new MembersController();

if (isset($_POST['add'])) {
    //memanggil add
    $controller->add($_POST);
} else if (!empty($_GET['id_hapus'])) {
    //memanggil add
    $id = $_GET['id_hapus'];
    $controller->delete($id);
} else if (!empty($_GET['id_edit'])) {
    //memanggil add
    $id = $_GET['id_edit'];
    $controller->edit($id);
} else{
    $controller->index();
}

?>