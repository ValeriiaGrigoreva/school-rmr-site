<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="stylesheet" href="contacts_style.css">
    <link rel="stylesheet" href="contacts_media.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../media.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" 
    integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" 
    crossorigin="anonymous">
</head>
<body>
    <?php 
        include ("../header.php");
    ?>
    <section class="contacts">
        <div class="contacts_text">
            <p class="contacts_head">Контакты</p>
            <p class="contacts_item">Телефон: +7 4855 28 07 09</p>
            <p class="contacts_item">Email: info@shkola-rmr.ru</p>
            <p class="contacts_item">Адрес: ул. Свободы, 17</p>
        </div>
    </section>

    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2111.2552199112292!2d38.82348141592943!3d58.051232981230015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
        1s0x46b21112bdcd11f1%3A0x2f2b2c5f7444694!2z0YPQuy4g0KHQstC-0LHQvtC00YssIDE3LCDQoNGL0LHQuNC90YHQuiwg0K_RgNC-0YHQu9Cw0LLRgdC60LDRjyDQvtCx0LsuLCAxNTI5MDM!5e0!3m2!1sru!2sru!4v1592
        334458760!5m2!1sru!2sru"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>
    
    <?php
        include("../footer.php");
    ?>

    <script src="../main.js"></script>
</body>
</html>