<?php
$name=htmlspecialchars(@$_POST["name"],ENT_QUOTES,"windows-1251");
$address=htmlspecialchars(@$_POST["address"],ENT_QUOTES,"windows-1251");
$value=(int)@$_POST["value"];
$servicename=htmlspecialchars(@$_POST["servicename"],ENT_QUOTES,"windows-1251");
$dogovor=htmlspecialchars(@$_POST["dogovor"],ENT_QUOTES,"windows-1251");
$daypay=(int)@$_POST["daypay"];
$monthpay=htmlspecialchars(@$_POST["monthpay"],ENT_QUOTES,"windows-1251");
$yearpay=(int)@$_POST["yearpay"];
?>
<html>
<!------------------------------------------------------------------>
<head>
<META http-equiv=Content-Type content=text/html;charset=windows-1251>
<meta name="Author" content="Сергей Задорожный">
<title>Бланк ПД4 для оплаты услуг</title>
<style>
body{font-family:Arial, Helvetica, sans-serif}
td{font-size:9pt}
</style>
</head>
<!------------------------------------------------------------------>
<body>
<table border=1 cellspacing=0 cellpadding=3>
  <tr> 
    <th width="140" valign="top">
    Извещение
    <br><br><br><br><br><br><br><br><br><br>
    Кассир
    </th>
    <td valign="top">
    
    <table border=0 cellspacing=0 cellpadding=0 >
    <tr><td style="text-align:right;font-size:9pt">Форма № ПД-4</td></tr>
    <tr><td style="text-align:center;font-size:9pt">_________________<b>Наша фирма</b>___________________</td></tr>
    <tr><td style="text-align:center;font-size:8pt">(наименование получателя платежа)</td></tr>
    <tr><td  style="font-size:9pt">
    <table border=1 cellspacing=0 cellpadding=1>
    <tr>
    <td style="border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:2">&nbsp;&nbsp;&nbsp;</td>
    <td>7</td>
    <td>7</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>

    <td width=100 style="border-top-width:0;border-bottom-width:0;border-left-width:2;border-right-width:2"></td>

    <td>4</td>
    <td>0</td>
    <td>7</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    </tr>
    </table>
    </td></tr>
    <tr><td style="text-align:left;font-size:8pt">(ИНН получателя платежа)
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    (номер счета получателя платежа)
    </td></tr>
<tr><td style="text-align:left">
<table border=1 cellspacing=0 cellpadding=1>
    <tr>
<td  style="border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:1">
B Сбербанке РФ г. Москва &nbsp;&nbsp; &nbsp; &nbsp; БИК &nbsp;  </td>
    <td>0</td>
    <td>4</td>
    <td>4</td>
    <td>5</td>
    <td>2</td>
    <td>5</td>
    <td>2</td>
    <td>2</td>
    <td>5</td>
    </tr>
    </table>
 </td></tr>    
    <tr><td style="text-align:left;font-size:8pt">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(наименование бавнка получателя платежа)
</td></tr>
<tr><td style="text-align:left">
<table border=1 cellspacing=0 cellpadding=1>
    <tr>
<td  style="border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:2"><nobr>Номер кор.сч.банка получателя платежа</nobr> 
</td>
    <td>3</td>
    <td>0</td>
    <td>1</td>
    <td>0</td>
    <td>1</td>
    <td>8</td>
    <td>1</td>
    <td>0</td>
    <td>4</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>2</td>
    <td>2</td>
    <td>5</td>
    </tr></table>
 </td></tr>    
<tr><td style="text-align:left;padding-top:10;font-size:8pt">
<table border=0 cellspacing=0 cellpadding=0 width="100%">
    <tr>
<td>_<?=$servicename?>_</td>
<td  style="text-align:right">_<?=$dogovor?>_</td>
</tr>
</table>

</td></tr>
<tr><td style="text-align:right;font-size:8pt">(наименование платежа)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    (номер лицевого счета(код) плательщика)
</td></tr>
<tr><td style="text-align:left;font-size:9pt"><nobr>Ф.И.О. плательщика _<?=$name?>_</nobr>
</td></tr>
<tr><td style="text-align:left;font-size:9pt"><nobr>Адрес плательщика_<?=$address?>_</nobr>
</td></tr>
<tr><td style="text-align:left;font-size:9pt">Сумма платежа _<?=$value?>_руб._00_коп. 
Сумма платы за услуги  _______руб.____коп.
</td></tr>
<tr><td style="text-align:left;font-size:9pt">Итого_______руб.____коп. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&quot;<? echo($daypay);?>&quot; _<? echo($monthpay);?>_ <? echo($yearpay);?> г.
</td></tr>
<tr><td style="text-align:left;font-size:8pt">
С условиями приема указанной в платежном документе суммы, в т.ч. с суммой взимаемой платы<br>
за услуги банка ознакомлен и согласен.&nbsp;&nbsp;&nbsp;<span style="font-size:10pt;font-weight:bold">Подпись плательщика _________________</span>
</td></tr>
</table>

