<?php
/**
 * The Template for displaying all single posts.
 *
 * @package LiveTo110 Theme
 */

get_header(); ?>

<div id="content" class="site-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'content', 'single' ); ?>

							<?php liveto110_post_nav(); ?>

							<div id="author-info">
                                <div class="clearfix">
								    <div id="author-image">
									    <a href="<?php the_author_meta('user_url'); ?>" class="thumbnail">
										    <?php echo get_avatar( get_the_author_meta('user_email'), '130', '' ); ?>
									    </a>
								    </div><!-- /.author-image -->
								    
								    <div id="author-bio">
									    <h4 class="author-name"><?php the_author_link(); ?></h4><!-- /.author-name -->

									    <p><?php the_author_meta('description'); ?></p>
								    </div><!-- /.author-bio -->
                                    
                                    <div class="author-social-links">
                                        <ul>
                                            <?php if( '' != get_the_author_meta('facebook_profile')) { ?>
                                                <li><a href="<?php the_author_meta('facebook_profile'); ?>"><i class="fa fa-facebook fa-2x fa-fw"></i></a></li>
                                            <?php } ?>
                                            <?php if( '' != get_the_author_meta('twitter_profile')) { ?>
                                                <li><a href="<?php the_author_meta('twitter_profile'); ?>"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
                                            <?php } ?>
                                            <?php if( '' != get_the_author_meta('pinterest_profile')) { ?>
                                                <li><a href="<?php the_author_meta('pinterest_profile'); ?>"><i class="fa fa-pinterest fa-2x fa-fw"></i></a></li>
                                            <?php } ?>
                                            <?php if( '' != get_the_author_meta('youtube_profile')) { ?>
                                                <li><a href="<?php the_author_meta('youtube_profile'); ?>"><i class="fa fa-youtube fa-2x fa-fw"></i></a></li>
                                            <?php } ?>
                                            <?php if( '' != get_the_author_meta('google_profile')) { ?>
                                                <li><a href="<?php the_author_meta('google_profile'); ?>"><i class="fa fa-google-plus fa-2x fa-fw"></i></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div><!-- /.author-social-links -->
                                </div>
							</div><!--Author Info-->

							<section class="suggested-reading-wrapper">
								<?php if ( function_exists( 'echo_ald_crp' ) ) echo_ald_crp(); ?>
							</section><!-- /.suggested-reading-wrapper -->

							<div class="fb-comments-wrapper">
								<?php echo do_shortcode('[fbcomments]'); ?>
							</div><!-- /.fb-comments-wrapper -->

							<?php
								// If comments are open or we have at least one comment, load up the comment template
								if ( comments_open() || '0' != get_comments_number() ) :
									comments_template();
								endif;
							?>

						<?php endwhile; // end of the loop. ?>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			
			<div class="hidden-phone col-sm-4">
				<?php get_sidebar(); ?>
			</div><!-- /.hidden-phone .col-sm-4 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /#content -->

<?php get_footer(); ?>