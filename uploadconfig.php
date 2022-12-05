<?php
    
    if(!isset($_FILES['fu'])){
        $target_dir = "\wamp\www\hotel\uploads";
        $target_file = $target_dir.basename($_FILES['fu']['name']);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_dir, PATHINFO_EXTENSION);
    
            $check = get_image_size($_FILES["fu"]["tmp_name"]);
            if($check != false){
                echo "file is an image -" .$check["mime"]. ".";
                $uploadOk = 1;
                echo "yes it works";
            } else {
                echo "file is not an image";
                $uploadOk = 1;
            }
            }
            else {
                echo "it doesn't work";
            }
        
?>