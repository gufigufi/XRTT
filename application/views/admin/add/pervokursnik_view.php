<div id="content">

    <h2 id="content_name">Додавання групи першого курсу</h2>

    <form name="pervokursnik" action="" method="post" enctype="multipart/form-data">
        <div id="form">

            <p>
                <label for="otdelenie">Відділення:</label>
                <input type="text" name="otdelenie" id="gruppa" value="<?=set_value('otdelenie');?>">
            </p>
            <section class="error"><?=form_error('otdelenie');?></section>

            <p>
                <label for="spetsialnost">Спеціальність:</label>
                <input type="text" name="spetsialnost" id="spetsialnost" value="<?=set_value('spetsialnost');?>">
            </p>
            <section class="error"><?=form_error('spetsialnost');?></section>

            <p>
                <label for="group">Група:</label>
                <input type="text" name="group" id="group" value="<?=set_value('group');?>">
            </p>
            <section class="error"><?=form_error('group');?></section>

            <p>
                <label for="kl_rukovod">Класний керівние:</label>
                <input type="text" name="kl_rukovod" id="kl_rukovod" value="<?=set_value('kl_rukovod');?>">
            </p>
            <section class="error"><?=form_error('kl_rukovod');?></section>

            <p>
                <label for="img"><strong>Фото:</strong></label>
                <input name="userfile" type="file" id="img">
            </p>
            <section class="error"><?=$error;?></section>

            <p>
                <label for="date">Рік вступу:</label>
                <input type="number" name="date" id="date" value="<?=set_value('date');?>">
            </p>
            <section class="error"><?=form_error('date');?></section>

            <p>
                <label for="spisok"><strong>Перечінь студентів:</strong></label>
                <textarea name="spisok" id="spisok"><?=set_value('spisok');?></textarea>
            </p>
            <section class="error"><?=form_error('spisok');?></section>

            <p>
                <input type="submit" value="Додати" name="add">
            </p>

        </div>
    </form>

    <script type="text/javascript">
        CKEDITOR.replace( 'spisok');
    </script>

</div>