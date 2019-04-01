<?php //if(!isset($HOME_PATH)) die('No direct script access is allowed');
function log_this($title, $message, $type){
   if($type == 'info') {
     $file = fopen('info.log', 'a+');
     $write = 'DateTime' + ' '+'$title'+' '+'$message';
     fwrite($file, Date);
   }
 }
 ?>
