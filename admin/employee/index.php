<?php
include 'employee.php';

$employeeObj = new DatabaseEmployee();

// Delete record from table
if(isset($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $employeeObj->deleteRecord($deleteId);
}



if(isset($_POST['find'])){
               
  $employees=$employeeObj->search($_POST['search']);
 
}else{
  $employees = $employeeObj->displayData();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>employee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>

<body>
<div class="card text-center" style="padding:15px;">
  <h4>Trang Admin về thông tin nhân viên </h4>
</div><br><br> 

<div class="container">
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
     <nav class="navbar navbar-expand-lg navbar-light bg-light" >
               
               <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: #b3ffff; height:60px; ">
                   <ul class="navbar-nav mr-auto " >
                
                   <li class="nav-item active">
                       
                       <a class="navbar-brand" href="../product/productAdmin.php">Product</a>
                   </li>
                   
                   <li class="nav-item active">
                       <a class="navbar-brand " href="../room/roomAdmin.php">Room</a>
                   </li>
                 
                   </ul>
                   <form class="form-inline my-2 my-lg-0" action="" method="post">
                   <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                   <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="find" aria-placeholder="Nhập tên phòng vcaafn tìm kiếm !!">Search</button>
                   </form>
               </div>
               </nav>
  <h4>View Employees
    <a href="add.php" class="btn btn-primary" style="float:right;">Add New Record</a>
  </h4>
  <table class="table table-hover table-striped" style="border: 1px;">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Gender</th>
        <!-- <th>Age</th> -->
        <th>Address</th>
        <th>phone</th>
        <!-- <th>Position</th> -->
        <th>Salary</th>
        <!-- <th>Date Of work</th> -->
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          
          foreach ($employees as $employee) {
        ?>
        <tr>
<!-- +++++++++++++++++++++++++++++++++++++++ Lỗi gọi thuộc tính database sai++++++++ xem lại thuộc tính của bảng employees -->

<?php
          //  <td> echo $employee['id_employee'] </td> tên thêm đuôi 'r'
          // <td><?php echo $employee['name_employee'] </td>tên thêm đuôi 'r'
          // <td><?php echo $employee['gender'] </td>
          // <td><?php echo $employee['age'] </td>   không có thuộc tính này
          // <td><?php echo $employee['address'] </td>
          // <td><?php echo $employee['phone'] </td>
          // <td><?php echo $employee['positions'] </td> ko có thuộc tính này
          // <td><?php echo $employee['salary'] </td>
          // <td><?php echo $employee['dateOfwork'] </td>  không có thuộc tính này
?>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


          <td><?php echo $employee['id_employeer'] ?></td>
          <td><?php echo $employee['name_employeer'] ?> </td>
          <td><?php echo $employee['gender'] ?></td>
          
          <td><?php echo $employee['address'] ?></td>
          <td><?php echo $employee['phone'] ?></td>
          
          
          <td><?php echo $employee['salary'] ?></td>
       


          <td>

          <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ lỗi gọi thuộc tính id_employeer++++++++++++++++++++++++ -->
            <!-- <a href="edit.php?editId= echo $employee['id_employee'] " style="color:green"> là id_employeer 
              <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
            <a href="index.php?deleteId= echo $employee['id'] " style="color:red" onclick="confirm('Are you sure want to delete this record')">  là id_employeer 
              <i class="fa fa-trash" aria-hidden="true"></i>
            </a> -->

            <a href="edit.php?editId=<?php echo $employee['id_employeer'] ?>" style="color:green">
              <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
            <a href="index.php?deleteId=<?php echo $employee['id_employeer'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>