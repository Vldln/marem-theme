<?php
/**
 * Template Name: Медиа
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
      <!--/header-->
      <div id="rec547740717" class="r t-rec t-rec_pt_135 t-rec_pb_45" style="padding-top: 135px; padding-bottom: 45px" data-record-type="33">
        <!-- T017 -->
        <div class="t017">
          <div class="t-container t-align_center">
            <div class="t-col t-col_10 t-prefix_1">
              <div class="t017__uptitle t-uptitle t-uptitle_md" field="subtitle">УПОМИНАНИЯ В МЕДИА</div>
              <div class="t017__title t-title t-title_xxs" field="title">СМИ о "Марем"</div>
            </div>
          </div>
        </div>
      </div>
      <?php include 'includs/media.php'; ?>
      <div id="rec550457652" class="r t-rec" style="" data-animationappear="off" data-record-type="217">
        <!-- t190 -->
        <div class="t190" style="position: fixed; z-index: 100000; bottom: 30px; left: 30px; min-height: 30px">
          <button type="button" class="t190__button t190__button_circle" aria-label="Вернуться к началу страницы">
            <svg role="presentation" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
              <g>
                <path
                  style="fill: #892023"
                  d="M24,3.125c11.511,0,20.875,9.364,20.875,20.875S35.511,44.875,24,44.875S3.125,35.511,3.125,24S12.489,3.125,24,3.125
M24,0.125C10.814,0.125,0.125,10.814,0.125,24S10.814,47.875,24,47.875S47.875,37.186,47.875,24S37.186,0.125,24,0.125L24,0.125z" />
              </g>
              <path
                style="fill: #892023"
                d="M25.5,36.033c0,0.828-0.671,1.5-1.5,1.5s-1.5-0.672-1.5-1.5V16.87l-7.028,7.061c-0.293,0.294-0.678,0.442-1.063,0.442
c-0.383,0-0.766-0.146-1.058-0.437c-0.587-0.584-0.589-1.534-0.005-2.121l9.591-9.637c0.281-0.283,0.664-0.442,1.063-0.442
c0,0,0.001,0,0.001,0c0.399,0,0.783,0.16,1.063,0.443l9.562,9.637c0.584,0.588,0.58,1.538-0.008,2.122
c-0.589,0.583-1.538,0.58-2.121-0.008l-6.994-7.049L25.5,36.033z" />
            </svg>
          </button>
        </div>
        <script>
          t_onReady(function () {
            var rec = document.querySelector("#rec550457652");
            if (!rec) return;
            var wrapperBlock = rec.querySelector(".t190");
            if (!wrapperBlock) return;
            wrapperBlock.style.display = "none";
            window.addEventListener(
              "scroll",
              t_throttle(function () {
                if (window.pageYOffset > window.innerHeight) {
                  if (wrapperBlock.style.display === "none") wrapperBlock.style.display = "block";
                } else {
                  if (wrapperBlock.style.display === "block") wrapperBlock.style.display = "none";
                }
              })
            );
            t_onFuncLoad("t190_init", function () {
              t190_init(550457652);
            });
          });
        </script>
      </div>
      <!--footer-->
<?php get_footer(); ?>