<?php
$pass="password";
$pass=password_hash($pass,PASSWORD_BCRYPT);

echo $pass;
if (password_verify('password',$pass)) 
{
    echo "<br>";
    echo "Correct";
}

?>