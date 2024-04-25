<?php
$posts = get_posts(array(
    'post_type' => 'mults', // Замените 'your_post_type' на свой тип записи
    'posts_per_page' => -1, // Количество записей, которые вы хотите получить
));

foreach ($posts as $post) {
    setup_postdata($post);

    // Получаем данные о записи
    $title = get_the_title();
    $content = get_the_content();
    $permalink = get_permalink();

    // Выводим данные о записи в нужные места вашего HTML-кода
    ?>
    <div id="rec681877343" class="r t-rec t-rec_pt_105 t-rec_pb_60" style="padding-top: 105px; padding-bottom: 60px; background-color: #ffffff" data-record-type="43" data-bg-color="#ffffff">
        <!-- T030 -->
        <div class="t030">
            <div class="t-container t-align_center">
                <div class="t-col t-col_10 t-prefix_1">
                    <div class="t030__title t-title t-title_xxs" field="title"><?php echo esc_html($title); ?></div>
                    <div class="t030__descr t-descr t-descr_md" field="descr"><?php the_content(); ?></div>
                </div>
            </div>
        </div>
    </div>
    

    <?php
}

wp_reset_postdata(); // Сброс данных о записях
?>
