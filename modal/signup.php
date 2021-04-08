<?php
session_start();
error_reporting(0);
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$_SESSION['message'] = '';
$errten = $errphone = $erremail;
$mysqli = new mysqli('localhost', 'root', '', 'group_restaurant');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $mysqli->real_escape_string($_POST['fullname']);
    $username = $mysqli->real_escape_string($_POST['username']);
    $password =  $mysqli->real_escape_string($_POST['password']);
    $gender = $mysqli->real_escape_string($_POST['gender']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $phone = $mysqli->real_escape_string($_POST['phone']);
    $address = $mysqli->real_escape_string($_POST['address']);

    if (empty($_POST['fullname']) == false) {
        $name = test_input($_POST["fullname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $kt = false;
            $errten = "Chi cho phep nhap chu cai va khoang trang";
        }
    } else {
        $kt = false;
        $errten = "Họ tên không được rỗng";
    }
    if (empty($_POST['phone']) == false) {
        $phone = test_input($_POST["phone"]);
        if (preg_match("/^[a-zA-Z ]*$/", $phone)) {
            $kt = false;
            $errphone = "So dien thoai nhap sai";
        } else {
            if ((strlen($phone) > 12) || strlen($phone) < 10) {
                $kt = false;
                $errphone = "So dien thoai nhap sai";
            }
        }
    } else {
        $kt = false;
        $errphone = "So dien thoai không được rỗng";
    }

    if (empty($_POST['email']) == false) {
        $email = $_POST['email'];
        $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
        if (preg_match($regex, $email)) {
        } else {
            $kt = false;
            $erremail = "Email không phu hop";
        }
    } else {
        $kt = false;
        $erremail = "Email không được rỗng";
    }
    
if($kt=true){
    $sql = "INSERT INTO users(`fullname`,`user_name`,`password`,`gender`,`email`,`phone`,`address`) values ('$name','$username','$password','$gender','$email','$phone','$address')";
    $result = $mysqli->query($sql);

    if ($result) {
        $sql = "SELECT * FROM users WHERE `id_user` = $mysqli->insert_id LIMIT 1";
        $result = $mysqli->query($sql);
        $user = mysqli_fetch_array($result);
        if ($user) {
            $_SESSION['isAuthenticated'] = true;
            $_SESSION['user'] = $user;
            echo json_encode(['isError' => false, 'message' => "Register successfully!", 'user' => $user]);
        } else {
            echo json_encode(['isError' => true, 'message' => "Something went wrong22!"]);
        }
    }
}
   
}   
?>
