<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once '../downloads/medoo.min.php';
$database = new medoo('macadamia_cluster_02');

// get info from form
$app_name = $_POST['app_name'];
$file_name = $_FILES['app_image']['name'];
$file_type = $_FILES['app_image']['type'];
$file_temp = $_FILES['app_image']['tmp_name'];

// save image to directory
$uploads_dir = "uploads";
$target_path = "../$uploads_dir/$file_name";
$image_url = "$uploads_dir/$file_name";

if(move_uploaded_file($file_temp, $target_path)) {
    $new_app = array(
        "name" => $app_name,
        "date" => time(),
        "image_url" => $image_url,
        "plays" => 0
    );
    $new_app_id = $database->insert("apps", $new_app);
    echo $new_app_id;
}
else {
    echo "There was an error uploading the file, please try again!";
}
?>