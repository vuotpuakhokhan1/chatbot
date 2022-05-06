<?php 
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$ten_nguoi_mua=$_POST['ten_nguoi_mua'];
		$email=$_POST['email'];
		$dien_thoai=$_POST['dien_thoai'];
		$dia_chi=$_POST['dia_chi'];
		$noi_dung=$_POST['noi_dung'];
		if($ten_nguoi_mua!="" and $dien_thoai!="" and $dia_chi!="")
		{
			$hang_duoc_mua="";
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
			{
				$hang_duoc_mua = $hang_duoc_mua.$_SESSION['id_them_vao_gio'][$i]."[|||]".$_SESSION['sl_them_vao_gio'][$i]."[|||||]";
			}		
			$tv="INSERT INTO hoa_don (
            id ,
            ten_nguoi_mua ,
            email ,
            dia_chi ,
            dien_thoai ,
            noi_dung ,
            hang_duoc_mua
            )
            VALUES (
            NULL ,
            '$ten_nguoi_mua',
            '$email',
            '$dia_chi',
            '$dien_thoai',
            '$noi_dung',
            '$hang_duoc_mua'
            );";
			mysqli_query($mysqli,$tv);
			unset($_SESSION['id_them_vao_gio']);
			unset($_SESSION['sl_them_vao_gio']);
			thong_bao_html_roi_chuyen_trang("Cảm ơn bạn đã mua hàng tại web site chúng tôi","index.php");
		}
		else 
		{
			thong_bao_html("Không được bỏ trống tên người mua , điện thoại , địa chỉ");
			trang_truoc();
			exit();
		}
	}
?>