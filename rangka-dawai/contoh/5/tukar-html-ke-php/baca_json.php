<?php

# https://www.codeproject.com/Tips/1074174/Simple-Way-to-Convert-HTML-Table-Data-into-PHP-Arr
$setahun = 'http://www.e-solat.gov.my/web/waktusolat.php?zone=JHR04&state=JOHOR&year=2017&jenis=year&bulan=08&LG=BM';
//$htmlContent = file_get_contents("http://teskusman.esy.es/index.html");
$htmlContent = file_get_contents($setahun);

$DOM = new DOMDocument();
@$DOM->loadHTML($htmlContent);

//$Header = $DOM->getElementsByTagName('td');
//$Detail = $DOM->getElementsByTagName('td');
$Detail = $DOM->getElementsByTagName('font');

# Get row data/detail table without header name as key
$senaraiKey = array(0,1,2,3,4,5,6,7,8,9,10,11,12);
$senaraiTajuk = array('Tarikh','Hari','Imsak','Subuh','Syuruk','Zohor','Asar','Maghrib','Isyak');
$buangData = array('Januari','Februari','Mac',
'April','Mei','Jun',
'Julai','Ogos','September',
'Oktober', 'November', 'Disember',
'Disember 2017','Januari 2019');
$i = $j = 0;

foreach($Detail as $kunci => $sNodeDetail) 
{
	if ( in_array($kunci,$senaraiKey) ):
		$tajuk[] = trim(
			preg_replace('/\s\s+/', ' ', 
			$sNodeDetail->textContent));
	else:
		//echo '<hr>' . $j . '['	. $i++ . ']='
		//. trim($sNodeDetail->textContent);
		if ( !in_array(trim($sNodeDetail->textContent),$buangData) )
			$dataJadual[$j][$senaraiTajuk[$i++]] = trim($sNodeDetail->textContent);
		$i = ($i == 9) ? 0 : $i++;
		@$j = $i % count($senaraiTajuk) == 0 ? $j + 1 : $j;
	endif;
}
echo '<pre>tajuk->';print_r($tajuk);
echo '<hr>data->';print_r($dataJadual);

//echo '<pre>tajuk->' . json_encode($tajuk);
//echo '<hr>data->' . json_encode($dataJadual);
