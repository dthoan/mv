<style>
    .max-row-5{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
    }
</style>
<div class="col-lg-4 col-md-6 mb-lg--60 mb--30">
    <div class="blog-card card-style-grid">
        <a href="blog-details.html" class="image d-block">
            <img src="<?=$new['image_title']?>" alt="">
        </a>
        <div class="card-content">
            <h3 class="title" style="text-overflow: inherit; white-space: inherit">
                <a href="blog-details.html">
                    <?=$new['title']?>
                </a>
            </h3>
            <p class="post-meta">
                <span><?=date("d/m/Y", strtotime($new['news_at']))?> </span> | <a href="#">MV</a></p>
            <article>
                <h2 class="sr-only">
                    Blog Article
                </h2>
                <p class="max-row-5">
                    <?=$new['content']?>
                </p>
                <a href="blog-details.html" class="blog-link">Read More</a>
            </article>
        </div>
    </div>
</div>