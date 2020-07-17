<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../../media.css">
    <link rel="stylesheet" href="../gto/events/events.css">
    <link rel="stylesheet" href="../gro/events/events_media.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" 
    integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" 
    crossorigin="anonymous">
</head>
<body>
    <?php 
        include ("../header.php");
    ?>

    <main class="news">
    <p class="section_header">Новости</p>
    <?php
        include ("db.php");
    

        if (isset($_GET['page'])){
            $page = $_GET['page'];
        }else $page = 1;

        $limit = 5; 
        $offset = $limit * ($page - 1);
        $events = getAllEvents($limit, $offset);
        $num_rows = $db->query('select count(*) from previews')->fetchColumn(); 
        $str_page = ceil($num_rows/$limit);
        

        foreach($events as $event): ?>

        <section class="single_news">
            <div class="news_content">
                <img class="preview" src="<?php echo $event["img"] ?>">
                <div class="news_text">
                    <p class="news_header"><?php echo $event["title"] ?></p>
                    <?php echo $event["text"] ?>
                    <div class="bottom">
                        <time><?php echo date("d.m.Y", strtotime($event["date"])); ?></time>
                        <a href="article.php?id=<?php echo $event["id"] ?>" class="button">Подробнее</a>
                    </div>
                </div>
            </div>
        </section>

        <?php endforeach; ?>

    </main>

    <div class="navigation">
        <?php
            for ($i=1; $i <= $str_page ; $i++) { 
                echo "<a href='?page=$i'> $i </a>";
            }
        ?>
    </div>


    <?php
        include("../footer.php");
    ?>
    <script src="../../main.js"></script>
</body>
</html>