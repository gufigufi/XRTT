<div id="content">
    <h2 id="content_name">Зміна паролю</h2>
    <div class="registr">
        <div style="text-align: center" class="show_error"><?=$error;?></div>
        <form action="" method="post">
            <div id="form">

                <p>
                    <label for="old_pswd">Старий пароль:</label>
                    <input type="password" name="old_pswd" id="old_pswd" value="<?=set_value('old_pswd');?>">
                </p>
                <section class="error"><?=form_error('old_pswd');?></section>

                <p>
                    <label for="new_pswd">Новий пароль:</label>
                    <input type="password" name="new_pswd" id="new_pswd" value="<?=set_value('new_pswd');?>">
                </p>
                <section class="error"><?=form_error('new_pswd');?></section>

                <p>
                    <label for="new_pswd2">Підтвердження нового паролю:</label>
                    <input type="password" name="new_pswd2" id="new_pswd2" value="<?=set_value('new_pswd2');?>">
                </p>
                <section class="error"><?=form_error('new_pswd2');?></section>

                <p>
                    <label for="captcha" id="for_captcha">Введіть цифри з картинки:</label>
                    <span class="captcha"><?=$captcha;?><input type="number" name="captcha" id="captcha"></span>
                </p>
                <section class="error"><?=form_error('captcha');?></section>

                <p>
                    <input type="submit" value="Змінити пароль" name="change_password">
                </p>

            </div>
        </form>
    </div>
</div>

<!--
<td id="main_block" valign="top">


    <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td id="info" valign="top">
                <div align="center" style="font-size: 18px;"><?=$pages_info['title'];?></div>

                <div class="error" align="center"><?=$error;?></div>
                <form method="post" action="">
                    <table border="0" cellpadding="0"cellspacing="0" class="add_edit_view" align="center">
                        <tr>
                            <td class="title">
                                <div>Старый пароль (a-z,A-Z,0-9,-,_,  от 6 до 16 символов)</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="field_input">
                                <input type="password" name="old_pswd" size="20" />
                                <span class="error"><?=form_error('old_pswd');?></span>
                            </td>
                        </tr>
                    </table>

                    <table border="0" cellpadding="0"cellspacing="0" class="add_edit_view" align="center">
                        <tr>
                            <td class="title">
                                <div>Новый пароль (a-z,A-Z,0-9,-,_,  от 6 до 16 символов)</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="field_input">
                                <input type="password" name="new_pswd" size="20" />
                                <span class="error"><?=form_error('new_pswd');?></span>
                            </td>
                        </tr>
                    </table>

                    <table border="0" cellpadding="0"cellspacing="0" class="add_edit_view" align="center">
                        <tr>
                            <td class="title">
                                <div>Новый пароль еще раз (a-z,A-Z,0-9,-,_,  от 6 до 16 символов)</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="field_input">
                                <input type="password" name="new_pswd2" size="20" />
                                <span class="error"><?=form_error('new_pswd2');?></span>
                            </td>
                        </tr>
                    </table>
                    <div align="center"><input type="submit" name="change_password" value="Изменить" alt="Изменить" /></div>
                </form>
            </td>
        -->