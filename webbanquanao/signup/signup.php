<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="signup.css" />
        <title>FORM ĐĂNG KÝ</title>
    </head>
    <body>
        <div class="main">
            <form action="" method="POST" class="form" id="form-1">
                <h3 class="heading">ĐĂNG KÝ TÀI KHOẢN</h3>
                <p class="desc">Mua quần áo Việt Nam tại LBShop</p>
                <div class="spacer"></div>
                <div class="form-group">
                    <label for="fullname" class="form-label">Tên đầy đủ</label>
                    <input id="fullname" name="hovaten" type="text" placeholder="VD: Nguyen Van A" class="form-control" />
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="fullname" class="form-label">Tên tài khoản</label>
                    <input id="fullname" name="taikhoan" type="text" placeholder="VD: abc123" class="form-control" />
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="text"
                        placeholder="VD: email@domain.com"
                        class="form-control"
                    />
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input
                        id="password"
                        name="matkhau"
                        type="password"
                        placeholder="Nhập mật khẩu"
                        class="form-control"
                    />
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                    <input
                        id="password_confirmation"
                        name="rematkhau"
                        placeholder="Nhập lại mật khẩu"
                        type="password"
                        class="form-control"
                    />
                    <span class="form-message"></span>
                </div>                      
                <div class="form-group">
                    <label for="fullname" class="form-label">Số điện thoại</label>
                    <input id="fullname" name="dienthoai" type="text" placeholder="Số điện thoại" class="form-control" />
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="fullname" class="form-label">Địa chỉ</label>
                    <input id="fullname" name="diachi" type="text" placeholder="Địa chỉ" class="form-control" />
                <span class="form-message"></span>
                <button class="form-submit" type="submit" name="dangky"><b>ĐĂNG KÝ</b></button>
                <a style="margin-top:12px; font-size:14px; text-decoration: none; color: white;" href="../user/login.php"><b><u>Đăng nhập</u> nếu có tài khoản</b></a>
                </div>
            </form>
            <div>
                <?php
                    session_start();
                    include('../admincp/config/connect.php');
                    $sql = "SELECT * FROM tbl_khachhang ORDER BY id_khachhang";
                    $rs = mysqli_query($connect, $sql);
                    $row = mysqli_fetch_assoc($rs);
                    if(isset($_POST['dangky'])) {
                        $tenkhachhang = $_POST['hovaten'];
                        $taikhoan= $_POST['taikhoan'];
                        $matkhau = $_POST['matkhau'];
                        $rematkhau=  $_POST['rematkhau'];
                        $email = $_POST['email'];
                        $dienthoai = $_POST['dienthoai'];
                        $diachi = $_POST['diachi'];
                        if (!$tenkhachhang || !$taikhoan || !$matkhau || !$rematkhau || !$email || !$dienthoai || !$diachi)
                        {
                            echo "Vui lòng nhập đầy đủ thông tin.";
                            
                            
                        }   elseif($matkhau!=$rematkhau){
                            echo "Mật khẩu chưa trùng";
                        }   
                        else{
                    
                            
                            $sql_dangky = "INSERT INTO tbl_khachhang(hovaten,taikhoan,matkhau,sodienthoai,email,diachi) VALUE('".$tenkhachhang."','".$taikhoan."','".$matkhau."','".$dienthoai."','".$email."','".$diachi."')";
                            $query_dangky=mysqli_query($connect,$sql_dangky);
                            if($query_dangky){
                                echo '<script>alert("Đăng ký thành công")</script>';
                                $_SESSION['dangky'] = $taikhoan;
                                $_SESSION['email'] = $email;
                                $_SESSION['id_khachhang'] = mysqli_insert_id($connect);
                                }
                            }
                    }
                
                ?>
            </div>
        </div>
    </body>
</html>
