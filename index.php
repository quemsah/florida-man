<?php
include_once './func.php';

define('channel', floridaMan(1));
define('bot_url', 'https://api.telegram.org/bot' . floridaMan(0) . '/sendMessage');

$content = file_get_contents('php://input');
$user_data = json_decode($content, TRUE);

toUser($text, $user_data);
toChannel($text, $user_data);
?>