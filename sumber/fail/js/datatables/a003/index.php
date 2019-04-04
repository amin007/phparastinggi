<?php
#############################################################################################################
include '../atas-set.php';
include '../diatas.php';
$tableID = 'myTable';
$tableClass = 'table table-striped table-bordered';
$tajuk = '<th>#</th><th>s</th><th>msic</th><th>keterangan</th><th>msic2000</th><th>notakaki</th>';
echo "\n" . '<table id="' . $tableID . '" class="' . $tableClass . '" style="width:100%">'
. "\n<thead><tr>$tajuk</tr></thead><tfoot><tr>$tajuk</tr></tfoot>\n"
. "</table>\n";
include '../dibawah.php';
#############################################################################################################
?>
<script type="text/javascript">
$(document).ready(function(){
///////////////////////////////////////////////////////////
/*$('#myTable').DataTable({
	/*"processing": true,
	"serverSide": true,
	"ajax": "../server_side/scripts/server_processing.php"
	"ajax": "../../../../../cari/msicjson"
});*/
/////////////////////////////////////////////////////////////
	var t = $('#myTable').DataTable({
	"ajax": "../../../../../cari/msicjson",
	"columnDefs": [{
		"searchable": false,
		"orderable": false,
		"targets": 0
	}],
	"order": [[ 1, 'asc' ]]
    });

	t.on( 'order.dt search.dt', function (){
		t.column(0, {search:'applied', order:'applied'}).nodes().
		each( function (cell, i) {cell.innerHTML = i+1;});
    }).draw();
/////////////////////////////////////////////////////////////
});
</script>
</body>
</html><?php
	/*"columns": [
		{ "data": "bil" },
		{ "data": "s" },
		{ "data": "msic" },
		{ "data": "keterangan" },
		{ "data": "msic2000" },
		{ "data": "notakaki" }
	]*/
