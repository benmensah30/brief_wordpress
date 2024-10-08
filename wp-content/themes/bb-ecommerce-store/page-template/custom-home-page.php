<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main role="main" id="maincontent">
	<div class="container">
		<div class="row">
			<?php do_action( 'bb_ecommerce_store_before_static_sidebar' ); ?>
			<div class="col-lg-3 col-md-3 static-sidebar px-3">
		        <div class="cathead w-100 p-3">
		          <i class="fa fa-bars px-2" aria-hidden="true"></i><span><?php echo esc_html_e('ALL CATEGORIES','bb-ecommerce-store'); ?></span>
		        </div>
		        <?php if(class_exists('woocommerce')){ ?>
		        <div class="product-category">
		            <?php
		              $args = array(
		                //'number'     => $number,
		                'orderby'    => 'title',
		                'order'      => 'ASC',
		                'hide_empty' => 0,
		                'parent'  => 0
		                //'include'    => $ids
		              );
		              $product_categories = get_terms( 'product_cat', $args );
		              $count = count($product_categories);
		              if ( $count > 0 ){
		                  foreach ( $product_categories as $product_category ) {
		                      $cats_id   = $product_category->term_id;
		                    $cat_link = get_category_link( $cats_id );
		                    $thumbnail_id = get_term_meta( $product_category->term_id, 'thumbnail_id', true ); // Get Category Thumbnail
		                    $image = wp_get_attachment_url( $thumbnail_id );
		                    if ($product_category->category_parent == 0) {
		                      ?>
		                    <li class="drp_dwn_menu"><a href="<?php echo esc_url(get_term_link( $product_category ) ); ?>">
			                    <?php
			                    if ( $image ) {
				                  echo '<img class="thumd_img" src="' . esc_url( $image ) . '" alt="<?php esc_attr(the_title()); ?>" role="img" />';
				                }
			                    echo esc_html( $product_category->name ); ?><span class="screen-reader-text"><?php esc_html_e( 'Product Category','bb-ecommerce-store' );?></span></a></li>
		                    	<?php
		                    }
		                }
		              }
		            ?>
		          </div>
		        <?php } ?>
		       	<div id="sidebar">
		       		<?php dynamic_sidebar('homepage'); ?>
		       	</div>
			</div>
			<div class="col-lg-9 col-md-9">
				<?php do_action( 'bb_ecommerce_store_before_slider' ); ?>
				
				<?php if( get_theme_mod('bb_ecommerce_store_slider_hide_show', false) != '' || get_theme_mod('bb_ecommerce_store_responsive_slider', true) != ''){ ?>
					<section id="slider" class="p-0">
					  	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('bb_ecommerce_store_slider_speed_option', 3000)); ?>"> 
						    <?php $bb_ecommerce_store_slider_pages = array();
						      	for ( $count = 1; $count <= 4; $count++ ) {
							        $mod = intval( get_theme_mod( 'bb_ecommerce_store_slider' . $count ));
							        if ( 'page-none-selected' != $mod ) {
							          $bb_ecommerce_store_slider_pages[] = $mod;
							        }
						      	}
						      	if( !empty($bb_ecommerce_store_slider_pages) ) :
						        $args = array(
						          	'post_type' => 'page',
						          	'post__in' => $bb_ecommerce_store_slider_pages,
						          	'orderby' => 'post__in'
						        );
						        $query = new WP_Query( $args );
						        if ( $query->have_posts() ) :
						          $i = 1;
						    ?>     
						    <div class="carousel-inner" role="listbox">
						      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
						        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
						          	<?php if(has_post_thumbnail()){
                  						the_post_thumbnail();
			              			} else{?>
				                		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/theme-block-pattern/images/banner.png" alt="" />
					              	<?php } ?>
						          	<div class="carousel-caption">
							            <div class="inner_carousel">
							            	<?php if( get_theme_mod('bb_ecommerce_store_slider_title_Show_hide',true) != ''){ ?>
							              		<h1 class="text-uppercase"><?php the_title();?></h1>
							              	<?php } ?>
							              	<?php if( get_theme_mod('bb_ecommerce_store_slider_button_show_hide',true) != ''){ ?>
							              	<?php if( get_theme_mod('bb_ecommerce_store_slider_button','SHOP NOW') != '' || get_theme_mod('bb_ecommerce_store_slider_button_url') != ''){ ?>
								              	<div class="more-btn my-md-3">            
						                        	<a href="<?php echo esc_url(get_theme_mod('bb_ecommerce_store_slider_button_url')!= '') ? esc_url(get_theme_mod('bb_ecommerce_store_slider_button_url')) : esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('bb_ecommerce_store_slider_button','SHOP NOW'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('bb_ecommerce_store_slider_button','SHOP NOW'));?></span></a>
						                        </div>
						                    <?php } ?>		
						                    <?php } ?>            
							            </div>
						          	</div>
						        </div>
						      	<?php $i++; endwhile; 
						      	wp_reset_postdata();?>
						    </div>
						    <?php else : ?>
						    <div class="no-postfound"></div>
						      <?php endif;
						    endif;?>
						    <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
						      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
						      <span class="screen-reader-text"><?php esc_html_e( 'Previous','bb-ecommerce-store' );?></span>
						    </a>
						    <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
						      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
						      <span class="screen-reader-text"><?php esc_html_e( 'Next','bb-ecommerce-store' );?></span>
						    </a>
					  	</div>  
					  	<div class="clearfix"></div>
					</section> 
				<?php }?>

				<?php do_action( 'bb_ecommerce_store_after_slider' ); ?>

				<?php if( get_theme_mod('bb_ecommerce_store_services_category') != false){ ?> 
					<section id="our-service" class="py-3 px-5">	
						<div class="row">
						    <?php 
							$bb_ecommerce_store_catData=  get_theme_mod('bb_ecommerce_store_services_category');
							if($bb_ecommerce_store_catData){
						    $page_query = new WP_Query(array( 'category_name' => esc_html($bb_ecommerce_store_catData,'bb-ecommerce-store')));?>
					     	<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
					     		<div class="col-lg-4 col-md-4">
					     			<div class="service my-2">
					          			<strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></strong>
					          			<p><?php $bb_ecommerce_store_excerpt = get_the_excerpt(); echo esc_html( bb_ecommerce_store_string_limit_words( $bb_ecommerce_store_excerpt,10 ) ); ?></p>
					          		</div>
					        	</div>
					     	<?php endwhile;
					     	wp_reset_postdata();
							}?>
						</div>
					</section>
				<?php }?>

				<?php do_action( 'bb_ecommerce_store_after_services_category' ); ?>
  
				<section id="our-products" class="my-5 p-3">
				    <div class="text-center innerlightbox">
				        <?php if( get_theme_mod('bb_ecommerce_store_sec1_title') != ''){ ?>     
				            <strong class="text-start text-uppercase"><?php echo esc_html(get_theme_mod('bb_ecommerce_store_sec1_title',__('New Products','bb-ecommerce-store'))); ?></strong>
				        <?php }?>
				    </div>
					<?php $bb_ecommerce_store_slider_pages = array();
						$mod = intval( get_theme_mod( 'bb_ecommerce_store_servicesettings' ));
						if ( 'page-none-selected' != $mod ) {
						  $bb_ecommerce_store_slider_pages[] = $mod;
						}
					if( !empty($bb_ecommerce_store_slider_pages) ) :
					  $args = array(
					    'post_type' => 'page',
					    'post__in' => $bb_ecommerce_store_slider_pages,
					    'orderby' => 'post__in'
					  );
					  $query = new WP_Query( $args );
					  if ( $query->have_posts() ) :
					   
							while ( $query->have_posts() ) : $query->the_post(); ?>
							    <div class="row box-image text-center">
							        <p><?php the_content(); ?></p>
							        <div class="clearfix"></div>
							    </div>
							<?php endwhile; ?>
					  <?php else : ?>
					      <div class="no-postfound"></div>
					  <?php endif;
					endif;
					wp_reset_postdata();?>
				    <div class="clearfix"></div> 
				</section>

				<?php do_action( 'bb_ecommerce_store_after_productsec' ); ?>

				<div class="content-bb" class="container">
					<?php while ( have_posts() ) : the_post(); ?>
				        <?php the_content(); ?>
				    <?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>