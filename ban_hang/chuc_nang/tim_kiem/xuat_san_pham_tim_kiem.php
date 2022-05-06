<?php 
$_SESSION['trang_chi_tiet_gio_hang']="co";
	if(trim($_GET['tu_khoa'])!=""){ 
		$m=explode(" ",$_GET['tu_khoa']);    
		$chuoi_tim_sql="";
		for($i=0; $i < count($m); $i++)
		{
			$tu=trim($m[$i]);
			if($tu != "")
			{
				$chuoi_tim_sql=$chuoi_tim_sql." ten like '%".$tu."%' or";
			}
		}
		$m_2=explode(" ",$chuoi_tim_sql);    
		$chuoi_tim_sql_2="";
		for($i=0; $i<count($m_2)-1; $i++)
		{
			$chuoi_tim_sql_2=$chuoi_tim_sql_2.$m_2[$i]." ";
		} 

		$so_du_lieu=15;
		$tv="select count(*) from san_pham  where $chuoi_tim_sql_2";
		$tv_1=mysqli_query($mysqli,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		$so_trang=ceil($tv_2[0]/$so_du_lieu);
		
		if(!isset($_GET['trang']))
		{
			$vtbd=0;
		}
		else{
			$vtbd=($_GET['trang']-1)*$so_du_lieu;
		}
		
		$tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham where $chuoi_tim_sql_2 order by id desc limit $vtbd,$so_du_lieu";

		$tv_1=mysqli_query($mysqli,$tv);
		echo "<table>";
		
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			echo "<tr>";
				for($i=1;$i<=3;$i++)
				{
					echo "<td align='center' width='215px' valign='top' >";
						if($tv_2 != false)
						{
							$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
							$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
							$gia=$tv_2['gia'];
							$gia=number_format($gia,0,",",".");
					?>
	<div class="product">
        <div class="container">
		<div class="spec ">
                <h3>Tìm kiếm </h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>    
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
                                <input type='hidden' name='so_luong'  value='1' class="entry value" >
                                <button class="btn btn-danger my-cart-btn my-cart-b">Thêm vào giỏ hàng</button>
                            </form>
                                        
                                    </div>
                                </div>
                            <div class="clearfix"></div>
                         </div>
            </div>
    </div>
<?php
					}
						else 
						{
							echo "&nbsp;";
						}
					echo "</td>";
					if($i!=3)
					{
						$tv_2=mysqli_fetch_array($tv_1);
					}
				}
			echo "</tr>";
		}
		echo "<tr>";
			echo "<td colspan='3' align='center' >";
				echo "<div class='phan_trang' >";
					for($i=1;$i<=$so_trang;$i++)
					{
						$link="?thamso=tim_kiem&tu_khoa=".$_GET['tu_khoa']."&trang=".$i;
						echo "<a href='$link' >";
							echo $i;echo " ";
						echo "</a>";
					}
				echo "</div>";
			echo "</td>";
		echo "</tr>";
		echo "</table>";
	}
	else
	{
	echo "Bạn chưa nhập từ khóa";
	}
?>
