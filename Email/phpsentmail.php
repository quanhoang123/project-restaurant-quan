<html>

<body>
    <?php
    session_start();
    require_once '../modal/connect.php';

    use PHPMailer\PHPMailer\PHPMailer;

    ini_set("display_errors", 0);

    if (isset($_POST['submit'])) {
        $email = "quanhuhoq111@gmail.com";
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $name_food = $_POST['foods'];
        $name_room = $_POST['room'];
        $numberPerson =$_POST['adults'];
        $children = $_POST['children'];
        $type = $_POST['event'];
        $date_time = $_POST['time-picker'];
        require_once "../Email/PHPMailer.php";
        require_once "../Email/Exception.php";
        require_once "../Email/SMTP.php";
        require_once "../Email/OAuth.php";
        include 'library.php'; // include the library file

        $mail = new PHPMailer();
     
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_UNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        $user=$_SESSION['user'];
        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom(SMTP_UNAME, 'RESTAURANT SHOP');
        $mail->addAddress($email);
        $mail->Subject = ("THANKS YOU SO MUCH");
        $mail->Body = ' <h3>User account'.$user["user_name"] .' has a reservation with us </h3>' .
                "<table border=1>
                        <tr>
                            <th>ID</th>
                            <th>Content</th>
                        
                        </tr>
                        <tr>
                            <td>Checkin</td>
                            <td>$checkin</td>
                          
                        </tr>
                        <tr>
                            <td>Checkout</td>
                            <td>$checkout</td>
                        
                        </tr>
                        <tr>
                            <td>Food</td>
                            <td>$food</td>                       
                        </tr>
                        <tr>
                            <td>Room</td>
                            <td>$room</td>                       
                        </tr>
                        <tr>
                            <td>Number of Person</td>
                            <td>$numberPerson</td>                       
                        </tr>
                        <tr>
                            <td>Number of Person</td>
                            <td>$children</td>                       
                        </tr>
                        <tr>
                            <td>DateTime</td>
                            <td>$date_time</td>                     
                        </tr>
                        <tr>
                            <td>Type</td>
                            <td>$type</td>                   
                      </tr>
                      </table>
                      ";

        if ($mail->send()) {
            echo '<script>alert("Book table thannh cong")</script>';
            header('location:../index.php');
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
        // exit(json_encode(array("status" => $status, "response" => $response)));
    }
    ?>

</body>

</html>