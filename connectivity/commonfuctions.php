<?php
/**
 * Created by PhpStorm.
 * User: Rushabh
 * Date: 10/11/2014
 * Time: 2:57 AM
 */


function sqlConnect()
{
    $hostname='127.0.0.1:3306';
    $dbname='gfg';
    $username='root';
    $password='root';

    $con = mysqli_connect($hostname, $username, $password,$dbname) or DIE('Connection failed');

return $con;

}




?>