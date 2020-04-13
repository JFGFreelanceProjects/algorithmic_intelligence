<?php
    header('Content-type: text/css');
    $parse_uri = explode('wp-content', $_SERVER[ 'SCRIPT_FILENAME' ]);
    $wp_load = $parse_uri[ 0 ] . 'wp-load.php';
    require_once($wp_load);

    // color options
    $accent_color = sixtyninestudio_option('accent-color', false, '#ff2a40');
    $section_title = sixtyninestudio_option('section-title-color', false, '#202020');
    $link_color = sixtyninestudio_option('link-color', false, '#ff2a40');

    // background color options
    $body_bg_color = sixtyninestudio_option('body-bg-color', false, '#ffffff');
    
    // accent color darken
    $accent_darken = sixtyninestudio_modify_color( $accent_color, -50 );
    $link_darken = sixtyninestudio_modify_color( $link_color, -50 );

    // body typography
    $font_color = sixtyninestudio_option('body-typography', 'color');
    $font_size = sixtyninestudio_option('body-typography', 'font-size');
    $font_family = sixtyninestudio_option('body-typography', 'font-family');
    $font_weight = sixtyninestudio_option('body-typography', 'font-weight');
    $line_height = sixtyninestudio_option('body-typography', 'line-height');

    // heading typography
    $heading_color = sixtyninestudio_option('heading-typography', 'color');
    $heading_font_family = sixtyninestudio_option('heading-typography', 'font-family');
    $heading_font_weight = sixtyninestudio_option('heading-typography', 'font-weight');

    // menu typography
    $menu_font_size = sixtyninestudio_option('menu-typography', 'font-size');
    $menu_font_family = sixtyninestudio_option('menu-typography', 'font-family');
    $menu_font_weight = sixtyninestudio_option('menu-typography', 'font-weight');
    $menu_line_height = sixtyninestudio_option('menu-typography', 'line-height');

    // specific title size and it's line height
    // for H1
    $h1_font_size = sixtyninestudio_option('h1-typography', 'font-size');
    $h1_line_height = sixtyninestudio_option('h1-typography', 'line-height');

    // for H2
    $h2_font_size = sixtyninestudio_option('h2-typography', 'font-size');
    $h2_line_height = sixtyninestudio_option('h2-typography', 'line-height');

    // for H3
    $h3_font_size = sixtyninestudio_option('h3-typography', 'font-size');
    $h3_line_height = sixtyninestudio_option('h3-typography', 'line-height');

    // for H4
    $h4_font_size = sixtyninestudio_option('h4-typography', 'font-size');
    $h4_line_height = sixtyninestudio_option('h4-typography', 'line-height'); 

    // for H5
    $h5_font_size = sixtyninestudio_option('h5-typography', 'font-size');
    $h5_line_height = sixtyninestudio_option('h5-typography', 'line-height');

    // for H6
    $h6_font_size = sixtyninestudio_option('h6-typography', 'font-size');
    $h6_line_height = sixtyninestudio_option('h6-typography', 'line-height');

    // default menu color
    $default_font_color = sixtyninestudio_option('menu-color', false, false);
    if ($default_font_color) :
        $default_font_color = 'color:' .$default_font_color. '';
    endif;

    // mobile menu color
    $mobile_menu_font_color = sixtyninestudio_option('mobile-menu-color', false, false);
    if ($mobile_menu_font_color) :
        $mobile_menu_font_color = 'color:' .$mobile_menu_font_color. '';
    endif;

    // sticky menu color
    $sticky_font_color = sixtyninestudio_option('sticky-menu-color', false, false);
    if ($sticky_font_color) :
        $sticky_font_color = 'color:' .$sticky_font_color. '';
    endif;

    // menu background
    $menu_bg_color = sixtyninestudio_option('menu-bg-color', false, false);
    if ($menu_bg_color) :
        $menu_bg_color = 'background-color:' .$menu_bg_color. '';
    endif;

    // mobile menu background
    $mobile_menu_bg_color = sixtyninestudio_option('mobile-menu-bg-color', false, false);
    if ($mobile_menu_bg_color) :
        $mobile_menu_bg_color = 'background-color:' .$mobile_menu_bg_color. '';
    endif;

    // sticky menu background
    $sticky_menu_bg_color = sixtyninestudio_option('sticky-menu-bg-color', false, false);
    if ($sticky_menu_bg_color) :
        $sticky_menu_bg_color = 'background-color:' .$sticky_menu_bg_color. '';
    endif;
