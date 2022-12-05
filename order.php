<!DOCTYPE HTML>
<html>
<head>
<title>order</title>
<link href="bootstrap-5.0.2-dist\css\bootstrap.css" rel="stylesheet">
<link href="bootstrap-5.0.2-dist\css\bootstrap-grid.css" rel="stylesheet">
<link href="home.html">
<style>.btn {
  color: #0d6efd;
  border-color: #0d6efd;
  margin-left: 0%;
	margin-top: 20px;
}
.btn:hover {
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd;
}
.btn:focus + .btn-outline-primary, .btn:focus {
  box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.5)
			
			}
</style>
</head>
<body>
<div>
<table>
<tr>
<td>
<div class="card" style="margin-left: 30%">
<form style="margin-left: 30%" method="POST" action="insert.php">

<legend><img style="height: 20%; width: 20%; border-radius: 60%; margin-left: 50px" src="aa.jpg"></legend><br>
<h2>HELLO DEAR CUSTOMER <br>WE'RE HERE FOR YOU. <br><br>PLACE YOUR ORDER BELOW</h2><br>

<h3>DELIVERY PLACE <br>(for customers outside of a canteen)</h3>
select your delivery place:<br>

<input type="text" name="place" placeholder="eg- NGARENARO"><br><br>

<h3>TABLE NAME</h3>
<input type="text" name="table-name" placeholder="eg- SERENGETI"><br><br>
<h3>SEAT NUMBER</h3>
<input type="number" name="seat-number" placeholder="eg 22"><br><br>
<h3>ORDER SIZE</h3>
<input type="number" name="order-size" placeholder=" eg: 3-plates">
<h3>CUSTOMER FULNAME</h3>
<input type="text" name="customer-name" placeholder="eg: KARIM SHABAN HARUNA"><br>
<button type="submit" value="submit" class="btn">SUBMIT YOUR ORDER</button><br><br>
<blockquote><h4>"We are so excited to serve you"</h4></blockquote>

</form>
<div style="text-align: center; color: red; margin-left:0%"><h5>&copy;officialkareem, 2022.</h5></div>
</div>
<form>
</form>

</body>
</html>