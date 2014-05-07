<div id="content">

    <h2 id="content_name">Додавання події чи новини</h2>
	
	<form name="rukavodstvo" action="" method="post" enctype="multipart/form-data">
		<div id="form">
			<p>
				<label for="title"><strong>Заголовок:</strong></label>
				<input name="title" type="text" id="title" value="<?=set_value('title');?>">
			</p>			
			<section class="error"><?=form_error('title');?></section>

			<p>
				<label for="text"><strong>Інформація:</strong></label>
				<textarea name="text" rows="7" id="text"><?=set_value('text');?></textarea>
			</p>			
			<section class="error"><?=form_error('text');?></section>

			<p>
                <?$d = time() + (10800);?>
                <input type="hidden" value="<?= date('Y-m-d H:i:s',$d);?>" name="data_date"/>
				<input type="submit" value="Додати" name="add">
			</p>
			
		</div>
	</form>
    
    <script type="text/javascript">
        CKEDITOR.replace('text');
    </script>

</div>