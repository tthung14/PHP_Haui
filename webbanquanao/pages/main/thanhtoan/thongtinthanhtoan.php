<p>Thông tin thanh toán</p>
 <div class="container">
 <?php
    if(isset($_SESSION['id_khachhang'])){
?>
    <div class="arrow-steps clearfix">
        <div class="step "> <span> <a href="../../../index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
         <div class="step"> <span><a href="index.php?quanly=vanchuyen" >Kiểm tra</a></span> </div>
        <div class="step current"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
       
    </div>
    <?php
  } 
  ?>
  	<form action="thanhtoan.php" method="POST">
	<div class="row">
  		<h5>Giỏ hàng của bạn</h5>
  	<table style="width:100%; text-align: center; border-collapse: collapse;" border="1">
		<tr>
        <th>ID</th>
        <th>Mã</th>
        <th>Tên</th>
        <th>Hình</th>
		<td>Màu sắc</td>
		<td>Size</td>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Thành tiền</th>   
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
            <!-- ở đây lấy dữ liêu cart_item['masanpham'] từ themgiohang.php -->
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
            <td><a href="../giohang/xoasanpham.php?xoa=<?= $cart_item['id'] ?>" class="btn btn-success" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">XÓA</a></td>
        </tr>


    <?php 
            }
    ?>

        <tr>
            <td colspan="10">
                <p style="float: left text-align: center;" class="btn btn-success"> Tổng tiền : <?= number_format($tongtien,0,',','.') . ' VNĐ'  ?></p>
                <p style="float: right;"><a href="../giohang/xoahetgiohang.php?xoatatca=xoahet" class="btn btn-success" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa Hết</a></p>
                <div style="clear:both;"> </div>
		    </td>
		  </tr>
		  <?php	
		  }else{ 
		  ?>
		   <tr>
		    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
		   
		  </tr>
		  <?php
		  } 
		  ?>
		 
	</table>
  	</div>
  	<style type="text/css">
  		.col-md-4.hinhthucthanhtoan .form-check {
		    margin: 11px;
		}
  	</style>

  	<div class="col-md-4 hinhthucthanhtoan">
  		<h4>Phương thức thanh toán</h4>
  		<div class="form-check">
		  <input class="form-check-input" type="radio" name="hinhthucthanhtoan" id="exampleRadios1" value="Tiền Mặt" checked>
		  <label class="form-check-label" for="exampleRadios1">
		    Tiền mặt
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="hinhthucthanhtoan" id="exampleRadios2" value="Chuyển Khoản">
		  <label class="form-check-label" for="exampleRadios2">Chuyển khoản</label>
		</div>
		<input type="submit" value="Thanh toán ngay" name="redirect"  class="btn btn-danger">
		
		</form>

		<p></p>
	
		<?php
		$tongtien = 0;
		foreach($_SESSION['cart'] as $key => $value){
			$thanhtien = $value['soluong']*$value['giasanpham'];
  			$tongtien+=$thanhtien;
		} 
		$tongtien_vnd = $tongtien;
		$tongtien_usd = round($tongtien/22667);
		?>
		<input type="hidden" name="" value="<?= $tongtien_usd ?>" id="tongtien">
		

		 </div>
		 	
		 </div>
<?php
	

?>
	
