<!DOCTYPE html>
<html>
<head>
    <title>1</title>
    <style>
        table{
            width: 500px;
            margin: auto;
            
        }
        td{
            padding: 10px;
        }
        .center{
            text-align: center;
            font-weight: bold;
         
       
        }
        input{
            width: 300px;
        }
        button{
            border: none;
            padding: 10px 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
   
?>
<?php
error_reporting(0);
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $kt=true;
// định nghĩa các biến và gán các giá trị rỗng
$errten = $erremail  = $errbl = $errphone="";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['ten']) == false) {
        $name = test_input($_POST["ten"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $kt=false;
          $errten = "Chi cho phep nhap chu cai va khoang trang"; }
    } else {
        $kt=false;
    $errten = "Họ tên không được rỗng";
    }
    if(empty($_POST['phone']) == false) {
            $phone = test_input($_POST["phone"]);
            if (preg_match("/^[a-zA-Z ]*$/",$phone)) {
                $kt=false;
              $errphone = "So dien thoai nhap sai"; }
              else{
                  if ((strlen($phone)>12)||strlen($phone)<10){
                    $kt=false;
                    $errphone = "So dien thoai nhap sai";
                  }
              }
    } else {
        $kt=false;
    $errphone = "So dien thoai không được rỗng";
    }
    if(empty($_POST['email']) == false) {
        $email=$_POST['email'];
        $regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i"; 
if(preg_match($regex, $email)) {  
} 
else { 
    $kt=false;
    $erremail = "Email không phu hop";
} 
    } else {
        $kt=false;
        $erremail = "Email không được rỗng";
    }
    if(empty($_POST['binh_luan']) == false) {
            // do something;
            } else{
                $kt=false;
    $errbl = "Noi dung không được rỗng";
    }
    }
    function ktTen($a){
            
    }
?>
 <form action="" method="post">
 <table>
            <tr class="center">
                <td colspan="2">
                <?php echo $errten."<br>"; 
                echo $erremail."<br>";
                echo $errphone."<br>";
                echo $errbl;   
                ?>
    </td>  
            </tr>
            </table>
        <table>
            <tr class="center">
                <td colspan="2">
                    FORM NHAP THONG TIN
                </td>
            </tr>
            <tr>
                <td>
                Ho va ten
                </td>
                <td>
                    <input type="text" name="ten" value="<?php echo $_POST['ten'] ?>" >
                </td>
            </tr>
            <tr>
                <td>
                Dien thoai
                </td>
                <td>
                    <input type="text" name="phone" value="<?php echo $_POST['phone']?>">
                </td>
            </tr>
            <tr>
                <td>
                Email
                </td>
                <td>
                    <input type="text" name="email" value="<?php echo $_POST['email'] ?>">
                </td>
            </tr>
            <tr>
                <td>
                Noi dung
                </td>
                <td>
                <textarea name="binh_luan" rows="5" cols="40" ><?php echo $_POST['binh_luan'] ?></textarea>
                </td>
            </tr>
            <tr class="center">
                <td colspan="2">
                    <button type="submit">SUBMIT</button>
                </td>
            </tr>
        </table>
            <table>
            <tr class="center">
                <td colspan="2">
                    Noi Dung
                </td>
                <tr>
                <td>
                <p>
                <?php 
                   if ($kt==1){
                       echo  $_POST['ten']."<br>"; 
                       echo  $_POST['phone']."<br>";
                       echo  $_POST['email']."<br>";
                       echo  $_POST['binh_luan']."<br>";   
                   }
                ?>
                </p>
                </td>
                </tr>
            </tr>
            </table>
    </form>
</body>
</html>