?>

body{
    background-color: <?php echo esc_attr($body_bg_color) ?>;
    color: <?php echo esc_attr($font_color) ?>;
    font-size: <?php echo esc_attr($font_size) ?>;
    font-family: <?php echo esc_attr($font_family) ?>, sans-serif;
    font-weight: <?php echo esc_attr($font_weight) ?>;
    line-height: <?php echo esc_attr($line_height) ?>;
}

h1, 
h2, 
h3, 
h4, 
h5, 
h6{
    color: <?php echo esc_attr($heading_color) ?>;
    font-family: <?php echo esc_attr($heading_font_family) ?>, sans-serif;
    font-weight: <?php echo esc_attr($heading_font_weight) ?>;
}
h1{
    font-size: <?php echo esc_attr($h1_font_size) ?>;
    line-height: <?php echo esc_attr($h1_line_height) ?>;
}
h2{
    font-size: <?php echo esc_attr($h2_font_size) ?>;
    line-height: <?php echo esc_attr($h2_line_height) ?>;
}
h3{
    font-size: <?php echo esc_attr($h3_font_size) ?>;
    line-height: <?php echo esc_attr($h3_line_height) ?>;
}
h4{
    font-size: <?php echo esc_attr($h4_font_size) ?>;
    line-height: <?php echo esc_attr($h4_line_height) ?>;
}
h5{
    font-size: <?php echo esc_attr($h5_font_size) ?>;
    line-height: <?php echo esc_attr($h5_line_height) ?>;
}
h6{
    font-size: <?php echo esc_attr($h6_font_size) ?>;
    line-height: <?php echo esc_attr($h6_line_height) ?>;
}

.vc_tta.vc_general.vc_tta-style-tab-default .vc_tta-title-text,
.vc_tta.vc_general.vc_tta-style-tab-border-top .vc_tta-tab>a,
.nav-tabs>li>a,
.basecamp-testimonial blockquote footer,
.counter-section{
    font-family: <?php echo esc_attr($heading_font_family) ?>;
}

.header-transparent .navbar-default,
.navbar-default {
    <?php echo esc_attr($menu_bg_color) ?>;
}

.header-transparent .sticky-wrapper.is-sticky .navbar-default,
.sticky-wrapper.is-sticky .navbar-default {
    <?php echo esc_attr($sticky_menu_bg_color) ?>;
}

.header-transparent .navbar-default .navbar-nav>li>a,
.navbar-default .navbar-nav>li>a{
    <?php echo esc_attr($default_font_color) ?>;
}

.navbar-default .navbar-nav>li>a{
    font-size: <?php echo esc_attr($menu_font_size) ?>;
    font-family: <?php echo esc_attr($menu_font_family) ?>;
    font-weight: <?php echo esc_attr($menu_font_weight) ?>;
    line-height: <?php echo esc_attr($menu_line_height) ?>;
}

.sticky-wrapper.is-sticky .navbar-default .navbar-nav>li>a{
    <?php echo esc_attr($sticky_font_color) ?>;
}


<?php 
/**
* Color preset
*
* Color
*/
?>
a,
a:focus{
    color: <?php echo esc_attr($link_color) ?>;
}


<?php 
/**
* Color preset
*
* Color darken
*/
?>

a:hover,
.entry-header h2 a:hover{
    color: <?php echo esc_attr($link_darken) ?>;
}

.entry-header h2 a:hover {
    color: <?php echo esc_attr($link_darken) ?> !important;
}

.project-link:hover,
.member-info .social-link li a:hover,
.btn.submit-btn:hover,
.backToTop i:hover{
    background-color: <?php echo esc_attr($link_darken) ?>;
}

.btn.submit-btn:hover{
    border-color: <?php echo esc_attr($link_darken) ?>;
}


