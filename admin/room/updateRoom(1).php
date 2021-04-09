<?php
  include 'dataRoom.php';

  $dbUpdate = new DatabaseRoom();

  // Edit customer record
  if(isset($_GET['edit']) ) {
    
    $room =$dbUpdate->displyaRecordById($_GET['edit']);
  }
  if(isset($_POST['update'])) {
    $dbUpdate->updateRoom($_POST);
    require "roomAdmin.php";
  }  

  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Room</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>

<body>


<div class="container">
<div><h2>Nguyen Thi Diem ------Update</h2></div>



<form action ="updateRoom.php" method="post">

<div class="row">
  <div class ="col">
      <label for="exampleInputEmail1">Room name: </label>
      <input type="text" name ="name_room" value="<?php echo $room['name_room']; ?>"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name product"required="">
     
  </div>
  <div class ="col">
      <label for="exampleInputEmail1">category Id:</label>
      <input type="number" name="category_id"value="<?php echo $room['category_id']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required="" >
      
  </div>
</div>
<div class="row"> 
 <div class ="col">
      <label for="exampleInputEmail1">Status:</label>
      <input type="number" name="status" value="<?php echo $room['status']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required="" >
      
  </div> 
  <div class ="col">
      <label for="exampleInputEmail1">Price:</label>
      <input type="number" name= "price"value="<?php echo $room['price']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
</div>
</div>
<div class="row">
 <div class ="col"> 
      <label for="exampleInputEmail1">created day:</label>
      <input type="date" name ="created_day"value="<?php echo $room['created_day']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
      
  </div>
  <div class ="col">
      <label for="exampleInputEmail1">Quantity person: </label>
      <input type="number" name ="quantity_person"value="<?php echo $room['quantity_person']; ?>"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
     
  </div>
</div>
<div class="row">
<div class ="col">
<label for="exampleInputEmail1">Chọn file hình ảnh:</label>
      <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required="" >

  </div>
</div>



 
<div class="row">
<div class="col">
<input type="hidden" name="id" value="<?php echo $room['id']; ?>">
<input type="submit" name="update" class="btn btn-primary" style="float:center;" value="Update">
</div>

</div>
</form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

