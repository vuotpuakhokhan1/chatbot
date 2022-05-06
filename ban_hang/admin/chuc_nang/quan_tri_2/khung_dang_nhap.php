<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<br><br>
<center>
	<form method="post" >
	 <div class="container">
       <div class="login-form">
	      <h1>Đăng nhập vào website</h1>
            <div class="input-box">
                <i ></i>
                <input type="text" name="tai_khoan" placeholder="Nhập username">
                    </div>
            <div class="input-box">
                <i ></i>
                <input type="password" name="mat_khau" placeholder="Nhập mật khẩu">
            </div>
					<input type="hidden" name="dang_nhap_quan_tri" value="dang_nhap_quan_tri" >
					<input type="submit" value="Đăng nhập" >
				
	   </div>
	 </div>
	</form>
</center>
