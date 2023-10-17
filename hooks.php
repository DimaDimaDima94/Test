<?php

function writeLogFile($string, $clear = false){
    $log_file_name = __DIR__."/message.txt";
    if($clear == false) {
		$now = date("Y-m-d H:i:s");
		file_put_contents($log_file_name, $now." ".print_r($string, true)."\r\n", FILE_APPEND);
    }
    else {
		file_put_contents($log_file_name, '');
        file_put_contents($log_file_name, $now." ".print_r($string, true)."\r\n", FILE_APPEND);
    }
}

$data = file_get_contents('php://input');
writeLogFile($data, true);


?>
