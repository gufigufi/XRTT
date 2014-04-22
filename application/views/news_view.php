<div id="content">
    <h2 id="content_name">Події та новини</h2>
    <div class="news">
        <ul>
        <?php foreach($news as $item):?>
            <li>
                <h3><?=$item["title"] ?></h3>
                <article><?=$item["text"] ?></article>
                <p><?=$item["date"] ?></p>
            </li>
         <?endforeach?>
        </ul>
    </div>
</div>