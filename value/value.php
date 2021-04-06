<?php
 header("Content-Type: application/json");
    if(!empty($_GET['id'])){
        $id= $_GET['id'];  
        require "../modal/connect.php";
        $dt = new database();
        $dt->connect();
        $sql = "select * from room_restaurant where id_room=$id";
        $result = mysqli_query($dt->conn,$sql);
        while($row =mysqli_fetch_assoc($result) )
    {
        echo (json_encode($row));
        die();
    }
    }
?>