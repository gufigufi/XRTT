<div id="content">
    <h2 id="content_name"><?=$pages_info['title'];?></h2>
	<div id="best_students">
		<ul>
			<?php foreach($best as $item):?>
				<li>
					<img src="<?=base_url();?>images/best_students/<?=$item['img'];?>" alt="<?=$item['familia'];?> <?=$item['name']?>" />
                            <h2><?=$item['familia'];?> <br/> <?=$item['name'];?></h2>
							<h3><?=$item['group'];?></h3>
                </li>		
			<?endforeach?>
		</ul>
	</div>
</div>