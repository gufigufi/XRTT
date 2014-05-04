    <div id="news" class="side_block">
        <h2>ПОДІЇ ТА НОВИНИ</h2>
        <marquee id="vertical_scrol" behavior="scroll" scrollAmount="2" direction="up" onmouseover='this.stop()' onmouseout='this.start()'>
            <?php foreach($news_left as $item):?>
                <p><?=$item['title'];?></p>
            <?endforeach;?>
        </marquee>
        <p id="sbb"><a href="<?=base_url();?>index.php/news">всі новини та події технікуму</a></p>
    </div>
    <div class="side_block">
        <h2>ТЕЛЕФОНИ</h2>
        <p id="telefon"><strong>731-17-11</strong> (Приймальня директра)<br />
            <strong>731-25-22</strong> (Заступник директра з НР)<br />
            <strong>731-22-81</strong> (Заступник директра з ВР)<br />
            <strong>731-15-44</strong> (Методист)
        </p>
        <p id="telephone_directory"><a href="<?=base_url();?>index.php/pages/page/telephone_directory">Телефонний довідник технікуму</a></p>
    </div>
    <div class="side_block">
        <div id="calendar" class="demo">
            <div id="datepicker"></div>
        </div>
    </div>
    <div id="links" class="side_block">
        <h2>ПОСИЛАННЯ</h2>
        <a target="_blank" href="http://www.mon.gov.ua/" title="Міністерство освіти і науки України"><img src="<?=base_url();?>images/links/mon.jpg" /></a>
        <a target="_blank" href="http://www.guonkh.gov.ua/" title="Департамент науки і освіти Харківської обласної державної адміністрації"><img src="<?=base_url();?>images/links/dnokh.jpg" alt="Департамент науки і освіти Харківської обласної державної адміністрації" /></a>
        <a target="_blank" href="http://www.vstup.info/" title="Інформаційна система «Конкурс»"><img src="<?=base_url();?>images/links/vstup_info.jpg" alt="Інформаційна система «Конкурс»" /></a>
        <a target="_blank" href="http://pedpresa.com.ua"><img src="<?=base_url();?>images/links/ped_presa.gif" title="Освітній портал - ПедПРЕСА" alt="Освітній портал ПедПреса" /></a>
        <a target="_blank" href="http://zno-kharkiv.org.ua" title="Харківський регіональний центр оцінювання якості освіти"><img src="<?=base_url();?>images/links/khzno.jpg" /></a>
        <a target="_blank" href="http://www.dcz.gov.ua/kha/" title="Харківський регіональний центр зайнятості"><img src="<?=base_url();?>images/links/khrcz.jpg" /></a>
        <a target="_blank" href="http://www.osvita.ua/" title="Освітa в Україні"><img src="<?=base_url();?>images/links/osvita_ua.jpg" alt="Освітa в Україні" /></a>
        <a target="_blank" href="http://www.osvita.org.ua/" title="Освітній портал - все про освіту в Україні"><img src="<?=base_url();?>images/links/osvitaPortal.jpg" alt="Освітній портал" /></a>
        <a target="_blank" href="http://www.khai.edu/" title="Національний аерокосмічний університет ім. М.Є.Жуковського"><img src="<?=base_url();?>images/links/khai.jpg" /></a>
        <a target="_blank" href="http://www.nure.ua/" title="Харківський національний університет радіоелектроніки"><img src="<?=base_url();?>images/links/knure.jpg" /></a>
        <a target="_blank" href="http://www.kpi.kharkov.ua/" title="Національний технічний університет «ХПІ»"><img src="<?=base_url();?>images/links/khpi.jpg" /></a>
        <a target="_blank" href="http://www.univer.kharkov.ua/" title="Харківський національний університет імені В.Н.Каразіна"><img src="<?=base_url();?>images/links/karazina.jpg" /></a>
    </div>
    <div id="dpi" class="side_block">
        <h2>НОВИНИ ДПІ</h2>
        <p><a href="dpi.php">ДПІ у Київському районі м.Харкова Харківської обласної<br />Державної податкової служби</a></p>
    </div>
    <div id="statistics" class="side_block">
        <h2>СТАТИСТИКА</h2>
        <div id="MyCounter">
            <!-- MyCounter v.2.0 -->
            <script type="text/javascript"><!--
                my_id = 113401;
                my_width = 88;
                my_height = 58;
                my_alt = "MyCounter - счётчик и статистика";
                //--></script>
            <script type="text/javascript"
                    src="http://scripts.mycounter.ua/counter2.0.js">
            </script><noscript>
                <a target="_blank" href="http://mycounter.ua/"><img
                        src="http://get.mycounter.ua/counter.php?id=113401"
                        title="MyCounter - счётчик и статистика"
                        alt="MyCounter - счётчик и статистика"
                        width="88" height="51" border="0" /></a></noscript>
            <!--/ MyCounter -->
        </div>
        <div id="bigmir">
            <!--bigmir)net TOP 100-->
            <script type="text/javascript" language="javascript"><!--
                function BM_Draw(oBM_STAT){
                    document.write('<table cellpadding="0" cellspacing="0" border="0" style="display:inline;margin-right:0;"><tr><td><div style="margin:0;padding:0;font-size:1px;width:88px;"><div style="background:url(\'http://i.bigmir.net/cnt/samples/diagonal/b59_top.gif\') no-repeat top;height:1px;line-height:1px;"> </div><div style="font:10px Tahoma;text-align:center;background-color:#EFEFEF;height:9px;"><a href="http://www.bigmir.net/" target="_blank" style="color:#0000ab;text-decoration:none;">bigmir<span style="color:#ff0000;">)</span>net</a></div><div style="height:1px;background:url(\'http://i.bigmir.net/cnt/samples/diagonal/b59_top.gif\') no-repeat bottom;"></div><div style="font:10px Tahoma;padding-left:7px;background:url(\'http://i.bigmir.net/cnt/samples/diagonal/b59_center.gif\');"><div style="padding:4px 6px 0 0;"><div style="float:left;color:#969696;">хиты</div><div style="float:right;color:#003596;font:10px Tahoma;">'+oBM_STAT.hits+'</div></div><br clear="all" /><div style="padding-right:6px;"><div style="float:left;color:#969696;">хосты</div><div style="float:right;color:#003596;font:10px Tahoma;">'+oBM_STAT.hosts+'</div></div><br clear="all" /><div style="padding-right:6px;"><div style="float:left;color:#969696;">всего</div><div style="float:right;color:#003596;font:10px Tahoma;">'+oBM_STAT.total+'</div></div><br clear="all" /><div style="height:3px;"></div></div><div style="background:url(\'http://i.bigmir.net/cnt/samples/diagonal/b59_bottom.gif\') no-repeat top;height:2px;line-height:1px;"> </div></div></td></tr></table>');
                }
                //-->
            </script>
            <script type="text/javascript" language="javascript"><!--
                bmN=navigator,bmD=document,bmD.cookie='b=b',i=0,bs=[],bm={o:1,v:16890682,s:16890682,t:0,c:bmD.cookie?1:0,n:Math.round((Math.random()* 1000000)),w:0};
                for(var f=self;f!=f.parent;f=f.parent)bm.w++;
                try{if(bmN.plugins&&bmN.mimeTypes.length&&(x=bmN.plugins['Shockwave Flash']))bm.m=parseInt(x.description.replace(/([a-zA-Z]|\s)+/,''));
                else for(var f=3;f<20;f++)if(eval('new ActiveXObject("ShockwaveFlash.ShockwaveFlash.'+f+'")'))bm.m=f}catch(e){;}
                try{bm.y=bmN.javaEnabled()?1:0}catch(e){;}
                try{bmS=screen;bm.v^=bm.d=bmS.colorDepth||bmS.pixelDepth;bm.v^=bm.r=bmS.width}catch(e){;}
                r=bmD.referrer.replace(/^w+:\/\//,'');if(r&&r.split('/')[0]!=window.location.host){bm.f=escape(r).slice(0,400);bm.v^=r.length}
                bm.v^=window.location.href.length;for(var x in bm) if(/^[ovstcnwmydrf]$/.test(x)) bs[i++]=x+bm[x];
                bmD.write('<sc'+'ript type="text/javascript" language="javascript" src="http://c.bigmir.net/?'+bs.join('&')+'"></sc'+'ript>');
                //-->
            </script>
            <noscript>
                <a href="http://www.bigmir.net/" target="_blank"><img src="http://c.bigmir.net/?v16890682&s16890682&t2" width="88" height="31" alt="bigmir)net TOP 100" title="bigmir)net TOP 100" border="0" /></a>
            </noscript>
            <!--bigmir)net TOP 100-->
        </div>
        <div id="LiveInternet">
            <!--LiveInternet counter-->
            <script type="text/javascript"><!--
                document.write("<a href='http://www.liveinternet.ru/click' "+
                    "target=_blank><img src='//counter.yadro.ru/hit?t17.16;r"+
                    escape(document.referrer)+((typeof(screen)=="undefined")?"":
                    ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                        screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                    ";"+Math.random()+
                    "' alt='' title='LiveInternet: показано число просмотров за 24"+
                    " часа, посетителей за 24 часа и за сегодня' "+
                    "border='0' width='88' height='31'><\/a>")
                //--></script>
            <!--/LiveInternet-->
        </div>
    </div>
    <div id="scroller" class="b-top" style="display: none;"><span class="b-top-but">вгору </span></div>
</div>