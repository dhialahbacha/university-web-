<?

$a=$_POST['T1'];
$b=$_POST['T2'];
$c=$_POST['T3'];
$d=$_POST['T4'];
$e=$_POST['T5'];
mysql_connect("localhost","root","");
mysql_select_db("issat");
 
$s="select * from madmin where (cin='$b')";

$r=mysql_query($s);
$w=mysql_num_rows($r);


if ($w==!0)
{echo ('cet admin existe');}
else
{
$s="insert into madmin values('$a','$b','$c','$d','$e','$e')";
$r=mysql_query($s);
header("Location: ../affiche%20Ladmin/fetch.php");
exit();
}
?>