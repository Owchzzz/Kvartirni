<script type="text/javascript">
    var TotalNums=<?php echo $totalNums;?>;
    function addNum(){
       
        var newcontent;
        var cont=document.getElementById('phone_nums').innerHTML;
        var num=document.getElementById('tel').value;
        var caft=document.getElementById('callafter').value;
        if(TotalNums < 2){
        newcont="<div id=\""+TotalNums+"\"><input type=\"hidden\" name=\"maincallaffter\" /><input type=\"hidden\" name=\"maintelnum\" value=\""+num+"\"/><br clear=\"left\"><label class=\"lab_dobav_3\">Main</label><label class=\"lab_dobav_2\">"+num+"</label><a href=\"javascript:;\" onClick=\"delNumMain('#"+TotalNums+"');\" class=\"del_phone\" >Delete Number</a> </div><br clear=\"left\"><br>";
        }
        else{
        newcont="<div id=\""+TotalNums+"\"><input type=\"hidden\" name=\"callafter"+TotalNums+"\" /><input type=\"hidden\" name=\"telnum"+TotalNums+"\" value=\""+num+"\" /><br clear=\"left\"><label class=\"lab_dobav_3\">Additional</label><label class=\"lab_dobav_2\">"+num+"</label><a href=\"javascript:;\" onClick=\"delNum('#"+TotalNums+"');\" class=\"del_phone\" >Delete Number</a> </div><br clear=\"left\"><br> ";
        }
        TotalNums++;
        document.getElementById('phone_nums').innerHTML+=newcont;
    }
    function delNum(link){
    TotalNums--;
    $(link).remove();
    }
    
    function delNumMain(link){
        TotalNums=1;
        $(link).remove();
    }

    
    
</script>

<div class="cL"></div> 
<h1><?php echo lang('adding_apartments'); ?></h1>
    <p class="small"><?php echo lang('adding_apartments_descript'); ?></p>
