<?
$xml = simplexml_load_file("streets/AS_ADDROBJ_20130615_bbde0c79-2f6a-442b-b15b-1c15af9bd7bc.XML");
$offname=$xml->AddressObjects->Object[0]['OFFNAME'];
echo "Offname: $offname<br>";
?>