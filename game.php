<html>
<head>
    <title>Query string</title>
</head>

<?php 
require_once 'downloads/medoo.min.php';
$database = new medoo('macadamia_cluster_02');
?>

<body>

    <?php
    echo "<h1>Hello " . $_GET["id"] . "</h1>";
    ?>

    <?php
    $apps = $database->select("apps", "*", ["id"=>$_GET["id"]]);
    foreach ($apps as $app):    
    ?>
    
    <?php echo $app['name']; ?>
    <?php echo $app['name']; ?>
    

    <?php
    endforeach;
    ?>


</body>
</html>