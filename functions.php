<?php
function teleToLog($log) {
  $myFile = 'log.txt';
  $fh = fopen($myFile, 'a') or die('can\'t open file');
  if ((is_array($log)) || (is_object($log))) {
    $updateArray = print_r($log, TRUE);
    fwrite($fh, $updateArray."\n");
  } else {
    fwrite($fh, $log . "\n");
  }
  fclose($fh);
}
?>