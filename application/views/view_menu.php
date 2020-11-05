<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Train</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	
</head>
<body>
<div id="container"  align="center">
	<form action="Manage_menu/reg_train" method="post">
	<div class="alert alert-danger" role="alert">
  เพิ่มข้อมูลรถไฟ
</div>
<table  border="1"> 
<table  border="1"> 
	<table align="center"  border="1">
  <tr>
    <td rowspan="2">ขบวน</td>
   <td colspan="2"><center> ต้นทาง</center></td>
   <td colspan="2"><center> ห้วยราช</center></td>
   <td colspan="2"><center> ปลายทาง</center></td>
   <td rowspan="2">หมายเหตุ</td>
  </tr> 
  <tr>
    <td>สถานี</td>
	<td>เวลาออก</td>
	<td>ถึง</td>
	<td>ออก</td>
	<td>สถานี</td>
	<td>ถึงเวลา</td>
  </tr>
  
  
  
<?php
	foreach($menus->result_array() as $menu){

		echo "<tr align=\"center\">";
			echo"<td>".$menu['T_id'];
			echo"<td>".$menu['station']."</td>";
			echo"<td>".$menu['time_out']."</td>";
			echo"<td>".$menu['to']."</td>";
			echo"<td>".$menu['out']."</td>";
			echo"<td>".$menu['station_destination']."</td>";
			echo"<td>".$menu['to_time']."</td>";
			echo"<td>".$menu['note']."</td>";
			}
?>
		</table>
		<br>
	<center>	
		<a class="btn btn-danger" href="http://localhost/menuproject/index.php/manage_menu">ไปหน้าเพิ่มเมนู</a>
	</div>
		</center>	
	
</div>

</body>
</html>