<div id="content">
    <h2 id="content_name">Реєстрація</h2>
    <div class="registr">
        <div style="text-align: center" class="show_error"><?=$error;?></div>
        <form action="" method="post">
            <div id="form">

                <p>
                    <label for="username">Логин:</label>
                    <input type="text" name="username" id="username" value="<?=set_value('username');?>">
                </p>
                <section class="error"><?=form_error('username');?></section>

                <p>
                    <label for="pswd">Пароль:</label>
                    <input type="password" name="pswd" id="pswd" value="<?=set_value('pswd');?>">
                </p>
                <section class="error"><?=form_error('pswd');?></section>

                <p>
                    <label for="pswd2">Підтвердження паролю:</label>
                    <input type="password" name="pswd2" id="pswd2" value="<?=set_value('pswd2');?>">
                </p>
                <section class="error"><?=form_error('pswd2');?></section>

                <p>
                    <label for="status">Статус:</label>
                    <select name="status" id="status">
                        <? foreach($admins as $item):?>
                            <option value="<?=$item['id'];?>"><?=$item['title'];?></option>
                        <?endforeach;?>
                    </select>
                </p>

                <p>
                    <label for="captcha" id="for_captcha">Введіть цифри з картинки:</label>
                    <span class="captcha"><?=$captcha;?><input type="number" name="captcha" id="captcha"></span>
                </p>
                <section class="error"><?=form_error('captcha');?></section>

                <p>
                    <input type="submit" value="Додати" name="register">
                </p>

            </div>
        </form>
    </div>
</div>
