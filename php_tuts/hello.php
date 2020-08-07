<?php
if (isset($_POST['Login'])) 
{
$user="vivek";
$pass="12345";

if($user===$_POST['user'] && $pass===$_POST['password'])
{
 header("Location: isset.php");
}
else
{
    header("Location: DEMO LOGIN.php");
}
}
else
{
    header("Location: DEMO LOGIN.php");
}

?>