<?php
#-------------------------------------------------------------------------------------------------------------
function getFileList($dir)
{
	# array to hold return value
	$retval = [];
	# add trailing slash if missing
	if(substr($dir, -1) != "/") { $dir .= "/"; }
	# open pointer to directory and read list of files
	$d = @dir($dir) or die("getFileList: Failed opening directory {$dir} for reading");
	while(FALSE !== ($entry = $d->read()))
	{
		# skip hidden files
		if($entry{0} == ".") continue;
		if(is_dir("{$dir}{$entry}"))
		{
			$retval[] = [
			'name' => "{$dir}{$entry}/",
			'type' => filetype("{$dir}{$entry}"),
			'size' => 0,
			'lastmod' => filemtime("{$dir}{$entry}")
			];
		}
		elseif(is_readable("{$dir}{$entry}"))
		{
			$retval[] = [
			'name' => "{$dir}{$entry}",
			'type' => mime_content_type("{$dir}{$entry}"),
			'size' => filesize("{$dir}{$entry}"),
			'lastmod' => filemtime("{$dir}{$entry}")
			];
		}
	}

	$d->close();
	return $retval;
}
#-------------------------------------------------------------------------------------------------------------
function pautan($name,$web)
{
	return '<i class="far fa-folder fa-spin"></i>'
	. '<a target="_blank" href="' . $web . '">'
	. $name . '</a><hr>';
}
#-------------------------------------------------------------------------------------------------------------
function list_files()
{
	$dirlist = getFileList("./");
	//echo "<pre>",print_r($dirlist),"</pre>";
	//echo '<tr><td> name</td><td> type</td><td> size</td><td> lastmod</td></tr>';
	foreach($dirlist as $key02 => $value):
		if ($value['type'] == 'dir'):
			echo "\n\t" . pautan($value['name'],$value['name']);
		else:echo '';endif;
	endforeach;
}
#-------------------------------------------------------------------------------------------------------------
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Contoh Latihan Programming</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<style type="text/css">
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td { vertical-align:bottom; }
table.excel tbody td
{
	padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;
}
</style>
</head>
<body>
<!-- menu tengah atas -->
<div class="container">
<hr><h1>Contoh Latihan Programming</h1><hr>
<div class="hero-unit">
	<?php list_files(); ?>
	
	<a class="btn btn-primary btn-large" href="#">Pergi Lebih Jauh<i class="fa fa-binoculars fa-2x"></i></a>
	<a class="btn btn-success btn-large" href="#">Success</i></a>
	<a class="btn btn-warning btn-large" href="#">Warning</a>
	<a class="btn btn-info btn-large" href="#">Info</a>

</div><!-- / class="hero-unit" -->
</div><!-- / class="container" -->

<!-- menu tengah bawah -->
<!-- Footer
================================================== -->
<!-- footer class="footer">
	<div class="container">
		<span class="label label-info">
		&copy; Hak Cipta Terperihara 2019. Theme Asal Bootstrap Twitter</span>
	</div>
</footer -->

<!-- khas untuk jquery dan js2 lain
================================================== -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>
