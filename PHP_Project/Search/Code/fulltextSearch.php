<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./fulltextSearch.css">
</head>
<body>
    <!-- Dùng hiển thị sản phẩm theo tìm kiếm -->
    
    <div class="container row mb-3 mr-3">
        <?php
        require 'connect.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {   
            if (isset($_POST["search"])) {
                if (empty($_POST["keyword"])) {
                        $error_keyWord = "<span style='color:red;'> Error : Please enter your key</span>";
                        echo $error_keyWord;
                        } else {
                            $keyword= $_POST["keyword"];
                            
                                $sql = "SELECT * from product inner join product_image 
                                ON product.id = product_image.id_product
                                inner join image on product_image.id_image = image.id
                                WHERE MATCH (name,content) AGAINST('$keyword' IN NATURAL LANGUAGE MODE)";

                                $result = $link->query($sql);  
                                if ($result) {
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $name = $row["name"];
                                            $subtitle =$row["subtitle"];     
                                            $sumary = $row["sumary"];
                                            $type = $row["type"];
                                            $price = $row["price"];     
                                            $discount = $row["discount"];
                                            $content = $row["content"];     
                                            $image = $row["image"];
                                            echo $div = "
                                                <div class='col-3 products'>
                                                    <div class='card text-left'>
                                                        <img class='card-img-top zoom' src='$image' alt='Product'>
                                                        <div class='card-body'>
                                                            <h5 class='card-title'>$name</h5>
                                                            <h5 class='text-danger'>$price<sup>đ</sup></h5>
                                                            <div class='display'>
                                                                <button class='btn btn-outline-success'><a class='nav-link' href='#'>Add</a></button>
                                                                <button class='btn btn-outline-success'><a class='nav-link' href='#'>Detail</a></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>";
                            }
                        } else {
                            "Thất bại truy vấn rồi";
                        }
                    }
                }
            }
        }
        ?>
    </div>
    <div class="comback">
         <p><a href="home.php">TRANG CHỦ </a></p>
    </div>




</body>

</html>