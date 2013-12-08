<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title></title>

    <style>
        
    </style>
</head>

<?php 
require_once 'downloads/medoo.min.php';
$database = new medoo('d53482573gb7uf');

$app = $database->get("apps", "*", ["id"=>$app_id]);

function getShortcuts($database, $app_id) {
    $shortcuts = $database->select("shortcuts", [
        "shortcuts.id",
        "shortcuts.app_id",
        "shortcuts.name",
        "shortcuts.shortcut",
        "shortcuts.image_url"
    ], [
        "shortcuts.app_id" => $app_id,
        "ORDER" => "shortcuts.name ASC",
        "LIMIT" => 50
    ]);
    return $shortcuts;
}

$shortcuts = getShortcuts($database, $app_id);

?>
<body>
    <h1>Hello, World!</h1>
    
    <script>
        
    </script>
</body>
</html>