<?php 
/**
*
* Section title color
*/
?>
.section-intro h2{
    color: <?php echo esc_attr($section_title) ?>;
}



<?php 
/**
*
* Background color
*/
?>

.theme-bg,
.vc_general.vc_btn3.vc_btn3-color-theme_primary_color:hover,
.vc_general.vc_btn3.vc_btn3-color-theme_primary_color:focus,
.btn-primary:hover,
.btn-primary:focus,
.vc_general.vc_btn3.vc_btn3-color-theme_default_color:hover,
.vc_general.vc_btn3.vc_btn3-color-theme_default_color:focus,
.btn-default:hover,
.btn-default:focus,
.sction-title-wrapper .separator,
.navbar-default .navbar-toggle:focus, 
.navbar-default .navbar-toggle:hover,
.tt-home-slider .slides-navigation a:hover,
.vc_tta-style-tab-default .vc_tta-tab.vc_active::before,
.vc_tta.vc_general.vc_tta-style-tab-border-top .vc_active a::before,
.vc_tta-style-tab-border-top .vc_tta-tab.vc_active::before,
.project-link,
.tt-filter-wrap.default-color ul li button.active,
.portfolio.hover-seven .portfolio-link ul li a:hover,
.portfolio.hover-eight .portfolio-link ul li a:hover,
.icon-block:hover .tt-icon.icon-hover-default i,
.icon-block-wrapper.block-style-border.hover-theme-color .icon-block-grid:hover,
.member-info,
.team-intro,
.process-box,
.btn.submit-btn,
.work-showcase .carousel-control:focus, 
.work-showcase .carousel-control:hover,
.work-showcase .carousel-indicators .active,
.entry-content .more-link:hover,
.entry-footer a:hover,
.post.format-link .blog-link a:hover,
.blog-carousel .carousel-control:focus, 
.blog-carousel .carousel-control:hover,
.pagination>li>a:hover, 
.pagination>li>span:hover, 
.pagination>li>a:focus, 
.pagination>li>span:focus,
.pagination .current,
.pagination>.active>a,
.pagination>.active>span,
.pagination>.active>a:hover,
.pagination>.active>span:hover,
.pagination>.active>a:focus,
.pagination>.active>span:focus,
.page-pagination a:hover,
.page-pagination > span,
.widget_tag_cloud a:hover,
.tt-content-wrapper:hover,
.basecamp-testimonial,
.error-message a:hover,
.backToTop i,
.vc_tta-panel.vc_active .vc_tta-panel-heading,
.single-member-page .member-content .team-social a i:hover,
.blog-navigation a:hover,
#toTop:hover,
.widget_mc4wp_form_widget,
.widget.woocommerce #respond input#submit:hover, 
.widget.woocommerce a.button:hover, 
.widget.woocommerce button.button:hover, 
.widget.woocommerce input.button:hover,
.woocommerce a.button:hover,
.woocommerce a.button:focus,
.woocommerce a.button:active,
.woocommerce button.button.alt:hover,
.woocommerce button.button.alt:focus,
.woocommerce button.button.alt:active,
.woocommerce input.button:hover,
.woocommerce input.button:focus,
.woocommerce input.button:active,
.woocommerce input.button.alt:hover,
.woocommerce input.button.alt:focus,
.woocommerce input.button.alt:active,
.woocommerce #respond input#submit.alt:hover, 
.woocommerce a.button.alt:hover,
.woocommerce #respond input#submit:hover,
.woocommerce #respond input#submit:focus,
.woocommerce #respond input#submit:active,
.woocommerce .product .entry-summary a.single_add_to_cart_button:hover,
.woocommerce .product .entry-summary a.single_add_to_cart_button:focus,
.woocommerce .product .entry-summary a.single_add_to_cart_button:active,
.woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active > a,
#add_payment_method .wc-proceed-to-checkout a.checkout-button, 
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button, 
.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
#add_payment_method .wc-proceed-to-checkout a.checkout-button:hover, 
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, 
.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover,
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle{
    background-color: <?php echo esc_attr($accent_color) ?>;
}


<?php 
/**
*
* Color
*/
?>

