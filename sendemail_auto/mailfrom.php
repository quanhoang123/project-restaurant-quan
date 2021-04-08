<!DOCTYPE html>
<html>
    <head>
        <title>Đăng ký tài khoản mới</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/register.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <div class="container">
                Header
            </div>
        </header>
        <main>
            <div class="container">
                <div class="register-form">
                    <form action="" method="post" action="mail.php">
                        <h1>Đăng ký tài khoản mới</h1>
                        <div class="input-box">

                            <input type="text" name="user" placeholder="Nhập username">
                        </div>
                        <div class="input-box">

                            <input type="password" name="pass" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="input-box">
                            <div class="col-6">
                                <label for="ngaysinh">Ngày sinh</label>
                                <br>
                                <input type="date" id="ngaysinh"/>
                            </div>
                            <div class="col-6">
                                <label for="gioitinh">Giới tính</label>
                                <br>
                                <select id="gioitinh">
                                    <option value="nam">Nam</option>
                                    <option value="nu">Nữ</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="input-box">
                            <span>Sở thích</span>
                            <br>
                            <input type="checkbox" id="xemphim"> 
                            <label for="xemphim">Xem phim</label>
                            <div class="margin_b"></div>
                            <input type="checkbox" id="nghenhac"> 
                            <label for="nghenhac">Nghe nhạc</label>
                            <div class="margin_b"></div>
                            <input type="checkbox" id="docsach"> 
                            <label for="docsach">Đọc sách</label>
                        </div>
                        <div class="input-box">
                            <label for="gioithieu">Giới thiệu bản thân</label>
                            <br>
                            <input name="email" type="email" id="gioithieu"/>
                        </div>        
                        <div class="btn-box">
                            <input type="submit" name="sub"                              
                            />
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer>
            <div class="container">
                Footer
            </div>
        </footer>
    </body>
</html>