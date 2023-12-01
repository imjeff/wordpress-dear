<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<style>
    :root {
        --width: 660px;
        --font-yahei: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",Helvetica,Arial,"PingFangSC-Regular","Hiragino Sans GB","Lantinghei SC","Microsoft Yahei","Source Han Sans CN","WenQuanYi Micro Hei",SimSun,sans-serif;
        --font-fangsong: Baskerville, "Times New Roman", "Liberation Serif", STFangsong, FangSong, FangSong_GB2312, "CWTEX\-F", serif;
        --font-songti: Georgia, "Nimbus Roman No9 L", "Songti SC", "Noto Serif CJK SC", "Source Han Serif SC", "Source Han Serif CN", STSong, "AR PL New Sung", "AR PL SungtiL GB", NSimSun, SimSun, "TW\-Sung", "WenQuanYi Bitmap Song", "AR PL UMing CN", "AR PL UMing HK", "AR PL UMing TW", "AR PL UMing TW MBE", PMingLiU, MingLiU, serif;
        --font-scale: 1em;
        --background-color: #fff;
        --heading-color: #222;
        --text-color: #444;
        --link-color: #3273dc;
        --visited-color:  #8b6fcb;
        --code-background-color: #f2f2f2;
        --code-color: #222;
        --blockquote-color: #222;
    }

    @media (prefers-color-scheme: dark) {
        :root {
            --background-color: #111;
            --heading-color: #eee;
            --text-color: #ddd;
            --link-color: #6ab0e5;
            --visited-color:  #8b6fcb;
            --code-background-color: #000;
            --code-color: #ddd;
            --blockquote-color: #ccc;
        }
    }

    body {
        font-family: var(--font-yahei); /* 可替换 --font-fangsong 或 --font-songti 字体 */
        font-size: var(--font-scale);
        margin: auto;
        padding: 20px;
        max-width: var(--width);
        text-align: left;
        background-color: var(--background-color);
        word-wrap: break-word;
        overflow-wrap: break-word;
        line-height: 1.5;
        color: var(--text-color);
    }

    h1,h2,h3,h4,h5,h6{color:var(--heading-color)}
    a{color:var(--link-color);cursor:pointer;text-decoration:none}
    a:hover, a[aria-current*="page"]{text-decoration:underline}
    nav a{margin-right:8px}
    strong,b{color:var(--heading-color)}
    button{margin:0;cursor:pointer}
    main{line-height:1.6}
    table{width:100%}
    hr{border:0;border-top:1px dashed}
    img{max-width:100%;height:auto}
    code{font-family:monospace;padding:2px;background-color:var(--code-background-color);color:var(--code-color);border-radius:3px}
    blockquote{border-left:1px solid #999;color:var(--code-color);padding-left:20px;font-style:italic}
    header,footer{padding:20px 0}
    .title:hover{text-decoration:none}
    .title h1,.title h2{font-size:1.5em}
    ul.posts{list-style-type:none;padding:unset}
    ul.posts li{display:flex}
    ul.posts li span{flex:0 0 110px}
    ul.posts li a:visited{color:var(--visited-color)}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<?php $site_title_elem 	= is_front_page() || ( is_home() && get_option( 'show_on_front' ) == 'posts' ) ? 'h1' : 'h2'; ?>
<a class="title" href="<?php echo esc_url(home_url('/')); ?>"><<?php echo $site_title_elem; ?>><?php bloginfo('name'); ?></<?php echo $site_title_elem; ?>></a>
<nav>
<p>
<?php 
if ( has_nav_menu( 'primary-menu' ) ) :
$menuParameters = array('container'	=> false,'echo'	=> false,'menu_class' => 'menu','items_wrap' => '%3$s','depth'	=> 0,);
echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); 
endif;?>
</p>
</nav>
</header>
<main>