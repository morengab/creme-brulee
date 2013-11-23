<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);

$app_name = $_POST['app_name'];

$fileName = $_FILES['app_image']['name'];
$fileType = $_FILES['app_image']['type'];
$fileTemp = $_FILES['app_image']['tmp_name'];

$target_path = "uploads/";
$target_path = $target_path . basename($fileName);

// echo "Your new app: " . $app_name ."<br>";
// echo "Uploaded image: " . $fileName ."<br>";
// echo "File type: " . $fileType ."<br>";
// echo "File Temp: " . $fileTemp ."<br>";
// echo "Target Path: " . $target_path ."<br>";

if(move_uploaded_file($_FILES['app_image']['tmp_name'], $target_path)) {
    echo "<img src='".$target_path."' width='250'><br>";
} else{
    echo "Error uploading the file!<br>";
}
?>