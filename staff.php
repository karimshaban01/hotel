<?php     
$servername = "localhost";
    $userneme = "root";
    $password = "";
    $dbname = "hotel";

    $conn = mysqli_connect($servername, $userneme, $password, $dbname);

    if(!$conn){
        die ("failed to connect");
    }
    else {
        echo "";
    }
$sql = "SELECT * FROM orders";
$stmt = mysqli_stmt_init($conn);
$stmt = mysqli_prepare($conn, $sql);

if($stmt = mysqli_prepare($conn, $sql)){
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

                                
                    

echo '
<!DOCTYPE HTML>
<html>
<head>
<title>order</title>
<link href="bootstrap-5.0.2-dist\css\bootstrap.css" rel="stylesheet">
<link href="bootstrap-5.0.2-dist\css\bootstrap-grid.css" rel="stylesheet">
<link href="home.html">



<style>
table {
  border-collapse: collapse;
  width: 70%;

}

th {
  text-align: left;
  padding: 8px;
  

}
 td {
  text-align: left;
  padding: 8px;
  }



tr: nth-child(even) {
  background-color: #D6EEEE;
}

.btn {
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
<div class="card" style="margin-left: 20%; width: 100%">
<form style="margin-left: 2%" method="POST">
<div style="margin-left: 25%">
<legend><img style="height: 20%; width: 20%; border-radius: 60%; margin-left: 50px" src="aa.jpg"></legend><br>
<h2>HELLO DEAR STAFF<br>HERE ARE ORDERS FOR YOU. <br><br>SERVE THEM ALL NOW </h2><br>
</div>
<table style="width: 100%"><tr>
<th style="color: red; width: 25%" ><h4>CUSTOMER NAME: <br></h4></th>


<th style="color: red; width: 20%" ><h4>TABLE NAME:	</h4></th>

<th style="color: red; width: 20%"><h4>DELIVERY PLACE:	</h4></th>

<th style="color: red; width: 20%"><h4>SEAT NUMBER:	</h4></th>

<th style="color: red; width: 20%"><h4>ORDER SIZE:	</h4></th></tr>';

while ($row = mysqli_fetch_assoc($result))
                {
                    echo '<table class="table">
                    <tr class="tr"><td class="td" style="width: 10%">'.$row['customer-name']. '</td><td class="td" style="width: 10%">'.strtoupper($row['table-name']). '</td><td class="td" style="width: 10%">'.$row['place']. '</td><td style="width: 5%">'.$row['seat-number']. '</td><td class="td" style="width: 5%">'.$row['order-size']. '</td></tr>
                          </table>';
                    
                    }


echo '<div style="text-align: center"><button type="submit" value="SUBMIT" class="btn">DONE!!!</button><br><br>
<blockquote><h4>"Ensure they are satisfied"</h4></blockquote></div>
<div style="text-align: center; color: red"><h5>&copy;officialkareem, 2022.</h5></div>
</form>
</div>
<form>
</form>
</body>
</html>';
                }
                ?>