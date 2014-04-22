<div id="content">

    <h2 id="content_name">Редагування кращих студентів</h2>
	
	<div class="edit_list">
		<h3>Оберіть потрібного студента зі списку </h3>
		<ul class="edit_list">
            <? foreach($edit as $item):?>
            <li>
                <a href="<?=base_url();?>index.php/admin/edit/<?=$page;?>/<?=$item['id'];?>"><?echo $item['familia'].' '.$item['name'].' '.$item['group'];?></a>
            </li>
            <?endforeach;?>
		</ul>
	</div> 
</div> 