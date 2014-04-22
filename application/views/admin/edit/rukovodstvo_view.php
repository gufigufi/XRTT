<div id="content">

    <h2 id="content_name">Редагування керівника</h2> 
    <form name="rukavodstvo" action="" method="post" enctype="multipart/form-data">
		<div id="form">
			<p>
				<label for="dolgnost"><strong>Посада:</strong></label>
				<input name="dolgnost" type="text" id="dolgnost" value="<?=$pages_info['dolgnost'];?>">
			</p>			
			<section class="error"><?=form_error('dolgnost');?></section>

            <p>
				<label for="fio"><strong>ФІО:</strong></label>
				<input name="fio" type="text" id="fio" value="<?=$pages_info['fio'];?>">
			</p>
			<section class="error"><?=form_error('fio');?></section>
			
			<p>
				<label for="info"><strong>Загальна інформація:</strong></label>
				<textarea name="info" rows="7" id="info"><?=$pages_info['info'];?></textarea>
			</p>			
			<section class="error"><?=form_error('info');?></section>
			
			<p>
				<label for="kontact"><strong>Контакна інформація:</strong></label>
				<textarea name="kontact" rows="3" id="kontact"><?=$pages_info['kontact'];?></textarea>
			</p>
			<section class="error"><?=form_error('kontact');?></section>
			
			<p>
				<label for="vopros"><strong>Прийом:</strong></label>
				<textarea name="vopros" rows="3" id="vopros"><?=$pages_info['vopros'];?></textarea>
			</p>
			<section class="error"><?=form_error('vopros');?></section>

			<p>
				<label for="img"><strong>Фото:</strong></label>
				<img class="photo_upload" alt="<?=$pages_info['dolgnost'];?>" src="<?=base_url();?>images/management/<?=$pages_info['img'];?>">
                <input name="userfile" type="file" id="img">
			</p>
			<section class="error"><?=$error;?></section>
			
			<p>	
                <input type="submit" value="Редагувати" name="edit">
            </p>  
            
		</div>
	</form>
	
    <script type="text/javascript">
        CKEDITOR.replace('info');
    </script>

</div>