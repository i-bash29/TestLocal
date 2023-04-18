<?php
require_once "NewsDB.class.php";
$news = new NewsDB();
$id = $_GET['id'];
if(!$news->deleteNews($id)){
    echo "Error!";
} else {
    header("Location: news.php");
    exit;
}