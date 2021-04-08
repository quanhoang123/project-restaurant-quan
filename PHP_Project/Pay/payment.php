 Skip to content Using Passerelles numériques Mail with screen readers Meet New meeting My meetings Hangouts 2 of 2,784 Code payment Inbox Nguyen Anh Tuan Attachments 18:00 (15 minutes ago) to me Nguyen Anh Tuan, PNV22A Student Passerelles numériques
VIETNAM 4th floor, building B, 99 To Hien Thanh, Da Nang, VIETNAM tuan.nguyen22@student.passerellesnumeriques.org | Phone: +84 829970447 2 Attachments
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="payment.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="cart.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

</head>

<body>
    <!-- Header -->

    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="navbar-brand" href="../Home/home.php"><img src="../Home/Image/logo.jpg" width="100px" height="100px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="../Home/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Purchase menu</a>
                    </li>
                </ul>

                <form class="form-inline my-4 my-lg-0">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary btn-number">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <!-- Địa chỉ -->
    <div class="container">
        <div class="address">
            <label for="add">Delivery address</label>
            <p>
                <input type="text" class="add" name="address">
        </div>

        <!-- Bảng hiển thị thông tin -->
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="border-0 bg-light">
                            <div class="p-2 px-3 text-uppercase">Image</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Name</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Price</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Quantity</div>
                        </th>
                        <th scope="col" class="border-0 bg-light">
                            <div class="py-2 text-uppercase">Total</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Vị trí php select -->

                </tbody>
            </table>
        </div>


        <hr>
        <div class="container-collapse">
            <!-- Collapse buttons -->
            <div class="coll_button">
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    Credit card</button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    Payment on delivery</button>
            </div>

            <!-- Collapsible element -->
            <div class="collapse " id="collapse1">
                <div class="container-fluid py-3">
                    <div class="row">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mx-auto">
                            <div id="pay-invoice" class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3 class="text-center">Pay Invoice</h3>
                                    </div>
                                    <hr>
                                    <form action="/echo" method="post" novalidate="novalidate" class="needs-validation">


                                        <div class="form-group">
                                            <label for="cc-number" class="control-label mb-1">Card number</label>
                                            <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" required autocomplete="off">
                                            <span class="invalid-feedback">Enter a valid 12 to 16 digit card number</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                                    <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" required placeholder="MM / YY" autocomplete="cc-exp">
                                                    <span class="invalid-feedback">Enter the expiration date</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="x_card_code" class="control-label mb-1">CVV</label>
                                                <div class="input-group">
                                                    <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" required autocomplete="off">
                                                    <span class="invalid-feedback order-last">Enter the 3-digit code on back</span>
                                                    <div class="input-group-append">
                                                        <div class="input-group-text">
                                                            <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="CVV" data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                                                data-trigger="hover"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="x_zip" class="control-label mb-1">Postal code</label>
                                            <input id="x_zip" name="x_zip" type="text" class="form-control" value="" data-val="true" data-val-required="Please enter the ZIP/Postal code" autocomplete="postal-code">
                                            <span class="help-block" data-valmsg-for="x_zip" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="x_promotion" class="control-label mb-1">Promotion Code</label>
                                            <input id="x_promotion" name="x_prom" type="text" class="form-control" value="" data-val="true" data-val-required="Please enter the Promotion  code">
                                            <span class="help-block" data-valmsg-for="x_promotion" data-valmsg-replace="true"></span>
                                        </div>

                                        <div>
                                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                <span id="payment-button-amount">Pay </span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Collapsible element -->
            <div class="collapse" id="collapse2">
                <p>Payment on delivery </p>
                <p> Collection fee: ₫ 0 VND. The transportation fee (if any) is also applied to the collection fee.</p>
            </div>
            <!-- Container end -->
        </div>


        <!-- Vorcher và Order -->
        <div class="row py-5 p-4 bg-white rounded shadow-sm">
            <div class="col-lg-6">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
                <div class="p-4">
                    <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                    <div class="input-group mb-4 border rounded-pill p-2">
                        <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                        <div class="input-group-append border-0">
                            <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                        </div>
                    </div>
                </div>
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
                <div class="p-4">
                    <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
                    <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                <div class="p-4">
                    <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$390.00</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                            <h5 class="font-weight-bold">$400.00</h5>
                        </li>
                    </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Buy now</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('[data-toggle="popover"]').popover()
        })



        $("#payment-button").click(function(e) {


            var form = $(this).parents('form');

            var cvv = $('#x_card_code').val();
            var regCVV = /^[0-9]{3,4}$/;
            var CardNo = $('#cc-number').val();
            var regCardNo = /^[0-9]{12,16}$/;
            var date = $('#cc-exp').val().split('/');
            var regMonth = /^01|02|03|04|05|06|07|08|09|10|11|12$/;
            var regYear = /^20|21|22|23|24|25|26|27|28|29|30|31$/;

            if (form[0].checkValidity() === false) {
                e.preventDefault();
                e.stopPropagation();
            } else {
                if (!regCardNo.test(CardNo)) {

                    $("#cc-number").addClass('required');
                    $("#cc-number").focus();
                    alert(" Enter a valid 12 to 16 card number");
                    return false;
                } else if (!regCVV.test(cvv)) {

                    $("#x_card_code").addClass('required');
                    $("#x_card_code").focus();
                    alert(" Enter a valid CVV");
                    return false;
                } else if (!regMonth.test(date[0]) && !regMonth.test(date[1])) {

                    $("#cc_exp").addClass('required');
                    $("#cc_exp").focus();
                    alert(" Enter a valid exp date");
                    return false;
                }



                form.submit();
            }

            form.addClass('was-validated');
        });
    </script>
</body>

</html>
payment.php Displaying payment.php.