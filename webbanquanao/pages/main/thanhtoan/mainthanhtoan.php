<div class="main">
            <div class="maincontent">
                
                    <?php //lấy qiamly từ menu truyền vào bằng phuongư thức GET
                        if(isset($_GET['quanly'])){
                            $bientam=$_GET['quanly'];

                        }else{
                            $bientam="";
                        }
                       
                            
                        if($bientam=='vanchuyen'){
                            include("vanchuyen.php");
                        }
                        elseif($bientam=='thongtinthanhtoan'){
                            include("thongtinthanhtoan.php");

                        }elseif($bientam=='thanhtoan'){
                            include("thanhtoan.php");

                        }else{
                           echo "Cảm ơn bạn đã đặt hàng";
                        }
                    ?>
                
            </div>
        </div>