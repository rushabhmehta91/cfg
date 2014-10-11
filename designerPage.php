<?php
/**
 * Created by PhpStorm.
 * User: Rushabh
 * Date: 10/11/2014
 * Time: 4:55 AM
 */
include('ajax/get3dDesignQueue.php');
$html=table();

?>
<link rel="stylesheet" href="./js/DataTables-1.10.3/media/css/jquery.dataTables.min.css" type="text/css">
<script src="./js/DataTables-1.10.3/media/js/jquery.dataTables.min.js"></script>
<script src="./js/jquery-2.1.1.min.js"></script>
<script src="./js/jquery-ui-1.11.1.custom/jquery-ui.js"></script>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <h2>Design Volunteers</h2>
</head>
<body>
<div id="abc">
    <?php echo $html['success']; ?>
    </div>
</body>
</html>
<div id="dailog" title="Basic dialog">
    <input id="requestid" visible="false" value="">
    <input id="location" visible="true" >
    <input id="priority" visible="true" >
    <input id="deadline" visible="true" >
    <input id="Description" visible="true" >
    </div>
