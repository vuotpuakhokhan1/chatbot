<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$ten_menu=$_POST['ten'];
	$id=$_GET['id'];
	if($ten_menu!="")
	{
		$tv="
		UPDATE danh_muc SET 
		ten = '$ten_menu'
		WHERE id =$id;
		";
		mysqli_query($mysqli,$tv);
		header('Location:?thamso=quan_ly_danh_muc');

	}
	else 
	{
		thong_bao_html("Tên menu chưa được điền vào");
	}
?>