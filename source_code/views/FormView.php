<?php
include_once ("models/Template.php");

class FormView{

    public function render(){
        $template = new Template("templates/form.html");
        $template->replace("TITLE", "Add Subs");
        $template->replace("TYPE", "''");
        $template->replace("DURATION","''");
        $template->replace("PRICE","''");
        $template->replace("CRUD","Add");
        $template->write();
    }

    public function render2($data){
    $template = new Template("templates/form.html");
    $id_sub = $data['sub'][0]['id_sub'];
    $type_sub = $data['sub'][0]['type_sub'];
    $duration = $data['sub'][0]['duration'];
    $harga = $data['sub'][0]['harga'];
    
    $template->replace("TITLE","Edit Subs");
    $template->replace("ID_SUB_VALUE", $id_sub);
    $template->replace("TYPE","$type_sub");
    $template->replace("DURATION", "$duration");
    $template->replace("PRICE", "$harga");
    $template->replace("CRUD", "Edit");
    
    $template->write();
}

}