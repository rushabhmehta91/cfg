
<?php
$hostname='localhost';
$dbname='gfg';
$username='root';
$password='root';

$con=mysqli_connect($hostname, $username, $password) or DIE('Connection failed');

mysqli_select_db($dbname,$con)or DIE('database not found');






?>
