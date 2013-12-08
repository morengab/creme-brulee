<?php
// ini_set('display_errors',1);
// error_reporting(E_ALL);

require_once "downloads/medoo.min-local.php";
$database =  new medoo('macadamia_cluster_02');

// require_once "downloads/medoo.min.php";
// $database =  new medoo('d53482573gb7uf');

if (isset($_GET['app_id'])) {
	$results = $database->select("shortcuts", array(
	        "shortcuts.id",
	        "shortcuts.app_id",
	        "shortcuts.name",
	        "shortcuts.shortcut",
	        "shortcuts.image_url"
    	), array(
	        "shortcuts.app_id" => $_GET['app_id']
    	)
    );

} else {	
	$results = $database->select("shortcuts", "*");
}

$response = array();
foreach ($results as $result) {
	$response[$result['id']] = array(
		'app_id' => $result['app_id'],
		'name' => $result['name'], 
		'shortcut' => $result['shortcut'], 
		'image' => $result['image_url']
	);
}

echo json_encode($response);

?>
