<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="wrapper">

			<div class="header">
<link rel="stylesheet" href="//brick.a.ssl.fastly.net/Linux+Libertine:400,400i,700,700i/Open+Sans:400,400i,700,700i,800,800i">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
                <p class="toggle-menu" onclick="document.querySelector('body').classList.toggle('show-menu')"><?php _e( 'Menu', 'davis' ); ?></p>

				<?php if ( has_nav_menu( 'primary-menu' ) ) wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>

				<img class="size-full wp-image-4826 aligncenter" src="http://adamcroom.com/wp-content/uploads/2016/11/croomvinyl.png" alt="croomvinyl" width="600" height="230" />

								<p><?php bloginfo( 'description' ); ?></p>

				<div class="custom-links">


															<a class="icon-twitter" href="https://twitter.com/acroom">
																<i class="fa fa-twitter"></i>
															</a>
															&nbsp;&nbsp;·&nbsp;&nbsp;



															<a class="icon-instagram" href="https://instagram.com/adamc/">
																<i class="fa fa-instagram"></i>
															</a>
															&nbsp;&nbsp;·&nbsp;&nbsp;



															<a class="icon-github" href="https://github.com/adamcroom">
																<i class="fa fa-github"></i>
															</a>
															&nbsp;&nbsp;·&nbsp;&nbsp;



															<a class="icon-rss" href="http://adamcroom.com/feed">
																<i class="fa fa-rss"></i>
															</a>
															&nbsp;&nbsp;·&nbsp;&nbsp;



															<a class="icon-flickr" href="https://www.flickr.com/photos/acroom/">
																<i class="fa fa-flickr"></i>
															</a>
															&nbsp;&nbsp;·&nbsp;&nbsp;

															<a class="icon-youtube" href="https://www.youtube.com/channel/UCOyP194ZgeRb9JJoLNS1Wvw">
																<i class="fa fa-youtube"></i>
															</a>

											</div>

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900" rel="stylesheet">

			</div>

			<!-- header -->


            <?php if ( have_posts() ) :

                while ( have_posts() ) : the_post(); ?>

                    <div <?php post_class( 'card'); ?>>

                        <?php if ( ! get_post_format() == 'aside' ) : ?>

                            <h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

                        <?php endif; ?>


                        <div class="content">

                            <?php the_excerpt(); ?>

                        </div> <!-- .content -->

                        <?php if ( is_singular() ) wp_link_pages(); ?>

                        <?php if ( get_post_type() == 'post' ) : ?>

                            <div class="meta">

															<span class="comment-link">
																<i class="fa fa-comment-o"></i>

																<?php
																	comments_popup_link( __( '0 Comment', 'read' ), __( '1 Comment', 'read' ), __( '% Comments', 'read' ) );
																?>
															</span>

															<span class="entry-date">
																<i class="fa fa-clock-o"></i>

																<a href="<?php the_permalink(); ?>" rel="bookmark">
																	<time class="entry-date" datetime="2012-02-13T04:34:10+00:00"><?php echo get_the_date(); ?></time>
																</a>
															</span>

															<span class="category-link">
																<i class="fa fa-tags"></i>

																<?php the_category(', ') ?>
															</span>

                                <?php if ( is_sticky() ) : ?>

                                    <span class="sep"></span><?php _e( 'Sticky', 'davis' ); ?>

                                <?php endif ?>

                                </p>

                                <?php if ( is_singular( 'post' ) ) : ?>

                                    <p><?php _e( 'In', 'davis' ); ?> <?php the_category( ', ' ); ?></p>
                                    <p><?php the_tags( ' #', ' #', ' ' ); ?></p>

                                <?php endif; ?>

                            </div> <!-- .meta -->

                        <?php endif; ?>

                        <?php if ( is_singular() ) comments_template(); ?>

                    </div> <!-- .post -->

                    <?php

                endwhile;

            else : ?>

                <div class="postcard">

                    <p><?php _e( 'Sorry, the page you requested cannot be found.', 'davis' ); ?></p>

                </div> <!-- .post -->

            <?php endif; ?>


<fieldset>
	<legend>Search adamcroom.com</legend>
																			<form role="search" method="get" id="searchform"
																					class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
																					<div>
																							<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
																							<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
																							<input type="submit" id="searchsubmit"
																									value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
																					</div>
																			</form>
																		</fieldset>

	        <?php if ( ( ! is_singular() ) && ( $wp_query->post_count >= get_option( 'posts_per_page' ) ) ) : ?>

		        <div class="pagination">


					<?php previous_posts_link( '&larr; ' . __( 'Newer posts', 'davis' ) ); ?>
					<?php next_posts_link( __( 'Older posts', 'davis') . ' &rarr;' ); ?>

		        </div> <!-- .pagination -->

	        <?php endif; ?>

	        <div class="footer">


		        <p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php bloginfo( 'home_url' ); ?>"><?php bloginfo( 'name' ); ?></a></p>
		        <p><?php _e( 'Theme by', 'davis' ); ?> <a href="http://www.andersnoren.se">Anders Nor&eacute;n</a></p>

	        </div> <!-- .footer -->

	    </div> <!-- .wrapper -->

	    <?php wp_footer(); ?>

	</body>
</html>