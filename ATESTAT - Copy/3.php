<html>
<head>
</head>
<body>
<h1>Introducere n valori</h1>
<form action=" " method="post">
Introdu numere separate prin spatiu:<br>
<input type="text" name="sir_nr" value=" " maxlenght="100"><br>
<input type="submit" value="Trimite"><br>
</form>
<?php
	if(isset($_POST['sir_nr']))
		{$sir=$_POST['sir_nr'];
			echo "Sirul de numere: ".$sir."<br>";
		$a=explode(" ",$sir);
		$n=count($a);
		$s=0;
	for($i=0;$i<$n;$i++)
		$s=$s+$a[$i];
			echo "suma nr= " .$s;
		}
?>
</body>
</html>