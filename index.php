<?php get_header(); ?>


    <div id="CoverPop-cover" class="splash">
        <div class="CoverPop-content splash-center">
                    
           <div id="lineUpPoster"><p>This is where the line up poster will go</p></div>
                        
            <a class="CoverPop-close-go" href="#">close this</a>
                    
        </div><!--end .splash-center -->
    </div><!--end .splash -->


 <div id="slides">
    <div class="slides-container">
   <!-- <iframe src="//player.vimeo.com/video/113833400?autoplay=1" width="110%" height="110%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
   
   <?php

// check if the repeater field has rows of data
if( have_rows('spindle', 302) ):

 	// loop through the rows of data
    while ( have_rows('spindle', 302) ) : the_row();
		
		$image = get_sub_field('spindle_image');
		
		?>
		
       <img src="<?php echo $image; ?>" alt="" />

   <?php  endwhile; ?>

<?php else : 

    // no rows found
?>
<?php endif;

?>
    </div>
    
    
  <!--    <img src="http://ff.benlongdendesign.co.uk/wp-content/uploads/2015/03/top_carousel.jpg" alt="Cinelli">
      <img src="http://ff.benlongdendesign.co.uk/wp-content/uploads/2014/05/HOMEPAGE_SPINDLE_2.jpg" width="1024" height="682" alt="Surly">
      <img src="http://ff.benlongdendesign.co.uk/wp-content/uploads/2014/05/HOMEPAGE_SPINDLE_3.jpg" width="1024" height="683" alt="Cinelli">
      <img src="http://ff.benlongdendesign.co.uk/wp-content/uploads/2014/05/HOMEPAGE_SPINDLE_5.jpg" width="1024" height="685" alt="Affinity">
   
-->
    <nav class="slides-navigation">
      <a href="#" class="next">&#59238;</a>
      <a href="#" class="prev">&#59237;</a>
    </nav>
  </div>
  
<div id="sticky-anchor-header"></div>  
 <!-- <div id="ten">
	  
	  <img src="http://ff.benlongdendesign.co.uk/wp-content/uploads/2015/02/new_10.png">
	  
  </div> -->
  


<div id="line_up_illustrations">
	<div id="nine_wrapper">
		<div class="text" id="col_left"><h1 class="big">FARMFESTIVAL STARTED AS A PARTY FOR FRIENDS AND HAS STAYED THAT WAY 10 YEARS ON.</h1><p>We're a festival that doesn't believe in hype or inflated prices.</p><p>What we do believe in is a genre-defying selection of music from emerging talents, cult heroes & local gems, inspiring arts activities, amazing chariteis and great local produce, set to a beautiful Somerset vista.</p><p>Or to put it simply: good music, good causes, good times.</p>

</div>
		
		<div class="clear"></div>
	</div>
</div>


<div id="line_up" >
	
	<div class="container-list" data-stellar-offset-parent="true" data-stellar-background-ratio="1.1" data-stellar-horizontal-offset="-2000" data-stellar-vertival-offset="5000">

	<div id="nine_wrapper"><ul class="tabs">
		<li class="tab-link current" data-tab="tab-1">All 2015</li>
		<li class="tab-link" data-tab="tab-2">LIVE ACTS</li>
		<li class="tab-link" data-tab="tab-3">DJS</li>
		<li class="tab-link" data-tab="tab-4">ENTERTAINMENT</li>
		<li class="tab-link" data-tab="tab-5">FAMILY</li>
		<li class="tab-link" data-tab="tab-6">GALLERY</li>
		<li class="tab-link" data-tab="tab-7">FILM</li>
	</ul></div>

	<div id="tab-1" class="tab-content current animated fadeIn">
		<?php get_template_part( 'line-up' ); ?>
	</div>
	<div id="tab-2" class="tab-content animated fadeIn">
		 <?php get_template_part( 'live' ); ?>
	</div>
	<div id="tab-3" class="tab-content animated fadeIn">
		<?php get_template_part( 'djs' ); ?>
	</div>
	<div id="tab-4" class="tab-content animated fadeIn">
		<?php get_template_part( 'arts' ); ?>
	</div>
		<div id="tab-5" class="tab-content animated fadeIn">
		<?php get_template_part( 'family' ); ?>
	</div>
	<div id="tab-6" class="tab-content animated fadeIn">
		<?php get_template_part( 'gallery' ); ?>
	</div>
	<div id="tab-7" class="tab-content animated fadeIn">
		<?php get_template_part( 'film' ); ?>
	</div>
</div><!-- container -->
	
</div>


<div class="demo">
        <ul id="demo" class="content-slider">
            <li>
                <h3>"There's a little bit of magic to this place"</h3>
                <p>Crack Magazine</p>
            </li>
            <li>
                 <h3>"This is awesome"</h3>
                <p>A man</p>
            </li>
            <li>
                 <h3>"no one does it like this"</h3>
                <p>Another Man</p>
            </li>
            <li>
                 <h3>"Test slide carousels to run onto two lines of copy this is how much you need to put in"</h3>
                <p>Test tets ststs</p>
            </li>
            <li>
                 <h3>"What an awesome website you have built!"</h3>
                <p>Crack Magazine</p>
            </li>
            <li>
                 <h3>"Simon smells :-P"</h3>
                <p>Crack Magazine</p>
            </li>
        </ul>
    </div>	

<div class="nineWrapper">

<div id="news">

<?php $latestPosts = new WP_Query();
$latestPosts->query('cat=5&posts_per_page=8');?>

<?php while ($latestPosts->have_posts()) : $latestPosts->the_post(); ?>

<?php 
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large'); 
?>
    
    <div style="background-image:url('<?php echo $image[0]; ?>');" <?php post_class(); ?>>
    
    <div class="text-box">
    <p><?php $excerpt = get_the_excerpt(); echo string_limit_words($excerpt,25);?></p>
    <div class="titles"><?php the_title('<h1>','</h1>'); ?></div>
    </div>
    </div>
    
<?php endwhile; ?>

<!--<div id="twitter_news"><?php echo do_shortcode( '[db_twitter_feed]' ) ?></div>-->
<div style="clear: both;"></div>

	
</div>
</div>



<!--<div class="player">
	<div id="nine_wrapper">
	<div class="post">
        <a href="https://soundcloud.com/farmfestival-djs/sets/playin-2015" class="sc-player">Playin 2015</a>
      </div></div>

</div>--->


<?php get_footer(); ?>