<?php
require_once "NewsDB.class.php";
$posts = $news->getNews();
foreach($posts as $post) {
?>
<h1>Заголовок новости: <?=$post['title']?></h1>
<h2>Категория: <?=$post['category']?></h2>
<p>Текст новости: <?=$post['description']?></p>
<p style = "font-size: 12px;">Источник: <?=$post['source']?></p>
<p style = "font-size: 12px;">Дата: <?=date("d.m.Y H:m:s", $post['datetime'])?></p>
<a href = "delete_news.inc.php?id=<?=$post['id']?>">Удалить новость</a>
<hr>
<?php
}