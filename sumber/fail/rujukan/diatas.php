<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content=""><?php
$failIni = basename($_SERVER['PHP_SELF']);
$namaFail = explode('-', $failIni);
echo "\n<title>" . $namaFail[0] . "</title>";
if (isset($urlcss))
{
	foreach ($urlcss as $css)
	{
		echo "\n";
		?><link rel="stylesheet" type="text/css" href="<?php echo $css ?>"><?php
	}
}
echo "\n"; ?>
</head>
<body>
