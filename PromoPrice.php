<?php
if (file_exists("promoPrice.csv")) echo "Файл существует: promoPrice.csv <p>" .  ";\r\n";
if (file_exists("wheelArticles.csv")) echo "Файл существует: wheelArticles.csv <br>" .  ";\r\n";
$line = file("promoPrice.csv", FILE_IGNORE_NEW_LINES);
$norArticleConst = file("wheelArticles.csv", FILE_IGNORE_NEW_LINES);
$fd = fopen("New.txt", 'w') or die("не удалось создать файл");
foreach ($line as $line_num => $line) {
    $tempOne = explode(';', $line);
    $norArticle = $norArticleConst;
    for ($i = 0; $i < count($tempOne) - 2; $i++) {
        $norArticle = $norArticleConst;
        foreach ($norArticle as $norArticle_num => $norArticle) {
            $tempTwo = explode(';', $norArticle);
            if ($tempOne[$i] == $tempTwo[1]) {
                $tempTwo[2] = $tempOne[count($tempOne) - 1];
                fwrite($fd, $tempTwo[0] . ";" . $tempTwo[1] . ";" . $tempTwo[2] . ";\r\n");
                echo $tempTwo[0] . ";" . $tempTwo[1] . ";" . $tempTwo[2] . ";\r\n";
            }
        }
    }
}
fclose($fd);
?>