<?php
include_once './func.php';
define('channel', floridaMan(1));
define('bot_url', 'https://api.telegram.org/bot' . floridaMan(0) . '/sendMessage');

//принимаем запрос от бота(то что напишет в чате пользователь)
$content = file_get_contents('php://input');
//превращаем из json в массив
$user_data = json_decode($content, TRUE);

 
 
//обработка запроса
toUser($text, $user_data);
toChannel($text, $user_data);
?>

