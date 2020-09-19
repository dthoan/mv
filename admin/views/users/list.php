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
            $disableAdd = !Users::can('add_user') ? 'disabled' : '';
            $urlAdd = BASE_URL . '?controller=users&action=add';
        ?>
        <a
            href="<?= Users::can('add_user') ? $urlAdd : '' ?>"
            class="btn btn-primary float-right mb-3 <?=$disableAdd?>"
            <?=$disableAdd?>
        >Add</a>
    </div>
</div>
<div class="row pb-5">
    <div class="col-12">
        <table class="table table_user_view disable_a_disabled">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Fullname</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col" class="text-center">Birthday</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(($users ?? []) as $user) : ?>
                    <tr>
                        <th scope="row"><?=$user['id']?></th>
                        <td>
                            <?=$user['username']?>
                            <?php if($user['flag_deactive']) : ?>
                                <img src="public/images/diactive.png" alt="Deactive" style="width: 18px; height: 18px">
                            <?php endif; ?>
                        </td>
                        <td><?=$user['fullname']?></td>
                        <td class="text-center" style="max-width: 180px">
                            <span class="max-row-3"><?=$user['email']?></span>
                        </td>
                        <td><?=$user['phone']?></td>
                        <td class="text-center"><?=$user['birthday']?></td>
                        <td class="text-center">
                            <?php
                                $urlEdit = BASE_URL . "?controller=users&action=edit&id=" . $user['id'];
                                $urlDiactive = BASE_URL . "?controller=users&action=diactive&id=" . $user['id'];
                                $urlActive = BASE_URL . "?controller=users&action=active&id=" . $user['id'];
                                $disableEdit = !Users::can('edit_user') ? 'disabled' : '';
                                $disableDiactive = !Users::can('diactive_user') ? 'disabled' : '';
                                $disableActive = !Users::can('active_user') ? 'disabled' : '';
                            ?>
                            <a
                                class="btn btn-success <?=$disableEdit?>"
                                href="<?=Users::can('edit_user') ? $urlEdit : ''?>"
                                <?=$disableEdit?>
                            >Edit</a>
                            <a
                                class="btn btn-success <?=$disableActive?> <?= $user['flag_deactive'] ? '' : 'd-none' ?>"
                                href="<?=Users::can('active_user') ? $urlActive : ''?>"
                                <?=$disableActive?>
                                onclick="return confirm('Are you sure active this user?????')"
                            >Active</a>
                            <a
                                class="btn btn-danger <?=$disableDiactive?> <?= !$user['flag_deactive'] ? '' : 'd-none' ?>"
                                href="<?=Users::can('diactive_user') ? $urlDiactive : ''?>"
                                <?=$disableDiactive?>
                                onclick="return confirm('Are you sure diactive this user?????')"
                            >Diactive</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>