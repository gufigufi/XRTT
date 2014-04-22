<div id="nav_column">
    <form id="login" class="side_block" method="post" action="<?=base_url();?>index.php/login">
        <h2>АВТОРИЗАЦІЯ</h2>
        <fieldset id="inputs">
            <input id="username" type="text" placeholder="Логін" name="login" />
            <input id="password" type="password" placeholder="Пароль" name="password" />
        </fieldset>
        <fieldset id="actions">
            <input type="submit" id="submit" value="Увійти" name="enter" />
        </fieldset>
    </form>
