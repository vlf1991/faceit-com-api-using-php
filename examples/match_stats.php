<?php 


////////////////////////////////////////
//                                    //
//      Maç istatistikleri            //
//                                    //
////////////////////////////////////////


require 'player_history.php';



$th = curl_init();

curl_setopt(
    $th, 
    CURLOPT_HTTPHEADER,
    array(
        'Authorization: Bearer '. API_KEY,
        'accept: application/json'
    )
);
curl_setopt($th, CURLOPT_URL, 'https://open.faceit.com/data/v4/matches/'.$mac_id.'/stats');
curl_setopt($th, CURLOPT_RETURNTRANSFER, 1);

$t = curl_exec($th);
curl_close($th);

$stast = json_decode($t,true);

print_r($stast);



 ?>