<?php 

////////////////////////////////////////
//                                    //
//      Player_İd Maç Geçmişi         //
//                                    //
////////////////////////////////////////


require 'player_id.php';

$kh = curl_init();
 
curl_setopt(
    $kh, 
    CURLOPT_HTTPHEADER,
    array(
        'Authorization: Bearer '. API_KEY,
        'accept: application/json'
    )
);
curl_setopt($kh, CURLOPT_URL, 'https://open.faceit.com/data/v4/players/'.$id.'/history?game=csgo&offset=0&limit=20'); // game : hangi oyunun maçlarını çekmek istiyorsunuz * offset default 0 * limit ise çekmek istediğiniz maç sayısını belirtiyor 
curl_setopt($kh, CURLOPT_RETURNTRANSFER, 1);
 
$b = curl_exec($kh);
curl_close($kh);
 
$d = json_decode($b,true);

$mac_id = $d["items"][0]["match_id"]; // ile oynadığı son maçın idsini çektik

print_r($d);


 ?>