<p>Thông tin vận chuyển</p>
<div class="container">
        <div class="arrow-steps clearfix">
            <div class="step "> <span> <a href="../../../index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
            <div class="step current"> <span><a href="index.php?quanly=vanchuyen" >Kiểm tra </a></span> </div>
            <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
            
        </div>

<h4>Thông tin vận chuyển</h4>


<?php
 	$id_dangky = $_SESSION['id_khachhang'];
 	$sql_get_vanchuyen = mysqli_query($connect,"SELECT * FROM tbl_khachhang WHERE id_khachhang='$id_dangky' LIMIT 1");
	
 	
 	if($id_dangky!=''){
 		$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
 		$name = $row_get_vanchuyen['hovaten'];
 		$phone = $row_get_vanchuyen['sodienthoai'];
 		$address = $row_get_vanchuyen['diachi'];
 		$note = $row_get_vanchuyen['email'];
 	}else{
		 
 		$name = '';
 		$phone = '';
 		$address = '';
 		$note = '';
 	}
 	?>
 		
<div class="col-md-8">
  		
  		<ul>
  			<li>Họ và tên vận chuyển : <b><?= $name ?></b></li>
  			<li>Số điện thoại : <b><?= $phone ?></b></li>
  			<li>Địa chỉ : <b><?= $address ?></b></li>
  			<li>Ghi chú : <b><?= $note ?></b></li>
            <li>Địa chỉ nhận hàng : <input type="text" name="diachinhanhang"></li>
  		</ul>
	<!--GIO HANG---->
    <table style="width:100%;text-align: center;border-collapse: collapse;" border="1">
        <tr>
            <th>ID</th>
            <th>Mã</th>
            <th>Tên</th>
            <th>Hình</th>
            <th>Màu sắc</th>
		    <th>Size</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Thành tiền</th>
            <th></th>
        </tr>
    <?php
        if(isset($_SESSION['cart'])){
            $i=0;
            $tongtien=0;
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien = $cart_item['soluong'] * $cart_item['giasanpham'];
                $tongtien+=$thanhtien;
                $i++;
    ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $cart_item['masanpham']?></td>
            <td><?= $cart_item['tensanpham'] ?></td>
            <td><img src="../../../admincp/modules/quanlysanpham/uploads/<?= $cart_item['hinhanh'] ?>" width="150px"></td>
            <td><?= $cart_item['mausac']?></td>
			<td><?= $cart_item['size']?></td>
            <td>
                <a href="pages/main/giohang/suasoluong.php?cong=<?= $cart_item['id'] ?>"><i class="fa-solid fa-plus"></i></a>
                <?= $cart_item['soluong'] ?>
                <a href="pages/main/giohang/suasoluong.php?tru=<?= $cart_item['id'] ?>"><i class="fa-solid fa-minus"></i></a>
            </td>
            <td><?= number_format($cart_item['giasanpham'],0,',','.') . ' VNĐ'?></td>
            <td><?php  echo number_format($thanhtien,0,',','.') . ' VNĐ' ?></td>
            <td><a href="../giohang/xoasanpham.php?xoa=<?= $cart_item['id'] ?>" class="btn btn-success">XÓA</a></td>
        </tr>

    <?php 
            }
    ?>

        <tr>
            <td colspan="10">
                <p style="float: left;"> Tổng tiền : <?= number_format($tongtien,0,',','.') . ' VNĐ'  ?></p>
                <p style="float: right;"><a href="../giohang/xoahetgiohang.php?xoatatca=xoahet" class="btn btn-success">Xóa Hêt</a></p>
                <div style="clear: both;"> </div>

                    <?php
                            if(isset($_SESSION['dangky'])){
                                
                    ?>
                            <p><a href="index.php?quanly=thongtinthanhtoan" class="btn btn-success">Hình thức thanh toán</a></p>
                    <?php
                    }else{
                    
                    ?>
                         <p><a href="index.php?quanly=dangky">Đăng kí đặt hàng</a></p>
                    <?php
                     }
                    ?>     
            </td>
        </tr>
    <?php   
        }else{ 
    ?>
        <tr>
            <td colspan="6">Hiện tại giỏ hàng trống</td>
        </tr>
    <?php
        }
    ?>
    </table>
</div>
</div>
