<?php
/**
 * Template Name: Мульты
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<!--/header-->
      <?php include 'includs/mults.php' ?>
        <script>
          t_onReady(function () {
            var rec = document.getElementById("rec590235913");
            if (!rec) return;
            t_onFuncLoad("t1061_initThumbnail", function () {
              t1061_initThumbnail(rec);
            });
            var recWrapper = rec.querySelector(".t1061");
            if (recWrapper) {
              t_onFuncLoad("t1061_initThumbnail", function () {
                recWrapper.addEventListener("displayChanged", function () {
                  t1061_initThumbnail(rec);
                });
              });
            }
            t_onFuncLoad("t1061_initThumbnail", function () {
              window.addEventListener(
                "scroll",
                t_throttle(function () {
                  t1061_initThumbnail(rec);
                })
              );
              window.addEventListener("resize", function () {
                t1061_initThumbnail(rec);
              });
            });
          });
        </script>
      </div>

      <!--footer-->
<?php get_footer(); ?>
