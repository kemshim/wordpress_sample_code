<?php

  // 繰り返しフィールド基本系
  $rows = get_field('repeater_field_name'); //オプションページの場合は、引数に'option'忘れずに
  if($rows){
    foreach($rows as $row) {
      echo $row['sub_field'];
    }
  }
?>