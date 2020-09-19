<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?= BASE_URL ?>">
    <title>MilkTea Sotre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <link rel="shortcut icon" type="image/x-icon" href="public/image/favicon.bin">
    <link rel="stylesheet" href="public/userAsset/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/userAsset/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/userAsset/css/jquery-ui.min.css">
    <link rel="stylesheet" href="public/userAsset/css/user.css">
</head>

<body>
    <?= $contents ?>
    <script src="public/userAsset/js/jquery.min.js"></script>
    <script src="public/userAsset/js/bootstrap.bundle.min.js"></script>
    <script src="public/userAsset/js/bootstrap.min.js"></script>
    <script src="public/userAsset/js/popper.min.js"></script>
    <script src="public/userAsset/js/jquery-ui.min.js"></script>
    <script src="public/userAsset/js/user.js"></script>
    <script>
        $(document).ready(function(){
            $(".datetime-picker").datepicker({
                dateFormat : 'dd/mm/yy'
            });
        })
    </script>
</body>
</html>