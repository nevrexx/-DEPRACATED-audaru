<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Audaru.kz</title>
<!--css-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!--<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">-->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--javascript-->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body>
<div id="wrapper">
<div class="row-fluid well">
<div class="span9" style="padding: 0 10px 0 0;">
	<div id="translater">
    <a style="padding: 5px 10px 0 0;" class="pull-right" target="_blank" href="http://soylem.kz/soylem_start_free.php">Скачать переводчик</a>
    	<div class="btn-group pull-left" data-toggle="buttons-radio" style="margin-bottom: 10px;">
        	<button class="btn btn-success active" id="ruskaz">Русско-Казахский</button>
        	<button class="btn btn-success " id="kazrus">Казахско-Русский</button>
    	</div>
        <div class="clearer"></div>
        <form name="translater" style="margin-bottom: 0;">
      <div class="row-fluid" id="ruskaz-block">
        <div class="span6">
          <textarea class="span12 input" name="spell" placeholder="Не более 1000 символов"></textarea>
        </div>
        <div class="span6">
          <div class="span12 translate-result">
            <p style="text-align: center; margin-top: 100px;">Введите текст для перевода в поле слева и нажмите кнопку "Перевести" или Ctrl+Enter</p>
          </div>
        </div>
      </div>
    
      <div class="row-fluid hide" id="kazrus-block">
        <div class="span6">
          <textarea class="span12 input" placeholder="Не более 1000 символов"></textarea>
        </div>
        <div class="span6">
          <div class="span12 translate-result">            
            <p style="text-align: center; margin-top: 100px;">Введите текст для перевода в поле слева и нажмите кнопку "Перевести" или Ctrl+Enter</p>
          </div>
        </div>
      </div>
    </form>
    <div class="float-left">
        <div class="btn-group" id="translater-actions">
            <button data-original-title="" class="btn btn-large tooltip-hint" id="do-translate" rel="tooltip" data-title="Отправить: Ctrl + Enter" disabled="disabled">
                <span id="do-translate-original"><strong>Перевести</strong></span>
                <img src="img/ajax-loader.gif" class="ajax-loader hide" style="margin: 1px 18px 3px;">            
			</button>
            
            <!--<button data-original-title="" class="btn btn-large tooltip-hint" id="toggle-keyboard" rel="tooltip" data-title="Виртуальная клавиатура">
                <img src="img/keyboard.png"> 
            </button>
            
            <button data-original-title="" class="btn btn-large tooltip-hint" id="speller" onclick="SpellCheck()" data-title="Проверка правописания" disabled="disabled">
                <img src="img/spellcheck.png">            
			</button>-->
            
            <button data-original-title="" class="btn btn-large disabled tooltip-hint" rel="tooltip" data-title="Осталось символов">
                <span id="translater-ruskaz-counter" data-letters="1000">1000</span>
                <span id="translater-kazrus-counter" class="hide" data-letters="1000">1000</span>
            </button>
        </div>
    </div>
	<div class="float-right">
        <div style="text-align: right;" class="hide" id="doubt">
            Сомневаетесь в правильности?<br>
            <a id="ask-society" data-toggle="modal" href="http://audaru.kz" target="_blank">Спросите у сообщества AUDARU.KZ!</a>
        </div>
    </div>
    
    <div class="clearer"></div>
    
    <div class="hide" id="keyboard">
	<!--Русская раскладка-->
  <div id="rus-keyboard">
    <button class="btn letter">ё</button>
    <button class="btn symbol"><span class="off">1</span><span class="on">!</span></button>
    <button class="btn symbol"><span class="off">2</span><span class="on">"</span></button>
    <button class="btn symbol"><span class="off">3</span><span class="on">№</span></button>
    <button class="btn symbol"><span class="off">4</span><span class="on">;</span></button>
    <button class="btn symbol"><span class="off">5</span><span class="on">%</span></button>
    <button class="btn symbol"><span class="off">6</span><span class="on">:</span></button>
    <button class="btn symbol"><span class="off">7</span><span class="on">?</span></button>
    <button class="btn symbol"><span class="off">8</span><span class="on">*</span></button>
    <button class="btn symbol"><span class="off">9</span><span class="on">(</span></button>
    <button class="btn symbol"><span class="off">0</span><span class="on">)</span></button>
    <button class="btn symbol"><span class="off">-</span><span class="on">_</span></button>
    <button class="btn symbol"><span class="off">=</span><span class="on">+</span></button>
    <button class="btn back-space">BackSpace</button>
    
    <br>
    
    <button class="btn tab">Tab</button>
    <button class="btn letter">й</button>
    <button class="btn letter">ц</button>
    <button class="btn letter">у</button>
    <button class="btn letter">к</button>
    <button class="btn letter">е</button>
    <button class="btn letter">н</button>
    <button class="btn letter">г</button>
    <button class="btn letter">ш</button>
    <button class="btn letter">щ</button>
    <button class="btn letter">з</button>
    <button class="btn letter">х</button>
    <button class="btn letter">ъ</button>
    <button class="btn symbol slash"><span class="off">\</span><span class="on">/</span></button>
    
    <br>
    
    <button class="btn caps-lock" data-toggle="button">CapsLock</button>
    <button class="btn letter">ф</button>
    <button class="btn letter">ы</button>
    <button class="btn letter">в</button>
    <button class="btn letter">а</button>
    <button class="btn letter">п</button>
    <button class="btn letter">р</button>
    <button class="btn letter">о</button>
    <button class="btn letter">л</button>
    <button class="btn letter">д</button>
    <button class="btn letter">ж</button>
    <button class="btn letter">э</button>
    <button class="btn enter">Enter</button>
    
    <br>
    
    <button class="btn left-shift" data-toggle="button">LeftShift</button>
    <button class="btn letter">я</button>
    <button class="btn letter">ч</button>
    <button class="btn letter">с</button>
    <button class="btn letter">м</button>
    <button class="btn letter">и</button>
    <button class="btn letter">т</button>
    <button class="btn letter">ь</button>
    <button class="btn letter">б</button>
    <button class="btn letter">ю</button>
    <button class="btn symbol"><span class="off">.</span><span class="on">,</span></button>
    <button class="btn right-shift" data-toggle="button">RightShift</button>
    
    <br>
    
    <button class="btn space">&nbsp;</button>
    <button class="btn clear">Очистить поле</button>
  </div>
  
  <!--Казахская раскладка-->
  <div id="kaz-keyboard" class="hide">
    <button class="btn symbol"><span class="off">(</span><span class="on">)</span></button>
    <button class="btn symbol"><span class="off">"</span><span class="on">!</span></button>
    <button class="btn letter">?</button>
    <button class="btn letter">і</button>
    <button class="btn letter">?</button>
    <button class="btn letter">?</button>
    <button class="btn symbol"><span class="off">,</span><span class="on">;</span></button>
    <button class="btn symbol"><span class="off">.</span><span class="on">:</span></button>
    <button class="btn letter">?</button>
    <button class="btn letter">?</button>
    <button class="btn letter">?</button>
    <button class="btn letter">?</button>
    <button class="btn letter">?</button>
    <button class="btn back-space">BackSpace</button>
    
    <br>
    
    <button class="btn tab">Tab</button>
    <button class="btn letter">й</button>
    <button class="btn letter">ц</button>
    <button class="btn letter">у</button>
    <button class="btn letter">к</button>
    <button class="btn letter">е</button>
    <button class="btn letter">н</button>
    <button class="btn letter">г</button>
    <button class="btn letter">ш</button>
    <button class="btn letter">щ</button>
    <button class="btn letter">з</button>
    <button class="btn letter">х</button>
    <button class="btn letter">ъ</button>
    <button class="btn symbol slash"><span class="off">\</span><span class="on">/</span></button>
    
    <br>
    
    <button class="btn caps-lock" data-toggle="button">CapsLock</button>
    <button class="btn letter">ф</button>
    <button class="btn letter">ы</button>
    <button class="btn letter">в</button>
    <button class="btn letter">а</button>
    <button class="btn letter">п</button>
    <button class="btn letter">р</button>
    <button class="btn letter">о</button>
    <button class="btn letter">л</button>
    <button class="btn letter">д</button>
    <button class="btn letter">ж</button>
    <button class="btn letter">э</button>
    <button class="btn enter">Enter</button>
    
    <br>
    
    <button class="btn left-shift" data-toggle="button">LeftShift</button>
    <button class="btn letter">я</button>
    <button class="btn letter">ч</button>
    <button class="btn letter">с</button>
    <button class="btn letter">м</button>
    <button class="btn letter">и</button>
    <button class="btn letter">т</button>
    <button class="btn letter">ь</button>
    <button class="btn letter">б</button>
    <button class="btn letter">ю</button>
    <button class="btn symbol"><span class="off">№</span><span class="on">?</span></button>
    <button class="btn right-shift" data-toggle="button">RightShift</button>
    
    <br>
    
    <button class="btn space">&nbsp;</button>
    <button class="btn clear">Очистить поле</button>
  </div>
