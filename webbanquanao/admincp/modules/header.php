<style>
	a {
		font-weight: bold;
	}
</style>

<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
		header('Location:login.php');
	}
?>
<div class="dangxuat"><p><a style="display: block; width: 200px; height: 30px; background-color: greenyellow; text-align: center; text-decoration: none; border-radius: 10px; padding-top: 10px; margin: 0 auto; font-weight: bold;" href="index.php?dangxuat=1">Đăng xuất : <?php if(isset($_SESSION['dangky'])){
		echo $_SESSION['dangky'];

	} ?></a></p></div>