<?php require_once('head_start.php'); ?>

    <style type="text/css">
        /*color_dark_1*/
         
        .nd_booking_bg_greydark,
        #nd_booking_slider_range .ui-slider-range,
        #nd_booking_slider_range .ui-slider-handle,
        .ui-tooltip.nd_booking_tooltip_jquery_content,
        .ui-datepicker,
        .ui-datepicker .ui-datepicker-prev span,
        .ui-datepicker .ui-datepicker-next span {
            background-color: #1c1c1d;
        } 
        
        #nd_booking_search_filter_options li p {
            border-bottom: 2px solid #1c1c1d;
        }
        
        #nd_booking_checkout_payment_tab_list li.ui-state-active {
            border-bottom: 1px solid #1c1c1d;
        }
        
        .nd_booking_border_1_solid_greydark_important {
            border: 1px solid #1c1c1d !important;
        }
        /*color_dark_2*/
        
        .nd_booking_bg_greydark_2,
        .ui-datepicker .ui-datepicker-header {
            background-color: #151516;
        }
        
        .nd_booking_bg_greydark_2_important {
            background-color: #151516 !important;
        }
        /*color_1*/
        
        .nd_booking_bg_yellow,
        .nd_booking_btn_pagination_active,
        .ui-datepicker-today a {
            background-color: #c19b77;
        }
        
        .nd_booking_color_yellow_important {
            color: #c19b77 !important;
        }
        /*color_2*/
        
        .nd_booking_bg_red {
            background-color: #c19b77;
        }
    </style>




    <!--START  for post-->
    <style type="text/css">
        /*sidebar*/
        
        .nd_booking_sidebar .widget {
            margin-bottom: 40px;
        }
        
        .nd_booking_sidebar .widget img,
        .nd_booking_sidebar .widget select {
            max-width: 100%;
        }
        
        .nd_booking_sidebar .widget h3 {
            margin-bottom: 20px;
            font-weight: bolder;
        }
        /*search*/
        
        .nd_booking_sidebar .widget.widget_search input[type="text"] {
            width: 100%;
            font-weight: lighter;
        }
        
        .nd_booking_sidebar .widget.widget_search input[type="submit"] {
            margin-top: 20px;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 11px;
            font-family: 'Roboto', sans-serif;
        }
        /*list*/
        
        .nd_booking_sidebar .widget ul {
            margin: 0px;
            padding: 0px;
            list-style: none;
        }
        
        .nd_booking_sidebar .widget>ul>li {
            padding: 10px;
            border-bottom: 1px solid #f1f1f1;
        }
        
        .nd_booking_sidebar .widget>ul>li:last-child {
            padding-bottom: 0px;
            border-bottom: 0px solid #f1f1f1;
        }
        
        .nd_booking_sidebar .widget ul li {
            padding: 10px;
        }
        
        .nd_booking_sidebar .widget ul.children {
            padding: 10px;
        }
        
        .nd_booking_sidebar .widget ul.children:last-child {
            padding-bottom: 0px;
        }
        /*calendar*/
        
        .nd_booking_sidebar .widget.widget_calendar table {
            text-align: center;
            background-color: #1c1c1c;
            width: 100%;
            border: 0px solid #f1f1f1;
            line-height: 20px;
        }
        
        .nd_booking_sidebar .widget.widget_calendar table th {
            padding: 10px 5px;
            font-size: 12px;
        }
        
        .nd_booking_sidebar .widget.widget_calendar table td {
            padding: 10px 5px;
            color: #fff;
            font-size: 12px;
        }
        
        .nd_booking_sidebar .widget.widget_calendar table tbody td a {
            color: #fff;
            padding: 5px;
            border-radius: 0px;
        }
        
        .nd_booking_sidebar .widget.widget_calendar table tfoot td a {
            color: #fff;
            background-color: #c19b77;
            padding: 5px;
            border-radius: 0px;
            font-size: 12px;
            text-transform: uppercase;
        }
        
        .nd_booking_sidebar .widget.widget_calendar table tfoot td {
            padding-bottom: 20px;
        }
        
        .nd_booking_sidebar .widget.widget_calendar table tfoot td#prev {
            text-align: right;
        }
        
        .nd_booking_sidebar .widget.widget_calendar table tfoot td#next {
            text-align: left;
        }
        
        .nd_booking_sidebar .widget.widget_calendar table caption {
            font-size: 20px;
            font-weight: bolder;
            background-color: #151515;
            padding: 20px;
            border: 0px solid #f1f1f1;
            border-bottom: 0px;
        }
        /*color calendar*/
        
        .nd_booking_sidebar .widget.widget_calendar table thead {
            color: #878788;
        }
        
        .nd_booking_sidebar .widget.widget_calendar table tbody td a {
            background-color: #c19b77;
        }
        
        .nd_booking_sidebar .widget.widget_calendar table caption {
            color: #fff;
            font-family: 'Gilda Display', sans-serif;
        }
        /*menu*/
        
        .nd_booking_sidebar .widget div ul {
            margin: 0px;
            padding: 0px;
            list-style: none;
        }
        
        .nd_booking_sidebar .widget div>ul>li {
            padding: 10px;
            border-bottom: 1px solid #f1f1f1;
        }
        
        .nd_booking_sidebar .widget div>ul>li:last-child {
            padding-bottom: 0px;
            border-bottom: 0px solid #f1f1f1;
        }
        
        .nd_booking_sidebar .widget div ul li {
            padding: 10px;
        }
        
        .nd_booking_sidebar .widget div ul.sub-menu {
            padding: 10px;
        }
        
        .nd_booking_sidebar .widget div ul.sub-menu:last-child {
            padding-bottom: 0px;
        }
        /*tag*/
        
        .nd_booking_sidebar .widget.widget_tag_cloud a {
            padding: 8px;
            border: 1px solid #f1f1f1;
            border-radius: 0px;
            display: inline-block;
            margin: 5px;
            margin-left: 0px;
            font-size: 12px !important;
            line-height: 12px;
        }
    </style>
    <!--END css for post-->

    <style type="text/css">
        /*START FONTS FAMILY*/
        
        .nd_options_customizer_fonts .nd_options_first_font,
        .nd_options_customizer_fonts h1,
        .nd_options_customizer_fonts h2,
        .nd_options_customizer_fonts h3,
        .nd_options_customizer_fonts h4,
        .nd_options_customizer_fonts h5,
        .nd_options_customizer_fonts h6 {
            font-family: 'Gilda Display', sans-serif;
        }
        
        .nd_options_customizer_fonts,
        .nd_options_customizer_fonts .nd_options_second_font,
        .nd_options_customizer_fonts p,
        .nd_options_customizer_fonts a,
        .nd_options_customizer_fonts select,
        .nd_options_customizer_fonts textarea,
        .nd_options_customizer_fonts label,
        .nd_options_customizer_fonts input {
            font-family: 'Roboto', sans-serif;
        }
        
        .nd_options_customizer_fonts .nd_options_second_font_important {
            font-family: 'Roboto', sans-serif !important;
        }
        
        .nd_options_customizer_fonts .nd_options_third_font {
            font-family: 'Gilda Display', sans-serif;
        }
        /*START FONTS COLOR*/
        
        .nd_options_customizer_fonts .nd_options_color_greydark,
        .nd_options_customizer_fonts h1,
        .nd_options_customizer_fonts h2,
        .nd_options_customizer_fonts h3,
        .nd_options_customizer_fonts h4,
        .nd_options_customizer_fonts h5,
        .nd_options_customizer_fonts h6 {
            color: #1c1c1d;
        }
        
        .nd_options_customizer_fonts,
        .nd_options_customizer_fonts .nd_options_color_grey,
        .nd_options_customizer_fonts p,
        .nd_options_customizer_fonts a,
        .nd_options_customizer_fonts select,
        .nd_options_customizer_fonts textarea,
        .nd_options_customizer_fonts label,
        .nd_options_customizer_fonts input {
            color: #878788;
        }
        
        .nd_options_color_grey_important {
            color: #878788 !important;
        }
        /*compatibility with plugin Learning*/
        
        #nd_learning_calendar_single_course .ui-datepicker-title {
            font-family: 'Gilda Display', sans-serif;
            color: #1c1c1d;
        }
        
        #nd_learning_calendar_single_course .ui-datepicker-calendar th {
            color: #1c1c1d;
        }
    </style>




    <style type="text/css">
        /*START FORMS STYLES*/
        
        .nd_options_customizer_forms span.wpcf7-not-valid-tip,
        .nd_options_customizer_forms .wpcf7-response-output.wpcf7-validation-errors {
            background-color: #c19b77;
            border-width: 0px;
            border-color: #c19b77;
            border-radius: 0px;
            border-style: solid;
            padding: 5px;
            color: #ffffff;
            margin: 0px;
            margin-top: 10px;
            font-size: 13px;
            line-height: 20px;
        }
        
        .nd_options_customizer_forms .wpcf7-response-output.wpcf7-mail-sent-ok {
            background-color: #c19b77;
            border-width: 0px;
            border-color: #c19b77;
            border-radius: 0px;
            border-style: solid;
            padding: 5px;
            color: #ffffff;
            margin: 0px;
            margin-top: 10px;
            font-size: 13px;
            line-height: 20px;
        }
    </style>




    <style type="text/css">
        /*START FORMS STYLES*/
        
        .nd_options_customizer_forms input[type="text"],
        .nd_options_customizer_forms input[type="email"],
        .nd_options_customizer_forms input[type="url"],
        .nd_options_customizer_forms input[type="tel"],
        .nd_options_customizer_forms input[type="number"],
        .nd_options_customizer_forms input[type="date"],
        .nd_options_customizer_forms input[type="file"],
        .nd_options_customizer_forms input[type="password"],
        .nd_options_customizer_forms select,
        .nd_options_customizer_forms textarea,
        .StripeElement {
            background-color: #f9f9f9;
            border-width: 1px;
            border-color: #f1f1f1;
            border-radius: 0px;
            border-style: solid;
            padding: 10px 20px;
            -webkit-appearance: none;
            color: #878787;
        }
        
        .nd_options_customizer_forms input[type="text"]::-webkit-input-placeholder,
        .nd_options_customizer_forms input[type="email"]::-webkit-input-placeholder,
        .nd_options_customizer_forms input[type="url"]::-webkit-input-placeholder,
        .nd_options_customizer_forms input[type="tel"]::-webkit-input-placeholder,
        .nd_options_customizer_forms input[type="password"]::-webkit-input-placeholder,
        .nd_options_customizer_forms input[type="number"]::-webkit-input-placeholder,
        .nd_options_customizer_forms textarea::-webkit-input-placeholder {
            color: #878787;
        }
        
        .nd_options_customizer_forms select {
            cursor: pointer;
        }
        
        .nd_options_customizer_forms select option {
            padding: 10px 20px;
        }
    </style>




    <style type="text/css">
        /*START FORMS STYLES*/
        
        .nd_options_customizer_forms input[type="submit"] {
            background-color: #c19b77;
            border-width: 0px;
            border-color: #c19b77;
            border-radius: 0px;
            border-style: solid;
            padding: 10px 20px;
            -webkit-appearance: none;
            color: #ffffff;
            cursor: pointer;
            font-family: 'Gilda Display', sans-serif;
        }
    </style>



    <style type="text/css">
        .nd_options_cursor_default_a>a {
            cursor: default;
        }
        
        .nd_options_navigation_type .menu li.nd_options_hot_label>a:after {
            content: "HOT";
            float: right;
            background-color: #c19b76;
            border-radius: 3px;
            color: #fff;
            font-size: 10px;
            line-height: 10px;
            padding: 3px 5px;
        }
        
        .nd_options_navigation_type .menu li.nd_options_best_label>a:after {
            content: "BEST";
            float: right;
            background-color: #c19b76;
            border-radius: 3px;
            color: #fff;
            font-size: 10px;
            line-height: 10px;
            padding: 3px 5px;
        }
        
        .nd_options_navigation_type .menu li.nd_options_new_label>a:after {
            content: "NEW";
            float: right;
            background-color: #c19b76;
            border-radius: 3px;
            color: #fff;
            font-size: 10px;
            line-height: 10px;
            padding: 3px 5px;
        }
        
        .nd_options_customizer_labels_color_new {
            background-color: #c19b76;
        }
    </style>


    <!--START css-->
    <style type="text/css">
        .nd_options_navigation_search_content_form {}
        
        .nd_options_navigation_search_content_form input[type="search"] {
            background: none;
            border: 0px;
            border-bottom: 2px solid #fff;
            color: #fff;
            font-size: 30px;
            line-height: 30px;
        }
        
        .nd_options_navigation_search_content_form input[type="search"]::-webkit-input-placeholder {
            color: #fff;
        }
        
        .nd_options_navigation_search_content_form input[type="submit"] {
            font-size: 25px;
            line-height: 40px;
            margin-left: 20px;
        }
    </style>
    <!--END css-->





    <!--START css-->
    <style type="text/css">
        .nd_options_navigation_2 div>ul {
            list-style: none;
            margin: 0px;
            padding: 0px;
            text-align: right;
        }
        
        .nd_options_navigation_2 div>ul>li {
            display: inline-block;
            padding: 0px;
        }
        
        .nd_options_navigation_2 div>ul>li:after {
            content: "|";
            display: inline-block;
            margin: 0px 20px;
            color: #1c1c1d;
        }
        
        .nd_options_navigation_2 div>ul>li:last-child:after {
            content: "";
            margin: 0px;
        }
        
        .nd_options_navigation_2 div li a {
            color: #878788;
            font-size: 16px;
            line-height: 16px;
            font-family: Gilda Display;
        }
        
        .nd_options_navigation_2 div>ul li:hover>ul.sub-menu {
            display: block;
        }
        
        .nd_options_navigation_2 div>ul li>ul.sub-menu {
            z-index: 999;
            position: absolute;
            margin: 0px;
            padding: 0px;
            list-style: none;
            display: none;
            margin-left: -20px;
            padding-top: 20px;
            width: 190px;
        }
        
        .nd_options_navigation_2 div>ul li>ul.sub-menu>li {
            padding: 15px 20px;
            border-bottom: 1px solid #f1f1f1;
            text-align: left;
            background-color: #fff;
            position: relative;
            box-shadow: 0px 2px 5px #f1f1f1;
            float: left;
            width: 100%;
            box-sizing: border-box;
        }
        
        .nd_options_navigation_2 div>ul li>ul.sub-menu>li:hover {
            background-color: #f9f9f9;
        }
        
        .nd_options_navigation_2 div>ul li>ul.sub-menu>li:last-child {
            border-bottom: 0px solid #000;
        }
        
        .nd_options_navigation_2 div>ul li>ul.sub-menu li a {
            font-size: 14px;
            color: #1c1c1d;
            float: left;
            width: 100%;
        }
        
        .nd_options_navigation_2 div>ul li>ul.sub-menu li>ul.sub-menu {
            margin-left: 170px;
            top: 0;
            padding-top: 0;
            padding-left: 20px;
        }
        /*responsive*/
        
        .nd_options_navigation_2_sidebar div>ul {
            list-style: none;
            margin: 0px;
            padding: 0px;
        }
        
        .nd_options_navigation_2_sidebar div>ul>li {
            display: inline-block;
            width: 100%;
            padding: 0px 0px 20px 0px;
        }
        
        .nd_options_navigation_2_sidebar div li a {
            font-family: Gilda Display;
        }
        
        .nd_options_navigation_2_sidebar div li>a {
            padding: 10px 0px;
            display: inline-block;
            font-size: 24px;
            font-family: Gilda Display;
            text-transform: lowercase;
            color: #fff;
        }
        
        .nd_options_navigation_2_sidebar div li>a::first-letter {
            text-transform: uppercase;
        }
        
        .nd_options_navigation_2_sidebar div>ul li>ul.sub-menu {
            margin: 0px;
            padding: 0px;
            list-style: none;
        }
        
        .nd_options_navigation_2_sidebar div>ul li>ul.sub-menu>li {
            padding: 0px 20px;
            text-align: left;
        }
        
        .nd_options_navigation_2_sidebar div>ul li>ul.sub-menu li a {
            font-size: 14px;
        }
        
        .nd_options_navigation_2_sidebar_content li.nd_options_customizer_labels_color_new {
            padding: 0px !important;
            background-color: transparent !important;
        }
        /*top header*/
        
        .nd_options_navigation_top_header_2 {
            font-size: 13px;
            line-height: 18px;
        }
        
        .nd_options_navigation_top_header_2>ul {
            list-style: none;
            margin: 0px;
            padding: 0px;
        }
        
        .nd_options_navigation_top_header_2>ul>li {
            display: inline-block;
        }
        
        .nd_options_navigation_top_header_2>ul>li:after {
            content: "|";
            display: inline-block;
            margin: 0px 15px;
            font-size: 13px;
        }
        
        .nd_options_navigation_top_header_2>ul>li:last-child:after {
            content: "";
            margin: 0px;
        }
        
        .nd_options_navigation_top_header_2 li a {
            font-size: 13px;
        }
        
        .nd_options_navigation_top_header_2>ul li:hover>ul.nd_options_sub_menu {
            display: block;
        }
        
        .nd_options_navigation_top_header_2>ul li>ul.nd_options_sub_menu {
            padding: 10px 0px 0px 15px;
            position: absolute;
            margin: 0px;
            list-style: none;
            display: none;
            z-index: 9;
        }
        
        .nd_options_navigation_top_header_2>ul li>ul.nd_options_sub_menu>li {
            padding: 7px 15px;
            font-size: 13px;
            border-bottom: 1px solid #595959;
            background-color: #444444;
        }
        
        .nd_options_navigation_top_header_2>ul li>ul.nd_options_sub_menu>li:last-child {
            border-bottom: 0px solid #000;
        }
        
        #nd_options_navigation_top_header_2_left div:last-child div a img {
            margin-right: 0px;
        }
        
        #nd_options_navigation_top_header_2_right div:last-child div a img {
            margin-left: 0px;
        }
        /*arrow for item has children*/
        
        .nd_options_navigation_2 .menu ul.sub-menu li.menu-item-has-children>a:after {
            content: "";
            float: right;
            border-style: solid;
            border-width: 5px 0 5px 5px;
            border-color: transparent transparent transparent #1c1c1d;
            margin-top: 3px;
        }
    </style>
    <!--END css-->






    <!--START  for post-->
    <style type="text/css">
        /*sidebar*/
        
        .wpb_widgetised_column .widget {
            margin-bottom: 40px;
        }
        
        .wpb_widgetised_column .widget img,
        .wpb_widgetised_column .widget select {
            max-width: 100%;
        }
        
        .wpb_widgetised_column .widget h3 {
            margin-bottom: 20px;
            font-weight: normal;
        }
        /*search*/
        
        .wpb_widgetised_column .widget.widget_search input[type="text"] {
            width: 100%;
        }
        
        .wpb_widgetised_column .widget.widget_search input[type="submit"] {
            margin-top: 20px;
        }
        /*list*/
        
        .wpb_widgetised_column .widget ul {
            margin: 0px;
            padding: 0px;
            list-style: none;
        }
        
        .wpb_widgetised_column .widget>ul>li {
            padding: 10px;
            border-bottom: 1px solid #f1f1f1;
        }
        
        .wpb_widgetised_column .widget>ul>li:last-child {
            padding-bottom: 0px;
            border-bottom: 0px solid #f1f1f1;
        }
        
        .wpb_widgetised_column .widget ul li {
            padding: 10px;
        }
        
        .wpb_widgetised_column .widget ul.children {
            padding: 10px;
        }
        
        .wpb_widgetised_column .widget ul.children:last-child {
            padding-bottom: 0px;
        }
        /*calendar*/
        
        .wpb_widgetised_column .widget.widget_calendar table {
            text-align: center;
            background-color: #fff;
            width: 100%;
            border: 1px solid #f1f1f1;
            line-height: 20px;
        }
        
        .wpb_widgetised_column .widget.widget_calendar table th {
            padding: 10px 5px;
        }
        
        .wpb_widgetised_column .widget.widget_calendar table td {
            padding: 10px 5px;
        }
        
        .wpb_widgetised_column .widget.widget_calendar table tbody td a {
            color: #fff;
            padding: 5px;
            border-radius: 3px;
        }
        
        .wpb_widgetised_column .widget.widget_calendar table tfoot td a {
            color: #fff;
            background-color: #444444;
            padding: 5px;
            border-radius: 15px;
            font-size: 13px;
        }
        
        .wpb_widgetised_column .widget.widget_calendar table tfoot td {
            padding-bottom: 20px;
        }
        
        .wpb_widgetised_column .widget.widget_calendar table tfoot td#prev {
            text-align: right;
        }
        
        .wpb_widgetised_column .widget.widget_calendar table tfoot td#next {
            text-align: left;
        }
        
        .wpb_widgetised_column .widget.widget_calendar table caption {
            font-size: 20px;
            font-weight: bolder;
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #f1f1f1;
            border-bottom: 0px;
        }
        /*color calendar*/
        
        .wpb_widgetised_column .widget.widget_calendar table thead {
            color: #1c1c1d;
        }
        
        .wpb_widgetised_column .widget.widget_calendar table tbody td a {
            background-color: #c19b77;
        }
        
        .wpb_widgetised_column .widget.widget_calendar table caption {
            color: #1c1c1d;
            font-family: 'Gilda Display', sans-serif;
        }
        /*menu*/
        
        .wpb_widgetised_column .widget div ul {
            margin: 0px;
            padding: 0px;
            list-style: none;
        }
        
        .wpb_widgetised_column .widget div>ul>li {
            padding: 10px;
            border-bottom: 1px solid #f1f1f1;
        }
        
        .wpb_widgetised_column .widget div>ul>li:last-child {
            padding-bottom: 0px;
            border-bottom: 0px solid #f1f1f1;
        }
        
        .wpb_widgetised_column .widget div ul li {
            padding: 10px;
        }
        
        .wpb_widgetised_column .widget div ul.sub-menu {
            padding: 10px;
        }
        
        .wpb_widgetised_column .widget div ul.sub-menu:last-child {
            padding-bottom: 0px;
        }
        /*tag*/
        
        .wpb_widgetised_column .widget.widget_tag_cloud a {
            padding: 5px 10px;
            border: 1px solid #f1f1f1;
            border-radius: 15px;
            display: inline-block;
            margin: 5px;
            margin-left: 0px;
            font-size: 13px !important;
            line-height: 20px;
        }
    </style>
    <!--END css for post-->



    <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress." />
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
    <meta name="generator" content="Powered by Slider Revolution 5.4.6.3.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="wp-content/uploads/sites/2/2017/09/favicon.jpg" sizes="32x32" />
    <link rel="icon" href="wp-content/uploads/sites/2/2017/09/favicon.jpg" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="wp-content/uploads/sites/2/2017/09/favicon.jpg" />
    <meta name="msapplication-TileImage" content="http://www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/uploads/sites/2/2017/09/favicon.jpg" />
    <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script>
    <style type="text/css" id="wp-custom-css">
        /*
You can add your own CSS here.

Click the help icon above to learn more.
*/
        /*demo label*/
        
        .nd_options_navigation_type .menu li.nd_options_demo_label>a:after {
            content: "DEMO";
            float: right;
            background-color: #c19b76;
            border-radius: 0px;
            color: #fff;
            font-size: 10px;
            line-height: 10px;
            padding: 3px 5px;
        }
        
        .nd_options_navigation_type .menu li.nd_options_new_label>a:after {
            border-radius: 0px;
        }
        /*GENERAL*/
        
        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: lighter;
        }
        /*TOP HEADER*/
        
        #nd_options_navigation_2_top_header .nd_options_grid_6:last-child {
            padding: 0px 15px
        }
        
        #nd_options_navigation_2_top_header .nd_options_grid_6:first-child {
            padding: 0px 15px
        }
        /*responsive*/
        
        .nd_options_navigation_2_sidebar .nd_options_book_now_btn a {
            color: #fff !important;
            font-size: 24px !important;
            font-weight: normal;
        }
        
        .nd_options_navigation_2_sidebar .nd_options_book_now_btn {
            background-color: initial;
        }
        /*HEADER*/
        
        .nd_options_navigation_2 div li a {
            font-size: 14px;
            font-family: 'Roboto';
        }
        
        .nd_options_navigation_2 .menu>li.current-menu-item>a {
            border-bottom: 2px solid #878787;
            color: #fff;
            padding-bottom: 5px
        }
        
        .nd_options_navigation_2 .menu li .sub-menu {
            padding-top: 26px;
        }
        
        .nd_options_navigation_2 .menu li .sub-menu li .sub-menu {
            padding-top: 0px;
        }
        
        #nd_options_navigation_2_sticky_container .menu li .sub-menu {
            padding-top: 21px;
        }
        
        #nd_options_navigation_2_sticky_container .menu li .sub-menu li .sub-menu {
            padding-top: 0px;
        }
        /*HEADER BTN*/
        
        .nd_options_book_now_btn {
            background-color: #fff;
        }
        
        .nd_options_book_now_btn a {
            color: #1c1c1c !important;
            text-transform: uppercase;
            font-size: 11px !important;
            font-weight: bold;
            padding: 0px 15px;
            letter-spacing: 2px;
            border-bottom-width: 0px !important;
        }
        
        .nd_options_navigation_type .menu li.nd_options_best_label>a:after {
            border-radius: 0px !important;
        }
        /*FOOTER*/
        
        #nd_options_footer_4 .wpb_widgetised_column .widget h3,
        #nd_options_footer_4 .wpb_widgetised_column .widget {
            margin-bottom: 0px;
        }
        
        #wpcf7-f253-o1 .wpcf7-validation-errors {
            float: left;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1504096290589 {
            padding-top: 45px !important;
            padding-bottom: 45px !important;
        }
        
        .vc_custom_1504096244356 {
            padding-top: 70px !important;
            padding-bottom: 55px !important;
            background-color: #f9f9f9 !important;
        }
        
        .vc_custom_1504096179172 {
            padding-top: 70px !important;
            padding-bottom: 70px !important;
            background-color: #f9f9f9 !important;
        }
        
        .vc_custom_1503049177500 {
            padding-top: 115px !important;
            padding-bottom: 115px !important;
        }
        
        .vc_custom_1504096112164 {
            padding-top: 70px !important;
            padding-bottom: 55px !important;
            background-color: #f9f9f9 !important;
        }
        
        .vc_custom_1501663038384 {
            margin-top: -220px !important;
        }
        
        .vc_custom_1499939841347 {
            padding-right: 0px !important;
            padding-left: 0px !important;
        }
        
        .vc_custom_1499939848725 {
            padding-right: 0px !important;
            padding-left: 0px !important;
        }
        
        .vc_custom_1503043570592 {
            margin-top: 0px !important;
            margin-right: 0px !important;
            margin-bottom: 0px !important;
            margin-left: 0px !important;
            padding-top: 0px !important;
            padding-right: 0px !important;
            padding-bottom: 0px !important;
            padding-left: 0px !important;
            background-image: url(wp-content/uploads/sites/2/2017/08/parallax-6b4e3.jpg?id=738) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }
        
        .vc_custom_1501664082350 {
            padding-top: 130px !important;
            padding-right: 100px !important;
            padding-bottom: 130px !important;
            padding-left: 100px !important;
            background-color: #1c1c1c !important;
        }
        
        .vc_custom_1504096206452 {
            padding: 70px !important;
        }
        
        .vc_custom_1501077833910 {
            padding-right: 15px !important;
            padding-left: 15px !important;
        }
        
        .vc_custom_1501078196605 {
            padding-right: 15px !important;
            padding-left: 15px !important;
        }
        
        .vc_custom_1501162935387 {
            padding-top: 30px !important;
            padding-right: 20px !important;
            padding-bottom: 30px !important;
            padding-left: 20px !important;
            background-color: #ffffff !important;
        }
        
        .vc_custom_1501067436841 {
            padding-right: 0px !important;
            padding-left: 0px !important;
        }
        
        .vc_custom_1501076362840 {
            padding-right: 0px !important;
            padding-left: 0px !important;
        }
        
        .vc_custom_1501162942419 {
            padding-top: 30px !important;
            padding-right: 20px !important;
            padding-bottom: 30px !important;
            padding-left: 20px !important;
            background-color: #ffffff !important;
        }
        
        .vc_custom_1499939894926 {
            padding-right: 0px !important;
            padding-left: 0px !important;
        }
    </style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
