<?php
if(isset($_POST['submit']))
{
$image=$_FILES['image'];

echo "File Name is".$image['name']."<br>";

echo "File Size is".$image['size']."<br>";

echo "Temp Dir is".$image['tmp_name']."<br>";

echo "File Type is".$image['type']."<br>";

move_uploaded_file($image['tmp_name'],"img/".$image['name']);

}


?>