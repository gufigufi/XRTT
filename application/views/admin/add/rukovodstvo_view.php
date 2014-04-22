<div id="content">

    <h2 id="content_name">Додавання керівника</h2>
	
	<form name="rukavodstvo" action="" method="post" enctype="multipart/form-data">
		<div id="form">
			<p>
				<label for="dolgnost"><strong>Посада:</strong></label>
				<input name="dolgnost" type="text" id="dolgnost" value="<?=set_value('dolgnost');?>">
			</p>			
			<section class="error"><?=form_error('dolgnost');?></section>
			
			<p>
				<label for="fio"><strong>ФІО:</strong></label>
				<input name="fio" type="text" id="fio" value="<?=set_value('fio');?>">
			</p>
			<section class="error"><?=form_error('fio');?></section>
			
			<p>
				<label for="info"><strong>Загальна інформація:</strong></label>
				<textarea name="info" rows="7" id="info"><?=set_value('info');?></textarea>
			</p>			
			<section class="error"><?=form_error('info');?></section>
			
			<p>
				<label for="kontact"><strong>Контакна інформація:</strong></label>
				<textarea name="kontact" rows="3" id="kontact"><?=set_value('kontact');?></textarea>
			</p>
			<section class="error"><?=form_error('kontact');?></section>
			
			<p>
				<label for="vopros"><strong>Прийом:</strong></label>
				<textarea name="vopros" rows="3" id="vopros"><?=set_value('vopros');?></textarea>
			</p>
			<section class="error"><?=form_error('vopros');?></section>
			
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
    
    <script type="text/javascript">
        CKEDITOR.replace('info');
    </script>

</div>