<?php get_header();?>
<?php if ( is_home() ) {
$article_id = 2; //可修改为需要显示的页面 ID
echo apply_filters('the_content', get_post($article_id)->post_content);?>
<h3>近期文章</h3>
<p>
<ul class="posts">
<?php $posts = get_posts(); foreach( $posts as $post ) :?>
<li>
<span><time datetime="<?php the_time('Y年m月d日');?>"><?php the_time('Y-m-d');?></time></span>
<div><?php the_category( ', ' );?>&nbsp · &nbsp<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><div>
</li>
<?php endforeach; ?>
</ul>
</p>
<?php } else { if (have_posts()) { while (have_posts()) { the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php if ( is_single() ) : ?><p><?php the_category( ', ' );?>&nbsp · &nbsp<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_date( get_option( 'date_format' ) ); ?></time></p><?php endif; ?>
<p><?php the_content(); ?></p>
<p><?php wp_link_pages(); ?></p>
<?php if ( is_single() && get_the_tags() ) : ?><p class="tags"><?php the_tags( ' #', ' #', '' ); ?></p><?php endif; ?>
<?php }}} ?>
<?php get_footer();?>