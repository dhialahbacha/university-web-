<?
  $uname=$_POST['T1'];
  $password=$_POST['T2'];

mysql_connect("localhost","root","");
mysql_select_db("issat");

    $sql="select * from admin where cin='$uname' and mp='$password' and role='boss'" or die ("1") ;
    
    $result=mysql_query($sql)or die ("2");
    
    if(mysql_num_rows($result)!=0)
    { header("location:../madmin/adminacc.html");}
    else
    {echo ('vous etes non autaurisés');} 
    ?>