</head>

<body id="start_nicdark_framework" class="home page-template-default page page-id-16 nd_options_customizer_fonts nd_options_customizer_forms wpb-js-composer js-comp-ver-5.1.1 vc_responsive">

    <!--START theme-->
    <div class="nicdark_site nicdark_bg_white nicdark_front_page ">


        <div id="nd_options_site_filter"></div>

        <!--START js-->
        <script type="text/javascript">
            //<![CDATA[

            jQuery(document).ready(function() {

                //START
                jQuery(function($) {

                    //OPEN sidebar content ( navigation 2 )
                    $('.nd_options_open_navigation_2_sidebar_content,.nd_options_open_navigation_3_sidebar_content,.nd_options_open_navigation_4_sidebar_content,.nd_options_open_navigation_5_sidebar_content').on("click", function(event) {
                        $('.nd_options_navigation_2_sidebar_content,.nd_options_navigation_3_sidebar_content,.nd_options_navigation_4_sidebar_content,.nd_options_navigation_5_sidebar_content').css({
                            'right': '0px',
                        });
                    });
                    //CLOSE	sidebar content ( navigation 2 )
                    $('.nd_options_close_navigation_2_sidebar_content,.nd_options_close_navigation_3_sidebar_content,.nd_options_close_navigation_4_sidebar_content,.nd_options_close_navigation_5_sidebar_content').on("click", function(event) {
                        $('.nd_options_navigation_2_sidebar_content,.nd_options_navigation_3_sidebar_content,.nd_options_navigation_4_sidebar_content,.nd_options_navigation_5_sidebar_content').css({
                            'right': '-300px'
                        });
                    });
                    ///////////


                });
                //END

            });

            //]]>
        </script>
        <!--END js-->










        <!--START menu responsive-->
        <div style="background-color: #151516 ;" class="nd_options_navigation_2_sidebar_content nd_options_padding_40 nd_options_box_sizing_border_box nd_options_overflow_hidden nd_options_overflow_y_auto nd_options_transition_all_08_ease nd_options_height_100_percentage nd_options_position_fixed nd_options_width_300 nd_options_right_300_negative nd_options_z_index_999">

            <img alt="" width="25" class="nd_options_close_navigation_2_sidebar_content nd_options_cursor_pointer nd_options_right_20 nd_options_top_20 nd_options_position_absolute" src="wp-content/plugins/nd-shortcodes/addons/customizer/header/header-2/img/icon-close-white.svg">

            <div class="nd_options_navigation_2_sidebar">
                <div class="menu-main-menu-container">
                    <ul id="menu-main-menu" class="menu">
                        <li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-16 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-791"><a href="index.html" aria-current="page">Home</a>
                            <ul class="sub-menu">
                                <li id="menu-item-905" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-16 current_page_item menu-item-905"><a href="index.html" aria-current="page">Home 1</a></li>
                                <li id="menu-item-904" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-904"><a href="#">Home 2</a></li>
                                <li id="menu-item-903" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-903"><a href="#">Home 3</a></li>
                                <li id="menu-item-902" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-902"><a href="#">Home 4</a></li>
                                <li id="menu-item-901" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-901"><a href="#">Home 5</a></li>
                                <li id="menu-item-900" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-900"><a href="#">Home 6</a></li>
                                <li id="menu-item-1312" class="nd_options_new_label menu-item menu-item-type-post_type menu-item-object-page menu-item-1312"><a href="#">Home 7</a></li>
                                <li id="menu-item-1284" class="nd_options_demo_label menu-item menu-item-type-custom menu-item-object-custom menu-item-1284"><a target="_blank" rel="noopener noreferrer" href="http://www.nicdarkthemes.com/themes/hotel/wp/demo/multilingual/">Multilingual</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-794"><a href="search/index.html">Rooms</a>
                            <ul class="sub-menu">
                                <li id="menu-item-1161" class="nd_options_best_label menu-item menu-item-type-post_type menu-item-object-nd_booking_cpt_1 menu-item-1161"><a href="#small-room/index.#">Room Gallery</a></li>
                                <li id="menu-item-1162" class="menu-item menu-item-type-post_type menu-item-object-nd_booking_cpt_1 menu-item-1162"><a href="#room-with-view/index.#">Room Video</a></li>
                                <li id="menu-item-1163" class="menu-item menu-item-type-post_type menu-item-object-nd_booking_cpt_1 menu-item-1163"><a href="#apartment/index.#">Room Default</a></li>
                                <li id="menu-item-803" class="menu-item menu-item-type-post_type menu-item-object-nd_booking_cpt_4 menu-item-803"><a href="branches/hotel-london/index.#">Single Branch</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-801" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-801"><a href="#">About Us</a></li>
                        <li id="menu-item-825" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-825"><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li id="menu-item-826" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-826"><a href="around-hotel/index.#">Around Us</a></li>
                                <li id="menu-item-802" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-802"><a href="terms-and-conditions/index.#">Terms &#038; Conditions</a></li>
                                <li id="menu-item-1166" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1166"><a href="our-services/index.#">Services</a></li>
                                <li id="menu-item-848" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-848"><a href="contact/index.#">Contact</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-849" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-849"><a href="contact/index.#">Contact 1</a></li>
                                        <li id="menu-item-850" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-850"><a href="contact-2/index.#">Contact 2</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-853" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-853"><a target="_blank" rel="noopener noreferrer" href="coming-soon/index.#">Coming Soon</a></li>
                                <li id="menu-item-859" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-859"><a href="restaurant/index.#">Restaurant</a></li>
                                <li id="menu-item-887" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-887"><a href="#">About Us</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-888" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-888"><a href="#">About Us 1</a></li>
                                        <li id="menu-item-876" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-876"><a href="about-us-2/index.#">About Us 2</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-875" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-875"><a href="promotions/index.#">Promotions</a></li>
                                <li id="menu-item-886" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-886"><a href="testimonials/index.#">Testimonials</a></li>
                                <li id="menu-item-945" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-945"><a href="#">Gallery</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-793"><a href="our-news/index.#">News</a>
                            <ul class="sub-menu">
                                <li id="menu-item-800" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-800"><a href="our-news/index.#">Archive</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-1158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1158"><a href="our-news/index.#">Full Width</a></li>
                                        <li id="menu-item-1157" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1157"><a href="our-news-right-sidebar/index.#">Right Sidebar</a></li>
                                        <li id="menu-item-1156" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1156"><a href="our-news-left-sidebar/index.#">Left Sidebar</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-796" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children menu-item-796"><a href="new-website-online/index.#">Single Post</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-797" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-797"><a href="new-website-online/index.#">Right Sidebar</a></li>
                                        <li id="menu-item-798" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-798"><a href="around-us/index.#">Left Sidebar</a></li>
                                        <li id="menu-item-799" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-799"><a href="#">Full Width</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-792" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-792"><a href="contact/index.#">Contact</a>
                            <ul class="sub-menu">
                                <li id="menu-item-836" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-836"><a href="contact/index.html">Contact 1</a></li>
                                <li id="menu-item-837" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-837"><a href="contact-2/index.html">Contact 2</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-1136" class="nd_options_book_now_btn menu-item menu-item-type-post_type menu-item-object-page menu-item-1136"><a href="search/index.html">Book Now</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- END menu responsive -->

        <!--start TOP header-->
        <?php require_once('main_top_header.php');?>
        <!--END TOP header-->

        <!--START navigation-->
        <div id="nd_options_navigation_2_container" class="nd_options_section nd_options_position_relative ">

            <div style="background-color: #1c1c1d ; border-bottom: 1px solid #1c1c1d ;" class="nd_options_section">

                <!--start nd_options_container-->
                <div class="nd_options_container nd_options_clearfix nd_options_position_relative">

                    <div class="nd_options_grid_12 nd_options_display_none_all_responsive">

                        <div style="height: 10px;" class="nd_options_section"></div>

                        <!--LOGO-->
                        
                                <?php require_once('main_header.php'); ?>



                        <div style="height: 10px;" class="nd_options_section"></div>

                    </div>



                    <!--RESPONSIVE-->
                    <div class="nd_options_section nd_options_text_align_center nd_options_display_none nd_options_display_block_responsive">
                        <div class="nd_options_section nd_options_height_20"></div>

                        <a class="nd_options_display_inline_block" href="http://www.nicdarkthemes.com/themes/hotel/wp/demo/hotel"><img alt="" class="nd_options_float_left" width="170" src="wp-content/uploads/sites/2/2017/09/hotel-logo.png"></a>

                        <div class="nd_options_section nd_options_height_10"></div>

                        <div class="nd_options_section">
                            <a class="nd_options_open_navigation_2_sidebar_content nd_options_open_navigation_2_sidebar_content" href="#">
                                <img alt="" class="" width="25" src="wp-content/plugins/nd-shortcodes/addons/customizer/header/img/icon-menu.svg">
                            </a>
                        </div>

                        <div class="nd_options_section nd_options_height_20"></div>
                    </div>
                    <!--RESPONSIVE-->



                </div>
                <!--end container-->

            </div>


        </div>
        <!--END navigation-->




        <!--START STICKY-->
        <!--END STICKY-->









        <!--page margin-->

        <!--start nd_options_container-->
        <div class="nd_options_container nd_options_padding_0_15 nd_options_box_sizing_border_box nd_options_clearfix">


            <!--#post-->
            <div style="float:left; width:100%;" id="post-16" class="post-16 page type-page status-publish hentry">

                <!--automatic title-->

                <!--start content-->
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <link href="http://fonts.googleapis.com/css?family=Roboto:400%2C700%2C500%7CGilda+Display:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
                                <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:#1c1c1c;padding:0px;margin-top:0px;margin-bottom:0px;">
                                    <!-- START REVOLUTION SLIDER 5.4.6.3.1 fullwidth mode -->
                                    <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3.1">
                                        <ul>
                                            <!-- SLIDE  -->
                                            <li data-index="rs-1" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="2000" data-thumb="http://www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/uploads/sites/2/revslider/main-slider/parallax-4-100x50.jpg"
                                                data-rotate="0" data-saveperformance="off" data-title="slide" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                                                data-description="">
                                                <!-- MAIN IMAGE -->
                                                <img src="wp-content/uploads/sites/2/revslider/main-slider/parallax-4.jpg" alt="" title="Home 1" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>
                                                <!-- LAYERS -->

                                                <!-- LAYER NR. 1 -->
                                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-1-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                                    data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":150,"speed":1500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power2.easeInOut"}]'
                                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(18,12,20,0.75);background:linear-gradient(to bottom, rgba(28,28,28,0.2) 0%,rgba(28,28,28,0.7) 100%);">
                                                </div>

                                                <!-- LAYER NR. 2 -->
                                                <p class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','middle','middle','middle']" data-voffset="['120','-150','-100','-100']" data-fontsize="['12','12','14','12']"
                                                    data-lineheight="['12','12','14','12']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":2350,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 12px; line-height: 12px; font-weight: 400; color: #ffffff; letter-spacing: px;font-family:Roboto;letter-spacing:2px;">LUXURY HOTEL & BEST RESORT </p>

                                                <!-- LAYER NR. 3 -->
                                                <h1 class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-1-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','middle','middle','middle']" data-voffset="['190','-10','-10','-10']" data-fontsize="['70','70','50','40']"
                                                    data-lineheight="['90','70','55','45']" data-width="['none','none','none','320']" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":2550,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 70px; line-height: 90px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: px;font-family:Gilda Display;"><strong>ENJOY A LUXURY </br>
