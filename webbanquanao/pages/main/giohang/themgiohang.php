<?php
    session_start();
    include "../../../admincp/config/connect.php";
    //them so luong

    //tru so luong

	//xóa sản phẩm 
	if(isset($_SESSION['cart'])&& $_GET['xoa']){

		
	}

    
    //them 
    if(isset($_POST['themgiohang'])&&isset($_POST['soluong'])){
		$soluongsp = $_POST['soluong'];
		$soluong = (int)$soluongsp;
		$id=$_GET['id_sanpham'];
		$mausac = $_POST['mausac'];
		$size = $_POST['size'];
		$sql ="SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
		$query = mysqli_query($connect,$sql);
		$row = mysqli_fetch_array($query);
		if($row){
			$new_product=array(array('tensanpham'=>$row['tensanpham'],'id'=>$id,'soluong'=>$soluong,'giasanpham'=>$row['giasanpham'],'hinhanh'=>$row['hinhanh'],'masanpham'=>$row['masanpham'],  'mausac'=> $mausac, 'size' => $size));
			//kiem tra session gio hang ton tai
			if(isset($_SESSION['cart'])&&isset($_POST['soluong'])){
				
				$found = false;
				foreach($_SESSION['cart'] as $cart_item){
					//neu du lieu trung
					if($cart_item['id']==$id){
						$product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong,'giasanpham'=>$cart_item['giasanpham'],'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham'], 'mausac'=> $mausac, 'size' => $size) ;
						$found = true;
					}else{
						//neu du lieu khong trung
						$product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasanpham'=>$cart_item['giasanpham'],'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham'] , 'mausac'=> $cart_item['mausac'], 'size' => $cart_item['size']);
					}
				}
				if($found == false){
					//lien ket du lieu new_product voi product
					$_SESSION['cart']=array_merge($product,$new_product);
				}else{
					$_SESSION['cart']=$product;
				}
			}else{
				$_SESSION['cart'] = $new_product;
			}

		}
		header('Location:../../../index.php?quanly=giohang');
		
	}
?>