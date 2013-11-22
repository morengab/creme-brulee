<?php 

// get info from form
$app_name = $_POST['app_name'];
$file_name = $_FILES['app_image']['name'];
$file_type = $_FILES['app_image']['type'];
$file_temp = $_FILES['app_image']['tmp_name'];

// save image to directory
$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['app_image']['name']); 

if(move_uploaded_file($_FILES['app_image']['tmp_name'], $target_path)) {
    $last_user_id = $database->insert("account", [
        "name" => $app_name,
        "date" => time(),
        "image_url" => $target_path,
        "plays" => 0 
    ]);
} 
else {
    echo "There was an error uploading the file, please try again!";
}

// return app 
$response = array();
$response['name'] = $app_name;
$response['image_url'] = $target_path;
$response['plays'] = 0;

echo json_encode($response);

// echo "Your new app: " . $app_name ."<br>";
// echo "Uploaded image: " . $file_name ."<br>";
// echo "File type: " . $file_type ."<br>";
// echo "File Temp: " . $file_temp ."<br>";
// echo "Target Path: " . $target_path ."<br>";

?>