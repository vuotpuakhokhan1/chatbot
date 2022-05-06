<?php 
	if(isset($_GET['id']) and $_SESSION['trang_chi_tiet_gio_hang']=="co")
	{
		$_SESSION['trang_chi_tiet_gio_hang']="huy_bo";
		if(isset($_SESSION['id_them_vao_gio']))
		{
			$so=count($_SESSION['id_them_vao_gio']);
			$trung_lap="khong";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				if($_SESSION['id_them_vao_gio'][$i]==$_GET['id'])
				{
					$trung_lap="co";
					$vi_tri_trung_lap=$i;
					break;
				}
			}
			if($trung_lap=="khong")
			{
				$_SESSION['id_them_vao_gio'][$so]=$_GET['id'];
				$_SESSION['sl_them_vao_gio'][$so]=$_GET['so_luong'];
			}
			if($trung_lap=="co")
			{
				$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['so_luong'];
			}
		}
		else
		{
			$_SESSION['id_them_vao_gio'][0]=$_GET['id'];
			$_SESSION['sl_them_vao_gio'][0]=$_GET['so_luong'];
		}
	}

	$gio_hang="khong";
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$so_luong=0;
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
		}
		if($so_luong!=0)
		{
			$gio_hang="co";
		}
	}
	
	
	if($gio_hang=="khong")
	{
		echo "Không có sản phẩm trong giỏ hàng";
	}
	else 
	{
		?>
		<div class="check-out">	 
		<div class="container">	 
	 <div class="spec ">
				<h3>Giỏ hàng</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
				
 <table class="table ">
		  <tr>
			<th class="t-head head-it ">Sản phẩm</th>
			<th class="t-head">Giá</th>
		    <th class="t-head">Số lượng</th>
			<th class="t-head">Thành tiền</th>
		  </tr>
		  <form action='' method='post' >
		  	<input type='hidden' name='cap_nhat_gio_hang' value='co' >
		  	<?php 
			$tong_cong=0;
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
			
				$tv="select id,ten,gia,hinh_anh from san_pham where id='".$_SESSION['id_them_vao_gio'][$i]."'";
				$tv_1=mysqli_query($mysqli,$tv);
				$tv_2=mysqli_fetch_array($tv_1);
				$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
				$tien=$tv_2['gia']*$_SESSION['sl_them_vao_gio'][$i];
				$tong_cong=$tong_cong+$tien;
				$name_id="id_".$i;
				$name_sl="sl_".$i;
				if($_SESSION['sl_them_vao_gio'][$i]!=0)
				{ ?>
					<tr class="cross">
			<td class="ring-in t-data">
				<a href="#" class="at-in">
					<img src="<?php echo $link_anh ?>" class="img-responsive" width="110px" alt="hình ảnh">
				</a>
			<div class="sed">
				<h5><?php echo $tv_2['ten'] ?></h5>
			</div>
				<div class="clearfix"> </div>
			 </td>
			<td class="t-data"><?php echo number_format($tv_2['gia'],0,',','.')?> đ</td>
			<td class="t-data">
    <?php 
			echo "<input type='hidden' name='".$name_id."' value='".$_SESSION['id_them_vao_gio'][$i]."' >";
			echo "<input type='number' min='0' style='width:50px' name='".$name_sl."' value='". $_SESSION['sl_them_vao_gio'][$i]."' > ";
	?>
			</td>

			<td class="t-data t-w3l"><a class=" add-1" href="#"><?php echo number_format($tien,0,',','.') ?> đ</a></td>
			
		  </tr>
					<?php	
				}
			}	
		  	?>
		  	<tr>
		  		<td colspan="2"><a href="." class="btn add-1">Tiếp tục mua hàng</a></td>
		  		<td ><input type='submit' class="btn add-1" value='Cập nhật' ></td>
		  		<td>Tổng thành tiền : <?php echo number_format($tong_cong,0,',','.') ?> đ</td>
		 	</tr>
		  
	</table>
 			
	</form>
		 </div>
		 </div>
		<?php 
		
		include("chuc_nang/gio_hang/bieu_mau_mua_hang.php");
	}
	
?>