<section class="inner-page-sec-padding-bottom space-db--30">
    <div class="container">
        <div class="row space-db-lg--60 space-db--30">
            <?php
                foreach (($news ?? []) as $new){
                    echo $this->render('news/templateNews.php', ['new' => $new]);
                }
            ?>
        </div>
    </div>
</section>
