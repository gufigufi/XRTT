<div id="content">

    <h2 id="content_name">Редагування адміністраторів</h2>

    <div class="del_list">
        <h3>Оберіть потрібного адміністратора зі списку</h3>
        <ul>
            <? foreach($del as $item):?>
                <li><p><?=$item['title'];?> <strong>-</strong> <em><?=$item['username'];?></em> </p>
                    <form id="<?=$item['id'];?>" action="" method="post">
                        <input name="del" type="submit" value="Видалити">
                        <input type="hidden" name="id" value="<?=$item['id'];?>">
                        <input type="hidden" name="del_hid" value="1">
                    </form>
                </li>
            <? endforeach; ?>
        </ul>
    </div>
</div>

<section id="confirm_delete_window">
    <div class="confirm_window_header">
        <p>Видалення  адміністратора <span title="Закрити"></span></p>
    </div>
    <div class="confirm_window_content">
        <p>Ви впевнені, що хочете видалити адміністратора <em></em> ?</p>
        <input type="button" value="Так, видалити">
        <input type="button" value="Відмінити">
        <input type='hidden' value=''>
    </div>
</section>