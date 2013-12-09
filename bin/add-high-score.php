<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once "../downloads/medoo.min-local.php";
$database =  new medoo('macadamia_cluster_02');

// // require_once "../downloads/medoo.min.php";
// // $database =  new medoo('d53482573gb7uf');

if (isset($_GET['app_id'])) {
    $app_id = $_GET['app_id'];
    $score = $_GET['score'];
    $name = $_GET['name'];

    $new_high_score = array(
        "app_id" => $app_id,
        "name" => $name,
        "score" => $score
    );

    $database->insert("high_scores", $new_high_score);

    echo json_encode($new_high_score);
} else {
    echo "Error: $_GET failed to return app_id";
}
?>