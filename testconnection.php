<?php
/**
 * Created by PhpStorm.
 * User: Rushabh
 * Date: 10/11/2014
 * Time: 2:59 AM
 */
include('C:\Users\Rushabh\PhpstormProjects\cfg\connectivity\commonfuctions.php');
$mysql=sqlConnect();
$query="select id from gfg.state";
$result=mysqli_query($mysql,$query) or die("error");
$resultsql=mysqli_fetch_array($result);
echo $resultsql[0];
//phpinfo();
//echo "hello";
?>