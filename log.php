<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/iconsfont.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>

<body>
    <!-- Блок шапка START-->
    <?php include("app/include/header.php"); ?>
    <!-- Блок шапка END-->
    <!-- FORM START -->
    <div class="container reg-form">
        <form class="row justify-content-center" method="post" action="log.html">
            <h2>Вход</h2>
            <div class="mb-3 col-12 col-md-4 mt-3">
                <label for="fo rmGroupExampleInput" class="form-label">Ваш логин</label>
                <input type="text" class="form-control" id="formGroupExampleInput"
                    placeholder="введите ваш логин">
            </div>
            
            
            <div class="w-100"></div>
            <div class="mb-3 col-12 col-md-4">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="введите ваш пароль">
            </div>
            
            <div class="w-100"></div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <div class="mb-3 col-12 col-md-4">
                <button type="submit" class="btn btn-secondary">Войти</button>
                <a href="reg.php">Зарегистрироваться</a>
            </div>
            
        </form>
    </div>

    <!-- FORM END -->
    <!-- Footer -->
    <?php include("app/include/footer.php"); ?>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>