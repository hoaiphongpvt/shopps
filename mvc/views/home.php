<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <div class="container pt-4">
        <?php 
            require_once "./mvc/views/blocks/header.php";
            require_once "./mvc/views/pages/".$data['Page'].".php";
        ?>
    </div>
    
</body>
</html>