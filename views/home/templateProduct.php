<div class="col-lg-4 col-sm-6">
    <div class="product-card">
        <div class="product-grid-content">
            <div class="product-header">
                <a href="" class="author"><?=$product['category']?></a>
                <h3><a href="product-details.html"><?=$product['name']?></a></h3>
            </div>
            <div class="product-card--body">
                <div class="card-image">
                    <img src="<?=$product['images']?>" alt="">
                    <div class="hover-contents">
                        <a href="product-details.html" class="hover-image">
                            <img src="<?=$product['images']?>" alt="">
                        </a>
                        <div class="hover-btns">
                            <a href="cart.html" class="single-btn">
                                <i class="fas fa-shopping-basket"></i>
                            </a>
                            <a href="wishlist.html" class="single-btn">
                                <i class="fas fa-heart"></i>
                            </a>
                            <a href="compare.html" class="single-btn">
                                <i class="fas fa-random"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#quickModal"
                               class="single-btn">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="price-block">
                    <span class="price"><?=number_format($product['price_discount'])?></span>
                    <del class="price-old"><?=number_format($product['price'])?></del>
                    <span class="price-discount"><?=number_format($product['discount'])?></span>
                </div>
            </div>
        </div>
        <div class="product-list-content">
            <div class="card-image">
                <img src="<?=$product['images']?>" alt="">
            </div>
            <div class="product-card--body">
                <div class="product-header">
                    <a href="" class="author"><?=$product['category']?></a>
                    <h3><a href="product-details.html" tabindex="0"><?=$product['name']?></a></h3>
                </div>
                <article>
                    <h2 class="sr-only">Card List Article</h2>
                    <p><?=nl2br($product['description'])?></p>
                </article>
                <div class="price-block">
                    <span class="price"><?=number_format($product['price_discount'])?></span>
                    <del class="price-old"><?=number_format($product['price'])?></del>
                    <span class="price-discount"><?=number_format($product['discount'])?></span>
                </div>
                <div class="btn-block">
                    <a href="" class="btn btn-outlined">Add To Cart</a>
                    <a href="" class="card-link"><i class="fas fa-heart"></i> Add To Wishlist</a>
                    <a href="" class="card-link"><i class="fas fa-random"></i> Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>