<?php 
$tel = $_POST['tel'];
$name = $_POST['name'];
//Указываем на какой ящик отправить письмо
$to = "zakaz-protectmaster@yandex.ru"; 
//Тема письма
$subject = "Заявка с сайта protect-master.ru";
//Сообщение письма
$message = "
Имя: ".htmlspecialchars($name)."<br />
Телефон: <a href='tel:$tel'>".htmlspecialchars($tel);
//Отправляем письмо при помощи функции mail();
$headers = "From: protect-master.ru <zakaz-protectmaster@yandex.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
//Отправляем письмо при помощи функции mail();
mail ($to, $subject, $message, $headers, $mail_body);
//Перенаправляем человека на страницу благодарности;
header('Location: index.html');
exit();
 ?>}
