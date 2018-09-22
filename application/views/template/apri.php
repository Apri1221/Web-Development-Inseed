<?php

// $address = urlencode($_POST['address']);

function getPersentase($iniaddress, $ekspUntung){
	$address = str_replace(' ', '_', $iniaddress);
	$request = file_get_contents("https://geocoder.api.here.com/6.2/geocode.json?app_id=OneotH8KDVpzsQ6idOYO&app_code=8ZhEYCtmaZONREaoBANv7Q&searchtext=" . $address);
	$json = json_decode($request, true);
	$lat = $json['Response']['View'][0]['Result'][0]['Location']['DisplayPosition']['Latitude'];
	$long = $json['Response']['View'][0]['Result'][0]['Location']['DisplayPosition']['Longitude'];

	$api_url = "https://api.darksky.net/forecast/f3fd12f78f6bd803626ae2435333f902/$lat,$long";

	$forecast = json_decode(file_get_contents($api_url));

	$suhuSekarang =round(($forecast->currently->temperature-32)*.5556);
	$windSpeedSekarang = $forecast->currently->windSpeed;
	$humiditySekarang = $forecast->currently->humidity*100;

	$i = 1;
	foreach ($forecast->daily->data as $hari) {
		$rataSuhu = (round($hari->temperatureHigh)+round($hari->temperatureLow))/2;
		$i++;
	}
	$prediksiRerataSuhu = round($rataSuhu/$i);

	$a = 0;
	$b = 0;
	$c = 0;

	if ($suhuSekarang >= $prediksiRerataSuhu) {
		$a = 0.1; //bobot utk a
	} else if($suhuSekarang < $prediksiRerataSuhu) {
		$a = 0.05;
	}

	if($humiditySekarang > 70 && $humiditySekarang < 80){ //normal
		$b = 0.2; //bobot utk b
	}
	elseif ($humiditySekarang > 55 && $humiditySekarang < 70){ //lembab
		$b = 0.11;
	}
	elseif($humiditySekarang > 80 && $humiditySekarang <90){ //kering
		$b = 0.1;
	}

	if($prediksiRerataSuhu > 29 && $prediksiRerataSuhu < 33){ //suhu normal
		$c = 0.2;
	} else { //ekstrem
		$c = 0.05;
	}
	

	echo ($a+$b+$c)*$ekspUntung + $ekspUntung;

}

?>