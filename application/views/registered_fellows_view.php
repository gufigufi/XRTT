<div id="content">
    <h2 id="content_name">Іменні степендіати</h2>
    <div id="registered_fellows">
    <?php foreach($stependiat as $item):?>
        <div class="rf">
            <img class="photo_left" src="<?=base_url();?>images/reg_fel/<?=$item['img']?>" alt="<?=$item['fio'];?>" />
            <h2><?=$item['fio'];?></h2>
            <?=$item['zasluga'];?>
            <p>Відділення: "<?=$item['otdelenie'];?>"</p>
            <p>Спеціальність: "<?=$item['spetsialnost'];?>"</p>
            <p>Рік вступу до технікуму: <?=$item['date_v'];?> рік</p>
            <p>Рік закінчення технікуму: <?=$item['date_o'];?> рік</p>
            <p>Група: <?=$item['group'];?></p>
            <?=$item['info'];?>
        </div>
    <?endforeach?>
    </div>
