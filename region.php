<?
echo ' <div class="section">
    <div class="filtp">
      <form action="#" method="post" class="form_filtr">
        <h1>Фильтр квартир</h1>
        <div class="div_form_1">
          <label>Страна</label>
          <div class="sel_1">
            <select class="selectBlock">';

$result = $db->query("select * from countries order by name ASC");
	while ($row = $db->fetch($result)){ 
		echo '<option>'.$row["name"].'</option>';
			}; 

echo '</select>
          </div>
          <label>Город</label>
         <input type="text" name="city" value="'.$cityname.'" id="city" class="inp_0" />
          <label>Улица</label>
           <input type="text" value="" id="street" class="inp_0" />
          <label>Количество комнат</label>
          <div class="div_sel_1">
            <select class="selectBlock">
              <option>Все</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
          <label>Стоимость от</label>
          <input type="text" value="" class="inp_1" />
          <label class="label_do">до</label>
          <input type="text" value=""  class="inp_1" />
          <label class="label_do">РУБ</label>
        </div>
        <div class="div_form_2">
          <p>Оборудование и услуги</p>
          <input type="checkbox" id="check_1" class="styled"/>
          <label for="check_1" class="label_c">телевизор</label>
          <input type="checkbox" id="check_2" class="styled"/>
          <label for="check_2" class="label_c">интернет</label>
          <input type="checkbox" id="check_3" class="styled"/>
          <label for="check_3" class="label_c">кондиционер</label>
          <input type="checkbox" id="check_4" class="styled"/>
          <label for="check_4" class="label_c">холодильник</label>
          <input type="checkbox" id="check_5" class="styled"/>
          <label for="check_5" class="label_c">кухонная плита</label>
          <input type="checkbox" id="check_6" class="styled"/>
          <label for="check_6" class="label_c">микроволновая печь</label>
          <input type="checkbox" id="check_7" class="styled"/>
          <label for="check_7" class="label_c">стиральная машина</label>
          <input type="checkbox" id="check_8" class="styled" />
          <label for="check_8" class="label_c">телефон</label>
          <input type="checkbox" id="check_9" class="styled"/>
          <label for="check_9" class="label_c">ванна/душ</label>
        </div>
        <div class="div_form_2">
          <p>Доп. услуги</p>
          <input type="checkbox" id="check_10" class="styled"/>
          <label for="check_10" class="label_c">парковочное место</label>
          <input type="checkbox" id="check_11" class="styled"/>
          <label for="check_11" class="label_c">трансфер</label>
          <input type="checkbox" id="check_12" class="styled"/>
          <label for="check_12" class="label_c">отчетные документы</label>
        </div>
        <label class="label_id">ID квартиры</label>
        <input type="text" class="inp_1" value=""/>
        <div class="cL"></div>
      </form>
    </div>
    <div class="section_catalog">
      <div class="banner"> <a href="#"><img src="http://kvartirni.ru/i/banner_1.jpg" alt="" /></a> </div>
      <div class="article_catalog"> <a href="#"><img src="http://kvartirni.ru/i/banner_2.jpg" alt=""  class="art_banner"/></a>
        <div class="search_itog">
          <p>Найдено вариантов — 935</p>
          <p><span class="span_time">'.$skolkotime.'</span> Местное время <span>'.$cityname.'</span> </p>
        </div>
        <p class="p_sort">Сортировать по:<a href="#">Адресу</a><a href="#">Количеству комнат</a><a href="#">Цене</a></p>
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
        </ul>';
		
        
