<?php
$bot_hello = array();
$bot_hello[] = 'И тебе привет';
$bot_hello[] = 'Здарова';
$bot_hello[] = 'Доброго времени суток';
$bot_hello[] = 'Привет-привет че надо';
$message = $bot_hello[rand(0, (count($bot_hello) - 1)) ];
?>
