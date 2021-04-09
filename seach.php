 <?php
    require_once "modal/connect.php";
    $dt = new database();
    $dt->connect();
    // select du lieu truy van la new prod
    if (isset($_POST['timkiem'])) {
        $tukhoa = $_POST['tukhoa'];
    }
    $sql = 'select * from product where name_newProd LIKE ' % ".$tukhoa." % '
                                INNER JOIN Product_category c
                                on (p.id_prodCate=c.id_prodCate)         
                                    where p.id_prodCate= 1';
    $getAll = $dt->select($sql);
    foreach ($getAll as $product) {
    ?>
     <h3>Từ khóa tìm kiếm: <?php $_POST['tukhoa'] ?></h3>
     <div class="item item-type-zoom">
         <a class="item-hover">
             <div class="item-info">
                 <div class="headline">
                     <?php echo $product['name_newProd'] ?>
                     <div class="line"></div>
                     <div class="dit-line">Anh di đêm anh sợ nha đừng để anh đi đêm nhé em.</div>
                     <!-- <input type="number" value="1" style="width:100px; color:blue"> -->
                     <div class="cart" style="float:left border-radius=24px">
                         <form action='' method="post">

                             <button href="#" style="color:black"><i class="fa fa-heart"></i></button>
                             <button name="add-to-cart" value="<?php echo $product['id_newProd'] ?>" style="color:black"><i class="fa fa-shopping-cart"></i></button>
                         </form>

                     </div>
                 </div>
             </div>
         </a>
         <div class="item-img">
             <img src="<?php echo $product['image'] ?>" alt="sp-menu" width="10px;" height="10px;">
         </div>
     </div>

 <?php } ?>