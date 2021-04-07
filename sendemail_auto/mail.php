<!DOCTYPE html>
<html>
    <head>
        <title>Gmail</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
         
            
            // $subject = $_POST['subject'];
           
            if (array_key_exists('sub', $_POST)) {
                
               
                $name = $_POST['form_name'];
                $email = $_POST['email'];
                include 'library.php'; // include the library file
                require 'vendor/autoload.php';
                
                $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                try {
                    //Server settings
                    $mail->CharSet = "UTF-8";
                    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = SMTP_UNAME;                 // SMTP username
                    $mail->Password = SMTP_PASSWORD;                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                    //Recipients
                    $mail->setFrom(SMTP_UNAME, "Hello.com");
                    $mail->addAddress($email, 'Tên người nhận');     // Add a recipient | name is option
                    $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');                 
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject ="HElooo";
                    $mail->Body = "helllo";
                    $mail->AltBody = "hellolo"; //None HTML
                    $result = $mail->send();
                    if (!$result) {
                        $error = "Có lỗi xảy ra trong quá trình gửi mail";
                    }
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
            }
            else{
               
                echo "<script>alert('bam bam bam')</script>";
            }


            ?>
           

    </body>
</html>
