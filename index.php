<?php
// листинг bot.php
//задаём наш токен, полученный при создании бота и указываем путь к API телеграма
require 'define.php';  // Работает

//принимаем запрос от бота(то что напишет в чате пользователь)
$content = file_get_contents('php://input');
//превращаем из json в массив
$update = json_decode($content, TRUE);
//получаем id чата
$chat_id = $update['message']['chat']['id'];
?>