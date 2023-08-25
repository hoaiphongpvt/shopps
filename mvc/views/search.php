<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Kết quả tìm kiếm</title>
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
            require_once "./public/assets/components/formatCurrency.php";
            require_once "./mvc/views/blocks/navbar.php";
            require_once "./mvc/views/pages/".$data['Page'].".php";
            require_once "./mvc/views/blocks/footer.php";
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <!-- Ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <!-- Core theme JS-->
        <script src="./public/js/main.js"></script>
    </body>
</html>
