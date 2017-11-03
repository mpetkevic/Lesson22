<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col red">
                    <img src="img/picture.png" alt="">
                </div>
                <div class="col green">
                    <h1>Сохрани свой аккаунт</h1>
                    <p>Получи бесплатно неограниченное количество форм, вопросов и ответов.</p>
                    <form action="thanks.php" id="form" method="post">
                        <label for="username"><i class="fa fa-user"></i></label>
                        <input type="text" name="username" id="username" placeholder="Имя">
                        <label for="email"><i class="fa fa-envelope-o"></i></label>
                        <input type="text" name="email" id="email" placeholder="Емайл">
                        <label for="password"><i class="fa fa-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Пароль">
                        <button>Сохранить<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </form>
                    <span>Уже есть аккаунт?</span>
                    <a href="#">Войти</a>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>