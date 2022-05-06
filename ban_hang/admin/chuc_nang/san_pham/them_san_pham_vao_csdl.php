<?php 
	if(!isset($bien_bao_mat)){exit();}// ktra
?>
<?php 
	$ten=$_POST['ten'];
	$danh_muc=$_POST['danh_muc'];
	$gia=$_POST['gia'];
	if($gia==""){
		$gia=0;
	}
	$ten_file_anh=$_FILES['hinh_anh']['name'];
	$trang_chu=$_POST['trang_chu'];
	$noi_bat=$_POST['noi_bat'];
	$noi_dung=$_POST['noi_dung'];
	$tv_m="select max(sap_xep_trang_chu) from san_pham";
	$tv_m_1=mysqli_query($mysqli,$tv_m);//thực hiện cây lệnh truy vấn
	$tv_m_2=mysqli_fetch_array($tv_m_1);//trả về kq của câu lệnh truy vấn
	$sap_xep_trang_chu=$tv_m_2[0]+1;
	if($ten!="")
	{
		if($ten_file_anh!="")
		{
			//select count(*) trả về số lượng sản phẩm có hình ảnh bằng tên file ảnh
			$tv_k="select count(*) from san_pham where hinh_anh='$ten_file_anh' ";
			$tv_k_1=mysqli_query($mysqli,$tv_k);//thực hiện cây lệnh truy vấn
			$tv_k_2=mysqli_fetch_array($tv_k_1);//trả về kq của câu lệnh truy vấn
			if($tv_k_2[0]==0)
			{
				//thêm vào bảng sp
				$tv="
				INSERT INTO san_pham ( 
				id ,
				ten ,
				gia ,
				hinh_anh ,
				noi_dung ,
				thuoc_menu ,
				noi_bat ,
				trang_chu ,
				sap_xep_trang_chu
				)
				VALUES (
				NULL ,
				'$ten',
				'$gia',
				'$ten_file_anh',
				'$noi_dung',
				'$danh_muc',
				'$noi_bat',
				'$trang_chu',
				'$sap_xep_trang_chu'
				);";
				mysqli_query($mysqli,$tv);
				$duong_dan_anh="../hinh_anh/san_pham/".$ten_file_anh;
				move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_anh);
				$_SESSION['danh_muc_menu']=$danh_muc;
				$_SESSION['tuy_chon_trang_chu']=$trang_chu;
				$_SESSION['tuy_chon_noi_bat']=$noi_bat;
				header('Location:?thamso=quan_ly_san_pham');
			}
			else 
			{
				thong_bao_html("Hình ảnh bị trùng tên");
			}
		}
		else 
		{
			thong_bao_html("Chưa chọn ảnh");
		}
	}
	else 
	{
		thong_bao_html("Tên sản phẩm chưa được điền vào");
	}
?>