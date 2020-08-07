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
  $pass=$_POST['password'];     
  
$sql="select password from demo where username='$user'";
$res=mysqli_query($conn,$sql);
if (mysqli_num_rows($res)) 
{
    $x=mysqli_fetch_assoc($res);
if ($x['password']===$pass) 
{
   echo "You have successfully logged in"; 
}
else
{
    header("Location: Login System.php");
}
    
}
else 
{
 header("Location: Login System.php");
}

}
}
?>