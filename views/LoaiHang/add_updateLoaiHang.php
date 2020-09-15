<div class="container pt-5">
    <div class="row">
        <div class="col-6">
        <form action="<?=BASE_URL?>?controller=loaihang&action=<?=$typePage?>Form" method="POST">
            <?php if($typePage == 'edit') : ?>
                <input type="hidden" name="id" value="<?=$category['id'] ?? ''?>">                   
            <?php endif; 
            
            ?>
            <div class="form-group">
                <label for="name">category:</label>
                <input type="text" class="form-control" placeholder="category" id="category_name" name="category_name" value="<?=$category['category_name'] ?? ''?>">
            </div>
            <div class="form-group">
                <label for="name">category code:</label>
                <input type="text" class="form-control" placeholder="category code" id="category_code" name="category_code" value="<?=$category['category_code'] ?? ''?>">
            </div>                
            <button type="submit" class="btn btn-primary"><?=strtoupper($typePage)?></button>
        </form>
        </div>
    </div>
</div>