</div>    
    <p class="hide" id="help-translate-to-kaz">Помогите с переводом на казахский</p>
    <p class="hide" id="help-translate-to-rus">Помогите с переводом на русский</p>
    <p class="hide" id="text-for-translation">Текст для перевода</p>
    <p class="hide" id="translated-text">Перевод текста SOYLEM</p>
    <p class="hide" id="translater-title-cut">35</p>
</div>
    </div>
</div>
</div>
<br />
<div align="center">&copy <a href="http://limeon.kz" target="_blank">LimeOn Global Company</a></div>
<div align="center">Система электронного перевода <a href="http://soylem.kz" target="_blank">SOYLEM.KZ</a></div>
<script>
//Скрипты для переводчика
$(document).ready(function() {
    
    //Переключение режима переводчика
    $('#ruskaz').click(function() {
        $('#ruskaz-block').removeClass('hide'); //текстовые поля
        $('#translater-ruskaz-counter').removeClass('hide'); //счетчик букв
        $('#kazrus-block').addClass('hide');
        $('#translater-kazrus-counter').addClass('hide');
        $('#speller').show(); //Проверка правописания
        
        //Деактивируем кнопку перевода, если не введено ни одного символа и наоборот
        $('#ruskaz-block .input').val() == '' ? $('#do-translate').attr('disabled', true) : $('#do-translate').attr('disabled', false);
        
        //Переключаем раскладку клавиатуры
        $('#rus-keyboard').removeClass('hide');
        $('#kaz-keyboard').addClass('hide');
    });
    
    $('#kazrus').click(function() {
        $('#ruskaz-block').addClass('hide'); //текстовые поля
        $('#translater-ruskaz-counter').addClass('hide'); //счетчик букв
        $('#kazrus-block').removeClass('hide');
        $('#translater-kazrus-counter').removeClass('hide');
        $('#speller').hide(); //Проверка правописания
        
        //Деактивируем кнопку перевода, если не введено ни одного символа и наоборот
        $('#kazrus-block .input').val() == '' ? $('#do-translate').attr('disabled', true) : $('#do-translate').attr('disabled', false);
        
        //Переключаем раскладку клавиатуры
        $('#kaz-keyboard').removeClass('hide');
        $('#rus-keyboard').addClass('hide');
    });
    
    //Пересчет количества символов
    $('#translater .input').
        bind('keyup', function() {
            UpdateCounter($(this));
        });
    
    //Отправка запроса для перевода
    $('#do-translate').click(function() {
        DoTranslate();
    });
    
    $('#kazrus-block, #ruskaz-block').find('textarea').keydown(function(e) {
        if(e.ctrlKey && e.keyCode == 13)
            DoTranslate();
    });
    
    //Принажатии на кнопку "Спросить у сообщества" заполняем модальное окно
    $('#ask-society').click(function() {
        ResetForm('form-question');
        
        if($('#ruskaz-block').is(':visible'))
        {
            block = $('#ruskaz-block'); //рабочий блок при том режиме, в которов переводим
            help_translate_source = $('#help-translate-to-kaz').text(); //контейнер для текста в заголовок
        }
        else
        {
            block = $('#kazrus-block');
            help_translate_source = $('#help-translate-to-rus').text();
        }
        
        //Переводимый текст
        var original_text = block.find('textarea').first().val();
        var original_text_length = original_text.length;
        
        //Переведенный текст
        var translated_text = block.find('.translate-result').text();
        
        //Для заголовка
        var limit = $('#translater-title-cut').text();
        var dots = original_text_length > limit ? '...' : '';
        var help_translate_text = help_translate_source + ': "' + original_text.substr(0, limit) + dots + '"';
        
        //Для тела вопроса
        var original_text = $('#text-for-translation').text() + ': ' + original_text + '\r\n\r\n';
        var translated_text = $('#translated-text').text() + ': ' + translated_text;
        
        //Откидываем служебное сообщение после переведенного текста
        var br_pos = translated_text.indexOf('===', 0);
        
        if(br_pos > 0)
            translated_text = translated_text.substr(0, br_pos - 4);
            
        //Подтягиваем тематику
        var theme = $('#themes-menu').find('.active').attr('data-theme');
        
        //Заполняем поля
        $('#title-question').val(help_translate_text);
        $('#text-question').val(original_text + translated_text);
        $('#theme-id-question').val(theme);
    });
    
    //Чистим форму
    function ResetForm(form)
    {
        form = $('#' + form);
        form.trigger('reset');
        form.find('input[type=hidden]').val(0);
        form.find('.report').hide().text('').removeClass('red-font').removeClass('green-font');
    }

});
    
