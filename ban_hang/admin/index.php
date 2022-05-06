<?php
	session_start();
	$bien_bao_mat="co";
    include("../ket_noi.php");	
	include("chuc_nang/quan_tri_2/xac_dinh_dang_nhap.php");
	include("chuc_nang/quan_tri_2/ham.php");
	if(isset($xac_dinh_dang_nhap))
	{
		if($xac_dinh_dang_nhap=="co")
		{
			include("chuc_nang/quan_tri_2/xu_ly_post_get.php");
		}   
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Quản trị</title>
		<script src='phan_bo_tro/ckeditor/ckeditor.js'></script>
		<script src='phan_bo_tro/ckfinder/ckfinder.js'></script>
		<link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">
		<script>
	      function deleteAction(){
		    return confirm("Bạn có muốn xóa mục này");
		}
      </script>
	</head>
	<body>
		<?php 
			if(!isset($xac_dinh_dang_nhap))
			{
				include("chuc_nang/quan_tri_2/khung_dang_nhap.php");
			}
			else 
			{
				if($xac_dinh_dang_nhap=="co")
				{
					echo "<section>";
						include("chuc_nang/quan_tri_2/trang_chu.php");
					echo "</section>";
				}
			}
		?>
	</body>
</html>