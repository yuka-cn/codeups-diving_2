<?php get_header(); ?>
<!-- ページコンテンツ -->
<div class="page-price page-price-layout">
    <div class="page-price__body price-tables">
        <div class="price-tables__inner inner">

        <?php
         $tables = [
            'ライセンス講習' => 'license',
            '体験ダイビング' => 'trial-diving', 
            'ファンダイビング' => 'fun-diving', 
            'スペシャルダイビング' => 'special-diving',
         ];

         foreach ($tables as $title => $field_name):
          $courses = SCF::get($field_name);
          if (!empty($courses)): ?>

          <div class="price-tables__item price-table" id="price-<?php echo esc_attr($field_name); ?>">
            <h2 class="price-table__heading">
              <span class="price-table__icon"></span>
              <span class="price-table__title"><?php echo esc_html($title); ?></span>
            </h2>
            <table class="price-table__body">
              <tbody>
              <?php foreach ($courses as $course): ?>
                <tr>
                  <th scope="row"><?php echo nl2br(esc_html($course[$field_name . '_course'])); ?></th>
                  <td><?php echo esc_html($course[$field_name . '_price']); ?></td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php endif; endforeach; ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>
