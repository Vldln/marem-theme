<div class="t524">
          <ul role="list" class="t524__container t-list__container_inrow4 t-container">
            <?php
$posts = get_posts(array(
    'post_type' => 'members',
    'posts_per_page' => -1,
));

foreach ($posts as $post) {
    setup_postdata($post);

    $title = get_the_title();
    $content = strip_tags(get_the_content()); // Удаление HTML-тегов
    $image_url = get_the_post_thumbnail_url();
    ?>
    <li class="t524__col t-col t-col_3 t-list__item t-align_center t524__col-mobstyle">
        <div class="t524__itemwrapper t524__itemwrapper_4">
            <div class="t524__imgwrapper t-margin_auto" itemscope itemtype="http://schema.org/ImageObject">
                <meta itemprop="image" content="<?php echo esc_url($image_url); ?>" />
                <div class="t524__bgimg t524__img_circle t-margin_auto t-bgimg" data-original="<?php echo esc_url($image_url); ?>" bgimgfield="li_img__1477995899606" style="background-image: url('<?php echo esc_url($image_url); ?>')"></div>
            </div>
            <div class="t524__wrappercenter">
                <div class="t524__persname t-name t-name_lg t524__bottommargin_sm" field="li_persname__1477995899606"><?php echo esc_html($title); ?></div>
                <div class="t524__persdescr t-descr t-descr_xxs" field="li_persdescr__1477995899606"><?php echo esc_html($content); ?></div>
            </div>
        </div>
    </li>
    <?php
}

wp_reset_postdata();
?>
   
        </ul>
            </div>
            <style>
            .t-persons-social-links {
                line-height: 0px;
            }
            .t-persons-social-links__wrapper {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                width: auto;
            }
            .t-persons-social-links {
                margin-top: 15px;
            }
            .t-persons-social-links__item {
                padding: 0px 4px;
            }
            .t-persons-social-links__item svg {
                width: 20px;
                height: 20px;
            }
            .t-persons-social-links__wrapper_round .t-persons-social-links__item svg {
                width: 23px;
                height: 23px;
            }
            .t-persons-social-links__item:first-child {
                padding-left: 0px;
            }
            @media screen and (max-width: 960px) {
                .t-persons-social-links__item {
                margin-bottom: 3px;
                }
            }
            @media screen and (max-width: 640px) {
                .t-persons-social-links {
                margin-top: 13px;
                }
                .t-persons-social-links__item {
                padding: 0px 3px;
                }
                .t-persons-social-links__item svg {
                width: 17px;
                height: 17px;
                }
                .t-persons-social-links__wrapper_round .t-persons-social-links__item svg {
                width: 20px;
                height: 20px;
                }
            }
            </style>
            