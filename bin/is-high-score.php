<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once "../downloads/medoo.min-local.php";
$database =  new medoo('macadamia_cluster_02');

// require_once "../downloads/medoo.min.php";
// $database =  new medoo('d53482573gb7uf');


if (isset($_GET['app_id'])) {
    $id = $_GET['app_id'];
    $score = $_GET['score'];

    $scores = $database->select("high_scores", array(
        "score"
        ), array(
        "app_id" => $id
    ));

    echo array($score, $id);
} else {
    echo "Error: $_GET failed to return app_id";
}
?>