<?
include("config.php");
$result = $db->query("select * from city");
	while ($row = $db->fetch($result)){ 
		echo "Город ".$row['cityname']."<br>";
		$okato=$row['okato'];
			$result2 = $db->query("select * from d_fias_addrobj where okato=\"$okato \" and aolevel != \"4\"");
				while ($row2 = $db->fetch($result2)){ 
					echo ".";
						$name=$row2['formalname'];
						$sql  = "delete from streets where name=\"$name\"";
						$db->query($sql);
						$data = array('okato'=>"$okato",'name'=>"$name",'shortname'=>$row2['shortname']);
						$sql  = "INSERT INTO streets SET ?u";
						$db->query($sql, $data);
				}
	}
?>