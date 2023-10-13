<html>
<head>
<link rel="stylesheet" href="../Affiche Note/ajout.css">
	<title>Add Data</title>

</head>

<body>
	<div class="container" style="width: 800px; margin-top: 100px;">
		<h3 align="center">Liste des etudiants</h3>
		<br>
		<div class="row">
             <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>CIN</th>
                <th>nom </th>
                <th>email</th>
                <th>mot de passe</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                
            </tr>
        </thead>
        <tbody>
        	<?php

                mysql_connect("localhost","root","");
                    mysql_select_db("issat");
                  $query ="SELECT * FROM sign";
                  $sql = mysql_query($query)or die('d');
                  while($row = mysql_fetch_array($sql))
                  {

        	?>
            <tr>
                <td><?php echo $row["cin"];?></td>
                <td><?php echo $row["nom_pre"];?></td>
                <td><?php echo $row["Email"];?></td>
                <td><?php echo $row["mp"];?></td>
                <td><a href="edit.php?id=<?php echo $row['cin']; ?>" class="btn btn-info">EDIT</a></td>
              <td>  <a href="delete.php?id=<?php echo $row['cin'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">DELETE</a></td>
                 
            </tr>
            <?php } ?>
            
        </tbody>
        
    </table>

		</div>
	</div>
</body>
</html>
