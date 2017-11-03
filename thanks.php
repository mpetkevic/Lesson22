<?php
//Принимаем постовые данные
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
//Тут указываем на какой ящик посылать письмо
$to = "miroslav.petkevic@gmail.com";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Lesson_22 mail";
// Сообщение письма
$message = "Имя пользователя: ".htmlspecialchars($name)."<br />";
// Отправляем письмо при помощи функции mail();
//$headers = "From: stastroi.ru <mail@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
//header('Location: thanks.php');
//exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<style>
    h2 {
    text-align: center;
    color: white;
    font-size: 60px;
    margin-top: 100px;
    }
</style>
<body>
    <h2>Thanks, <?php echo $name; ?> !!!</h2>
    <p><?php echo $message; ?></p> <!-- komnetaras -->
</body>
</html>