<?php
  //ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
  function SMSAPI($names,$to){
    if(substr($to, 0, 3 ) !== "+25"){
        $to = "+25".$to;
    }

    $website="http://www.docsfinder.com";
    $message = "Ugakozaho udutoki";
    $company = "Franz";
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
    CURLOPT_POSTFIELDS =>"{\n\t\"to\" : \"$to\",\n\t\"text\" : \"$message\",\n\t\"sender\" : \"$company\"\n}", //don' edit me
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer eyJhbGciOiJub25lIn0.eyJpZCI6MjAyLCJyZXZva2VkX3Rva2VuX2NvdW50IjowfQ.",
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
  if(isset($_POST['send'])){

        $names = $_POST['names'];
        $number = $_POST['number'];
        
       
      echo SMSAPI($names,$number);
    
    }
    else{
      echo " not sent!!";

    }
    


?>