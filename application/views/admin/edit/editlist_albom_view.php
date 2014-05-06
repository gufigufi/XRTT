<div id="content">

    <h2 id="content_name">Редагування альбомів</h2>
	
	<div class="edit_list">
		<h3>Оберіть потрібний альбом зі списку </h3>
		<ul class="edit_list">
            <? foreach($edit as $item):
                if(!$del_photo){?>
                <li><a href="<?=base_url();?>index.php/admin/add_photo/<?=$item['id'];?>"><?echo $item['title'];?></a></li>
            <?}
            else {?>
                <li><a href="<?=base_url();?>index.php/admin/del_photo/<?=$item['id'];?>"><?echo $item['title'];?></a></li>
            <?
            }
            endforeach;?>
		</ul>
	</div> 
</div> 