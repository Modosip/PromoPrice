<?php
if (file_exists("promoPrice.csv")) echo "Файл существует: promoPrice.csv <p>";
if (file_exists("wheelArticles.csv")) echo "Файл существует: wheelArticles.csv <br>";
$line = file("promoPrice.csv", FILE_IGNORE_NEW_LINES);
$norArticle = file("wheelArticles.csv", FILE_IGNORE_NEW_LINES);
foreach ($line as $line_num => $line) {
    echo "Строка #<b>{$line_num}</b> : " . $line;
    $temp = explode(';', $line);
   // print_r($temp);
    echo "<b> - " . $temp[12] = $temp[12] + 1 . "</b><br />\n";
}
?>


