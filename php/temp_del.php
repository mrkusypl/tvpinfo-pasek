<?php
$files = glob('../img/temp/*');
foreach($files as $file){
  if(is_file($file)) {
    unlink($file);
  }
}