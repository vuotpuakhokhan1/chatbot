<?php 
	if(!isset($bien_bao_mat)){exit();}
	function thong_bao_abc($c)
	{
		$lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Thông báo</title></head>
			<body>
				<style type="text/css">
				a.trang_truoc_c8w{text-decoration:none;color:blue;font-size:36px;margin-left:50px}
				a.trang_truoc_c8w:hover{color:red;}
				</style>
				<br><br><br><br>
				<a href="<?php echo $lien_ket_trang_truoc; ?>" class="trang_truoc_c8w" >Bấm vào đây để trở về trang trước</a>
				<script type="text/javascript">
					alert("<?php echo $c; ?>");
				</script>
			</body>
			</html>		
		<?php 
		exit();
	}
	function trang_truoc_abc()
	{
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Đang chuyển về trang trước</title></head>
			<body>
				<script type="text/javascript">
					window.history.back();
				</script>	
			</body>
			</html>
		<?php 
	}
	
	if(isset($_POST['dang_nhap_quan_tri']))
	{
		$tai_khoan=$_POST['tai_khoan'];
		$tai_khoan=str_replace("'","",$tai_khoan);
		$tai_khoan=str_replace('"',"",$tai_khoan);
		
		$mat_khau=md5($_POST['mat_khau']);
		$mat_khau=md5($mat_khau);
		
		$tv="select count(*) from thong_tin_quan_tri where tai_khoan='$tai_khoan' and mat_khau='$mat_khau' ";
		$tv_1=mysqli_query($mysqli,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		if($tv_2[0]==1)
		{
			$_SESSION['tai_khoan']=$tai_khoan;
			$_SESSION['mat_khau']=$mat_khau;
		}
		else 
		{
			thong_bao_abc("Thông tin nhập vào không đúng");
		}
		trang_truoc_abc();
	}
	
	if(isset($_SESSION['tai_khoan']))
	{
		$tai_khoan=$_SESSION['tai_khoan'];
		$mat_khau=$_SESSION['mat_khau'];
		$tv="select count(*) from thong_tin_quan_tri where tai_khoan='$tai_khoan' and mat_khau='$mat_khau' ";
		$tv_1=mysqli_query($mysqli,$tv);
		$tv_2=mysqli_fetch_array($tv_1);
		if($tv_2[0]==1)
		{
			$xac_dinh_dang_nhap="co";
		}
	}
?>