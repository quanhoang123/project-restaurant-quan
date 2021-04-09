

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
 include 'dataRoom.php';

  $dbRoom = new DatabaseRoom();

  // Insert Record in customer table
  if(isset($_POST['add'])) {
   $dbRoom ->saveRoom($_POST);
  }
?>
<div class="container">
<div><h2>Nguyen Thi Diem ------Add</h2></div>


<form action ="addRoom.php" method="post">

  <div class="row">
  
    <div class ="col">
        <label for="exampleInputEmail1">Room name: </label>
        <input type="text" name ="name_room" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name product"required="">
       
    </div>
    <div class ="col">
        <label for="exampleInputEmail1">category Id:</label>
        <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_id"required="">
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
        <label for="exampleInputEmail1">created day:</label>
        <input type="date" name ="created_day" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
        
    </div>
    <div class ="col">
        <label for="exampleInputEmail1">Quantity person: </label>
        <input type="number" name ="quantity_person"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
       
    </div>
  </div>
  <div class="row">
   <div class ="col"> 
        <label for="exampleInputEmail1">Description:</label>
        <input type="text" name ="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
        
    </div>
    <div class ="col">
        <label for="exampleInputEmail1">Status: </label>
        <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="status"required=""> 
              <option   value="1">1</option>
              <option  value="0">0</option>
          
        </select>
    </div>
  </div>
 
   
<div class="row">
<div class="col">
<input type="submit" name="add" class="btn btn-primary" style="float:center;" value="Add">
 <a href="../room/roomAdmin.php" class="btn btn-primary">Exit</a>        

</div>

</div>

</form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

