<div id="content">

    <h2 id="content_name">Видалити студента</h2>

    <div class="del_list">
        <h3>Оберіть потрібного студента зі списку</h3>
        <ul>
            <? foreach($del as $item):?>
                <li><p><?=$item['group'];?> <strong>-</strong> <em><?echo $item['familia'].' '.$item['name'];?></em> </p>
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
        <p>Видалення студента <span title="Закрити"></span></p>
    </div>
    <div class="confirm_window_content">
        <p>Ви впевнені, що хочете видалити студента <em></em> ?</p>
        <input type="button" value="Так, видалити">
        <input type="button" value="Відмінити">
        <input type='hidden' value=''>
    </div>
</section>