<?php
$setahun = 'http://www.e-solat.gov.my/web/waktusolat.php?zone=JHR04&state=JOHOR&year=2017&jenis=year&bulan=08&LG=BM';
//$htmlContent = file_get_contents("http://teskusman.esy.es/index.html");
$htmlContent = file_get_contents($setahun);
		
$DOM = new DOMDocument();
@$DOM->loadHTML($htmlContent);
	
$Header = $DOM->getElementsByTagName('th');
//$Detail = $DOM->getElementsByTagName('td');
$Detail = $DOM->getElementsByTagName('font');

/*#Get header name of the table
foreach($Header as $NodeHeader) 
{
	$aDataTableHeaderHTML[] = trim($NodeHeader->textContent);
}//echo '<pre>';print_r($aDataTableHeaderHTML);//*/

//#Get row data/detail table without header name as key
$i = $j = 0;
foreach($Detail as $sNodeDetail) 
{
	$aDataTableDetailHTML[$j][] = trim($sNodeDetail->textContent);
	$i = $i + 1;
	@$j = $i % count($aDataTableHeaderHTML) == 0 ? $j + 1 : $j;
}echo '<pre>'; print_r($aDataTableDetailHTML);

/*#Get row data/detail table with header name as key and outer array index as row number
for($i = 0; $i < count($aDataTableDetailHTML); $i++)
{
	for($j = 0; $j < count($aDataTableHeaderHTML); $j++)
	{
		$aTempData[$i][$aDataTableHeaderHTML[$j]] = $aDataTableDetailHTML[$i][$j];
	}
}
$aDataTableDetailHTML = $aTempData; unset($aTempData);

echo '<pre>'; print_r($aDataTableDetailHTML);
//*/
