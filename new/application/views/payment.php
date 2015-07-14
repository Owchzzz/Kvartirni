<div class="cL"></div><h1>Пополнение счета</h1>
    <div class="popol_left">
      <p class="balans">Ваш баланс: <span>857.11 руб.</span></p>
      <p class="popoln">Пополнить</p>
      <p class="img_many"><img src="i/oplata_1.png" alt="" /><img src="i/oplata_2.png" alt="" /> <img src="i/oplata_3.png" alt="" /> <img src="i/oplata_4.png" alt="" /> <img src="i/oplata_5.png" alt="" /></p>
      <h3>Электронными деньгами WebMoney</h3>
      <p>Вы можете пополнять баланс и моментально оплачивать заказы напрямую со своего кошелька WebMoney.</p>
      <p>Комиссия 0,8% (+стоимость пополнения самого WM-кошелька).</p>
      <form class="div_popol" action="#" method="post">
        <label>Сумма</label>
        <input type="text" class="inp_2" />
        <input type="submit" value="пополнить" />
      </form>
    </div>
    <div class="popl_right">
      <h2>История платежей</h2>
      <div class="div_history">
        <ul class="ul_history">
          <li> <span>дата поступления</span> <span>сумма</span> <span>способ оплаты</span> </li>
          <li> <span>10.07.2013</span> <span>100500 руб</span> <span><img src="i/oplata_1.png" alt="" /></span> </li>
           <li> <span>10.07.2013</span> <span>100500 руб</span> <span><img src="i/oplata_2.png" alt="" /></span> </li>
            <li> <span>10.07.2013</span> <span>100500 руб</span> <span><img src="i/oplata_3.png" alt="" /></span> </li>
             <li> <span>10.07.2013</span> <span>100500 руб</span> <span><img src="i/oplata_4.png" alt="" /></span> </li>
              <li> <span>10.07.2013</span> <span>100500 руб</span> <span><img src="i/oplata_5.png" alt="" /></span> </li>
               <li> <span>10.07.2013</span> <span>100500 руб</span> <span><img src="i/oplata_1.png" alt="" /></span> </li>
                <li> <span>10.07.2013</span> <span>100500 руб</span> <span><img src="i/oplata_2.png" alt="" /></span> </li>
                 <li> <span>10.07.2013</span> <span>100500 руб</span> <span><img src="i/oplata_3.png" alt="" /></span> </li>
                  <li> <span>10.07.2013</span> <span>100500 руб</span> <span><img src="i/oplata_4.png" alt="" /></span> </li>
                  
        </ul>
      </div>
    </div>
  </div>
  <!--section-->
  <div class="hfooter"></div>
</div>
<!--main--><div class="footer">
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