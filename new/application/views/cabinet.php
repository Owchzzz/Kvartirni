
    <div class="cL"></div> <h1><?php echo lang('my_apartments'); ?></h1>
    <a href="aparts/add_apart.html" class="link_add"><?php echo lang('add_apartments'); ?></a>
    <div class="div_add">
        <ul class="ul_add">
            <li> <span>&nbsp;</span> <span>№</span> <span><?php echo lang('photo'); ?></span> <span><?php echo lang('address'); ?>, <?php echo lang('number_rooms'); ?></span> <span><?php echo lang('prices'); ?></span> <span><?php echo lang('actions'); ?></span></li>
            <li class="li_bg_1"> <span>
                    <!--<input type="checkbox"  class="styled"/>
                </span> <span> 100500 </span> <span> <img src="http://kvartirni.ru/i/pic_table.jpg" alt="" /><img src="http://kvartirni.ru/i/pic_table.jpg" alt="" /><img src="http://kvartirni.ru/i/pic_table.jpg" alt="" /><img src="http://kvartirni.ru/i/pic_table.jpg" alt="" /><img src="http://kvartirni.ru/i/pic_table.jpg" alt="" /> <a href="#"><img src="http://kvartirni.ru/i/plus_table.jpg" alt="" /></a><a href="#"><img src="http://kvartirni.ru/i/plus_table.jpg" alt="" /></a><a href="#"><img src="http://kvartirni.ru/i/plus_table.jpg" alt="" /></a><a href="#"><img src="http://kvartirni.ru/i/plus_table.jpg" alt="" /></a><a href="#"><img src="http://kvartirni.ru/i/plus_table.jpg" alt="" /></a> </span> <span> Кирова 4<br />
                    1-комнатная <span><?php echo lang('updated'); ?>: 11.05.2013 </span> </span> <span>
                     <label><?php echo lang('day'); ?></label>
                    <input type="text" value="3200" />
                    <label><?php echo lang('night'); ?></label>
                    <input type="text" value="350" />
                    <label><?php echo lang('hour'); ?></label>
                    <input type="text" value="" />
                </span> <span> <a href="#"><?php echo lang('advertise'); ?></a> <a href="#"><?php echo lang('edit'); ?></a> <a href="#">
				<?php echo lang('enable'); ?></a> <a href="#"><?php echo lang('delete'); ?></a> </span> </li>



            <li><span>
                    <input type="checkbox"  class="styled"/>
                </span> <span> 1 </span> <span> <img src="http://kvartirni.ru/i/pic_table.jpg" alt="" /><img src="http://kvartirni.ru/i/pic_table.jpg" alt="" /><img src="http://kvartirni.ru/i/pic_table.jpg" alt="" /><img src="http://kvartirni.ru/i/pic_table.jpg" alt="" /><img src="http://kvartirni.ru/i/pic_table.jpg" alt="" /> <a href="#"><img src="http://kvartirni.ru/i/plus_table.jpg" alt="" /></a><a href="#"><img src="http://kvartirni.ru/i/plus_table.jpg" alt="" /></a><a href="#"><img src="http://kvartirni.ru/i/plus_table.jpg" alt="" /></a><a href="#"><img src="http://kvartirni.ru/i/plus_table.jpg" alt="" /></a><a href="#"><img src="http://kvartirni.ru/i/plus_table.jpg" alt="" /></a> </span> 
                <span> Мохова 42<br />
                    1-комнатная <span><?php echo lang('updated'); ?>: 21.06.2013 </span> </span> <span>
                    <label><?php echo lang('day'); ?></label>
                    <input type="text" value="3200" />
                    <label><?php echo lang('night'); ?></label>
                    <input type="text" value="350" />
                    <label><?php echo lang('hour'); ?></label>
                    <input type="text" value="" />
                </span> <span> <a href="#"><?php echo lang('advertise'); ?></a> <a href="#"><?php echo lang('edit'); ?></a> <a href="#">
				<?php echo lang('enable'); ?></a> <a href="#"><?php echo lang('delete'); ?></a> </span> </li>	-->
                                <?php echo $aparts;?>
        </ul>
    </div>
    <form class="form_vubor" action="#" method="post"> <label><?php echo lang('actions'); ?>:</label>   
        <div class="sel_1">
            <select class="selectBlock">
                <option><?php echo lang('update_prices'); ?></option>
                <option><?php echo lang('delete'); ?></option>
                <option><?php echo lang('disable'); ?></option>
            </select></div>
        <input type="submit" value="Ок" /></form>
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