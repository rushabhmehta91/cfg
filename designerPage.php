<?php
/**
 * Created by PhpStorm.
 * User: Rushabh
 * Date: 10/11/2014
 * Time: 4:55 AM
 */
?>
<div>
<table id="designEngineers" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>

</table>
    </div>
<script>

    $(document).ready(){
        $("#designEngineers").dataTable({
            "ajax": "ajax/objects.txt",
            "columns": [
                { "data": "name" },
                { "data": "position" },
                { "data": "office" },
                { "data": "extn" },
                { "data": "start_date" },
                { "data": "salary" }
            ]
        });
    }
    </script>