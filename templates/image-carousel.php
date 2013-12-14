<div id="container" style="width:661px; height:111px; padding:7px; background:#fff; margin:60px 0 5px; position:relative">
    <div class="container-inner">
        <div id="slide-container">
            <div class="h-spacer">
                <div class="category-container js-scroll-window">

                    <?php foreach ($posts as $post): ?>

                        <ul class="h-list h-list-category js-scroll-category <?= $post->post_name ?>">

                            <?php foreach ($post->images as $image): ?>
                                <li>
                                    <a href="<?= $image->full ?>" rel="lightbox[gallery]">
                                        <img class="post-image" src="<?= $image->thumbnail ?>" alt="" />
                                    </a>
                                </li>
                            <?php endforeach; ?>

                        </ul>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <div id="scrollbar"></div>
    </div>
</div>

<div class="slider-navigation" style="width:675px; height:30px; background:url('x.png') repeat; position:relative">

    <?php foreach ($posts as $post): ?>
        <p class="slide-category" data-scroll-to-category="<?= $post->post_name ?>"><?= strtolower($post->post_title) ?></p>
    <?php endforeach; ?>

</div>
