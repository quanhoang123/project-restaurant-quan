<?php
session_start();
include "modal/connect.php";
$id_user = $_SESSION['id_user'];

$insert_oders =  "INSERT INTO oders(id_user,total_money.) values ('" . $id_user . "',1),";
$oders_query = mysqli_query($insert_oders);
if ($insert_oders) {
    foreach ($_SESSION['cart'] as $key => $value) {
    }
}
