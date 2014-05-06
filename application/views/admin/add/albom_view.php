<div id="content">

    <h2 id="content_name">Додавання нового альбому</h2>

    <form name="albom" action="" method="post" enctype="multipart/form-data">
        <div id="form">
            <p class="error"><?=$error?></p>
            <p>
                <label for="title"><strong>Назва альбому:</strong></label>
                <input name="title" type="text" id="title" value="<?=set_value('title');?>">
            </p>
            <section class="error"><?=form_error('title');?></section>

            <section class="error"><?=form_error('title_en');?></section>

            <p>
                <input type="submit" value="Додати" name="add">
            </p>

        </div>
    </form>

</div>

