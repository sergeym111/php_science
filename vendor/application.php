<?php
session_start();
echo "Authorized";
echo '<pre>';
var_dump($_SESSION['user']);
echo '</pre>';
?>
<form>
    <a href="logout.php" class="logout">Выход</a>
</form>
