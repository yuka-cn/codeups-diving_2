<?php get_header(); ?>

<!-- ページコンテンツ -->
<?php if ( is_page(array('privacypolicy', 'terms-of-service')) ): ?>
    <div class="page-policy page-policy-layout">
        <div class="page-policy__body legal">
            <div class="legal__inner inner">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>