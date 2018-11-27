<?php 

////////////////////////////////////////
//                                    //
//  Player_İd Kullanıcı Bilgileri     //
//                                    //
////////////////////////////////////////


require 'player_id.php';

$bh = curl_init();
 
curl_setopt(
    $bh, 
    CURLOPT_HTTPHEADER,
    array(
        'Authorization: Bearer '. API_KEY,
        'accept: application/json'
    )
);
curl_setopt($bh, CURLOPT_URL, 'https://open.faceit.com/data/v4/players/'.$id); // player_id ile kullanıcı bilgilerini çektik
curl_setopt($bh, CURLOPT_RETURNTRANSFER, 1);
 
$b = curl_exec($bh);
curl_close($bh);
 
$d = json_decode($b,true);
print_r($d); // çektiğimiz bilgileri ekrana bastırdık

 ?>