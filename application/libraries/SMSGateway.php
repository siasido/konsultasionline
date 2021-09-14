<?php

Class SMSGateway {

    protected $ci;

    function __construct(){
        $this->ci =& get_instance();
    }

    function sendMessage($penerima, $msg){
    
        $userkey = "8c973942a8b2"; //userkey lihat di zenziva
        $passkey = "9qgmqu45n2"; // set passkey di zenziva
        $telepon = $penerima;
        $message = $msg;
        $url = "https://gsm.zenziva.net/api/sendsms/";
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
            'userkey' => $userkey,
            'passkey' => $passkey,
            'nohp' => $telepon,
            'pesan' => $message
        ));
        $results = json_decode(curl_exec($curlHandle), true);
        curl_close($curlHandle);
        
        return $results;
    }
}