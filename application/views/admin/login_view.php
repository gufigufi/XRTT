<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?=base_url();?>style/main_style.css" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Вход в админ панель</title>
</head>

<body id="formEnterBg">
<div id="formEnter">
    <form action="<?=base_url();?>index.php/admin" method="post">
        <label>Login*<input type="text" name="login"/></label>
        <label>Password*<input type="password" name="password"/></label>
        <input type="submit" name="enter" value="Войти" alt="Войти"/>
    </form>
    <p><?=$info;?></p>
</div>
</body>
</html>
