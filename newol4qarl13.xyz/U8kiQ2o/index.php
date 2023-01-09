
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
<div class="login-dark">
    <form method="POST">
        <h2 class="sr-only">Авторизация</h2>
        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
        <div class="form-group"><input class="form-control" type="text" name="login" placeholder="Логин..."></div>
        <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Пароль..."></div>
        <div class="form-group"><button class="btn btn-primary btn-block" name="submit" type="submit">Войти</button></div></form>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: fixed;right: 0;bottom: 0;margin: 1%; display:none" >
            Вы ввели неправильный логин или пароль            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
</div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>