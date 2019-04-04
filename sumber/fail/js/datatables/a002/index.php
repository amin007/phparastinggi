<?php
#############################################################################################################
include '../atas-set.php';
include '../diatas.php';
$tableID = 'myTable';
$tableClass = 'table table-striped table-bordered';
echo "\n" . '<table id="' . $tableID . '" class="' . $tableClass . '" style="width:100%">'
. "\n<thead><tr>
	<th>Name</th><th>Position</th><th>Office</th><th>Extn.</th><th>Start date</th><th>Salary</th>
</tr></thead>
<tfoot><tr>
	<th>Name</th><th>Position</th><th>Office</th><th>Extn.</th><th>Start date</th><th>Salary</th>
</tr></tfoot>\n"
. '</table>' . "\n";
include '../dibawah.php';
#############################################################################################################
?>
<script type="text/javascript">
$(document).ready(function() {
    $('#myTable').DataTable( {
        "ajax": 'tatasusunan.txt'
    } );
} );</script>
</body>
</html>