<?php 

// URL de la API y datos para enviar en la solicitud POST
$url = 'https://emtorch.com/ondaily/notify/send';
$data = array(
        'client_key' => 'oCb6eTQBwbBWkt9D39nXS3yaNgh5JwYiBOkgbMyP3LzTl',
        // 'identifiers' => ['luisPerez'],
        'categories' => ['conductores'],
        'title_notify' => 'Título de la notificación',
        'message_notify' => 'Mensaje de la notificación',
        'icon_notify' => 'https://emtorch.com/static/images/ice-age-sid.jpg',
        'badge_notify' => 'https://emtorch.com/static/images/icon-main-notify.png',
        'image_notify' => 'https://emtorch.com/static/images/ice-age-la-edad-de-hielo-2.jpg',
        'redirect' => 'https://emtorch.com/',
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    'Content-Type: application/json'
);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Ejecutar la solicitud
$response = curl_exec($ch);

// Cerrar la conexión cURL
curl_close($ch);

// Mostrar la respuesta de la API
echo $response;