<?php require_once('dbconnect.php'); ?>
<?php
  if (isset($_GET['newslettersub']) && $_GET['pb'] == 'wp2303kjdj43$003dsdw23!^893nwp'){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      if (isset($_POST['subscriptionemail']) && !empty($_POST['subscriptionemail'])){
        $s = $_POST['subscriptionemail'];
        $insert = "INSERT INTO `newsletter_user_mail` (usermail, status)
        VALUES ('".mysqli_real_escape_string($dbcon, $s)."', '".mysqli_real_escape_string($dbcon, "on")."')";
        if(!$res = $dbcon->query($insert)){
          header('Location: index.php?pb=wp2303kjdj43$003dsdw23!^893nwp&subres=failed#subresponse');
        }
        else {
          $dbcon->close();
          header('Location: index.php?pb=wp2303kjdj43$003dsdw23!^893nwp&subres=success#subresponse');
        }
      }
    }
  }

?>
<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta name="description" content="His Praise Ministries Incorporated">
  <meta name="description" content="HPM">
  <meta name="keywords" content="HPM, His Praise Ministries Incorporated, His Praise Ministries Inc.">
  <meta name="author" content="Jesusboythatcodes">
  <meta name="author" content="PoG">
  <link rel="shortcut icon" href="hpm-content/uploads/favicon.png" />
  <title>His Praise Ministry</title>
  <link rel="stylesheet" id="layerslider-css" href="hpm-content/plugins/LayerSlider/static/layerslider/css/layerslideradc6.css?ver=6.5.5" type="text/css" media="all" />
  <link rel="stylesheet" id="default-style-css" href="hpm-content/themes/lord/stylea288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-mCustomScrollbar-css" href="hpm-content/themes/lord/frontend/css/jquery.mCustomScrollbara288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-widgets-css-css" href="hpm-content/themes/lord/frontend/css/lord_widgetsa288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="responsive-css-css" href="hpm-content/themes/lord/frontend/css/responsivea288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="owl-css-css" href="hpm-content/themes/lord/frontend/css/owl.carousela288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-timecircles-css" href="hpm-content/themes/lord/frontend/shortcodes/timecirclesa288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="svg-css-css" href="hpm-content/themes/lord/frontend/css/iconmoona288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-countdown-css" href="hpm-content/themes/lord/frontend/css/jquery.countdowna288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-lord-csmenu-css" href="hpm-content/themes/lord/frontend/css/mmenu.mina288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="law-bx-slider-css-css" href="hpm-content/themes/lord/frontend/css/jquery.bxslidera288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-bootstrap-css" href="hpm-content/themes/lord/frontend/css/bootstrapa288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="lord-color-css" href="hpm-content/themes/lord/frontend/css/colora288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-hpm-commerce-css" href="hpm-content/themes/lord/frontend/css/hpm-commercea288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="font-awesome-css" href="hpm-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min5fba.css?ver=5.2" type="text/css" media="all" />
  <link rel="stylesheet" id="cp-bx-slider-css" href="hpm-content/themes/lord/frontend/css/jquery.bxslidera288.css" type="text/css" media="all" />
  <link rel="stylesheet" id="googleFonts-css" href="http://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin-ext%2Ccyrillic%2Clatin%2Cgreek%2Ccyrillic-ext%2Cvietnamese%2Cgreek-ext&amp;ver=4.8.1" type="text/css" media="all" />
  <link rel="stylesheet" id="googleFonts-heading-css" href="http://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin-ext%2Ccyrillic%2Clatin%2Cgreek%2Ccyrillic-ext%2Cvietnamese%2Cgreek-ext&amp;ver=4.8.1" type="text/css" media="all" />
  <link rel="stylesheet" id="menu-googleFonts-heading-css" href="http://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin-ext%2Ccyrillic%2Clatin%2Cgreek%2Ccyrillic-ext%2Cvietnamese%2Cgreek-ext&amp;ver=4.8.1" type="text/css" media="all" />
  <link rel="stylesheet" id="custom-style-css" href="hpm-content/themes/lord/frontend/css/stylea288.css" type="text/css" media="all" />
  <style id="custom-style-inline-css" type="text/css">
    .page_content {
      padding: 80px 0 !important;
    }
  </style>
  <link rel="stylesheet" id="js_composer_front-css" href="hpm-content/plugins/js_composer/assets/css/js_composer.min5fba.css?ver=5.2" type="text/css" media="all" />
  <link rel="stylesheet" id="jquery-ui-smoothness-css" href="hpm-content/plugins/contact-form-7/includes/js/jquery-ui/themes/smoothness/jquery-ui.mine899.css?ver=1.11.4" type="text/css" media="screen" />
  <script type="text/javascript" data-cfasync="false" src="hpm-content/plugins/LayerSlider/static/layerslider/js/greensockb3a6.js?ver=1.19.0"></script>
  <script type="text/javascript" src="hpm-includes/js/jquery/jqueryb8ff.js?ver=1.12.4"></script>
  <script type="text/javascript" data-cfasync="false" src="hpm-content/plugins/LayerSlider/static/layerslider/js/layerslider.kreaturamedia.jqueryadc6.js?ver=6.5.5"></script>
  <script type="text/javascript" data-cfasync="false" src="hpm-content/plugins/LayerSlider/static/layerslider/js/layerslider.transitionsadc6.js?ver=6.5.5"></script>
  <script type="text/javascript">
    /* <![CDATA[ */
    var EM = {
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="hpm-content/plugins/events-manager/includes/js/events-managere23c.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/images/indexa288.html?ver=4.8.1"></script>
  <style type="text/css">
    body,
    .main-content {
      background: #ffffff;
    }

    h1 {
      font-size: 80px !important;
    }

    h2 {
      font-size: 36px;
    }

    h3 {
      font-size: 20px !important;
    }

    h4 {
      font-size: 18px !important;
    }

    h5 {
      font-size: 16px !important;
    }

    h6 {
      font-size: 14px !important;
    }

    body {
      font-size: 16px !important;
    }

    .classes-page .skill-inner .label,
    body,
    .comments-list li .text p,
    .header-4-address strong.info,
    .header-4-address a.email,
    strong.copy,
    .widget-box-inner p,
    .blog-post-box .text p,
    .box-1 p,
    .box-1 .textwidget,
    .get-touch-form input,
    .get-touch-form strong.title,
    .footer-copyright strong.copy,
    #inner-banner p,
    .welcome-text-box p,
    .about-me-text p,
    .about-me-text blockquote q,
    .team-box .text p,
    .accordition-box .accordion-inner p,
    .facts-content-box p,
    .our-detail-box p,
    .our-detail-box ul li,
    .widget_em_widget ul li,
    .sidebar-recent-post ul li p,
    blockquote p,
    blockquote q,
    .author-box .text p,
    .contact-page address ul li strong.title,
    .contact-page address ul li strong.ph,
    .contact-page address ul li strong.mob,
    .contact-page address ul li a.email,
    a.comment-reply-link,
    .timeline-project-box>.text p,
    .comments .text p,
    .event-row .text p,
    .project-detail p,
    .news-box .text p,
    .error-page p,
    .cp-columns p,
    .cp-list-style ul li,
    .customization-options ul li,
    .cp-accordion .accordion-inner strong,
    .list-box ul li,
    .list-box2 ul li,
    .list-box3 ul li,
    .tab-content p,
    .tab-content-area p,
    .blockquote-1 q,
    .blockquote-2 q,
    .map h3,
    .even-box .caption p,
    .header-4-address strong.info,
    .header-4-address a.email,
    strong.copy,
    .widget-box-inner p,
    .cp-theme-style-1 p,
    .cp_job_list strong.salary,
    .load_more_jobs>strong,
    #footer .box ul li a,
    .bottom-row strong.copyrights,
    .theme-style-1 p,
    .testimonials-section .holder .text-box em,
    .price-table .box ul li,
    .sidebar .box .text-box strong.widget_price_featured,
    .sidebar .box .text-box a.text,
    .banner-menu ul li a,
    .browse-job-section strong.title,
    .load_more_resumes>strong,
    .job-detail ul li,
    #content-area .job-manager-application-wrapper .application .application_button,
    #content-area .single_job_listing .application .application_button {
      font-family: "Roboto" !important;
    }

    .theme-style-1 h1,
    .theme-style-1 h2,
    .theme-style-1 h3,
    .theme-style-1 h4,
    .theme-style-1 h5,
    .theme-style-1 h6,
    .cp_job_list .rp4hpm-related-job_listing>ul li.job_listing a div.position h3,
    .cp_job_list .rp4hpm-related-job_listing>ul li.no_job_listings_found a div.position h3,
    .cp_job_list ul.job_listings li.job_listing a div.position h3,
    .cp_job_list ul.job_listings li.no_job_listings_found a div.position h3,
    .resumes-section ul.resumes li.no_resumes_found a div.candidate-column h3,
    .resumes-section ul.resumes li.resume a div.candidate-column h3,
    .cp-home1-welcome p,
    .widget.latest-posts .small-post h3,
    .widget .recent-post strong {
      font-family: "Roboto" !important;
    }

    #mega_main_menu.main-menu>.menu_holder>.menu_inner>.nav_logo>.mobile_toggle>.mobile_button,
    #mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li>.item_link,
    #mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li>.item_link .link_text,
    #mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li.nav_search_box *,
    #mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li .post_details>.post_title,
    #mega_main_menu.main-menu>.menu_holder>.menu_inner>ul>li .post_details>.post_title>.item_link,
    .navigation ul,
    #nav li a {
      font-family: "Roboto" !important;
    }
  </style>
  <style id="stylesheet">
     ::selection {

      background: #fa7603;
      /* Safari */
      color: #fff;
    }



     ::-moz-selection {

      background: #fa7603;
      /* Firefox */
      color: #fff;
    }

    .cp-welcome-content a.read-more,
    .participate,
    .button-1,
    .cp-frame .date,
    .home-donation .progress-bar-success,
    .footer-widget .tagcloud a:hover,
    .about-tabs .nav.nav-tabs li a:hover,
    .about-tabs .nav.nav-tabs li.active a,
    .causes-list-box .text-box .progress .bar,
    .causes-list-box .text-box .progress .bar .percentage-1,
    .cf-share,
    .search-widget input[type="submit"],
    .pagination-box .pagination ul>li.active a,
    .sidebar-bix-1 .progress .bar,
    .comment-form input[type="submit"],
    .causes-details .fram-box .text-box .progress .bar,
    .causes-details .fram-box .text-box .progress .bar .percentage-1,
    .causes-details .fram-box .text-box .detail-row-2 ul li a.btn-back,
    .date-box strong.date,
    a.details,
    .cp-pagination .pagination>.active>a,
    .cp-pagination .pagination>.active>a:focus,
    .cp-pagination .pagination>.active>a:hover,
    .cp-pagination .pagination>.active>span,
    .cp-pagination .pagination>.active>span:focus,
    .cp-pagination .pagination>.active>span:hover,
    .quantity-box .quantity button,
    .donate-form-area input[type="submit"],
    .team-social li a:hover,
    .other-members-box .frame .caption,
    .causes-testimonials,
    .features-2-box:hover .icon-box,
    .services-paralax a:hover,
    .pricing-head>h3,
    .pricing-footer a,
    .event-viewall>a,
    .read-more,
    .home-events-slider .owl-theme .owl-controls .owl-nav .owl-prev,
    .home-events-slider .owl-theme .owl-controls .owl-nav .owl-next,
    .cp-process-box:hover .f-icon img,
    .banner-right a:hover,
    .cp-upcoming-events .col-md-6 .cp-events-box .cp-text .countdown-section,
    .cp-events-listing .cp-events-box .countdown-section,
    .cp-events-box .cp-caption a,
    .cp-blog-item .cp-thumb .cp-caption a,
    .slide .cp-thumb .cp-caption a,
    .read-btn,
    .cp-pagination .pagination>li>a,
    .cp-pagination .pagination>li>span,
    .cp-wrapper .hentry .entry-content-cp .cp-team-item2:hover .cp-text,
    .cp-prayer-search .top-social a,
    .mm_social_icons .cp-prayer-search li a,
    #wrapper.cp-wrapper .nav.navbar-nav li.menu-item ul.sub-menu li a:hover {
      background-color: #fa7603;

      color: #fff;
    }

    .entry-content-cp .entry-content .job_listing_packages_title .button,
    .entry-content-cp .entry-content .resume_packages_title .button,
    .entry-content-cp .job_listing_packages_title .button,
    .entry-content-cp .resume_packages_title .button,
    .entry-content-cp .resume-manager-add-row,
    .entry-content-cp .button,
    .job_listings .job_filters .showing_jobs a,
    #content-area .job-manager-application-wrapper .application .application_button,
    #content-area .single_job_listing .application .application_button,
    .resume_btn .resume-link- a,
    .jobinn.single-resume .resume_contact .resume_contact_button,
    .resumes-section .companies-overview li .company-letter,
    .resumes-section .companies-overview li:before,
    .company-letter:before,
    .cp-pagination .page-numbers.current,
    .comment-form#commentform input[type="submit"],
    #searchform button,
    .resume_btn .resume-link a,
    .sticky:before,
    .widget_search #searchform_widget button,
    .widget_wysija .widget_wysija_cont input[type="submit"],
    #footer .box ul li a:hover,
    .btn-participate,
    .em-booking-buttons input#em-booking-submit,
    .em-booking-login #em_hpm-submit,
    .page-numbers.current,
    .cp-nav-logo-bar .navbar-default .navbar-nav>li>a::before,
    .cp-pagination .pagination .page-numbers.current,
    .cp-pagination .pagination .page-numbers:hover,
    .login-submit #hpm-submit,
    .cp-signup-form input[type="submit"],
    .page .wpcf7 .wpcf7-form-control.wpcf7-submit,
    .page .wpcf7 .wpcf7-form-control.wpcf7-submit,
    #consulation_submit .inner-holder.cp-btn-holder>button,
    .sticky .cp-blog-item:after,
    .widget .calendar_wrap caption,
    .woocommerce .shop_table.cart thead th,
    .woocommerce-pagination .page-numbers>li a.page-numbers:hover,
    .widget_tag_cloud .tagcloud a {

      background: #fa7603;
    }

    .text-color,
    .cp-welcome h2,
    .home-events-slider .text-box h3 a,
    .home-events-slider .text-box a,
    .home-video-full,
    .cp-meta a,
    .player-btn-row-2 li a,
    .cp-frame .blog-hover a,
    .cp-blog-content h3 a,
    .cp-blog-content a,
    .footer-widget a,
    .causes-list-box .text-box h3 a,
    .causes-list-box .frame .caption a,
    .sidebar-bix-1 span.percentage-1,
    .causes-details .detail-row a,
    .causes-details .tags li a,
    .cp-event-list .cp-event-holder h3 a,
    .link-holder a,
    .comments li .text-outer a,
    .cp-blog-holder h3 a,
    #wrapper .event-detail blockquote:before,
    .product-price ins,
    .product-price a,
    .text-box h3 a,
    .pro-hover a,
    .review-star li a,
    .gallery-grid .g-frame a,
    .contact-side ul li a,
    .contact-side ul li .fa,
    .featured-news h3 a,
    .post-meta li a,
    .features-2-box .icon-box a,
    .event-title-holder .fa,
    .event-title>h3,
    .cp-wrapper .hentry .entry-content-cp .event-title>h3,
    #wrapper .pillars-islam:hover .text-box h3,
    .cp-bottom-banner .banner-right h2,
    .cp-footer .widget h3,
    .cp-social-links li a:hover,
    #wrapper a:hover,
    #cp-team-slider .owl-nav .owl-prev:hover::after,
    #cp-team-slider .owl-nav .owl-next:hover::after,
    .cp-wrapper .hentry .entry-content-cp .post-meta li,
    .cp-wrapper .hentry .entry-content-cp .post-meta li a,
    .cp-wrapper .cp-blog-item ul.post-meta li,
    .cp-wrapper .cp-blog-item ul.post-meta li a,
    .widget .cp-post-tools li,
    .widget .cp-post-box .cp-text .post-meta li,
    .widget .cp-post-tools li a,
    .widget .cp-post-box .cp-text .post-meta li a,
    #wrapper .cp-blog-item .cp-text ul.post-meta li,
    .home-video-full .text-box ul.cp-meta li .fa,
    .widget_rss h3 a {

      color: #fa7603;
    }

    #homev1-slider .cp-slider-content a,
    #homev1-slider.owl-theme .owl-controls .owl-page span,
    .social-links a:hover,
    .nav.navbar-nav.navbar-right.cp-search-basket>li a,
    .cp-nav-logo-bar .nav.navbar-nav.navbar-right.cp-search-basket .dropdown-menu,
    .read-more,
    .cp-process-box:hover .cp-icon-box:before,
    .cp-process-box:hover .cp-icon-box:after,
    .cp-slider-content a,
    .cp-Our-experties .bx-wrapper .bx-prev,
    .cp-Our-experties .bx-wrapper .bx-next,
    .cp-clients-inner,
    #cp-testimonial-slider.owl-theme .owl-controls .owl-dot.active span,
    #cp-testimonial-slider2.owl-theme .owl-controls .owl-dot.active span,
    .cp-team-item .cp-text,
    .cp-footer,
    #homev2-slider .owl-controls .owl-nav [class*="owl-"],
    .cp-btn-style1,
    .cp-blog-inner .cp-text,
    .quote-btn,
    .cp-inner-banner-outer h2:after,
    .cp-process-box:hover .cp-icon-box,
    .cp-btn-style2,
    .cp-services-listed .cp-icon-box:before,
    .cp-services-listed .cp-icon-box:after,
    .cp-events-listing .cp-events-box .cp-text,
    .widget_tag_cloud .tagcloud a,
    .cp-blockquote,
    .cp-form-box .inner-holder .btn-submit,
    #cp-blog-slider_v2 .owl-controls .owl-nav [class*="owl-"],
    .cp-shop-box,
    .cp-pro-detail-info .cp-thumb,
    #homev4-slider .owl-controls .owl-nav [class*="owl-"],
    #homev3-slider .cp-slider-content a:hover,
    .cp-tab-box .tabs-inner-text span,
    .cp-tab-box .tabs-inner-text h5:hover a,
    .pagination-box .pagination .page-numbers.current,
    .cp-Our-experties .owl-carousel.owl-theme .owl-nav div,
    .cp-upcoming-events .owl-carousel.owl-theme .owl-nav div,
    #cp-team-slider .owl-nav div,
    .cp-social-links li a:hover {

      border-color: #fa7603;
    }

    .signup-section .holder span:before {
      border-color: transparent transparent transparent #fa7603;
    }

    .progress-box .progress-bar span:before {
      border-color: transparent transparent transparent #fa7603;
    }

    #homev2-slider .cp-slider-content:before,
    .related.products ul.products li,
    #main-woo .products li,
    .woocommerce-main-image.zoom,
    .cp-blog-item .cp-text blockquote {
      border-top-color: #fa7603;
    }

    .cp-tab-box .nav-tabs>li.active>a,
    .cp-tab-box.nav-tabs>li.active>a:hover,
    .cp-tab-box .nav-tabs>li.active>a:focus,
    .cp-tab-box .nav-tabs>li a:hover,
    .cp-tab-box .nav-tabs>li.active>a,
    .cp-tab-box .nav-tabs>li.active>a:hover,
    .cp-tab-box .nav-tabs>li.active>a:focus,
    .woocommerce-tabs ul.tabs li a:hover,
    .woocommerce-tabs ul.tabs li.active a,
    .cp-header .widget_shopping_cart_content {
      border-bottom-color: #fa7603;
    }

    .blue,
    .cp-news-grid-style-1 .cp-news-post-excerpt h3 a:hover,
    .cp-mega-menu ul .random a,
    .cp-mega-menu ul .search-bar,
    .cp-news-grid-style-2 a:hover,
    .cp-news-grid-style-3 h3 a:hover,
    .cp-news-grid-style-5 .cp-news-list h3 a:hover,
    .cp-post-tools a,
    .cp-rating a,
    .tags-widget a,
    .cp-post-rating a,
    .cp-news-grid-style-6 .cp-post-content h3 a:hover,
    .cp-pro-rating a,
    .cp-product-grid .price ins,
    .cp-product-grid ul.grid h3 a:hover,
    .cp-single-post .cp-post-content h3 a:hover,
    .cp-post-share span,
    .cp-post-tags span,
    .cp-post-content h3 a:hover,
    .cp-comments h4 a:hover,
    .cp-masonry-posts .cp-post-content blockquote:before,
    .cp-masonry-posts .cp-post-content strong.link-post:before,
    .cp-masonry-posts-50 .cp-post-content blockquote:before,
    .cp-masonry-posts-50 .cp-post-content strong.link-post:before,
    .cp-product-details .cp-pro-content h3 a:hover,
    .cp-product-details .price ins,
    .cp-pro-details-tabs .nav-tabs>li>a:hover,
    .cp-pro-details-tabs .nav-tabs>li.active>a,
    .cp-pro-details-tabs .nav-tabs>li.active>a:hover,
    .cp-pro-details-tabs .nav-tabs>li.active>a:focus,
    .cp-login-form .forgot a,
    .cp-login-form .signup a,
    .sidebar .popular-post .small-grid h3 a:hover,
    .sidebar .latest-posts .small-grid h3 a:hover,
    .sidebar .most-commented ul li a:hover,
    .cp-featured-news-slider .cp-post-content h1 a:hover,
    .sidebar .reviews li h4 a:hover,
    .sidebar .cat-holder a:hover,
    .cp-news-grid-style-4 .cp-fullwidth-news-post-excerpt .cp-post-content h3 a:hover,
    .cp-news-grid-style-4 .cp-post .cp-post-content h3 a:hover,
    #wrapper .cp-featured-news-slider a:hover,
    #wrapper .cp-featured-news-slider .cp-post-content .cp-post-tools a:hover,
    #main-woo .price ins {

      color: ;
    }

    .nbs-flexisel-item .eventcd,
    #footer .wpcf7-form .wpcf7-submit,
    .events .eventcd,
    .event-content .eventcd,
    .fc.fc-ltr .fc-header,
    .wrapper .woocommerce-page #respond #submit.submit,
    .comment-form .form-submit .submit,
    .wrapper .sidebar .widget #searchform input[type="submit"],
    .readmore-button,
    .side-banner .bx-wrapper .bx-pager.bx-default-pager a:hover,
    .side-banner .bx-wrapper .bx-pager.bx-default-pager a.active,
    .events .eventcd,
    .event-content .eventcd,
    .nbs-flexisel-item .eventcd,
    .wrapper .testimonial .title,
    .trave-home-blog .read-more,
    .hot-deal .like a,
    .hot-deal .cart a,
    .list-view .like a,
    .list-view .cart a,
    .custom_accordion_cp h3,
    .table th,
    .table .progress,
    .striker,
    .category_list_filterable .gdl-button.active,
    #signin .modal-content .btn-style,
    .modal-dialog.modal-sm #sing-up .btn-style,
    .full-fixture #booking_form #em-booking-submit,
    .full-fixture #booking_form #em_hpm-submit,
    .btn-hover,
    .btn-dark-hover,
    #dbem-bookings-table thead,
    .widget .em-calendar-wrapper tbody td a,
    .value .reset_variations,
    .post-password-form input[type="submit"],
    .textwidget .wpcf7 .wpcf7-submit,

    #header9 .main-navbar .hcart,
    .widget #searchform input[type="submit"],
    .widget_product_search input[type="submit"],
    .pro-bottom .pcart:hover,
    .woocommerce .shop_table.cart .actions .button,
    .woocommerce .shipping_calculator .button,
    #order_review #payment .button,
    .woocommerce .login .button,
    .entry-content-cp .checkout_coupon .button,
    .summary.entry-summary .button,
    .wrapper .woocommerce #respond input#submit.submit,
    .wrapper .woocommerce-page #respond #submit.submit,
    #place_order.button,
    .woocommerce .shop_table.cart thead,
    .em-search-submit,
    #horizontal-tabs .nav-tabs>li>a:hover,
    #horizontal-tabs .ui-tabs-active.ui-state-active a,
    #vertical-tabs .nav-tabs>li>a:hover,
    #vertical-tabs .ui-tabs-active.ui-state-active a,
    .sidebar .readmore,
    .sidebar .widget_shopping_cart_content .buttons .button,
    #header9 .topbar-dropdowns .dropdown-menu>li>a:hover,
    #header9 .topbar-dropdowns .dropdown-menu>li>a:focus,
    .related.products .products .rel-box .add_to_cart_button,
    #main-woo .woo-cat-products .add_to_cart_button,

    #main-woo .woo-cat-products .added_to_cart,
    .pricing .btn-style,
    .form-404 input#searchsubmit,
    .home-blog-container .post-meta .add_to_cart_button:hover,

    .simple-grid .product-box .frame .add_to_cart_button:hover,
    .simple-grid .product-box .frame .added_to_cart:hover,





    {

      background: ;
    }

    .blog-post-text blockquote,
    .news-post-text blockquote {

      border-bottom-color: ;
    }

    .side-banner .bx-wrapper .bx-pager.bx-default-pager a:hover,
    .side-banner .bx-wrapper .bx-pager.bx-default-pager a.active,
    .blog-post-text blockquote,
    .news-post-text blockquote,
    .blog-details>p:nth-last-child(1),
    .testimonial img,
    .team-box:hover,
    .about-text .quote,
    .lord_wrapper2 .social-links li a:hover {

      border-color: ;
    }

    .addtocart:before,
    .home .pro-box .add_to_cart_button:before,
    .addtocart:before,
    .normal-grid .pro-box .add_to_cart_button:before,
    .pro-box .thumb .sale,

    .classes-time .nav-tabs>li.active>a:after {

      border-top-color: #fa7603;
    }

    .copyright-row:before {

      border-bottom: 12px solid #fa7603;
    }

    .home-menu .navbar-nav>li>.sub-menu,
    .home-menu .menu ul>li .children,
    #header .nav>li>a:hover,
    #header .nav>li>a:focus,
    #header .navbar-nav>li>.sub-menu,
    #header .menu ul>li .children,

    .home-menu .navbar-nav>li ul.sub-menu li ul.sub-menu,
    .home-menu .menu>li ul.children li ul.children,

    .pricing-table-curve .price-table:hover .pricing-footer {

      border-bottom-color: #fa7603;
    }

    .ftop {

      background: #C0617D
    }

    #lord_header6 .navigation-row,
    #lord_header6 .search-box .search,
    #lord_header1 .navigation-row,
    #lord_header4 .navigation-row,
    .lord_search_box,
    #lord_header2 .navbar-nav li a:hover,
    #lord_header2 .navbar-nav li a:focus,
    #lord_header2 .navbar-nav li a.active,
    #lord_header2 .search,
    #lord_header3 .logo-row,
    #lord_header3 .navbar-nav li a:hover,
    #lord_header3 .navbar-nav li a:focus,
    #lord_header3 .navbar-nav li a.active,
    .pro-box button.add_to_cart_button,
    .pro-box .added_to_cart,
    .add_to_cart_button,
    .product-box .bottom strong.price,
    .added_to_cart,
    .onsale,
    .widget_search #searchsubmit,
    .sidebar #searchform input[type="submit"],
    .sidebar .widget_product_search #searchform input[type="submit"],
    .sidebar .newsletter-box button,

    .about .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:hover,
    .nav-tabs>li.active>a:focus,
    #header-login,
    .about .nav-tabs>li a,
    .percentage,
    .progress span,

    .p404 .buttons,
    .service-grid span:hover,
    .price,
    .woocommerce a.button,
    .woocommerce-page a.button,
    .woocommerce button.button,
    .woocommerce-page button.button,
    .woocommerce input.button,
    .woocommerce-page input.button,
    .woocommerce #respond input#submit,
    .woocommerce-page #respond input#submit,
    .woocommerce #content input.button,
    .woocommerce-page #content input.button,
    .signup input[type="submit"],
    .category_list_filterable .active,
    input[type="submit"]:hover,

    .block-image li.white-rounded:hover,
    .ghover .pluss:hover,
    .home .pro-box .add_to_cart_button:after,
    .addtocart:after,
    .addtocart,
    .home .pro-box .add_to_cart_button,

    .progress .percentage,
    .pagination #pagination a:hover,
    .pagination #pagination .active a {

      background: #fa7603;
    }

    .pattren_lord_footer {

      background-color: #fff;

      background-image: radial-gradient(circle at 100% 150%, #fa7603 24%, #fa7603 25%, #fa7603 28%, #fa7603 29%, #fa7603 36%, #fa7603 36%, #fa7603 40%, transparent 40%, transparent),

      radial-gradient(circle at 0 150%, #fa7603 24%, #fa7603 25%, #fa7603 28%, #fa7603 29%, #fa7603 36%, #fa7603 36%, #fa7603 40%, transparent 40%, transparent),

      radial-gradient(circle at 50% 100%, #fa7603 10%, #fa7603 11%, #fa7603 23%, #fa7603 24%, #fa7603 30%, #fa7603 31%, #fa7603 43%, #fa7603 44%, #fa7603 50%, #fa7603 51%, #fa7603 63%, #fa7603 64%, #fa7603 71%, transparent 71%, transparent),

      radial-gradient(circle at 100% 50%, #fa7603 5%, #fa7603 6%, #fa7603 15%, #fa7603 16%, #fa7603 20%, #fa7603 21%, #fa7603 30%, #fa7603 31%, #fa7603 35%, #fa7603 36%, #fa7603 45%, #fa7603 46%, #fa7603 49%, transparent 50%, transparent),

      radial-gradient(circle at 0 50%, #fa7603 5%, #fa7603 6%, #fa7603 15%, #fa7603 16%, #fa7603 20%, #fa7603 21%, #fa7603 30%, #fa7603 31%, #fa7603 35%, #fa7603 36%, #fa7603 45%, #fa7603 46%, #fa7603 49%, transparent 50%, transparent);

      background-size: 30px 60px;

      height: 25px;
    }

    .footer-copy {

      background: rgba(0, 0, 0, 0.5);
    }

    .cp-footer-content {
      background-image: url(hpm-content/themes/lord/images/footer-bg.jpg)
    }

    .cp-inner-banner {
      background-image: url(hpm-content/themes/lord/images/inner-bg-img.png)
    }
  </style>
  <style type="text/css" data-type="vc_custom-css">
    .recent-sermons.sermons-section {
      padding: 0;
      margin: -50px 0 0 0;
      background: #ffffff;
    }

    .sermons-section.recent-sermons .round-box {
      background: #ffffff;
    }

    #vevent .heading-center h2 {
      color: #fff;
    }

    .our-pastore {
      padding: 0;
    }

    .product-detail-slider-2 {
      margin: -80px 0 0 0;
    }
  </style>
  <style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1489650040546 {
      background-color: #ffffff !important;
    }

    .vc_custom_1503914414813 {
      background-image: url(hpm-content/uploads/2017/01/event-bg-new9b2c.jpg?id=643) !important;
    }

    .vc_custom_1489663345233 {
      background-color: #f1f1f1 !important;
    }

    .vc_custom_1503914299767 {
      padding-top: 40px !important;
      padding-bottom: 80px !important;
      background: #000000 url(http://lord.crunchpress.com/hpm-content/uploads/2017/01/donate-bg.png?id=659) !important;
      background-position: center !important;
      background-repeat: no-repeat !important;
      background-size: cover !important;
    }

    .vc_custom_1489736882041 {
      background-color: #f1f1f1 !important;
    }

    .vc_custom_1489993504505 {
      margin-top: -40px !important;
      background-color: #f1f1f1 !important;
    }

    .vc_custom_1489998661418 {
      background-color: #f1f1f1 !important;
    }
  </style>
</head>
<body id="home1" class="home page-template-default page page-id-45 lord_full_width    theme-style-1 wpb-js-composer js-comp-ver-5.2 vc_responsive">
  <div id="wrapper">
    <header id="header">
      <div class="container-fluid">
        <strong class="logo">
          <a href="index.php">
          <img class width="190" height="55" src="hpm-content/uploads/hpm-logo-main.png" alt="HPM">
          </a>
        </strong>
        <div class="navigation-row">
          <div class="top-search">
          </div>
          <div class="cp-burger-nav home-1">
            <div id="cp_side-menu-btn" class="cp_side-menu">
              <a href="#" class>
                <img src="hpm-content/themes/lord/images/menu-icon.png" alt="menu-icon">
              </a>
            </div>
            <div id="cp_side-menu" style="height: 250px; padding-top: 100px;">
              <a href="#" id="cp-close-btn" class="crose"><i class="fa fa-close"></i></a>
              <strong class="copy">Contact us +2348059133844, +2347087395119.</strong>
              <strong class="copy">Martola Street, Off Winners Way Bashorun/Ashi Exit, Ibadan, Oyo State, Nigeria.</strong>
              <div class="sidebar-social">
                <ul>
                  <li class="social-links"><a data-placement data-rel="tooltip" href="http://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                  <li class="social-links"><a data-placement data-rel="tooltip" href="http://www.twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-links"><a data-placement data-rel="tooltip" href="http://www.linkedin.com/" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse ">
              <ul id="nav" class="nav navbar-nav">
                <li id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-24"><a href="index.php" style="background: #f0311e; color: #fff;">Home</a></li>
                <li id="menu-item-271" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-271"><a href="profiles">Profiles</a></li>
                <li id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31"><a href="books">Books</a></li>
                <li id="menu-item-31" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31"><a href="library">Library</a></li>
                <li id="menu-item-171" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-171"><a href="contact">Contact</a></li>
                <li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home"><a href="about">About</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <div id="cp-slide-search" class="cp_side-search">
    </div>
    <div id="banner">
      <div id="home-banner" class="owl-carousel owl-theme">
        <div class="item">
          <img src="hpm-content/slider/img-slider-1.jpg" alt="HPM" />
          <div class="caption">
            <div class="container">
              <span>H P M</span>
              <h1>His Praise Ministries</h1>
              <span style="text-transform: none;">fostering deeply committed and meaningful interpersonal relationships between God and man in the home, church and society</span>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="hpm-content/slider/img-slider-2.jpg" alt="HPM" />
          <div class="caption">
            <div class="container">
              <h1 style="text-transform: none;">His Praise Ministries</h1>
              <span style="text-transform: none;">harnessing the Family in every way onto its Eternal and Life purposes</span>
              <div class="btn-row"><a href="contact/" class="btn-style-2">Contact</a> </div>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="hpm-content/uploads/2017/01/banner-img-1.jpg" alt="HPM" />
          <div class="caption">
            <div class="container">
              <h1 style="text-transform: none;">His Praise Ministries</h1>
              <span style="text-transform: none;">gaining and equiping the Youth to consistently align with the will and expectations of Jesus Christ unto eternity.</span>
              <div class="btn-row"><a href="about" class="btn-style-2">About</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="main">
      <div class="container">
        <div class>
          <div class="main-content margin-top-bottom-cp">
            <div class="page_content">
              <div>
                <div class="row">
                  <div id="block_content_first" class="col-md-12">
                    <div>
                      <div class="row">
                        <div class>
                          <div id="post-45" class="post-45 page type-page status-publish hentry">
                            <a href="index.php"></a>
                            <div class="entry-content-cp">
                              <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                      <section class="home-about">
                                        <div class="container">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="heading-style-2"> <span>Welcome to His Praise Ministries</span>
                                                <h4>
                                                  His Praise Ministries Incorporated (HPM) is a non profit Christian Organisation founded in October, 1998, at Ibadan, Nigeria<br>
                                                  It is a ministry established to foster deeply committed and meaningful interpersonal relationships between God and man in the home, church and society. To actualize its goal, the ministry’s focus is on the family and youths.
                                                </h4>
                                              </div>
                                              <p><a href="about">Read more...</a>
                                              <ul>
                                                <li>
                                                  <div class="text-box">
                                                    <h3><a href="about/index.php#vision">OUR VISION</a></h3>
                                                    <p>Reaching out to the Family globally for their Salvation and Stability for the Enlargement of the Church of God.</p>
                                                  </div>
                                                </li>
                                                <li>
                                                  <div class="text-box">
                                                    <h3><a href="about/index.php#mission">Our MISSION</a></h3>
                                                    <p>To harness the Family in every way onto its Eternal and Life purposes.</p>
                                                  </div>
                                                </li>
                                              </ul>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="frame-1"><img src="hpm-content/uploads/2017/01/about-img-1-270x263.jpg" alt="HPM"></div>
                                              <div class="frame-2"><img src="hpm-content/uploads/2017/01/about-img-2-293x257.jpg" alt="HPM"></div>
                                            </div>
                                          </div>
                                        </div>
                                      </section>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="vc_row-full-width vc_clearfix"></div>
                              <!--<div id="vevent" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1503914414813 vc_row-has-fill vc_row-no-padding">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                      <div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                      <div class="heading-center">
                                        <h2>Upcoming Activities &amp; Events</h2>
                                        <span><b><em>we remember moments</em></b></span>
                                      </div>
                                      <section class="our-events">
                                        <div class="container">
                                          <div class="col-md-12">
                                            <div class="event-col">
                                              <div class="thumb"> <img src="hpm-content/uploads/2017/03/event-img-1-171x145.jpg" alt="timeline img 652"> </div>
                                              <div class="text-box">
                                                <strong class="date">11 <span>Feb</span></strong>
                                                <a href="hpm-loginc94b.html?action=register&amp;redirect_to=http://lord.crunchpress.com/" class="btn-style-2">Register Now</a>
                                                <a href="events/art-lessons-for-children-2/index.php" class="title">Art lessons for children</a>
                                                <span>10:00 am to 10:00 am - new york stock exchange</span>
                                                <ul class="links">
                                                  <li><a href="locations/new-york-stock-exchange/index.php"><span class="icon-compass"></span></a></li>
                                                  <li><a href="http://www.facebook.com/share.php?u=http://lord.crunchpress.com/"><span class="icon-share-button-outline"></span></a></li>
                                                  <li><a href="cdn-cgi/l/email-protection.html#aacbc8c9eacfd2cbc7dac6cf84c9c5c795d9dfc8c0cfc9de97efdccfc4de8cc8c5ced397e7cfd9d9cbcdcf"><span class="icon-e-mail-envelope"></span></a></li>
                                                </ul>
                                              </div>
                                            </div>
                                            <div class="event-col">
                                              <div class="thumb"> <img src="hpm-content/uploads/2017/03/blog-img-3-171x145.jpg" alt="timeline img 653"> </div>
                                              <div class="text-box">
                                                <strong class="date">11 <span>Feb</span></strong>
                                                <a href="hpm-loginc94b.html?action=register&amp;redirect_to=http://lord.crunchpress.com/" class="btn-style-2">Register Now</a>
                                                <a href="events/join-us-throughout-the-week-to-city/index.php" class="title">Join us throughout the week to city</a>
                                                <span>10:00 am to 10:00 am - new york stock exchange</span>
                                                <ul class="links">
                                                  <li><a href="locations/new-york-stock-exchange/index.php"><span class="icon-compass"></span></a></li>
                                                  <li><a href="http://www.facebook.com/share.php?u=http://lord.crunchpress.com/"><span class="icon-share-button-outline"></span></a></li>
                                                  <li><a href="cdn-cgi/l/email-protection.html#3f5e5d5c7f5a475e524f535a115c5052004c4a5d555a5c4b027a495a514b195d505b4602725a4c4c5e585a"><span class="icon-e-mail-envelope"></span></a></li>
                                                </ul>
                                              </div>
                                            </div>
                                            <div class="event-col">
                                              <div class="thumb"> <img src="hpm-content/uploads/2017/03/event-img-3-171x145.jpg" alt="timeline img 647"> </div>
                                              <div class="text-box">
                                                <strong class="date">11 <span>Feb</span></strong>
                                                <a href="hpm-loginc94b.html?action=register&amp;redirect_to=http://lord.crunchpress.com/" class="btn-style-2">Register Now</a>
                                                <a href="events/join-us-throughout-the-week-to-serve-our-cityd/index.php" class="title">Join us throughout the week to serve our city</a>
                                                <span>10:00 am to 10:00 am - new york stock exchange</span>
                                                <ul class="links">
                                                  <li><a href="locations/new-york-stock-exchange/index.php"><span class="icon-compass"></span></a></li>
                                                  <li><a href="http://www.facebook.com/share.php?u=http://lord.crunchpress.com/"><span class="icon-share-button-outline"></span></a></li>
                                                  <li><a href="cdn-cgi/l/email-protection.html#0766656447627f666a776b622964686a387472656d6264733a4271626973216568637e3a4a627474666062"><span class="icon-e-mail-envelope"></span></a></li>
                                                </ul>
                                              </div>
                                            </div>
                                            <div class="btn-row"><a href="event-list/index.php" class="btn-see">See All events</a></div>
                                          </div>
                                        </div>
                                      </section>
                                      <div class="vc_empty_space" style="height: 90px"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="vc_row-full-width vc_clearfix"></div>-->
                              <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1489736882041 vc_row-has-fill vc_row-no-padding">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                      <div class="vc_empty_space" style="height: 45px"><span class="vc_empty_space_inner"></span></div>
                                      <div class="heading-center">
                                        <h2>Activities and Features</h2>
                                        <span><b><em>See our shop</em></b></span>
                                      </div>
                                      <section class="sermons-section">
                                        <div class="container">
                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="product-detail-slider-2 owl-carousel owl-theme">
                                                <div class="item">
                                                  <div class="our-product">
                                                    <a href="libary">
                                                      <div class="frame">
                                                        <img width="319" height="325" src="hpm-content/uploads/images/shelve.jpg" class="attachment-319x325 size-319x325 hpm-post-image" alt="Library" sizes="(max-width: 319px) 100vw, 319px" />
                                                      </div>
                                                      <div class="text-box">
                                                        <h3><a href="library">HPM Library</a></h3>
                                                      </div>
                                                    </a>
                                                  </div>
                                                </div>
                                                <div class="item">
                                                  <div class="our-product">
                                                    <a href="newletter">
                                                      <div class="frame">
                                                        <img width="319" height="325" src="hpm-content/uploads/images/news-img.jpg" class="attachment-319x325 size-319x325 hpm-post-image" alt="Newsletter" sizes="(max-width: 319px) 100vw, 319px" />
                                                      </div>
                                                      <div class="text-box">
                                                        <h3><a href="newsletter">HPM Newsletter</a></h3>
                                                      </div>
                                                    </a>
                                                  </div>
                                                </div>
                                                <div class="item">
                                                  <div class="our-product">
                                                    <a href="counselling">
                                                      <div class="frame">
                                                        <img width="319" height="325" src="hpm-content/uploads/images/counselling.jpg" class="attachment-319x325 size-319x325 hpm-post-image" alt="Counselling" sizes="(max-width: 319px) 100vw, 319px" />
                                                      </div>
                                                      <div class="text-box">
                                                        <h3><a href="counselling">HPM Counselling</a></h3>
                                                      </div>
                                                    </a>
                                                  </div>
                                                </div>
                                                <div class="item">
                                                  <div class="our-product">
                                                    <a href="evangelism">
                                                      <div class="frame">
                                                        <img width="319" height="325" src="hpm-content/uploads/images/evangelism.jpg" class="attachment-319x325 size-319x325 hpm-post-image" alt="Evangelsim" sizes="(max-width: 319px) 100vw, 319px" />
                                                      </div>
                                                      <div class="text-box">
                                                        <h3><a href="evangelism">HPM Evangelism</a></h3>
                                                      </div>
                                                    </a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </section>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="vc_row-full-width vc_clearfix"></div>
                              <!--<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1489993504505 vc_row-has-fill vc_row-no-padding">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                      <div class="heading-center">
                                        <h2>From The Gallery</h2>
                                        <span><b><em>Here are the pictures of some of our past events</em></b></span>
                                      </div>
                                      <section class="gallery-style-1">
                                        <div class="container">
                                          <div class="row portfolio_block columns3">
                                            <div class="col-md-4 col-sm-4 element gall a683">
                                              <div class="frame">
                                                <img src="hpm-content/uploads/2017/03/gallery-style-01-img-6-379x240.jpg" alt="gallery img 0">
                                                <!--<div class="caption">
                                                  <div class="holder"> <a href class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    <strong class="title">Holy Spirit: Strategic </strong>
                                                    <span>Christmas</span>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 element gall a683">
                                              <div class="frame"> <img src="hpm-content/uploads/2017/03/gallery-style-01-img-2-379x240.jpg" alt="gallery img 1">
                                                <!--<div class="caption">
                                                  <div class="holder"> <a href class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    <strong class="title">Holy Spirit: Strategic </strong> <span>Christmas</span> </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 element gall a685">
                                              <div class="frame">
                                                <img src="hpm-content/uploads/2017/03/gallery-style-01-img-5-379x240.jpg" alt="gallery img 0">
                                                <!--<div class="caption">
                                                  <div class="holder"> <a href class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    <strong class="title">Holy Spirit: Strategic </strong> <span>Good Friday</span> </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 element gall a685">
                                              <div class="frame">
                                                <img src="hpm-content/uploads/2017/03/gallery-style-01-img-4-379x240.jpg" alt="gallery img 1">
                                                <!--<div class="caption">
                                                  <div class="holder"> <a href class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    <strong class="title">Holy Spirit: Strategic </strong> <span>Good Friday</span> </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 element gall a687">
                                              <div class="frame">
                                                <img src="hpm-content/uploads/2017/03/gallery-style-01-img-1-379x240.jpg" alt="gallery img 0">
                                                <!--<div class="caption">
                                                  <div class="holder"> <a href class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    <strong class="title">Holy Spirit: Strategic </strong> <span>LENT</span> </div>
                                                </div
                                              </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 element gall a687">
                                              <div class="frame">
                                                <img src="hpm-content/uploads/2017/03/gallery-style-01-img-3-379x240.jpg" alt="gallery img 1">
                                                <!--<div class="caption">
                                                  <div class="holder"> <a href class="link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    <strong class="title">Holy Spirit: Strategic </strong> <span>LENT</span> </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="btn-row"><a href="gallery" class="btn-style-2">View More Images</a></div>
                                        </div>
                                      </section>
                                    </div>
                                  </div>
                                </div>
                              </div>-->
                              <div class="vc_row-full-width vc_clearfix"></div>
                              <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1503914299767 vc_row-has-fill vc_row-no-padding">
                                <div class="wpb_column vc_column_container vc_col-sm-12" id="donate">
                                  <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                      <section class="donate-section">
                                        <div class="container">
                                          <h3 style="text-align: center; margin-bottom: 50px;">For Donations</h3>
                                          <h2>His Praise Ministries Inc.</h2>
                                          <span>First Bank Plc</span>
                                        </div>
                                      </section>
                                      <section class="donate-section">
                                        <div class="container">
                                          <strong class="amount">2022030443</strong>
                                          <!--<div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                          </div>
                                          <strong class="goal">Pledged of $15000 goal</strong>
                                          <div class="btn-row"><a href="index.php" class="btn-style-1">online Donetaion</a></div>-->
                                        </div>
                                      </section>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="vc_row-full-width vc_clearfix"></div>
                              <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1489998661418 vc_row-has-fill vc_row-no-padding">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                      <div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>
                                      <div class="heading-center">
                                        <h2>Books from the President</h2>
                                        <span><b><em>View our book store</em></b></span>
                                      </div>
                                      <section class="home-blog">
                                        <div class="container">
                                          <div class="row">
                                            <?php include_once('books/books3.php'); ?>
                                          </div>
                                          <div class="btn-row"><a href="books" class="btn-style-1">View All Books</a></div>
                                        </div>
                                      </section>
                                      <div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="vc_row-full-width vc_clearfix"></div>
                              <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1489663345233 vc_row-has-fill vc_row-no-padding">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                  <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                      <div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>
                                      <div class="heading-center">
                                        <h2>Support Mission</h2>
                                        <span><b><em>we have alliance with</em></b></span>
                                      </div>
                                      <section class="our-pastore pastore-page">
                                        <div class="container">
                                          <div class="row">
                                            <div class="col-md-3 col-sm-4">
                                              <div class="frame">
                                                <img src="hpm-content/uploads/images/capro1.jpg" alt="capro">
                                                <div class="caption">
                                                  <div class="holder">
                                                    <a href="#" class="title">CAPRO</a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                              <div class="frame">
                                                <img src="hpm-content/uploads/images/nig-benin.jpg" alt="HPM">
                                                <div class="caption">
                                                  <div class="holder">
                                                    <a href="#" class="title">NIG/BENIN BORDER</a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                              <div class="frame">
                                                <img src="hpm-content/uploads/images/alaba-camp.jpg" alt="ALABA CAMP">
                                                <div class="caption">
                                                  <div class="holder">
                                                    <a href="#" class="title">ALABA CAMP</a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                              <div class="frame">
                                                <img src="hpm-content/uploads/images/fada-camp.jpg" alt="FADA CAMP">
                                                <div class="caption">
                                                  <div class="holder">
                                                    <a href="#" class="title">FADA CAMP</a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                              <div class="frame">
                                                <img src="hpm-content/uploads/images/igbo-ora.jpg" alt="IGBO ORA">
                                                <div class="caption">
                                                  <div class="holder">
                                                    <a href="#" class="title">IGBO ORA</a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-3 col-sm-4">
                                              <div class="frame">
                                                <img src="hpm-content/uploads/images/mission-school.jpg" alt="St Patrick">
                                                <div class="caption">
                                                  <div class="holder">
                                                    <a href="#" class="title">St Patrick</a>
                                                    <span>St Patricks Grammar School, Basorun, Ibadan.</span>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </section>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="vc_row-full-width vc_clearfix"></div>
                            </div>
                          </div>
                          <div class="comment-box"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer id="footer">
      <section class="broadcast-row">
        <div class="container">
          <div class="mp3-player-box">
            <marquee style="color: #fff;">His Praise Ministries - Where love is the key; and through God, we recover all... </marquee>
          </div>
        </div>
      </section>
      <section class="footer-section-1">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="widget box-1 widget_text">
                <div class="textwidget">
                  <section class="contact-1">
                    <h3>Contact Info</h3>
                    <address class="border-none">
                      <i class="fa fa-bank"></i> Address,<br/>
                      Martola Street, Off Winners Way Bashorun/Ashi Exit, Ibadan, Oyo State, Nigeria.</p>
                        <ul>
                        <li><i class="fa fa-phone"></i>+2348059133844</li>
                        <li><i class="fa fa-phone"></i>+2347087395119</li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i>hispraisemin@yahoo.co.uk</a></li>
                      </ul>
                    </address>
                  </section>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="widget box-1 widget-listed">
                <h3> Quick Links</h3>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="contact">Contact</a></li>
                  <li><a href="profiles#boardmembers">Board Members</a></li>
                  <li><a href="profiles">Profiles</a></ali>
                  <li><a href="index.php#donate">Donate</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-12" id="subresponse">
              <div class="widget box-1 lord_popular_post">
                <h3>Subscribe to our Newsletter</h3>
                <div class="cp-sidebar-content">
                  <p id="subresponse">
                    <?php if (isset($_GET['pb']) && $_GET['pb'] == 'wp2303kjdj43$003dsdw23!^893nwp'){
                      if (isset($_GET['subres']) && $_GET['subres'] == 'success') echo 'You have successfully subscribed to HPM newsletter...';
                      if (isset($_GET['subres']) && $_GET['subres'] == 'failed') echo 'Subscription failed! Try again';
                    } ?>
                  </p>
                  <form method="post" action="index.php?newslettersub&pb=wp2303kjdj43$003dsdw23!^893nwp">
                    <div class="col-md-7 col-sm-12">
                      <input type="email" name="subscriptionemail" placeholder="Enter your Mail"/>
                    </div>
                    <div class="col-md-1 col-sm-12"></div>
                    <div class="col-md-3 col-sm-12">
                      <input type="submit" name="submit-button" value="subscribe" class="btn btn-dark-hover"/>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="footer-section-2">
        <div class="container">
          <a class="ft-logo" title="HPM" href="index.php">
            <img width="190" height="55" src="../hpm-content/uploads/hpm-logo-bottom.png" alt="HPM"/>
          </a>
          <strong class="copyrights"><Copyright> (c) 2017 Copyright HPM All Rights Reserved.</Copyright></strong>
        </div>
      </section>
    </footer>
  </div>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/owl.carousel.min5152.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/jquery.mCustomScrollbar.concat.min5152.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/kinetic5152.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/jquery.isotope5152.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/materialMenu.min5152.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/bxslider.min5152.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/custom5152.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/jquery-filterable5152.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/jquery-easing-1.35152.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/default/bootstrap5152.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/modernizr-latest5152.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/frontend_scripts5152.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/workmark5152.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/jquery-easing-1.35152.js"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/default/jquery.fitvids5152.js"></script>
  <script type="text/javascript" src="hpm-includes/js/jquery/ui/spinner.mine899.js"></script>
  <script type="text/javascript" src="hpm-includes/js/hpm-embed.mina288.js"></script>
  <script type="text/javascript" src="hpm-content/plugins/js_composer/assets/js/dist/js_composer_front.min5fba.js?ver=5.2"></script>
  <script type="text/javascript" src="hpm-content/themes/lord/frontend/js/sorting5152.js"></script>
</body>

</html>
<?php $dbcon->close(); ?>
