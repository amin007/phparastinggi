<?php
$setahun = 'http://www.e-solat.gov.my/web/waktusolat.php?zone=JHR04&state=JOHOR&year=2017&jenis=year&bulan=08&LG=BM';
$file = file_get_contents($setahun);
//echo '<pre>'; //print_r($file);
//*/

$pecahbelah = explode('</tr', $file); 
//echo '<pre>'; print_r($pecah);
//$senaraiKey = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19);
$senaraiKey = array(0,1,2,3,4,5,6,7,8,9,10,42,43,44,45,46,47,48,49);
foreach($pecahbelah as $key =>  $data)
{
	if ( in_array($key,$senaraiKey) )
		echo '';
	else
	{	//echo '<hr>$key => ' . $key . ' | ' . $data;
		//$datakecil[$key][] = explode('</td', $data); 
		$datakecil[$key][] = explode('</font', $data); 
	}	
}

echo '<pre>'; print_r($datakecil);

/*
libxml_use_internal_errors(true);
$doc = new DOMDocument;
$doc->loadHTML($file); // print_r($doc);
$xpath = new DOMXpath($doc); print_r($xpath);

/*
// A name attribute on a <td>
// $xpath->query( '//td')->item(0);
$values = $xpath->query('//td');

//*/

