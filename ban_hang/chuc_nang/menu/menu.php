
<?php 
 
 $sql="select * from danh_muc";
 $query = mysqli_query($mysqli,$sql);
?>
<ul class="nav navbar-nav ">
                         <li class=" "><a href="." class="hyper "><span>Home</span></a></li>  
                         <li class="dropdown ">
                             <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Danh mục<b class="caret"></b></span></a>
                             <ul class="dropdown-menu multi">
                                 <div class="row">
                                     <div class="col-sm-9">
                                         <ul class="multi-column-dropdown">
                                             <?php 
                                             while ($row = mysqli_fetch_array($query)) {
                                                 $link="?thamso=xuat_san_pham&id=".$row['id'];
                                             ?>
                                            <li><a href="<?php echo $link?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $row['ten']?></a></li>
                                             <?php } ?>
                                         </ul>
                                     
                                     </div>
                                     
                                     
                                     <div class="clearfix"></div>
                                 </div>  
                             </ul>
                        </li>
                     </ul>