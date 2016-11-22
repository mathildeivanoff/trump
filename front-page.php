<?php get_header(); ?>

    <?php

$querystr = "
	 SELECT $wpdb->posts.*
	 FROM $wpdb->posts
	 WHERE $wpdb->posts.post_status = 'publish'
	 AND $wpdb->posts.post_type = 'post'
	 AND $wpdb->posts.post_date < NOW()
	 AND $wpdb->posts.comment_status = 'open'
	 ORDER BY $wpdb->posts.post_date DESC
";

$pageposts = $wpdb->get_results($querystr, OBJECT);

?>

    <div class="banner">
        <ul id="quotes">
         <?php if ($pageposts): ?>
            <?php global $post; ?>
                 <?php foreach ($pageposts as $post): ?>
                     <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                 <?php endforeach; ?>
         <?php endif; ?>
        </ul>
    </div>


    <!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>


	<div class="share-buttons">
        <div class="fb-share-button" data-href="http://127.0.0.1/projects/Trumpatations/wordpress/?p=19" data-layout="button_count" data-size="small" data-mobile-iframe="true">
            <a class="fb-xfbml-parse-ignore" target="_blank" href="">
               Facebook
            </a>
        </div>

        <a class="twitter-share-button"
          data-size="large">
             Tweeter
        </a>
    </div>

    <a class="bouton" href="/Trumptations/wordpress/?page_id=55">Ajouter votre quote!</a>
  
<?php get_footer(); ?>
