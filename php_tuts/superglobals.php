<?php
$x=100;
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_GET['name'];
echo "<br>";
function world()
{
    echo $GLOBALS['x'];
}
world();



?>