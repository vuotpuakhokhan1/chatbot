
	<?php 
        $_SESSION['trang_chi_tiet_gio_hang']="co";
		$tv="select id,ten,hinh_anh,gia from san_pham where trang_chu='co' order by id desc limit 0,8";
		$tv_1= mysqli_query($mysqli,$tv);
		while($tv_2= mysqli_fetch_array($tv_1))
		{
			$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
			$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
	    ?>
			 <div class="col-md-3 pro-1">
                                <div class="col-m">
                                <a href="<?php echo $link_chi_tiet ?>"  class="offer-img">
                                        <img src="<?php echo $link_anh ?>" class="img-responsive" alt="">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="<?php echo $link_chi_tiet ?>"><?php echo $tv_2['ten'] ?></a></h6>                           
                                        </div>
                                        <div class="mid-2">
                                            <p ><em class="item_price"><?php echo number_format($tv_2['gia'],0,',','.')?> đ</em></p>
                                              <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                            <div class="add add-2">
                                           <form>
                                <input type='hidden' name='thamso' value='gio_hang' >
                                <input type='hidden' name='id' value=<?php echo $tv_2['id'] ?> >
                                <input type='hidden' name='so_luong' value='1' class="entry value" >
                                <button class="btn btn-danger my-cart-btn my-cart-b">Thêm vào giỏ hàng</button>
                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
		<?php }
	?>

