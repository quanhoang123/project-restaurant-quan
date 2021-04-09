
 <?php 
        require_once "dataRoom.php";
        $dbRoom = new DatabaseRoom();
        if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
          $deleteId = $_GET['deleteId'];
          $dbRoom->deleteRoom($deleteId);
        }
  
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>room Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link href="/dist/css/btr-menu.css" rel="stylesheet" />
</head>
<body>

<?php 
function search_room (){
  {
      $name_search = $_POST["find"];
      $searching = 0;
      global $rooms;
      foreach ( $rooms as $key =>$value){
          foreach ($value as $value_key => $value_value){

        

              if ($value_value['name'] == $name_search) {
                  echo "<div class='card col-3'> 
                  <img class='card-img-top' src='{$value_value['image']}'  alt='Card image cap' width='50px'>
                  <div class='card-body'>
                      <h5 class='card-title'>{$value_value['name_product']}  </h5>
                      <p class='card-text'> {$value_value['category_id']} </p>
                      <p class='card-text'> {$value_value['description']} </p>
                      <p class='card-text'> {$value_value['price']} </p>
                      <p class='card-text'> {$value_value['created_day']} </p>
                      <p class='card-text'> {$value_value['quantity_person']} </p>
                      <p class='card-text'> {$value_value['status']} </p>
                  </div>
              </div> ";
              }
          }
          
      }
  }
}



?>


<div class="container">
  <h2>WELCOME TO ADMIN</h2>
         <br>  <br>  <br>
         <?php 
              if(isset($_POST['find']))
              $key = $_POST['search'];
              $query = "SELECT * FROM room_restaurant WHERE name_room LIKE '%%search%%'";
          //     $result = $this->mysqli->query($query);
          //     $num_result = $result->num_rows;    
          //       if($num_result > 0){
          //           while($rows =$result->fetch_assoc()){               
          //               $dbRoom->data[]=$rows;
                        
          //           }           
          //           return $dbRoom->data;
          //   } 
          //  else {
          //   echo 'Không có phòng phù hợp.';    
          //   }
                  

           $dbRoom->display($query)
     ?>
              
         ?>
<!-- ----------------------Search---------------- -->
 

<?php
          if (isset($_GET['msg1']) == "insert") {
            echo "<div class='alert alert-success alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    Your Registration added successfully
                  </div>";
            } 
          if (isset($_GET['msg2']) == "update") {
            echo "<div class='alert alert-success alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    Your Registration updated successfully
                  </div>";
          }
          if (isset($_GET['msg3']) == "delete") {
            echo "<div class='alert alert-success alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    Record deleted successfully
                  </div>";
          }
        ?>
      <div class="col-12 col-sm-6 col-md-8 col-lg-10 col-xl-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #ccccff;">
               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        
                        <a class="navbar-brand" href="../employee/index.php">Employee</a>
                    </li>
                    <li class="nav-item active">
                        
                        <a class="navbar-brand" href="../product/productAdmin.php">Product</a>
                    </li>
                    
                    <li class="nav-item active">
                        <a class="navbar-brand" href="#">List of orders</a>
                    </li>
                  
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="find" aria-placeholder="Nhập tên phòng vcaafn tìm kiếm !!">Search</button>
                    </form>
                </div>
                </nav>
        <div>
      <div class="addProduct"> <a href="http://localhost/diem-project/diem-project-crud/room/addRoom.php" class="btn btn-primary">Add new room</a></div>        
            
    <div class="table-responsive">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name product</th>
        <th>Image</th>
        <th>Description</th>
        
        <th>Category</th>
        <th>Price</th>
        <th>Created day</th>
        <th>Quantity person</th>
        
        <th>Action</th>
       
      </tr>
    </thead>
     <?php
        $rooms = $dbRoom->display();
        if($rooms != 0){
        foreach ($rooms as $room) {
            ?>
  <tbody>
          <tr>
                <td> <?php echo $room['id_room']; ?></td>
                <td> <?php echo $room['name_room']; ?></td>
                <td><?php echo "<img src='$room[image_room]' alt='image' width='120px' height='70px'>";?></td>
                <td> <?php echo $room['description']; ?></td>
                <td> <?php echo $room['category_id']; ?></td>    
                <td> <?php echo $room['price']; ?></td>
                <td> <?php echo $room['created_day']; ?></td>
                <td> <?php echo $room['quantity_person']; ?></td>
               
                <td><a href ="<?php echo 'updateRoom.php?edit='.$room['id_room']?>"style="color:green"><i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
                <a href ='<?php echo 'roomAdmin.php?deleteId='.$room['id_room']?>'><i class='fas fa-cogs'></i></a></td>       
                        
        </tr>      
  </tbody>
      <?php }} ?>

      

  </table>
  </div>
</div>
</body>
</html>
