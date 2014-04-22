<div id="content">

    <h2 id="content_name">Додавання кращого студента</h2>

    <form name="best_students" action="" method="post" enctype="multipart/form-data">
        <div id="form">

            <p>
                <label for="familia">Прізвище</label>
                <input type="text" name="familia" id="familia" value="<?=set_value('familia');?>">
            </p>
            <section class="error"><?=form_error('familia');?></section>

            <p>
                <label for="st_name">Ім'я</label>
                <input type="text" name="name" id="st_name" value="<?=set_value('name');?>">
            </p>
            <section class="error"><?=form_error('name');?></section>

            <p>
                <label for="group">Група</label>
                <input type="text" name="group" id="group" value="<?=set_value('group');?>">
            </p>
            <section class="error"><?=form_error('group');?></section>

            <p>
                <label for="img"><strong>Фото:</strong></label>
                <input name="userfile" type="file" id="img">
            </p>
            <section class="error"><?=$error;?></section>

            <p>
                <input type="submit" value="Додати" name="add">
            </p>

        </div>
    </form>

</div>