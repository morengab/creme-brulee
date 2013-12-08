<?php 
// ini_set('display_errors',1);
// error_reporting(E_ALL);

require_once '../downloads/medoo.min.php';
$database = new medoo('macadamia_cluster_02');

// get info from form
$shortcut_name = $_POST['shortcut_name'];
$shortcut_code = $_POST['shortcut_code'];
$app_id = $_POST['app_id'];

$file_name = $_FILES['shortcut_image']['name'];
$file_type = $_FILES['shortcut_image']['type'];
$file_temp = $_FILES['shortcut_image']['tmp_name'];

// save image to directory
$uploads_dir = "uploads";
$target_path = "../$uploads_dir/$file_name";
$image_url = "$uploads_dir/$file_name";

if(move_uploaded_file($file_temp, $target_path)) {
    $new_shortcut = array(
        "app_id" => $app_id,
        "name" => $shortcut_name,
        "shortcut" => $shortcut_code,
        "image_url" => $image_url,
    );
    $new_shortcut_id = $database->insert("shortcuts", $new_shortcut);
    echo json_encode($new_shortcut);
}
else {
    echo "There was an error uploading the file, please try again!";
}
?>



