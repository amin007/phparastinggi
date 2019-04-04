<?php
#############################################################################################################
include '../atas-set.php';
include '../diatas.php';
$tID = 'myTable';
$tClass = 'table table-striped table-bordered';
$tajuk = '<th>no</th><th>v2013</th><th>v2008</th><th>jawatan</th>';
echo "\n" . '<table id="' . $tID . '" class="' . $tClass . '" style="width:100%">'
. "\n<thead><tr>$tajuk</tr></thead><tfoot><tr>$tajuk</tr></tfoot>\n"
. "</table>\n";
include '../dibawah.php';
#############################################################################################################
?>
<script type="text/javascript">
$(document).ready(function() {
$('#myTable').DataTable( {
	/*"processing": true,
	"serverSide": true,
	"ajax": "../server_side/scripts/server_processing.php"*/
	"ajax": "../../../../../cari/mascojson"
	/*"ajax": "mascojson.php"*/
});
});
</script>
</body>
</html>