$result = $db->query("select * from objects where city=\"$cityexist2\" order by id DESC;");
	while ($row = $db->fetch($result)){ 
		echo '<div class="div_cat">
          <div class="cat_pic"> <a href="http://kvartirni.ru/i/pic_big.jpg" rel="colorbox"><img src="http://kvartirni.ru/i/pic_cat.jpg" alt="" /></a>
            <p><a href="#">Еще 4 фото</a></p>
            <span>&nbsp;;</span> </div>
          <div class="info_cat">
            <p>сутки '.$row["pricesutki"].' руб.<br />
              час '.$row["pricechas"].' руб.</p>
            <h3><a href="#">'.$row["kolvorooms"].'-комнатная квартира на сутки</a></h3>
            <p class="cat_address">'.$row["address"].' <br />
              '.$row["metro"].'</p>
            <a href="#" class="link_map">показать на карте</a>
            <p class="p_id">ID '.$row["id"].'</p>
            <p class="p_phone">'.$row["telmain"].'  '.$row["namelord"].'</p>
            <p>'.$row["description"].'</p>
            <a href="#" class="link_more">подробнее</a> </div>
        </div>';
			};
	
		

		echo '<div class="div_cat">
          <div class="cat_pic"> <a href="http://kvartirni.ru/i/pic_big.jpg" rel="colorbox2"><img src="http://kvartirni.ru/i/pic_cat.jpg" alt="" /></a>
            <p><a href="#">Еще 4 фото</a></p>
            <span>&nbsp;;</span> </div>
          <div class="info_cat">
            <p>сутки 3190 руб.<br />
              час 350 руб.</p>
            <h3><a href="#">1-комнатная квартира на сутки</a></h3>
            <p class="cat_address">1-й Монечковский пер, д.18 <br />
              м. Новокузнецкая (10 мин.)</p>
            <a href="#" class="link_map">показать на карте</a>
            <p class="p_id">ID 100500</p>
            <p class="p_phone">8 (903) 508-37-55  Антон</p>
            <p>Для порядочных и вежливых путешественников! Уютная, просторная, красивая квартира. Расположена в историческом центре Москвы. В пешей доступности от пяти станций метро павелецкая(зеленая и кольцевая ветки метро), добрынинская</p>
            <a href="#" class="link_more">подробнее</a> </div>
        </div>
		<div class="div_cat">
          <div class="cat_pic"> <a href="http://kvartirni.ru/i/pic_big.jpg" rel="colorbox3"><img src="http://kvartirni.ru/i/pic_cat.jpg" alt="" /></a>
            <p><a href="#">Еще 4 фото</a></p>
            <span>&nbsp;;</span> </div>
          <div class="info_cat">
            <p>сутки 3190 руб.<br />
              час 350 руб.</p>
            <h3><a href="#">1-комнатная квартира на сутки</a></h3>
            <p class="cat_address">1-й Монечковский пер, д.18 <br />
              м. Новокузнецкая (10 мин.)</p>
            <a href="#" class="link_map">показать на карте</a>
            <p class="p_id">ID 100500</p>
            <p class="p_phone">8 (903) 508-37-55  Антон</p>
            <p>Для порядочных и вежливых путешественников! Уютная, просторная, красивая квартира. Расположена в историческом центре Москвы. В пешей доступности от пяти станций метро павелецкая(зеленая и кольцевая ветки метро), добрынинская</p>
            <a href="#" class="link_more">подробнее</a> </div>
        </div>
		<div class="div_cat">
          <div class="cat_pic"> <a href="http://kvartirni.ru/i/pic_big.jpg" rel="colorbox4"><img src="http://kvartirni.ru/i/pic_cat.jpg" alt="" /></a>
            <p><a href="#">Еще 4 фото</a></p>
            <span>&nbsp;;</span> </div>
          <div class="info_cat">
            <p>сутки 3190 руб.<br />
              час 350 руб.</p>
            <h3><a href="#">1-комнатная квартира на сутки</a></h3>
            <p class="cat_address">1-й Монечковский пер, д.18 <br />
              м. Новокузнецкая (10 мин.)</p>
            <a href="#" class="link_map">показать на карте</a>
            <p class="p_id">ID 100500</p>
            <p class="p_phone">8 (903) 508-37-55  Антон</p>
            <p>Для порядочных и вежливых путешественников! Уютная, просторная, красивая квартира. Расположена в историческом центре Москвы. В пешей доступности от пяти станций метро павелецкая(зеленая и кольцевая ветки метро), добрынинская</p>
            <a href="#" class="link_more">подробнее</a> </div>
        </div>
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
<!--main-->'; 
?>