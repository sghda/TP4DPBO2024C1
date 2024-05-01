<?php

class Subscriptions extends DB {
    function getSubscriptions(){
        $sql = "select * from subscriptions";
        $result = $this->execute($sql);
        return $result;
    }

    function getSubscriptionsById($id){
        $sql = "select * from subscriptions where id_sub=$id";
        return $this->execute($sql);
    }

    function addSub($data){
        $type = $data['type_sub'];
        $dur = $data['duration'];
        $price = $data['harga'];
        $sql = "insert into subscriptions (type_sub, duration, harga) values ('$type', '$dur', '$price')";
        $result = $this->execute($sql);
        return $result;
    }

    function editSub($data){
        $id = $data['id_sub']; 
        $type = $data['type_sub'];
        $dur = $data['duration'];
        $price = $data['harga'];
        
        $sql = "UPDATE subscriptions SET type_sub='$type', duration='$dur', harga='$price' WHERE id_sub=$id";
        
        $result = $this->execute($sql);
        return $result;
    }
    

    function deleteSubscriptions($id){
        $sql = "DELETE FROM `subscriptions` WHERE id_sub=$id";
        $result = $this->execute($sql);
        return $result;
    }    
}

?>