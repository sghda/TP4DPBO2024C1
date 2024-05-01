<?php

include_once 'conf.php';
include_once 'models/Subscriptions.php';
include_once 'views/SubsView.php';
include_once 'views/FormView.php';

class SubsController{
    private $subs;

    function __construct(){
        $this->subs = new Subscriptions(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function index(){
        $this->subs->open();
        $this->subs->getSubscriptions();

        $data = array (
            'subs' => array()
        );
        while($row = $this->subs->getResult()){
            array_push($data['subs'], $row);
        }
        $this->subs->close();

        $view = new SubsView();
        $view->render($data);
    }

    function add($data){
        $this->subs->open();
        $this->subs->addSub($data);
        $this->subs->close();
        header('Location: subs.php');
    }
    
    function delete($id){
        $this->subs->open();
        $this->subs->deleteSubscriptions($id);
        $this->subs->close();
        header('Location: subs.php');
    }
    
    function edit($data){
        $this->subs->open();
        $this->subs->editSub($data);
        $this->subs->close();
        header('Location: subs.php');
    }
}

?>