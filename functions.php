<?php 

require __DIR__ . '/vendor/autoload.php';

if(isset($_POST['phone'])){
    //making a connection to the api
    $client = new \Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
    $client->setAuthConfig(__DIR__ . '/credentials.json');
    $client->setAccessType('offline');
    $service = new Google_Service_Sheets($client);
    $spreadsheetId = "1mZUvoG57fQd3R7-jKJv-DrVPDx2LFdM4tuqOt7K_x7Y";
    //making a connection to the api

    $phone = trim($_POST['phone']);
    $fullName= trim($_POST['fullname']);
    $address= trim($_POST['address']);
   


    //getting the last inserted row id
    $range = "Stroller!A1:D";
    $response = $service->spreadsheets_values->get($spreadsheetId,$range);
    $values = $response->getValues();
    if (empty($values)) {
        $inc = 1;
    } else {
        // $mask = "%10s %-10s %s\n";
        $id = end($values)[0];
        $inc = $id + 1;
    }



    $range = "Stroller!A1:D";
    $values = [
        [$inc, $fullName,  $phone, $address],
    ];

    $body = new Google_Service_Sheets_ValueRange([
        'values' => $values
    ]);

    $params = [
        'valueInputOption' => 'RAW'
    ];

    $insert = [
        "insertDataOption" => "INSERT_ROWS"
    ];

    $result = $service->spreadsheets_values->append(
        $spreadsheetId,
        $range,
        $body,
        $params,
        $insert
    );

    echo json_encode(['code'=>200, 'msg'=>"La demande a été enregistrée"]);
}


function showpixles(){
    //making a connection to the api
    $client = new \Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
    $client->setAuthConfig(__DIR__ . '/credentials.json');
    $client->setAccessType('offline');
    $service = new Google_Service_Sheets($client);
    $spreadsheetId = "1R_tbrlbR-k7haT_HW9C_Yy3J75QnKCURUxuU113AtEM";

    //getting the last inserted row id
    $rangepix = "stroller!T2:U";
    $response = $service->spreadsheets_values->get($spreadsheetId,$rangepix);
    $values = $response->getValues();
    if (empty($values)) {
        print "No data found.\n";
    } else {
        // foreach ($values as $row) {
        //     // Print columns A and E, which correspond to indices 0 and 4.
        // echo  $row[0];
        // }
        var_dump($values);
    }
}
// $response = $service->spreadsheets_values->get($spreadsheetId, $range);
// $values = $response->getValues();

// if (empty($values)) {
//     print "No data found.\n";
// } else {
//     $mask = "%10s %-10s %s\n";
//     foreach ($values as $row) {
//         // Print columns A and E, which correspond to indices 0 and 4.
//        echo  sprintf($mask, $row[2], $row[1], $row[0]);
//     }
// }





?>