.theme-color,
.btn-outline:hover,
.btn-outline:focus,
.learnmore-btn:focus,
.learnmore-btn:hover,
.check-circle-list li:hover i,
.header-top-wrapper .contact-info ul li a:hover,
.header-transparent .sticky-wrapper.is-sticky .navbar-nav>li>a:focus,
.header-transparent .sticky-wrapper.is-sticky .navbar-nav>li>a:hover,
.navbar-default .navbar-nav li a:focus,
.navbar-default .navbar-nav li a:hover,
.header-transparent .sticky-wrapper.is-sticky .navbar-nav>.active>a,
.header-transparent .sticky-wrapper.is-sticky .navbar-nav>.active>a:focus,
.header-transparent .sticky-wrapper.is-sticky .navbar-nav>.active>a:hover,
.header-transparent .navbar-default .navbar-nav>.active>a,
.header-transparent .navbar-default .navbar-nav>.active>a:focus,
.header-transparent .navbar-default .navbar-nav>.active>a:hover,
.navbar-default .navbar-nav>.active>a, 
.navbar-default .navbar-nav>.active>a:focus, 
.navbar-default .navbar-nav>.active>a:hover,
.navbar-default .navbar-nav>.open>a, 
.navbar-default .navbar-nav>.open>a:focus, 
.navbar-default .navbar-nav>.open>a:hover,
.dropdown-menu>.active>a, 
.dropdown-menu>.active>a:focus, 
.dropdown-menu>.active>a:hover,
.navbar-default .navbar-nav li.current-menu-ancestor.has-mega-menu-child>a:hover,
.navbar-default .navbar-nav li.current-menu-parent.has-mega-menu-child>a:hover,
.dropdown-menu>li>a:focus, 
.dropdown-menu>li>a:hover,
.dropdown-menu-trigger.menu-collapsed,
.search-icon.active:after,
.hero-block-caption .btn:hover,
.slider-caption .btn:hover,
.intro .btn:hover,
.intro-block a.learn-more,
.vc_tta.vc_general.vc_tta-style-tab-default .vc_active .vc_tta-icon,
ul.project-meta li a:hover,
.portfolio-link .btn,
.portfolio-link .btn:hover,
.portfolio-link .btn:focus,
.portfolio.hover-six .portfolio-link a:hover,
.portfolio.hover-seven .portfolio-link ul li a,
.portfolio.hover-eight .portfolio-link ul li a,
.portfolio-container .info span a:hover,
.portfolio-container .zilla-likes.active::before,
.portfolio.hover-four .project-meta li a:hover,
.portfolio.hover-four .zilla-likes:hover::before,
.portfolio-container .portfolio.hover-seven .zilla-likes.active,
.portfolio-container .info-wrapper .zilla-likes.active::before,
.portfolio-nav a:hover,
.portfolio-meta li a:hover,
.control-two:hover .carousel-control:hover,
.icon-block.icon-default:hover .tt-icon i,
.icon-block .tt-icon a.theme-color, 
.icon-block h3.theme-color,
.icon-block h3 a.theme-color,
.member-info .social-link li a,
.team-intro .btn:hover,
.entry-header .entry-meta li a:hover,
.tt-sidebar-wrapper .widget-title,
.tt-popular-post .tab-content h4 a:hover,
.widget_recent_entries ul li  a:hover,
.widget_recent_comments ul li a:hover,
.widget_archive ul li a:hover,
.widget_pages ul li a:hover,
.widget_nav_menu ul li a:hover,
.widget .entry-meta ul li a:hover,
.nav-tabs>li.active>a,
.nav-tabs>li.active>a:focus,
.nav-tabs>li.active>a:hover,
.nav-tabs>li>a:hover,
.nav-tabs>li>a:focus,
.tt-popular-post h4 a:hover,
.author-info-wrapper .author-social-links li a i:hover,
.tt-recent-comments .comment-content .comment-title a:hover,
.widget_mc4wp_form_widget .btn:hover,
.widget_mc4wp_form_widget .btn:focus,
.widget_categories ul li a:hover, 
.widget_meta ul li a:hover,
.widget_calendar #today,
.blog-grid .featured-wrapper .post-meta li a:hover,
.authors-post a:hover,
.author-social ul li a:hover,
.client-slider-v1 .carousel-control:hover i,
.client-slider-v1 .carousel-control:focus i,
.client-slider-v2 .testimonial-content .author span,
.client-slider-v2 .carousel-control:focus, 
.client-slider-v2 .carousel-control:hover,
.tt-visible-content i,
.tt-visible-content h2,
.error-message h2,
.footer-logo p span,
.social-icon ul li a i:hover,
.footer-multi-wrapper .social-links-wrap li a:hover,
.footer-sidebar .widget-title,
.footer-sidebar ul li i,
.footer-sidebar .widget_nav_menu ul li a::before,
.tt-latest-post .media-body h4 a:hover,
#toTop,
.widget_mc4wp_form_widget .btn,
.shop-category-wrapper h2 i,
.shop-category-wrapper ul li a:hover,
.woocommerce ul.products li.product h2.woocommerce-loop-product__title:hover,
.woocommerce .star-rating span,
.woocommerce .woocommerce-review-link:hover,
.woocommerce ul li.product a.button:hover,
.woocommerce ul li.product a.added_to_cart:hover,
.woocommerce ul.cart_list li a:hover, 
.woocommerce ul.product_list_widget li a:hover,
.entry-summary .yith-wcwl-add-to-wishlist .add_to_wishlist:hover::before,
.entry-summary .yith-wcwl-add-to-wishlist a:hover,
.woocommerce .entry-summary a.compare:hover,
.woocommerce .entry-summary a.compare:hover:before,
.product_meta span a:hover,
.woocommerce .quantity .btn-quantity:hover,
.woocommerce p.stars a,
.woocommerce .woocommerce-MyAccount-navigation ul li a:hover,
.woocommerce .woocommerce-MyAccount-navigation ul li.is-active a{
    color: <?php echo esc_attr($accent_color) ?>;
}


