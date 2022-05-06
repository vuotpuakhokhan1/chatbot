<div class="container">
	<div class="col-md-6">
		<?php 
	echo "<br>";
	echo "<br>";
	echo "<form method='post' action='' >";
		echo "<input type='hidden' name='thong_tin_khach_hang' value='co' > ";
		echo "<table>";
			echo "<tr>";
				echo "<td colspan='2' height='30px' >";
					echo "<b><h2>Thông tin mua hàng</h2></b>";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td height='40px' >Lưu ý : </td>";
				echo "<td>";
					echo "Tên người mua , địa chỉ , điện thoại bắt buộc phải điền vào";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td width='180px' >Tên người mua :</td>";
				echo "<td>";
					echo "<input type='text' class='form-control' name='ten_nguoi_mua' >";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>Email : </td>";
				echo "<td>";
					echo "<input type='email' class='form-control' name='email' >";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>Địa chỉ : </td>";					
				echo "<td>";
					echo "<textarea class='form-control' name='dia_chi' ></textarea>";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>Điện thoại : </td>";
				echo "<td>";
					echo "<input type='number' style='width:400px' name='dien_thoai'class='form-control'>";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>Nội dung :</td>";
				echo "<td>";
					echo "<textarea style='width:400px;height:100px' name='noi_dung' class='form-control' ></textarea>";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>&nbsp;</td>";
				echo "<td>";
					echo "<input type='submit' value='Mua hàng' class='btn btn add-1' >";
				echo "</td>";
			echo "</tr>";
		echo "</table>";
	echo "</form>";
?>	</div>
			</div>

