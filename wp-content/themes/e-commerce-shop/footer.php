<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package E-commerce Shop
 */
?>
<footer role="contentinfo">
  <?php if (get_theme_mod('bb_ecommerce_store_show_hide_footer', true)){ ?>
    <?php //Set widget areas classes based on user choice
      $bb_ecommerce_store_widget_areas = get_theme_mod('bb_ecommerce_store_footer_widget_areas', '4');
      if ($bb_ecommerce_store_widget_areas == '3') {
          $cols = 'col-lg-4 col-md-4';
      } elseif ($bb_ecommerce_store_widget_areas == '4') {
          $cols = 'col-lg-3 col-md-3';
      } elseif ($bb_ecommerce_store_widget_areas == '2') {
          $cols = 'col-lg-6 col-md-6';
      } else {
          $cols = 'col-lg-12 col-md-12';
      }
    ?>
    <div class="copyright-wrapper">
      <div class="container">
        <div class="row">
          <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <div class="sidebar-column <?php echo ( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-1'); ?>
            </div>
          <?php endif; ?> 
          <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
            <div class="sidebar-column <?php echo ( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-2'); ?>
            </div>
          <?php endif; ?> 
          <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
            <div class="sidebar-column <?php echo ( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-3'); ?>
            </div>
          <?php endif; ?> 
          <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
            <div class="sidebar-column <?php echo ( $cols ); ?>">
              <?php dynamic_sidebar( 'footer-4'); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php }?>
  <?php if (get_theme_mod('bb_ecommerce_store_show_hide_copyright', true)) {?>
  	<div class="inner">
      <div class="copyright">
        <p class="mb-0"><?php echo esc_html(get_theme_mod('bb_ecommerce_store_footer_copy',__('Ecommerce WordPress Theme','e-commerce-shop'))); ?> <?php ecommerce_shop_credit(); ?></p>
      </div>
      <div class="clear"></div>
    </div>
  <?php }?>
  <?php if( get_theme_mod( 'bb_ecommerce_store_enable_disable_scroll',true) != '' || get_theme_mod( 'bb_ecommerce_store_responsive_scroll',true) != '') { ?>
    <?php $bb_ecommerce_store_theme_lay = get_theme_mod( 'bb_ecommerce_store_scroll_setting','Right');
    if($bb_ecommerce_store_theme_lay == 'Left'){ ?>
      <button id="scroll-top" class="left-align" title="<?php esc_attr_e('Scroll to Top','e-commerce-shop'); ?>"><i class="<?php echo esc_attr(get_theme_mod('bb_ecommerce_store_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'e-commerce-shop'); ?></span></button>
    <?php }else if($bb_ecommerce_store_theme_lay == 'Center'){ ?>
      <button id="scroll-top" class="center-align" title="<?php esc_attr_e('Scroll to Top','e-commerce-shop'); ?>"><i class="<?php echo esc_attr(get_theme_mod('bb_ecommerce_store_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'e-commerce-shop'); ?></span></button>
    <?php }else{ ?>
      <button id="scroll-top" title="<?php esc_attr_e('Scroll to Top','e-commerce-shop'); ?>"><i class="<?php echo esc_attr(get_theme_mod('bb_ecommerce_store_back_to_top_icon','fas fa-chevron-up')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'e-commerce-shop'); ?></span></button>
    <?php }?>
  <?php }?>
  <?php wp_footer(); ?>
</footer>
</body>
</html>