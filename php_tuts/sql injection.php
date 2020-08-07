<?php
$dbservername="localhost";
$dbuser="root";
$dbpass="";
$dbname="test_db";
$conn=mysqli_connect($dbservername,$dbuser,$dbpass,$dbname);
if ($conn) 
{
if (isset($_POST['submit'])) 
{
  $user=$_POST['username'];
  $sql="select * from demo where username='$user'";
  $res=mysqli_query($conn,$sql);
  $x=mysqli_fetch_assoc($res);
  echo $x['id'];
   
}
}
?>
<form action="sql injection.php" method="POST">
    <input type="text" id="username" name="username" placeholder="username">
    <input type="submit" name="submit" value="Login">
    </form>