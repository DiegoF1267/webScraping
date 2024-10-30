<?php

include('simple_html_dom.php');

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.puntoticket.com/todos');
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);
//echo $result;

$domResult = new simple_html_dom();
$domResult->load($result);

foreach($domResult->find('h3 tittle=') as $link)
echo '<h1>' . $link->plaintext . ' </h1><br>';

?>