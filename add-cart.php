<?php
require_once 'modal/connect.php';
session_start();
$con = new database();
$con->connect();

if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
    unset($_SESSION['cart']);
    header('location:view-cart.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$action = (isset($_GET['action'])) ? $_GET['action'] : 'add';

// var_dump($action);
// die();
// echo $action;
// die();
// echo "$id";
$query = mysqli_query($con->conn, "SELECT * from product where id_newProd ='$id'");

// var_dump($query);

if ($query) {
    $product = mysqli_fetch_assoc($query);
}

$item = [
    'id' => $product['id_newProd'],
    'name' => $product['name_newProd'],
    'image' => $product['image'],
    'price' => $product['price'],
    'quantity' => 1
];

if ($action == 'add') {
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] += 1;
    } else {
        $_SESSION['cart'][$id] = $item;
    }
}

if ($action == 'delete') {

    unset($_SESSION['cart'][$id]);
}
header('location:view-cart.php');
// echo "<pre>";
// print_r($_SESSION['cart']);
