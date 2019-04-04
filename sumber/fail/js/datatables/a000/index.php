<?php
#############################################################################################################
include '../atas-set.php';
include '../diatas.php';
$tableID = 'myTable';
//$tableClass = 'display';
$tableClass = 'table';
include 'jadual.php';
include '../dibawah.php';
#############################################################################################################
?>
<script type="text/javascript">
$(document).ready( function ()
{
	$('#myTable').DataTable();
});
</script>
</body>
</html>