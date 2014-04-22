<div id="content">

    <h2 id="content_name">Додавання іменного стипендіата</h2>
	
	<form name="registered_fellows" action="" method="post" enctype="multipart/form-data">
		<div id="form">
			<p>
				<label for="fio"><strong>ФІО:</strong></label>
				<input name="fio" type="text" id="fio" value="<?=set_value('fio');?>">
			</p>
			<section class="error"><?=form_error('fio');?></section>

            <p>
                <label for="zasluga"><strong>Досягнення:</strong></label>
                <input name="zasluga" type="text" id="zasluga" value="<?=set_value('zasluga');?>">
            </p>
            <section class="error"><?=form_error('zasluga');?></section>

			<p>
				<label for="otdelenie"><strong>Відділення:</strong></label>
				<input name="otdelenie" type="text" id="otdelenie" value="<?=set_value('otdelenie');?>">
			</p>
			<section class="error"><?=form_error('otdelenie');?></section>
			
			<p>
				<label for="spetsialnost"><strong>Спеціальність:</strong></label>
				<input name="spetsialnost" type="text" id="spetsialnost" value="<?=set_value('spetsialnost');?>">
			</p>
			<section class="error"><?=form_error('spetsialnost');?></section>
			
			<p>
				<label for="date_v"><strong>Рік вступу:</strong></label>
				<input name="date_v" type="number" id="date_v" value="<?=set_value('date_v');?>">
			</p>
			<section class="error"><?=form_error('date_v');?></section>
			
			<p>
				<label for="date_o"><strong>Рік закінчення:</strong></label>
				<input name="date_o" type="number" id="date_o" value="<?=set_value('date_o');?>">
			</p>
			<section class="error"><?=form_error('date_o');?></section>
			
			<p>
				<label for="group"><strong>Група:</strong></label>
				<input name="group" type="text" id="group" value="<?=set_value('group');?>">
			</p>
			<section class="error"><?=form_error('group');?></section>
			
			<p>
				<label for="info"><strong>Інформація:</strong></label>
                <textarea name="info" rows="7" id="info"><?=set_value('info');?></textarea>
			</p>
			<section class="error"><?=form_error('info');?></section>
			
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

