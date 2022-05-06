<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$ten_menu=$_POST['ten'];
	if($ten_menu!="")
	{
		$tv="
		INSERT INTO danh_muc (id ,ten )
		VALUES (NULL ,'$ten_menu'
		);";
		mysqli_query($mysqli,$tv);
		header('Location:?thamso=quan_ly_danh_muc');
	}
	else 
	{
		thong_bao_html("Tên menu chưa được điền vào");
	}
?>