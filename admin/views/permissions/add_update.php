<form action="<?=BASE_URL?>?controller=permissions&action=addPermission" method="POST">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="permision_code">Permission Code:</label>
                    <input type="text" class="form-control" id="permision_code" placeholder="permission_code" name="permision_code">
                </div>
                <div class="form-group">
                    <label for="permision_name">Permission Name:</label>
                    <input type="text" class="form-control" id="permision_name" placeholder="Permission Code" name="permision_name">
                </div>
                <div class="form-group">
                    <label for="permision_order">Permission Order:</label>
                    <input type="text" class="form-control" value="0" id="permision_order" name="permision_order">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>