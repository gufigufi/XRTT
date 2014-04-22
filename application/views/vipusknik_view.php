<div id="content">
    <h2 id="content_name"><?=$pages_info['title'];?></h2>
	<div id="vipusknik">
		<ul>
			<?php foreach($vipusknik as $item):?>
				<li>
					<h2>Группа <?=$item['group'];?></h2>
					<h3>Класний керівник - <?=$item['kl_rukovod'];?></h3>
                    <a href="<?=base_url();?>index.php/vipusknik/vipusknik_full/<?=$item['id'];?>">
                        <img src="<?=base_url();?>images/vipusknik/<?=$item['img'];?>" alt="<?=$item['group'];?>">
                    </a>
                    <p><a href="<?=base_url();?>index.php/vipusknik/vipusknik_full/<?=$item['id'];?>">Детальніше </a></p>
                </li>		
			<?endforeach?>
		</ul>
	</div>
</div>