.navbar-default .navbar-nav li.current-menu-ancestor>a,
.navbar-default .navbar-nav li.current-menu-parent>a,
.navbar-default .navbar-nav li.current-menu-item>a,
.icon-block:hover .tt-icon.icon-hover-white i,
.counter-section.style-two .counter-wrap.selected,
.counter-section.style-two .counter-wrap.selected strong,
.counter-section.style-two .counter-wrap.selected strong span,
.counter-section.style-two .counter-wrap.selected span.count-description,
.counter-section.style-two .counter-wrap.selected i,
.vc_tta-color-theme_default_color.vc_tta-style-outline .vc_tta-panel.vc_active .vc_tta-panel-title>a{
     color: <?php echo esc_attr($accent_color) ?> !important;
}


<?php 
/**
*
* Border color
*/
?>

.vc_general.vc_btn3.vc_btn3-color-theme_primary_color:hover,
.vc_general.vc_btn3.vc_btn3-color-theme_primary_color:focus,
.btn-primary:hover,
.btn-primary:focus,
.vc_general.vc_btn3.vc_btn3-color-theme_default_color:hover,
.vc_general.vc_btn3.vc_btn3-color-theme_default_color:focus,
.btn-default:hover,
.btn-default:focus,
.form-control:focus,
.dropdown-menu-trigger.menu-collapsed,
.navbar-default .navbar-toggle:focus, 
.navbar-default .navbar-toggle:hover,
.portfolio.hover-seven .portfolio-link ul li a,
.portfolio.hover-eight .portfolio-link ul li a,
.icon-block.icon-square .tt-icon i.theme-color,
.icon-block.icon-round .tt-icon i.theme-color,
.icon-block.icon-circle .tt-icon i.theme-color,
.icon-block.icon-square:hover .tt-icon.icon-hover-default i.theme-color,
.icon-block.icon-round:hover .tt-icon.icon-hover-default i.theme-color,
.icon-block.icon-circle:hover .tt-icon.icon-hover-default i.theme-color,
.icon-block.icon-square:hover .tt-icon.icon-hover-default i.theme-color,
.icon-block.icon-round:hover .tt-icon.icon-hover-default i.theme-color,
.icon-block.icon-circle:hover .tt-icon.icon-hover-default i.theme-color,
.btn.submit-btn,
.pagination .current,
.pagination>.active>a,
.pagination>.active>span,
.pagination>.active>a:hover,
.pagination>.active>span:hover,
.pagination>.active>a:focus,
.pagination>.active>span:focus,
.author-info-wrapper .author-social-links li a i:hover,
.widget_mc4wp_form_widget,
.widget select:focus,
.client-slider-v1 .carousel-control:hover i,
.client-slider-v1 .carousel-control:focus i,
.client-slider-v2 .carousel-control:focus, 
.client-slider-v2 .carousel-control:hover,
.social-icon ul li a i:hover,
.vc_tta.vc_general.vc_tta-color-theme_default_color.vc_tta-style-outline .vc_tta-panel.vc_active .vc_tta-panel-heading,
.single-member-page .member-content .team-social a i:hover,
.blog-navigation a:hover,
#toTop,
.widget.woocommerce #respond input#submit:hover, 
.widget.woocommerce a.button:hover, 
.widget.woocommerce button.button:hover, 
.widget.woocommerce input.button:hover,
.woocommerce a.button:hover,
.woocommerce a.button:focus,
.woocommerce a.button:active,
.woocommerce button.button.alt:hover,
.woocommerce button.button.alt:focus,
.woocommerce button.button.alt:active,
.woocommerce input.button:hover,
.woocommerce input.button:focus,
.woocommerce input.button:active,
.woocommerce input.button.alt:hover,
.woocommerce input.button.alt:focus,
.woocommerce input.button.alt:active,
.woocommerce #respond input#submit.alt:hover, 
.woocommerce a.button.alt:hover,
.woocommerce #respond input#submit:hover,
.woocommerce #respond input#submit:focus,
.woocommerce #respond input#submit:active,
.woocommerce .product .entry-summary a.single_add_to_cart_button:hover,
.woocommerce .product .entry-summary a.single_add_to_cart_button:focus,
.woocommerce .product .entry-summary a.single_add_to_cart_button:active,
.woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce #review_form #respond textarea:hover,
.woocommerce #reviews input:hover,
.woocommerce #reviews textarea:hover,
.woocommerce #review_form #respond textarea:focus,
.woocommerce #reviews input:focus,
.woocommerce #reviews textarea:focus,
.woocommerce .select2-choice:focus,
.woocommerce .input-text:focus{
    border-color: <?php echo esc_attr($accent_color) ?>;
}

