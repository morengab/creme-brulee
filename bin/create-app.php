<?php
require_once 'downloads/medoo.min.php';

$database = new medoo('macadamia_cluster');

if (isset($_GET['name'])) {
    echo 'hello world';   
}
?>
