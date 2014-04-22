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
                <div class="example">Пример: Бизнес</div>
                <div class="error"><?=form_error('title');?></div>
            </td>
        </tr>
    </table>


    <table border="0" align="center" cellpadding="0"cellspacing="0" class="add_edit_view">
        <tr>
            <td class="title">
                <div>Название категории на англ (без пробелов)</div>
            </td>
        </tr>
        <tr>
            <td class="field_input">
                <input type="text" name="title_en" size="80" value="<?=set_value('title_en');?>"/>
                <div class="example">Пример: biznes</div>
                <div class="error"><?=form_error('title_en');?></div>
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
                <div class="example">Пример: статьи о бизнесе, бизнес</div>
                <div class="error"><?=form_error('keywords');?></div>
            </td>
        </tr>
    </table>

    <p align="center"><input type="submit" name="add" value="Добавить" alt="Добавить"/></p>

</form>   