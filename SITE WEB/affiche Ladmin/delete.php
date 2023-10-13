<?php

mysql_connect("localhost","root","");
mysql_select_db("issat");
  $id = $_GET["cin"];
  $result = mysql_query("DELETE FROM madmin WHERE cin=$id");
  header("location:fetch.php");






?>