<div class="div_dobavit">
<h2><?php echo lang('contact_info'); ?></h2>
<form action="/new/aparts/saveedit?id=<?php echo $this->input->get('id');?>" method="post" class="form_dobav" enctype="multipart/form-data">
    <div class="div_check">
    <label><?php echo lang('show'); ?></label>
		<input type="hidden" name="addobject" />
		<input type="hidden" name="loginid" value="1"/>
		<input type="hidden" name="secrettoken" value="2d43622cc091eb16553a587dc1a70575"/>
		
    <input type="checkbox" class="styled" name="cb_icq" value="1" <?php if($ICQ == 1): ?> checked<?php endif;?>/><label class="lab_dobav_1">ICQ</label>
    <input type="checkbox" class="styled" name="cb_skype" value="1" <?php if($Skype == 1): ?> checked<?php endif;?>/><label class="lab_dobav_1">Skype</label>
    </div>
    <label><?php echo lang('your_name'); ?> *</label><input type="text" value="<?php echo $OwnerName;?>" name="OwnerName" id="OwnerName"/>
    <label class="lab_dobav_3"><?php echo lang('phone_numbers'); ?></label>
    <!--<br clear="left" />
    <label class="lab_dobav_3"><?php echo lang('main'); ?></label><label class="lab_dobav_2"><input type="text" name="MainTel" id="MainTel" placeholder="+ 7 965 100 00 02" /></label><a href="#" class="del_phone"><?php echo lang('del_phone'); ?></a>
    <br clear="left" />
    <label class="lab_dobav_3"><?php echo lang('additional'); ?></label><label class="lab_dobav_2">+ 7 965 100 00 02</label><a href="#" class="del_phone"><?php echo lang('del_phone'); ?></a>
    <br clear="left" />
    <label>&nbsp;</label><input type="text" value="" class="inp_dob_1"/> <label class="lab_dobav_4"><?php echo lang('call_after'); ?></label><input type="text" value="" class="inp_dob_2"/><a href="#" class="add_phone"><?php echo lang('add_phone'); ?></a>
    <br clear="left" />-->
    <br clear="left">
    <div id="phone_nums">
       <label>&nbsp;</label><input id="tel" type="text" value="" class="inp_dob_1"/> <label class="lab_dobav_4"><?php echo lang('call_after'); ?></label><input type="text" value="" id="callafter" name="callafter" class="inp_dob_2"/><a href="javascript:;" onClick="addNum()" class="add_phone"><?php echo lang('add_phone'); ?></a>
     <br clear="left" />
    <?php echo $telNums;?>
    </div>
    
    <h2><?php echo lang('location'); ?></h2>
    <div class="div_raspolog">
     <label><?php echo lang('country'); ?>*</label>
            <div class="sel_1">
              <select class="selectBlock" name="country">
                  <option value="<?php echo $Country;?>"><?php echo $CountryName;?></option>
              <?php echo $select1;?>			 
              
              </select>
            </div>
            <br clear="left" />
            <label><?php echo lang('city'); ?>, метро*</label>
            <div class="sel_1">
              <select class="selectBlock" name="city">
               <!--<option>Абакан</option><option>Анадырь</option><option>Архангельск</option><option>Астрахань</option><option>Барнаул</option><option>Белгород</option><option>Биробиджан</option><option>Благовещенск</option><option>Брянск</option><option>Великий Новгород</option><option>Владивосток</option><option>Владикавказ</option><option>Владимир</option><option>Волгоград</option><option>Вологда</option><option>Воронеж</option><option>Горно-Алтайск</option><option>Грозный</option><option>Екатеринбург</option><option>Иваново</option><option>Ижевск</option><option>Иркутск</option><option>Йошкар-Ола</option><option>Казань</option><option>Калининград</option><option>Калуга</option><option>Кемерово</option><option>Киров</option><option>Краснодар</option><option>Красноярск</option><option>Курган</option><option>Курск</option><option>Кызыл</option><option>Липецк</option><option>Магадан</option><option>Магас</option><option>Майкоп</option><option>Махачкала</option><option>Москва</option><option>Мурманск</option><option>Нальчик</option><option>Нарьян-Мар</option><option>Нижний Новгород</option><option>Новосибирск</option><option>Омск</option><option>Орел</option><option>Оренбург</option><option>Пенза</option><option>Пермь</option><option>Петрозаводск</option><option>Петропавловск-Камчатский</option><option>Псков</option><option>Ростов-на-Дону</option><option>Рязань</option><option>Салехард</option><option>Самара</option><option>Саранск</option><option>Саратов</option><option>Смоленск</option><option>Ставрополь</option><option>Сыктывкар</option><option>Тамбов</option><option>Тверь</option><option>Тула</option><option>Тюмень</option><option>Улан-Удэ</option><option>Ульяновск</option><option>Хабаровск</option><option>Ханты-Мансийск</option><option>Чебоксары</option><option>Челябинск</option><option>Черкесск</option><option>Чита</option><option>Элиста</option><option>Южно-Сахалинск</option><option>Якутск</option><option>Ярославль</option>    -->          
               <option value="nochange"><?php echo $City;?></option>
             <?php echo $select2;?>
              </select>
            </div>
             <div class="sel_1">
              <select class="selectBlock" name="metro">
                <option>Не указывать</option>
                <option>Не указывать</option>
                <option>Не указывать</option>
              </select>
            </div>
            <label><?php echo lang('district'); ?></label><input type="text" name="district" value="<?php echo $District;?>" class="inp_dob_3" />
            <p class="cmall"><?php echo lang('shortly_25'); ?>.</p>
             <label><?php echo lang('address'); ?></label><input type="text" name="address" value="<?php echo $Address;?>"class="inp_dob_3" />
    <p class="cmall"><?php echo lang('street_and_house'); ?></p>
    </div>
    <div class="div_map">
    <p><?php echo lang('check_location'); ?></p>
