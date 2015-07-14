<?
$city=$_GET['city'];
$page=$_GET['page'];
include('config.php'); 
/* Параметры по городам */
$cityexist=$db->getRow("select * from city where latname=\"$city\"");
$cityexist2=$cityexist['id'];
if ($cityexist2 > 0){
$cityname=$cityexist['cityname'];
$chaspos=$cityexist['timepoyas'];
	#Настройка времени
#$date = new DateTime($curDate) ; $date->setTimezone(new DateTimeZone("$chaspos"));
#$skolkotime=$date->format('H:i').'<br>';
}else{
	header("Location: http://kvartirni.ru");
}
/* Конец городских параметров */

include('header.php'); 
include('head.php');
if ($page=="index" OR $page==""){
	include("region.php");
}
elseif (!file_exists("pages/$page.php") AND $page != ""){
		header("Location: /page_404.shtml");	
}else{
	include("pages/$page.php");
}

include('footer.php');
?>
