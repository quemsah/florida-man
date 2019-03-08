<?php
$bot_hello = array();
$bot_hello[] = 'Beep Boop I am Robot.';
$bot_hello[] = 'Здарова кожаные ублюдки!';
$bot_hello[] = 'Beep boop, son. Beep boop.';
$message = $bot_hello[rand(0, (count($bot_hello) - 1)) ];
?>