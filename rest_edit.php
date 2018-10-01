	<?php
	$authtoken="******";

	curl_edit();

	function curl_edit()
	{
	
		$url = "https://creator.zoho.com/api/aorborctechnologiescpt/json/quotes-bennet/form/Customer_Info/record/update";

		
		$post_fields = array();
		$post_fields['authtoken'] = "******";
		$post_fields['scope'] = "creatorapi";
		$post_fields['criteria'] = "Customer_ID == 567946";
		$post_fields['Customer_ID'] = "789456";
		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch,CURLOPT_POST,true);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);

		$response = curl_exec($ch);
		curl_close($ch);
		echo $response;

	}

	?>