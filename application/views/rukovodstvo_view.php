<div id="content">
    <h2 id="content_name">Керівництво технікуму</h2>
    <?php foreach($rukovodstvo as $item):?>
        <div class="management">
            <img class="photo_left" src="<?=base_url();?>images/management/<?=$item['img'];?>" alt="<?=$item['fio']; ?>"/>
            <h2><?=$item['dolgnost'];?></h2>
            <h2><?=$item['fio'];?></h2>
            <?=$item['info'];?>
            <p><strong>Контактна інформація:</strong><br /><?=$item['kontact'];?></p>
            <p><strong>Прийом з особистих питань:</strong><br /><?=$item['vopros'];?></p>
        </div>
    <?endforeach?>
    
</div>