<td id="edit_place" valign="top">

    <div class="page_title">Выберите запись для удаления</div>

    <table border="0" align="center" cellpadding="0" cellspacing="0" id="pageslist">
        <tr>
            <td width="30%" class="title">№</td>
            <td width="30%" class="title">Название</td>
            <td width="30%" class="title">Действие</td>
        </tr>

        <? foreach($edit as $item):?>
            <form method="post" action="">
                <tr>
                    <td width="30%"><?=$item['id'];?></td>
                    <td width="30%"><?=$item['title'];?></a></td>
                    <td width="30%"><input name='del' type='submit' value='Удалить' /></td>
                    <input type="hidden" name="id" value="<?=$item['id'];?>" />
                </tr>
            </form>
        <? endforeach; ?>

    </table>

</td>