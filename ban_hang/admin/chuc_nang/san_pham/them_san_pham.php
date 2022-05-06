<?php 
	include("chuc_nang/quan_tri_2/trang_chu_2.php");
	if(!isset($bien_bao_mat)){exit();}
?>

<form action="" method="post" enctype="multipart/form-data" >
<div class="admin-content-right" >
   <div class="admin-content-right-product-add">
	  <h1> Thêm sản phẩm </h1>
		
			<label> Tên sản phẩm: </label>
			<input  name="ten" value="" >
			<label>	Danh mục: </label>
			
				<?php
					if(!isset($_SESSION['danh_muc_menu']))
					{
						$_SESSION['danh_muc_menu']="";
					}
				?>
				<select name="danh_muc" style="margin-top:3px;margin-bottom:3px;" >
					<?php 
						$tv="select * from danh_muc order by id ";
						$tv_1=mysqli_query($mysqli,$tv);
						$a="";
						while($tv_2=mysqli_fetch_array($tv_1))
						{
							$ten=$tv_2['ten'];
							$id_menu=$tv_2['id'];
							if($_SESSION['danh_muc_menu']==$id_menu)
							{
								$a="selected";
							}
							echo "<option value='$id_menu' $a >";
								echo $ten;
							echo "</option>";
							$a="";
						}
					?>
				</select>
			<label>Hình ảnh:</label>
				<input type="file" name="hinh_anh" >
			<label>Giá: </label> 
				<input type="number" name="gia" value="" >
			<label>Sản phẩm mới: </label>
				<?php
					$a_1="";
					$a_2="";
					if(isset($_SESSION['tuy_chon_trang_chu']))
					{
						if($_SESSION['tuy_chon_trang_chu']=="co")
						{
							$a_2="selected";
						}
					}
				?>
				<select name="trang_chu" style="margin-top:3px;margin-bottom:3px;" >
					<option value="" <?php echo $a_1; ?> >Không</option>
					<option	option value="co" <?php echo $a_2; ?> >Có</option>
				</select>
		     <label>Nổi bật : </label>
				<?php
					$a_1="";
					$a_2="";
					if(isset($_SESSION['tuy_chon_noi_bat']))
					{
						if($_SESSION['tuy_chon_noi_bat']=="co")
						{
							$a_2="selected";
						}
					}
				?>
				<select name="noi_bat" style="margin-top:3px;margin-bottom:3px;" >
					<option value="" <?php echo $a_1; ?> >Không</option>
					<option value="co" <?php echo $a_2; ?> >Có</option>
				</select>
			 <label>Nội dung:</label>
				  <textarea id="noi_dung" name="noi_dung" ></textarea>
		<input type="submit" name="bieu_mau_them_san_pham" value="Thêm sản phẩm" >
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