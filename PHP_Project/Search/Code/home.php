<html>
  
  <?  require_once('connect.php');?>
   <?  require_once('fulltextSearch.php');?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="home.CSS">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="monitor">
        <header class="header">
            <div class="content-menu">
                <div class="logo">
                    <img src="Image/Logo.jpg" width="100px" height="100px" />
                </div>
                <!-- Search -->
                <form class="form-inline " method="post" action="fulltextSearch.php">
                    <input class="form-control" name="keyword" value="<?php error_reporting(0); $_POST["keyword"]?>" id="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button type ="submit" name="search" id="search-btn" class="btn btn-outline-success my-2 my-sm-0"><i class="far fa-search"></i></button>
                </form>

                <!-- Menu -->
                <div class="menu">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="./home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">CATEGORY
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                    <a class="nav-link" role="menuitem" tabindex="-1" href='display.php?category=Indoor plants'>Indoor plants</a>
                                    <a class="nav-link" role="menuitem" tabindex="-1" href='display.php?category=Garden plants'>Garden plants</a>
                                    <a class="nav-link" role="menuitem" tabindex="-1" href='display.php?category=Bonsai air'>Bonsai air</a>
                                    <a class="nav-link" role="menuitem" tabindex="-1" href='display.php?category=Post jar'>Pots-Jar</a>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notification</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <?php echo strtoupper($_COOKIE['user'])?>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="">My Account</a>
                                    <a class="dropdown-item" href="../cart/cart.php">Cart Shoping</a>
                                    <a class="dropdown-item" href="#">Purchase Menu</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../Login/logout.php">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Background -->
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="2000">
                        <div class="content-carousel">
                            <h1>Cactus Mini</h1>
                            <p>Cute mini cactus, creating a comfortable space</p>
                            <a href="">
                                <button class="btn-href" href="">Read More</button>
                            </a>
                        </div>
                        <img ismap src="Image/bac.jpg" class="d-block w-100">
                        <svg viewBox="0 0 100 100" preserveAspectRatio="none"></svg>
                        <polygon points="0,100 100,100 100,0"></polygon>
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <div class="content-carousel">
                            <h1>Porcelain potted plants</h1>
                            <p>Porcelain potted plants with many unique and cute shapes</p>
                            <a href="">
                                <button class="btn-href" href="">Read More</button>
                            </a>
                        </div>
                        <img src="Image/bac2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <div class="content-carousel">
                            <h1>Garden plants</h1>
                            <p>Create a natural space, beautify your garden</p>
                            <a href="">
                                <button class="btn-href" href="">Read More</button>
                            </a>
                        </div>
                        <img src="Image/bac3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </header>
        <!-- Logo -->
        <div class="logo_background">
            <img src="./Image/logo-back.jpg" />

        </div>
        <!-- Content -->
        <div class="container-collapse">
            <!-- Collapse buttons -->
            <div class="coll_button">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    Latest</button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    Favourite</button>
            </div>

            <!-- Collapsible element -->
            <div class="collapse" id="collapse1">
                <div class="mt-3">
                    <div class="row">
                        <div class="col-md-4">
                            <figure class="card card-product">
                                <div class="img-wrap"><img src="./Image/new1.jpg"></div>
                                <figcaption class="info-wrap">
                                    <h4 class="title">Another name of item</h4>
                                    <p class="desc">Some small description goes here</p>
                                    <div class="rating-wrap">
                                        <div class="label-rating">132 reviews</div>
                                        <div class="label-rating">154 orders </div>
                                    </div>
                                    <!-- rating-wrap.// -->
                                </figcaption>
                                <div class="bottom-wrap">
                                    <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                                    <div class="price-wrap h5">
                                        <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                    </div>
                                    <!-- price-wrap.// -->
                                </div>
                                <!-- bottom-wrap.// -->
                            </figure>
                        </div>
                        <!-- col // -->
                        <div class="col-md-4">
                            <figure class="card card-product">
                                <div class="img-wrap"><img src="../Home/Image/fly-bonsai.gif"> </div>
                                <figcaption class="info-wrap">
                                    <h4 class="title">Good product</h4>
                                    <p class="desc">Some small description goes here</p>
                                    <div class="rating-wrap">
                                        <div class="label-rating">132 reviews</div>
                                        <div class="label-rating">154 orders </div>
                                    </div>
                                    <!-- rating-wrap.// -->
                                </figcaption>
                                <div class="bottom-wrap">
                                    <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                                    <div class="price-wrap h5">
                                        <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                    </div>
                                    <!-- price-wrap.// -->
                                </div>
                                <!-- bottom-wrap.// -->
                            </figure>
                        </div>
                        <!-- col // -->
                        <div class="col-md-4">
                            <figure class="card card-product">
                                <div class="img-wrap"><img src="../Home/Image/hh.jpg"></div>
                                <figcaption class="info-wrap">
                                    <h4 class="title">Product name goes here</h4>
                                    <p class="desc">Some small description goes here</p>
                                    <div class="rating-wrap">
                                        <div class="label-rating">132 reviews</div>
                                        <div class="label-rating">154 orders </div>
                                    </div>
                                    <!-- rating-wrap.// -->
                                </figcaption>
                                <div class="bottom-wrap">
                                    <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                                    <div class="price-wrap h5">
                                        <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                    </div>
                                    <!-- price-wrap.// -->
                                </div>
                                <!-- bottom-wrap.// -->
                            </figure>
                        </div>
                        <!-- col // -->
                    </div>
                </div>
            </div>
            <div class="collapse" id="collapse2">
                <div class="mt-3">
                    <div class="mt-3">
                        <div class="row">
                            <div class="col-md-4">
                                <figure class="card card-product">
                                    <div class="img-wrap"><img src="./Image/new1.jpg"></div>
                                    <figcaption class="info-wrap">
                                        <h4 class="title">Vetplanten circle</h4>
                                        <p class="desc">Some small description goes here</p>
                                        <div class="rating-wrap">
                                            <div class="label-rating">132 reviews</div>
                                            <div class="label-rating">154 orders </div>
                                        </div>
                                        <!-- rating-wrap.// -->
                                    </figcaption>
                                    <div class="bottom-wrap">
                                        <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                        </div>
                                        <!-- price-wrap.// -->
                                    </div>
                                    <!-- bottom-wrap.// -->
                                </figure>
                            </div>
                            <!-- col // -->
                            <div class="col-md-4">
                                <figure class="card card-product">
                                    <div class="img-wrap"><img src="./Image/new2.jpg"> </div>
                                    <figcaption class="info-wrap">
                                        <h4 class="title">Good product</h4>
                                        <p class="desc">Some small description goes here</p>
                                        <div class="rating-wrap">
                                            <div class="label-rating">132 reviews</div>
                                            <div class="label-rating">154 orders </div>
                                        </div>
                                        <!-- rating-wrap.// -->
                                    </figcaption>
                                    <div class="bottom-wrap">
                                        <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                        </div>
                                        <!-- price-wrap.// -->
                                    </div>
                                    <!-- bottom-wrap.// -->
                                </figure>
                            </div>
                            <!-- col // -->
                            <div class="col-md-4">
                                <figure class="card card-product">
                                    <div class="img-wrap"><img src="./Image/bac4.jpg"></div>
                                    <figcaption class="info-wrap">
                                        <h4 class="title">Product name goes here</h4>
                                        <p class="desc">Some small description goes here</p>
                                        <div class="rating-wrap">
                                            <div class="label-rating">132 reviews</div>
                                            <div class="label-rating">154 orders </div>
                                        </div>
                                        <!-- rating-wrap.// -->
                                    </figcaption>
                                    <div class="bottom-wrap">
                                        <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>
                                        <div class="price-wrap h5">
                                            <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                                        </div>
                                        <!-- price-wrap.// -->
                                    </div>
                                    <!-- bottom-wrap.// -->
                                </figure>
                            </div>
                            <!-- col // -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Collapsible element -->
        </div>

        <div class="container-cardGroup">
            <h1 class="content">Indoor plants</h1>
            <div class="card-group vgr-cards">
                <div class="card">
                    <div class="card-img-body">
                        <figure><img class="card-img" src="./Image/img2.png" alt="Card image cap"></figure>
                    </div>
                    <a href="#" id="group-btn1" class="btn btn-outline-primary">Show now</a>
                </div>

                <div class="card">
                    <div class="card-img-body">
                        <figure><img class="card-img" src="./Image/img1.jpg" alt="Card image cap"></figure>
                    </div>
                    <a href="#" id="group-btn2" class="btn btn-outline-primary">Show now</a>
                </div>
            </div>
        </div>


        <div class="container-image">
            <h1 class="content">Garden Plants</h1>
            <figure class="snip0057 green">
                <figcaption>
                    <h2>Bonsai Tree<span> 10 years</span></h2>
                    <p>A small corner in the house is missing a green patch? Lifeless? You do not have time? Let Bonsai Garden do it for you!</p>
                    <div class="icons"><a href="#"><i class="ion-ios-home"></i></a><a href="#"><i class="ion-ios-email"></i></a><a href="#"><i class="ion-ios-telephone"></i></a></div>
                    <div class="card-body">
                        <a href="#" id="btn-img" class="btn btn-outline-primary">Show now</a>
                    </div>
                </figcaption>
                <div class="image"><img src="./Image/contain_image.gif" alt="sample4" /></div>

                <div class="position">Garden plants</div>
            </figure>
        </div>







        <div class="container-video">
            <video class="video" controls>
                <source src="./Image/bonsai.mp4" type="video/mp4">
              </video>
            <div class="content-video">
                <p>Bonsai Garden is a pioneer in bringing a "green environment" to everyone. Contributing to making life easier - greener - more in harmony with the environment.</p>
                <p> Creative green gifts are waiting for you <br>to send to relatives, loved ones and <br>partners in special occasions. </p>
            </div>

        </div>


        <div class="thank">
            <img src="./Image/baner-thank.jpg">
        </div>


        <!-- footer -->
        <div class="footer">
            <div class="row">
                <div class="col-md-4 col-xs-2  col-lg-4 footer-about wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <img class="logo-footer" src="Image/logo.jpg" alt="logo-footer" data-at2x="Image/Logo2.jpg" width="60px">
                    <p class="content-footer">
                        <strong>Bonsai Garden</strong> was born with the desire to be the connection point of each person with nature with quality, creative, pure Vietnamese products. By stopping to take care and look at green products every day, we are
                        There will be more silence to feel more love of life, more gratitude, each of us will become more beautiful.</p>

                </div>
                <div class="col-md-4 col-xs-2 col-lg-4 offset-lg-1 footer-contact wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">

                    <h3>Contract</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 99 To Hien Thanh, Son Tra, Da Nang</p>
                    <p><i class="fas fa-phone"></i> (+84) 829 970 447 </p>
                    <p><i class="fas fa-envelope"></i> <a href="mailto:tuan.nguyenit263@gmail.com">tuan.nguyenit263@gmail.com</a></p>
                </div>
                <div class="col-md-3 col-xs-2 col-xs-2 col-lg-2 footer-social wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <h3>Guide</h3>
                    <p>Support center</p>
                    <p>Provisions of the shop</p>
                    <p>
                        <a href="#"><i class="fab fa-facebook "></i></a>
                        <a href="#"><i class="fab fa-google-plus-g "></i></a>
                        <a href="#"><i class="fab fa-instagram "></i></a>
                        <a href="#"><i class="fab fa-pinterest "></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>