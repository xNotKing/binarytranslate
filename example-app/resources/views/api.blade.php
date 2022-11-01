<?php 
header("Access-Control-Allow-Origin: *");
if (isset($_GET["text"])) {
	$str = $_GET["text"];
	$bytes = 0;
	$say = "Bytes: ";
	$string = str_split($str);
	echo "Binario: <br>";
	if ($_GET["format"] = "off") {
		foreach($string as $filter) {
			printf("%08d", decbin(ord($string[$bytes])));
			echo "<br>";
			++$bytes;
		}
	} else {
		foreach($string as $filter) {
			printf("%08d", decbin(ord($string[$bytes])));
			echo " ";
			++$bytes;
		}
	}
	if ($bytes > 999) {
		$say = "Kilobytes: ";
	}
	if ($bytes > 999999) {
		$say = "Megabytes: ";
	}
	echo "<br>{$say}".$bytes;
} else {
	header("Location: /");
}
?>