<html>
<body>
<form action="insert.php" method="post">
CNP<input type="text" name="CNP"><br>
nume<input type="text" name="nume"><br>
prenume<input type="text" name="prenume"><br>
localitate<input type="text" name="localitate"><br>
<input type="submit" name="submit">
</form>
<?php
echo $_POST["CNP"];
echo $_POST["nume"];
echo $_POST["prenume"];
echo $_POST["localitate"];
?>
