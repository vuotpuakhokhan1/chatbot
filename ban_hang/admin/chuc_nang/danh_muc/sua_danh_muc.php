<?php 
	include("chuc_nang/quan_tri_2/trang_chu_2.php");
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="select * from danh_muc where id='$id' ";
	$tv_1=mysqli_query($mysqli,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ten=$tv_2['ten'];
	$link_dong="?thamso=quan_ly_danh_muc&trang=".$_GET['trang'];
?>
<form action="" method="post">
	
<div class="admin-content-right" >
	<div class="admin-content-right-cartegory-add">
                <h1>Sửa Danh Mục</h1>
				<input type="text" name="ten" value="<?php echo $ten; ?>">
				<input type="submit"name="bieu_mau_sua_danh_muc" value="Sửa">
                  
	</div>
</div>
</form>