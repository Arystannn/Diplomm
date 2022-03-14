<?php
	require $_SERVER['DOCUMENT_ROOT'].'/form/google-api-php-client/google-api-php-client/vendor/autoload.php'; // google-api-php-client path

    $client = new Google_Client();
    $client->setApplicationName('diplom');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
    $client->setAuthConfig('params.json');
    $client->setAccessType('offline');

    $service = new Google_Service_Sheets($client);
    $spreadsheetId = 'mNv6EnibRZZVMKAs0HmEnAM9gBUsQl0x-_T4SMds2MY';
    $range = 'Кабинеты!E2:E34';

    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $data = $response->getValues();
    echo json_encode($data);
    exit();
?>