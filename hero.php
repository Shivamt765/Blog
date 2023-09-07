
<?php
$data = json_decode(file_get_contents('json/hero.json'), true);
foreach ($data as $item) {
    echo '<div class="slider ">';
    echo '<img src="' . $item['image'] . '" alt="">';
    echo '<h1>' .$item['head'] . '</h1>';
    echo '<p>' . $item['text'] .'</p>';
    echo '</div>';
}
?>
