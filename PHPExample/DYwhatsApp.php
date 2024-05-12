<?php

if (isset($_POST['submit'])) {
    $name       = $_POST['name'];
    $nowa       = $_POST['nowa'];
    $note       = $_POST['note'];
    $layanan    = $_POST['layanan'];
    $no_otp     = '62895333398506'; // NOMOR YANG TERDAFTAR DI DYwhatsApp
    $key        = 'mfyVRInYGiJ8hdE6UiVfP4tT1xdF8u'; // API KEY DYwhatsApp
    $url        = 'https://wa.dipsy.id/api-DYwhatsApp';


    // Message yang mau di kirim

    $send =
        "*Sender form DYwhatsApp*\n\n" .
        "Pembelian : *$layanan*\n" .
        "Nama : *$name*\n" .
        "Catatan : *$note*\n\n" .
        "*Kontak Admin*\n" .
        "WhatsApp : *085156448099*\n\n" .
        "*TEST SENDER DYwhatsApp*\n" .
        "dywhatsap.com";


     // cURL DYwhatsApp

    $data = [
        'api_key'    => $key,
        'sender'     => $no_otp,
        'number'     => $nowa,
        'message'    => $send
    ];
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL             => "$url/send-message", // BISA DI GANTI DENGAN (send-message | send-media | send-button) TERGANTUNG KEBUTUHAN (SC INI HANYA MENDUKUNG send-message)
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_ENCODING        => '',
        CURLOPT_MAXREDIRS       => 10,
        CURLOPT_TIMEOUT         => 0,
        CURLOPT_FOLLOWLOCATION  => true,
        CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST   => 'POST',
        CURLOPT_POSTFIELDS      => json_encode($data),
        CURLOPT_HTTPHEADER      => array(
            'Content-Type: application/json'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    echo $response;
}