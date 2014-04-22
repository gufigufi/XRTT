<div id="content">

    <h2 id="content_name">Редагування групи першого курсу</h2>

    <form name="pervokursnik" action="" method="post" enctype="multipart/form-data">
        <div id="form">

            <p>
                <label for="otdelenie">Відділення:</label>
                <input type="text" name="otdelenie" id="otdelenie" value="<?=$pages_info['otdelenie'];?>">
            </p>
            <section class="error"><?=form_error('otdelenie');?></section>

            <p>
                <label for="spetsialnost">Спеціальність:</label>
                <input type="text" name="spetsialnost" id="spetsialnost" value="<?=$pages_info['spetsialnost'];?>">
            </p>
            <section class="error"><?=form_error('spetsialnost');?></section>

            <p>
                <label for="group">Група:</label>
                <input type="text" name="group" id="group" value="<?=$pages_info['group'];?>">
            </p>
            <section class="error"><?=form_error('group');?></section>

            <p>
                <label for="kl_rukovod">Класний керівние:</label>
                <input type="text" name="kl_rukovod" id="kl_rukovod" value="<?=$pages_info['kl_rukovod'];?>">
            </p>
            <section class="error"><?=form_error('kl_rukovod');?></section>

            <p>
                <label for="img"><strong>Фото:</strong></label>
                <img class="photo_upload" alt="<?=$pages_info['group'];?>" src="<?=base_url();?>images/first_course/<?=$pages_info['img'];?>">
                <input name="userfile" type="file" id="img">
            </p>
            <section class="error"><?=$error;?></section>

            <p>
                <label for="date">Рік вступу:</label>
                <input type="number" name="date" id="date" value="<?=$pages_info['date'];?>">
            </p>
            <section class="error"><?=form_error('date');?></section>

            <p>
                <label for="spisok"><strong>Перечінь студентів:</strong></label>
                <textarea name="spisok" id="spisok"><?=$pages_info['spisok'];?></textarea>
            </p>
            <section class="error"><?=form_error('spisok');?></section>

            <p>
                <input type="submit" value="Редагувати" name="edit">
            </p>

        </div>
    </form>

    <script type="text/javascript">
        CKEDITOR.replace( 'spisok');
    </script>

</div>