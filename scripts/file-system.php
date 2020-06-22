<?php
session_start();

function createNewRoom(){
  $roomId = newId();
  while (file_exists("rooms/{$roomId}.json")){
    $roomId = newId();
  }
  fopen("rooms/{$roomId}.json", "x");
  $_SESSION["roomId"] = $roomId;
  return $roomId;
}

function newId(){
  return bin2hex(random_bytes(6));
}


?>