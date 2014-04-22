<div id="content">

    <h2 id="content_name">Додавання кращого студента</h2>

    <form name="best_students" action="" method="post" enctype="multipart/form-data">
        <div id="form">

            <p>
                <label for="familia">Прізвище</label>
                <input type="text" name="familia" id="familia" value="<?=$pages_info['familia'];?>">
            </p>
            <section class="error"><?=form_error('familia');?></section>

            <p>
                <label for="st_name">Ім'я</label>
                <input type="text" name="name" id="st_name" value="<?=$pages_info['name'];?>">
            </p>
            <section class="error"><?=form_error('name');?></section>

            <p>
                <label for="group">Група</label>
                <input type="text" name="group" id="group" value="<?=$pages_info['group'];?>">
            </p>
            <section class="error"><?=form_error('group');?></section>

            <p>
                <label for="img"><strong>Фото:</strong></label>
                <img class="photo_upload" alt="<?echo $pages_info['familia'].' '.$pages_info['name'];?>" src="<?=base_url();?>images/best_students/<?=$pages_info['img'];?>">
                <input name="userfile" type="file" id="img">
            </p>
            <section class="error"><?=$error;?></section>

            <p>
                <input type="submit" value="Редагувати" name="edit">
            </p>

        </div>
    </form>

</div>