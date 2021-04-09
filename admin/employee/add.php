<?php  
 require 'employee.php';


  $employeeObj = new DatabaseEmployee();

  if(isset($_POST['add'])) {
    $employeeObj->insertData($_POST);
  }
?>

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
error_reporting(0);
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $kt=true;
  $errname  = $errage =$erraddress = $salary = $errphone="";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  //check name
    if(empty($_POST['name_employee']) == false) {
        $name = test_input($_POST["name_employee"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $kt=false;
          $errname = "Chi cho phep nhap chu cai va khoang trang"; }
    } else {
        $kt=false;
    $errname = "Họ tên không được rỗng";
    }

//Check address
    if(empty($_POST['address']) == false) {
      $dc = test_input($_POST["address"]);
      //       $regex = '/[A-Za-z0-9\-\\,.]+/';
// $is_valid = preg_match($regex, $address);
      if (!preg_match("/[A-Za-z0-9\-\\,.]+/",$dc)) {
          $kt=false;
        $erraddress = "Chỉ cho phép nhập chữ cái, chữ số và khoảng trắng"; }
  } else {
      $kt=false;
  $erraddress = "Địa chỉ không được rỗng";
  }
//Check phone
    if(empty($_POST['phone']) == false) {
      $phone = test_input($_POST["phone"]);
      $check=0;
// Chỉ được phép là số
      for($i=0;$i<strlen($phone);$i++){
        if(!preg_match('/[0-9]/',$phone[$i])){
             $check=1;
        }
    }
// Độ dài của sdt trong khoảng 10->12
    if(strlen($phone)<10||strlen($phone)>12){
      $check=1;
     }
     if($check!=0){
      $errphone='So dien thoai khong dung!';
 }

    } else {
      $kt=false;
  $errphone = "So dien thoai không được rỗng";
  }

  if(empty($_POST['salary']) == false){
    $salary = test_input($_POST["salary"]);
    $check=0;
    if ($_POST['salary'] <=0){

    }
  }
}



?>
<div class="container">
<br><br>
<div><h3>Thêm nhân viên mới </h3></div>
<br>
<form action ="" method="post">

  <div class="row">
  
    <div class ="col">
        <label for="exampleInputEmail1">Employee name: </label>
        <input type="text" name ="name_employee" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required="">
       
    </div>
    <div class ="col">
        <label for="exampleInputEmail1">Phone: </label>
        <input type="number" name ="phone"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
       
    </div>
   
  </div>
  <div class="row">
  <div class ="col">
        <label for="exampleInputEmail1">Gender:</label>
        <select class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="gender"required="">
              <option  value="Nam">Nam</option>
              <option   value="Nữ">Nữ</option>
          
        </select>
        
    </div>
    <div class ="col">
        <label for="exampleInputEmail1">Salary:</label>
        <input type="number" name= "salary" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required="" >
  </div>
    
  </div>
  <div class="row">
  <div class ="col">
        <label for="exampleInputEmail1">Address:</label>
        <input type="text" name ="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
        
    </div>
    
  </div>
 
  <br>
<div class="row">
<div class="col">
<input type="submit" name="add" class="btn btn-primary" style="float:center;" value="Add">
<a href="index.php"class="btn btn-primary">Exit</a>
</div>

</div>

</form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

