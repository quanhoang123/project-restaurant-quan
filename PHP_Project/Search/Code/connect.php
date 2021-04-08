<html>
    <body>
    <?php
              error_reporting (0);
                $link = new mysqli("localhost", "root","","bonsaigarden");
                if($link){
                    // echo "Kết nối thành công nè </br></br>";
                }else{
                    echo "Thất bại rồi";
                }
               ?>
    </body>
</html>
