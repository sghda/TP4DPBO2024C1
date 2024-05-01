<?php
include_once ("models/DB.php");

class Members extends DB {
    function getMembers(){
        $sql = "select * from members";
        $result = $this->execute($sql);
        return $result;
    }

    function MembersJoinSub(){
        $sql = "SELECT members.id, members.name, members.email, members.phone, members.join_date, subscriptions.type_sub AS subscription_name, members.status
        FROM members
        JOIN subscriptions ON members.sub_type = subscriptions.id_sub
        ORDER BY members.id;";
        $result = $this->execute($sql);
        return $result;
    }

    function getMember($id){
        $sql = "select * from members where id=$id";
        $result = $this->execute($sql);
        return $result;
    }

    function addMember($data){
        $name = $data['tname'];
        $email = $data['temail'];
        $phone = $data['tphone'];
        $sub_type = $data['cmbsubs'];
        $join_date = date("Y-m-d H:i:s");
        $status = 0;
        $sql = "insert into members (name, email, phone, sub_type, join_date, status) values ('$name', '$email', '$phone', '$sub_type', '$join_date', '$status')";

        $result = $this->execute($sql);
        return $result;
    }

    function status($id){
        $query = "UPDATE members SET status = 1 WHERE id = '$id'";
        return $this->execute($query);
    }

    function deleteMember($id){
        $sql = "DELETE FROM `members` WHERE id=$id";
        $result = $this->execute($sql);
        return $result;
    }

    
}

?>