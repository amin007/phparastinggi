<?php
$map_url = 'http://www2.e-solat.gov.my/xml/today/index.php?zon=JHR04';

function get_xml_from_url($url)
{
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

	$xmlstr = curl_exec($ch);
	curl_close($ch);

	return $xmlstr;
}

$xmlstr = get_xml_from_url($map_url);
$xmlobj = new SimpleXMLElement($xmlstr);
$arrayXml = (array)$xmlobj;#optional
$json = json_encode($xmlobj);
//$array = json_decode($json,TRUE);

		echo '<pre>$data:->';
		print_r($arrayXml);
		echo '</pre>';
