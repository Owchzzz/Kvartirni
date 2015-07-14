<? 
include('config.php'); 
include('header.php'); 
$page=$_GET['page'];
include('head.php'); 

if ($page==""){
	include("pages/index.php");
}
	if (!file_exists("pages/$page.php") AND $page != ""){
		header("Location: /page_404.shtml");	
};
	include("pages/$page.php");
	

include('footer.php');  

?>

