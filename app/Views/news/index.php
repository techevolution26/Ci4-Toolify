<h2><?= esc($title)?></h2>

<?php if ($news_list !== []) :?>

    <?php foreach ($news_list as $news_item) :?>

        <h3><?= esc($news_item['title'])?></h3>
        <div class="main">
            <?= esc($news_item['body'])?>
        </div>

        <p><a href="/news/<?= esc($news_item['slug'], 'url')?>"> View article</a></p>
        
    <?php endforeach?>

    <?php else :?>

        <h3>No news Found.</h3>
        <p>Unable to locate suitable News for you.</p>

    <?php endif?>