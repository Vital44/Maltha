<?php
header("Content-Type: text/html; charset=utf-8");
$name = htmlspecialchars($_POST["name"]);
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["tel"]);
$email = htmlspecialchars($_POST["email"]);
$company = htmlspecialchars($_POST["company"]);

$check = is_array($_POST['check']) ? $_POST['check'] : array();
$check = implode (', ', $check );

$radio = htmlspecialchars($_POST["radio"]);

$refferer = getenv('HTTP_REFERER');
$date=date("d.m.y"); // число.месяц.год  
$time=date("H:i"); // часы:минуты:секунды 
$myemail = "DimaSmirn44@yandex.ru";

$tema = "Тема письма админу";
$message_to_myemail = "Текст письма:
<br><br>
Имя: $name<br>
Фамилия: $name<br>
Телефон: $tel<br>
E-mail: $email<br>
Компания: $company<br>
Источник (ссылка): $refferer
";

mail($myemail, $tema, $message_to_myemail, "From: Maltha <dimka44.ru> \r\n Reply-To: Maltha \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n" );


$tema = "Тема письма клиенту";
$message_to_myemail = "
Текст письма<br>
<h3>Спасибо $name что отправили заявку.</h3><br>
<b>Через некоторое время с Вами свяжуться.</b>

";
$myemail = $email;
mail($myemail, $tema, $message_to_myemail, "From: Maltha <dimka44.ru> \r\n Reply-To: Maltha \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n" );


$f = fopen("leads.xls", "a+");
fwrite($f," <tr>");    
fwrite($f," <td>$email</td> <td>$name</td> <td>$tel</td>   <td>$date / $time</td>");   
fwrite($f," <td>$refferer</td>");    
fwrite($f," </tr>");  
fwrite($f,"\n ");    
fclose($f);


?>