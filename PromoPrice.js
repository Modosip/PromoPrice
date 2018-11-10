var PromoPrice = [
    ["1a", "2a", "3a", "4b", 1690],
    ["3c", "6d", "14h", "8l", 1720]
]; // данные с моделями в прайсе и ценой в последней колонке PromoPrice [PromoPrice [0].length]

var ArticlePromo = [
    [123456, "3c", 0],
    [1254, "6d", 0],
    [7854, "8l", 0],
    [36546, "3a", 0],
    [2564, "14h", 0]
]; // Данные с кодами артикулов и модели и цветом диска

for (let i = 0; i < PromoPrice.length; i++) {
    for (let y = 0; y < PromoPrice[i].length - 1; y++) {
        //document.write("Модель " + PromoPrice[i][y] + " стоит " + PromoPrice[i][PromoPrice[i].length - 1] + " рублей <br>");
        for (let x = 0; x < ArticlePromo.length; x++) {
            if (ArticlePromo[x][1] === PromoPrice[i][y]) {
                ArticlePromo[x][2] = PromoPrice[i][PromoPrice[i].length - 1];
                document.write("Code<b> " + ArticlePromo[x][0] + "</b> Model:<b> " + ArticlePromo[x][1] + "</b> соответствует модели <b>"
                    + PromoPrice[i][y] + "</b> и стоит <b>" + ArticlePromo[x][2] + "</b><br>");
            }
        }
    }
}

document.write("<p>")
// Все элементы в массиве
for (let i = 0; i < PromoPrice.length; i++) {
    for (let y = 0; y < PromoPrice[i].length - 1; y++) {
        document.write("Модель " + PromoPrice[i][y] + " стоит " + PromoPrice[i][PromoPrice[i].length - 1] + " рублей <br>")
    }
    document.write("<p>")
}


// Здесь просто песочница
document.write(PromoPrice[1][1] + "<br>");
document.write("PromoPrice [1].length = " + PromoPrice[1].length + "<br>");
document.write("Последний элемент в первой строке (нулевой) PromoPrice  = " + PromoPrice[0][PromoPrice[0].length - 1] + "<br>");
document.write(PromoPrice + "<br>");