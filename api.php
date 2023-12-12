<?php 

    $Url = "https://sebourugs.com/wp-json/wc/v3/products/2389";
    $consumer_key = "ck_ae6ee2050d1938adfca281af5e3d27afccad829b";
    $consumer_secret = "cs_8b21094bba0df37ac4db1d2c8a31a19718edfce3";
    $headers = [
        "Content-Type:application/json"
    ];

    $Method = "GET";

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => $Url,
        CURLOPT_CUSTOMREQUEST => $Method,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_USERPWD => "$consumer_key:$consumer_secret",
    ]);

    // curl_exec($curl);
    $response1 = curl_exec($curl);
    $jsonObj = json_decode($response1);

    foreach($jsonObj as $product){
        echo $product->id . "<br>";
        echo $product->name . "<br>";
        echo $product->images[0] . "<br>";
    }

    curl_close($curl);
?>