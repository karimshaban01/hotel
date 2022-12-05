<!DOCTYPE HTML>
<html>
<head>
<title>staff login</title>
<link href="bootstrap-5.0.2-dist\css\bootstrap.css" rel="stylesheet">
<link href="bootstrap-5.0.2-dist\css\bootstrap-grid.css" rel="stylesheet">
<link href="order.html">

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
<body >
<div class="card" style="margin-left: 20%; margin-top: 5%; width: 65%">
<form style="margin-left: 30%" method="POST" action="staffloginconfig.php">

<legend><img style="height: 20%; width: 20%; border-radius: 60%; margin-left: 50px" src="aa.jpg"></legend><br>
<h3>STAFF USERNAME</h3>
<input type="text" name="staff-name" placeholder="eg: KARIM SHABAN HARUNA"><br>
<h3>PASSWORD</h3>
<input type="password" name="pass" placeholder="****"><br>
<input type="submit" value="LOGIN" class="btn">
<a href="http://localhost:8080/kareem"><button type="" class="btn">ADMINISTRATOR</button></a><br><br>
<a href=# class="btn">forgot password?, click here</a><br><br><br>
<blockquote><h4>"We've to work hard as a Team"</h4></blockquote>

<br><br>

</form>
<div style="text-align: center; color: red; margin-left:0%"><h5>&copy;officialkareem, 2022.</h5></div>
</body>
</html>