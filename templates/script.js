function getCoords(elem) {
    var box = elem.getBoundingClientRect();

    var body = document.body;
    var docElem = document.documentElement;

    var scrollTop = window.pageYOffset || docElem.scrollTop || body.scrollTop;
    var scrollLeft = window.pageXOffset || docElem.scrollLeft || body.scrollLeft;

    var clientTop = docElem.clientTop || body.clientTop || 0;
    var clientLeft = docElem.clientLeft || body.clientLeft || 0;

    var top  = box.top +  scrollTop - clientTop;
    var left = box.left + scrollLeft - clientLeft;

    return { top: Math.round(top), left: Math.round(left) };
}

/**
 * Проверяет элемент на попадание в видимую часть экрана.
 * Для попадания достаточно, чтобы верхняя или нижняя границы элемента были видны.
*/
function isVisible(elem) {

	var coords = getCoords(elem);
	var windowTop = window.pageYOffset || document.documentElement.scrollTop;
	var windowBottom = windowTop + document.documentElement.clientHeight;

	coords.bottom = coords.top + elem.offsetHeight;

	// верхняя граница elem в пределах видимости ИЛИ нижняя граница видима
	var topVisible = coords.top > windowTop && coords.top < windowBottom;
	var bottomVisible = coords.bottom < windowBottom && coords.bottom > windowTop;

	return topVisible || bottomVisible;
}

function showVisible() {
	var imgs = document.getElementsByTagName('img');
	for(var i=0; i<imgs.length; i++) {

		var img = imgs[i];

		var realsrc = img.getAttribute('data-src');
		if (!realsrc) continue;

		if (isVisible(img)) {
			img.src = realsrc;
			img.setAttribute('data-src', '');
		}
	}

}
window.onscroll = showVisible

// Добавить в Избранное 
function add_favorite(a) { 
  yaCounter24093889.reachGoal('favorite');
  title=document.title; 
  url=document.location; 
  try { 
	// Internet Explorer 
	window.external.AddFavorite(url, title); 
  } 
  catch (e) { 
	try { 
	  // Mozilla 
	  window.sidebar.addPanel(title, url, ""); 
	} 
	catch (e) { 
	  // Opera 
	  if (typeof(opera)=="object") { 
		a.rel="sidebar"; 
		a.title=title; 
		a.url=url; 
		return true; 
	  } 
	  else { 
		// Unknown 
		alert('Нажмите Ctrl-D чтобы добавить страницу в закладки'); 
	  } 
	} 
  }  
return false;
}

function share(service) {
	switch (service) {
		case 1:
			service = 'facebook';
			break
		case 2:
			service = 'gplus';
			break
		case 3:
			service = 'odnoklassniki';
			break
		case 4:
			service = 'twitter';
			break
		case 5:
			service = 'vkontakte';
			break
		default:
			service = 'vkontakte';
			break
	}

	var leftvar = (screen.width-626)/2;
	var topvar = (screen.height-436)/2;
	var title = document.title; 
	var url = document.location; 
	var request = 'http://share.yandex.ru/go.xml?service='+service+'&url='+url+'&title='+title; 
	window.open(request,'',"left="+leftvar+",top="+topvar+",toolbar=0,status=0,width=626,height=436");

	return false; 
}

function preload(sort) {
	/* Переменная-флаг для отслеживания того, происходит ли в данный момент ajax-запрос. В самом начале даем ей значение false, т.е. запрос не в процессе выполнения */    
	var inProgress = false;
	/* С какой статьи надо делать выборку из базы при ajax-запросе */ 
	var startFrom = 25;
    /* Используйте вариант $('#more').click(function() для того, чтобы дать пользователю возможность управлять процессом, кликая по кнопке "Дальше" под блоком статей (см. файл index.php) */
    $(window).scroll(function() {
		/* Если высота окна + высота прокрутки больше или равны высоте всего документа и ajax-запрос в настоящий момент не выполняется, то запускаем ajax-запрос */
        if($(window).scrollTop() + $(window).height() >= ($(document).height()-300) && !inProgress) {
        $.ajax({            
            /* адрес файла-обработчика запроса */
            url: '/obrabotchik.php',
            /* метод отправки данных */
            method: 'POST',
            /* данные, которые мы передаем в файл-обработчик */
            data: {"startFrom" : startFrom, "sort" : sort},
            /* что нужно сделать до отправки запрса */
            beforeSend: function() {
            /* меняем значение флага на true, т.е. запрос сейчас в процессе выполнения */
            inProgress = true;}
            /* что нужно сделать по факту выполнения запроса */            
            }).done(function(data){
            /* Преобразуем результат, пришедший от обработчика - преобразуем json-строку обратно в массив */ 
            data = jQuery.parseJSON(data); 
            /* Если массив не пуст (т.е. статьи там есть) */
            if (data && data.length > 0) {
            /* Делаем проход по каждому результату, оказвашемуся в массиве,
            где в index попадает индекс текущего элемента массива, а в data - сама статья */                 
            $.each(data, function(index, data){
            /* Отбираем по идентификатору блок со статьями и дозаполняем его новыми данными */
            $("#no-size-content").append(data); showVisible();
            });
            /* По факту окончания запроса снова меняем значение флага на false */
            inProgress = false;
            // Увеличиваем на 10 порядковый номер статьи, с которой надо начинать выборку из базы
            startFrom += 25;
            }});   
        }
    });
}

