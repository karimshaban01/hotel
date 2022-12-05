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

if(isset($_POST['submit'])){
        /*$place = $_POST['place'];
        $tablename = $_POST['table-name'];
        $seatnumber = $_POST['seat-number'];
        $ordersize = $_POST['order-size'];
        $customername = $_POST['customer-name'];*/
    }   
$sql="INSERT INTO orders VALUES ('".$_POST['place']."', '".$_POST['table-name']."', '".$_POST['seat-number']."', '".$_POST['order-size']."', '".$_POST['customer-name']."')";
$stmt = mysqli_stmt_init($conn);
$stmt = mysqli_prepare($conn, $sql);

if($stmt = mysqli_prepare($conn, $sql)){
    
    //mysqli_stmt_bind_param($stmt, "sssss", $place, $table_name, $seat_number, $order_size, $customer_name);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    echo "congrats you did it";
    header ("location: home.php");
    } 
 else {
    echo ("something wrong");
 }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

//}