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

            <p>
                <label for="title_en" title="Тільки латинські символи, цифри та знаки підкреслювання" ><strong>Назва каталогу:</strong></label>
                <input name="title_en" type="text" id="title_en" value="<?=set_value('title_en');?>" title="Тільки латинські символи, цифри та знаки підкреслювання" >
            </p>
            <section class="error"><?=form_error('title_en');?></section>

            <p>
                <input type="submit" value="Додати" name="add">
            </p>

        </div>
    </form>

</div>

