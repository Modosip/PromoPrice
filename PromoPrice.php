<?php
if (file_exists("promoPrice.csv")) echo "Файл существует: promoPrice.csv <p>";
if (file_exists("wheelArticles.csv")) echo "Файл существует: wheelArticles.csv <br>";
$line = file("promoPrice.csv", FILE_IGNORE_NEW_LINES);
$norArticle = file("wheelArticles.csv", FILE_IGNORE_NEW_LINES);
echo count($norArticle);
foreach ($line as $line_num => $line) {
    foreach ($norArticle as $norArticle_num => $norArticle) {
    $tempOne = explode(';', $line);
    $tempTwo = explode(';', $norArticle_num);
        for ($i = 0; $i < count($norArticle); $i++) {
            if $tempOne [] == $tempTwo

        }
        echo "<b> - " . $temp[12] = $temp[12] + 1 . "</b><br />\n";
    }
}
?>