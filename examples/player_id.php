<?php 


////////////////////////////////////////
//                                    //
//      Player_İd Çekme işlemi        //
//                                    //
////////////////////////////////////////

require '../inc/config.php';

$ch = curl_init();

curl_setopt(
    $ch, 
    CURLOPT_HTTPHEADER,
    array(
        'Authorization: Bearer '. API_KEY,
        'accept: application/json'
    )
);
curl_setopt($ch, CURLOPT_URL, 'https://open.faceit.com/data/v4/players?nickname=XANTARES');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$array = curl_exec($ch);
curl_close($ch);

$p_id = json_decode($array,true);

$id = $p_id["player_id"]; // kullanıcı id aldık











 ?>