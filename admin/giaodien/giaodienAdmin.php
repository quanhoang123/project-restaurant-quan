<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="/dist/css/btr-menu.css" rel="stylesheet" />
    <title>Giao dien Admin</title>
</head>
<body>
<div class="container">
    <div class="col-12 col-sm-6 col-md-8 col-lg-10 col-xl-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        
                        <a class="navbar-brand" href="../employee/index.php">Employee</a>
                    </li>
                    <li class="nav-item active">
                        
                        <a class="navbar-brand" href="../product/productAdmin.php">Product</a>
                    </li>
                    <li class="nav-item active">
                        
                        <a class="navbar-brand" href="../room/roomAdmin.php">Room</a>
                    </li>
                    <li class="nav-item active">
                        <a class="navbar-brand" href="#">List of orders</a>
                    </li>
                   
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                </nav>
        <div>
        <div class="col-12 col-sm-6 col-md-8 ">
        <nav class="navbar navbar-inverse navbar-fixed-top">
    
       
      </div>
    </nav>
        </div>
</div>
<div class="col-12 col-sm-6 col-md-8 col-lg-10 col-xl-12">
<img src="https://danangfantasticity.com/wp-content/uploads/2019/06/trai-nghiem-am-thuc-phap-dang-cap-tren-dinh-da-nang-tai-f29-sky-bar-restaurant.jpg" class="rounded" alt="Cinque Terre" width="100%" height="100%"> 

</div>





</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/Theme/js/btr-menu.js"></script>
<script>
    $(document).ready(function () {
        $("#navbar").btrmenu();
    });
</script>
</body>
</html>