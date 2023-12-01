<?php get_header();?>
<?php if ( is_home() ) {
$article_id = 2; //可修改为需要显示的页面 ID
echo apply_filters('the_content', get_post($article_id)->post_content);?>
<h3>近期文章</h3>
<p>
<ul class="posts">
<?php $posts = get_posts('numberposts=10'); foreach( $posts as $post ) :?>
<li>
<span><i><time datetime="<?php the_time('Y年m月d日');?>"><?php the_time('Y-m-d');?></time></i></span>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
</p>
<?php } else { if (have_posts()) { while (have_posts()) { the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php if ( is_single() ) : ?><p><?php the_category( ', ' );?> · <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_date( get_option( 'date_format' ) ); ?></time></p><?php endif; ?>
<div><?php the_content(); ?></div>
<p><?php wp_link_pages(); ?></p>
<?php if ( is_single() && get_the_tags() ) : ?><p><?php the_tags( ' #', ' #', ' ' ); ?></p><?php endif; ?>
<?php }}} ?>
<?php get_footer();?>