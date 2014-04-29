$(document).ready(function () {

//Button to Top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1100) {
            $('#scroller').fadeIn();
       } else {
            $('#scroller').fadeOut();
        }
    });
    $('#scroller').click(function () {
        $('body,html').animate({scrollTop: 0}, 400);
        return false;
    });

//Calendar
//Rusificator
/*	$.datepicker.regional['ru'] = {
		closeText: 'Закрыть',
		prevText: '&#x3c;Пред',
		nextText: 'След&#x3e;',
		currentText: 'Сегодня',
		monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
		'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
		monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
		'Июл','Авг','Сен','Окт','Ноя','Дек'],
		dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
		dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
		dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
		weekHeader: 'Нед',
		dateFormat: 'dd.mm.yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['ru']);
$( "#datepicker" ).datepicker();*/
//Ukrainian
$.datepicker.regional['ua'] = {
		closeText: 'Закрити',
		prevText: '&#x3c;Попер',
		nextText: 'Наст&#x3e;',
		currentText: 'Сьогодні',
		monthNames: ['Січень','Лютий','Березень','Квітень','Травень','Червень',
		'Липень','Серпень','Вересень','Жовтень','Листопад','Грудень'],
		monthNamesShort: ['Січ','Лют','Бер','Квіт','Трав','Черв',
		'Лип','Серп','Вер','Жовт','Лист','Груд'],
		dayNames: ['неділля','понеділок','вівторок','середа','четвер','пятница','субота'],
		dayNamesShort: ['нед','пнд','втр','срд','чтв','птн','сбт'],
		dayNamesMin: ['Нд','Пн','Вт','Ср','Чт','Пт','Сб'],
		weekHeader: 'Нед',
		dateFormat: 'dd.mm.yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['ua']);
$( "#datepicker" ).datepicker();	
//End calendar

//Main Menu

	//Под мобильные уст-ва
	if(screen.width <= 600) {
		$('.isParent li').unwrap();
		$('.isParent>a').css({
			"background" : "#163B65 url('../img/arrow_down.png') no-repeat center bottom",
			"textTransform" : "uppercase",
			"color" : "#87B6DA"
		});
		$('.isParent li').css({
			"background" : "#87B6DA",
			"border" : "none"
		});
	}
	
	//MENU with hoverIntent Plagin
	/*!
	 * hoverIntent r7 // 2013.03.11 // jQuery 1.9.1+
	 * http://cherne.net/brian/resources/jquery.hoverIntent.html
	 *
	 * You may use hoverIntent under the terms of the MIT license.
	 * Copyright 2007, 2013 Brian Cherne
	 */
	(function(e){e.fn.hoverIntent=function(t,n,r){var i={interval:100,sensitivity:7,timeout:0};if(typeof t==="object"){i=e.extend(i,t)}else if(e.isFunction(n)){i=e.extend(i,{over:t,out:n,selector:r})}else{i=e.extend(i,{over:t,out:t,selector:n})}var s,o,u,a;var f=function(e){s=e.pageX;o=e.pageY};var l=function(t,n){n.hoverIntent_t=clearTimeout(n.hoverIntent_t);if(Math.abs(u-s)+Math.abs(a-o)<i.sensitivity){e(n).off("mousemove.hoverIntent",f);n.hoverIntent_s=1;return i.over.apply(n,[t])}else{u=s;a=o;n.hoverIntent_t=setTimeout(function(){l(t,n)},i.interval)}};var c=function(e,t){t.hoverIntent_t=clearTimeout(t.hoverIntent_t);t.hoverIntent_s=0;return i.out.apply(t,[e])};var h=function(t){var n=jQuery.extend({},t);var r=this;if(r.hoverIntent_t){r.hoverIntent_t=clearTimeout(r.hoverIntent_t)}if(t.type=="mouseenter"){u=n.pageX;a=n.pageY;e(r).on("mousemove.hoverIntent",f);if(r.hoverIntent_s!=1){r.hoverIntent_t=setTimeout(function(){l(n,r)},i.interval)}}else{e(r).off("mousemove.hoverIntent",f);if(r.hoverIntent_s==1){r.hoverIntent_t=setTimeout(function(){c(n,r)},i.timeout)}}};return this.on({"mouseenter.hoverIntent":h,"mouseleave.hoverIntent":h},i.selector)}})(jQuery)
	
	//menu code
	$('.menu_item').hoverIntent(function(){
				$(this).find('.submenu').slideDown(200);
			}, function(){
				$(this).find('.submenu').slideUp(100);	
			});
			
	$('#menu').on('mouseenter', '.isParent', function(){
				var submenu_width = $(this).width();
				$(this).children('ul').css({'position':'absolute', 'marginTop':'-40px', 'marginLeft':submenu_width}).slideDown(100);
			}).on('mouseleave', '.isParent', function(){
				$(this).children('ul').slideUp(50);	
			});
			
	$('.isParent ul').hover(function(){
			$(this).css({'marginTop':'-41px'});
		}, function(){
			$(this).css({'marginTop':'-40px'});
	});

//Languages
$('#languages li.no_activ').hover(function() {
		$(this).css('padding','0');	
	},function() {
		$(this).css('padding','0 0 0 20px');
});
//Languages alert
/**
 * $('#ru').click(function(eventObject) {
 *     eventObject.preventDefault();
 *     alert('Вибачте, сторінки сайту на російській мові знаходяться на стадії розробки');
 * });
 */
$('#uk').click(function(eventObject) {
    eventObject.preventDefault();
    alert('Вибачте, сторінки сайту на англійській мові знаходяться на стадії розробки');
});

//Tabs
$(".tabsholder").tytabs({
    tabinit:"1",
    fadespeed:"fast"
});

//PHOTOGALLERY -----------------------------------------------------------------------------
	function max_Left_scroll(selector){
		var count = 0;
		selector.find('img').each(function(){
			count++;	
		});	
	    
		return 195*(count-4)*(-1);	// 195 - сдвиг, сount - количество всех картинок в даной галерее, 4 количество отображаемых картинок
	}

	function slide_Left(selector){
		var this_Gallery = selector.parent();
		
		this_Gallery.parent();
		
		//alert(parseInt(this_Gallery.find(".gallery-items").css('left')));
		
		var now_Left = parseInt(this_Gallery.find(".gallery-items").css('left'));
		var max_scroll = parseInt( max_Left_scroll( this_Gallery ) );
		//alert(now_Left + " " + max_scroll);
		
		if( now_Left > max_scroll ){
			this_Gallery.find(".gallery-items").animate({left: "-=195px"}, 150);
		} // производим анимацию: блок с набором картинок уедет влево на 222 пикселя (это ширина одного прокручиваемого элемента) за 200 милисекунд.
		
		selector.show(50);
	}
	
	function slide_Right(selector){	
		var this_Gallery = selector.parent();

		if( parseInt( this_Gallery.find(".gallery-items").css('left') ) != 0 ){
			this_Gallery.find(".gallery-items").animate({left: "+=195px"}, 150);
		}
	
		selector.show(50);
	}
	
	$(".gallery-button-right").click(function(){ // при клике на правую кнопку запускаем следующую функцию:	
		$(this).hide(50);			
		slide_Left($(this));			
	});
	
	$(".all_galleries").on('click', '.gallery-button-left', function(){ // при клике на левую кнопку выполняем следующую функцию:	
		$(this).hide(50);
		slide_Right($(this));
	});
	
	//Работа со СЛАЙДЕР-ОКНОМ ГАЛЕРЕИ ------------------------------------------------------
	
	var img_src = Array();  //Массив картинок
	
	function img_src_f(selector){  // Функция формирования массива картинок, передаем массив jquery объектов img,которые находятся в нужной галереи 
		var i = 0; 
			selector.each(function(){
				img_src[i] = $(this).attr('src');
				i++;
			});
		return img_src;  // возвращаем массив картинок
	}
	
	function current_img_f(selector, img_src){ // Функция вычисления номера кликнутого изображения, предаем juery объект - кликнутое изображение, массив картинок
		for(i = 0; i < img_src.length; i++){
				if( img_src[i] == selector.attr('src') ){
					var current_img = i+1;	
					break;
				}	
			}
		return current_img;	 // возвращаем текущее изображение (его номер, НЕ индекс в массиве)
	}
	
	var img_src_attr = $('.photo img');
		
	$('.gallery').on('click', 'img', function(e){
		e.preventDefault();
		
		    img_src = img_src_f( $(this).parent().parent().parent().find('img') );
			var img_count = img_src.length;
			
			$('.img_count').text(img_count);
			$('.img_number').text( current_img_f($(this), img_src) );
		
		var photo_src = $(this).attr('src');
			img_src_attr.attr('src',photo_src);
				
		$('#gallery_window_bg').show();
	});
	
	$('.photo_main_area').on('click', '.photo_button_left', function(e){
		var current_img = parseInt( $('.img_number').text() ) - 1;
		if (current_img != 0){
			$('.img_number').text( current_img );		
			img_src_attr.attr('src', img_src[current_img-1]);
		}
	});
	
	$('.photo_main_area').on('click', '.photo_button_right', function(e){
		var current_img = parseInt( $('.img_number').text() );
		if (current_img != img_src.length){
			$('.img_number').text( current_img + 1);		
			img_src_attr.attr('src', img_src[current_img]);
		}
	});
	
	$('.close').click(function(e){
		e.preventDefault();
		$('#gallery_window_bg').hide(100);	
		$('.img_count').text('');
		$('.img_number').text('');
		img_src = [];
	});

    //TIME TABLE ---- DATE & TIME
    function Today(){
        var current_date = new Date();
        var day = current_date.getDate();
        var month;
        if((current_date.getMonth() + 1) < 10 ){
            month = '0' + (current_date.getMonth() + 1);
        } else {
            month = current_date.getMonth() + 1;
        }
        var year = current_date.getFullYear();
        var hours = current_date.getHours();
        var minutes;
        if((current_date.getMinutes() + 1) < 10 ){
            minutes = '0' + (current_date.getMinutes() + 1);
        } else {
            minutes = current_date.getMinutes() + 1;
        }
        var seconds;
        if((current_date.getSeconds() + 1) < 10 ){
            seconds = '0' + (current_date.getSeconds() + 1);
        } else {
            seconds = current_date.getSeconds() + 1;
        }

        return day + '.' + month + '.' + year  + ' ' + hours + ':' + minutes + ':' + seconds;

        //alert(day + '.' + month + '.' + year  + ' ' + hours + ':' + minutes + ':' + seconds);
    }


    $('input[value="Редагувати"]').hover(function(){
        //alert(day + '.' + month + '.' + year  + ' ' + hours + ':' + minutes + ':' + seconds);
        var today = Today();
        alert(today);
        $('#change_table_date').append('<span>' + today + '</span>');
    });

//ADMIN MENU -------------------------------------------------------------------------------

	$('#admin_menu>ul>li>a').click(function(e) {
		if( $(this).next('ul').length > 0 )
		{		
			e.preventDefault();
			$(this).next('ul').animate({'height':'toggle'}, 100);
		}
	});	
	
	//DEL LIST	
	$(".del_list input").hover(function(){
			$(this).closest('li').css('borderBottom', '2px solid #4879A9');
		}, function(){
			$(this).closest('li').css('borderBottom', '2px solid #FFF');
	});
	
	//DEL CONFIRM WINDOW
	$(".del_list").on('click', 'input[type=submit]', function(e){
		e.preventDefault();
		var name = $(this).parent().parent().find('em').text();
			$(".confirm_window_content em").text(name);
		var id_form = $(this).next('input').val();
			$("#confirm_delete_window input[type=hidden]").val(id_form);
			$("#confirm_delete_window").show(100);
	});
	
	// Если нажать на крестик или отмену
		$("#confirm_delete_window").on("click", ".confirm_window_header span, input[value^='В']", function(){
			$(".confirm_window_content em").text('');
			$("#confirm_delete_window").hide(100);
		});
		
	// Если нажать на Да
    $("#confirm_delete_window").on("click", "input[value^='Так']", function(){
		var form_id = $(this).parent().find("input[type=hidden]").val();
			$('#' + form_id).submit();
	});

    //ERROR MESSAGES
    $("#form section.error:visible").find('p').css('display','table-cell');


    //NEWS
    $('.news li:even').addClass('left_News'); //добовляем класс для выравнивания нечетных блоков

    var nFull;

    $(function shorting_news () {
        nShort = $("section[id^=news-id-] article.nShort");
        nShort.each(function () {
            $(this).replaceWith("<article class='nShort'>" + $(this).text().substr(0,700) + "&hellip;</article>");
        }); // Заменяем блок с полной новостью на блок с краткой новостью и добовляем троеточие вконце
    });

    $('.news_block section').hover(function(){
        $(this).css('zIndex','9999');
        $(this).find('.nShort').hide();
        $(this).find('.nFull').show();
    }, function(){
        $(this).find('.nFull').hide();
        $(this).find('.nShort').show();
        $(this).css('zIndex','1');
    });

    //NEWS VIEW
    var flag = true;
    $('.show_as span').click(function(){
        var news_list = $('#news_list');
        if(flag == true){
            $(this).text('блоками');
            news_list.removeClass('view_blocks');
            news_list.addClass('view_list');
            flag = false;
        } else{
            $(this).text('списком');
            news_list.removeClass('view_list');
            news_list.addClass('view_blocks');
            flag = true;
        }
    });

    //NEWS WINDOW
    $('#news_list').on('click', 'li', function(){
        var news_window = $('#news_window');
        var news_title = $(this).find('h3').text();
        var news_article = $(this).find('.nFull').html();
        var news_date_time = $(this).find('.date_time').text();

        news_window.find('h2').append(news_title);
        news_window.find('.news_window_content').append(news_article).append('<p class="date_time">' + news_date_time + '</p>');

        $('#news_window_bg').show(100);
    });


}); //Конец ready