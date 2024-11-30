<?php
require_once 'connection.php';
session_start();
// $s = $_POST['sid'];
$t = $_POST['mind'];
$p = $_POST['privacy'];
$um = $_SESSION['email'];
$filestat = $_POST['fileup'];     //taking 0 or 1 for file upload checkbox
// $filename = basename($_FILES["filetoup"]["name"]);
$img = basename($_FILES["filetoup"]["name"]);
$time = date("d-m-Y")."-".time();
$filename = $time . "-" . $img;


$target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["filetoup"]["name"]);
$target_file = $target_dir .$time. "-" . basename($_FILES["filetoup"]["name"]);
// echo"File Name: " . basename($_FILES["filetoup"]["name"]);
$uploadOK = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



if ($filestat == 0) {
    $logic_query = "INSERT INTO status VALUES('', '$t', '$p', '$um', '')";

    if (mysqli_query($con, $logic_query) === FALSE) die("Could not publish a Status!");
    header('location:home.php');
}
if (
    $filestat == 1 && $imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
    || $imageFileType == "gif"
) {
    $check = getimagesize($_FILES["filetoup"]["tmp_name"]);
    if ($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        // echo "File is not an image.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded. ";
    } else {
        if (move_uploaded_file($_FILES["filetoup"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["filetoup"]["name"])) .
                " has been uploaded. ";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

        $logic_with_file_query = "INSERT INTO status VALUES('', '$t', '$p', '$um', '$filename')";
        if (mysqli_query($con, $logic_with_file_query) === FALSE) die("Could not publish a Status with the file!");
        header('location:home.php');
    }
}

else{
    echo"<script>alert('File not supported');document.location='home.php'</script>";
}


?>

