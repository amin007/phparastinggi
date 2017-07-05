<?php
$map_url = 'http://www2.e-solat.gov.my/xml/today/index.php?zon=JHR04';
$file = file_get_contents($map_url);
echo $file;