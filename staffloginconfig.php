<?php    

$servername = "localhost";
$userneme = "root";
$password = "";
$dbname = "hotel";

$conn = mysqli_connect($servername, $userneme, $password, $dbname);

if(!$conn){
    die ("failed to connect");
}
else {echo 'redirrrrecting';}

    
                    
            

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $staff_name = $_POST['staff-name'];
            $pass = $_POST['pass'];
           
            
                if(empty($staff_name) || empty($pass)){
                    echo "fill the fields";
                    header ("location: stafflogin.php");
                    
                }

            else {
                $sql = "SELECT * FROM staffs WHERE `staff-name`= '$staff_name';";
                $stmt = mysqli_stmt_init($conn);
                $stmt = mysqli_prepare($conn, $sql);
                
                
                if($stmt = mysqli_prepare($conn, $sql)){
                    //mysqli_stmt_bind_param($stmt, 's', $_POST['staff-name']);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                echo"safari bado";
            
                    if($row = mysqli_fetch_assoc($result)){
                        echo '<h1>'.$row['staff-name'].'</h1>';}
                        //$pwdcheck = password_verify($pass, $row['pass']);
                            if($pass != $row['pass']){
                                echo "UMEINGIA CHAKA MJOMBA";
                            } else if ($pass == $row['pass']){
                                echo "congrats you made it";
                                session_start();
                                $_SESSION['staff-name'] = $row['staff-name'];
                                header ("location: staff.php");
                            }
                        } else {
                                echo "something went wrong";
                                header ("location: stafflogin.php");
                            }
                        
                        } 
                    } else
                     {echo "kagua kodi zako mjomba";}
	
	 
        
        mysqli_close($conn);
  
        
?>
