<?
include("config.php");
$result = $db->query("select * from d_fias_addrobj where aolevel=\"4\" and centstatus=\"2\" group by okato order by formalname ASC");
	while ($row = $db->fetch($result)){ 
		$trans=translit_url($row["formalname"]);
		echo 'Город: '.$row["formalname"].'. ОКАТО: '.$row['okato'].'. Транслит: '.$trans.'<br><hr>';
$name=$row["formalname"];
$sql  = "delete from city where cityname=\"$name\"";
$db->query($sql);
$data = array('latname'=>"$trans",'cityname'=>"$name",'country'=>"1",'okato'=>$row['okato']);
$sql  = "INSERT INTO city SET ?u";
$db->query($sql, $data);		
	};

$result = $db->query("select * from d_fias_addrobj where formalname=\"Москва\" and aolevel=\"1\" group by okato order by formalname ASC");
	while ($row = $db->fetch($result)){ 
		$trans=translit_url($row["formalname"]);
		echo 'Город: '.$row["formalname"].'. ОКАТО: '.$row['okato'].'. Транслит: '.$trans.'<br><hr>';
$name=$row["formalname"];
		$sql  = "delete from city where cityname=\"$name\"";
$db->query($sql);
$data = array('latname'=>"$trans",'cityname'=>"$name",'country'=>"1",'okato'=>$row['okato']);
$sql  = "INSERT INTO city SET ?u";
$db->query($sql, $data);			
	};

$result = $db->query("select * from d_fias_addrobj where formalname=\"Санкт-Петербург\" and aolevel=\"1\" group by okato order by formalname ASC");
	while ($row = $db->fetch($result)){ 
		$trans=translit_url($row["formalname"]);
		echo 'Город: '.$row["formalname"].'. ОКАТО: '.$row['okato'].'. Транслит: '.$trans.'<br><hr>';
$name=$row["formalname"];
		$sql  = "delete from city where cityname=\"$name\"";
$db->query($sql);
$data = array('latname'=>"$trans",'cityname'=>"$name",'country'=>"1",'okato'=>$row['okato']);
$sql  = "INSERT INTO city SET ?u";
$db->query($sql, $data);			
	};

function translit_url($text) { 
preg_match_all('/./u', $text, $text); 
$text = $text[0]; $simplePairs = array( 'а' => 'a' , 'л' => 'l' , 'у' => 'u' , 'б' => 'b' , 'м' => 'm' , 'т' => 't' , 'в' => 'v' , 'н' => 'n' , 'ы' => 'y' , 'г' => 'g' , 'о' => 'o' , 'ф' => 'f' , 'д' => 'd' , 'п' => 'p' , 'и' => 'i' , 'р' => 'r' , 'А' => 'A' , 'Л' => 'L' , 'У' => 'U' , 'Б' => 'B' , 'М' => 'M' , 'Т' => 'T' , 'В' => 'V' , 'Н' => 'N' , 'Ы' => 'Y' , 'Г' => 'G' , 'О' => 'O' , 'Ф' => 'F' , 'Д' => 'D' , 'П' => 'P' , 'И' => 'I' , 'Р' => 'R' , ); $complexPairs = array( 'з' => 'z' , 'ц' => 'c' , 'к' => 'k' , 'ж' => 'zh' , 'ч' => 'ch' , 'х' => 'kh' , 'е' => 'e' , 'с' => 's' , 'ё' => 'jo' , 'э' => 'eh' , 'ш' => 'sh' , 'й' => 'jj' , 'щ' => 'shh' , 'ю' => 'ju' , 'я' => 'ja' , 'З' => 'Z' , 'Ц' => 'C' , 'К' => 'K' , 'Ж' => 'ZH' , 'Ч' => 'CH' , 'Х' => 'KH' , 'Е' => 'E' , 'С' => 'S' , 'Ё' => 'JO' , 'Э' => 'EH' , 'Ш' => 'SH' , 'Й' => 'JJ' , 'Щ' => 'SHH' , 'Ю' => 'JU' , 'Я' => 'JA' , 'Ь' => "" , 'Ъ' => "" , 'ъ' => "" , 'ь' => "" , ); $specialSymbols = array( "_" => "-", "'" => "", "`" => "", "^" => "", " " => "-", '.' => '', ',' => '', ':' => '', '"' => '', "'" => '', '<' => '', '>' => '', '«' => '', '»' => '', ' ' => '-', ); $translitLatSymbols = array( 'a','l','u','b','m','t','v','n','y','g','o', 'f','d','p','i','r','z','c','k','e','s', 'A','L','U','B','M','T','V','N','Y','G','O', 'F','D','P','I','R','Z','C','K','E','S', ); $simplePairsFlip = array_flip($simplePairs); $complexPairsFlip = array_flip($complexPairs); $specialSymbolsFlip = array_flip($specialSymbols); $charsToTranslit = array_merge(array_keys($simplePairs),array_keys($complexPairs)); $translitTable = array(); foreach($simplePairs as $key => $val) $translitTable[$key] = $simplePairs[$key]; foreach($complexPairs as $key => $val) $translitTable[$key] = $complexPairs[$key]; foreach($specialSymbols as $key => $val) $translitTable[$key] = $specialSymbols[$key]; $result = ""; $nonTranslitArea = false; foreach($text as $char) { if(in_array($char,array_keys($specialSymbols))) { $result.= $translitTable[$char]; } elseif(in_array($char,$charsToTranslit)) { if($nonTranslitArea) { $result.= ""; $nonTranslitArea = false; } $result.= $translitTable[$char]; } else { if(!$nonTranslitArea && in_array($char,$translitLatSymbols)) { $result.= ""; $nonTranslitArea = true; } $result.= $char; } } return strtolower(preg_replace("/[-]{2,}/", '-', $result)); } $str = iconv('UTF-8','windows-1251//TRANSLIT','Умляуты немецкого языка: äöüÄÖÜßèéû и Прочие: Čúу́ и т.д. (их очень много)'); $str = iconv('windows-1251','UTF-8',$str); echo translit_url ($str);

?>