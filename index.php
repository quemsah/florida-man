<?php
require 'words.php';
function FloridaMan($i)
{
    $a = Array(
        'Nzk0ODI1MzIwOkFBSFltNHpHaEJjdmxBbnF3WC1vUTlsSnd4S2lPbFgyQmww',
        'QGZsb3JpZGFfbWFu'
    );
    return base64_decode($a[$i]);
}
$botToken  = FloridaMan(0);
$channel  = FloridaMan(1);
$bot_url = "https://api.telegram.org/bot$botToken/";
$url = $bot_url . "sendMessage?chat_id=" . $channel . "&text=" . urlencode($message);
file_get_contents($url);