//Пересчет счетчика букв
function UpdateCounter(textarea)
{
    //Определяем нужный счетчик
    var counter = $('#ruskaz-block').is(':visible') ? $('#translater-ruskaz-counter') : $('#translater-kazrus-counter');
    
    //Максимальное количество символов
    var max_letters = counter.attr('data-letters');
    
    //Если символом больше, чем max_letters, обрезаем строку в текстовом поле и вставляем обратно
    var text = textarea.val();
    var text_length = text.length;
    
    if(text_length > max_letters)
    {
        text = text.substr(0, max_letters);
        textarea.val(text);
    }
    
    //Пересчитаем счетчик
    counter.text(max_letters - text_length);
    
    //Деактивируем кнопку перевода и проверки правописания, если не введено ни одного символа и наоборот
    text_length > 0 ? $('#do-translate, #speller').attr('disabled', false) : $('#do-translate, #speller').attr('disabled', true);
}

//Функция для отправки запроса для перевода
function DoTranslate()
{
    //Скрыть сообщение о "Спросите у сообщества"
    $('#doubt').hide();
    
    //Определяем направление перевода и нужный блок текстовых полей
    if($('#ruskaz-block').is(':visible'))
    {
        block = $('#ruskaz-block');
        from = 'Rus';
        to = 'Kaz';
    }
    else
    {
        block = $('#kazrus-block');
        from = 'Kaz';
        to = 'Rus';
    }
    
    var textarea = block.find('textarea').first();
    var translate_area = block.find('.translate-result');
    translate_area.html('').removeClass('red-font');
    var text = textarea.val();
    
    if(text.trim() == '')
        return;
    
    var theme = $('#themes-menu').find('.active').attr('data-code');
    //alert(text); текст формируется сто пудов
	/*alert(text);
	alert(from);
	alert(to);
	alert(theme);*/ 
    $.ajax({  
        url: 'init/soap_client.php',
        type: 'POST',
		//dataType: 'json',
        data: {
            'text' : text,
            'from' : from,
            'to' : to/*,
            'theme' : theme*/
        },
        cache: false,
        beforeSend: function() {
            textarea.attr('disabled', true); //Отключаем текстовую область
            $('#do-translate-original').hide().next().show(); //включаем ajax-loader
        },
        success: function(response) {
			//alert(response);
            translate_area.html(response);
			$('#doubt').show();//Показать сообщение о "Спросите у сообщества"
        },
        complete: function() {
            textarea.attr('disabled', false); //Включаем текстовую область
            $('#do-translate-original').show().next().hide(); //отключаем ajax-loader
        }
    });
}

//Убираем тэги в тексте
function strip_tags(html) {
    return html.replace(/<.*?>/g, '');
}
</script>

</body>
</html>
