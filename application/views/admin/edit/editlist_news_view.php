<div id="content">

    <h2 id="content_name">Редагування подій та новин</h2>
	
	<div class="edit_list" id="edit_news">
		<h3>Оберіть потрібну новину зі списку </h3>
		<ul class="edit_list">
            <? foreach($edit as $item):?>
                <li><a href="<?=base_url();?>index.php/admin/edit/<?=$page;?>/<?=$item['id'];?>"><?=$item['title'];?> - <span><?=$item['data_date'];?></span></a></li>
            <?endforeach;?>
		</ul>
	</div>
</div> 