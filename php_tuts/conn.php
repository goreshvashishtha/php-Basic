<?php
$dbservername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="test_db";
$conn=mysqli_connect($dbservername,$dbuser,$dbpassword,$dbname);
if ($conn) 
{
  $q="select * from demo";
  $res=mysqli_query($conn,$q);
  if (mysqli_num_rows($res)>0) 
  {
$x=(mysqli_fetch_assoc($res));
echo $x['username'].'has joined on'.$x['joining_date'];
  }
}
?>