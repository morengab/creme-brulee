<?php 
// ini_set('display_errors',1);
// error_reporting(E_ALL);

require_once '../downloads/medoo.min.php';
$database = new medoo('macadamia_cluster_02');

if (isset($_GET['app_id'])) {
    $id = $_GET['app_id'];

    $database->update(
        "apps",
        [
            "plays[+]" => 1
        ], 
        [
            "id" => $id
        ]
    );
    echo $id;
} else {
    echo "Error: $_GET failed to return app_id";
}
?>