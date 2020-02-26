
<HTML>
<HEAD>
</HEAD>
<BODY>
<FORM action=" " method="POST">
<h3>Introduceti numarul</h3>
<INPUT type="text" name="n">
<INPUT type="submit" value="Ok">
</FORM>
<?php
define(s,0);
$n=$_POST["n"];
while($n>0)
{$s=$s+$n%10;
$n=$n/10;
}
echo "Suma cifrelor este" .$s;
?>
</BODY>
</HTML>