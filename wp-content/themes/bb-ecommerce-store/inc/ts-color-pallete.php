<?php
	
	$bb_ecommerce_store_theme_color = get_theme_mod('bb_ecommerce_store_theme_color');

	$bb_ecommerce_store_custom_css = '';

	$bb_ecommerce_store_custom_css .='#slider .more-btn a, .topbar, form.woocommerce-product-search button[type="submit"],button.search-submit, #our-service,#comments a.comment-reply-link, #sidebar h3, #sidebar input[type="submit"], #sidebar .tagcloud a:hover,.copyright-wrapper .tagcloud a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .pagination a:hover, .pagination .current, .copyright, .toggle a,  input.search-submit, #our-products a.button, a.blogbutton-small:hover, .top-header,#menu-sidebar input[type="submit"],.tags p a:hover,.meta-nav:hover, .header form.woocommerce-product-search button[type="submit"], .copyright-wrapper form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button, .copyright-wrapper .woocommerce a.button:hover, .copyright-wrapper .woocommerce button.button:hover, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .fixed-header, #sidebar input[type="submit"], .copyright-wrapper input.search-submit, .post-categories li a:hover, .bradcrumbs a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:hover, .wp-block-button .wp-block-button__link:hover, #sidebar #block-2 button[type="submit"], #sidebar .widget_block h2, .page-links .post-page-numbers.current, .page-links a:hover{';
		$bb_ecommerce_store_custom_css .='background-color: '.esc_attr($bb_ecommerce_store_theme_color).';';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_custom_css .='#comments input[type="submit"].submit, nav.woocommerce-MyAccount-navigation ul li{';
		$bb_ecommerce_store_custom_css .='background-color: '.esc_attr($bb_ecommerce_store_theme_color).'!important;';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_custom_css .='a,.woocommerce-message::before, .post-password-form input[type=password],.cart_icon i, .copyright-wrapper li a:hover, .primary-navigation ul ul a,.tags i,#sidebar ul li a:hover,.metabox a:hover,.woocommerce td.product-name a, .woocommerce ul#shipping_method li label, .woocommerce-cart .cart-collaterals .shipping-calculator-button, .woocommerce-MyAccount-content p a, .entry-date:hover i, .entry-date:hover a, .entry-author:hover i, .entry-author:hover a{';
		$bb_ecommerce_store_custom_css .='color: '.esc_attr($bb_ecommerce_store_theme_color).';';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_custom_css .='.primary-navigation ul ul,.copyright-wrapper form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button{';
		$bb_ecommerce_store_custom_css .='border-color: '.esc_attr($bb_ecommerce_store_theme_color).';';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_custom_css .='.inner-service, .woocommerce-message, .related-box{';
		$bb_ecommerce_store_custom_css .='border-top-color: '.esc_attr($bb_ecommerce_store_theme_color).';';
	$bb_ecommerce_store_custom_css .='}';

	// featured image setting
	$bb_ecommerce_store_single_img_border_radius = get_theme_mod('bb_ecommerce_store_single_img_border_radius', 0);
	$bb_ecommerce_store_custom_css .='.page-box-single .feature-box img{';
		$bb_ecommerce_store_custom_css .='border-radius: '.esc_attr($bb_ecommerce_store_single_img_border_radius).'px;';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_single_img_box_shadow = get_theme_mod('bb_ecommerce_store_single_img_box_shadow',0);
	$bb_ecommerce_store_custom_css .='.page-box-single .feature-box img{';
		$bb_ecommerce_store_custom_css .='box-shadow: '.esc_attr($bb_ecommerce_store_single_img_box_shadow).'px '.esc_attr($bb_ecommerce_store_single_img_box_shadow).'px '.esc_attr($bb_ecommerce_store_single_img_box_shadow).'px #ccc;';
	$bb_ecommerce_store_custom_css .='}';

	/*---- Comment form ----*/
	$bb_ecommerce_store_comment_width = get_theme_mod('bb_ecommerce_store_comment_width', '100');
	$bb_ecommerce_store_custom_css .='#comments textarea{';
	$bb_ecommerce_store_custom_css .=' width:'.esc_attr($bb_ecommerce_store_comment_width).'%;';
	$bb_ecommerce_store_custom_css .='}';

	/*----Comment title text----*/
	$bb_ecommerce_store_title_comment_form = get_theme_mod('
		bb_ecommerce_store_title_comment_form', 'Leave a Reply');
	if($bb_ecommerce_store_title_comment_form == ''){
	$bb_ecommerce_store_custom_css .='#comments h2#reply-title {';
	$bb_ecommerce_store_custom_css .='display: none;';
	$bb_ecommerce_store_custom_css .='}';
	}

	/*----Comment button text----*/
	$bb_ecommerce_store_comment_form_button_content = get_theme_mod('bb_ecommerce_store_comment_form_button_content', 'Post Comment');
	if($bb_ecommerce_store_comment_form_button_content == ''){
	$bb_ecommerce_store_custom_css .='#comments p.form-submit {';
	$bb_ecommerce_store_custom_css .='display: none;';
	$bb_ecommerce_store_custom_css .='}';
	}
	
	// media
	$bb_ecommerce_store_custom_css .='@media screen and (max-width:1000px) {';
	if($bb_ecommerce_store_theme_color){
	$bb_ecommerce_store_custom_css .='#contact-info, #menu-sidebar, .primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation ul ul ul ul{
	background-image: linear-gradient(-90deg, #000 0%, '.esc_attr($bb_ecommerce_store_theme_color).' 120%);
		}';
	}
	$bb_ecommerce_store_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$bb_ecommerce_store_theme_lay = get_theme_mod( 'bb_ecommerce_store_width_theme_options','Default');
    if($bb_ecommerce_store_theme_lay == 'Default'){
		$bb_ecommerce_store_custom_css .='body{';
			$bb_ecommerce_store_custom_css .='max-width: 100%;';
		$bb_ecommerce_store_custom_css .='}';
	}else if($bb_ecommerce_store_theme_lay == 'Container'){
		$bb_ecommerce_store_custom_css .='body{';
			$bb_ecommerce_store_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$bb_ecommerce_store_custom_css .='}';
	}else if($bb_ecommerce_store_theme_lay == 'Box Container'){
		$bb_ecommerce_store_custom_css .='body{';
			$bb_ecommerce_store_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$bb_ecommerce_store_custom_css .='}';
		$bb_ecommerce_store_custom_css .='.header .logo{';
			$bb_ecommerce_store_custom_css .='padding-left:20px;';
		$bb_ecommerce_store_custom_css .='}';
	}

	// css
	$bb_ecommerce_store_show_header = get_theme_mod( 'bb_ecommerce_store_slider_hide_show', false);
	if($bb_ecommerce_store_show_header == false){
		$bb_ecommerce_store_custom_css .='#our-service{';
			$bb_ecommerce_store_custom_css .='margin: 2% 0;';
		$bb_ecommerce_store_custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/
	$bb_ecommerce_store_theme_lay = get_theme_mod( 'bb_ecommerce_store_slider_content_alignment','Right');
    if($bb_ecommerce_store_theme_lay == 'Left'){
		$bb_ecommerce_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$bb_ecommerce_store_custom_css .='text-align:left; left:10%; right:50%;';
		$bb_ecommerce_store_custom_css .='}';
	}else if($bb_ecommerce_store_theme_lay == 'Center'){
		$bb_ecommerce_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$bb_ecommerce_store_custom_css .='text-align:center; left:20%; right:20%;';
		$bb_ecommerce_store_custom_css .='}';
	}else if($bb_ecommerce_store_theme_lay == 'Right'){
		$bb_ecommerce_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel{';
			$bb_ecommerce_store_custom_css .='left:50%; right:10%;';
		$bb_ecommerce_store_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$bb_ecommerce_store_theme_lay = get_theme_mod( 'bb_ecommerce_store_slider_image_opacity','0.7');
	if($bb_ecommerce_store_theme_lay == '0'){
		$bb_ecommerce_store_custom_css .='#slider img{';
			$bb_ecommerce_store_custom_css .='opacity:0';
		$bb_ecommerce_store_custom_css .='}';
		}else if($bb_ecommerce_store_theme_lay == '0.1'){
		$bb_ecommerce_store_custom_css .='#slider img{';
			$bb_ecommerce_store_custom_css .='opacity:0.1';
		$bb_ecommerce_store_custom_css .='}';
		}else if($bb_ecommerce_store_theme_lay == '0.2'){
		$bb_ecommerce_store_custom_css .='#slider img{';
			$bb_ecommerce_store_custom_css .='opacity:0.2';
		$bb_ecommerce_store_custom_css .='}';
		}else if($bb_ecommerce_store_theme_lay == '0.3'){
		$bb_ecommerce_store_custom_css .='#slider img{';
			$bb_ecommerce_store_custom_css .='opacity:0.3';
		$bb_ecommerce_store_custom_css .='}';
		}else if($bb_ecommerce_store_theme_lay == '0.4'){
		$bb_ecommerce_store_custom_css .='#slider img{';
			$bb_ecommerce_store_custom_css .='opacity:0.4';
		$bb_ecommerce_store_custom_css .='}';
		}else if($bb_ecommerce_store_theme_lay == '0.5'){
		$bb_ecommerce_store_custom_css .='#slider img{';
			$bb_ecommerce_store_custom_css .='opacity:0.5';
		$bb_ecommerce_store_custom_css .='}';
		}else if($bb_ecommerce_store_theme_lay == '0.6'){
		$bb_ecommerce_store_custom_css .='#slider img{';
			$bb_ecommerce_store_custom_css .='opacity:0.6';
		$bb_ecommerce_store_custom_css .='}';
		}else if($bb_ecommerce_store_theme_lay == '0.7'){
		$bb_ecommerce_store_custom_css .='#slider img{';
			$bb_ecommerce_store_custom_css .='opacity:0.7';
		$bb_ecommerce_store_custom_css .='}';
		}else if($bb_ecommerce_store_theme_lay == '0.8'){
		$bb_ecommerce_store_custom_css .='#slider img{';
			$bb_ecommerce_store_custom_css .='opacity:0.8';
		$bb_ecommerce_store_custom_css .='}';
		}else if($bb_ecommerce_store_theme_lay == '0.9'){
		$bb_ecommerce_store_custom_css .='#slider img{';
			$bb_ecommerce_store_custom_css .='opacity:0.9';
		$bb_ecommerce_store_custom_css .='}';
		}

	/*-------------------------- Button Settings option------------------*/
	$bb_ecommerce_store_button_padding_top_bottom = get_theme_mod('bb_ecommerce_store_button_padding_top_bottom');
	$bb_ecommerce_store_button_padding_left_right = get_theme_mod('bb_ecommerce_store_button_padding_left_right');
	$bb_ecommerce_store_custom_css .='#slider .more-btn a, #comments .form-submit input[type="submit"],.blogbutton-small{';
		$bb_ecommerce_store_custom_css .='padding-top: '.esc_attr($bb_ecommerce_store_button_padding_top_bottom).'px; padding-bottom: '.esc_attr($bb_ecommerce_store_button_padding_top_bottom).'px; padding-left: '.esc_attr($bb_ecommerce_store_button_padding_left_right).'px; padding-right: '.esc_attr($bb_ecommerce_store_button_padding_left_right).'px; display:inline-block;';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_button_border_radius = get_theme_mod('bb_ecommerce_store_button_border_radius');
	$bb_ecommerce_store_custom_css .='#slider .more-btn a, #comments .form-submit input[type="submit"], .blogbutton-small{';
		$bb_ecommerce_store_custom_css .='border-radius: '.esc_attr($bb_ecommerce_store_button_border_radius).'px;';
	$bb_ecommerce_store_custom_css .='}';

	/*-----------------------------Responsive Setting --------------------*/
	$bb_ecommerce_store_slider = get_theme_mod( 'bb_ecommerce_store_responsive_slider',true);
	if($bb_ecommerce_store_slider == true && get_theme_mod( 'bb_ecommerce_store_slider_hide_show', false) == false){
    	$bb_ecommerce_store_custom_css .='#slider{';
			$bb_ecommerce_store_custom_css .='display:none;';
		$bb_ecommerce_store_custom_css .='} ';
	}
    if($bb_ecommerce_store_slider == true){
    	$bb_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$bb_ecommerce_store_custom_css .='#slider{';
			$bb_ecommerce_store_custom_css .='display:block;';
		$bb_ecommerce_store_custom_css .='} }';
	}else if($bb_ecommerce_store_slider == false){
		$bb_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$bb_ecommerce_store_custom_css .='#slider{';
			$bb_ecommerce_store_custom_css .='display:none;';
		$bb_ecommerce_store_custom_css .='} }';
	}

	$bb_ecommerce_store_scrolltotop = get_theme_mod( 'bb_ecommerce_store_responsive_scroll',true);
	if($bb_ecommerce_store_scrolltotop == true && get_theme_mod( 'bb_ecommerce_store_enable_disable_scroll', true) == false){
    	$bb_ecommerce_store_custom_css .='#scroll-top{';
			$bb_ecommerce_store_custom_css .='display:none !important;';
		$bb_ecommerce_store_custom_css .='} ';
	}
    if($bb_ecommerce_store_scrolltotop == true){
    	$bb_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$bb_ecommerce_store_custom_css .='#scroll-top{';
			$bb_ecommerce_store_custom_css .='visibility: visible !important;';
		$bb_ecommerce_store_custom_css .='} }';
	}else if($bb_ecommerce_store_scrolltotop == false){
		$bb_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$bb_ecommerce_store_custom_css .='#scroll-top{';
			$bb_ecommerce_store_custom_css .='visibility: hidden !important;';
		$bb_ecommerce_store_custom_css .='} }';
	}

	$bb_ecommerce_store_sidebar = get_theme_mod( 'bb_ecommerce_store_responsive_sidebar',true);
    if($bb_ecommerce_store_sidebar == true){
    	$bb_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$bb_ecommerce_store_custom_css .='#sidebar{';
			$bb_ecommerce_store_custom_css .='display:block;';
		$bb_ecommerce_store_custom_css .='} }';
	}else if($bb_ecommerce_store_sidebar == false){
		$bb_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$bb_ecommerce_store_custom_css .='#sidebar{';
			$bb_ecommerce_store_custom_css .='display:none;';
		$bb_ecommerce_store_custom_css .='} }';
	}

	$bb_ecommerce_store_loader = get_theme_mod( 'bb_ecommerce_store_responsive_preloader', true);
	if($bb_ecommerce_store_loader == true && get_theme_mod( 'bb_ecommerce_store_preloader_option', true) == false){
    	$bb_ecommerce_store_custom_css .='#loader-wrapper{';
			$bb_ecommerce_store_custom_css .='display:none;';
		$bb_ecommerce_store_custom_css .='} ';
	}
    if($bb_ecommerce_store_loader == true){
    	$bb_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$bb_ecommerce_store_custom_css .='#loader-wrapper{';
			$bb_ecommerce_store_custom_css .='display:block;';
		$bb_ecommerce_store_custom_css .='} }';
	}else if($bb_ecommerce_store_loader == false){
		$bb_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$bb_ecommerce_store_custom_css .='#loader-wrapper{';
			$bb_ecommerce_store_custom_css .='display:none;';
		$bb_ecommerce_store_custom_css .='} }';
	}

	$bb_ecommerce_store_sticky_header = get_theme_mod( 'bb_ecommerce_store_responsive_sticky_header',true);
    if($bb_ecommerce_store_sticky_header == true){
    	$bb_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$bb_ecommerce_store_custom_css .='.fixed-header{';
			$bb_ecommerce_store_custom_css .='display:block;';
		$bb_ecommerce_store_custom_css .='} }';
	}else if($bb_ecommerce_store_sticky_header == false){
		$bb_ecommerce_store_custom_css .='@media screen and (max-width:575px) {';
		$bb_ecommerce_store_custom_css .='.fixed-header{';
			$bb_ecommerce_store_custom_css .='display:none;';
		$bb_ecommerce_store_custom_css .='} }';
	}

	/*------------------ Skin Option  -------------------*/
	$bb_ecommerce_store_theme_lay = get_theme_mod( 'bb_ecommerce_store_background_skin_mode','Transparent Background');
    if($bb_ecommerce_store_theme_lay == 'With Background'){
		$bb_ecommerce_store_custom_css .='.page-box,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .noresult-content{';
			$bb_ecommerce_store_custom_css .='background-color: #fff; padding:10px;';
		$bb_ecommerce_store_custom_css .='}';
		$bb_ecommerce_store_custom_css .='#sidebar{';
			$bb_ecommerce_store_custom_css .='background: none;';
		$bb_ecommerce_store_custom_css .='}';
	}else if($bb_ecommerce_store_theme_lay == 'Transparent Background'){
		$bb_ecommerce_store_custom_css .='article.tag-sticky-2,#sidebar, .inner-service,.page-box-single{';
			$bb_ecommerce_store_custom_css .='background-color: transparent;';
		$bb_ecommerce_store_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$bb_ecommerce_store_top_bottom_product_button_padding = get_theme_mod('bb_ecommerce_store_top_bottom_product_button_padding', 10);
	$bb_ecommerce_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce div.product form.cart .button{';
		$bb_ecommerce_store_custom_css .='padding-top: '.esc_attr($bb_ecommerce_store_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($bb_ecommerce_store_top_bottom_product_button_padding).'px;';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_left_right_product_button_padding = get_theme_mod('bb_ecommerce_store_left_right_product_button_padding', 16);
	$bb_ecommerce_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce div.product form.cart .button{';
		$bb_ecommerce_store_custom_css .='padding-left: '.esc_attr($bb_ecommerce_store_left_right_product_button_padding).'px; padding-right: '.esc_attr($bb_ecommerce_store_left_right_product_button_padding).'px;';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_product_button_border_radius = get_theme_mod('bb_ecommerce_store_product_button_border_radius', 0);
	$bb_ecommerce_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce .cart .button, .woocommerce .cart input.button{';
		$bb_ecommerce_store_custom_css .='border-radius: '.esc_attr($bb_ecommerce_store_product_button_border_radius).'px;';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_show_related_products = get_theme_mod('bb_ecommerce_store_show_related_products',true);
	if($bb_ecommerce_store_show_related_products == false){
		$bb_ecommerce_store_custom_css .='.related.products{';
			$bb_ecommerce_store_custom_css .='display: none;';
		$bb_ecommerce_store_custom_css .='}';
	}

	$bb_ecommerce_store_show_wooproducts_border = get_theme_mod('bb_ecommerce_store_show_wooproducts_border', false);
	if($bb_ecommerce_store_show_wooproducts_border == true){
		$bb_ecommerce_store_custom_css .='.products li{';
			$bb_ecommerce_store_custom_css .='border: 1px solid #cccccc;';
		$bb_ecommerce_store_custom_css .='}';
	}

	$bb_ecommerce_store_top_bottom_wooproducts_padding = get_theme_mod('bb_ecommerce_store_top_bottom_wooproducts_padding',0);
	$bb_ecommerce_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$bb_ecommerce_store_custom_css .='padding-top: '.esc_attr($bb_ecommerce_store_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($bb_ecommerce_store_top_bottom_wooproducts_padding).'px !important;';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_left_right_wooproducts_padding = get_theme_mod('bb_ecommerce_store_left_right_wooproducts_padding',0);
	$bb_ecommerce_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$bb_ecommerce_store_custom_css .='padding-left: '.esc_attr($bb_ecommerce_store_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($bb_ecommerce_store_left_right_wooproducts_padding).'px !important;';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_wooproducts_border_radius = get_theme_mod('bb_ecommerce_store_wooproducts_border_radius',0);
	$bb_ecommerce_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$bb_ecommerce_store_custom_css .='border-radius: '.esc_attr($bb_ecommerce_store_wooproducts_border_radius).'px;';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_wooproducts_box_shadow = get_theme_mod('bb_ecommerce_store_wooproducts_box_shadow',0);
	$bb_ecommerce_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$bb_ecommerce_store_custom_css .='box-shadow: '.esc_attr($bb_ecommerce_store_wooproducts_box_shadow).'px '.esc_attr($bb_ecommerce_store_wooproducts_box_shadow).'px '.esc_attr($bb_ecommerce_store_wooproducts_box_shadow).'px #eee;';
	$bb_ecommerce_store_custom_css .='}';

	/*-------------- Footer Text -------------------*/

	$bb_ecommerce_store_footer_heading = get_theme_mod( 'bb_ecommerce_store_footer_heading','Left');
    if($bb_ecommerce_store_footer_heading == 'Left'){
		$bb_ecommerce_store_custom_css .='.copyright-wrapper h3, .copyright-wrapper .wp-block-search .wp-block-search__label{';
		$bb_ecommerce_store_custom_css .='text-align: left;';
		$bb_ecommerce_store_custom_css .='}';
	}else if($bb_ecommerce_store_footer_heading == 'Center'){
		$bb_ecommerce_store_custom_css .='.copyright-wrapper h3, .copyright-wrapper .wp-block-search .wp-block-search__label{';
			$bb_ecommerce_store_custom_css .='text-align: center;';
		$bb_ecommerce_store_custom_css .='}';
	}else if($bb_ecommerce_store_footer_heading == 'Right'){
		$bb_ecommerce_store_custom_css .='.copyright-wrapper h3, .copyright-wrapper .wp-block-search .wp-block-search__label{';
			$bb_ecommerce_store_custom_css .='text-align: right;';
		$bb_ecommerce_store_custom_css .='}';
	}

	$bb_ecommerce_store_footer_content = get_theme_mod( 'bb_ecommerce_store_footer_content','Left');
    if($bb_ecommerce_store_footer_content == 'Left'){
		$bb_ecommerce_store_custom_css .='.copyright-wrapper .widget{';
		$bb_ecommerce_store_custom_css .='text-align: left;';
		$bb_ecommerce_store_custom_css .='}';
	}else if($bb_ecommerce_store_footer_content == 'Center'){
		$bb_ecommerce_store_custom_css .='.copyright-wrapper .widget{';
			$bb_ecommerce_store_custom_css .='text-align: center;';
		$bb_ecommerce_store_custom_css .='}';
	}else if($bb_ecommerce_store_footer_content == 'Right'){
		$bb_ecommerce_store_custom_css .='.copyright-wrapper .widget{';
			$bb_ecommerce_store_custom_css .='text-align: right;';
		$bb_ecommerce_store_custom_css .='}';
	}

	// Footer Heading Font Size
	$bb_ecommerce_store_footer_font_size = get_theme_mod('bb_ecommerce_store_footer_font_size',25);
	$bb_ecommerce_store_custom_css .='.copyright-wrapper h3{';
		$bb_ecommerce_store_custom_css .='font-size: '.esc_attr($bb_ecommerce_store_footer_font_size).'px;';
	$bb_ecommerce_store_custom_css .='}';

	// Footer Heading Text Transform
	$bb_ecommerce_store_theme_lay = get_theme_mod( 'bb_ecommerce_store_footer_text_tranform','Capitalize');
    if($bb_ecommerce_store_theme_lay == 'Uppercase'){
		$bb_ecommerce_store_custom_css .='.copyright-wrapper h3{';
			$bb_ecommerce_store_custom_css .='text-transform: uppercase;';
		$bb_ecommerce_store_custom_css .='}';
	}else if($bb_ecommerce_store_theme_lay == 'Lowercase'){
		$bb_ecommerce_store_custom_css .='.copyright-wrapper h3{';
			$bb_ecommerce_store_custom_css .='text-transform: lowercase;';
		$bb_ecommerce_store_custom_css .='}';
	}
	else if($bb_ecommerce_store_theme_lay == 'Capitalize'){
		$bb_ecommerce_store_custom_css .='.copyright-wrapper h3{';
			$bb_ecommerce_store_custom_css .='text-transform: capitalize;';
		$bb_ecommerce_store_custom_css .='}';
	}

	$bb_ecommerce_store_copyright_content_align = get_theme_mod('bb_ecommerce_store_copyright_content_align');
	if($bb_ecommerce_store_copyright_content_align != false){
		$bb_ecommerce_store_custom_css .='.copyright{';
			$bb_ecommerce_store_custom_css .='text-align: '.esc_attr($bb_ecommerce_store_copyright_content_align).';';
		$bb_ecommerce_store_custom_css .='}';
	}

	$bb_ecommerce_store_footer_content_font_size = get_theme_mod('bb_ecommerce_store_footer_content_font_size', 15);
	$bb_ecommerce_store_custom_css .='.copyright p, .copyright a{';
		$bb_ecommerce_store_custom_css .='font-size: '.esc_attr($bb_ecommerce_store_footer_content_font_size).'px';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_copyright_padding = get_theme_mod('bb_ecommerce_store_copyright_padding', 15);
	$bb_ecommerce_store_custom_css .='.copyright{';
		$bb_ecommerce_store_custom_css .='padding-top: '.esc_attr($bb_ecommerce_store_copyright_padding).'px; padding-bottom: '.esc_attr($bb_ecommerce_store_copyright_padding).'px;';
	$bb_ecommerce_store_custom_css .='}';

	/*------ copyright text color -------*/
	$bb_ecommerce_store_footer_text_color = get_theme_mod('bb_ecommerce_store_footer_text_color');
	if($bb_ecommerce_store_footer_text_color != false){
		$bb_ecommerce_store_custom_css .='.copyright p, .copyright p a{';
			$bb_ecommerce_store_custom_css .='color: '.esc_attr($bb_ecommerce_store_footer_text_color).'!important;';
		$bb_ecommerce_store_custom_css .='}';
	}

	/*------ copyright background css -------*/
	$bb_ecommerce_store_footer_text_bg_color = get_theme_mod('bb_ecommerce_store_footer_text_bg_color');
	if($bb_ecommerce_store_footer_text_bg_color != false){
		$bb_ecommerce_store_custom_css .='.copyright{';
			$bb_ecommerce_store_custom_css .='background-color: '.esc_attr($bb_ecommerce_store_footer_text_bg_color).';';
		$bb_ecommerce_store_custom_css .='}';
	}

	$bb_ecommerce_store_footer_widget_bg_color = get_theme_mod('bb_ecommerce_store_footer_widget_bg_color');
	$bb_ecommerce_store_custom_css .='.copyright-wrapper{';
		$bb_ecommerce_store_custom_css .='background-color: '.esc_attr($bb_ecommerce_store_footer_widget_bg_color).';';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_footer_widget_bg_image = get_theme_mod('bb_ecommerce_store_footer_widget_bg_image');
	if($bb_ecommerce_store_footer_widget_bg_image != false){
		$bb_ecommerce_store_custom_css .='.copyright-wrapper{';
			$bb_ecommerce_store_custom_css .='background: url('.esc_attr($bb_ecommerce_store_footer_widget_bg_image).'); background-size: cover;';
		$bb_ecommerce_store_custom_css .='}';
	}

	// scroll to top bg color
	$bb_ecommerce_store_back_to_top_bg_color = get_theme_mod('bb_ecommerce_store_back_to_top_bg_color');
	$bb_ecommerce_store_custom_css .='#scroll-top{';
		$bb_ecommerce_store_custom_css .='background-color: '.esc_attr($bb_ecommerce_store_back_to_top_bg_color).';';
		$bb_ecommerce_store_custom_css .='border-color: '.esc_attr($bb_ecommerce_store_back_to_top_bg_color).';';
	$bb_ecommerce_store_custom_css .='}';

	// scroll to top bg hover color
	$bb_ecommerce_store_back_to_top_bg_hover_color = get_theme_mod('bb_ecommerce_store_back_to_top_bg_hover_color');
	$bb_ecommerce_store_custom_css .='#scroll-top:hover{';
		$bb_ecommerce_store_custom_css .='background-color: '.esc_attr($bb_ecommerce_store_back_to_top_bg_hover_color).';';
		$bb_ecommerce_store_custom_css .='border-color: '.esc_attr($bb_ecommerce_store_back_to_top_bg_hover_color).';';
	$bb_ecommerce_store_custom_css .='}';

	// scroll to top
	$bb_ecommerce_store_scroll_font_size_icon = get_theme_mod('bb_ecommerce_store_scroll_font_size_icon', 22);
	$bb_ecommerce_store_custom_css .='#scroll-top i{';
		$bb_ecommerce_store_custom_css .='font-size: '.esc_attr($bb_ecommerce_store_scroll_font_size_icon).'px;';
	$bb_ecommerce_store_custom_css .='}';

	// Slider Height 
	$bb_ecommerce_store_slider_image_height = get_theme_mod('bb_ecommerce_store_slider_image_height');
	$bb_ecommerce_store_custom_css .='#slider img{';
		$bb_ecommerce_store_custom_css .='height: '.esc_attr($bb_ecommerce_store_slider_image_height).'px;';
	$bb_ecommerce_store_custom_css .='}';

	// primary menu 
	if((has_nav_menu('primary')) != true){
		$bb_ecommerce_store_custom_css .='.cathead{';
			$bb_ecommerce_store_custom_css .='top:0;';
		$bb_ecommerce_store_custom_css .='} ';
	}

	// button font size
	$bb_ecommerce_store_button_font_size = get_theme_mod('bb_ecommerce_store_button_font_size');
	$bb_ecommerce_store_custom_css .='#our-services .new-text .read-btn a{';
		$bb_ecommerce_store_custom_css .='font-size: '.esc_attr($bb_ecommerce_store_button_font_size).'px;';
	$bb_ecommerce_store_custom_css .='}';

	// font weight
	$bb_ecommerce_store_btn_font_weight = get_theme_mod('bb_ecommerce_store_btn_font_weight');{
	$bb_ecommerce_store_custom_css .='#our-services .new-text .read-btn a{';
	$bb_ecommerce_store_custom_css .='font-weight: '.esc_attr($bb_ecommerce_store_btn_font_weight).';';
	$bb_ecommerce_store_custom_css .='}';
	}

	// Button Text Transform
	$bb_ecommerce_store_theme_lay = get_theme_mod( 'bb_ecommerce_store_button_text_transform','Uppercase');
    if($bb_ecommerce_store_theme_lay == 'Uppercase'){
		$bb_ecommerce_store_custom_css .='#our-services .new-text .read-btn a{';
			$bb_ecommerce_store_custom_css .='text-transform: uppercase;';
		$bb_ecommerce_store_custom_css .='}';
	}else if($bb_ecommerce_store_theme_lay == 'Lowercase'){
		$bb_ecommerce_store_custom_css .='#our-services .new-text .read-btn a{';
			$bb_ecommerce_store_custom_css .='text-transform: lowercase;';
		$bb_ecommerce_store_custom_css .='}';
	}
	else if($bb_ecommerce_store_theme_lay == 'Capitalize'){
		$bb_ecommerce_store_custom_css .='#our-services .new-text .read-btn a{';
			$bb_ecommerce_store_custom_css .='text-transform: capitalize;';
		$bb_ecommerce_store_custom_css .='}';
	}

	// Display Blog Post 
	$bb_ecommerce_store_display_blog_page_post = get_theme_mod( 'bb_ecommerce_store_display_blog_page_post','In Box');
	if($bb_ecommerce_store_display_blog_page_post == 'In Box'){
		$bb_ecommerce_store_custom_css .='article.tag-sticky-2, .inner-service{';
			$bb_ecommerce_store_custom_css .='background: #f6f6f6;';
		$bb_ecommerce_store_custom_css .='}';
	}else if($bb_ecommerce_store_display_blog_page_post == 'Without Box'){
		$bb_ecommerce_store_custom_css .='.inner-service{';
			$bb_ecommerce_store_custom_css .='border:none; margin:25px 0; ';
		$bb_ecommerce_store_custom_css .='}';
	}

	//slider button bg color
	$bb_ecommerce_store_slider_btn_bg_color = get_theme_mod('bb_ecommerce_store_slider_btn_bg_color');
	$bb_ecommerce_store_custom_css .='#slider .more-btn a{';
		$bb_ecommerce_store_custom_css .='background-color: '.esc_attr($bb_ecommerce_store_slider_btn_bg_color).';';
	$bb_ecommerce_store_custom_css .='}';

	// slider overlay
	$bb_ecommerce_store_slider_overlay = get_theme_mod('bb_ecommerce_store_slider_overlay', true);
	if($bb_ecommerce_store_slider_overlay == false){
		$bb_ecommerce_store_custom_css .='#slider img{';
			$bb_ecommerce_store_custom_css .='opacity:1;';
		$bb_ecommerce_store_custom_css .='}';
	} 
	$bb_ecommerce_store_slider_image_overlay_color = get_theme_mod('bb_ecommerce_store_slider_image_overlay_color', true);
	if($bb_ecommerce_store_slider_overlay != false){
		$bb_ecommerce_store_custom_css .='#slider{';
			$bb_ecommerce_store_custom_css .='background-color: '.esc_attr($bb_ecommerce_store_slider_image_overlay_color).';';
		$bb_ecommerce_store_custom_css .='}';
	}

	// site title and tagline font size option
	$bb_ecommerce_store_site_title_size_option = get_theme_mod('bb_ecommerce_store_site_title_size_option', 34);{
	$bb_ecommerce_store_custom_css .='.header .logo a{';
	$bb_ecommerce_store_custom_css .='font-size: '.esc_attr($bb_ecommerce_store_site_title_size_option).'px;';
		$bb_ecommerce_store_custom_css .='}';
	}

	$bb_ecommerce_store_site_tagline_size_option = get_theme_mod('bb_ecommerce_store_site_tagline_size_option', 14);{
	$bb_ecommerce_store_custom_css .='.header .logo p{';
	$bb_ecommerce_store_custom_css .='font-size: '.esc_attr($bb_ecommerce_store_site_tagline_size_option).'px;';
		$bb_ecommerce_store_custom_css .='}';
	}

	// woocommerce product sale settings
	$bb_ecommerce_store_border_radius_product_sale = get_theme_mod('bb_ecommerce_store_border_radius_product_sale',50);
	$bb_ecommerce_store_custom_css .='.woocommerce span.onsale {';
		$bb_ecommerce_store_custom_css .='border-radius: '.esc_attr($bb_ecommerce_store_border_radius_product_sale).'% !important;';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_align_product_sale = get_theme_mod('bb_ecommerce_store_align_product_sale', 'Right');
	if($bb_ecommerce_store_align_product_sale == 'Right' ){
		$bb_ecommerce_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$bb_ecommerce_store_custom_css .=' left:auto; right:0;';
		$bb_ecommerce_store_custom_css .='}';
	}elseif($bb_ecommerce_store_align_product_sale == 'Left' ){
		$bb_ecommerce_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$bb_ecommerce_store_custom_css .=' left:0; right:auto;';
		$bb_ecommerce_store_custom_css .='}';
	}

	$bb_ecommerce_store_product_sale_font_size = get_theme_mod('bb_ecommerce_store_product_sale_font_size',14);
	$bb_ecommerce_store_custom_css .='.woocommerce span.onsale{';
		$bb_ecommerce_store_custom_css .='font-size: '.esc_attr($bb_ecommerce_store_product_sale_font_size).'px;';
	$bb_ecommerce_store_custom_css .='}';

	// product sale padding top /bottom
	$bb_ecommerce_store_sale_padding_top = get_theme_mod('bb_ecommerce_store_sale_padding_top', '');
	$bb_ecommerce_store_custom_css .='.woocommerce ul.products li.product .onsale{';
	$bb_ecommerce_store_custom_css .='padding-top: '.esc_attr($bb_ecommerce_store_sale_padding_top).'px; padding-bottom: '.esc_attr($bb_ecommerce_store_sale_padding_top).'px !important;';
	$bb_ecommerce_store_custom_css .='}';

	// product sale padding left/right
	$bb_ecommerce_store_sale_padding_left = get_theme_mod('bb_ecommerce_store_sale_padding_left', '');
	$bb_ecommerce_store_custom_css .='.woocommerce ul.products li.product .onsale{';
	$bb_ecommerce_store_custom_css .='padding-left: '.esc_attr($bb_ecommerce_store_sale_padding_left).'px; padding-right: '.esc_attr($bb_ecommerce_store_sale_padding_left).'px;';
	$bb_ecommerce_store_custom_css .='}';

	// preloader background image
	$bb_ecommerce_store_preloader_bg_image = get_theme_mod('bb_ecommerce_store_preloader_bg_image');
	if($bb_ecommerce_store_preloader_bg_image != false){
		$bb_ecommerce_store_custom_css .='#loader-wrapper .loader-section, #loader-wrapper{';
			$bb_ecommerce_store_custom_css .='background: url('.esc_attr($bb_ecommerce_store_preloader_bg_image).'); background-size: cover;';
		$bb_ecommerce_store_custom_css .='}';
	}

	// preloader background option
	$bb_ecommerce_store_loader_background_color_first = get_theme_mod('bb_ecommerce_store_loader_background_color_first');
	$bb_ecommerce_store_custom_css .='#loader-wrapper .loader-section, #loader-wrapper{';
		$bb_ecommerce_store_custom_css .='background-color: '.esc_attr($bb_ecommerce_store_loader_background_color_first).';';
	$bb_ecommerce_store_custom_css .='} ';

	// breadcrumb color
	$bb_ecommerce_store_breadcrumb_color = get_theme_mod('bb_ecommerce_store_breadcrumb_color');
	$bb_ecommerce_store_custom_css .='.bradcrumbs a, .bradcrumbs span{';
	$bb_ecommerce_store_custom_css .='color: '.esc_attr($bb_ecommerce_store_breadcrumb_color).'!important;';
	$bb_ecommerce_store_custom_css .='} ';

	// breadcrumb bg color
	$bb_ecommerce_store_breadcrumb_bg_color = get_theme_mod('bb_ecommerce_store_breadcrumb_bg_color');
	$bb_ecommerce_store_custom_css .='.bradcrumbs a, .bradcrumbs span{';
	$bb_ecommerce_store_custom_css .='background-color: '.esc_attr($bb_ecommerce_store_breadcrumb_bg_color).'!important;';
	$bb_ecommerce_store_custom_css .='} ';

	// fixed header padding option
	$bb_ecommerce_store_sticky_header_padding_settings = get_theme_mod('bb_ecommerce_store_sticky_header_padding_settings', 0);
	$bb_ecommerce_store_custom_css .='.fixed-header{';
		$bb_ecommerce_store_custom_css .='padding: '.esc_attr($bb_ecommerce_store_sticky_header_padding_settings).'px;';
	$bb_ecommerce_store_custom_css .='}';

	// woocommerce Product Navigation
	$bb_ecommerce_store_products_navigation = get_theme_mod('bb_ecommerce_store_products_navigation', 'Yes');
	if($bb_ecommerce_store_products_navigation == 'No'){
		$bb_ecommerce_store_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$bb_ecommerce_store_custom_css .='display: none;';
		$bb_ecommerce_store_custom_css .='}';
	}

	// featured image setting
	$bb_ecommerce_store_featured_img_border_radius = get_theme_mod('bb_ecommerce_store_featured_img_border_radius', 0);
	$bb_ecommerce_store_custom_css .='#our-services .box-image img{';
		$bb_ecommerce_store_custom_css .='border-radius: '.esc_attr($bb_ecommerce_store_featured_img_border_radius).'px;';
	$bb_ecommerce_store_custom_css .='}';

	$bb_ecommerce_store_featured_img_box_shadow = get_theme_mod('bb_ecommerce_store_featured_img_box_shadow',0);
	$bb_ecommerce_store_custom_css .='#our-services .box-image img{';
		$bb_ecommerce_store_custom_css .='box-shadow: '.esc_attr($bb_ecommerce_store_featured_img_box_shadow).'px '.esc_attr($bb_ecommerce_store_featured_img_box_shadow).'px '.esc_attr($bb_ecommerce_store_featured_img_box_shadow).'px #ccc;';
	$bb_ecommerce_store_custom_css .='}';

	//First Cap (Blog Post)
	$bb_ecommerce_store_show_first_caps = get_theme_mod('bb_ecommerce_store_show_first_caps', 'false');
	if($bb_ecommerce_store_show_first_caps == 'true' ){
	$bb_ecommerce_store_custom_css .='#our-services .entry-content p:nth-of-type(1)::first-letter{';
	$bb_ecommerce_store_custom_css .=' font-size: 55px; font-weight: 600;';
	$bb_ecommerce_store_custom_css .=' margin-right: 6px;';
	$bb_ecommerce_store_custom_css .=' line-height: 1;';
	$bb_ecommerce_store_custom_css .='}';
	}elseif($bb_ecommerce_store_show_first_caps == 'false' ){
	$bb_ecommerce_store_custom_css .='#our-services .entry-content p:nth-of-type(1)::first-letter {';
	$bb_ecommerce_store_custom_css .='display: none;';
	$bb_ecommerce_store_custom_css .='}';
	}

	//First Cap (Single Post)
	$bb_ecommerce_store_single_post_first_caps = get_theme_mod('bb_ecommerce_store_single_post_first_caps', 'false');
	if($bb_ecommerce_store_single_post_first_caps == 'true' ){
	$bb_ecommerce_store_custom_css .='.page-box-single .new-text .entry-content p:nth-of-type(1)::first-letter{';
	$bb_ecommerce_store_custom_css .=' font-size: 55px; font-weight: 600;';
	$bb_ecommerce_store_custom_css .=' margin-right: 6px;';
	$bb_ecommerce_store_custom_css .=' line-height: 1;';
	$bb_ecommerce_store_custom_css .='}';
	}elseif($bb_ecommerce_store_single_post_first_caps == 'false' ){
	$bb_ecommerce_store_custom_css .='.page-box-single .new-text .entry-content p:nth-of-type(1)::first-letter {';
	$bb_ecommerce_store_custom_css .='display: none;';
	$bb_ecommerce_store_custom_css .='}';
	}

	// slider top and bottom padding
	$bb_ecommerce_store_top_bottom_slider_content_space = get_theme_mod('bb_ecommerce_store_top_bottom_slider_content_space');
	$bb_ecommerce_store_left_right_slider_content_space = get_theme_mod('bb_ecommerce_store_left_right_slider_content_space');
	$bb_ecommerce_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .know-btn{';
		$bb_ecommerce_store_custom_css .='top: '.esc_attr($bb_ecommerce_store_top_bottom_slider_content_space).'%; bottom: '.esc_attr($bb_ecommerce_store_top_bottom_slider_content_space).'%;left: '.esc_attr($bb_ecommerce_store_left_right_slider_content_space).'%;right: '.esc_attr($bb_ecommerce_store_left_right_slider_content_space).'%;';
	$bb_ecommerce_store_custom_css .='}';

	// Topbar padding top bottom
	$bb_ecommerce_store_topbar_top_bottom_spacing = get_theme_mod('bb_ecommerce_store_topbar_top_bottom_spacing');
	$bb_ecommerce_store_custom_css .='.topbar{';
		$bb_ecommerce_store_custom_css .='padding-top: '.esc_attr($bb_ecommerce_store_topbar_top_bottom_spacing).'px !important; padding-bottom: '.esc_attr($bb_ecommerce_store_topbar_top_bottom_spacing).'px !important;';
	$bb_ecommerce_store_custom_css .='}';

	// Menu Text Transform
	$bb_ecommerce_store_theme_lay = get_theme_mod( 'bb_ecommerce_store_text_tranform_menu','Uppercase');
    if($bb_ecommerce_store_theme_lay == 'Uppercase'){
		$bb_ecommerce_store_custom_css .='.primary-navigation a{';
			$bb_ecommerce_store_custom_css .='text-transform: uppercase;';
		$bb_ecommerce_store_custom_css .='}';
	}else if($bb_ecommerce_store_theme_lay == 'Lowercase'){
		$bb_ecommerce_store_custom_css .='.primary-navigation a{';
			$bb_ecommerce_store_custom_css .='text-transform: lowercase;';
		$bb_ecommerce_store_custom_css .='}';
	}
	else if($bb_ecommerce_store_theme_lay == 'Capitalize'){
		$bb_ecommerce_store_custom_css .='.primary-navigation a{';
			$bb_ecommerce_store_custom_css .='text-transform: capitalize;';
		$bb_ecommerce_store_custom_css .='}';
	}

	// menu font size
	$bb_ecommerce_store_menus_font_size = get_theme_mod('bb_ecommerce_store_menus_font_size',12);
	$bb_ecommerce_store_custom_css .='.primary-navigation a, .primary-navigation ul ul a, .sf-arrows .sf-with-ul:after, #menu-sidebar .primary-navigation a{';
		$bb_ecommerce_store_custom_css .='font-size: '.esc_attr($bb_ecommerce_store_menus_font_size).'px;';
	$bb_ecommerce_store_custom_css .='}';

	// font weight
	$bb_ecommerce_store_menu_weight = get_theme_mod('bb_ecommerce_store_menu_weight');{
		$bb_ecommerce_store_custom_css .='.primary-navigation a, .primary-navigation ul ul a, .sf-arrows .sf-with-ul:after, #menu-sidebar .primary-navigation a{';
			$bb_ecommerce_store_custom_css .='font-weight: '.esc_attr($bb_ecommerce_store_menu_weight).';';
		$bb_ecommerce_store_custom_css .='}';
	}

	// menu padding
	$bb_ecommerce_store_menus_padding = get_theme_mod('bb_ecommerce_store_menus_padding');
	$bb_ecommerce_store_custom_css .='.primary-navigation ul li, .sf-arrows .sf-with-ul:after{';
		$bb_ecommerce_store_custom_css .='padding: '.esc_attr($bb_ecommerce_store_menus_padding).'px;';
	$bb_ecommerce_store_custom_css .='}';

	// Menu Color Option
	$bb_ecommerce_store_menu_color_settings = get_theme_mod('bb_ecommerce_store_menu_color_settings');
	$bb_ecommerce_store_custom_css .='.primary-navigation ul li a{';
		$bb_ecommerce_store_custom_css .='color: '.esc_attr($bb_ecommerce_store_menu_color_settings).';';
	$bb_ecommerce_store_custom_css .='} ';

	// Menu Hover Color Option
	$bb_ecommerce_store_menu_hover_color_settings = get_theme_mod('bb_ecommerce_store_menu_hover_color_settings');
	$bb_ecommerce_store_custom_css .='.primary-navigation ul li a:hover {';
		$bb_ecommerce_store_custom_css .='color: '.esc_attr($bb_ecommerce_store_menu_hover_color_settings).';';
	$bb_ecommerce_store_custom_css .='} ';

	// Submenu Color Option
	$bb_ecommerce_store_submenu_color_settings = get_theme_mod('bb_ecommerce_store_submenu_color_settings');
	$bb_ecommerce_store_custom_css .='.primary-navigation ul.sub-menu li a, .primary-navigation ul.children li a{';
		$bb_ecommerce_store_custom_css .='color: '.esc_attr($bb_ecommerce_store_submenu_color_settings).';';
	$bb_ecommerce_store_custom_css .='} ';

	// Submenu Hover Color Option
	$bb_ecommerce_store_submenu_hover_color_settings = get_theme_mod('bb_ecommerce_store_submenu_hover_color_settings');
	$bb_ecommerce_store_custom_css .='.primary-navigation ul.sub-menu li a:hover, .primary-navigation ul.children li a:hover{';
	$bb_ecommerce_store_custom_css .='color: '.esc_attr($bb_ecommerce_store_submenu_hover_color_settings).';';
	$bb_ecommerce_store_custom_css .='} ';

	// responsive menu button 
	$bb_ecommerce_store_button_alignment = get_theme_mod('bb_ecommerce_store_button_alignment');
	if($bb_ecommerce_store_button_alignment != false){
		$bb_ecommerce_store_custom_css .='.toggle-menu.responsive-menu{';
			$bb_ecommerce_store_custom_css .='text-align: '.esc_attr($bb_ecommerce_store_button_alignment).';';
		$bb_ecommerce_store_custom_css .='}';
	} 

	//Toggle Button Color Option
	$bb_ecommerce_store_toggle_button_color_settings = get_theme_mod('bb_ecommerce_store_toggle_button_color_settings');
	$bb_ecommerce_store_custom_css .='.toggle-menu i  {';
		$bb_ecommerce_store_custom_css .='color: '.esc_attr($bb_ecommerce_store_toggle_button_color_settings).';';
	$bb_ecommerce_store_custom_css .='} ';

	// site tagline color
	$bb_ecommerce_store_site_tagline_color = get_theme_mod('bb_ecommerce_store_site_tagline_color');
	$bb_ecommerce_store_custom_css .='.logo p {';
		$bb_ecommerce_store_custom_css .='color: '.esc_attr($bb_ecommerce_store_site_tagline_color).' !important;';
	$bb_ecommerce_store_custom_css .='}';

	// site title color
	$bb_ecommerce_store_site_title_color = get_theme_mod('bb_ecommerce_store_site_title_color');
	$bb_ecommerce_store_custom_css .='.site-title a{';
		$bb_ecommerce_store_custom_css .='color: '.esc_attr($bb_ecommerce_store_site_title_color).' !important;';
	$bb_ecommerce_store_custom_css .='}';

	// site top-bottom logo padding 
	$bb_ecommerce_store_logo_padding_top = get_theme_mod('bb_ecommerce_store_logo_padding_top', '');
	$bb_ecommerce_store_custom_css .='.logo{';
	$bb_ecommerce_store_custom_css .='padding-top: '.esc_attr($bb_ecommerce_store_logo_padding_top).'px; padding-bottom: '.esc_attr($bb_ecommerce_store_logo_padding_top).'px;';
	$bb_ecommerce_store_custom_css .='}';

	// site left-right logo padding 
	$bb_ecommerce_store_logo_padding_left = get_theme_mod('bb_ecommerce_store_logo_padding_left', '');
	$bb_ecommerce_store_custom_css .='.logo{';
	$bb_ecommerce_store_custom_css .='padding-left: '.esc_attr($bb_ecommerce_store_logo_padding_left).'px; padding-right: '.esc_attr($bb_ecommerce_store_logo_padding_left).'px;';
	$bb_ecommerce_store_custom_css .='}';

	// site top-bottom logo margin 
	$bb_ecommerce_store_logo_margin_top = get_theme_mod('bb_ecommerce_store_logo_margin_top', '');
	$bb_ecommerce_store_custom_css .='.logo{';
	$bb_ecommerce_store_custom_css .='margin-top: '.esc_attr($bb_ecommerce_store_logo_margin_top).'px; margin-bottom: '.esc_attr($bb_ecommerce_store_logo_margin_top).'px;';
	$bb_ecommerce_store_custom_css .='}';

	// site left-right logo margin
	$bb_ecommerce_store_logo_margin_left = get_theme_mod('bb_ecommerce_store_logo_margin_left', '');
	$bb_ecommerce_store_custom_css .='.logo{';
	$bb_ecommerce_store_custom_css .='margin-left: '.esc_attr($bb_ecommerce_store_logo_margin_left).'px; margin-right: '.esc_attr($bb_ecommerce_store_logo_margin_left).'px;';
	$bb_ecommerce_store_custom_css .='}';




