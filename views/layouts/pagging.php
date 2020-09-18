<ul class="pagination-area pagination-btns flex-center">
    <?php
    $isDisabledBack = $datas['current_page'] == '1';
    $isDisabledNext = $datas['current_page'] == $datas['page_end'];
    ?>
    <li>
        <a
            href=""
            class="single-btn prev-btn"
            <?=$isDisabledBack ? 'disabled' : ''?>
            data-page="<?=!$isDisabledBack ? $datas['page_start'] : ''?>"
        >
            <span>|</span>
            <i class="zmdi zmdi-chevron-left"></i>
        </a>
    </li>
    <li>
        <a
            href=""
            class="single-btn prev-btn"
            <?=$isDisabledBack ? 'disabled' : ''?>
            data-page="<?=!$isDisabledBack ? $datas['page_prev'] : ''?>"
        >
            <i class="zmdi zmdi-chevron-left"></i>
        </a>
    </li>
    <?php for ($i = 1; $i <= $datas['page_end']; $i++) : ?>
        <li class="<?= $i == $datas['current_page'] ? 'active' :'' ?>">
            <a
                href=""
                data-page="<?=$i == $datas['current_page'] ? '' : $i?>"
                class="single-btn"
                <?= $i == $datas['current_page'] ? 'disabled' :'' ?>
            ><?=$i?></a>
        </li>
    <?php endfor; ?>
    <li>
        <a
            href=""
            class="single-btn next-btn"
            <?=$isDisabledNext ? 'disabled' : ''?>
            data-page="<?=!$isDisabledNext ? $datas['page_next'] : ''?>"
        >
            <i class="zmdi zmdi-chevron-right"></i>
        </a>
    </li>
    <li>
        <a
            href=""
            class="single-btn next-btn"
            <?=$isDisabledNext ? 'disabled' : ''?>
            data-page="<?=!$isDisabledNext ? $datas['page_end'] : ''?>"
        >
            <i class="zmdi zmdi-chevron-right"></i>
            <span>|</span>
        </a>
    </li>
</ul>
<script>
    var allTagPagRedirect = document.querySelectorAll('.pagination-area a[data-page]:not(:disabled)');
    allTagPagRedirect.forEach(function(item){
        item.addEventListener('click', function(e){
            e.preventDefault();
            var page = this.getAttribute('data-page');
            if(page == ""){
                return false;
            }
            window.location.href = replaceUrlParam(location.href, 'page', page);
            return false;
        })
    })
</script>