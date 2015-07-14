<?
include("config.php");
header('Content-Type: text/javascript; charset=UTF-8');
define('DB_SERVER', 'localhost');
define('DB_USER', 'kvartirni');
define('DB_PASSWORD', 'gz5uJADB');
define('DB_NAME', 'kvartirni_db');

if (isset($_GET['q'])){
    $return_arr = array();
    try {
        $conn = new PDO( 
    'mysql:host=localhost;dbname=kvartirni_db', 
    'kvartirni', 
    'gz5uJADB', 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") 
); 
		
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare('SELECT cityname FROM city WHERE cityname LIKE :term');
        $stmt->execute(array('term' => '%'.$_GET['q'].'%'));
        
        while($row = $stmt->fetch()) {
            $return_arr[] =  array('label' => $row['cityname']);
        }
 
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
       echo json_encode($return_arr);
} 

if (isset($_GET['street'])){
	$okato=$_GET['okato'];
    $return_arr = array();
    try {
        $conn = new PDO( 
    'mysql:host=localhost;dbname=kvartirni_db', 
    'kvartirni', 
    'gz5uJADB', 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") 
); 		
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM streets WHERE name LIKE :term and okato=\"$okato\"");
        $stmt->execute(array('term' => '%'.$_GET['street'].'%'));
 
        while($row = $stmt->fetch()) {
			$street=$row['shortname']." ".$row['name'];
            $return_arr[] =  array('label' =>$street);
        }
     } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
       echo json_encode($return_arr);
} 

if (isset($_GET['cityredirect'])){
$city=$_GET['cityredirect'];
$citycheck=$db->getRow("select * from city where cityname=\"$city\"");
$citycheck=$citycheck['latname'];	
	if ($citycheck != ""){
		header("Location: http://".$citycheck.".kvartirni.ru");
	}
} 
 


?>