EXPERIENCE</strong> </h1>

                                                <!-- LAYER NR. 4 -->
                                                <div class="tp-caption rev-btn  rs-parallaxlevel-4" id="slide-1-layer-6" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','middle','middle','middle']" data-voffset="['400','150','100','100']" data-fontsize="['11','13','13','13']"
                                                    data-lineheight="['12','13','13','13']" data-fontweight="['700','500','500','500']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"#","delay":""}]'
                                                    data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":3850,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","ease":"Power1.easeIn"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);"}]'
                                                    data-textAlign="['left','left','left','left']" data-paddingtop="[15,15,15,15]" data-paddingright="[35,35,35,35]" data-paddingbottom="[15,15,15,15]" data-paddingleft="[35,35,35,35]" style="z-index: 8; white-space: nowrap; font-size: 11px; line-height: 12px; font-weight: 700; color: #ffffff; letter-spacing: px;font-family:Roboto;border-color:rgb(255,255,255);border-style:solid;border-width:2px 2px 2px 2px;letter-spacing:2px;cursor:pointer;">ROOMS E SUITES </div>

                                                <!-- LAYER NR. 5 -->
                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-4" id="slide-1-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','middle','middle','middle']" data-voffset="['160','-130','-80','-80']"
                                                    data-width="30" data-height="1" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":2350,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;background-color:rgb(255,255,255);">
                                                </div>

                                                <!-- LAYER NR. 6 -->
                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-1-layer-10" data-x="['center','center','center','center']" data-hoffset="['-15','-15','-15','-15']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['35','35','35','35']"
                                                    data-width="10" data-height="10" data-whitespace="nowrap" data-type="shape" data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]' data-responsive_offset="on" data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgb(255,255,255);">
                                                </div>

                                                <!-- LAYER NR. 7 -->
                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-1-layer-11" data-x="['center','center','center','center']" data-hoffset="['15','15','15','15']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['35','35','35','35']"
                                                    data-width="10" data-height="10" data-whitespace="nowrap" data-type="shape" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-responsive_offset="on" data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;background-color:rgba(255,255,255,0.5);">
                                                </div>
                                            </li>
                                            <!-- SLIDE  -->
                                            <li data-index="rs-2" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="2000" data-thumb="http://www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/uploads/sites/2/revslider/main-slider/parallax-5-100x50.jpg"
                                                data-rotate="0" data-saveperformance="off" data-title="slide" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                                                data-description="">
                                                <!-- MAIN IMAGE -->
                                                <img src="wp-content/uploads/sites/2/revslider/main-slider/parallax-5.jpg" alt="" title="Home 1" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>
                                                <!-- LAYERS -->

                                                <!-- LAYER NR. 8 -->
                                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-2-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full"
                                                    data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":150,"speed":1500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power2.easeInOut"}]'
                                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgba(18,12,20,0.75);background:linear-gradient(to bottom, rgba(28,28,28,0.2) 0%,rgba(28,28,28,0.7) 100%);">
                                                </div>

                                                <!-- LAYER NR. 9 -->
                                                <p class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-2-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','middle','middle','middle']" data-voffset="['120','-150','-100','-100']" data-fontsize="['12','12','14','12']"
                                                    data-lineheight="['12','12','14','12']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":2350,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 12px; line-height: 12px; font-weight: 400; color: #ffffff; letter-spacing: px;font-family:Roboto;letter-spacing:2px;">LUXURY HOTEL & BEST RESORT </p>

                                                <!-- LAYER NR. 10 -->
                                                <h1 class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-2-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','middle','middle','middle']" data-voffset="['190','-10','-10','-10']" data-fontsize="['70','70','50','40']"
                                                    data-lineheight="['90','70','55','45']" data-width="['none','none','none','320']" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":2550,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; font-size: 70px; line-height: 90px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: px;font-family:Gilda Display;"><strong>ENJOY A LUXURY </br>
