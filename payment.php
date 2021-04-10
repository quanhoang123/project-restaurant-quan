<?php
session_start();
include "modal/connect.php";
$dt=new database();
$flag=false;
if(isset($_POST['checkout'])){
    if (!isset($_SESSION['user'])) {
        echo '<script>alert("You need to login first.")</script>';        
        $flag==true;
        echo '<script>window.location="index.php"</script>';
    }


}
$id_user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo '
<li></li>
<li><a href="modal/logout.php">'.$id_user['user_name'].'</a></li>                                     
';
$insert_orders =  "INSERT INTO orders(id_user,total_money.) values ('" . $id_user."',1),";
$orders_query = mysqli_query($dt->conn,$insert_orders);
if ($insert_orders) {
    foreach ($_SESSION['cart'] as $key => $value) {
    }
}
?>
</body>
</html>
