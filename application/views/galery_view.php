<div id="content">
    <h2 id="content_name">Фотогалерея технікуму</h2>
    <div class="all_galleries" onmousedown="return false" onselectstart="return false">
        <?php foreach($albom as $item1):?>
                <h2><?=$item1['title'];?></h2> <!-- Заголовок Фотогалереи -->

                <div class="gallery"> <!-- контейнер, в котором будет карусель -->

                    <div class="gallery-button-left"></div> <!-- левая кнопка -->
                    <div class="gallery-button-right"></div> <!-- правая кнопка -->

                    <div class="gallery-wrapper"> <!-- видимая область карусели -->
                        <ul class="gallery-items"> <!-- весь набор элементов карусели -->
                            <?php foreach($photo as $item2):
                            if($item1['id'] == $item2['id_albom']){
                            ?>
                                <li class="gallery-block"> <!-- первый элемент карусели -->
                                    <a href="#" class="gallery-image-link">
                                        <img src="<?=base_url();?>images/galery/<?echo $item1['title_en'].'/'.$item2['img'];?>" alt="" />
                                    </a>
                                </li>
                            <?
                             }
                            endforeach?>
                        </ul>
                    </div>
                </div>
        <?endforeach?>
    </div>

        <?=$this->pagination->create_links();?>

</div>





<section id="gallery_window_bg" onmousedown="return false" onselectstart="return false">
    <section id="gallery_window">

        <div class="photo_header">
            <p class="photo_title">Изображение <span class="img_number"></span>/<span class="img_count"></span></p>
            <p class="close"><a href="#" title="Закрыть"></a></p>
        </div>

        <div class="photo_main_area">
            <table>
                <tr>
                    <td class="photo_button_left"><div></div></td>
                    <td class="photo"><img src="" alt=""></td>
                    <td class="photo_button_right"><div></div></td>
                </tr>
            </table>
        </div>

    </section>
</section>

