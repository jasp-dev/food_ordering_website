<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://developers.zomato.com/api/v2.1/categories");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "user-key: YOUR_API_KEY" ,
  "Accept-Language: en_US"
));
$data = curl_exec($ch);
$curl_error = curl_errno($ch);
$getserver= curl_getinfo($ch);
   
$json = json_decode($data, true);
curl_close($ch);
var_dump($data );

?>

<hr/>
<hr/>
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://developers.zomato.com/api/v2.1/locations?query=LUDHIANA");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "user-key: YOUR_API_KEY" ,
  "Accept-Language: en_US"
));
$data = curl_exec($ch);
$curl_error = curl_errno($ch);
$getserver= curl_getinfo($ch);
   
$json = json_decode($data, true);
curl_close($ch);
var_dump($data );

?>
