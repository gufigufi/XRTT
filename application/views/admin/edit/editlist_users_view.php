<div id="content">

    <h2 id="content_name">Редагування адміністраторів</h2>
	
	<div class="edit_list">
		<h3>Оберіть потрібного адміністратора зі списку </h3>
		<ul class="edit_list admins">
            <? foreach($edit as $item):?>
            <li>
                <a href="<?=base_url();?>index.php/admin/edit_admin/<?=$item['id'];?>"><strong><?echo $item['username']?> - </strong> <em><?echo $item['title'];?></em></a>
            </li>
            <?endforeach;?>
		</ul>
	</div> 
</div> 