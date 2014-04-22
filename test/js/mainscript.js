$(document).ready(function () {


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
    tabinit:"2",
    fadespeed:"fast"
});


//ADMIN MENU

$('#admin_menu ul li a').click(function(e) {
	e.preventDefault();
	$(this).next().animate({'height':'toggle'}, 100);
});	

    
    
    
}); //Конец ready