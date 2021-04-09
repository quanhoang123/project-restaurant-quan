
   <?php 
        require_once "dataProduct.php";
        $dbProduct = new DatabaseProduct();
        if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
          $deleteId = $_GET['deleteId'];
          $dbProduct->deleteProduct($deleteId);
        }
  
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Admin</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  
</head>
<body>
<div class="container">
<br>
  <h2>WELCOME TO ADMIN</h2>
         <br> <br>

<?php

if(isset($_POST['find'])){
               
  $products=$dbProduct->search($_POST['search']);
 
}else{
  $products = $dbProduct->display();
}
          if (isset($_GET['msg1']) =="insert") {
            echo "<div class='alert alert-success alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    Thêm bàn thành công
                  </div>";
            } 
          if (isset($_GET['msg2']) == "update") {
            echo "<div class='alert alert-success alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    Đã cập nhật thành công product
                  </div>";
          }
          if (isset($_GET['msg3']) == "delete") {
            echo "<div class='alert alert-success alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    Xóa thành công tài khoản
                  </div>";
          }
        ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #ccccff;">
               
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav mr-auto">
                
                   <li class="nav-item active">
                       
                       <a class="navbar-brand" href="../employee/index.php">Employee</a>
                   </li>
                   
                   <li class="nav-item active">
                       <a class="navbar-brand" href="../room/roomAdmin.php">Room</a>
                   </li>
                 
                   </ul>
                   <form class="form-inline my-2 my-lg-0" action="" method="post">
                   <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                   <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="find" aria-placeholder="Nhập tên phòng vcaafn tìm kiếm !!">Search</button>
                   </form>
               </div>
               </nav>
      <div class="addProduct"> <a href="addProduct.php"class="btn btn-primary">Add product</a></div>        
            
    <div class="table-responsive">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name product</th>
        <th>Category</th>     
        <th>Image</th>
        <th>Old Price</th>
        <th>Price</th>
        <th>Created day </th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
       
      </tr>
    </thead>
    <tbody>
     <?php
       
     
        foreach ($products as $product) {
            ?>
          <tr>
         
                <td> <?php echo $product['id_newProd']; ?></td>
                <td> <?php echo $product['name_newProd']; ?></td>
                <td> <?php echo $product['id_prodCate']; ?></td>  
                <td><?php echo "<img src='$product[image]' alt='image' width='120px' height='70px'>";?></td>
                <td> <?php echo $product['old_price']; ?></td>
                <td> <?php echo $product['price']; ?></td>
                <td> <?php echo $product['create_date']; ?></td>
                <td> <?php echo $product['quantity']; ?></td>
                <td> <?php echo $product['Descriptions']; ?></td>
                <td> <?php echo $product['status']; ?></td>  
                <td>      
            <a href="updateProduct.php?edit=<?php echo $product['id_newProd'] ?>" style="color:green">
              <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
            <a href="productAdmin.php?deleteId=<?php echo $product['id_newProd']?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
          </td>         
        </tr>      
  </tbody>
      <?php } ?>

  </table>
  </div>
</div>
</body>
</html>
