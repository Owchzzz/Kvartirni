<?
function strrtoupper($str) { 
    $trans=array( 
     "а" => "А",  "б" => "Б",  "в" => "В",  "г" => "Г",  "д" => "Д",  "е" => "Е",  
     "ё" => "Ё",  "ж" => "Ж",  "з" => "З",  "и" => "И",  "й" => "Й",  "к" => "К",  
     "л" => "Л",  "м" => "М",  "н" => "Н",  "о" => "О",  "п" => "П",  "р" => "Р",  
     "с" => "С",  "т" => "Т",  "у" => "У",  "ф" => "Ф",  "х" => "Х",  "ц" => "Ц",  
     "ч" => "Ч",  "ш" => "Ш",  "щ" => "Щ",  "ь" => "Ь",  "ы" => "Ы",  "ъ" => "Ъ",  
     "э" => "Э",  "ю" => "Ю",  "я" => "Я",  
    );  
    $str=strtr($str,  $trans);  
    return($str);  
    } 

function activemenu($name){
	$pagecur=$_SERVER["REQUEST_URI"];
	if ($name=="$pagecur"){
		echo "class=\"active\"";
	};
}

function activemenu2($name){
	$pagecur=$_SERVER["REQUEST_URI"];
	if ($name=="$pagecur"){
		echo "class=\"act\"";
	};
}
?>