

<div class="section">
    <div class="filtp">
      <form action="/new/aparts/apartslistsort/" method="post" class="form_filtr">
        <h1><?php echo lang('apartments_filter'); ?></h1>
        <div class="div_form_1">
          <label><?php echo lang('country'); ?></label>
          <div class="sel_1">
            <select class="selectBlock" name="sel_country"><?php echo $select1;?></select>
          </div>
          <label><?php echo lang('city'); ?></label>
         <input type="text" name="txt_city" value="Горно-Алтайск" id="city" class="inp_0" />
          <label><?php echo lang('street'); ?></label>
           <input type="text" name="street" value="" id="street" class="inp_0" />
          <label><?php echo lang('number_rooms'); ?></label>
          <div class="div_sel_1">
            <select class="selectBlock" name="sel_numrooms">
              <option>Все</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
          <label><?php echo lang('price_after'); ?></label>
         <input type="text" name="txt_priceafter" value="" class="inp_1" />
          <label class="label_do"><?php echo lang('before'); ?></label>
          <input type="text" value="" name="txt_pricebefore"  class="inp_1" />
          <label class="label_do">РУБ</label>
        </div>
        <div class="div_form_2">
          <p><?php echo lang('equipment_services'); ?></p>
			
          <input type="checkbox" name="cb_tv" id="check_1" class="styled" value="1"/>
          <label for="check_1" class="label_c"><?php echo lang('tv'); ?></label>
          <input type="checkbox" name="cb_internet" id="check_2" class="styled" value="1"/>
          <label for="check_2" class="label_c"><?php echo lang('internet'); ?></label>
          <input type="checkbox" name="cb_conditions" id="check_3" class="styled" value="1"/>
          <label for="check_3" class="label_c"><?php echo lang('conditions'); ?></label>
          <input type="checkbox" name="cb_ref" id="check_4" class="styled" value="1"/>
          <label for="check_4" class="label_c"><?php echo lang('refrigerator'); ?></label>
          <input type="checkbox" name="cb_stove" id="check_5" class="styled" value="1"/>
          <label for="check_5" class="label_c"><?php echo lang('stove'); ?></label>
          <input type="checkbox" name="cb_oven" id="check_6" class="styled" value="1"/>
          <label for="check_6" " class="label_c"><?php echo lang('microwave_oven'); ?></label>
          <input type="checkbox" name="cb_washing" id="check_7" class="styled" value="1"/>
          <label for="check_7" class="label_c"><?php echo lang('washing_machine'); ?></label>
          <input type="checkbox" name="cb_phone" id="check_8" class="styled" value="1"/>
          <label for="check_8" class="label_c"><?php echo lang('phone'); ?></label>
          <input type="checkbox" name="cb_bath" id="check_9" class="styled" value="1"/>
          <label for="check_9" class="label_c"><?php echo lang('bath_shower_bath'); ?></label>
        </div>
        <div class="div_form_2">
          <p>Доп. услуги</p>
          <input type="checkbox" name="cb_parking" id="check_10" class="styled" value="1"/>
          <label for="check_10" class="label_c"><?php echo lang('parking'); ?></label>
          <input type="checkbox" id="check_11" class="styled" value="1"/>
          <label for="check_11" class="label_c"><?php echo lang('transfer'); ?></label>
          <input type="checkbox" id="check_12" class="styled" value="1"/>
          <label for="check_12" class="label_c"><?php echo lang('accounting_documents'); ?></label>
											   
											   
        </div>
        <label class="label_id">ID квартиры</label>
        <input type="text" class="inp_1" value=""/>
        <div class="cL"></div>
        <br /><input type="submit" value="search" />
      </form>
    </div>
    <div class="section_catalog">
      <div class="banner"> <a href="#"><img src="http://kvartirni.ru/i/banner_1.jpg" alt="" /></a> </div>
      <div class="article_catalog"> <a href="#"><img src="http://kvartirni.ru/i/banner_2.jpg" alt=""  class="art_banner"/></a>
        <div class="search_itog">
          <p><?php echo lang('found_options'); ?> — 935</p>
          <p><span class="span_time"></span> Местное время <span>Горно-Алтайск</span> </p>
        </div>
        <p class="p_sort"><?php echo lang('sorted_by'); ?>:<a href="#"><?php echo lang('sort_address'); ?></a><a href="#"><?php echo lang('sort_rooms'); ?></a><a href="#"><?php echo lang('sort_price'); ?></a></p>
        <form action="#" method="post" class="form_page">
          <label>объявлений на странице</label>
          <select  class="selectBlock">
            <option>10</option>
            <option>20</option>
            <option>30</option>
          </select>
        </form>
        <ul class="nav_page">
          <li class="prev_1"><a href="#">&nbsp;</a></li>
          <li class="prev_2"><a href="#">&nbsp;</a></li>
          <li><span>1</span></li>
          <li><a href="#">2</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">6</a></li>
          <li class="span_tire"><span>...</span></li>
          <li><a href="#">50</a></li>
          <li class="next_2"><a href="#">&nbsp;</a></li>
          <li class="next_1"><a href="#">&nbsp;</a></li>
        </ul><!--<div class="div_cat">
          <div class="cat_pic"> <a href="http://kvartirni.ru/i/pic_big.jpg" rel="colorbox2"><img src="http://kvartirni.ru/i/pic_cat.jpg" alt="" /></a>
            <p><a href="#">Еще 4 фото</a></p>
            <span>&nbsp;;</span> </div>
          <div class="info_cat">
            <p><?php echo lang('day'); ?> 3190 руб.<br />
              <?php echo lang('hour'); ?> 350 руб.</p>
            <h3><a href="#">1 bedroom apartment for rent</a></h3>
            <p class="cat_address">25 Lenina <br />
             m Novokuzneckaya (10 min)</p>
            <a href="#" class="link_map"><?php echo lang('show_on_map'); ?></a>
            <p class="p_id">ID 100500</p>
            <p class="p_phone">8 (903) 508-37-55  Boris</p>
            <p>This is description of this aparments This is description of this aparments This is description of this aparments This is description of this aparments</p>
            <a href="#" class="link_more">more</a> </div>
        </div>
		<div class="div_cat">
          <div class="cat_pic"> <a href="http://kvartirni.ru/i/pic_big.jpg" rel="colorbox2"><img src="http://kvartirni.ru/i/pic_cat.jpg" alt="" /></a>
            <p><a href="#">Еще 4 фото</a></p>
            <span>&nbsp;;</span> </div>
          <div class="info_cat">
            <p><?php echo lang('day'); ?> 3190 руб.<br />
              <?php echo lang('hour'); ?> 350 руб.</p>
            <h3><a href="#">1 bedroom apartment for rent</a></h3>
            <p class="cat_address">25 Lenina <br />
             m Novokuzneckaya (10 min)</p>
            <a href="#" class="link_map"><?php echo lang('show_on_map'); ?></a>
            <p class="p_id">ID 100500</p>
            <p class="p_phone">8 (903) 508-37-55  Boris</p>
            <p>This is description of this aparments This is description of this aparments This is description of this aparments This is description of this aparments</p>
            <a href="#" class="link_more">more</a> </div>
        </div>
		<div class="div_cat">
          <div class="cat_pic"> <a href="http://kvartirni.ru/i/pic_big.jpg" rel="colorbox2"><img src="http://kvartirni.ru/i/pic_cat.jpg" alt="" /></a>
            <p><a href="#">Еще 4 фото</a></p>
            <span>&nbsp;;</span> </div>
          <div class="info_cat">
            <p><?php echo lang('day'); ?> 3190 руб.<br />
              <?php echo lang('hour'); ?> 350 руб.</p>
            <h3><a href="#">1 bedroom apartment for rent</a></h3>
            <p class="cat_address">25 Lenina <br />
             m Novokuzneckaya (10 min)</p>
            <a href="#" class="link_map"><?php echo lang('show_on_map'); ?></a>
            <p class="p_id">ID 100500</p>
            <p class="p_phone">8 (903) 508-37-55  Boris</p>
            <p>This is description of this aparments This is description of this aparments This is description of this aparments This is description of this aparments</p>
            <a href="#" class="link_more">more</a> </div>
        </div>-->
              <?php echo $output;?>
		 <ul class="nav_page">
          <li class="prev_1"><a href="#">&nbsp;</a></li>
          <li class="prev_2"><a href="#">&nbsp;</a></li>
          <li><span>1</span></li>
          <li><a href="#">2</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">6</a></li>
          <li class="span_tire"><span>...</span></li>
          <li><a href="#">50</a></li>
          <li class="next_2"><a href="#">&nbsp;</a></li>
          <li class="next_1"><a href="#">&nbsp;</a></li>
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
					okato: '84401000000'
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