<form action="<?= BASE_URL ?>?controller=permissions&action=submitPermissionUser" method="POST" class="pb-5">
    <input type="hidden" name="user_id" value="<?=$_GET['id'] ?? ''?>">
    <?php foreach ($permissions as $permission) : ?>
        <div class="form-group form-check">
            <label for="permission_<?= $permission['permision_code'] ?>" class="form-check-label">
                <input
                    type="checkbox"
                    class="form-check-input"
                    name="permission[]"
                    id="permission_<?= $permission['permision_code'] ?>"
                    <?= in_array($permission['id'], $permissionUser) ? 'checked' : '' ?>
                    value="<?= $permission['id'] ?>"
                />
                <?= $permission['permision_name'] ?>
            </label>
        </div>
    <?php endforeach; ?>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>