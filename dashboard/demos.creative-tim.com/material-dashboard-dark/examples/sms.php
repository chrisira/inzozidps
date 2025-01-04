
<?php

function SMSAPI($names,$to){
    if(substr($to, 0, 3 ) !== "+25"){
        $to = "+25".$to;
    }

    $website="https:www.sterkgroup.rw";
    $message = "Thanks ".$names.", for booking on Sterk We will try to reply as soon as Possible,Have a good day!";
    $company = "SterkGroup";
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.pindo.io/v1/sms/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>"{\n\t\"to\" : \"$to\",\n\t\"text\" : \"$message\",\n\t\"sender\" : \"$company\"\n}",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer eyJhbGciOiJub25lIn0.eyJpZCI6MjcyLCJyZXZva2VkX3Rva2VuX2NvdW50IjowfQ.",
        "Content-Type: application/json"
    ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($response);
    if(isset($response->sms_id)){
        $sms  = $message;
        $sms_id = $response->sms_id;
        //redirect user after message sent.
    }else{
        return "false";
    }
}

?>