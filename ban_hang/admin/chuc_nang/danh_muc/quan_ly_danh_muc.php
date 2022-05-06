<?php 
	include("chuc_nang/quan_tri_2/trang_chu_2.php");
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$so_dong_tren_mot_trang=10;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}
	
	$tv="select count(*) from danh_muc";
	$tv_1=mysqli_query($mysqli,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	$tv="select * from danh_muc order by id limit $vtbd,$so_dong_tren_mot_trang";
	$tv_1=mysqli_query($mysqli,$tv);
?>

<div>
<table width="990px" class="tb_a1" >
	<tr style="background:#FFF;height:40px;" >
		<td width="550px" ><b>Tên</b></td>
		<td align="center" width="220px" ><b>Sửa</b></td>
		<td align="center" width="220px" ><b>Xóa</b></td>
	</tr>
	<?php 
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$id=$tv_2['id'];
			$ten=$tv_2['ten'];
			$link_sua="?thamso=sua_danh_muc&id=".$id."&trang=".$_GET['trang'];
			$link_xoa="?xoa_danh_muc=co&id=".$id;
			?>
				<tr  >
					<td>
						<a href="<?php echo $link_sua; ?>"  ><?php echo $ten; ?></a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_sua; ?>"  >Sửa</a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_xoa; ?>"  onclick="return deleteAction();" >Xóa</a>
					</td>
				</tr>
			<?php 
		}
	?>
	
</table>
<?php 
			for($i=1;$i<=$so_trang;$i++)
				{
					$link_phan_trang="?thamso=quan_ly_danh_muc&trang=".$i;
					echo "<a href='$link_phan_trang' class='phan_trang' >";
						echo $i;
					echo "</a> ";
				}
			?>
</div>