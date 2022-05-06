<?php 
	$_SESSION['trang_chi_tiet_gio_hang']="co";
	$id=$_GET['id'];
	$tv="select * from san_pham where id='$id'";
	$tv_1=mysqli_query($mysqli,$tv);
	$row=mysqli_fetch_array($tv_1);
	$link_anh="hinh_anh/san_pham/".$row['hinh_anh'];
	?>
	<div class="single">
			<div class="container">
			<div class="single-top-main">
	   		<div class="col-md-5 single-top">
	   		<div class="single-w3agile">						
<div id="picture-frame">
			<img src="<?php echo $link_anh ?>" data-src="<?php echo $link_anh ?>" alt="" class="img-responsive"/>
</div>
			</div>
			</div>
			<div class="col-md-7 single-top-left ">
								<div class="single-right">
				<h3><?php echo $row['ten'] ?></h3>
				 <div class="pr-single">
				  <p class="reduced "><?php echo number_format($row['gia'],0,',','.')?> đ</p>
		        </div>
				<p class="in-pa">  </p>
				<p>Số lượng:</p>
					<div class="add add-3">
							<form>
								<input type='hidden' name='thamso' value='gio_hang' >
								<input type='hidden' name='id' value='<?php echo $id ?>' >
								<input type='number' min="0" name='so_luong' value='1' class="entry value" >
								<button class="btn btn-danger my-cart-btn my-cart-b">Thêm vào giỏ hàng</button>
							</form>
					</div>
			    <p class="in-pa"> </p>
				<h3>Mô tả: </h3> <br> <p> <?php echo $row['noi_dung'] ?> </p>
			<div class="clearfix"> </div>
			</div>
			</div>
		   <div class="clearfix"> </div>
	   </div>	
	   <br>
			
	</div>
</div>
	