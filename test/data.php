<?php 

//form validation vars
$formOk = true;
$errors = array();

//sumbission data
$date = date('d/m/Y');
$time = date('H:i:s');

//form data
$name = $_POST['name'];  
$shortcut = $_POST['shortcut'];
$image = $_POST['image_url'];

// Send the data back
echo "You've created a new shortcut: " . $name ."<br>";
echo "Date: " . $date ."<br>";
echo "Time: " . $time ."<br>";
?>
