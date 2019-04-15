<?php
if ($_POST[name]!='' && $_POST[tel]!='') {
	$headers = NULL; 
	$headers .= "Content-Type:text/html; charset=utf8\r\n" 
	$headers .= "From:<dima@yandex.ru>\r\n"; 
	$headers .= "X-Mailer: PHP/".phpversion()."\r\n"; 
	$allmsg .="
		Имя: $_POST[name]<br/>
		Телефон: $_POST[tel]<br/>
	"
	mail ("basharkindima@gmail.com", "Order from tarakan")
	header('Location: contact.html')
	echo "<script>document.location.href = '/contact.html';</script>"
	exit('Ошибка перенаправления')

}