<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Affiche les base</title>
</head>

<body style="text-align: center">

<form method="POST" action="--WEBBOT-SELF--">
<style>
body{
    background:#E2E2E2;
}
    .btn{
  background-color: #5995fd;
  border: none;
  outline: none;
  height: 49px;
  border-radius: 49px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;}
  .btn:hover {
  background-color: #4d84e2;
 
}

a:visited {
  color: white;
}
a{  
    text-decoration: none;
    color: white;
    font-style:normal;
    padding:15px;

    margin-bottom :20px;
}

font{font-size: 20px;}
</style>


<?php 

mysql_connect("localhost","root","");
mysql_select_db("issat");

if(isset($_POST['T1'])){
    
    $uname=$_POST['T1'];
    $password=$_POST['T2'];
    
    $sql="select * from admin where cin='$uname' and mp='$password' and role='boss'" or die ("1") ;
    
    $result=mysql_query($sql)or die ("2");
    
    if(mysql_num_rows($result)!=0){?>

<br><br>

<a  class="btn"href="../issatso/affiche%20base/admin.php"><font  face="Baskerville Old Face">Afficher 
la liste des demandes des etudiants</font></a><br><br><br>

<a  class="btn"href="../issatso/affiche%20Letud/fetch.php"><font face="Baskerville Old Face">Afficher 
la liste des etudiants</font></a><br><br><br>

<a   class="btn"href="../issatso/affiche%20Lens/fetch.php"><font face="Baskerville Old Face">Afficher 
la liste des enseignants</font></a><br><br><br>

<a   class="btn"href="../issatso/affiche%20Ladmin/fetch.php"><font face="Baskerville Old Face">Afficher 
la liste des admins</font></a><br><br><br>

<a   class="btn"href="../issatso/ajout%20admin/ajout%20admin.html">
<font face="Baskerville Old Face">Ajouter un 
admin
</font>
</a><br><br><br>

<a   class="btn"href="../issatso/ajout%20ens/ajout%20ens.html">
<font  face="Baskerville Old Face">Ajouter un 
enseignant
</font></a><br><br><br>
<a   class="btn"href="../AjoutNote/ajoutNote.html">
<font  face="Baskerville Old Face">Ajouter les notes
</font></a><br><br><br>



</html>

 	
</form>

</body><u><i><b><font size="6" face="Bahnschrift SemiBold">

</html>
    <?}
    else{?>



<body style="text-align: center">

<p align="center">
<font size="6" face="Bahnschrift SemiBold" color="#00FFFF">
<a href="../recherche/recherche.htm">Rechercher</a></font></p>

</body>

</html>
        
   <? }
        
    }
?>