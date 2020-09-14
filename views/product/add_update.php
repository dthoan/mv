<?php
    $typePage = $typePage ?? 'add';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Form <?=ucfirst($typePage)?></title>
</head>
<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-6">
            <form action="<?=BASE_URL?>?controller=product&action=<?=$typePage?>Form" method="POST">
                <?php if($typePage == 'edit') : ?>
                    <input type="hidden" name="id" value="<?=$product['id'] ?? ''?>">
                <?php endif; ?>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" placeholder="Name Product" id="name" name="name" value="<?=$product['name'] ?? ''?>">
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" placeholder="Price Product" id="price" name="price" value="<?=$product['price'] ?? ''?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="5"><?=$product['description'] ?? ''?></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><?=strtoupper($typePage)?></button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>