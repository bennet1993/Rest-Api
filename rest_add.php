<?php
$authtoken="*****";

curl_add();


function curl_add()

{
	$url = "https://creator.zoho.com/api/aorborctechnologiescpt/json/quotes-bennet/form/Customer_Info/record/add/";

	$post_fields= array();
	$post_fields['authtoken']= "*****";
	$post_fields['scope']= "creatorapi";
	$post_fields['Customer_Name.first_name']="Dwayne";
	$post_fields['Customer_Name.last_name']="Johnson";
	$post_fields['Customer_ID']="567946";
	
	$ch = curl_init($url);

	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_POST,true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);

	$response=curl_exec($ch);
	curl_close($ch);
	echo $response;

}
?>











