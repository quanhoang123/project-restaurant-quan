<html>
    <body>
    <?php
    session_start();
    require_once '../modal/connect.php';
    use PHPMailer\PHPMailer\PHPMailer;
        ini_set("display_errors",0);

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
        require_once "../Email/PHPMailer.php";
        require_once "../Email/Exception.php";
        require_once "../Email/SMTP.php";
        require_once "../Email/OAuth.php";
        include 'library.php'; // include the library file

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_UNAME; 
        $mail->Password = SMTP_PASSWORD; 
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";


        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom(SMTP_UNAME,'RESTAURANT SHOP');
        $mail->addAddress($email);
        $mail->Subject = ("THANKS YOU SO MUCH");
        $mail->Body = " <h3> WELCOME TO Book table </h3>";
        
        if ($mail->send()) {
           echo '<script>alert("Book table thannh cong")</script>';
           
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
        // exit(json_encode(array("status" => $status, "response" => $response)));
    }
    ?>

    </body>

</html>