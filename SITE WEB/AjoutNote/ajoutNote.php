<?

$CIN=$_POST['cin'];
$a=$_POST['T1'];
$DS1=$_POST['ds1'];
$EX1=$_POST['examen1'];

$b=$_POST['T2'];
$DS2=$_POST['ds2'];
$EX2=$_POST['examen2'];

$c=$_POST['T3'];
$DS3=$_POST['ds3'];
$EX3=$_POST['examen3'];

$d=$_POST['T4'];
$DS4=$_POST['ds4'];
$EX4=$_POST['examen4'];

mysql_connect("localhost","root","");
mysql_select_db("issat");

$s="insert into note values('$CIN','$a','$DS1','$EX1','$b','$DS2','$EX2','$c','$DS3','$EX3','$d','$DS4','$EX4')";
$r=mysql_query($s);

header("Location: ../Affiche Note/AfficheNote1.html");
exit();

?>