function totop() {
	// скрол к верху
	$("body").animate({"scrollTop":0},"slow");
}

jQuery(function () {
	/*
	$("a.box img").each(function (i) {
		$(this).attr('data-src',$(this).attr('src'));
		$(this).attr('src',"/templates/images/nopgoto.png");
	});
	
	showVisible();
	//$("a.box img").attr({src : '/templates/images/nopgoto.png'});//.each(function (i) {$("a.box img")});
	*/
	
	// Прокручиваем закладки 
	var bxh = $("#bx-panel").height();
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();
		if(scroll < 46 + bxh) {
			$("#share").css('top',100 + bxh - scroll);
		} else {
			$("#share").css('top',54);
		}
	});

	// Добавляем соц. панель
	$("#no-size-content").prepend('<span id="share" style="background-color: rgba(255, 255, 255, 1);box-shadow: 0 0 5px #333;border-radius:5px;padding: 5px;position: fixed; margin-right: 1%; right: 0px; z-index: 900; top: 100px;"><span class="share-item" style="display:block;white-space:no-wrap;margin:0 0 6px;height:32px;"><a rel="nofollow" style="display:inline-block;vertical-align:top;width:32px;height:32px;margin:0;padding:0;outline:none;background:url(/templates/images/icons.png) -0px 0 no-repeat" href="#" data-count="fb" onclick="share(1);yaCounter24093889.reachGoal(\'facebook\');return false;" title="Поделиться в Facebook" target="_blank"></a></span><span class="share-item" style="display:block;white-space:no-wrap;margin:0 0 6px;height:32px;"><a rel="nofollow" style="display:inline-block;vertical-align:top;width:32px;height:32px;margin:0;padding:0;outline:none;background:url(/templates/images/icons.png) -32px 0 no-repeat" href="#" data-count="gplus" onclick="share(2);yaCounter24093889.reachGoal(\'gplus\');return false;" title="Поделиться в Google+" target="_blank"></a></span><span class="share-item" style="display:block;white-space:no-wrap;margin:0 0 6px;height:32px;"><a rel="nofollow" style="display:inline-block;vertical-align:top;width:32px;height:32px;margin:0;padding:0;outline:none;background:url(/templates/images/icons.png) -96px 0 no-repeat" href="#" data-count="odkl" onclick="share(3);yaCounter24093889.reachGoal(\'odnokl\');return false;" title="Добавить в Одноклассники" target="_blank"></a></span><span class="share-item" style="display:block;white-space:no-wrap;margin:0 0 6px;height:32px;"><a rel="nofollow" style="display:inline-block;vertical-align:top;width:32px;height:32px;margin:0;padding:0;outline:none;background:url(/templates/images/icons.png) -128px 0 no-repeat" href="#" data-count="twi" onclick="share(4);yaCounter24093889.reachGoal(\'twit\');return false;" title="Добавить в Twitter" target="_blank"></a></span><span class="share-item" style="display:block;white-space:no-wrap;margin:0 0 6px;height:32px;"><a rel="nofollow" style="display:inline-block;vertical-align:top;width:32px;height:32px;margin:0;padding:0;outline:none;background:url(/templates/images/icons.png) -160px 0 no-repeat" href="#" data-count="vk" onclick="share(5);yaCounter24093889.reachGoal(\'vk\');return false;" title="Поделиться В Контакте" target="_blank"></a></span><span class="share-item" style="display:block;white-space:no-wrap;margin:0 0 6px;height:32px;"><a rel="nofollow" style="display:inline-block;vertical-align:top;width:32px;height:32px;margin:0;padding:0;outline:none;background:url(/templates/images/icons.png) -224px 0 no-repeat" href="#" onclick="add_favorite(this);yaCounter24093889.reachGoal(\'favorite\');return false;" title="Сохранить в избранное браузера" target="_blank"></a></span><span class="share-item" style="display:block;white-space:no-wrap;margin:0 0 6px;height:32px;"><a rel="nofollow" style="display:inline-block;vertical-align:top;width:32px;height:32px;margin:0;padding:0;outline:none;background:url(/templates/images/icons.png) -288px 0 no-repeat" href="#" onclick="totop(); return false;" title="Наверх" target="_blank"></a></span></span>');
});