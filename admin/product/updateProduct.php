<?php
  include 'dataProduct.php';

  $dbUpdate = new DatabaseProduct();

  // Edit customer record
  if(isset($_GET['edit']) ) {
    
    $product = $dbUpdate->displyaRecordById($_GET['edit']);
  }
  
  if(isset($_POST['update'])) {
    $dbUpdate->updateProduct($_POST);
    include 'productAdmin.php';
  } 

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>

<body>


<div class="container-responsive">
<div><h2>Nguyen Thi Diem ------Update</h2></div>



<form action ="" method="post">

<div class="row">
  <div class ="col">
      <label for="exampleInputEmail1">Product name: </label>
      <input type="text" name ="name_product" value="<?php echo $product['name_newProd']; ?>"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name product"required="">
     
  </div>
  <div class ="col">
      <label for="exampleInputEmail1">category Id:</label>
      <input type="number" name="category_id"value="<?php echo $product['id_prodCate']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required="" >
      
  </div>
</div>
<div class="row"> 
 <div class ="col">
      <label for="exampleInputEmail1">Status:</label>
      <input type="number" name="status" value="<?php echo $product['status']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required="" >

      
  </div> 
  <div class ="col">
      <label for="exampleInputEmail1">Price:</label>
      <input type="number" name= "price"value="<?php echo $product['price']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
</div>
</div>
<div class="row">
 <div class ="col"> 
      <label for="exampleInputEmail1">Descriptions:</label>
      <input type="text" name ="description"value="<?php echo $product['Descriptions']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
      
  </div>
  <div class ="col">
      <label for="exampleInputEmail1">Quantity : </label>
      <input type="number" name ="quantity"value="<?php echo $product['quantity']; ?>"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
     
  </div>
</div>
<div class="row">
<div class ="col">
<label for="exampleInputEmail1">Chọn file hình ảnh:</label>
      <input type="file" name="image" value="<?php echo $product['image']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required="" >

  </div>
  <div class ="col">
      <label for="exampleInputEmail1">Old Price:</label>
      <input type="number" name= "old_price"value="<?php echo $product['old_price']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
</div>
</div>
<div class="row">
  <div class ="col">
      <label for="exampleInputEmail1">Created day:</label>
      <input type="date" name= "create_date"value="<?php echo $product['create_date']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
</div>
</div>

<div class="row">
<div class="col">
<input type="hidden" name="id_newProd" value="<?php echo $product['id_newProd']; ?>" value="Update">
<input type="submit" name="update" class="btn btn-primary" style="float:center;" value="Update">
</div>

</div>
</form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

