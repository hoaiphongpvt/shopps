<!-- Pills navs -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Đăng kí</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="./public/assets/img/favicon/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="./public/css/style.css" />
        <link rel="stylesheet" href="./public/css/custom.css">
    </head>
    <body>
        <?php 
            require_once "./mvc/views/pages/".$data['Page'].".php";
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <!-- Ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <!-- Core theme JS-->
        <script src="./public/js/main.js"></script>
        <script src="./public/js/signup.js"></script>
    </body>
</html>