<iframe width="575" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;q=%D0%9E%D0%B1%D0%BD%D0%B8%D0%BD%D1%81%D0%BA,+%D0%B3%D0%BE%D1%80%D0%BE%D0%B4+%D0%9E%D0%B1%D0%BD%D0%B8%D0%BD%D1%81%D0%BA,+%D0%9A%D0%B0%D0%BB%D1%83%D0%B6%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F&amp;sll=40.277762,-96.804094&amp;sspn=35.555607,82.529297&amp;ie=UTF8&amp;geocode=FSCfSAMdLKcuAg&amp;split=0&amp;hq=&amp;hnear=%D0%9E%D0%B1%D0%BD%D0%B8%D0%BD%D1%81%D0%BA,+%D0%B3%D0%BE%D1%80%D0%BE%D0%B4+%D0%9E%D0%B1%D0%BD%D0%B8%D0%BD%D1%81%D0%BA,+%D0%9A%D0%B0%D0%BB%D1%83%D0%B6%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F&amp;t=m&amp;z=12&amp;ll=55.090976,36.611884&amp;output=embed"></iframe>
    </div>
    
	<h2><?php echo lang('description_and_prices'); ?></h2>
	<ul class="ul_char">
	<li><label><?php echo lang('number_rooms'); ?></label><input type="text" name="numrooms" value="<?php echo $NumOfRooms;?>"/></li>
	<li><label><?php echo lang('area_apartment'); ?></label><input type="text" name="area"  value="<?php echo $AreaOfApartment;?>" /><span>м&sup2;</span></li>
	<li><label><?php echo lang('floor_floors'); ?></label><input type="text" name="floor"  value="<?php echo $Floors;?>" /><span>/</span><input type="text" name="totalfloors"  value="<?php echo $TotalFloors;?>" /></li>
	<li><label><?php echo lang('sleeps'); ?></label><input type="text" name="sleeps" value="<?php echo $Sleeps;?>" /></li>
	</ul>
	<p class="small_1"><?php echo lang('currency'); ?></p>
	   <select class="selectBlock" name="currency">
               <option value="nochange"><?php echo $Currency;?></option>
        <option>USD</option>
        <option>EURO</option>
        <option>РУБ</option>
      </select>
	  <label class="lab_dobav_5"><?php echo lang('day'); ?> *</label><input type="text" name="day" class="inp_dob_4" value="<?php echo $Day;?>" /><label class="lab_dobav_5"><?php echo lang('night'); ?></label><input type="text" name="night" class="inp_dob_4" value="<?php echo $Night;?>" />
	  <label class="lab_dobav_5"><?php echo lang('hour'); ?></label><input type="text" name="hour" class="inp_dob_4" value="<?php echo $Hour;?>" />
	  <br clear="left" />
	  <p>Включено в цену:</p>
	  <label class="lab_dobav_7">размещение не более</label><input type="text" class="inp_dob_5" name="maxpeople" value="<?php echo $MaxPeople;?>" /> <label class="lab_dobav_6"><?php echo lang('people'); ?></label>
	  <label class="lab_dobav_7"><?php echo lang('minimum_order'); ?></label><input type="text" name="minorders" class="inp_dob_5" value="<?php echo $MinHours;?>" /><label class="lab_dobav_6"><?php echo lang('hours'); ?></label>
	  <br clear="left" />
	  <label class="lab_dobav_7"><?php echo lang('pledge'); ?></label><input type="text" name="pledge" class="inp_dob_1" value="" />
	  <div class="cL"></div>
	  <p class="cmall_1">Например: 1500 рублей, возвращается при отъезде.</p>
	<div class="div_check_1">  <label class="lab_dobav_7"><?php echo lang('balcony'); ?></label><input type="checkbox" name="balcony" class="styled" value="1" <?php if($Balcony == 1): ?> checked <?php endif;?>/><label class="lab_dobav_8"><?php echo lang('yes'); ?></label>
	  </div>
	  <br clear="left" />
	  <h2><?php echo lang('equipment_services'); ?></h2>
	  <div class="div_usl">
	  <input type="checkbox" class="styled" name="tv" value="1" <?php if($Tv == 1): ?> checked<?php endif;?>/><label><?php echo lang('tv'); ?></label>
	  <input type="checkbox" class="styled" name="internet" value="1" <?php if($Internet == 1): ?> checked<?php endif;?>/><label><?php echo lang('internet'); ?></label>
	  <input type="checkbox" class="styled" name="air_con" value="1" <?php if($AirCon == 1): ?> checked<?php endif;?>/><label><?php echo lang('air_conditioning'); ?></label>
	  <input type="checkbox" class="styled" name="refrigerator" value="1" <?php if($Ref == 1): ?> checked<?php endif;?>/><label><?php echo lang('refrigerator'); ?></label>
	  <input type="checkbox" class="styled" name="stove" value="1" <?php if($Stove == 1): ?> checked<?php endif;?>/><label><?php echo lang('stove'); ?></label>

	  </div>
	    <div class="div_usl">
	  <input type="checkbox" class="styled" name="microwave" value="1" <?php if($Microwave == 1): ?> checked<?php endif;?>/><label><?php echo lang('microwave_oven'); ?></label>
	  <input type="checkbox" class="styled" name="washing" value="1" <?php if($Washing == 1): ?> checked<?php endif;?>/><label><?php echo lang('washing_machine'); ?></label>
	  <input type="checkbox" class="styled" name="phoneavailable" value="1" <?php if($PhoneAvailable == 1): ?> checked<?php endif;?>/><label><?php echo lang('phone'); ?></label>
	  <input type="checkbox" class="styled" name="bath" value="1" <?php if($Bath == 1): ?> checked<?php endif;?>/><label><?php echo lang('bath_shower_bath'); ?></label>
	  <input type="checkbox" class="styled" name="parking" value="1" <?php if($Parking == 1): ?> checked<?php endif;?>/><label><?php echo lang('parking'); ?></label>

	  </div>
	  <div class="fL">
	  <input type="checkbox" class="styled" name="booking" <?php if($Booking == 1): ?> checked<?php endif;?>/>
        <label class="label_14">получать заявки на бронирование квартир
        <span>Вы будете получать от клиентов на почту заявки на 
