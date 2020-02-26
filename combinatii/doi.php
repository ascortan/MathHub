<html>
<head>
   <title>Afisare Oferta</title>
</head>
<body bgcolor="white">
<?php
$servername = "192.168.0.4";
$username = "ABraescu";
$password = "";
$dbname = "ABraescu";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT REZERVARE.ID, REZERVARE.cod_cursa, REZERVARE.nume_client, REZERVARE.nr_locuri_rezervate FROM REZERVARE;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "	ID: " . $row["ID"]. " - cod_cursa: " . $row["cod_cursa"]. " " . " - nume_client: ". $row["nume_client"]." ". "-nr_locuri_rezervate:".$row["nr_locuri_rezervate"]."<br>";
    }
} else {
echo "0 results";
}
mysqli_close($conn);
?>
</body>
</html>