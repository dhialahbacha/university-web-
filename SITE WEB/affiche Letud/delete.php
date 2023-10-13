<?php

mysql_connect("localhost","root","");
mysql_select_db("issat");
  $id = $_GET["id"];
  $result = mysql_query("DELETE FROM sign WHERE cin=$id");
  header("location:fetch.php");






?>