<?php
	session_start();
    include("ket_noi.php");	
    include("chuc_nang/ham/ham.php");	
	if(isset($_POST['thong_tin_khach_hang']))
	{
		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	}
	if(isset($_POST['cap_nhat_gio_hang']))
	{
		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
		trang_truoc();
	}	
?> 
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Shop Thời Trang</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript"></script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
    <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
        
<!---//End-rate---->
</head>
<body>
<div class="header">
        <div class="container">
            
            <div class="logo">
                <img src="./images/logo.jpg" alt="hình ảnh" width="15%x"/>
            </div>
            <div class="header-ri">
                <ul class="social-top">
                    <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
                    <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
                </ul>   
            </div>
                <div class="nav-top">
                    <nav class="navbar navbar-default">
                    <div class="navbar-header nav_2">
                        <button type="button" style="color: red;" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
          
                    </div> 
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <?php
                            include("chuc_nang/menu/menu.php");
                        ?> 
                    </div>
                    </nav>
                   
                     <div class="cart" >
                        <a href="?thamso=gio_hang"><span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span></a>
                    </div>
                    <div class="search-form">
                        <form >
                         <input type="hidden" name="thamso" value="tim_kiem" >
                         <input type="text" name="tu_khoa" value="" placeholder="Nhập tên sản phẩm"  >
                         <input type="submit" value=" " >
                      </form>
                   </div>
                    <div class="clearfix"></div>
                </div> 
                </div>          
</div>
  <!---->
        <!--dieu huong -->
         <?php 
          include("chuc_nang/dieu_huong.php");
         ?>
<!--footer-->
<div class="footer">
    <div class="container">
        
        
            <div class="footer-bottom">
                
                <ul class="social-fo">
                    <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                </ul>
                <div class=" address">
                    <div class="col-md-4 fo-grid1">
                            <p><i class="fa fa-home" aria-hidden="true"></i>170 An Dương Vương.</p>
                    </div>
                    <div class="col-md-4 fo-grid1">
                            <p><i class="fa fa-phone" aria-hidden="true"></i>0989602711</p>  
                    </div>
                    <div class="col-md-4 fo-grid1">
                        <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>kieuduyen2@gmail.com</a></p>
                    </div>
                    <div class="clearfix"></div>
                    </div>
            </div>
        <div class="copy-right">
            <p> &copy; 2021 </p>
        </div>
    </div>
</div>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://ahachat.com/customer-chats/customer_chat_erjaR2kcBB626a3c712520d.js"></script>
</body>
</html>