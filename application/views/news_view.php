<div id="content">
    <h2 id="content_name">Події та новини</h2>
    <div class="news">
        <p class="show_as">Відобразити <span>списком</span></p>
        <ul id="news_list" class="view_blocks">
        <?php foreach($news as $item):?>
            <li class="news_block" title="Открыть новость">
                <section id="news-id-<?=$item["id"]?>">
                    <h3><?=$item["title"] ?></h3>
                    <article class="nShort"><?=$item["text"] ?></article>
                    <article class="nFull"><?=$item["text"] ?></article>
                    <p class="date_time"><?=$item["date"] ?></p>
                </section>
            </li>
         <?endforeach?>
        </ul>
    </div>
</div>
<section id="news_window_bg">
    <section id="news_window">
        <div class="news_window_header">
            <h2></h2>
        </div>
        <div class="news_window_content">

        </div>
</section>
</section>