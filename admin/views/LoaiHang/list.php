<div class="container">
    <div class="row disable_a_disabled">
        <div class="col-12">
            <?php
                $disableAdd = !Users::can('add_category') ? 'disabled' : '';
                $urlAdd = BASE_URL . '?controller=Loaihang&action=add';
            ?>
            <a
                href="<?= Users::can('add_category') ? $urlAdd : '' ?>"
                class="btn btn-primary float-right mb-3 <?=$disableAdd?>"
                <?=$disableAdd?>
            >Add</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table disable_a_disabled">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Category code</th>
                        <th scope="col">Category name</th>
                        <th scope="col">Time Create</th> 
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(($categories ?? []) as $category) : ?>
                        <tr>
                            <th scope="row"><?=$category['id']?></th>
                            <td><?=$category['category_code']?></td>
                            <td><?=$category['category_name']?></td>
                            <td><?=date('H:i d-m-Y', strtotime($category['created_at']))?></td>
                            <td class="text-center">
                                <?php
                                    $urlEdit = BASE_URL . "?controller=Loaihang&action=edit&id=" . $category['id'];
                                    $urlDelete = BASE_URL . "?controller=Loaihang&action=delete&id=" . $category['id'];
                                    $disableEdit = !Users::can('edit_category') ? 'disabled' : '';
                                    $disableDelete = !Users::can('delete_category') ? 'disabled' : '';
                                ?>
                                <a
                                    class="btn btn-success <?=$disableEdit?>"
                                    <?=$disableEdit?>
                                    href="<?=$urlEdit?>"
                                >Edit</a>
                                <a 
                                    class="btn btn-danger <?=$disableDelete?>"
                                    <?=$disableDelete?>
                                    href="<?=$urlDelete?>"
                                    onclick="return confirm('Are you sure delete this category?????')"
                                >Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>