<?php
session_start();

require_once '../modal/connect.php';

use PHPMailer\PHPMailer\PHPMailer;


if (isset($_POST['sendmailSignup'])) {

    $username = $mysqli->real_escape_string($_POST['username']);
    $password =  $mysqli->real_escape_string($_POST['password']);
    $email = $mysqli->real_escape_string($_POST['email']);
 
    $email = $_SESSION['email'];
    require_once "SendEmail/PHPMailer.php";
    require_once "SendEmail/SMTP.php";
    require_once "SendEmail/Exception.php";

    $mail = new PHPMailer();

    //SMTP Settings
    $mail->isSMTP();
    $mail->CharSet = "utf-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "jojomi1234@gmail.com"; //enter you email address
    $mail->Password = '20062001'; //enter you email password

    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";
    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($email);
    $mail->addAddress("$email"); //enter you email address
    $mail->Subject = ("RESTAURANT SHOP <p>MÃ XÁC NHẬN ĐĂNG KÍ</p>");
    $mail->Body = " <h3>Thank you for submitting a calendar for us. </h3>" .
    "<table border=1>
                <tr>
                    <th>ID</th>
                    <th>Content</th>
                
                </tr>
                <tr>
                    <td>Pasword</td>
                    <td>$password</td>
                  
                </tr>
                <tr>
                    <td>User</td>
                    <td>$user</td>
                
                </tr>
                
              </table>
              ";

    if ($mail->send()) {
        header('location:../index.php');
    } else {
        $status = "failed";
        $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
    }
    
}
?>