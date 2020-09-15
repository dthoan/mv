<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?=BASE_URL?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>List</title>
</head>
<body>
    <div id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <marquee>Đây là đài tiếng nói Việt Nam. Phát thanh từ Hà Nội, thủ đô nước cộng hòa xã hội chủ nghĩa Việt Nam..</marquee>
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        <?= $contents ?? '' ?>
    </div>
    <div id="footer">
        <?= $footer ?? '' ?>
        <?= $header ?? '' ?>
    </div>
</body>
</html>