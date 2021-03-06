<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Restaurant</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-index.css">
    <!-- Responsive -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />
    <script src="js/modernizer.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>
<style>
    
</style>
<body>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- logo -->
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="#menu">Menu</a></li>
                                    <li><a href="#our_team">Team</a></li>
                                    <li><a href="#product">Product</a></li>
                                    <li><a href="#reservation">Book Table</a></li>
                                    <li><a href="#footer">Contact us</a></li>
                                    <li><a href="#" class="btn wishlist"><i class="fa fa-heart"></i><span>(0)</span></a></li>
                                    <li> <a href="#" class="btn cart"><i class="fa fa-shopping-cart"></i><span>(0)</span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- div ???nh b??a -->
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Enjoy With <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Our Group:Family:" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>Restaurant </h2>
                            <p>H??y tin t?????ng l???a ch???n ??i???m ?????n m???i ng??y ????? c?? m???t b???a ??n ???m ??p nh??</p>
                            <div class="book-btn">
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Book my Table</a>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Bar Start -->
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index.html">
                            <img src="" alt="Logo" width="50%">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>                   
            </div>
        </div>
    </div>
    <!-- Bottom Bar End -->
    <!-- div about us -->
    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="img/images_content/about-main.jpg" alt="About Main Image">
                            <img class="about-inset" src="img/images_content/about-inset.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> About Us </h2>
                        <h3>IT STARTED, QUITE SIMPLY, LIKE THIS....</h3>
                        <p> T???i ????y t???i ????y n??o m???i ng?????i</p>
                        <p> T???i ????y t???i ????y n??o m???i ng?????i</p>
                        <p>T???i ????y t???i ????y n??o m???i ng?????i</p>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <!-- div product -->
    <div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Today's Special </h2>
                        <h5 class="title-caption text-center"> M??n ??n c???a ch??ng t??i. </h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            <?php
                                require_once "modal/connect.php";
                                $dt = new database();
                                $dt->connect();
                                $sql = 'select * from products';
                                $getAll = $dt->select($sql);
                                foreach ($getAll as $product) {
                                ?>
                            <div class="item item-type-zoom">
                                <a class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">
                                            <?php echo $product['name_newProd'] ?>
                                            <div class="line"></div>
                                            <div class="dit-line">Anh di ???a ????m anh s??? nha ?????ng ????? anh ??i ???a ????m nh?? em.</div>
                                            <div class="cart" style="float:left border-radius=24px">
                                                    <button href="#" style="color:black"><i class="fa fa-shopping-cart"></i></button>
                                                    <button href="#" style="color:black"><i class="fa fa-heart"></i></button>
                                                </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img src="<?php echo $product['image']?>" alt="sp-menu" width="10px;" height="10px;">                                 
                                </div>
                            </div>
                            <?php } ?>                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END special-menu -->

    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
                            Our Menu
                        </h2>
                        <p class="title-caption text-center"> Ch???n ch???n v?? ch???n nha qu?? v??? </p>
                    </div>
                    <div class="tab-menu">
                        <div class="slider slider-nav">

                            <div class="tab-title-menu">
                                <h2>Break Fast</h2>
                                <p> <i class="flaticon-canape"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>Wedding</h2>
                                <p> <i class="flaticon-dinner"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>Wedding</h2>
                                <p> <i class="flaticon-desert"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>DRINKS</h2>
                                <p> <i class="flaticon-coffee"></i> </p>
                            </div>
                        </div>
                        <div class="slider slider-single">           
                            <!-- Tab pen product  -->
                            <!-- tab product wedding -->
                            <div>
                                <?php
                                    require_once "modal/connect.php";
                                    $dt = new database();
                                    $dt->connect();
                                    $sql = 'select * from wedding_img';
                                    $getAll = $dt->select($sql);
                                    foreach ($getAll as $wedding) {
                                ?>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="<?php echo $wedding['image']?>" alt="" class="img-responsive">
                                        <div>
                                            <h3><?php echo $wedding['name']?></h3>
                                            <p>
                                            <?php echo $wedding['description']?>
                                            </p>
                                        </div>
                                        <span class="offer-price">$<?php echo $wedding['price']?></span>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>

                            <!-- tab product wedding -->
                            <div>
                                <?php
                                    require_once "modal/connect.php";
                                    $dt = new database();
                                    $dt->connect();
                                    $sql = 'select * from wedding_img';
                                    $getAll = $dt->select($sql);
                                    foreach ($getAll as $wedding) {
                                ?>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="<?php echo $wedding['image']?>" alt="" class="img-responsive">
                                        <div>
                                            <h3><?php echo $wedding['name']?></h3>
                                            <p>
                                            <?php echo $wedding['description']?>
                                            </p>
                                        </div>
                                        <span class="offer-price">$<?php echo $wedding['price']?></span>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            
                            <!-- tab product wedding -->
                            <div>
                                <?php
                                    require_once "modal/connect.php";
                                    $dt = new database();
                                    $dt->connect();
                                    $sql = 'select * from wedding_img';
                                    $getAll = $dt->select($sql);
                                    foreach ($getAll as $wedding) {
                                ?>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="<?php echo $wedding['image']?>" alt="" class="img-responsive">
                                        <div>
                                            <h3><?php echo $wedding['name']?></h3>
                                            <p>
                                            <?php echo $wedding['description']?>
                                            </p>
                                        </div>
                                        <span class="offer-price">$<?php echo $wedding['price']?></span>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                          
                            <!-- tab product drink -->
                            <div>
                                <?php
                                    require_once "modal/connect.php";
                                    $dt = new database();
                                    $dt->connect();
                                    $sql = 'select * from drinks';
                                    $getAll = $dt->select($sql);
                                    foreach ($getAll as $drinks) {
                                ?>
                                        
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="<?php echo $drinks['image_water']?>" alt="" class="img-responsive">
                                            <div>
                                                <h3><?php echo $drinks['name_water']?></h3>
                                                <p>
                                                <?php echo $drinks['description']?>
                                                </p>
                                            </div>
                                            <span class="offer-price">$<?php echo $drinks['price']?></span>
                                        </div>
                                    </div>
                                <?php 
                                } ?>       
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end menu -->

    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
                            Our Team
                        </h2>
                        <p class="title-caption text-center">??n g?? c??ng ???????c nh??ng kh??ng ??n gian ??n ch??ng nha. </p>
                    </div>
                    <div class="team-box">
                        <div class="row">
                            <?php
                                require_once "modal/connect.php";
                                $dt = new database();
                                $dt->connect();
                                $sql = 'select * from image_member';
                                $getAll = $dt->select($sql);
                                foreach ($getAll as $img) {
                            ?>        
                            <div class="col-md-3 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="<?php echo $img['image_mem']; ?>" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h1><?php echo $img['name_mem'] ;?></h1>
                                        <p><?php echo $img['Note'] ;?></p>
                                        <ul class="team-social">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>                              
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="product" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
                            S???n ph???m c???a ch??ng t??i
                        </h2>
                        <p class="title-caption text-center">M???i c??c b???n th?????ng th???c l???a ch???n ???m th???c m??nh mu???n </p>
                    </div>
                    <div class="gal-container clearfix">

                        <?php
                                require_once "modal/connect.php";
                                $dt = new database();
                                $dt->connect();
                                $sql = 'select * from discount_product';
                                $getAll = $dt->select($sql);
                                foreach ($getAll as $discount) {
                        ?>    
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <button  data-toggle="modal" data-target="#2"class="show" value="<?php echo $discount['id_product']?>" >
                                    <img src="<?php echo $discount['image']?>" alt=""/>
                                </button>
                                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
                                            <div class="modal-body">
                                                <img id='id' alt="" width="100px" height="100px;  " />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4 id='name_product' class="col-md-9" ></h4>
                                                <h5 id='price' class="col-md-3"></h5>                                                                                      
                                            </div>
                                            <div class="modal-footer foot" style="float:left">
                                                <button ><i class="fa fa-shopping-cart"></i></button>
                                                <button href=""><i class="fa fa-heart"></i></button>   
                                            </div>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                    } ?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="blog" class="blog-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
                        Our Blog
                    </h2>
                    <div class="blog-box clearfix">

                        <!-- <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-block">
                                    <div class="blog-img-box">
                                        <img src="" alt="" />
                                        <div class="overlay">
                                            <a href=""><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="blog-dit">
                                        <p><span></span></p>
                                        <h2></h2>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                         -->                    
                    </div>
                    <!-- end blog-box -->
                    <div class="blog-btn-v">
                        <a class="hvr-underline-from-center" href="#">View the Blog</a>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
                                ????t tr?????c v???i ch??ng t??i
                            </h2>
                        </div>
                        <h4 class="form-title">BOOKING FORM</h4>
                        <p>Xin m???i qu?? kh??ch </p>

                        <form id="contact-form" method="post" class="reservations-box" name="contactform" action="mail.php">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="form_name" id="form_name" placeholder="Name" required="required" data-error="Firstname is required.">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="email" name="email" id="email" placeholder="E-Mail ID" required="required" data-error="E-mail id is required.">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="phone" id="phone" placeholder="contact no.">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                <input type="text" name="no_of_persons" id="no_of_persons" placeholder="No_of_p" required="required"  />
                                 
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="date-picker" id="date-picker" placeholder="Date" required="required" data-error="Date is required." />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="time-picker" id="time-picker" placeholder="Time" required="required" data-error="Time is required." />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="preferred_food" id="preferred_food" class="selectpicker">
                                        <option selected disabled>????? ??a th??ch</option>
                                        <option>????? ??n bi???n</option>
                                        <option>????? ??n r???ng</option>
                                        <option>????? ??n ?????ng b???ng</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="event" id="event" class="selectpicker">
                                        <option selected disabled>Event</option>
                                        <option>C?????i</option>
                                        <option>Sinh nh???t</option>
                                        <option>Ng??y k??? ni???m</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">BOOK MY TABLE </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

    <div id="footer" class="footer-main">
        <div class="footer-news pad-top-100 pad-bottom-70 parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="ft-title color-white text-center"> Comment </h2>
                            <p></p>
                        </div>
                        <form>
                            <input type="email" placeholder="Enter your e-mail id">
                            <a href="#" class="orange-btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        
        <br><br>

        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <!-- logo    -->
                                <img src="img/images_content/" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h3>About Us</h3>
                                <p>Ch??ng t??i l?? s??? l???a ch???n ????ng ?????n cho b???n</p>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Contact Us</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>99 T?? hi???n th??nh</span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
									+84 037784687
								</span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">amthucvietnamcusine@gmail.com</a></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Opening Hours</h3>

                                <ul>
                                    <li>
                                        <p>Th??? 2 - Th??? 6 </p>
                                        <span> 11:00 AM - 9:00 PM</span>
                                    </li>
                                    <li>
                                        <p>Th??? 7 - Ch??? nh???t </p>
                                        <span>  11:00 AM - 5:00 PM</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    </div>

    <!-- back to top -->
    <a href="#" class="scrollup" style="display: none;">Scroll</a>


    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script>
        const button = document.getElementsByClassName('show');
        console.log(button)
        Array.prototype.forEach.call (button, function (node) {
        node.addEventListener('click', async () => {
       try {     
           await axios.get('value.php?id='+ node.value).then(response=>{
            console.log(response.data)
            document.getElementById('name_product').innerText=response.data.name_product;
            document.getElementById('price').innerText=response.data.price;
            document.getElementById('id').src=response.data.image;
        });
            
        } catch(err) {
         console.error(`Error: ${err}`);
        }  
     });

} );
    </script>
</body>

</html>