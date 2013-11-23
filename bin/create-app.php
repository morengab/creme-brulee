<?php 

// get info from form
$app_name = $_POST['app_name'];
$file_name = $_FILES['app_image']['name'];
$file_type = $_FILES['app_image']['type'];
$file_temp = $_FILES['app_image']['tmp_name'];

// save image to directory
$uploads_dir = "uploads";
$target_path = "$uploads_dir/$file_name";
if(move_uploaded_file($file_temp, $target_path)) {
    // $last_user_id = $database->insert("account", [
    //     "name" => $app_name,
    //     "date" => time(),
    //     "image_url" => $target_path,
    //     "plays" => 0 
    // ]);
    echo "Image uploaded to ". $target_path;
} 
else {
    echo "There was an error uploading the file, please try again!";
}

// return app 
// $response = array();
// $response['name'] = $app_name;
// $response['image_url'] = $target_path;
// $response['plays'] = 0;

?>