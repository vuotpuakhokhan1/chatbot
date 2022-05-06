<?php 
	include("chuc_nang/quan_tri_2/trang_chu_2.php");
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id=$_GET['id'];
	$tv="select * from san_pham where id='$id' ";
	$tv_1=mysqli_query($mysqli,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$ten=$tv_2['ten'];
	$gia=$tv_2['gia'];
	$trang_chu=$tv_2['trang_chu'];
	$noi_bat=$tv_2['noi_bat'];
	$noi_dung=$tv_2['noi_dung'];
	$ten_anh=$tv_2['hinh_anh'];
	$link_hinh="../hinh_anh/san_pham/".$tv_2['hinh_anh'];
?>
<form action="" method="post" enctype="multipart/form-data" >
<div class="admin-content-right" >
   <div class="admin-content-right-product-add">
     <h1> Sửa sản phẩm </h1>
			<label> Tên sản phẩm: </label>
			<input  name="ten" value="<?php echo $tv_2['ten'] ?>" >
			<label>Hình ảnh: </label>
				<br><br>
				<img src='<?php echo $link_hinh; ?>' style='width:180px' > 
				<input type="file" name="hinh_anh" >
				<input type="hidden" name="ten_anh" value="<?php echo $ten_anh; ?>" >
				<a href="<?php echo $link_hinh; ?>"  style="font-size:14px" target="_blank" >Xem ảnh đủ kích cỡ</a>
				<br><br>
			<label>Giá: </label> 
				<input type="number" name="gia" value="<?php echo $tv_2['gia'] ?>">
			<label>Sản phẩm mới: </label>
			<?php
					$a_1="";
					$a_2="";
					if($trang_chu=="co")
					{
						$a_2="selected";
					}
				?>
				<select name="trang_chu" style="margin-top:3px;margin-bottom:3px;" >
					<option value="" <?php echo $a_1; ?> >Không</option>
					<option value="co" <?php echo $a_2; ?> >Có</option>
				</select>
		     <label>Nổi bật: </label>
			 <?php
					$a_1="";
					$a_2="";
					if($noi_bat=="co")
					{
						$a_2="selected";
					}
				?>
				<select name="noi_bat" style="margin-top:3px;margin-bottom:3px;" >
					<option value="" <?php echo $a_1; ?> >Không</option>
					<option value="co" <?php echo $a_2; ?> >Có</option>
				</select>
			 <label>Nội dung:</label>
				  <textarea id="noi_dung" name="noi_dung" ><?php echo $noi_dung; ?></textarea>
		<input type="submit" name="bieu_mau_sua_san_pham" value="Sửa sản phẩm" >
	</div>
</div>
</form>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
              
                CKEDITOR.replace( 'noi_dung', {
	            filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
	            filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                });
    </script>