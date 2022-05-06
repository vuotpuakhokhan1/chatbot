<?php 
	include("chuc_nang/quan_tri_2/trang_chu_2.php");
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	if(!isset($_GET['id_menu']))
	{
		$id_menu="toan_bo_san_pham";
	}
	else 
	{
		if($_GET['id_menu']!="" and $_GET['id_menu']!="toan_bo_san_pham")
		{
			$id_menu=$_GET['id_menu'];
		}
		else 
		{
			$id_menu="toan_bo_san_pham";
		}
	}
?>
<br>
<br><br>
<?php 
	$so_dong_tren_mot_trang=10;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	if($id_menu=="toan_bo_san_pham")
	{
		$tv="select count(*) from san_pham";
	}
	else 
	{
		$tv="select count(*) from san_pham where thuoc_menu='$id_menu' ";
	}
	$tv_1=mysqli_query($mysqli,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);

	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	if($id_menu=="toan_bo_san_pham")
	{
		$tv="select id,ten,gia,hinh_anh from san_pham order by id desc limit $vtbd,$so_dong_tren_mot_trang";
	}
	else 
	{
		$tv="select id,ten,gia,hinh_anh from san_pham where thuoc_menu='$id_menu' order by id desc limit $vtbd,$so_dong_tren_mot_trang";
	}
	$tv_1=mysqli_query($mysqli,$tv);
?>
<div >
<table>
	<tr style="background:#FFF;height:40px;" >
		<td width="120px" ><b>Hình ảnh</b></td>
		<td width="450px" ><b>Tên</b></td>
		<td align="center" width="140px" ><b>Giá</b></td>
		<td align="center" width="140px" ><b>Sửa</b></td>
		<td align="center" width="140px" ><b>Xóa</b></td>
	</tr>
	<?php 
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$id=$tv_2['id'];
			$ten=$tv_2['ten'];
			$gia=$tv_2['gia'];
			$gia=number_format($gia,0,",",".");
			$link_hinh="../hinh_anh/san_pham/".$tv_2['hinh_anh'];
			$link_sua="?thamso=sua_san_pham&id_menu=".$id_menu."&id=".$id."&trang=".$_GET['trang'];
			$link_xoa="?xoa_san_pham=co&id=".$id;
			?>
				<tr class="a_1" >
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" >
							<img src="<?php echo $link_hinh; ?>" style="width:100px;margin-top:10px;margin-bottom:10px;" border="0" >
						</a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>" style="margin-left:10px" ><?php echo $ten; ?></a>
					</td>
					<td align="center" >
						<?php echo $gia; ?>
					</td>
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" >Sửa</a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_xoa; ?>" onclick="return deleteAction();">Xóa</a>
					</td>
				</tr>
			<?php 
		}
	?>
	
</table>
<div style="text-align:left;width: 17px;" >
	Chọn: <select name="danh_muc" onchange="window.location='?thamso=quan_ly_san_pham&id_menu='+this.value" >
	<option value="" >Toàn bộ sản phẩm</option>
	<?php 
		$tv="select * from danh_muc order by id ";
		$tv_1=mysqli_query($mysqli,$tv);
		$a="";
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$ten=$tv_2['ten'];
			$id=$tv_2['id'];
			if($id_menu==$id)
			{
				$a="selected";
			}
			echo "<option value='$id' $a >";
				echo $ten;
			echo "</option>";
			$a="";
		}
	?>
	</select>
</div>

<?php 
			for($i=1;$i<=$so_trang;$i++)
			{
				$link_phan_trang="?thamso=quan_ly_san_pham&id_menu=".$id_menu."&trang=".$i;
				echo "<a href='$link_phan_trang' class='phan_trang' >";
				echo $i;
				echo "</a> ";
			}
    ?>
</div>

