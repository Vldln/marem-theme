<?php
$posts = get_posts(array(
    'post_type' => 'smi',
    'posts_per_page' => -1,
));

foreach ($posts as $post) {
    setup_postdata($post);

    $title = get_the_title();
    $content = get_the_content(); // Получение содержимого записи

    ?>
    <div id="rec547741878" class="r t-rec t-rec_pt_60 t-rec_pb_45" style="padding-top: 60px; padding-bottom: 45px" data-animationappear="off" data-record-type="65">
      <!-- T056 -->
      <div class="t056">
        <div class="t-container t-align_center">
          <div class="t-col t-col_10 t-prefix_1"><div class="t056__title t-name t-name_xl" field="title"><?php echo esc_html($title); ?></div></div>
        </div>
      </div>
    </div>
    <div id="rec548258645" class="r t-rec t-rec_pt_0 t-rec_pb_135" style="padding-top: 0px; padding-bottom: 0px" data-animationappear="off" data-record-type="106">
      <!-- T004 -->
      <div class="t004">
        <div class="t-container">
          <div class="t-col t-col_8 t-prefix_2">
            <div field="text" class="t-text t-text_md">
              <?php 
              // Замена атрибутов у ссылок и вывод содержимого
              $content_with_links = preg_replace_callback('/<a\s([^>]*)>(.*?)<\/a>/', function($match) {
                  // Параметры для замены
                  $attrs = $match[1];
                  $text = $match[2];
                  // Добавляем новые атрибуты к ссылке
                  $new_attrs = $attrs . ' target="_blank" rel="noreferrer noopener" style="color: rgb(137, 32, 35)"';
                  // Возвращаем обновленную ссылку
                  return '<a ' . $new_attrs . '>' . $text . '</a>';
              }, $content);
              
              // Добавляем <br> между параграфами
              $content_with_br = preg_replace('/<\/p>/', '</p><br>', $content_with_links);
              
              echo $content_with_br;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <?php
}

wp_reset_postdata();
?>
