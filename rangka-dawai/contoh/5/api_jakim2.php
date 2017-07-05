<?php
$map_url = 'http://www2.e-solat.gov.my/xml/today/index.php?zon=JHR04';
if (($response_xml_data = file_get_contents($map_url))===false)
{
	echo "Error fetching XML\n";
} 
else 
{
	libxml_use_internal_errors(true);
	$data = simplexml_load_string($response_xml_data);
	if (!$data) 
	{
		echo "Error loading XML\n";
		foreach(libxml_get_errors() as $error) 
		{
			echo "\t", $error->message;
		}
	}
	else
	{
		echo '<pre>$data:->';
		print_r($data);
		echo '</pre>';
	}
}
?>