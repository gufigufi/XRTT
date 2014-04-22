<div id="content">
    <h2 id="content_name">Группа <?=$pervokursnik['group'];?></h2>
	<div id="pervokursnik_full">
        <h3>Відділення: <span><?=$pervokursnik['otdelenie'];?></span></h3>
        <h3>Спеціальність: <span><?=$pervokursnik['spetsialnost'];?></span></h3>
        <h3>Группа: <span><?=$pervokursnik['group'];?></span></h3>
        <h3>Класний керівник: <span><?=$pervokursnik['kl_rukovod'];?></span></h3>
        <h3>Рік вступу: <span><?=$pervokursnik['date'];?></span></h3>
        <h4>Фото:</h4>
        <p><img src="<?=base_url();?>images/first_course/<?=$pervokursnik['img'];?>" alt="<?=$pervokursnik['group'];?>"></p>
        <h4>Перечінь студентів:</h4>
        <p><?=$pervokursnik['spisok'];?></p>
	</div>
</div>