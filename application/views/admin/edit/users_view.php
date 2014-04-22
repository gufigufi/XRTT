<div id="content">
    <h2 id="content_name">Редагування адміністратора</h2>
    <div class="registr">
        <div style="text-align: center" class="show_error"><?=$error;?></div>
        <form action="" method="post">
            <div id="form">

                <p>
                    <label for="username">Логин:</label>
                    <input type="text" name="username" id="username" value="<?=$pages_info['username'];?>">
                </p>
                <section class="error"><?=form_error('username');?></section>

                <p>
                    <label for="status">Статус:</label>
                    <select name="status" id="status">
                        <? foreach($admins as $item):
                            if($pages_info['status'] == $item['id'])
                                echo '<option selected value="'.$item['id'].'">'.$item['title'].'</option>';
                            else
                                echo '<option value="'.$item['id'].'">'.$item['title'].'</option>';
                        endforeach;?>
                    </select>
                </p>

                <p>
                    <input type="submit" value="Редагувати" name="edit">
                </p>

            </div>
        </form>
    </div>
</div>
