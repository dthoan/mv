<div class="container">
    <div class="row disable_a_disabled">
        <div class="col-12">
            <?php
                $disableAdd = !Users::can('add_permission') ? 'disabled' : '';
                $urlAdd = BASE_URL . '?controller=permissions&action=add';
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
                        <th scope="col">Permission Code</th>
                        <th scope="col">Permission Name</th>
                        <th scope="col">Time Create</th> 
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; foreach(($permissions ?? []) as $permission) : ?>
                        <tr>
                            <th scope="row"><?=$count++?></th>
                            <td><?=$permission['permision_code']?></td>
                            <td><?=$permission['permision_name']?></td>
                            <td><?=date('H:i d-m-Y', strtotime($permission['created_at']))?></td>
                            <td class="text-center">
                                <?php
                                    $urlEdit = BASE_URL . "?controller=permissions&action=edit&id=" . $permission['id'];
                                    $urlDelete = BASE_URL . "?controller=permissions&action=delete&id=" . $permission['id'];
                                    $disableEdit = !Users::can('edit_permission') ? 'disabled' : '';
                                    $disableDelete = !Users::can('delete_permission') ? 'disabled' : '';
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
                                    onclick="return confirm('Are you sure delete this permission?????')"
                                >Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>