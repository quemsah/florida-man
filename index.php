<?php
$botToken = "794825320:AAHYm4zGhBcvlAnqwX-oQ9lJwxKiOlX2Bl0";
$chat_id = "@florida_man";
$message = "Ну что кожаные ублюдки обосрались";
$bot_url = "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);
?>


