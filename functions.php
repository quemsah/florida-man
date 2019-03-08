<?php
function getUserRequest($text, $chat_id) {
  //список приветствий, который понимает бот
  $hello = array();
  $hello[] = 'Привет';
  $hello[] = 'привет';
  $hello[] = 'Здравствуйте';

  // варианты ответов бота
  $bot_hello = array();
  $bot_hello[] = 'И тебе привет';
  $bot_hello[] = 'Здарова';
  $bot_hello[] = 'Доброго времени суток';
  $bot_hello[] = 'Привет-привет че надо';

  if (in_array(strtolower($text), $hello)) {
    //пользователь поздоровался.
    //случайная фраза привет от бота
    $bot_resp = $bot_hello[rand(0, (count($bot_hello) - 1))];
    $data = array(
      'text' => $bot_resp,
      'chat_id' => $chat_id,
    );
    requestToTelegram($data);
  }
}
function requestToTelegram($data, $type = 'sendMessage') {
  if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, API_URL . $type);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_POST, TRUE);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_exec($curl);
    curl_close($curl);
  }
}
?>