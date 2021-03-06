<div id="content">

    <h2 id="content_name">Видалити фотографій</h2>

    <div class="del_list">
        <h3>Оберіть потрібну фотографію зі списку</h3>
        <ul>
            <? foreach($del as $item):?>
                <li><p><img class="photo_upload" alt="<?=$item['img'];?>" src="<?=base_url();?>images/galery/<?=$item['title_en'];?>/<?=$item['img'];?>" >
                        <strong>-</strong> <em><?=$item['img'];?></em>
                    </p>
                    <form id="<?=$item['id'];?>" action="" method="post">
                        <input name="del" type="submit" value="Видалити">
                        <input type="hidden" name="id" value="<?=$item['id'];?>">
                        <input type="hidden" name="title_en" value="<?=$item['title_en'];?>">
                        <input type="hidden" name="img" value="<?=$item['img'];?>">
                        <input type="hidden" name="del_hid" value="1">
                    </form>
                </li>
            <? endforeach; ?>
        </ul>
    </div>
</div>

<section id="confirm_delete_window">
    <div class="confirm_window_header">
        <p>Видалення фотографій <span title="Закрити"></span></p>
    </div>
    <div class="confirm_window_content">
        <p>Ви впевнені, що хочете видалити фотографію <em></em> ?</p>
        <input type="button" value="Так, видалити">
        <input type="button" value="Відмінити">
        <input type='hidden' value=''>
    </div>
</section>