<?php
$servername = "localhost";
$username = "AScortan";
$password = "Srbija,srce moje";
$dbname = "AScortan";

$conn = new mysqli($servername, $username, $password, $dbname);

$ID=$_POST['ID'];
$cod_cursa=$_POST['cod_cursa'];
$nume_client=$_POST['nume_client'];
$nr_locuri_rezervate=$_POST['nr_locuri_rezervate'];

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql="CREATE TABLE IF NOT EXISTS `REZERVARE` (`ID` VARCHAR(30) NOT NULL,`cod_cursa` VARCHAR(30) NOT NULL,`nume_client` VARCHAR(30) NOT NULL,`nr_locuri_rezervate` VARCHAR(30) NOT NULL,PRIMARY KEY (`ID`))";
$result = $conn->query($sql);

if ($result == TRUE)
{   echo "CREAT!";
}
else
{
    echo $conn->error;
}

$sql="insert into REZERVARE (ID,cod_cursa,nume_client,nr_locuri_rezervate) values('$ID','$cod_cursa','$nume_client','$nr_locuri_rezervate')";
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