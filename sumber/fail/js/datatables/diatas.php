<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Test1</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php
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
