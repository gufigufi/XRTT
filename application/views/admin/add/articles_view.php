<td id="edit_place" valign="top">
<form method="post" action="" enctype="multipart/form-data">

    <table border="0" align="center" cellpadding="0"cellspacing="0" class="add_edit_view">
        <tr>
            <td class="title">
                <div>Название</div>
            </td>
        </tr>
        <tr>
            <td class="field_input">
                <input type="text" name="title" size="80" value="<?=set_value('title');?>"/>
                <div class="example">Пример: Как похудеть</div>
                <div class="error"><?=form_error('title');?></div>
            </td>
        </tr>
    </table>

    <table border="0" align="center" cellpadding="0"cellspacing="0" class="add_edit_view">
        <tr>
            <td class="title">
                <div>Название для url (транслитом, без пробелов)</div>
            </td>
        </tr>
        <tr>
            <td class="field_input">
                <input type="text" name="title_en" size="80" value="<?=set_value('title_en');?>"/>
                <div class="example">Пример: kak-pohudetj</div>
                <div class="error"><?=form_error('title_en');?></div>
            </td>
        </tr>
    </table>

    <table border="0" align="center" cellpadding="0"cellspacing="0" class="add_edit_view">
        <tr>
            <td class="title">
                <div>Описание статьи (краткое, 250 символов)</div>
            </td>
        </tr>
        <tr>
            <td class="field_input">
                <textarea name="description" cols="60" rows="5"><?=set_value('description');?></textarea>
                <div class="example">Пример: Вас интересует вопрос как быстро похудеть? Мы Вам расскажем</div>
                <div class="error"><?=form_error('description');?></div>
            </td>
        </tr>
    </table>

    <table border="0" align="center" cellpadding="0"cellspacing="0" class="add_edit_view">
        <tr>
            <td class="title">
                <div>Полная статья</div>
            </td>
        </tr>
        <tr>
            <td class="field_input">
                <textarea name="text" cols="60" rows="5"><?=set_value('text');?></textarea>
                <div class="error"><?=form_error('text');?></div>
            </td>
        </tr>
    </table>

    <table border="0" align="center" cellpadding="0"cellspacing="0" class="add_edit_view">
        <tr>
            <td class="title">
                <div>Загрузите мини-картинку (В формате png,jpg,gif - макс.размер:100х100 и не более 1мб)</div>
            </td>
        </tr>
        <tr>
            <td class="field_input">
                <input type="file" name="userfile" />
                <div class="error"><?=form_error('userfile');?></div>
            </td>
        </tr>
    </table>

    <table border="0" align="center" cellpadding="0"cellspacing="0" class="add_edit_view">
        <tr>
            <td class="title">
                <div>Автор статьи</div>
            </td>
        </tr>
        <tr>
            <td class="field_input">
                <input type="text" name="author" size="80" value="<?=set_value('author');?>"/>
                <div class="example">Пример: Иванов Сергей</div>
                <div class="error"><?=form_error('author');?></div>
            </td>
        </tr>
    </table>

    <table border="0" align="center" cellpadding="0"cellspacing="0" class="add_edit_view">
        <tr>
            <td class="title">
                <div>Ключевые слова</div>
            </td>
        </tr>
        <tr>
            <td class="field_input">
                <input type="text" name="keywords" size="80" value="<?=set_value('keywords');?>"/>
                <div class="example">Пример: как похудеть, быстрое похудание, похудание</div>
                <div class="error"><?=form_error('keywords');?></div>
            </td>
        </tr>
    </table>

    <table border="0" align="center" cellpadding="0"cellspacing="0" class="add_edit_view">
        <tr>
            <td class="title">
                <div>Выберите категорию</div>
            </td>
        </tr>
        <tr>
            <td class="field_input">
                <select name="category">
                    <?foreach($categories as $item): ?>
                    <option value="<?=$item['title_en'];?>"><?=$item['title'];?></option>
                    <?endforeach;?>
                </select>
                <div class="example">Если список пустой, то сначало создайте категорию.</div>
                <div class="error"><?=form_error('category');?></div>
            </td>
        </tr>
    </table>
    <input type="hidden" name="date" value="<?=date('Y-m-d');?>"/>
    <p align="center"><input type="submit" name="add" value="Добавить" /></p>

</form>
    <script type="text/javascript">
        CKEDITOR.replace( 'text');
    </script>