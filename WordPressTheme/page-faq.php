<?php get_header(); ?>

<!-- ページコンテンツ -->
<?php $faqs = SCF::get('faq');
if ($faqs): ?>
<div class="page-faq page-faq-layout">
  <div class="page-faq__body faq">
    <div class="faq__inner inner">
    <?php foreach ($faqs as $faq): ?>
      <details class="faq__item" open>
        <summary><?php echo esc_html($faq['question']); ?></summary>
        <p><?php echo nl2br(esc_html($faq['answer'])); ?></p>
      </details>
    <?php endforeach; ?>
    </div>
  </div>  
</div>
<?php endif; ?>

<?php get_footer(); ?>
