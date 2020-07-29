<?php 
// Post ma'lumotlarni qabul qilish
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
// Bu yerda qaysi emailga xabar yuborilishini yozamiz
$to = "sheraleks869@gmail.com";
// Keyin xabar mavzusi va xabarning o'zi
$subject = "Jalyuzi saytidan murojaat";
$message = "
Mening formamdan xabar keldi. <br>
Foydalanuvchi xohlaydi: ".htmlspecialchars($what)."<br>
Ismi: ".htmlspecialchars($name)."<br>
Telefon raqami: ".htmlspecialchars($phone);
$headers = "From: mysite.ru <site-email@mysite.ru>\r\nContent-type: text/html;
	charset=utf8 \r\n";
mail($to, $subject, $message, $headers);
header('location: thanks.html');
exit();
?>