<?php

    //$conn = mysqli_connect('localhost','root','','mkulima');

?>


<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("mysql://b753399c036d6f:060e81ef@us-cdbr-east-06.cleardb.net/heroku_b360958911e0168?reconnect=true"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>

