<?php
mysql_connect("localhost","root","");
mysql_select_db("issat");
// including the database connection file

 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $name=$_POST['name'];
	$lastname=$_POST['lastname'];
    $email=$_POST['email'];
	$grade=$_POST['grade'];
    $mdp=$_POST['mdp'];    
    
    
	$result = mysql_query( "UPDATE prof SET nom='$name',prenom='$lastname',email='$email',grade='$grade',mdp='$mdp' WHERE cin=$id");

       
        
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
$result = mysql_query("SELECT * FROM prof WHERE cin='$id'")or die('f');
 
while($row = mysql_fetch_array($result))
{
	$id=$row['cin'];
    $name=$row['nom'];
	$lastname=$row['prenom'];
    $email=$row['email'];
	$grade=$row['grade'];
    $mdp=$row['mdp'];
}
?>
<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container" style="width: 800px; margin-top: 100px;">
		<div class="row">
    <h3>modifier l'enseignant</h3>
    <hr>
			<div class="col-sm-6"> 
	
	<form action="" method="post" name="form1">
		<div class="form-group">
				
				<input type="hidden" name="id" class="form-control" value="<?php echo $id;?>">
			
		</div>
		<div class="form-group">
				<label>nom</label>
				<input type="text" name="name" class="form-control" value="<?php echo $name;?>">
		</div>
		<div class="form-group">
				<label>prenom</label>
				<input type="text" name="lastname" class="form-control" value="<?php echo $lastname;?>">
		</div>
			   <div class="form-group">
				<label>email</label>
				<input type="text" name="email" class="form-control" value=" <?php echo $email; ?>">
			</div>
			<div class="form-group">
				<label>Grade</label>
				<input type="text" name="grade" class="form-control" value="<?php echo $grade;?>">
			  </div>
			 <div class="form-group">
				<label>mot de passe</label>
				<input type="text" name="mdp" class="form-control" value="<?php echo $mdp;?>">
			  </div>
				<div class="form-group">
				<input type="submit" value="Update" class="btn btn-primary btn-block" name="update">
			
		
	</form>

</div>
</div>
</div>
</body>
</html>

