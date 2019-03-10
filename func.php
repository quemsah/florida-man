<?php
 function floridaMan($i)
{
    $a = Array(
        'Nzk0ODI1MzIwOkFBSFltNHpHaEJjdmxBbnF3WC1vUTlsSnd4S2lPbFgyQmww',
        'LTEwMDE0MTg0NDU0MDU='
    );
    return base64_decode($a[$i]);
}
function toUser($text, $user_data) {
    $chat_id = $user_data['message']['chat']['id'];
    $text = $user_data['message']['text'];
    $bot_response = 'Я тебя услышал, ты написал: "' . $text . '". ' . 'Держи случайное число: ' . rand(1, 1000000);
    $answer = array(
      'text' => $bot_response,
      'chat_id' => $chat_id,
    );
    sendMessage($answer);
}

function toChannel($text, $user_data) {
    $first_name = $user_data['message']['chat']['first_name'];
    $username = $user_data['message']['chat']['username'];
    $text = $user_data['message']['text'];
    $new_post = $first_name . '(@' . $username . ')' . ' написал боту: "' . $text;
    $answer = array(
      'text' => $new_post,
      'chat_id' => channel,
    );
    sendMessage($answer);
}


function sendMessage($data) {
  if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, bot_url);
    curl_setopt($curl, CURLOPT_PROXY, "socks5://111.223.75.178:8888");
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_POST, TRUE);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_exec($curl);
    curl_close($curl);
  }
}
?>
