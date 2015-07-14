<body>
<div class="main">
  <div class="header">
 
	  <?
if (isset($_SESSION['loginid'])){
$login=$db->getRow("select * from users where id=".$_SESSION['loginid'].";");
$loginname=$login['login'];	
$userinfo=$db->getRow("select * from users_info where id=".$_SESSION['loginid'].";");
$balance=number_format($userinfo["balance"], 0, ',', ' ');	
echo '<div class="login_open">
      <p class="p_name">'.$loginname.'</p>
      <a href="/logout.html" class="link_output">выйти</a> 
	  <a href="/oplati.html"><strong>Пополнить баланс</strong></a> 
	 
      <p class="p_chet">На Вашем счете <span>'.$balance.' руб.</span></p>
      <a href="/cabinet.html">Кабинет</a> <a href="/cabinet.html">Редактировать данные</a> </div>';
    
	echo '<form action="#" method="post" class="form_currency">
      <label>Валюта</label>
      <select class="selectBlock">';
	
	$valuta=$db->getRow("select * from users_info where id=\"".$_SESSION['loginid']."\"");
	$valuta=$valuta['valuta'];
	echo '<option selected="selected">'.$valuta.'</option>';
	$result = $db->query("select * from valutas where symbol != \"$valuta\" order by symbol ASC");
	while ($row = $db->fetch($result)){ 
		echo '<option>'.$row['symbol'].'</option>';
	}		

		
    echo '</select></form>';
	
}else{
	echo ' <div class="div_login">
	       <form action="/login.html" method="post" class="form_login">
        <input type="text" name="login" placeholder="имя пользователя" />
        <input type="password" name="password" placeholder="пароль" />
        <input type="submit" value="войти" />';
	if (isset($_SESSION['errorlogin'])){
	unset($_SESSION['errorlogin']);
		echo "<font color=red>Ошибка авторизации</font><br>";
	}
	echo '<a href="#">Регистрация</a> <a href="#">Восстановление пароля</a>
      </form>
	 </div> ';
	
echo '<form action="#" method="post" class="form_currency">
      <label>Валюта</label>
      <select class="selectBlock">';
	echo '<option>RUB</option>';
	$result = $db->query("select * from valutas where symbol != \"RUB\" order by symbol ASC");
	while ($row = $db->fetch($result)){ 
		echo '<option>'.$row['symbol'].'</option>';
	}
    echo '</select></form>';
	
}  
	  ?>
    
	  <a href="index.html"><img src="http://kvartirni.ru/i/logo.png" alt="" class="logo"/></a>
    <ul class="nav">
      <li <? activemenu('/'); activemenu('/index.html'); ?>><a href="index.html">Главная</a></li>
      
		<?
if ($_SERVER["HTTP_HOST"] != "kvartirni.ru" AND $_SERVER["HTTP_HOST"] != "www.kvartirni.ru"){	
echo '<li><a href="katalog.html">Каталог квартир</a></li>';
}
		?>
      
	<li><a href="#">Партнерская программа</a></li>
    </ul>
  </div>