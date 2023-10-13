<?php
mysql_connect("localhost","root","");
mysql_select_db("issat");
// including the database connection file

 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mp=$_POST['mp'];    
    
    
	$result = mysql_query( "UPDATE sign SET nom_pre='$name',Email='$email',mp='$mp' WHERE cin=$id");

       
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: fetch.php");
    
}
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("issat");
//error_reporting(0);
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM sign WHERE cin='$id'")or die('f');
 
while($row = mysql_fetch_array($result))
{
	$id=$row['cin'];
    $name=$row['nom_pre'];
    $email=$row['Email'];
    $mp=$row['mp'];
}
?>
<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="../Affiche Note/ajout.css">
</head>

<body>
	<div class="container" style="width: 800px; margin-top: 100px;">
		<div class="row">
    <h3>modifier l'utilisateur</h3>
    <hr>
			<div class="col-sm-6"> 
	
	<form action="" method="post" name="form1">
		<div class="form-group">
		       <label>CIN</label>
				<input type="text" name="id" class="form-control" value="<?php echo $id;?>">
			
		</div>
		<div class="form-group">
				<label>nom et prenom</label>
				<input type="text" name="name" class="form-control" value="<?php echo $name;?>">
			
		</div>
		
			   <div class="form-group">
				<label>email</label>
				<input type="text" name="email" class="form-control" value=" <?php echo $email; ?>">
			</div>
			 <div class="form-group">
				<label>mot de passe</label>
				<input type="text" name="mp" class="form-control" value="<?php echo $mp;?>">
			  </div>
				<div class="form-group">
				<input type="submit" value="Update" class="btn btn-primary btn-block" name="update">
			
		
	</form>

</div>
</div>
</div>
</body>
</html>

