<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="$POST.php" method="POST">
<input type="text" placeholder ="Username" name="User">
<br>
<br>
<input type="password" placeholder="Password" name="Password">
<br>
<br>
<input type="submit" value="Submit" name="Submit">
</form>

</body>
</html>


<?php
if (isset($_POST['Submit'])) 
{
echo $_POST['User'];
echo $_POST['Password'];
}
?>