<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title><?php
  if (is_front_page()) {
    echo get_bloginfo('name');
    if (get_bloginfo('description')!="") { echo " | ".get_bloginfo('description'); }
  } else {
    wp_title ( ' | ', true,'right' );
    echo get_bloginfo('name');
} ?></title>

<?php
  wp_head();
  if(is_home() || get_post_type() == "post") {
    $postID = get_option( 'page_for_posts' );
    $header_type = "div";
  } else {
    $postID = $post->ID;
    $header_type = "h1";
  }
  $background_color = get_field("background_color",$postID);
?>
</head>
<body class="post_<?=$post->post_name?><?php if($background_color != "") { echo " bg_".$background_color; } else { echo " bg_blue"; }?>">
<header class="header">
  <div class="header_inner">
    <<?=$header_type?> class="header_logo"><a href="<?php echo get_home_url(); ?>"><span><?=get_bloginfo('name');?></span>
  <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 134.01 31.91"><path class="logo_re" d="M3.76,28.15V12.44C3.76,11,3,10.56.05,10.56V9.25L7,9v5.64h.09c1.08-2.73,2.78-5.93,6.16-5.93,1.88,0,3.62,1.13,3.62,3.25a2.11,2.11,0,0,1-2.16,2.3,2,2,0,0,1-2.16-2.11,2,2,0,0,1,1.13-1.89.9.9,0,0,0-.71-.23c-1.22,0-4.09,1.41-5.31,6.82A54.45,54.45,0,0,0,7,27.21C7,29.56,7.71,30,11.19,30v1.32H0V30c3,0,3.76-.47,3.76-1.88Zm18.06-8.37v1.36c0,5.27,2.54,9.45,7.19,9.45,4.09,0,5.69-1.88,7.48-4.51l1.13.75c-2.83,4.14-5,5.08-9,5.08-6.45,0-10.4-5.74-10.4-11.61,0-6.87,3.81-11.62,10.21-11.62,5.83,0,9.17,5.55,9.17,11.1Zm0-1.32H34c0-3.85-1.17-8.46-6-8.46-4.32,0-6.25,4.37-6.25,8.46Z"/><path class="logo_think" d="M42.94,9.14V1h5.57V9.14h3.31v4.8H48.51V31.35H42.94V13.94H40.08V9.14ZM54.82,31.35h5.53V22.43a25.79,25.79,0,0,1,.24-4.57,6,6,0,0,1,1.69-3.06,4.14,4.14,0,0,1,2.91-1.13,3.51,3.51,0,0,1,2.19.68,3.63,3.63,0,0,1,1.25,2A23.6,23.6,0,0,1,69,21.61v9.74h5.49V16.67a8,8,0,0,0-1.94-5.81A7.51,7.51,0,0,0,67,8.57a8.51,8.51,0,0,0-3.35.71,12.7,12.7,0,0,0-3.28,2.11V.57H54.82V31.35ZM78.5,1a3.42,3.42,0,0,0-1,2.51,3.57,3.57,0,0,0,1,2.6,3.49,3.49,0,0,0,5,0,3.48,3.48,0,0,0,1-2.54,3.53,3.53,0,0,0-1-2.57A3.39,3.39,0,0,0,81,0,3.44,3.44,0,0,0,78.5,1Zm-.28,30.31h5.57V9.14H78.22V31.35Zm10.22,0H94V22.44a25.81,25.81,0,0,1,.24-4.51,6,6,0,0,1,1.68-3.12,4.1,4.1,0,0,1,2.9-1.14,3.45,3.45,0,0,1,2.19.69,3.54,3.54,0,0,1,1.24,2,24.36,24.36,0,0,1,.36,5.28v9.73h5.51V16.67c0-2.55-.64-4.49-1.93-5.79a7.64,7.64,0,0,0-5.61-2.31,8.27,8.27,0,0,0-3.15.63A13.08,13.08,0,0,0,94,11.42V9.14H88.44V31.35Zm23.66,0h5.57V21.11l9.43,10.24H134L123.3,19.78l9.57-10.64h-7l-8.2,9.16V.57H112.1V31.35Z"/></svg>
    </a></<?=$header_type?>>
    <button class="menu_toggle"><i></i>Menu</button>
    <nav class="main_nav">
      <?php wp_nav_menu( array('theme_location' => 'primary-menu') ); ?>
    </nav>
  </div>
</header>
