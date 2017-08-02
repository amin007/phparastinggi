<?php

function array_to_xml($title, $array, &$xml_user_info) 
{
	# buat tajuk
	$xml_user_info->addChild('tajuk', $title);
	# buat pecahan tatausuanan
	foreach($array as $key => $value)
	{
		if(is_array($value)) 
		{
			if(!is_numeric($key))
			{
				$subnode = $xml_user_info->addChild("$key");
				array_to_xml('', $value, $subnode);
			}
			else
			{
				$subnode = $xml_user_info->addChild("item$key");
				array_to_xml('', $value, $subnode);
			}
		}
		else
		{
			$xml_user_info->addChild("$key",htmlspecialchars("$value"));
		}
	}
}
