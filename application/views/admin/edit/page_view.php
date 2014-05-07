<div id="content">

    <h2 id="content_name">Редагування сторінки</h2>
	
	<form name="page" action="" method="post" enctype="multipart/form-data"> 
		<div id="form">
            <p class="big_redactor">
                <textarea name="text" rows="50" id="info"><?=$pages_info['text'];?></textarea>
            </p>
			<section class="error"><?=form_error('info');?></section>
            <?$d = time() + (10800);?>
            <input type="hidden" name="date"  value="<?=date('Y-m-d H:i:s',$d);?>"/>
			<p>
				<input type="submit" value="Редагувати" name="edit">
			</p>
			
		</div>
	</form>
    <script type="text/javascript">
        CKEDITOR.replace('info');
    </script>

</div>