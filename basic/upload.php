<?php 
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Cek apakah file gambar itu asli atau palsu
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
    if ($check !== false) {
        // echo "File is an image - " .  $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // check if file already exist
    if(file_exists($target_file)) {
        echo "Sorry, file already exist";
        $uploadOk = 0;
    }

    // check file size
    if($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large";
        $uploadOk = 0;
    }

    // check file type is JPG,JPEG,PNG and GIF files. if its not then throw an error
    if($imageFileType != 'jpg' && $imageFileType != 'jpeg' && $imageFileType != 'png' && $imageFileType != 'gif') {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed";
        $uploadOk = 0;
    }

    // check if $uploadOK is set to 0 By Error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everthing is ok, try to upload file
    } else {
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The File " . htmlspecialchars(basename($_FILES['fileToUpload']['name'])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    
}


?>