<div class="container pt-5">
    <div class="row">
        <div class="col-6">
        <form action="<?=BASE_URL?>?controller=product&action=<?=$typePage?>Form" method="POST"  enctype="multipart/form-data">
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
            <div class="form-group">
                <label for="images" class="d-block">Images:</label>
                <!-- Nếu là edit và tồn tại image thì hiển thị preview -->
                <?php if($typePage == 'edit' && $product['images'] != '') : ?>
                    <img id="images_preview" src="<?=$product['images']?>" alt="Preview" class="mb-3" style="width: 160px">
                <?php endif; ?>
                <!-- Thêm 1 chức năng nhỏ là nếu như có lựa chọn ảnh edit thì ảnh preview sẽ biết mất -->
                <!-- bằng cách dùng js để listen onchange -->
                <!-- ĐƠn giản chỉ là onchane thì set img preview display none -->
                <input 
                    type="file" 
                    class="form-control" 
                    id="images" 
                    name="images" 
                    onchange="document.querySelector('#images_preview').style.display = 'none'"
                />
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" id="category" class="form-control">
                    <?php foreach(($categories ?? []) as $category) : ?>
                        <option 
                            value="<?=$category['id']?>" 
                            <?= ($product['category_id'] ?? '') == $category['id'] ? 'selected' : '' ?>
                        >
                            <?=$category['category_name']?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary"><?=strtoupper($typePage)?></button>
        </form>
        </div>
    </div>
</div>