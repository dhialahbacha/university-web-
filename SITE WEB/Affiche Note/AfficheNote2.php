<html>
<head>
<link rel="stylesheet" href="ajout.css">
	<title>Afficher la note</title>
</head>

<body>
	<div class="container" style="width: 800px; margin-top: 100px;">
		<h3 align="center">Liste de notes</h3>
		<br>
		<div class="row">
             <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Matiere</th>
                <th>DS</th>
                <th>Examen</th>
                <th>Moyenne</th>
            </tr>
        </thead>
        <tbody>
        	<?php
                $cin=$_POST['cin'];
                mysql_connect("localhost","root","");
                    mysql_select_db("issat");
                  $query ="SELECT * FROM note WHERE cin='$cin'";
                  $sql = mysql_query($query)or die('d');
                  while($row = mysql_fetch_array($sql))
                  {

        	?>
            <tr>
                <td><?php echo $row["nom_matyer1"];?></td>
                <td><?php echo $row["Ds1"];?></td>
                <td><?php echo $row["examen1"];?></td>
                <td><?php
                        $x=($row["Ds1"]*30/100)+($row["examen1"]*70/100);
                         echo $x;?></td>
                </tr><tr>
                <td><?php echo $row["nom_matyer2"];?></td>
                <td><?php echo $row["Ds1"];?></td>
                <td><?php echo $row["examen2"];?></td>

                <td><?php $x=($row["Ds2"]*30/100)+($row["examen2"]*70/100);
                         echo $x;?></td>
                </tr><tr>
                <td><?php echo $row["nom_matyer3"];?></td>
                <td><?php echo $row["Ds1"];?></td>
                <td><?php echo $row["examen3"];?></td>
                <td><?php
                        $x=($row["Ds3"]*30/100)+($row["examen3"]*70/100);
                         echo $x;?></td>
                </tr><tr>
                <td><?php echo $row["nom_matyer4"];?></td>
                <td><?php echo $row["Ds4"];?></td>
                <td><?php echo $row["examen4"];?></td>
                <td><?php
                        $x=($row["Ds4"]*30/100)+($row["examen4"]*70/100);
                         echo $x;?></td>
                </tr><tr>
            </tr>
            <?php } ?>
            
        </tbody>
        
    </table>
                <a class='btn' href="AfficheNote1.html">Retour</a>
		</div>
	</div>
</body>
</html> 
</script>