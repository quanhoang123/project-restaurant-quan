<?php 

include 'employee.php';


 $employeeObj = new DatabaseEmployee();

  




  if(isset($_GET['editId'])) {
    $editId = $_GET['editId'];
    $employee = $employeeObj->displyaRecordById($editId);
  }


  // Update Record in employee table
  if(isset($_POST['update'])) {
    $employeeObj->updateRecord($_POST);
  }  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
</head>
<body>
<div class="container">
 
 <form action ="edit.php" method="post">
  <div class="row">
  
    <div class ="col">
        <label for="exampleInputEmail1">Employee name: </label>
       <input type="text" class="form-control" name="name_employee" value="<?php echo $employee['name_employeer']; ?>" required="">
       
    </div>
    <div class ="col">
        <label for="exampleInputEmail1">Employee salary: </label>
        <input type="number" class="form-control" name="salary" value="<?php echo $employee['salary']; ?>" required="">
       
    </div>
  </div>
  <div class="row">
  <div class ="col">
        <label for="gender">Employee gender: </label>
        
        <select class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" name="gender" required="">
              <option  value="Nam">Nam</option>
              <option   value="Nữ">Nữ</option>
          
        </select>
       
    </div>
    <div class ="col">
        <label for="exampleInputEmail1">Employee phone: </label>
        <input type="number" class="form-control" name="phone" value="<?php echo $employee['phone']; ?>" required="">
       
    </div>
    
  </div>
  <div class="row">
  <div class ="col">
        <label for="exampleInputEmail1">Employee adress: </label>
        <input type="text" class="form-control" name="address" value="<?php echo $employee['address']; ?>" required="">
       
    </div>
    
  </div>
  <div class="row">

    
  </div>
  
>
<div class="row">
<div class ="col">
<input type="hidden" name="id_employee" value="<?php echo $employee['id_employeer']; ?>">
      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
    </div>
  </form>
    </div>

</div>
</form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>