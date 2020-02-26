<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
</head>
<body>
  <form action="" method="POST">  
<table style="width:50%">
  <tr>
    <td>Nume
    <td><input type="text" name="n">
  </tr>
  <tr>
    <td>Sex
    <td><input type="radio" name="ma" value="masculin">Masculin<br>
        <input type="radio" name="ma" value="feminin">Feminin<br>
  </tr>
  <tr>
    <td>Studii
    <td><select name="optiuni">
        <option>gimnaziale</option>
        <option>medii</option>
        <option>superioare</option>
        <option>universitare</option>
        </select>
  </tr>
  <tr>
    <td>CV
    <td><textarea rows="4" cols="50"></textarea>
  </tr>
  <tr>
    <td><input type="submit" value="Submit">
      <td><input type="reset" value="Sterge">
      </tr>
    </table>
</form>

<?php
echo "Ayy";
$nume=$_POST["n"];
echo $nume;
$sex=$_POST["ma"];
echo $sex;
$studii=$_POST["optiuni"];
echo $studii;
?>

</body>
</html>
