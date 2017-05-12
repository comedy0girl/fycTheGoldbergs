<?php /*Template Name: Single Pages*/ ?>

<?php get_header(); ?>
	<div class="row twelve columns bio-page" >
        <?php global $post; ?>
                    <?php
                    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
                    ?>
                    <div class="row twelve columns bannerImage" style="background: url(<?php echo $src[0]; ?> ); background-position:top center; height: 400px; 
                    -webkit-background-size: cover;
                    -moz-background-size: cover; -o-background-size: cover; background-size: cover;">     
                    </div>

        <div class="content-page">
            	
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>

        <div class="row socialShare">
            <div class="shareText">
                <p>Help share The Goldbergs Love </p><?php echo wpfai_social(); ?>
            </div>
        </div>

        <div class="twitterHashtags">
        <!-- Place <div> tag where you want the feed to appear -->
<div id="curator-feed"><a href="http://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>

          
        </div>

        <div class="twelve columns hashtag">
            <p>Vote Like It's<br>
            1980-Something</p>
        </div>

	</div><!-- content post -->
<?php get_footer(); ?>