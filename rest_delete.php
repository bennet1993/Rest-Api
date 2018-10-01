<?php

$authtoken="*****";

curl_delete();

function curl_delete()
{

	$url = "https://creator.zoho.com/api/aorborctechnologiescpt/json/quotes-bennet/form/Customer_Info/record/delete";

	
	$post_fields = array();
	$post_fields['authtoken'] = "*****";
	$post_fields['scope'] = "creatorapi";
	$post_fields['criteria'] = "(ID == 3696069000000053299)";

	$ch = curl_init($url);

	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);

	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;

}

?>