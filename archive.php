<?php
/*
Template Name: 所有文章
*/
?>
<?php get_header(); ?>
<?php if(is_archive()){ ?>
<h1 class="title"><?php the_archive_title(); ?></h1>
<span class="intro">共有 <?php echo esc_html($wp_query->found_posts); ?> 篇文章</span>
<p>
<?php if ( have_posts() ) : ?>
<ul class="posts">
<?php while ( have_posts() ) : the_post(); ?>
<li>
<span><time datetime="<?php the_time('Y年m月d日');?>"><?php the_time('Y-m-d');?></time></span>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li>
<?php endwhile; ?>
</ul>
<?php endif; ?>
</p>
<?php } else { ?>
<h1 class="title"><?php the_title();?></h1>
<p>
<?php
$previous_year = $year = 0;
$previous_month = $month = 0;
$ul_open = false;
$myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');
foreach($myposts as $post) :
setup_postdata($post);
$year = mysql2date('Y', $post->post_date);
$month = mysql2date('n', $post->post_date);
$day = mysql2date('j', $post->post_date);
if($year != $previous_year || $month != $previous_month) :
if($ul_open == true) :
echo '</ul>';
endif;
echo '<h3>'; echo the_time('Y年m月'); echo '</h3>';
echo '<ul class="posts">';
$ul_open = true;
endif;
$previous_year = $year; $previous_month = $month;
?>
<li>
<span><time datetime="<?php the_time('Y年m月d日');?>"><?php the_time('Y-m-d');?></time></span>
<div><?php if ( 'post' == get_post_type()){ the_category(', '); echo "&nbsp &middot; &nbsp"; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
</li>
<?php endforeach; ?>
</p>
<?php } ?>
<?php get_footer(); ?>