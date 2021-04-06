<?php
 header("Content-Type: application/json");
    if(!empty($_GET['id'])){
        $id= $_GET['id'];  
        require "modal/connect.php";
        $dt = new database();
        $dt->connect();
        $sql = "select * from discount_product where id_product=$id";
        $result = mysqli_query($dt->conn,$sql);
        while($row =mysqli_fetch_assoc($result) )
    {
        echo (json_encode($row));
        die();
    }
    }
?>