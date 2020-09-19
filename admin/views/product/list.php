<style>
    .max-row-3{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
</style>
<div class="row disable_a_disabled">
    <div class="col-12">
        <?php
            $disableAdd = !Users::can('add_product') ? 'disabled' : '';
            $urlAdd = BASE_URL . '?controller=product&action=add';
        ?>
        <a
            href="<?= Users::can('add_product') ? $urlAdd : '' ?>"
            class="btn btn-primary float-right mb-3 <?=$disableAdd?>"
            <?=$disableAdd?>
        >Add</a>
    </div>
</div>
<div class="row pb-5">
    <div class="col-12">
        <table class="table table_product_view disable_a_disabled">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col" style="max-width: 200px;">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col" class="text-center">Discount</th>
                    <th scope="col" style="max-width: 180px">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Images</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(($products ?? []) as $product) : ?>
                    <tr>
                        <th scope="row"><?=$product['id']?></th>
                        <td style="max-width: 200px;"><?=$product['name']?></td>
                        <td><?=$product['price']?></td>
                        <td class="text-center"><?=$product['discount']?>%</td>
                        <td style="max-width: 180px">
                            <span class="max-row-3"><?=nl2br($product['description'])?></span>
                        </td>
                        <td><?=$product['category']?></td>
                        <td style="width: 100px">
                            <img src="<?=URL_UPLOAD . '/'?><?=$product['images'] != '' ? $product['images'] : 'public/images/husky.jpg'?>" class="w-100"/>
                        </td>
                        <td class="text-center">
                            <?php
                                $urlEdit = BASE_URL . "?controller=product&action=edit&id=" . $product['id'];
                                $urlDelete = BASE_URL . "?controller=product&action=delete&id=" . $product['id'];
                                $disableEdit = !Users::can('edit_product') ? 'disabled' : '';
                                $disableDelete = !Users::can('delete_product') ? 'disabled' : '';
                            ?>
                            <a
                                class="btn btn-success <?=$disableEdit?>"
                                href="<?=Users::can('edit_product') ? $urlEdit : ''?>"
                                <?=$disableEdit?>
                            >Edit</a>
                            <a
                                class="btn btn-danger <?=$disableDelete?>"
                                href="<?=Users::can('delete_product') ? $urlDelete : ''?>"
                                <?=$disableDelete?>
                                onclick="return confirm('Are you sure delete this product?????')"
                            >Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>