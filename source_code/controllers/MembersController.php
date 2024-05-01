<?php
include_once 'conf.php';
include_once 'models/Members.php';
include_once 'models/Subscriptions.php';
include_once 'views/MembersView.php';
// include_once 'models/DB.php';

class MembersController{
    private $members;
    private $subs;

    function __construct(){
        $this->members = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
        $this->subs = new Subscriptions(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    public function index(){
        $this->members->open();
        $this->subs->open();
        $this->members->MembersJoinSub();
        $this->subs->getSubscriptions();

        $data = array (
            'members' => array(),
            'subs' => array()
        );
        while($row = $this->members->getResult()){
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";
            array_push($data['members'], $row);
        }
        while($row = $this->subs->getResult()){
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";
            array_push($data['subs'], $row);
        }
        $this->members->close();
        $this->subs->close();

        $view = new MembersView();
        $view->render($data);
    }
    
    function add($data){
        $this->members->open();
        $this->members->addMember($data);
        $this->members->close();
        header('Location: index.php');
    }

    function delete($id){
        $this->members->open();
        $this->members->deleteMember($id);
        $this->members->close();
        header('Location: index.php');
    }

    function edit($id){
        $this->members->open();
        $this->members->status($id);
        $this->members->close();
        header('Location: index.php');
    }
}


?>