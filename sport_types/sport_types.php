<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Виды спорта</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../media.css">
    <link rel="stylesheet" href="sport_types.css">
    <link rel="stylesheet" href="sport_types_media.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" 
    integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" 
    crossorigin="anonymous">
</head>
<body>
    <?php 
        include ("../header.php");
    ?>

    <section class="information">
        <div class="inner_information">
            <p class="information_head">Виды спорта</p>
            <p class="information_text">В МУ Спортивная школа рыбинского муниципального района осуществляется подготовка по следующим видам спорта:</p>
            <ul class="sport_list">
                <li class="sport_title">Футбол</li>
                <li class="sport_title">Баскетбол</li>
                <li class="sport_title">Волейбол</li>
                <li class="sport_title">Настольный теннис</li>
                <li class="sport_title">Бокс</li>
                <li class="sport_title">Легкая атлетика</li>
                <li class="sport_title">Борьба</li>
                <li class="sport_title">Гиревой спорт</li>
                <li class="sport_title">Туризм</li>
                <li class="sport_title">Шахматы</li>
            </ul>
            <p class="information_text">Для записи на занятия необходимо заполнить приведенные ниже документы</p>
            <p class="information_text"><a href="docs/dogovor.docx">Договор на обучение</a></p>
            <p class="information_text"><a href="docs/zayavlenie.docx">Заявление на обучение</a></p>
        </div>
    </section>

    <?php
        include("../footer.php");
    ?>
    <script src="../main.js"></script>   
</body>
</html>