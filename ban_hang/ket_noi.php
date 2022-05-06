<?php    
$mysqli = new mysqli("localhost","root","","banhang");
// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nối MYSQLI lỗi " . $mysqli->connect_error;
  exit();
}
?>