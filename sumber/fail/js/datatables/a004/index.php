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
		if ($value['type'] != 'dir'):
			echo "\n\t" . pautan($value['name'],$value['name']);
		else:echo '';endif;
	endforeach;
}
#-------------------------------------------------------------------------------------------------------------
#############################################################################################################
include '../atas-set.php';
include '../diatas.php';
?>
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
<?php include '../dibawah.php'; ?>

</body>
</html>