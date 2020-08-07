<?php
$x=[[1,2],[3,4],['vivek']];
for ($i=0; $i<=sizeof($x);$i++) 
{ 
   for ($j=0; $j<=2 ;$j++) 
   { 
       echo $x[$i][$j];
   }
   echo "<br>";
}

?>