<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мероприятия</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../media.css">
    <link rel="stylesheet" href="article.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" 
    integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" 
    crossorigin="anonymous">
</head>
<body>
    <?php 
        include ("../../header.php");
    ?>

    <?php
        include ("../../db.php");
        $articles = getArticle($_GET["id"]);
    ?>

    <section class="article">
        <div class="article_inside">
            <p class="article_head"><?php echo $articles["title"] ?></p>
            <?php echo $articles["text"] ?>
            <div class="photos">
                <img class="img_1" src="<?php echo $articles["img1"] ?>">
                <img class="img_2" src="<?php echo $articles["img2"] ?>">
            </div>
        </div>
    </section>

    <?php
        include("../../footer.php");
    ?>
    <script src="../../main.js"></script>
</body>
</html>