.project-overview blockquote{
    border-left-color: <?php echo esc_attr($accent_color) ?>;
}

.portfolio.hover-seven .portfolio-link ul li a:hover,
.portfolio-container .portfolio-link .zilla-likes{
    border-color: <?php echo esc_attr($accent_color) ?> !important;
}


<?php 
/**
*
* hex2rgb and darken
*/
?>

.tt-overlay-theme-color{
    background-color: rgba(<?php echo sixtyninestudio_hex2rgb($accent_color)?>,.9);
}
.portfolio.hover-three .tt-overlay-theme-color{
    background-color: rgba(<?php echo sixtyninestudio_hex2rgb($accent_color)?>,.7);
}
.portfolio.hover-six .tt-overlay-theme-color{
    background-color: rgba(<?php echo sixtyninestudio_hex2rgb($accent_color)?>,.8);
}
.counter-section.style-one .selected{
    background-color: rgba(<?php echo sixtyninestudio_hex2rgb($accent_color)?>,.5);
}

.icon-block h3 a:hover{
    color: <?php echo esc_attr($accent_darken)?>;
}


<?php
/**
*
* Media query
*/
?>

@media (max-width : 767px) {
    .header-transparent .navbar-default,
    .navbar-default{
        <?php echo esc_attr($mobile_menu_bg_color)?> !important;
    }

    .sticky-wrapper.is-sticky .navbar-default {
        <?php echo esc_attr($sticky_menu_bg_color) ?> !important;
    }

    .header-transparent .navbar-default .navbar-nav li a,
    .navbar-default .navbar-nav li a{
        <?php echo esc_attr($mobile_menu_font_color) ?>;
    }

    
    .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus, 
    .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu>.active>a, 
    .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus, 
    .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover{
        color: <?php echo esc_attr($accent_color) ?>;
    }

}