</td>
</tr>
<tr> 
    <th width="140" valign="top">
    <br><br><br>Квитанция
    <br><br><br><br><br><br><br>
    Кассир
    </th>
    <td valign="top">
    <table border=0 cellspacing=0 cellpadding=0 >
    <tr><td style="text-align:right;font-size:9pt">Форма № ПД-4</td></tr>
    <tr><td style="text-align:center;font-size:9pt">_________________<b>ООО &quot;МЗ Компьютер&quot;</b>___________________</td></tr>
    <tr><td style="text-align:center;font-size:8pt">(наименование получателя платежа)</td></tr>
    <tr><td  style="font-size:9pt">
    <table border=1 cellspacing=0 cellpadding=1>
    <tr>
    <td style="border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:2">&nbsp;&nbsp;&nbsp;</td>
    <td>7</td>
    <td>7</td>
    <td>3</td>
    <td>1</td>
    <td>5</td>
    <td>5</td>
    <td>1</td>
    <td>3</td>
    <td>6</td>
    <td>6</td>

    <td width=100 style="border-top-width:0;border-bottom-width:0;border-left-width:2;border-right-width:2"></td>

    <td>4</td>
    <td>0</td>
    <td>7</td>
    <td>0</td>
    <td>2</td>
    <td>8</td>
    <td>1</td>
    <td>0</td>
    <td>1</td>
    <td>3</td>
    <td>8</td>
    <td>0</td>
    <td>6</td>
    <td>0</td>
    <td>1</td>
    <td>4</td>
    <td>4</td>
    <td>1</td>
    <td>8</td>
    <td>9</td>
    </tr>
    </table>
    </td></tr>
    <tr><td style="text-align:left;font-size:8pt">(ИНН получателя платежа)
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    (номер счета получателя платежа)
    </td></tr>
<tr><td style="text-align:left">
<table border=1 cellspacing=0 cellpadding=1>
    <tr>
<td  style="border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:1">
B Царицынском отделении Сбербанка РФ г. Москва &nbsp;&nbsp; &nbsp; &nbsp; БИК &nbsp;  </td>
    <td>0</td>
    <td>4</td>
    <td>4</td>
    <td>5</td>
    <td>2</td>
    <td>5</td>
    <td>2</td>
    <td>2</td>
    <td>5</td>
    </tr>
    </table>
 </td></tr>    
    <tr><td style="text-align:left;font-size:8pt">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(наименование бавнка получателя платежа)
</td></tr>
<tr><td style="text-align:left">
<table border=1 cellspacing=0 cellpadding=1>
    <tr>
<td  style="border-top-width:0;border-bottom-width:0;border-left-width:0;border-right-width:2"><nobr>Номер кор.сч.банка получателя платежа</nobr> 
</td>
    <td>3</td>
    <td>0</td>
    <td>1</td>
    <td>0</td>
    <td>1</td>
    <td>8</td>
    <td>1</td>
    <td>0</td>
    <td>4</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>0</td>
    <td>2</td>
    <td>2</td>
    <td>5</td>
    </tr></table>
 </td></tr>    
<tr><td style="text-align:left;padding-top:10;font-size:8pt">
<table border=0 cellspacing=0 cellpadding=0 width="100%">
    <tr>
<td>_<?=$servicename?>_</td>
<td  style="text-align:right">_<?=$dogovor?>_</td>
</tr>
</table>

</td></tr>
<tr><td style="text-align:right;font-size:8pt">(наименование платежа)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    (номер лицевого счета(код) плательщика)
</td></tr>
<tr><td style="text-align:left;font-size:9pt"><nobr>Ф.И.О. плательщика _<?=$name?>_</nobr>
</td></tr>
<tr><td style="text-align:left;font-size:9pt"><nobr>Адрес плательщика_<?=$address?>_</nobr>
</td></tr>
<tr><td style="text-align:left;font-size:9pt">Сумма платежа _<?=$value?>_руб._00_коп. 
Сумма платы за услуги  _______руб.____коп.
</td></tr>
<tr><td style="text-align:left;font-size:9pt">Итого_________руб._____коп. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&quot;<? echo($daypay);?>&quot; _<? echo($monthpay);?>_ <? echo($yearpay);?> г.
</td></tr>
<tr><td style="text-align:left;font-size:8pt">
С условиями приема указанной в платежном документе суммы, в т.ч. с суммой взимаемой платы<br>
за услуги банка ознакомлен и согласен.&nbsp;&nbsp;&nbsp;<span style="font-size:10pt;font-weight:bold">Подпись плательщика _________________</span>
</td></tr>
</table>
</td>
 </tr>
</table>
</body>
</html>
