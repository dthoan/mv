<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <a href="<?=BASE_URL?>?controller=product&action=add" class="btn btn-primary float-right mb-3">Add</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Images</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(($products ?? []) as $product) : ?>
                        <tr>
                            <th scope="row"><?=$product['id']?></th>
                            <td><?=$product['name']?></td>
                            <td><?=$product['price']?></td>
                            <td><?=$product['description']?></td>
                            <td><?=$product['category']?></td>
                            <td style="width: 100px">
                                <img src="<?=$product['images'] != '' ? $product['images'] : 'public/images/husky.jpg'?>" class="w-100"/>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-success" href="<?=BASE_URL?>?controller=product&action=edit&id=<?=$product['id']?>">Edit</a>
                                <a 
                                    class="btn btn-danger" 
                                    href="<?=BASE_URL?>?controller=product&action=delete&id=<?=$product['id']?>"
                                    onclick="return confirm('Are you sure delete this product?????')"
                                >Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>