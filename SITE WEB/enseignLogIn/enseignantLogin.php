<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Affiche les base</title>
</head>

<body style="text-align: center">

<form method="POST" action="--WEBBOT-SELF--">


<?php 

mysql_connect("localhost","root","");
mysql_select_db("issat");


    
    $uname=$_POST['T1'];
    $password=$_POST['T2'];
    
    $sql="select * from prof where cin='$uname' and mdp='$password'" or die ("1") ;
    
    $result=mysql_query($sql)or die ("2");
    
    if(mysql_num_rows($result)!=0){?>

</html>

 	
</form>

</body><u><i><b><font size="6" face="Bahnschrift SemiBold">
    <p>a faire </p>

</html>
    <?}
    else{
        echo "<a href='enseignantLogin.html'>retour</a>";
        
}
?>