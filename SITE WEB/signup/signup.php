<?

$a=$_POST['T1'];
$b=$_POST['T2'];
$c=$_POST['T3'];
$d=$_POST['T4'];

mysql_connect("localhost","root","");
mysql_select_db("issat");
 
$s="select * from sign where (cin='$b')";

$r=mysql_query($s);
$w=mysql_num_rows($r);


if ($w!=0)
{echo ('vous avez dija faire linscription');}
else
{ header("location:../accueille/acceuil.html");}

$s="insert into sign values('$a','$b','$c','$d')";
$r=mysql_query($s);

$s="insert into log values('$b','$d')";
$r=mysql_query($s);
?>



