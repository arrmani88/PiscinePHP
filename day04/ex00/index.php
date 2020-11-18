<?php
session_start();
if ($_GET["submit"] == 'OK')
{
    $_SESSION['username'] = $_GET["login"];
    $_SESSION['password'] = $_GET["passwd"];
}
?>
<html><body>
<form action="index.php" method="get">
    Username: <input type="text" name="login" value="<?= $_SESSION['username']?>" />
    <br />
    Password: <input type="password" name="passwd" value="<?= $_SESSION['password']?>" />
    <input type="submit" name="submit" value="OK">
</form>
</body></html>
