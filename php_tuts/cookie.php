<?php
setcookie('user','vivek',time()+600);
if($_COOKIE['user'])
{
    echo "welcome again";
}

?>