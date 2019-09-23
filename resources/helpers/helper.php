<?php

function prefecture($prefecture){
  switch ($prefecture) {
    case 1:
      $p_id = "kanagawa";
      break;
    case 2:
      $p_id = "sizuoka";
      break;
    case 3:
      $p_id = 'yamanasi';
  }
    return $p_id;
}

function _prefecture($prefecture){
  switch ($prefecture) {
    case 1:
      $p_id = "神奈川県";
      break;
    case 2:
      $p_id = "静岡県";
      break;
    case 3:
      $p_id = '山梨県';
  }
    return $p_id;
}

   function timesubstr($var){
    return  mb_substr($var,0,5);
  }


   function fee($var){
    if($var === ''){
      return  '平日料金と同じ';
    }else {
      return $var.'円';
    }
  }

  function checktime($val){
    if($val === '00:00'){
      return '同上';
    }else {
      return $val;
    }
  }
