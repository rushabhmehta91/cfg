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
<div id="dailogbox" title="Design Request">
    Description: <input id="Description" visible="true" disable><br>
   Location: <input id="location" visible="true" disabled><br>
    Priority: <input id="priority" visible="true" disabled><br>
    category: <input id="category" visible="true" disabled><br>
    Deadline: <input id="deadline" visible="true" disabled><br>

    <input id="requestid" hidden="true" value="">
    </div>
<script>

        $( "#dailogbox" ).dialog({
            autoOpen: false,
            height: 300,
            width: 350,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                effect: "explode",
                duration: 1000
            }
        });
$(".opendailog").click(function(){
    $printingId=$(this).attr("#data-id");
    $description=$(this).attr("#data-desc");
    $catagory=$(this).attr("#data-cat");
    $location=$(this).attr("#data-loc");
    $priority=$(this).attr("#data-prio");
    $deadline=$(this).attr("#data-dead");


    $("#dailogbox").data("Description",$description, ,$catagory,"location",$location,"priority",$priority,"deadline", $deadline).dialog( "open" );

});

</script>