<?php
session_start();
require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <center>
                <center>
                    <h2> writing code here..</h2>
                </center>
                <div>
                    <label> Your Code </label>
                    <input type="number" name="coding">
                </div>
                <div>
                    <input type="submit" name="save" value="Save">

                </div>
                <!-- <input type="submit" class="btn btn-danger" name="cc" value="Cance"> -->

                <?php
                if (isset($_POST['save'])) {

                    $codes = $_POST['coding'];
                    if ($codes == $_SESSION['code']) {
                        $name = " User";
                        $email = $_SESSION['email'];
                        $pass = $_SESSION['password'];
                        $status = "Confirm ";
                        $code = $_SESSION['code'];
                        $role = " Admin";
                        // đẩy lên database
                        $sql = "INSERT into users (name, email,password, code, status, role) values ( '$name', '$email' ,'$pass','$status','$code', '$role')";
                        if (mysqli_query($conn, $sql)) {
                            echo " thanh cong insert du lieu";
                            //  header("Location:logup.php"); //  $status = " verification" ; $role = "Admin "; $name = "User "; luu vao khi nhap dúng  tử động load trang 
                        } else {
                            echo "Không thanh công được";
                        }

                        $query = mysqli_query($conn, " SELECT * from users");
                ?>
                        <!-- In ra Thành bảng  -->
                        <?php
                        while ($row = mysqli_fetch_assoc($query)) { // lệnh in ra từng hàng
                        ?>

                            <tr>
                                <td><?php $row['user_id'] ?></td>
                                <td><?php $row['name'] ?></td>
                                <td><?php $row['email'] ?></td>
                                <td><?php $row['password'] ?></td>
                                <td><?php $row['code'] ?></td>
                                <td><?php $row['status'] ?></td>
                                <td><?php $row['role'] ?></td>

                            </tr>
                        <?php
                        }
                        ?>
                <?php

                        // đẩy lên database
                        echo " <br><br>sign up is success ...!";
                    } else {
                        echo " <center> <h4> Your Code is wrong </h4>  </center>";
                    }
                }

                ?>
            </center>

        </form>
    </div>



</body>

</html>