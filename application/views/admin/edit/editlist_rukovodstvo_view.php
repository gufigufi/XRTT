<div id="content">

    <h2 id="content_name">Редагування керівника</h2>
	
	<div class="edit_list">
		<h3>Оберіть потрібного керівника зі списку </h3>
		<ul class="edit_list">
            <? foreach($edit as $item):?>
                <li><a href="<?=base_url();?>index.php/admin/edit/<?=$page;?>/<?=$item['id'];?>"><?=$item['dolgnost'];?></a></li>
            <?endforeach;?>
		</ul>
	</div>
</div> 