<div id="content">

    <h2 id="content_name">Редагування сторінок</h2>
	
	<div class="edit_list">
		<h3>Оберіть потрібну сторінку зі списку </h3>
		<ul class="edit_list">
            <? foreach($edit as $item):?>
            <li><a href="<?=base_url();?>index.php/admin/edit/<?=$page;?>/<?=$item['id'];?>"><?echo $item['title'];?></a></li>
            <?endforeach;?>
		</ul>
	</div> 
</div> 