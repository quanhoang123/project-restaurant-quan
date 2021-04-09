

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>

<body>

<?php  
 include 'dataProduct.php';

  $dbProduct = new DatabaseProduct();

  // Insert Record in customer table
  
  if(isset($_POST['add'])) {
  
   

   $dbProduct->saveProduct($_POST);

   
  }
?>

<?php


?>



<div class="container">
<div><h2>Group 4 Restaurant</h2></div>

<div><h4>Add Product</h4></div>

<form action ="addProduct.php" method="post">

  <div class="row">
  
    <div class ="col">
        <label for="exampleInputEmail1">Product name: </label>
        <input type="text" name ="name_product" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name product"required="">
       
    </div>
    <div class ="col">
        <label for="exampleInputEmail1">category Id:</label>
        <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_prodCate"required="">
              <option  value="1">1</option>
              <option   value="2">2</option>
              <option  value="3">3</option>
              <option   value="4">4</option>
          
        </select>
    </div>
 
  </div>
  <div class="row"> 
   <div class ="col">
        <label for="exampleInputEmail1">Chọn file hình ảnh:</label>
        <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required="" >

        
    </div> 
    <div class ="col">
        <label for="exampleInputEmail1">Price:</label>
        <input type="number" name= "price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
  </div>
  </div>
  <div class="row">
  <div class ="col">
        <label for="exampleInputEmail1">Price Old:</label>
        <input type="number" name= "old_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
  </div>
  
    <div class ="col">
        <label for="exampleInputEmail1">Quantity : </label>
        <input type="number" name ="quantity"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
       
    </div>
  </div>
  <div class="row">
   <div class ="col"> 
        <label for="exampleInputEmail1">Description:</label>
        <input type="text" name ="descriptions" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
        
    </div>
    <div class ="col">
        <label for="exampleInputEmail1">Status: </label>
        <input type="number" name ="status"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
       
    </div>
  </div>
  <div class="row">
   <div class ="col"> 
        <label for="exampleInputEmail1">Create day:</label>
        <input type="date" name ="day" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
        
    </div>
  
  </div>
 
   
<div class="row">
<div class="col">
<input type="submit" name="add" class="btn btn-primary" style="float:center;" value="Add">
<a href="../product/productAdmin.php"class="btn btn-primary">Exit</a>

</div>
<div>
      

</div>
</div>

</form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

