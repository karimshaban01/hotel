<?php

    if(isset($_FILES['fu'])){
        $fileName = $_FILES['fu']['name'];
        $fileTmpName = $_FILES['fu']['tmp_name'];
        $fileSize = $_FILES['fu']['size'];
        $fileError = $_FILES['fu']['error'];
        $fileType = $_FILES['fu']['type']; 
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($fileActualExt, $allowed))
        {
            if ($fileError === 0)
            {
                if ($fileSize < 10000000)
                {
                    $FileNameNew = uniqid('', true) . "." . $fileActualExt;
                    $fileDestination = 'uploads/' . $FileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    
                    echo"congratulations finally yo did it.";
                }
                else
                {
                    echo "something went wrong";
                    exit(); 
                }}}}
        
?>
<form action= "" method="post" enctype="multipart/form-data">
SELECT FILE TO UPLOAD:<br><br>
<input type="file" name="fu" placeholder="select file" id="fu"><br><br>
<input type="submit" value="upload" name="submit">
</form>