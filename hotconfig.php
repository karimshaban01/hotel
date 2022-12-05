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

mysqli_close($conn);    
?>