бронирование ваших квартир. Убедительная просьба! 
Если вы проверяете почту реже 1 раза в день - 
снимите эту галочку.</span>
        </label>
	  </div>
	  <div class="cL"></div>
	  
	  <h2><?php echo lang('description'); ?></h2>
	  <p><?php echo lang('description_apartment'); ?> * </p>
	  <textarea name="desc" cols="" rows=""><?php echo $Description;?></textarea>
	  <p class="small_text"><?php echo lang('sostoyanie apartment_repair'); ?></p>
	  <h2><?php echo lang('conditions'); ?></h2>
	  <p><?php echo lang('conditions_order'); ?></p>
	  <textarea name="conditions_order" cols="" rows=""><?php echo $ConditionsOrder;?></textarea>
	  <p class="small_text_1">1) <?php echo lang('cost_of_the_order'); ?><br />

2) <?php echo lang('discounts'); ?></p>
 <p><?php echo lang('conditions_of_accommodation'); ?> </p>
	  <textarea name="conditions_accom" cols="" rows=""><?php echo $ConditionsAccomodation;?></textarea>
	  <p class="small_text_2">1) <?php echo lang('checkout_time_time_for_settlement'); ?><br />
2) Как часто происходит уборка в квартире, смена белья и полотенец. И другие условия.</p>

<h2>Фотографии</h2>
<p class="small_photo">Внимание! Загрузка фотографий занимает продолжительное время (от нескольких секунд до 5 минут). Обязательно дождитесь обновления страницы.
Принимаются фотографии в форматах jpg, jpeg. Минимальные размеры: 225x225px.</p>
<br>
<input type="file" multiple name="file[]" size="20" value="Upload Pictrues"/>
<!--<a href="#" class="add_photo">Добавить файл</a>
<div class="div_photo">
<p>Выбранные фотографии</p>
<ul>
<!--<li><img src="i/pic_photo.png" alt="" /> “DSC06123446.jpg” <a href="#" class="photo_del"></a></li>
<li><img src="i/pic_photo.png" alt="" /> “DSC06123446.jpg” <a href="#" class="photo_del"></a></li>
<li><span><span style="width:75%"></span></span> “DSC06123446.jpg” <a href="#" class="photo_del"></a></li>
<li><img src="i/pic_photo.png" alt="" /> “DSC06123446.jpg” <a href="#" class="photo_del"></a></li>
<li><img src="i/pic_photo.png" alt="" /> “DSC06123446.jpg” <a href="#" class="photo_del"></a></li>
<li><span><span style="width:30%"></span></span> “DSC06123446.jpg” <a href="#" class="photo_del"></a></li>
<li><img src="i/pic_photo.png" alt="" /> “DSC06123446.jpg” <a href="#" class="photo_del"></a></li>
<li><img src="i/pic_photo.png" alt="" /> “DSC06123446.jpg” <a href="#" class="photo_del"></a></li>
<li><span><span style="width:5%"></span></span> “DSC06123446.jpg” <a href="#" class="photo_del"></a></li>
-->
</ul>
-->
</div>
<input type="submit" value="Добавить квартиру" />
    </form>
  
    </div>
  </div>
  <!--section-->
  <div class="hfooter"></div>
</div><div class="footer">
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