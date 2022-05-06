<?php 
	include("chuc_nang/quan_tri_2/trang_chu_2.php");
	if(!isset($bien_bao_mat)){exit();}
?>

<?php 
	$so_dong_tren_mot_trang=10;
	if(!isset($_GET['trang'])){$_GET['trang']=1;}	

	$tv="select count(id) from san_pham where trang_chu='co' ";

	$tv_1=mysqli_query($mysqli,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
	
	$vtbd=($_GET['trang']-1)*$so_dong_tren_mot_trang;
	$tv="select id,ten,gia,hinh_anh,sap_xep_trang_chu from san_pham where trang_chu='co' order by sap_xep_trang_chu desc limit $vtbd,$so_dong_tren_mot_trang";

	$tv_1=mysqli_query($mysqli,$tv);
?>

<form method="post" >
	<table width="990px" class="tb_a1" >
		<tr style="background:#CCFFFF;height:40px;" >
			<td width="120px" ><b>Hình ảnh</b></td>
			<td width="450px" ><b>Tên</b></td>
			<td align="center" width="140px" ><b>Giá</b></td>
			<td align="center" width="140px" ><b>Sản phẩm mới</b></td>
			
		</tr>
		<?php 
			$i=1;
			while($tv_2=mysqli_fetch_array($tv_1))
			{
				$id=$tv_2['id'];
				$ten=$tv_2['ten'];
				$gia=$tv_2['gia'];
				$gia=number_format($gia,0,",",".");
				$link_hinh="../hinh_anh/san_pham/".$tv_2['hinh_anh'];
				$sap_xep_trang_chu=$tv_2['sap_xep_trang_chu'];
				$ten_select="select_".$i;
				$ten_input="input_".$i;
				$ten_id="id_".$i;
				?>
					<tr class="a_1" >
						<td align="center" >
							<img src="<?php echo $link_hinh; ?>" style="width:100px;margin-top:10px;margin-bottom:10px;" border="0" >
						</td>
						<td>
							<?php echo $ten; ?>
						</td>
						<td align="center" >
							<?php echo $gia; ?>
						</td>
						<td align="center" >
							<select name="<?php echo $ten_select; ?>" >
								<option value="" >Không</option>
								<option value="co" selected >Có</option>
							</select>
						</td>			
					</tr>
				<?php				
				$i++;
			}
		?>
	</table>
	<input type="submit" name="bieu_mau_san_pham_trang_chu" value="Cập nhật" >
	<br><br>
	<?php 
					for($i=1;$i<=$so_trang;$i++)
					{
						$link_phan_trang="?thamso=san_pham_trang_chu&trang=".$i;
						echo "<a href='$link_phan_trang' class='phan_trang' >";
							echo $i;
						echo "</a> ";
					}
	?>
</form>