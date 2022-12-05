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
        echo "congrats you made it";
    }
$sql = "SELECT * FROM orders";
$stmt = mysqli_stmt_init($conn);
$stmt = mysqli_prepare($conn, $sql);

if($stmt = mysqli_prepare($conn, $sql)){
    mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($row = mysqli_fetch_assoc($result))
                {
                    echo '<table>  <th style="color: red">CUSTOMER NAME</th>  <th style="color: red">TABLE NAME</th>   <th style="color: red">PLACE</th>   <th style="color: red">SEAT NUMBER</th>   <th style="color: red">ORDER SIZE</th></tr>
                    <tr><td><h1>'.$row['customer-name']. '</h1></td><td><h1>'.$row['table-name']. '</h1></td><td><h1>'.$row['place']. '</h1></td><td><h1>'.$row['seat-number']. '</h1></td><td><h1>'.$row['order-size']. '</h1></td></tr></table>';
                    
                    }
}

?>