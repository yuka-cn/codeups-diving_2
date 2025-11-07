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

      $has_data = false;

      foreach ($tables as $field_name) {
        $courses = array_filter(SCF::get($field_name), function($course) use ($field_name) {
          return !empty($course[$field_name . '_course']) && !empty($course[$field_name . '_price']);
        });
        if (!empty($courses)) {
          $has_data = true;
          break;
        }
      }
      ?>

      <?php if ($has_data): ?>
        <?php foreach ($tables as $title => $field_name):
          $courses = array_filter(SCF::get($field_name), function($course) use ($field_name) {
            return !empty($course[$field_name . '_course']) && !empty($course[$field_name . '_price']);
          });
          if (empty($courses)) continue;
        ?>

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
        <?php endforeach; ?>
        <?php else: ?>
          <p class="price-tables__no-post no-post">ただいま準備中です。<br>公開までしばらくお待ちください。</p>
        <?php endif;?>

        </div>
    </div>
</div>
<?php get_footer(); ?>
