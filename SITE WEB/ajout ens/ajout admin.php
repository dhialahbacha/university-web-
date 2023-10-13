<?

$a=$_POST['T1'];
$b=$_POST['T2'];
$c=$_POST['T3'];
$d=$_POST['T4'];
$e=$_POST['T5'];
$f=$_POST['T6'];
mysql_connect("localhost","root","");
mysql_select_db("issat");
 
$s="select * from prof where (cin='$b')";

$r=mysql_query($s);
$w=mysql_num_rows($r);


if ($w==!0)
{echo ('cet admin est déja crée');}
else
{
$s="insert into prof values('$a','$b','$c','$d','$e','$f')";
$r=mysql_query($s);
header("Location: ../affiche%20Lens/fetch.php");
exit();
}
?>