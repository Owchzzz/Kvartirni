
  <div class="section">


    <h1><?php echo lang('user_registration'); ?></h1>
    <p><?php echo lang('user_registration_intro1'); ?><br />
<?php echo lang('user_registration_intro2'); ?></p>


    <form action="/new/users/submitreg.html" method="post" class="form_registr">

    <label><?php echo lang('username'); ?></label><input name="username" id="username" type="text" value="" />
    <label>E-mail</label><input type="text" name="email" id="email" value="" />
	  <label><?php echo lang('password'); ?></label><input type="password" name="password1" id="password1" value="" />
 <label><?php echo lang('password_repeat'); ?></label><input type="password" name="password2" id="password2" value="" />
 <p class="error"><?php echo lang('password_not_match'); ?></p>
<input type="submit" value="<?php echo lang('registration'); ?>">
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
    <a href="index.html"><img src="/new/media/i/logo_f.png" alt="" class="logo-f" /></a> <a href="index.html"><img src="/new/media/i/logo_d.png" alt="" class="logo-d" /></a> </div>
</div>
<!--footer--> 

<script src="/new/media/js/jquery.js" type="text/javascript"></script> 
<script src="/new/media/js/jquery.colorbox-min.js" type="text/javascript"></script> 
<script type="text/javascript">
        $(document).ready(function () {
                    $(".cat_pic a").colorbox();
					$(".carousel a").colorbox();
        });
    </script> 
<script type="text/javascript" src="/new/media/js/coin-slider.js"></script> 
<script type="text/javascript">
$('#coin-slider').coinslider();
</script> 
<script type="text/javascript" src="/new/media/js/test.js"></script> 
<script type="text/javascript" src="/new/media/js/select.js"></script> 
<script type="text/javascript">$(document).ready(function(){$('.selectBlock').sSelect();});</script> 
<script type="text/javascript" src="/new/media/js/jquery.jcarousel.js"></script> 
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('.d-carousel .carousel').jcarousel({
        scroll: 1
    });
});
</script> 
<script type="text/javascript" src="/new/media/js/js.js"></script>
</body>
</html>
