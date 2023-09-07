<?php
  $dataItem = json_decode(file_get_contents('json/content.json'), true);
  $header = $dataItem['head']['header'];
  
  echo '<div class="head text-center">';
  echo '<h1>' . $header . '</h1>';
  echo '<div class="wrapper d-flex">';
  foreach ($dataItem['DataItems'] as $item) {
      echo '<div class="box">';
      echo '<img src="' . $item['image'] . '">';
      echo '<span>' .$item['text']. '</span>';
      echo '</div>';
    }
  
  echo '</div>';
  echo '</div>';
  
?>
