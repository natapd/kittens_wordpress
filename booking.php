<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta carset="utf-8">
    <meta name="description" content="Питомник шотландских кошек в Санкт-Петербурге">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    
    <title>Питомник McCrae World</title>
     <link rel="canonical" href="https://"/>
     <link rel="icon" href="favicon.ico" type="image/x-icon">
     <link rel="preload" href="fonts/BreeCYR-Light.woff2" as="font">
     <link rel="preload" href="fonts/BreeCYR-Book.woff2" as="font">
    <link href="css/style-auto.css?ver=18" rel="stylesheet">
    
  </head>
  <body>
  	<?php
$Bfio = $_POST['Bfio'];

$Btel = $_POST['Btel'];
$Bkitten=$_POST['Bkitten'];
$Bdiscr = $_POST['Bdiscr'];
$Bfio = htmlspecialchars($Bfio);

$Bkitten = htmlspecialchars($Bkitten);
$Btel = htmlspecialchars($Btel);
$Bdiscr = htmlspecialchars($Bdiscr);
$Bfio = urldecode($Bfio);

$Bkitten = urldecode($Bkitten);
$Btel = urldecode($Btel);
$Bdiscr = urldecode($Bdiscr);
$Bfio = trim($Bfio);

$Bkitten = trim($Bkitten);
$Btel = trim($Btel);
$Bdiscr = trim($Bdiscr);
//echo $fio;
//echo "<br>";
//echo $email;
//echo $Bkitten;
if (mail("nata_pd@mail.ru", "Заявка с сайта о котенке", "ФИО:".$Bfio.". Телефон: ".$Btel. ". Имя котенка: ".$Bkitten. ". Вопрос: ".$Bdiscr ,"From: info@kittenshouse.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
<br>
<a href="http://kittenshouse.ru">Вернуться на главную страницу</a>
</body>
</html>