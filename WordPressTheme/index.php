<?php get_header(); ?>

<main class="main">
  <div class="main__inner">
    <h1>WordPress Theme Test</h1>
    <p>CSSが正しく読み込まれているかテスト中です。</p>
    
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="post">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="post-content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <p>投稿が見つかりません。</p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
