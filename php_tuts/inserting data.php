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
        $sql="insert into demo(username,password) values('$user','$pass') ";
        
        $res=mysqli_query($conn,$sql);
        if($res)
        {
            echo "Successfully data inserted";
        }
        else 
        {
            echo "Something went worong";
        }
    }

  
}
?>