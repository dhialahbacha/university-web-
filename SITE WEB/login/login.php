<?

$a=$_POST['T1'];
$b=$_POST['T2'];
mysql_connect("localhost","root","");
mysql_select_db("issat");
 
$s="select cin,mp from log where (cin='$a') and (mp='$b')";

$r=mysql_query($s);
$w=mysql_num_rows($r);



if ($w!=0)
{ header("location:../accueille/acceuil.html");}
else
{
echo('you dont have a acount');
}
?>