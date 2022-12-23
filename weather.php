
<?php

$api_key='NeedAKey';
$url = 'http://dataservice.accuweather.com/forecasts/v1/daily/1day/339508?apikey='.$api_key;
$ch = curl_init();
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = json_decode( curl_exec($ch),true); 
//print_r($result);
echo '<br>';
echo '<b>Weather condition  </b>'.$result['Headline']['Text'].'<br>';
echo '<b>Min  </b>'.$result['DailyForecasts'][0]['Temperature']['Minimum']['Value'].'<br>';
echo '<b>Max  </b>'.$result['DailyForecasts'][0]['Temperature']['Maximum']['Value'].'<br>';
?>
<hr>

<?php

$api_key='NeedAkey';
$url = 'http://dataservice.accuweather.com/forecasts/v1/hourly/1hour/339508?apikey='.$api_key;
$ch = curl_init();
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = json_decode( curl_exec($ch),true); 
//var_dump($result);
echo '<br>';
echo '<b>Weather condition  </b>'.$result[0]['IconPhrase'].'<br>';
echo '<b>Date  </b>'.$result[0]['DateTime'].'<br>';
echo '<b>Temperature  </b>'.'Current '.$result[0]['Temperature']['Value'].'<br>';
?>