EXPERIENCE</strong> </h1>

                                                <!-- LAYER NR. 11 -->
                                                <div class="tp-caption rev-btn  rs-parallaxlevel-4" id="slide-2-layer-6" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','middle','middle','middle']" data-voffset="['400','150','100','100']" data-fontsize="['11','13','13','13']"
                                                    data-lineheight="['12','13','13','13']" data-fontweight="['700','500','500','500']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"#","delay":""}]'
                                                    data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":3850,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","ease":"Power1.easeIn"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);"}]'
                                                    data-textAlign="['left','left','left','left']" data-paddingtop="[15,15,15,15]" data-paddingright="[35,35,35,35]" data-paddingbottom="[15,15,15,15]" data-paddingleft="[35,35,35,35]" style="z-index: 8; white-space: nowrap; font-size: 11px; line-height: 12px; font-weight: 700; color: #ffffff; letter-spacing: px;font-family:Roboto;border-color:rgb(255,255,255);border-style:solid;border-width:2px 2px 2px 2px;letter-spacing:2px;cursor:pointer;">ROOMS E SUITES </div>

                                                <!-- LAYER NR. 12 -->
                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme rs-parallaxlevel-4" id="slide-2-layer-8" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['top','middle','middle','middle']" data-voffset="['160','-130','-80','-80']"
                                                    data-width="30" data-height="1" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on" data-frames='[{"delay":2350,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;background-color:rgb(255,255,255);">
                                                </div>

                                                <!-- LAYER NR. 13 -->
                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-2-layer-10" data-x="['center','center','center','center']" data-hoffset="['-15','-15','-15','-15']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['35','35','35','35']"
                                                    data-width="10" data-height="10" data-whitespace="nowrap" data-type="shape" data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]' data-responsive_offset="on" data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 10;background-color:rgb(255,255,255);">
                                                </div>

                                                <!-- LAYER NR. 14 -->
                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-2-layer-11" data-x="['center','center','center','center']" data-hoffset="['15','15','15','15']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['35','35','35','35']"
                                                    data-width="10" data-height="10" data-whitespace="nowrap" data-type="shape" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-responsive_offset="on" data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 11;background-color:rgba(255,255,255,0.5);">
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                    </div>
                                    <script>
                                        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                        var htmlDivCss = "";
                                        if (htmlDiv) {
                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                        } else {
                                            var htmlDiv = document.createElement("div");
                                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                        }
                                    </script>
                                    <script type="text/javascript">
                                        setREVStartSize({
                                            c: jQuery('#rev_slider_1_1'),
                                            responsiveLevels: [1240, 1024, 778, 480],
                                            gridwidth: [1240, 1024, 778, 480],
                                            gridheight: [786, 768, 960, 720],
                                            sliderLayout: 'fullwidth'
                                        });

                                        var revapi1,
                                            tpj = jQuery;

                                        tpj(document).ready(function() {
                                            if (tpj("#rev_slider_1_1").revolution == undefined) {
                                                revslider_showDoubleJqueryError("#rev_slider_1_1");
                                            } else {
                                                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                                    sliderType: "standard",
                                                    jsFileLocation: "//www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/plugins/revslider/public/assets/js/",
                                                    sliderLayout: "fullwidth",
                                                    dottedOverlay: "none",
                                                    delay: 9000,
                                                    navigation: {
                                                        keyboardNavigation: "off",
                                                        keyboard_direction: "horizontal",
                                                        mouseScrollNavigation: "off",
                                                        mouseScrollReverse: "default",
                                                        onHoverStop: "off",
                                                        touch: {
                                                            touchenabled: "on",
                                                            touchOnDesktop: "off",
                                                            swipe_threshold: 75,
                                                            swipe_min_touches: 50,
                                                            swipe_direction: "horizontal",
                                                            drag_block_vertical: false
                                                        }
                                                    },
                                                    responsiveLevels: [1240, 1024, 778, 480],
                                                    visibilityLevels: [1240, 1024, 778, 480],
                                                    gridwidth: [1240, 1024, 778, 480],
                                                    gridheight: [786, 768, 960, 720],
                                                    lazyType: "none",
                                                    parallax: {
                                                        type: "mouse",
                                                        origo: "enterpoint",
                                                        speed: 1000,
                                                        speedbg: 0,
                                                        speedls: 0,
                                                        levels: [2, 4, 6, 8, 10, 12, 14, 16, 45, 50, 47, 48, 49, 50, 0, 0],
                                                    },
                                                    shadow: 0,
                                                    spinner: "off",
                                                    stopLoop: "on",
                                                    stopAfterLoops: 0,
                                                    stopAtSlide: 1,
                                                    shuffle: "off",
                                                    autoHeight: "off",
                                                    disableProgressBar: "on",
                                                    hideThumbsOnMobile: "off",
                                                    hideSliderAtLimit: 0,
                                                    hideCaptionAtLimit: 0,
                                                    hideAllCaptionAtLilmit: 0,
                                                    debugMode: false,
                                                    fallbacks: {
                                                        simplifyAll: "off",
                                                        nextSlideOnWindowFocus: "off",
                                                        disableFocusListener: false,
                                                    }
                                                });
                                            }

                                        }); /*ready*/
                                    </script>
                                </div>
                                <!-- END REVOLUTION SLIDER -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-2">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper"></div>
                        </div>
                    </div>
                    <div class="nd_options_margin_top_50_first_div_important_responsive wpb_column vc_column_container vc_col-sm-8">
                        <div class="vc_column-inner vc_custom_1501663038384">
                            <div class="wpb_wrapper">

                                <div class="nd_booking_section  ">

                                    <!--START FORM-->
                                    <form action="coming-soon/coming_soon.php" method="post">


                                        <div class="nd_booking_width_75_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_padding_30 nd_booking_box_sizing_border_box nd_booking_bg_white">

                                            <!--check in/out-->
                                            <div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_border_right_2_solid_grey nd_booking_border_0_all_iphone nd_booking_float_left nd_booking_box_sizing_border_box">


                                                <div id="nd_booking_open_calendar_from" class="nd_booking_section   nd_booking_box_sizing_border_box nd_booking_text_align_center nd_booking_cursor_pointer">
                                                    <div class="nd_booking_section  nd_booking_box_sizing_border_box nd_booking_text_align_center">
                                                        <h6 class="nd_options_color_grey nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_size_12">CHECK-IN</h6>
                                                        <div class="nd_booking_section nd_booking_height_15"></div>
                                                        <div class="nd_booking_display_inline_flex ">
                                                            <div class="nd_booking_float_left nd_booking_text_align_right">
                                                                <h1 id="nd_booking_date_number_from_front" class="nd_booking_font_size_50 nd_options_color_greydark nd_booking_font_weight_bold">19</h1>
                                                            </div>
                                                            <div class="nd_booking_float_right nd_booking_text_align_center nd_booking_margin_left_10">
                                                                <h6 id="nd_booking_date_month_from_front" class="nd_options_color_greydark  nd_booking_margin_top_7 nd_booking_font_size_12">Oct</h6>
                                                                <div class="nd_booking_section nd_booking_height_5"></div>
                                                                <img alt="" width="12" src="wp-content/plugins/nd-booking/assets/img/icons/icon-down-arrow-grey.svg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="hidden" id="nd_booking_date_month_from" class="nd_booking_section nd_booking_margin_top_20">
                                                <input type="hidden" id="nd_booking_date_number_from" class="nd_booking_section nd_booking_margin_top_20">
                                                <input placeholder="Check In" class="nd_booking_section nd_booking_border_width_0_important nd_booking_padding_0_important nd_booking_height_0_important" type="text" name="nd_booking_archive_form_date_range_from" id="nd_booking_archive_form_date_range_from"
                                                    value="" />
                                            </div>
                                            <div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_border_right_2_solid_grey nd_booking_border_0_all_iphone nd_booking_float_left  nd_booking_box_sizing_border_box">

                                                <div id="nd_booking_open_calendar_to" class="nd_booking_section  nd_booking_box_sizing_border_box nd_booking_text_align_center nd_booking_cursor_pointer">
                                                    <div class="nd_booking_section  nd_booking_box_sizing_border_box nd_booking_text_align_center">
                                                        <h6 class="nd_options_color_grey nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_size_12 nd_booking_margin_top_20_all_iphone">CHECK-OUT</h6>
                                                        <div class="nd_booking_section nd_booking_height_15"></div>
                                                        <div class="nd_booking_display_inline_flex ">
                                                            <div class="nd_booking_float_left nd_booking_text_align_right">
                                                                <h1 id="nd_booking_date_number_to_front" class="nd_booking_font_size_50 nd_options_color_greydark nd_booking_font_weight_bold">20</h1>
                                                            </div>
                                                            <div class="nd_booking_float_right nd_booking_text_align_center nd_booking_margin_left_10">
                                                                <h6 id="nd_booking_date_month_to_front" class="nd_options_color_greydark  nd_booking_margin_top_7 nd_booking_font_size_12">Oct</h6>
                                                                <div class="nd_booking_section nd_booking_height_5"></div>
                                                                <img alt="" width="12" src="wp-content/plugins/nd-booking/assets/img/icons/icon-down-arrow-grey.svg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="hidden" id="nd_booking_date_month_to" class="nd_booking_section nd_booking_margin_top_20">
                                                <input type="hidden" id="nd_booking_date_number_to" class="nd_booking_section nd_booking_margin_top_20">
                                                <input placeholder="Check Out" class="nd_booking_section nd_booking_border_width_0_important nd_booking_padding_0_important nd_booking_height_0_important" type="text" name="nd_booking_archive_form_date_range_to" id="nd_booking_archive_form_date_range_to"
                                                    value="" />

                                            </div>

                                            <script type="text/javascript">
                                                //<![CDATA[
                                                jQuery(document).ready(function() {

                                                    jQuery(function($) {

                                                        $("#nd_booking_archive_form_date_range_from").datepicker({
                                                            defaultDate: "+1w",
                                                            minDate: 0,
                                                            altField: "#nd_booking_date_month_from",
                                                            altFormat: "M",
                                                            firstDay: 0,
                                                            dateFormat: "mm/dd/yy",
                                                            monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                                                            monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Maj", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                                            dayNamesMin: ["SU", "MO", "TU", "WE", "TH", "FR", "SA"],
                                                            nextText: "NEXT",
                                                            prevText: "PREV",
                                                            changeMonth: false,
                                                            numberOfMonths: 1,
                                                            onClose: function() {
                                                                var minDate = $(this).datepicker("getDate");
                                                                var newMin = new Date(minDate.setDate(minDate.getDate() + 1));
                                                                $("#nd_booking_archive_form_date_range_to").datepicker("option", "minDate", newMin);

                                                                var nd_booking_input_date_from = $("#nd_booking_archive_form_date_range_from").val();
                                                                var nd_booking_date_number_from = nd_booking_input_date_from.substring(3, 5);
                                                                $("#nd_booking_date_number_from").val(nd_booking_date_number_from);
                                                                var nd_booking_input_date_to = $("#nd_booking_archive_form_date_range_to").val();
                                                                var nd_booking_date_number_to = nd_booking_input_date_to.substring(3, 5);
                                                                $("#nd_booking_date_number_to").val(nd_booking_date_number_to);

                                                                $("#nd_booking_date_number_from_front").text(nd_booking_date_number_from);
                                                                var nd_booking_date_month_from = $("#nd_booking_date_month_from").val();
                                                                $("#nd_booking_date_month_from_front").text(nd_booking_date_month_from);

                                                                $("#nd_booking_date_number_to_front").text(nd_booking_date_number_to);
                                                                var nd_booking_date_month_to = $("#nd_booking_date_month_to").val();
                                                                $("#nd_booking_date_month_to_front").text(nd_booking_date_month_to);

                                                            }
                                                        });


                                                        $("#nd_booking_archive_form_date_range_to").datepicker({
                                                            defaultDate: "+1w",
                                                            altField: "#nd_booking_date_month_to",
                                                            altFormat: "M",
                                                            minDate: "+1d",
                                                            monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                                                            monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Maj", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                                            dayNamesMin: ["SU", "MO", "TU", "WE", "TH", "FR", "SA"],
                                                            nextText: "NEXT",
                                                            prevText: "PREV",
                                                            changeMonth: false,
                                                            firstDay: 0,
                                                            dateFormat: "mm/dd/yy",
                                                            numberOfMonths: 1,
                                                            onClose: function() {

                                                                var nd_booking_input_date_from = $("#nd_booking_archive_form_date_range_from").val();
                                                                var nd_booking_date_number_from = nd_booking_input_date_from.substring(3, 5);
                                                                $("#nd_booking_date_number_from").val(nd_booking_date_number_from);
                                                                var nd_booking_input_date_to = $("#nd_booking_archive_form_date_range_to").val();
                                                                var nd_booking_date_number_to = nd_booking_input_date_to.substring(3, 5);
                                                                $("#nd_booking_date_number_to").val(nd_booking_date_number_to);

                                                                $("#nd_booking_date_number_from_front").text(nd_booking_date_number_from);
                                                                var nd_booking_date_month_from = $("#nd_booking_date_month_from").val();
                                                                $("#nd_booking_date_month_from_front").text(nd_booking_date_month_from);

                                                                $("#nd_booking_date_number_to_front").text(nd_booking_date_number_to);
                                                                var nd_booking_date_month_to = $("#nd_booking_date_month_to").val();
                                                                $("#nd_booking_date_month_to_front").text(nd_booking_date_month_to);

                                                            }
                                                        });

                                                        $("#nd_booking_archive_form_date_range_from").datepicker("setDate", "+0");
                                                        $("#nd_booking_archive_form_date_range_to").datepicker("setDate", "+1");

                                                        function nd_booking_get_nights() {
                                                            var nd_booking_archive_form_date_range_from = $("#nd_booking_archive_form_date_range_from").val();
                                                            var nd_booking_archive_form_date_range_to = $("#nd_booking_archive_form_date_range_to").val();
                                                            var nd_booking_start = new Date(nd_booking_archive_form_date_range_from);
                                                            var nd_booking_end = new Date(nd_booking_archive_form_date_range_to);
                                                            var nd_booking_nights_number = (nd_booking_end - nd_booking_start) / 1000 / 60 / 60 / 24;
                                                            $(".nd_booking_nights_number").text(nd_booking_nights_number);
                                                        }

                                                        $("#nd_booking_open_calendar_from").click(function() {
                                                            $("#nd_booking_archive_form_date_range_from").datepicker("show");
                                                        });
                                                        $("#nd_booking_open_calendar_to").click(function() {
                                                            $("#nd_booking_archive_form_date_range_to").datepicker("show");
                                                        });

                                                    });

                                                });
                                                //]]&gt;
                                            </script>
                                            <!--check in/out-->



                                            <!--guests-->
                                            <div class="nd_booking_width_33_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left  nd_booking_box_sizing_border_box">
                                                <div class="nd_booking_section  nd_booking_box_sizing_border_box nd_booking_text_align_center">
                                                    <div class="nd_booking_section  nd_booking_box_sizing_border_box nd_booking_text_align_center">
                                                        <h6 class="nd_options_color_grey nd_options_second_font nd_booking_letter_spacing_2 nd_booking_font_size_12 nd_booking_margin_top_20_all_iphone">GUESTS</h6>
                                                        <div class="nd_booking_section nd_booking_height_15"></div>
                                                        <div class="nd_booking_display_inline_flex ">
                                                            <div class="nd_booking_float_left nd_booking_text_align_right">
                                                                <h1 class="nd_booking_font_size_50 nd_booking_color_greydark nd_booking_guests_number nd_booking_font_weight_bold">1</h1>
                                                            </div>
                                                            <div class="nd_booking_float_right nd_booking_text_align_center nd_booking_margin_left_10">
                                                                <div class="nd_booking_section nd_booking_height_7"></div>
                                                                <div class="nd_booking_section">
                                                                    <img class="nd_booking_float_right nd_booking_guests_increase nd_booking_cursor_pointer" style="transform: rotate(180deg);" alt="" width="12" src="wp-content/plugins/nd-booking/assets/img/icons/icon-down-arrow-grey.svg">
                                                                </div>
                                                                <div class="nd_booking_section nd_booking_height_10"></div>
                                                                <div class="nd_booking_section">
                                                                    <img class="nd_booking_float_right nd_booking_guests_decrease nd_booking_cursor_pointer" alt="" width="12" src="wp-content/plugins/nd-booking/assets/img/icons/icon-down-arrow-grey.svg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="nd_booking_display_none" for="nd_booking_archive_form_guests">Guests :</label>
                                                <input placeholder="Guests" class="nd_booking_section nd_booking_display_none" type="number" name="nd_booking_archive_form_guests" id="nd_booking_archive_form_guests" min="1" value="" />
                                            </div>
                                            <script type="text/javascript">
                                                //<![CDATA[
                                                jQuery(document).ready(function() {

                                                    jQuery(function($) {

                                                        $(".nd_booking_guests_increase").click(function() {
                                                            var value = $(".nd_booking_guests_number").text();
                                                            value++;
                                                            $(".nd_booking_guests_number").text(value);
                                                            $("#nd_booking_archive_form_guests").val(value);
                                                        });

                                                        $(".nd_booking_guests_decrease").click(function() {
                                                            var value = $(".nd_booking_guests_number").text();

                                                            if (value > 1) {
                                                                value--;
                                                                $(".nd_booking_guests_number").text(value);
                                                                $("#nd_booking_archive_form_guests").val(value);
                                                            }

                                                        });

                                                    });

                                                });
                                                //]]&gt;
                                            </script>
                                            <!--guests-->


                                        </div>



                                        <div class="nd_booking_width_25_percentage nd_booking_width_100_percentage_all_iphone nd_booking_float_left nd_booking_text_align_center nd_booking_bg_greydark">

                                            <input style="padding: 51px 30px; background-color:#1c1c1c;" class="nd_options_color_white nd_options_second_font_important nd_booking_width_100_percentage nd_booking_font_weight_lighter nd_booking_letter_spacing_2 nd_booking_font_size_12 nd_booking_line_height_18 nd_booking_white_space_normal"
                                                type="submit" value="CHECK AVAILABILITY">

                                        </div>


                                    </form>
                                    <!--END FORM-->

                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-2">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper"></div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1504096290589 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 25px;" class="nicdark_section"></div>
                                <p style="color:#878787; padding:px; text-align:center; font-size:14px; line-height:27px; letter-spacing: 2px; font-weight:lighter;" class=" nd_options_second_font ">HOTEL BAYVIEW</p>
                                <div style="background-color:; height: 20px;" class="nicdark_section"></div>
                                <h1 style="color:#1c1c1d; padding:px; text-align:center; font-size:80px; line-height:80px; letter-spacing: px; font-weight:normal;" class="nd_options_font_size_40_important_all_iphone nd_options_line_height_40_important_all_iphone nd_options_first_font ">Relax in our Resort</h1>
                                <p style="color:; padding:40px; text-align:center; font-size:px; line-height:px; letter-spacing: px; font-weight:lighter;" class=" nd_options_second_font ">Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis.</p>
                                <div class="nd_options_section nd_options_text_align_center">
                                    <a style="border: px solid ; border-radius:px; letter-spacing:2px; line-height:11px; font-size:11px; background-color:#c19b76; padding:15px 35px; margin:; color:#ffffff;" rel="" href="#" class="nicdark_display_inline_block  nd_options_font_weight_bold nd_options_second_font  ">ABOUT US</a>
                                </div>
                                <div style="background-color:; height: 25px;" class="nicdark_section"></div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div style="background-color:; height: 25px;" class="nicdark_section"></div>
                                <div style="text-align:center;" class="nd_options_section">
                                    <img alt="" style="width:100%;" class=" nd_options_margin_0 nd_options_padding_0 " src="wp-content/uploads/sites/2/2017/06/img-1-1024x963.jpg">
                                </div>
                                <div style="background-color:; height: 25px;" class="nicdark_section"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1504096244356 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <h6 style="color:#878787; padding:px; text-align:center; font-size:12px; line-height:12px; letter-spacing: 2px; font-weight:lighter;" class=" nd_options_second_font ">LUXURY HOTEL</h6>
                                <div style="background-color:; height: 10px;" class="nicdark_section"></div>
                                <div class="nd_options_section nd_options_line_height_0  nd_options_text_align_center ">
                                    <span style="height:1px; width:30px; background-color:#878787;" class="nd_options_display_inline_block"></span>
                                </div>
                                <div style="background-color:; height: 30px;" class="nicdark_section"></div>
                                <h1 style="color:#1c1c1c; padding:px; text-align:center; font-size:55px; line-height:px; letter-spacing: px; font-weight:normal;" class="nd_options_font_size_40_important_all_iphone nd_options_line_height_40_important_all_iphone nd_options_first_font ">Best Rooms</h1>
                                <div style="background-color:; height: 45px;" class="nicdark_section"></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner vc_custom_1499939841347">
                                            <div class="wpb_wrapper">

                                                <script type="text/javascript">
                                                    //<![CDATA[

                                                    jQuery(document).ready(function() {

                                                        //START masonry
                                                        jQuery(function($) {

                                                            //Masonry
                                                            var $nd_booking_masonry_content = $(".nd_booking_masonry_content").imagesLoaded(function() {
                                                                // init Masonry after all images have loaded
                                                                $nd_booking_masonry_content.masonry({
                                                                    itemSelector: ".nd_booking_masonry_item"
                                                                });
                                                            });

                                                        });
                                                        //END masonry

                                                    });

                                                    //]]&gt;
                                                </script>

                                                <div class="nd_booking_section nd_booking_masonry_content  ">

                                                    <div id="nd_booking_archive_cpt_1_single_96" class="nd_booking_masonry_item nd_booking_width_100_percentage nd_booking_width_100_percentage_responsive">

                                                        <div class="nd_booking_section nd_booking_padding_15 nd_booking_box_sizing_border_box">

                                                            <div class="nd_booking_section nd_booking_border_1_solid_grey nd_booking_bg_white">



                                                                <div class="nd_booking_section nd_booking_position_relative">

                                                                    <img alt="" class="nd_booking_section" src="wp-content/uploads/sites/2/2017/06/room-1-1110x611.jpg">

                                                                    <div class="nd_booking_bg_greydark_alpha_gradient_3 nd_booking_position_absolute nd_booking_left_0 nd_booking_height_100_percentage nd_booking_width_100_percentage nd_booking_padding_30 nd_booking_box_sizing_border_box">
                                                                        <div class="nd_booking_position_absolute nd_booking_bottom_20">
                                                                            <p class="nd_options_color_white nd_booking_margin_right_10 nd_booking_float_left nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">Hotel Rome</p><img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="10" src="wp-content/plugins/nd-booking/assets/img/icons/icon-star-full-white.svg">
                                                                            <img alt="" class="nd_booking_margin_right_5 nd_booking_float_left" width="10" src="wp-content/plugins/nd-booking/assets/img/icons/icon-star-full-white.svg"><img alt="" class="nd_booking_margin_right_5 nd_booking_float_left"
                                                                                width="10" src="wp-content/plugins/nd-booking/assets/img/icons/icon-star-full-white.svg">
                                                                        </div>
                                                                    </div>

                                                                </div>




                                                                <div class="nd_booking_section nd_booking_padding_30 nd_booking_box_sizing_border_box">

                                                                    <h1>Small Room</h1>
                                                                    <div class="nd_booking_section nd_booking_height_10"></div>

                                                                    <div class="nd_booking_section">
                                                                        <div class="nd_booking_display_table nd_booking_float_left">
                                                                            <img alt="" class="nd_booking_margin_right_10 nd_booking_display_table_cell nd_booking_vertical_align_middle" width="23" src="wp-content/plugins/nd-booking/assets/img/icons/icon-user-grey.svg">
                                                                            <p class="  nd_booking_display_table_cell nd_booking_vertical_align_middle nd_booking_font_size_12 nd_booking_line_height_26">1 GUESTS</p>
                                                                            <img alt="" class="nd_booking_margin_right_10 nd_booking_margin_left_20 nd_booking_display_table_cell nd_booking_vertical_align_middle" width="20" src="wp-content/plugins/nd-booking/assets/img/icons/icon-plan-grey.svg">
                                                                            <p class="  nd_booking_display_table_cell nd_booking_vertical_align_middle nd_booking_font_size_12 nd_booking_line_height_26">15 Ft²</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="nd_booking_section nd_booking_height_20"></div>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel molestie nisl. Duis ac mi leo.</p>
                                                                    <div class="nd_booking_section nd_booking_height_20"></div>
                                                                    <a style="background-color: #1c1c1c;" href="#small-room/index.html" class="nd_booking_padding_15_30_important nd_options_second_font_important nd_booking_border_radius_0_important nd_options_color_white nd_booking_cursor_pointer nd_booking_display_inline_block nd_booking_font_size_11 nd_booking_font_weight_bold nd_booking_letter_spacing_2">BOOK <span class="nd_booking_display_none_all_iphone">NOW</span> FROM 30 $</a>

                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner vc_custom_1499939848725">
                                            <div class="wpb_wrapper">

                                                <script type="text/javascript">
                                                    //<![CDATA[

                                                    jQuery(document).ready(function() {

                                                        //START masonry
                                                        jQuery(function($) {

                                                            //Masonry
                                                            var $nd_booking_masonry_content = $(".nd_booking_masonry_content").imagesLoaded(function() {
                                                                // init Masonry after all images have loaded
                                                                $nd_booking_masonry_content.masonry({
                                                                    itemSelector: ".nd_booking_masonry_item"
                                                                });
                                                            });

                                                        });
                                                        //END masonry

                                                    });

                                                    //]]&gt;
                                                </script>

                                                <div class="nd_booking_section nd_booking_masonry_content  ">

                                                    <div id="nd_booking_archive_cpt_1_single_52" class="nd_booking_masonry_item nd_booking_width_50_percentage nd_booking_float_left nd_booking_width_100_percentage_responsive">

                                                        <div class="nd_booking_section nd_booking_padding_15 nd_booking_box_sizing_border_box">

                                                            <div class="nd_booking_section nd_booking_border_1_solid_grey nd_booking_bg_white">



                                                                <a href="#family-room/index.html">
                                                                    <div class="nd_booking_section nd_booking_position_relative">

                                                                        <img alt="" class="nd_booking_section" src="wp-content/uploads/sites/2/2017/06/room-6-720x720.jpg">

                                                                        <div class="nd_booking_bg_greydark_alpha_gradient_3 nd_booking_position_absolute nd_booking_left_0 nd_booking_height_100_percentage nd_booking_width_100_percentage nd_booking_padding_30 nd_booking_box_sizing_border_box">
                                                                            <div class="nd_booking_position_absolute nd_booking_bottom_20">


                                                                                <div class="nd_booking_display_table nd_booking_float_left">
                                                                                    <p class="nd_booking_display_table_cell nd_booking_padding_right_20 nd_booking_vertical_align_middle  nd_options_color_white nd_booking_margin_right_10  nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">Family Room</p>
                                                                                    <p style="background-color:#c19b76;" class="nd_booking_display_table_cell nd_booking_vertical_align_middle  nd_options_color_white  nd_booking_font_size_11 nd_booking_padding_3_5 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">FROM 30 $</p>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </a>




                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div id="nd_booking_archive_cpt_1_single_73" class="nd_booking_masonry_item nd_booking_width_50_percentage nd_booking_float_left nd_booking_width_100_percentage_responsive">

                                                        <div class="nd_booking_section nd_booking_padding_15 nd_booking_box_sizing_border_box">

                                                            <div class="nd_booking_section nd_booking_border_1_solid_grey nd_booking_bg_white">



                                                                <a href="#double-room/index.html">
                                                                    <div class="nd_booking_section nd_booking_position_relative">

                                                                        <img alt="" class="nd_booking_section" src="wp-content/uploads/sites/2/2017/06/room-5-720x720.jpg">

                                                                        <div class="nd_booking_bg_greydark_alpha_gradient_3 nd_booking_position_absolute nd_booking_left_0 nd_booking_height_100_percentage nd_booking_width_100_percentage nd_booking_padding_30 nd_booking_box_sizing_border_box">
                                                                            <div class="nd_booking_position_absolute nd_booking_bottom_20">


                                                                                <div class="nd_booking_display_table nd_booking_float_left">
                                                                                    <p class="nd_booking_display_table_cell nd_booking_padding_right_20 nd_booking_vertical_align_middle  nd_options_color_white nd_booking_margin_right_10  nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">Double Room</p>
                                                                                    <p style="background-color:#c19b76;" class="nd_booking_display_table_cell nd_booking_vertical_align_middle  nd_options_color_white  nd_booking_font_size_11 nd_booking_padding_3_5 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">FROM 25 $</p>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </a>




                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div id="nd_booking_archive_cpt_1_single_93" class="nd_booking_masonry_item nd_booking_width_50_percentage nd_booking_float_left nd_booking_width_100_percentage_responsive">

                                                        <div class="nd_booking_section nd_booking_padding_15 nd_booking_box_sizing_border_box">

                                                            <div class="nd_booking_section nd_booking_border_1_solid_grey nd_booking_bg_white">



                                                                <a href="#luxury-room/index.html">
                                                                    <div class="nd_booking_section nd_booking_position_relative">

                                                                        <img alt="" class="nd_booking_section" src="wp-content/uploads/sites/2/2017/06/room-4-720x720.jpg">

                                                                        <div class="nd_booking_bg_greydark_alpha_gradient_3 nd_booking_position_absolute nd_booking_left_0 nd_booking_height_100_percentage nd_booking_width_100_percentage nd_booking_padding_30 nd_booking_box_sizing_border_box">
                                                                            <div class="nd_booking_position_absolute nd_booking_bottom_20">


                                                                                <div class="nd_booking_display_table nd_booking_float_left">
                                                                                    <p class="nd_booking_display_table_cell nd_booking_padding_right_20 nd_booking_vertical_align_middle  nd_options_color_white nd_booking_margin_right_10  nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">Luxury Room</p>
                                                                                    <p style="background-color:#c19b76;" class="nd_booking_display_table_cell nd_booking_vertical_align_middle  nd_options_color_white  nd_booking_font_size_11 nd_booking_padding_3_5 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">FROM 100 $</p>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </a>




                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div id="nd_booking_archive_cpt_1_single_94" class="nd_booking_masonry_item nd_booking_width_50_percentage nd_booking_float_left nd_booking_width_100_percentage_responsive">

                                                        <div class="nd_booking_section nd_booking_padding_15 nd_booking_box_sizing_border_box">

                                                            <div class="nd_booking_section nd_booking_border_1_solid_grey nd_booking_bg_white">



                                                                <a href="#apartment/index.html">
                                                                    <div class="nd_booking_section nd_booking_position_relative">

                                                                        <img alt="" class="nd_booking_section" src="wp-content/uploads/sites/2/2017/06/room-3-720x720.jpg">

                                                                        <div class="nd_booking_bg_greydark_alpha_gradient_3 nd_booking_position_absolute nd_booking_left_0 nd_booking_height_100_percentage nd_booking_width_100_percentage nd_booking_padding_30 nd_booking_box_sizing_border_box">
                                                                            <div class="nd_booking_position_absolute nd_booking_bottom_20">


                                                                                <div class="nd_booking_display_table nd_booking_float_left">
                                                                                    <p class="nd_booking_display_table_cell nd_booking_padding_right_20 nd_booking_vertical_align_middle  nd_options_color_white nd_booking_margin_right_10  nd_booking_font_size_11 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">Apartment</p>
                                                                                    <p style="background-color:#c19b76;" class="nd_booking_display_table_cell nd_booking_vertical_align_middle  nd_options_color_white  nd_booking_font_size_11 nd_booking_padding_3_5 nd_booking_letter_spacing_2 nd_booking_text_transform_uppercase">FROM 80 $</p>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </a>




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
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                        <div class="vc_column-inner vc_custom_1503043570592">
                            <div class="wpb_wrapper"></div>
                        </div>
                    </div>
                    <div class="nd_options_padding_50_first_div_important_all_iphone wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                        <div class="vc_column-inner vc_custom_1501664082350">
                            <div class="wpb_wrapper">
                                <h6 style="color:#ffffff; padding:px; text-align:; font-size:12px; line-height:12px; letter-spacing: 2px; font-weight:lighter;" class=" nd_options_second_font ">LUXURY HOTEL &amp; BEST RESORT</h6>
                                <div style="background-color:; height: 20px;" class="nicdark_section"></div>
                                <h1 style="color:#ffffff; padding:px; text-align:; font-size:80px; line-height:80px; letter-spacing: px; font-weight:normal;" class="nd_options_font_size_40_important_all_iphone nd_options_line_height_40_important_all_iphone nd_options_first_font ">Discover our</h1>
                                <h1 style="color:#c19b76; padding:px; text-align:; font-size:80px; line-height:80px; letter-spacing: px; font-weight:normal;" class="nd_options_font_size_40_important_all_iphone nd_options_line_height_40_important_all_iphone nd_options_first_font ">Rooms</h1>
                                <div style="background-color:; height: 50px;" class="nicdark_section"></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <p style="color:; padding:px; text-align:; font-size:px; line-height:px; letter-spacing: px; font-weight:lighter;" class=" nd_options_second_font "> Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis. Blandit vel sapien vitae, condimentum ultricies magna et orci ut et lobortis, Phasellus
                                                    enim
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <p style="color:; padding:px; text-align:; font-size:px; line-height:px; letter-spacing: px; font-weight:lighter;" class=" nd_options_second_font "> Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis. Blandit vel sapien vitae, condimentum ultricies magna et orci ut et lobortis, Phasellus
                                                    enim
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="background-color:; height: 50px;" class="nicdark_section"></div>

                                <a style="border: px solid ; border-radius:px; letter-spacing:2px; line-height:11px; font-size:11px; background-color:#151515; padding:15px 35px; margin:; color:#ffffff;" rel="" href="#small-room/index.html" class="nicdark_display_inline_block nd_options_float_left nd_options_font_weight_bold nd_options_second_font  ">CHECK ALL PACKAGES</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="nd_options_padding_20_first_div_important_all_iphone wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner vc_custom_1504096206452">
                            <div class="wpb_wrapper">
                                <h2 style="color:#1c1c1c; padding:px; text-align:center; font-size:25px; line-height:45px; letter-spacing: px; font-weight:normal;" class="nd_options_font_size_20_important_all_iphone nd_options_line_height_40_important_all_iphone nd_options_first_font ">Phasellus enim libero, blandit vel sapien vitae, condimentumultricies magna et. Best services orci ut et lobortis. Blandit vel sapienvitae, condimentum</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1504096179172 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12" id="section_slides">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1501077833910 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1501162935387">
                                            <div class="wpb_wrapper">
                                                <h6 style="color:#1c1c1c; padding:px; text-align:center; font-size:12px; line-height:12px; letter-spacing: 2px; font-weight:lighter;" class=" nd_options_second_font ">FINE FOOD</h6>
                                                <div style="background-color:; height: 10px;" class="nicdark_section"></div>
                                                <div class="nd_options_section nd_options_line_height_0  nd_options_text_align_center ">
                                                    <span style="height:1px; width:30px; background-color:#878787;" class="nd_options_display_inline_block"></span>
                                                </div>
                                                <div style="background-color:; height: 20px;" class="nicdark_section"></div>
                                                <h1 style="color:#1c1c1c; padding:px; text-align:center; font-size:35px; line-height:px; letter-spacing: px; font-weight:normal;" class=" nd_options_first_font ">Restaurant</h1>
                                                <p style="color:#878787; padding:50px; text-align:center; font-size:14px; line-height:27px; letter-spacing: 1px; font-weight:lighter;" class="nd_options_padding_20_responsive_important nd_options_second_font ">Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis. Phasellus enim libero, blandit.</p>
                                                <div class="nd_options_section nd_options_text_align_center">
                                                    <a style="border: 2px solid #c19b76; border-radius:px; letter-spacing:2px; line-height:11px; font-size:11px; background-color:; padding:15px 35px; margin:; color:#c19b76;" rel="" href="restaurant/index.html" class="nicdark_display_inline_block  nd_options_font_weight_bold nd_options_second_font  ">READ MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner vc_custom_1501067436841">
                                            <div class="wpb_wrapper">
                                                <link href="http://fonts.googleapis.com/css?family=Roboto:400%2C700%2C500%7CGilda+Display:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
                                                <div id="rev_slider_2_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                                    <!-- START REVOLUTION SLIDER 5.4.6.3.1 auto mode -->
                                                    <div id="rev_slider_2_2" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3.1">
                                                        <ul>
                                                            <!-- SLIDE  -->
                                                            <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                                                data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                <!-- MAIN IMAGE -->
                                                                <img src="wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="Home 1" data-lazyload="http://www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/plugins/revslider/admin/assets/images/transparent.png" data-bgposition="center center"
                                                                    data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                <!-- LAYERS -->

                                                                <!-- LAYER NR. 1 -->
                                                                <div class="tp-caption   tp-resizeme" id="slide-3-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on"
                                                                    data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]'
                                                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;"><img src="wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" data-ww="1200px" data-hh="1000px" width="1224" height="1014" data-lazyload="http://www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/uploads/sites/2/revslider/home-section/img-16.jpg"
                                                                        data-no-retina> </div>

                                                                <!-- LAYER NR. 2 -->
                                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-3-layer-16" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['full','full','full','full']" data-height="['full','full','full','full']" data-type="shape"
                                                                    data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(0,0,0,0.5);background:linear-gradient(to bottom, rgba(28, 28, 28, 0) 50%,rgba(28, 28, 28, 0.9) 100%);">
                                                                </div>

                                                                <!-- LAYER NR. 3 -->
                                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-3-layer-14" data-x="center" data-hoffset="20" data-y="bottom" data-voffset="20" data-width="['20']" data-height="['20']" data-type="shape" data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]'
                                                                    data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgb(193,155,118);">
                                                                </div>

                                                                <!-- LAYER NR. 4 -->
                                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-3-layer-15" data-x="center" data-hoffset="-20" data-y="bottom" data-voffset="20" data-width="['20']" data-height="['20']" data-type="shape" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                                                                    data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;background-color:rgb(255,255,255);">
                                                                </div>
                                                            </li>
                                                            <!-- SLIDE  -->
                                                            <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                                                data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                <!-- MAIN IMAGE -->
                                                                <img src="wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="Home 1" data-lazyload="http://www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/plugins/revslider/admin/assets/images/transparent.png" data-bgposition="center center"
                                                                    data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                <!-- LAYERS -->

                                                                <!-- LAYER NR. 5 -->
                                                                <div class="tp-caption   tp-resizeme" id="slide-4-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on"
                                                                    data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;"><img src="wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" data-ww="1200px" data-hh="1000px" width="1224" height="1014" data-lazyload="http://www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/uploads/sites/2/revslider/home-section/img-17.jpg"
                                                                        data-no-retina> </div>

                                                                <!-- LAYER NR. 6 -->
                                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-4-layer-16" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['full','full','full','full']" data-height="['full','full','full','full']" data-type="shape"
                                                                    data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(0,0,0,0.5);background:linear-gradient(to bottom, rgba(28, 28, 28, 0) 50%,rgba(28, 28, 28, 0.9) 100%);">
                                                                </div>

                                                                <!-- LAYER NR. 7 -->
                                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-4-layer-14" data-x="center" data-hoffset="20" data-y="bottom" data-voffset="20" data-width="['20']" data-height="['20']" data-type="shape" data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]'
                                                                    data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgb(193,155,118);">
                                                                </div>

                                                                <!-- LAYER NR. 8 -->
                                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-4-layer-15" data-x="center" data-hoffset="-20" data-y="bottom" data-voffset="20" data-width="['20']" data-height="['20']" data-type="shape" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                                                                    data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;background-color:rgb(255,255,255);">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                                    </div>
                                                    <script>
                                                        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                                        var htmlDivCss = "";
                                                        if (htmlDiv) {
                                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                        } else {
                                                            var htmlDiv = document.createElement("div");
                                                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                                        }
                                                    </script>
                                                    <script type="text/javascript">
                                                        setREVStartSize({
                                                            c: jQuery('#rev_slider_2_2'),
                                                            gridwidth: [1200],
                                                            gridheight: [1000],
                                                            sliderLayout: 'auto'
                                                        });

                                                        var revapi2,
                                                            tpj = jQuery;

                                                        tpj(document).ready(function() {
                                                            if (tpj("#rev_slider_2_2").revolution == undefined) {
                                                                revslider_showDoubleJqueryError("#rev_slider_2_2");
                                                            } else {
                                                                revapi2 = tpj("#rev_slider_2_2").show().revolution({
                                                                    sliderType: "standard",
                                                                    jsFileLocation: "//www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/plugins/revslider/public/assets/js/",
                                                                    sliderLayout: "auto",
                                                                    dottedOverlay: "none",
                                                                    delay: 9000,
                                                                    navigation: {
                                                                        keyboardNavigation: "off",
                                                                        keyboard_direction: "horizontal",
                                                                        mouseScrollNavigation: "off",
                                                                        mouseScrollReverse: "default",
                                                                        onHoverStop: "off",
                                                                        touch: {
                                                                            touchenabled: "on",
                                                                            touchOnDesktop: "off",
                                                                            swipe_threshold: 75,
                                                                            swipe_min_touches: 1,
                                                                            swipe_direction: "horizontal",
                                                                            drag_block_vertical: false
                                                                        }
                                                                    },
                                                                    visibilityLevels: [1240, 1024, 778, 480],
                                                                    gridwidth: 1200,
                                                                    gridheight: 1000,
                                                                    lazyType: "single",
                                                                    shadow: 0,
                                                                    spinner: "off",
                                                                    stopLoop: "on",
                                                                    stopAfterLoops: 0,
                                                                    stopAtSlide: 1,
                                                                    shuffle: "off",
                                                                    autoHeight: "off",
                                                                    disableProgressBar: "on",
                                                                    hideThumbsOnMobile: "off",
                                                                    hideSliderAtLimit: 0,
                                                                    hideCaptionAtLimit: 0,
                                                                    hideAllCaptionAtLilmit: 0,
                                                                    debugMode: false,
                                                                    fallbacks: {
                                                                        simplifyAll: "off",
                                                                        nextSlideOnWindowFocus: "off",
                                                                        disableFocusListener: false,
                                                                    }
                                                                });
                                                            }

                                                        }); /*ready*/
                                                    </script>
                                                </div>
                                                <!-- END REVOLUTION SLIDER -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1501078196605 vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner vc_custom_1501076362840">
                                            <div class="wpb_wrapper">
                                                <link href="http://fonts.googleapis.com/css?family=Roboto:400%2C700%2C500%7CGilda+Display:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">
                                                <div id="rev_slider_3_3_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                                    <!-- START REVOLUTION SLIDER 5.4.6.3.1 auto mode -->
                                                    <div id="rev_slider_3_3" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3.1">
                                                        <ul>
                                                            <!-- SLIDE  -->
                                                            <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                                                data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                <!-- MAIN IMAGE -->
                                                                <img src="wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="Home 1" data-lazyload="http://www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/plugins/revslider/admin/assets/images/transparent.png" data-bgposition="center center"
                                                                    data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                <!-- LAYERS -->

                                                                <!-- LAYER NR. 1 -->
                                                                <div class="tp-caption   tp-resizeme" id="slide-5-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on"
                                                                    data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;"><img src="wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" data-ww="1200px" data-hh="1000px" width="1224" height="1014" data-lazyload="http://www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/uploads/sites/2/revslider/home-section-2/img-17.jpg"
                                                                        data-no-retina> </div>

                                                                <!-- LAYER NR. 2 -->
                                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-5-layer-16" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['full','full','full','full']" data-height="['full','full','full','full']" data-type="shape"
                                                                    data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(0,0,0,0.5);background:linear-gradient(to bottom, rgba(28, 28, 28, 0) 50%,rgba(28, 28, 28, 0.9) 100%);">
                                                                </div>

                                                                <!-- LAYER NR. 3 -->
                                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-5-layer-14" data-x="center" data-hoffset="20" data-y="bottom" data-voffset="20" data-width="['20']" data-height="['20']" data-type="shape" data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]'
                                                                    data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgb(193,155,118);">
                                                                </div>

                                                                <!-- LAYER NR. 4 -->
                                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-5-layer-15" data-x="center" data-hoffset="-20" data-y="bottom" data-voffset="20" data-width="['20']" data-height="['20']" data-type="shape" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                                                                    data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;background-color:rgb(255,255,255);">
                                                                </div>
                                                            </li>
                                                            <!-- SLIDE  -->
                                                            <li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide"
                                                                data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                <!-- MAIN IMAGE -->
                                                                <img src="wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" title="Home 1" data-lazyload="http://www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/plugins/revslider/admin/assets/images/transparent.png" data-bgposition="center center"
                                                                    data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                <!-- LAYERS -->

                                                                <!-- LAYER NR. 5 -->
                                                                <div class="tp-caption   tp-resizeme" id="slide-6-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on"
                                                                    data-frames='[{"delay":500,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;"><img src="wp-content/plugins/revslider/admin/assets/images/dummy.png" alt="" data-ww="1200px" data-hh="1000px" width="1224" height="1014" data-lazyload="http://www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/uploads/sites/2/revslider/home-section-2/img-16.jpg"
                                                                        data-no-retina> </div>

                                                                <!-- LAYER NR. 6 -->
                                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-6-layer-16" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['full','full','full','full']" data-height="['full','full','full','full']" data-type="shape"
                                                                    data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;background-color:rgba(0,0,0,0.5);background:linear-gradient(to bottom, rgba(28, 28, 28, 0) 50%,rgba(28, 28, 28, 0.9) 100%);">
                                                                </div>

                                                                <!-- LAYER NR. 7 -->
                                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-6-layer-14" data-x="center" data-hoffset="20" data-y="bottom" data-voffset="20" data-width="['20']" data-height="['20']" data-type="shape" data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]'
                                                                    data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;background-color:rgb(193,155,118);">
                                                                </div>

                                                                <!-- LAYER NR. 8 -->
                                                                <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-6-layer-15" data-x="center" data-hoffset="-20" data-y="bottom" data-voffset="20" data-width="['20']" data-height="['20']" data-type="shape" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                                                                    data-responsive_offset="on" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;background-color:rgb(255,255,255);">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                                    </div>
                                                    <script>
                                                        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                                        var htmlDivCss = "";
                                                        if (htmlDiv) {
                                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                        } else {
                                                            var htmlDiv = document.createElement("div");
                                                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                                        }
                                                    </script>
                                                    <script type="text/javascript">
                                                        setREVStartSize({
                                                            c: jQuery('#rev_slider_3_3'),
                                                            gridwidth: [1200],
                                                            gridheight: [1000],
                                                            sliderLayout: 'auto'
                                                        });

                                                        var revapi3,
                                                            tpj = jQuery;

                                                        tpj(document).ready(function() {
                                                            if (tpj("#rev_slider_3_3").revolution == undefined) {
                                                                revslider_showDoubleJqueryError("#rev_slider_3_3");
                                                            } else {
                                                                revapi3 = tpj("#rev_slider_3_3").show().revolution({
                                                                    sliderType: "standard",
                                                                    jsFileLocation: "//www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/plugins/revslider/public/assets/js/",
                                                                    sliderLayout: "auto",
                                                                    dottedOverlay: "none",
                                                                    delay: 9000,
                                                                    navigation: {
                                                                        keyboardNavigation: "off",
                                                                        keyboard_direction: "horizontal",
                                                                        mouseScrollNavigation: "off",
                                                                        mouseScrollReverse: "default",
                                                                        onHoverStop: "off",
                                                                        touch: {
                                                                            touchenabled: "on",
                                                                            touchOnDesktop: "off",
                                                                            swipe_threshold: 75,
                                                                            swipe_min_touches: 1,
                                                                            swipe_direction: "horizontal",
                                                                            drag_block_vertical: false
                                                                        }
                                                                    },
                                                                    visibilityLevels: [1240, 1024, 778, 480],
                                                                    gridwidth: 1200,
                                                                    gridheight: 1000,
                                                                    lazyType: "single",
                                                                    shadow: 0,
                                                                    spinner: "off",
                                                                    stopLoop: "on",
                                                                    stopAfterLoops: 0,
                                                                    stopAtSlide: 1,
                                                                    shuffle: "off",
                                                                    autoHeight: "off",
                                                                    disableProgressBar: "on",
                                                                    hideThumbsOnMobile: "off",
                                                                    hideSliderAtLimit: 0,
                                                                    hideCaptionAtLimit: 0,
                                                                    hideAllCaptionAtLilmit: 0,
                                                                    debugMode: false,
                                                                    fallbacks: {
                                                                        simplifyAll: "off",
                                                                        nextSlideOnWindowFocus: "off",
                                                                        disableFocusListener: false,
                                                                    }
                                                                });
                                                            }

                                                        }); /*ready*/
                                                    </script>
                                                </div>
                                                <!-- END REVOLUTION SLIDER -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_1501162942419">
                                            <div class="wpb_wrapper">
                                                <h6 style="color:#1c1c1c; padding:px; text-align:center; font-size:12px; line-height:12px; letter-spacing: 2px; font-weight:lighter;" class=" nd_options_second_font ">HOTEL LUXURY</h6>
                                                <div style="background-color:; height: 10px;" class="nicdark_section"></div>
                                                <div class="nd_options_section nd_options_line_height_0  nd_options_text_align_center ">
                                                    <span style="height:1px; width:30px; background-color:#878787;" class="nd_options_display_inline_block"></span>
                                                </div>
                                                <div style="background-color:; height: 20px;" class="nicdark_section"></div>
                                                <h1 style="color:#1c1c1c; padding:50pxpx; text-align:center; font-size:35px; line-height:px; letter-spacing: px; font-weight:normal;" class=" nd_options_first_font ">Around Us</h1>
                                                <p style="color:#878787; padding:50px; text-align:center; font-size:14px; line-height:27px; letter-spacing: 1px; font-weight:lighter;" class="nd_options_padding_20_responsive_important nd_options_second_font ">Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis. Phasellus enim libero, blandit.</p>
                                                <div class="nd_options_section nd_options_text_align_center">
                                                    <a style="border: 2px solid #c19b76; border-radius:px; letter-spacing:2px; line-height:11px; font-size:11px; background-color:; padding:15px 35px; margin:; color:#c19b76;" rel="" href="around-hotel/index.html" class="nicdark_display_inline_block  nd_options_font_weight_bold nd_options_second_font  ">READ MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="http://www.nicdarkthemes.com/themes/hotel/wp/demo/hotel/wp-content/uploads/sites/2/2017/06/parallax-8.jpg" class="vc_row wpb_row vc_row-fluid nd_options_vc_parallax_filter_2_4 vc_custom_1503049177500 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
                    <div class="nd_options_text_align_center wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <h1 style="color:#ffffff; padding:px; text-align:center; font-size:55px; line-height:65px; letter-spacing: px; font-weight:bold;" class="nd_options_font_size_40_important_all_iphone nd_options_line_height_40_important_all_iphone nd_options_first_font ">Relax and Enjoy<br /> your Holiday</h1>
                                <div style="background-color:; height: 20px;" class="nicdark_section"></div>
                                <h6 style="color:#ffffff; padding:px; text-align:center; font-size:12px; line-height:12px; letter-spacing: 2px; font-weight:lighter;" class=" nd_options_second_font ">LUXURY HOTEL &amp; BEST RESORT</h6>
                                <div style="background-color:; height: 40px;" class="nicdark_section"></div>

                                <div class="  nd_options_section">


                                    <a class=" nd_options_outline_0 nd_options_mpopup_iframe" href="https://www.youtube.com/watch?v=rYbtBXhMFAQ">
                                        <img width="60px" alt="" class="nd_options_transition_all_08_ease nd_options_opacity_05_hover" src="wp-content/uploads/sites/2/2017/06/icon-3.png">
                                    </a>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1504096112164 vc_row-has-fill">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner vc_custom_1499939894926">
                            <div class="wpb_wrapper">
                                <h6 style="color:#878787; padding:px; text-align:center; font-size:12px; line-height:12px; letter-spacing: 2px; font-weight:lighter;" class=" nd_options_second_font ">HOTEL NEWS</h6>
                                <div style="background-color:; height: 10px;" class="nicdark_section"></div>
                                <div class="nd_options_section nd_options_line_height_0  nd_options_text_align_center ">
                                    <span style="height:1px; width:30px; background-color:#878787;" class="nd_options_display_inline_block"></span>
                                </div>
                                <div style="background-color:; height: 30px;" class="nicdark_section"></div>
                                <h1 style="color:#1c1c1c; padding:px; text-align:center; font-size:55px; line-height:px; letter-spacing: px; font-weight:normal;" class="nd_options_font_size_40_important_all_iphone nd_options_line_height_40_important_all_iphone nd_options_first_font ">Our Blog</h1>
                                <div style="background-color:; height: 45px;" class="nicdark_section"></div>


                                <script type="text/javascript">
                                    //<![CDATA[

                                    jQuery(document).ready(function() {

                                        //START masonry
                                        jQuery(function($) {

                                            //Masonry
                                            var $nd_options_masonry_content = $(".nd_options_masonry_content").imagesLoaded(function() {
                                                // init Masonry after all images have loaded
                                                $nd_options_masonry_content.masonry({
                                                    itemSelector: ".nd_options_masonry_item"
                                                });
                                            });


                                        });
                                        //END masonry

                                    });

                                    //]]&gt;
                                </script>


                                <!--START MASONRY-->
                                <div class="nd_options_section nd_options_masonry_content  ">


                                    <div class=" nd_options_width_33_percentage nd_options_float_left nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
                                        <div class="nd_options_section nd_options_border_1_solid_grey nd_options_bg_white">

                                            <div class="nd_options_section nd_options_position_relative">




                                                <div class="nd_options_section nd_options_position_relative">
                                                    <a href="new-website-online/index.html"><img alt="" class="nd_options_section" src="wp-content/uploads/sites/2/2017/07/blog-1.jpg"></a>
                                                </div>



                                            </div>

                                            <div class="nd_options_section nd_options_padding_30 nd_options_box_sizing_border_box">
                                                <h5 class="nd_options_margin_0_important nd_options_padding_0 nd_options_second_font nd_options_color_greydark nd_options_font_size_12 nd_options_text_transform_uppercase nd_options_letter_spacing_3 nd_options_font_weight_lighter">Luxury Hotel </h5>

                                                <div class="nd_options_section nd_options_height_15"></div>
                                                <div class="nd_options_section nd_options_line_height_0"><span class="nd_options_display_inline_block nd_options_float_left nd_options_bg_greydark nd_options_width_30 nd_options_height_1"></span></div>
                                                <div class="nd_options_section nd_options_height_15"></div>

                                                <h2 class="nd_options_margin_0_important nd_options_padding_0 ">New Website</h2>
                                                <div class="nd_options_section nd_options_height_20"></div>
                                                <p class="nd_options_margin_0_important nd_options_padding_0">Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis.</p>
                                                <div class="nd_options_section nd_options_height_20"></div>
                                                <a style="border: 2px solid #c19b76; color:#c19b76;" class="nd_options_display_inline_block nd_options_line_height_11 nd_options_text_align_center nd_options_box_sizing_border_box nd_options_font_size_11 nd_options_font_weight_bold nd_options_second_font nd_options_padding_15_30  "
                                                    href="new-website-online/index.html">READ MORE</a>

                                            </div>

                                        </div>
                                    </div>




                                    <div class=" nd_options_width_33_percentage nd_options_float_left nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">

                                        <div style="background-color: #c19b76;" class="nd_options_section nd_options_text_align_center nd_options_padding_50 nd_options_box_sizing_border_box">

                                            <h2 class="nd_options_color_white nd_options_line_height_35">
                                                <a class="nd_options_color_white nd_options_first_font" href="quote-post/index.html">
	 						Follow our Resort Luxury Hotels
	 					</a>
                                            </h2>

                                            <div class="nd_options_section nd_options_height_0"></div>
                                            <div class="nd_options_section nd_options_text_align_center"><span class="nd_options_display_inline_block nd_options_bg_white nd_options_width_30 nd_options_height_1"></span></div>
                                            <div class="nd_options_section nd_options_height_10"></div>

                                            <div class="nd_options_display_inline_block">
                                                <div class="nd_options_display_table nd_options_float_left">
                                                    <img alt="" class="nd_options_margin_right_10 nd_options_display_table_cell nd_options_vertical_align_middle" width="20" height="20" src="wp-content/plugins/nd-shortcodes/img/icons/icon-quote-white.svg">
                                                    <p class="nd_options_color_white nd_options_display_table_cell nd_options_vertical_align_middle nd_options_letter_spacing_3 nd_options_font_weight_lighter nd_options_font_size_11 nd_options_text_transform_uppercase">
                                                        JOHN DOE
                                                    </p>
                                                </div>
                                            </div>



                                        </div>

                                    </div>



                                    <div class=" nd_options_width_33_percentage nd_options_float_left nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">


                                        <div class="nd_options_section nd_options_position_relative">




                                            <div class="nd_options_section nd_options_position_relative">
                                                <a href="relax-zone/index.html"><img alt="" class="nd_options_section" src="wp-content/uploads/sites/2/2017/07/blog-3.jpg"></a>


                                                <div class="nd_options_bg_greydark_alpha_gradient_3 nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_padding_30 nd_options_box_sizing_border_box">
                                                    <div class="nd_options_position_absolute nd_options_bottom_30">

                                                        <h5 class="nd_options_margin_0_important nd_options_padding_0 nd_options_second_font nd_options_color_white nd_options_font_size_12 nd_options_text_transform_uppercase nd_options_letter_spacing_3 nd_options_font_weight_lighter">News </h5>

                                                        <div class="nd_options_section nd_options_height_15"></div>
                                                        <div class="nd_options_section nd_options_line_height_0"><span class="nd_options_display_inline_block nd_options_float_left nd_options_bg_white nd_options_width_30 nd_options_height_1"></span></div>
                                                        <div class="nd_options_section nd_options_height_15"></div>

                                                        <h2 class="nd_options_color_white">
                                                            <a class="nd_options_color_white nd_options_first_font" href="relax-zone/index.html">
				        		Relax Zone
				        	</a>
                                                        </h2>

                                                        <div class="nd_options_section nd_options_height_20"></div>

                                                        <a class="nd_options_color_white nd_options_display_table_cell nd_options_vertical_align_middle nd_options_letter_spacing_3 nd_options_font_weight_lighter nd_options_font_size_11 nd_options_text_transform_uppercase" href="relax-zone/index.html">
                                                            <span class="nd_options_float_left">READ MORE</span>
                                                            <img alt="" class="nd_options_float_left nd_options_margin_left_5 nd_options_margin_top_1" width="10" src="wp-content/plugins/nd-shortcodes/img/icons/icon-arrow-right-white.svg">
                                                        </a>

                                                    </div>

                                                </div>


                                            </div>



                                        </div>


                                    </div>




                                    <div class=" nd_options_width_33_percentage nd_options_float_left nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">
                                        <div class="nd_options_section nd_options_border_1_solid_grey nd_options_bg_white">

                                            <div class="nd_options_section nd_options_position_relative">




                                                <div class="nd_options_section nd_options_position_relative">
                                                    <a href="around-us/index.html"><img alt="" class="nd_options_section" src="wp-content/uploads/sites/2/2017/07/blog-2.jpg"></a>
                                                </div>



                                            </div>

                                            <div class="nd_options_section nd_options_padding_30 nd_options_box_sizing_border_box">
                                                <h5 class="nd_options_margin_0_important nd_options_padding_0 nd_options_second_font nd_options_color_greydark nd_options_font_size_12 nd_options_text_transform_uppercase nd_options_letter_spacing_3 nd_options_font_weight_lighter">Luxury Hotel </h5>

                                                <div class="nd_options_section nd_options_height_15"></div>
                                                <div class="nd_options_section nd_options_line_height_0"><span class="nd_options_display_inline_block nd_options_float_left nd_options_bg_greydark nd_options_width_30 nd_options_height_1"></span></div>
                                                <div class="nd_options_section nd_options_height_15"></div>

                                                <h2 class="nd_options_margin_0_important nd_options_padding_0 ">About Us</h2>
                                                <div class="nd_options_section nd_options_height_20"></div>
                                                <p class="nd_options_margin_0_important nd_options_padding_0">Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis.</p>
                                                <div class="nd_options_section nd_options_height_20"></div>
                                                <a style="border: 2px solid #c19b76; color:#c19b76;" class="nd_options_display_inline_block nd_options_line_height_11 nd_options_text_align_center nd_options_box_sizing_border_box nd_options_font_size_11 nd_options_font_weight_bold nd_options_second_font nd_options_padding_15_30  "
                                                    href="#">READ MORE</a>

                                            </div>

                                        </div>
                                    </div>




                                    <div class=" nd_options_width_33_percentage nd_options_float_left nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">


                                        <div class="nd_options_section nd_options_position_relative">




                                            <div class="nd_options_section nd_options_position_relative">
                                                <a href="#"><img alt="" class="nd_options_section" src="wp-content/uploads/sites/2/2017/07/blog-4.jpg"></a>


                                                <div class="nd_options_bg_greydark_alpha_gradient_3 nd_options_position_absolute nd_options_left_0 nd_options_height_100_percentage nd_options_width_100_percentage nd_options_padding_30 nd_options_box_sizing_border_box">
                                                    <div class="nd_options_position_absolute nd_options_bottom_30">

                                                        <h5 class="nd_options_margin_0_important nd_options_padding_0 nd_options_second_font nd_options_color_white nd_options_font_size_12 nd_options_text_transform_uppercase nd_options_letter_spacing_3 nd_options_font_weight_lighter">News </h5>

                                                        <div class="nd_options_section nd_options_height_15"></div>
                                                        <div class="nd_options_section nd_options_line_height_0"><span class="nd_options_display_inline_block nd_options_float_left nd_options_bg_white nd_options_width_30 nd_options_height_1"></span></div>
                                                        <div class="nd_options_section nd_options_height_15"></div>

                                                        <h2 class="nd_options_color_white">
                                                            <a class="nd_options_color_white nd_options_first_font" href="#">
				        		Daily Walk
				        	</a>
                                                        </h2>

                                                        <div class="nd_options_section nd_options_height_20"></div>

                                                        <a class="nd_options_color_white nd_options_display_table_cell nd_options_vertical_align_middle nd_options_letter_spacing_3 nd_options_font_weight_lighter nd_options_font_size_11 nd_options_text_transform_uppercase" href="#">
                                                            <span class="nd_options_float_left">READ MORE</span>
                                                            <img alt="" class="nd_options_float_left nd_options_margin_left_5 nd_options_margin_top_1" width="10" src="wp-content/plugins/nd-shortcodes/img/icons/icon-arrow-right-white.svg">
                                                        </a>

                                                    </div>

                                                </div>


                                            </div>



                                        </div>


                                    </div>




                                    <div class=" nd_options_width_33_percentage nd_options_float_left nd_options_padding_15 nd_options_box_sizing_border_box nd_options_masonry_item nd_options_width_100_percentage_responsive">

                                        <div style="background-color: #1c1c1c;" class="nd_options_section nd_options_text_align_center nd_options_padding_50 nd_options_box_sizing_border_box">

                                            <div class="nd_options_display_inline_block">
                                                <img alt="" class="nd_options_margin_right_10" width="20" height="20" src="wp-content/plugins/nd-shortcodes/img/icons/icon-link-2-white.svg">
                                                <h2 class="nd_options_color_white nd_options_line_height_35 nd_options_display_inline_block">
                                                    <span class="nd_options_padding_botttom_5">
	                    		<a class="nd_options_color_white nd_options_first_font nd_options_letter_spacing_3 nd_options_font_weight_lighter" href="#">
	                    			Check New Pictures
	                    		</a>
	                    	</span>
                                                </h2>
                                            </div>

                                        </div>

                                    </div>


                                </div>
                                <!--CLOSE MASONRY-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <!--end content-->

            </div>
            <!--#post-->


        </div>
        <!--end container-->

        <!--page margin-->





       <?php require_once('main_footer.php'); ?>