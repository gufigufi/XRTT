<div id="content">

    <h2 id="content_name">Редагування іменних стипендіатів</h2>
	
	<div class="edit_list">
		<h3>Оберіть потрібного студента зі списку</h3>
		<ul class="registered_fellows">
            <? foreach($edit as $item):?>
                <li>
                    <a href="<?=base_url();?>index.php/admin/edit/<?=$page;?>/<?=$item['id'];?>">
                        <img class="photo_upload" alt="<?=$item['fio'];?>" src="<?=base_url();?>images/reg_fel/<?=$item['img'];?>" >
                        <?=$item['fio'];?>
                    </a>
                </li>
            <?endforeach;?>
		</ul>
	</div> 
</div> 