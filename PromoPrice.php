<?php
if (file_exists("promoPrice.csv")) echo "Файл существует: promoPrice.csv <p>";
if (file_exists("wheelArticles.csv")) echo "Файл существует: wheelArticles.csv <br>";
$line = file("promoPrice.csv", FILE_IGNORE_NEW_LINES);
$norArticle = file("wheelArticles.csv", FILE_IGNORE_NEW_LINES);
$fd = fopen("New.txt", 'w') or die("не удалось создать файл");
foreach ($line as $line_num => $line) {
    $tempOne = explode(';', $line);
    for ($i = 0; $i < count($tempOne)-2; $i++) {
            foreach ($norArticle as $norArticle_num => $norArticle) {
                echo $norArticle . "/r" ;
                $tempTwo = explode(';', $norArticle);
                       if ($tempOne [$i] == $tempTwo [1]) {
                           $tempTwo [2] = $tempOne [count($tempOne)-1];
                           fwrite($fd, $tempTwo [0] . ";");
                           fwrite($fd, $tempTwo [1] . ";");
                           fwrite($fd, $tempTwo [2] . ";/r ");
                        }
            }
    }  
fclose($fd);             
}
?>