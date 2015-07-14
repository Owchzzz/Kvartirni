<div class="cL"></div>    <h1><?php echo lang('profile'); ?></h1>
    <div class="div_profil">
      <form action="#" method="post" class="form_profil">
        <h2><?php echo lang('contact_info'); ?></h2>
        <div class="div_dani">
          <div class="dani_left">
            <label>E-mail *</label>
            <input type="text" value="" />
            <label><?php echo lang('password'); ?></label>
            <a href="#" class="link_smena"><?php echo lang('change_password'); ?></a>
            <label>Skype</label>
            <input type="text" value="" />
            <label>ICQ</label>
            <input type="text" value="" />
            <label><?php echo lang('your_site'); ?></label>
            <label class="label_http">http://</label>
            <input type="text" value="" class="pofin_inp_1" />
            <p class="p_small_1">Пример адреса: www.site.ru</p>
          </div>
          <div class="dani_left">
            <label>Имя *</label>
            <input type="text" value="" />
            <label>Компания</label>
            <input type="text" value="" />
            <label>Адрес</label>
            <input type="text" value="" />
            <p class="p_small_2">Название компании, которую вы представляете</p>
            <label>Телефоны</label>
            <label class="label_11">основной</label>
            <input type="text" value=""  class="pofin_inp_2"/>
            <p class="p_small_3">например: +7 123 456-78-90</p>
            <label>&nbsp;</label>
            <label class="label_11">второстепенный</label>
            <input type="text" value=""  class="pofin_inp_2"/>
            <label>&nbsp;</label>
            <label class="label_11">звонить с</label>
            <input type="text" value=""  class="pofin_inp_3"/>
            <label class="label_12">до</label>
            <input type="text" value=""  class="pofin_inp_3"/>
          </div>
          <div class="cL"></div>
          <label>Псевдоним</label>
          <p class="psebdonim">Страница с вашими квартирами будет доступна для клиентов по адресу:</p>
          <label>&nbsp;</label>
          <label class="label_13">http://www.kvartirni.ru/info/</label>
          <input type="text" value=""  class="pofin_inp_4"/>
        </div>
         <h2>Настройки</h2>
        <div class="div_dani">
        <input type="checkbox" class="styled" />
        <label class="label_14">получать заявки на бронирование квартир
        <span>Вы будете получать от клиентов на почту заявки на 
бронирование ваших квартир. Убедительная просьба! 
Если вы проверяете почту реже 1 раза в день - 
снимите эту галочку.</span>
        </label>
         <label class="label_15">Валюта поумолчанию</label> <div class="sel_1">
              <select class="selectBlock">
                <option>USD</option>
        <option>EURO</option>
        <option>РУБ</option>
              </select>
            </div>
            <div class="sposob">
            <label class="label_16">Способ уведомления</label>
            <div class="div_cheked">
            <input type="checkbox" class="styled" /><label class="label_17">E-mail</label>
            <input type="checkbox" class="styled" /><label class="label_17">SMS</label>
            </div>
            <label class="label_16">на телефонный номер</label>
            <div class="sel_1">
              <select class="selectBlock">
                <option>+ 8 965 100 00 01</option>
        <option>+ 8 965 100 00 01</option>
        <option>+ 8 965 100 00 01</option>
              </select>
            </div></div>
        <div class="cL"></div>
        </div> 
        <input type="submit" value="Сохранить" />
       
      </form>
      </div>
  </div>
  <!--section-->
  <div class="hfooter"></div>
</div>
<!--main-->
<div class="footer">
  <div class="foot">
    <ul class="nav_f">
      <li><a href="#">Полезная информация</a></li>
      <li><a href="#">Реклама на сайте</a></li>
      <li><a href="#">Вопросы и ответы</a></li>
      <li><a href="#">Разместить предложение</a></li>
      <li><a href="#">Отзывы о нас</a></li>
      <li><a href="#">Связаться с нами</a></li>
    </ul>
    <ul class="sozial">
      <li><a href="#">&nbsp;</a></li>
      <li><a href="#">&nbsp;</a></li>
      <li><a href="#">&nbsp;</a></li>
      <li><a href="#">&nbsp;</a></li>
      <li><a href="#">&nbsp;</a></li>
      <li><a href="#">&nbsp;</a></li>
      <li><a href="#">&nbsp;</a></li>
    </ul>
    <p class="copy">&copy; Copyright 2013 - Kvartirni</p>
	  <a href="index.html"><img src="http://kvartirni.ru/i/logo_f.png" alt="" class="logo-f" /></a> <a href="index.html"><img src="http://kvartirni.ru/i/logo_d.png" alt="" class="logo-d" /></a> </div>
</div>
<!--footer-->


<script src="http://kvartirni.ru/js/jquery.colorbox-min.js" type="text/javascript"></script>
<script type="text/javascript">
        $(document).ready(function () {
                    $(".cat_pic a").colorbox();
					$(".carousel a").colorbox();
        });
    </script>
<script type="text/javascript" src="http://kvartirni.ru/js/coin-slider.js"></script>
<script type="text/javascript">
$('#coin-slider').coinslider();
</script>
<script type="text/javascript" src="http://kvartirni.ru/js/test.js"></script>
<script type="text/javascript" src="http://kvartirni.ru/js/select.js"></script>

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
<script type="text/javascript">$(document).ready(function(){$('.selectBlock').sSelect();});</script>
<script type="text/javascript" src="http://kvartirni.ru/js/jquery.jcarousel.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('.d-carousel .carousel').jcarousel({
        scroll: 1
    });
});
</script>
<script type="text/javascript" src="http://kvartirni.ru/js/js.js"></script>

<!-- 

change: function(event, ui) {
           newcity=$('#city').val(); 
		   window.location = "/search.php?cityredirect=" + newcity;
                }

-->
<script>

$(function() {
  jQuery( '#city' ).autocomplete( {
        minLength:2,
        source:function ( request, response ) {
            jQuery.ajax( {
                url:'search.php',
                dataType:"json",
				data: {
                    q: request.term
                },
                success:function ( data ) {
                    response( data );
                }
            } );
        },
	 change: function( event, ui ) {
  $(this).val((ui.item ? ui.item.id : ""));
}
    } );
	
	 jQuery( '#street' ).autocomplete( {
		minLength:2,
        source:function ( request, response ) {
            jQuery.ajax( {
                url:'search.php',
                dataType:"json",
				data: {
                    street: request.term,
					okato: ''
                },
                success:function ( data ) {
                    response( data );
                },
            } );
        }
    } );
});
  </script>
</body>
</html>