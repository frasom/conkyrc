<?php

$datei = "/tmp/wetter.json";

if (file_exists($datei)) {
    $json = file_get_contents($datei);
    $data = json_decode($json,true);

	if ($argv[1] == "temp") {
	  echo number_format($data['main']['temp'], 1, ',', '.');
	}
	if ($argv[1] == "pressure") {
	  echo number_format($data['main']['pressure'], 0, ',', '.');
	}
	if ($argv[1] == "wind") {
	  echo $data['wind']['deg'];
	  echo "° ";
	  echo $data['wind']['speed'];
	}
	if ($argv[1] == "humidity") {
	  echo $data['main']['humidity'];
	}

	if ($argv[1] == "visibility") {
	  echo number_format($data['visibility'], 0, ',', '.');
	}

	if ($argv[1] == "max") {
	  echo $data['main']['temp_min'];
	  echo " / ";
	   echo $data['main']['temp_max'];
	}

	if ($argv[1] == "text") {
	  echo $data['weather'][0]['description'];
	}

	if ($argv[1] == "ort") {
		echo $data['name'];
	  }
}
?>
