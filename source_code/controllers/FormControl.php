<?php
include_once 'conf.php';
include_once 'models/DB.php';
include_once 'models/Subscriptions.php';
include_once 'models/Template.php';
include_once 'views/FormView.php';

class FormControl{
    private $sub;

    public function __construct(){
        $this->sub = new Subscriptions(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function add_form(){
        $view = new FormView();
        $view->render();
    }

    public function edit_form($id){
        $this->sub->open();
        $this->sub->getSubscriptionsById($id);

        $data = array (
            'sub' => array()
        );
        while($row = $this->sub->getResult()){
            array_push($data['sub'], $row);
        }

        $this->sub->close();
        $view = new FormView();
        $view->render2($data);
    }
}
?>

