<?php
session_start();
$cart = (isset($_SESSION['cart']) ? $_SESSION['cart'] : []);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ảnh minh họa</th>
                                    <th>Tên món ăn</th>
                                    <th>Giá tiền</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $sum = 0;
                                foreach ($cart as $key => $value) {
                                ?>
                                    <tr>
                                        <td><?php echo $key++ ?> </td>
                                        <td><img src="<?php echo $value['image'] ?>" alt="" width="100px" height="70px"> </td>
                                        <td><?php echo $value['name'] ?></td>
                                        <td><?php echo $value['price'] ?></td>
                                        <td><input type="text" name="" value="<?php echo $value['quantity'] ?>"><button type="submit">Cập nhật</button></td>
                                        <td><?php echo $value['quantity'] * $value['price'] ?> VND</td>
                                        <td><a href=" add-cart.php?id=<?php echo $value['id'] ?>&action=delete" class="btn btn-danger">Xóa</a></td>
                                        <?php $sum += $value['quantity'] * $value['price'] ?>
                                        <!-- <td>
                                            <a href=class="fas fa-trash-alt">
                                        </td> -->
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6"><a href="#" class=""><i class="btn btn-default">Tổng tiền cần phải trả</td>
                                    <td><?php echo $sum ?> VND</td>


                                </tr>
                                <tr>
                                    <td colspan="5"><a href="index.php" class=""><i class="btn btn-danger">Tiếp tục mua hàng</td>
                                    <td><a href="add-cart.php?xoatatca=1" class=""><i class="btn btn-danger">Hủy giỏ hàng</td>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="6">
                                        <form method="post">
                                            <?php if ($sum <= 0) {
                                            ?>

                                                <a href="#" class="btn btn-danger" name="btn_cart" width="120%">Thanh Toán</a>
                                            <?php
                                            } else {
                                            ?>

                                                <a href="payment" class="btn btn-danger" name="btn_cart" width="120%">Thanh Toán</a>
                                            <?php
                                            }
                                            ?>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="index.php"><i class="btn btn-light">Quay về trang chủ</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>