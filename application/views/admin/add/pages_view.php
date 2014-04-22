<td id="edit_place" valign="top">
<form method="post" action="">

    <table border="0" align="center" cellpadding="0"cellspacing="0" class="add_edit_view">
        <tr>
            <td class="title">
                <div>Название</div>
            </td>
        </tr>
        <tr>
            <td class="field_input">
                <input type="text" name="title" size="80" value="<?=set_value('title');?>"/>
                <div class="example">Пример: Контакты</div>
                <div class="error"><?=form_error('title_en');?></div>
            </td>
        </tr>
    </table>


    <table border="0" align="center" cellpadding="0"cellspacing="0" class="add_edit_view">
        <tr>
            <td class="title">
                <div>Название на англ (без пробелов)</div>
            </td>
        </tr>
        <tr>
            <td class="field_input">
                <input type="text" name="title_en" size="80" value="<?=set_value('title_en');?>"/>
                <div class="example">Пример: contacts</div>
                <div class="error"><?=form_error('title_en');?></div>
            </td>
        </tr>
    </table>

    <table border="0" align="center" cellpadding="0"cellspacing="0" class="add_edit_view">
        <tr>
            <td class="title">
                <div>Текст страницы</div>
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
                <div>Ключевые слова</div>
            </td>
        </tr>
        <tr>
            <td class="field_input">
                <input type="text" name="keywords" size="80" value="<?=set_value('keywords')?>"/>
                <div class="example">Пример: связь с администрацией, как с нами связаться</div>
                <div class="error"><?=form_error('keywords');?></div>
            </td>
        </tr>
    </table>


    <table border="0" align="center" cellpadding="0"cellspacing="0" class="add_edit_view">
        <tr>
            <td class="title">
                <div>Скрыть страницу</div>
            </td>
        </tr>
        <tr>
            <td class="field_input">
                <select name="hidden">
                    <option>no</option>
                    <option>yes</option>
                </select>
                <div class="example">Если Вы не хотите, чтобы эта страница была в меню - выберите вариант "Да".</div>
            </td>
        </tr>
    </table>


    <p align="center"><input type="submit" name="add" value="Добавить" alt="Добавить"/></p>

</form>

    <script type="text/javascript">
        CKEDITOR.replace( 'text');
    </script>