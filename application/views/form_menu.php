<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
      
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
</head>

<body>
<center>

<div class="container">
	<br><br><br>
<div id="container"  align="center">
	<form action="Manage_menu/reg_train" method="post">
	<div class="alert alert-danger" role="alert">
  เพิ่มข้อมูลรถไฟ
</div>
	

	<div id="body"  align="center">
		<form action="" method="post">
		<table style="width:50%" border="0">
	<tr>
		<th></th>
		<th></th>
	</tr>
	<tr>
		<td>หมายเลขขบวน </td>
		<td>
			<input type="text" class="form-control" name="T_id" >
		</td>
	</tr><br>
	<tr>
		<td>จังหวัด/สถานีต้นทาง</td>
		<td>
			<input type="text" class="form-control" name="station" >
		</td>
	</tr>
	<tr>
		<td>เวลาออกจากสถานีต้นทาง</td>
		<td>
			<input type="text" class="form-control" name="time_out" >
		</td>
	</tr>
	<tr>
		<td>เวลาถึงห้วยราช</td>
		<td>
			<input type="text" class="form-control" name="to" >
		</td>
	</tr>
	<tr>
		<td>เวลาออกจากห้วยราช</td>
		<td>
			<input type="text" class="form-control" name="out" >
		</td>
	</tr>
	<tr>
		<td>ชื่อสถานีปลายทาง</td>
		<td>
			<input type="text" class="form-control" name="station_destination" >
		</td>
	</tr>
	<tr>
		<td>ถึงเวลาปลายทาง</td>
		<td>
			<input type="text" class="form-control" name="to_time" >
		</td>
	</tr>
	<tr>
		<td>หมายเหตุ</td>
		<td>
			<input type="text" class="form-control" name="note" >
		</td>
	</tr>
	<tr>
		<td> 
			
		</td>
		<td><br>
		  <button type="submit" class="btn btn-danger">เพิ่มข้อมูลรถไฟ</button>
		</td>
	</tr>	
	</table>
	</form><br>
	<a class="btn btn-outline-danger" href="http://localhost/menuproject/index.php/manage_menu/showall">แสดงเที่ยวรถไฟ</a>
	
	</div>

</div>
</center>
</body>
</html>