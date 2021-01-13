<?php  
/* 
source-code : 	https://github.com/codesyariah122/Learn-WebDev/blob/master/updateCovid19_Indonesia/readme.md
author  : Puji Eramnto
update : aug-2020
Semoga lekas sembuh semuanya
*/
function curl($url){
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($curl);

	curl_close($curl);

	return json_decode($result, 1);
}
?>