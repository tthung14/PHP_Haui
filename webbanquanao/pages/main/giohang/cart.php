       <p><?php
            if (isset($_SESSION['dangky'])) {
            }
            ?></p>


       <?php
        if (isset($_SESSION['cart'])) {
        }

        ?>
        <style>
            th, td {
                width: 150px;
            }
        </style>
       <hr />
       <table border="0" style="width:95%; padding: 0; margin: 0 auto">
           <tr>
               <th>Sản phẩm đã thêm</th>
           </tr>
           <tr>
               <th>Tên sản phẩm</th>
               <th>Hình ảnh</th>
               <th>Màu sắc</th>
               <th>Size</th>
               <th>Số lượng</th>
               <th>Đơn giá</th>
               <th>Thành tiền</th>
               <th style="text-align: center;">Hành động</th>
           </tr>
       </table>
       <table border="0" style="width:95%; padding: 0; margin: 0 auto">
           
           <?php
            if (isset($_SESSION['cart'])) {
                $i = 0;
                $tongtien = 0;
                foreach ($_SESSION['cart'] as $cart_item) {
                    $thanhtien = $cart_item['soluong'] * $cart_item['giasanpham'];
                    $tongtien += $thanhtien;
                    $i++;
            ?>

                   <tr>
                       <td><b><?php echo $cart_item['tensanpham'] ?></b></td>
                       <td><img class="img-cart" src="admincp/modules/quanlysanpham/uploads/<?php echo $cart_item['hinhanh'] ?>"></td>
                       <td><b><?php echo $cart_item['mausac'] ?></b></td>
                       <td><b><?php echo $cart_item['size'] ?></b></td>
                       <td>
                           <div class="soluong-sp-dem">
                               <a class="soluong-sp-dem-icon" href="pages/main/giohang/suasoluong.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus"></i></a>
                               <input class="soluong-sp-input" type="text" name="soluong" value="<?php echo $cart_item['soluong'] ?>">
                               <a class="soluong-sp-dem-icon" href="pages/main/giohang/suasoluong.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus"></i></a>
                           </div>
                       </td>
                       <td><?php echo number_format($cart_item['giasanpham'], 0, ',', '.') . ' VNĐ' ?></td>
                       <td class="giasp-cart"><?php echo number_format($thanhtien, 0, ',', '.') . ' VNĐ' ?></td>
                       <td style="text-align: center"><a href="../../../../BTLNhom9/pages/main/giohang/xoasanpham.php?xoa=<?php echo $cart_item['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa sản phẩm</a></td>
                   </tr>
               <?php
                }
                echo "<hr/>";
                ?>
               <tr>
                   <td colspan="7">
                       <p style="float: left; color: red;font-weight: bold;font-size: 16px;"> Tổng tiền : <?php echo number_format($tongtien, 0, ',', '.') . ' VNĐ'  ?></p>
                       <div style="clear:both;"> </div>
                       <?php
                        if (isset($_SESSION['dangky'])) {

                        ?>
                           <p class="btn-dathang"><a class="btn-dathang-a" href="pages/main/thanhtoan/index.php?quanly=vanchuyen">Đặt hàng</a></p>
                       <?php
                        } else {

                        ?>
                           <p><a href="index.php?quanly=dangnhap">Đăng nhập đặt hàng</a></p>
                       <?php
                        }

                        ?>
                   </td>
                   <td>
                       <p style="text-align: center"><a href="../../../../BTLNhom9/pages/main/giohang/xoahetgiohang.php?xoatatca=xoahet" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa hết</a></p>
                   </td>
               </tr>
           <?php
            } else {
            ?>
               <hr>
               <tr>
                   <td colspan="6">Hiện tại giỏ hàng trống</td>
               </tr>
           <?php
            }
            ?>
       </table>
       <p></p>