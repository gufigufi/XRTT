<div id="content">
    <h2 id="content_name">Группа <?=$vipusknik['group'];?></h2>
	<div id="vipusknik_full">
        <h3>Відділення: <span><?=$vipusknik['otdelenie'];?></span></h3>
        <h3>Спеціальність: <span><?=$vipusknik['spetsialnost'];?></span></h3>
        <h3>Группа: <span><?=$vipusknik['group'];?></span></h3>
        <h3>Класний керівник: <span><?=$vipusknik['kl_rukovod'];?></span></h3>
        <h3>Рік вступу: <span><?=$vipusknik['data_date'];?></span></h3>
        <h4>Фото:</h4>
        <p><img src="<?=base_url();?>images/vipusknik/<?=$vipusknik['img'];?>" alt="<?=$vipusknik['group'];?>"></p>
        <h4>Перечінь студентів:</h4>
        <p><?=$vipusknik['spisok'];?></p>
	</div>
</div>