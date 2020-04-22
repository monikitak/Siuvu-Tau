<?php

function e($text) {
  return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function limitWords ($x, $length){
  if(strlen ($x)<=$length){
    echo $x;
  }
  else{
    $y = substr($x, 0, $length) . '...';
    echo $y;
  }
}
