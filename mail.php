<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if (isset($_POST['form_name']) && isset($_POST['email'])) {
        $name = $_POST['form_name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require_once "../PHPMailer/PHPMailer.php";
        require_once "../PHPMailer/SMTP.php";
        require_once "../PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "quan.hoang22@student.passerellesnumeriques.org";
        $mail->Password = 'quanhoang123';
        $mail->Port = 465;//465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress($email);
        $mail->Subject = $subject;
        $mail->Body = "jasdhajsdhaosdioasdhasjkdhasiodasdhasoidasiodhasioduasio";

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
