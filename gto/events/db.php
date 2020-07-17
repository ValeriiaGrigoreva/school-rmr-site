<?php
    $dbhost = "localhost";
    $dbname = "gto_events";
    $username = "root";
    $password = "root";
    $db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

    function getAllEvents($limit, $offset){
        global $db;
        $events = $db->query("SELECT * FROM previews ORDER BY id DESC LIMIT $limit OFFSET $offset");
        return $events;
    }

    function getArticle($id){
        global $db;
        $articles = $db->query("SELECT * FROM articles WHERE id = $id");
        foreach ($articles as $article) {
            return $article;
        }
    }
        
?>