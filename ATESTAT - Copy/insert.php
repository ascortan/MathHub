<?php
$servername = "localhost";
$username = "AScortan";
$password = "Srbija,srce moje";
$dbname = "AScortan";
$conn = new mysqli($servername, $username, $password, $dbname);
$CNP=$_POST['CNP'];
$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$localitate=$_POST['localitate'];
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql="insert into PERSOANA_2 (nume,prenume,CNP,localitate) values('$nume','$prenume','$CNP','$localitate')";
$result = $conn->query($sql);
if ($result == TRUE)
{
    echo "Succes!";
}
else
{
    echo $conn->error;
}
$conn->close();
?>