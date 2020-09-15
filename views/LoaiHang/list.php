<div class="container pt-5">
    <div class="row">
        <div class="col-12">
        
            <a href="<?=BASE_URL?>?controller=Loaihang&action=add" class="btn btn-primary float-right mb-3">Add</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table">
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
                                <a class="btn btn-success" href="<?=BASE_URL?>?controller=loaihang&action=edit&id=<?=$category['id']?>">Edit</a>
                                <a 
                                    class="btn btn-danger" 
                                    href="<?=BASE_URL?>?controller=Loaihang&action=delete&id=<?=$category['id']?>"
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