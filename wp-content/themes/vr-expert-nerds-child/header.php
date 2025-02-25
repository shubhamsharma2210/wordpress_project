<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- <title> Vr Experts Nerds </title> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo wp_head();
      $url = '';
      $url .= get_page_link();   
   
      $arrayUrl = explode('/',$url);
      if(in_array('fr',$arrayUrl)){
         $SiteNameClass = 'fr-custom-class';
      }else if(in_array('de',$arrayUrl)){
         $SiteNameClass = 'de-custom-class';
      }else{
         $SiteNameClass = 'com-custom-class';
      }
     
    $seo_title = get_field("seo_title", "option")
        ? get_field("seo_title", "option")
        : "The #1 XR Blog in the World";
    $site_logo = get_field("site_logo", "option");
    $sign_in = get_field("sign_in", "option")
        ? get_field("sign_in", "option")
        : "Sign In";
    $logout = get_field("logout", "option")
        ? get_field("logout", "option")
        : "Log out";
    $search = get_field("search", "option")
        ? get_field("search", "option")
        : "Search";
    ?>
</head>

<body <?php body_class($SiteNameClass); ?>>

    <div class="sticky-menu">
        <?php wp_set_post_terms(47234, "351", "databasexr_category"); ?>
        <!-- desktop menu  -->
        <header class="top-headwrap">

            <div class="upper-header">
                <div class="cst-container">
                    <div class="upper-ul">
                        <p class="font-16text"><?php echo $seo_title; ?></p>
                        <?php $language_selected = get_field(
                            "language_selected",
                            "option"
                        )
                            ? get_field("language_selected", "option")
                            : "English"; ?>
                        <ul class="top-Right">
                            <li class="font-16text LngLi">
                                <span class="select-lng">
                                    <span><?php echo $language_selected; ?></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="9" viewBox="0 0 23 9">
                                        <text id="_" data-name="&gt;" transform="translate(23) rotate(90)"
                                            fill="#FFFFFF" font-size="16" font-family="Poppins-Regular, Poppins">
                                            <tspan x="0" y="17">&gt;</tspan>
                                        </text>
                                    </svg>
                                </span>



                                <?php
                                $page_id = get_queried_object_id();
                                if (is_page() || is_search() || is_single()) {

                                    if (
                                        get_field("language_switcher", "option")
                                    ) {
                                        $option_array = [];
                                        foreach (
                                            get_field(
                                                "language_switcher",
                                                "option"
                                            )
                                            as $data
                                        ) {
                                            array_push($option_array, $data);
                                        }
                                    }
                                    if (
                                        get_field(
                                            "language_switcher_page",
                                            $page_id
                                        )
                                    ) {
                                        $page_array = [];
                                        foreach (
                                            get_field(
                                                "language_switcher_page",
                                                $page_id
                                            )
                                            as $pagedata
                                        ) {
                                            array_push($page_array, $pagedata);
                                        }
                                    }
                                    ?>
                                <ul class="options-list wrapLng">
                                    <?php
                                    $splitValuesngl = [];
                                    if ($page_array) {
                                        $PerPagearr = [];
                                        foreach (
                                            $option_array
                                            as $defaultdata
                                        ) {
                                            foreach (
                                                $page_array
                                                as $currPagedata
                                            ) {
                                                if (
                                                    $currPagedata[
                                                        "language_code"
                                                    ] ==
                                                    $defaultdata[
                                                        "language_code"
                                                    ]
                                                ) {
                                                    array_push(
                                                        $splitValuesngl,
                                                        $currPagedata[
                                                            "language_code"
                                                        ]
                                                    );
                                                    $DataNewPage[
                                                        "language_code"
                                                    ] =
                                                        $currPagedata[
                                                            "language_code"
                                                        ];
                                                    $DataNewPage["site_name"] =
                                                        $defaultdata[
                                                            "site_name"
                                                        ];
                                                    $DataNewPage["page_url"] =
                                                        $currPagedata[
                                                            "page_url"
                                                        ];

                                                    array_push(
                                                        $PerPagearr,
                                                        $DataNewPage
                                                    );
                                                }
                                            }
                                        }
                                        if (count($PerPagearr) < 3) {
                                            foreach (
                                                $option_array
                                                as $defaultdata
                                            ) {
                                                if (
                                                    !in_array(
                                                        $defaultdata[
                                                            "language_code"
                                                        ],
                                                        $splitValuesngl
                                                    )
                                                ) {
                                                    $DataNewPage[
                                                        "language_code"
                                                    ] =
                                                        $defaultdata[
                                                            "language_code"
                                                        ];
                                                    $DataNewPage["site_name"] =
                                                        $defaultdata[
                                                            "site_name"
                                                        ];
                                                    $DataNewPage["page_url"] =
                                                        $defaultdata[
                                                            "site_url"
                                                        ];

                                                    array_push(
                                                        $PerPagearr,
                                                        $DataNewPage
                                                    );
                                                }
                                            }
                                        }

                                        foreach ($PerPagearr as $data) { ?>
                                    <li><a href="<?php echo $data[
                                        "page_url"
                                    ]; ?>"
                                            aria-label="Site Page Title"><?php echo $data[
                                                "site_name"
                                            ]; ?></a></li>
                                    <?php }
                                    } else {
                                        foreach (
                                            $option_array
                                            as $constdata
                                        ) { ?>
                                    <li><a href="<?php echo $constdata[
                                        "site_url"
                                    ]; ?>"
                                            aria-label="Site Name Title"><?php echo $constdata[
                                                "site_name"
                                            ]; ?></a></li>
                                    <?php }
                                    }
                                    ?>
                                </ul>
                                <?php
                                }
                                if (is_archive()) {

                                    if (
                                        get_field("language_switcher", "option")
                                    ) {
                                        $option_array = [];
                                        foreach (
                                            get_field(
                                                "language_switcher",
                                                "option"
                                            )
                                            as $data
                                        ) {
                                            array_push($option_array, $data);
                                        }
                                    }
                                    if (
                                        get_field(
                                            "language_switcher_page",
                                            "category_" . $page_id
                                        )
                                    ) {
                                        $page_array = [];
                                        foreach (
                                            get_field(
                                                "language_switcher_page",
                                                "category_" . $page_id
                                            )
                                            as $pagedata
                                        ) {
                                            array_push($page_array, $pagedata);
                                        }
                                    }
                                    ?>
                                <ul class="options-list wrapLng">
                                    <?php
                                    $splitValuesngl = [];
                                    if ($page_array) {
                                        $PerPagearr = [];
                                        foreach (
                                            $option_array
                                            as $defaultdata
                                        ) {
                                            foreach (
                                                $page_array
                                                as $currPagedata
                                            ) {
                                                if (
                                                    $currPagedata[
                                                        "language_code"
                                                    ] ==
                                                    $defaultdata[
                                                        "language_code"
                                                    ]
                                                ) {
                                                    array_push(
                                                        $splitValuesngl,
                                                        $currPagedata[
                                                            "language_code"
                                                        ]
                                                    );
                                                    $DataNewPage[
                                                        "language_code"
                                                    ] =
                                                        $currPagedata[
                                                            "language_code"
                                                        ];
                                                    $DataNewPage["site_name"] =
                                                        $defaultdata[
                                                            "site_name"
                                                        ];
                                                    $DataNewPage["page_url"] =
                                                        $currPagedata[
                                                            "page_url"
                                                        ];

                                                    array_push(
                                                        $PerPagearr,
                                                        $DataNewPage
                                                    );
                                                }
                                            }
                                        }
                                        if (count($PerPagearr) < 3) {
                                            foreach (
                                                $option_array
                                                as $defaultdata
                                            ) {
                                                if (
                                                    !in_array(
                                                        $defaultdata[
                                                            "language_code"
                                                        ],
                                                        $splitValuesngl
                                                    )
                                                ) {
                                                    $DataNewPage[
                                                        "language_code"
                                                    ] =
                                                        $defaultdata[
                                                            "language_code"
                                                        ];
                                                    $DataNewPage["site_name"] =
                                                        $defaultdata[
                                                            "site_name"
                                                        ];
                                                    $DataNewPage["page_url"] =
                                                        $defaultdata[
                                                            "site_url"
                                                        ];

                                                    array_push(
                                                        $PerPagearr,
                                                        $DataNewPage
                                                    );
                                                }
                                            }
                                        }

                                        foreach ($PerPagearr as $data) { ?>
                                    <li><a href="<?php echo $data[
                                        "page_url"
                                    ]; ?>"
                                            aria-label="Site Name Title"><?php echo $data[
                                                "site_name"
                                            ]; ?></a></li>
                                    <?php }
                                    } else {
                                        foreach (
                                            $option_array
                                            as $constdata
                                        ) { ?>
                                    <li><a href="<?php echo $constdata[
                                        "site_url"
                                    ]; ?>"
                                            aria-label="Site Url Title"><?php echo $constdata[
                                                "site_name"
                                            ]; ?></a></li>
                                    <?php }
                                    }
                                    ?>
                                </ul>
                                <?php
                                }
                                ?>

                            </li>
                            <?php if (is_user_logged_in()) {
                                $user = wp_get_current_user(); ?>
                            <li class="font-16text userLi">
                                <span class="select-user">
                                    <span><?php echo $user->user_nicename; ?></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                                        <g id="Group_3821" data-name="Group 3821" transform="translate(-1600 -8)">
                                            <path id="Icon_material-person-outline"
                                                data-name="Icon material-person-outline"
                                                d="M12.091,7.447a1.6,1.6,0,1,1-1.6,1.6,1.6,1.6,0,0,1,1.6-1.6m0,6.853c2.261,0,4.645,1.112,4.645,1.6v.838H7.447V15.9c0-.487,2.383-1.6,4.645-1.6m0-8.3a3.046,3.046,0,1,0,3.046,3.046A3.045,3.045,0,0,0,12.091,6Zm0,6.853C10.058,12.853,6,13.873,6,15.9v2.284H18.183V15.9C18.183,13.873,14.124,12.853,12.091,12.853Z"
                                                transform="translate(1600.409 7.5)" fill="#fff" opacity="0.5" />
                                            <g id="Ellipse_9" data-name="Ellipse 9" transform="translate(1600 8)"
                                                fill="none" stroke="#fff" stroke-width="2" opacity="0.5">
                                                <circle cx="12.5" cy="12.5" r="12.5" stroke="none" />
                                                <circle cx="12.5" cy="12.5" r="11.5" fill="none" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <ul class="options-list wrapLng">
                                    <li><a href="<?php echo wp_logout_url(
                                        get_permalink()
                                    ); ?>"
                                            aria-label="Logout Title"><?php echo $logout; ?></a></li>
                                </ul>
                            </li>
                            <?php
                            } else {
                                 ?>
                            <li class="font-16text userLi"><a href="<?php echo home_url() .
                                "/account"; ?>"
                                    aria-label="Login Title">
                                    <span class="select-user">
                                        <span><?php echo $sign_in; ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 25 25">
                                            <g id="Group_3821" data-name="Group 3821" transform="translate(-1600 -8)">
                                                <path id="Icon_material-person-outline"
                                                    data-name="Icon material-person-outline"
                                                    d="M12.091,7.447a1.6,1.6,0,1,1-1.6,1.6,1.6,1.6,0,0,1,1.6-1.6m0,6.853c2.261,0,4.645,1.112,4.645,1.6v.838H7.447V15.9c0-.487,2.383-1.6,4.645-1.6m0-8.3a3.046,3.046,0,1,0,3.046,3.046A3.045,3.045,0,0,0,12.091,6Zm0,6.853C10.058,12.853,6,13.873,6,15.9v2.284H18.183V15.9C18.183,13.873,14.124,12.853,12.091,12.853Z"
                                                    transform="translate(1600.409 7.5)" fill="#fff" opacity="0.5" />
                                                <g id="Ellipse_9" data-name="Ellipse 9" transform="translate(1600 8)"
                                                    fill="none" stroke="#fff" stroke-width="2" opacity="0.5">
                                                    <circle cx="12.5" cy="12.5" r="12.5" stroke="none" />
                                                    <circle cx="12.5" cy="12.5" r="11.5" fill="none" />
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <?php
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- mid container -->
            <div class="cst-container">
                <div class="topheader">

                    <div class="Vr-nerds-logo">
                        <a href="<?php echo get_site_url(); ?>" aria-label="Header Logo">
                            <img src="<?php echo $site_logo; ?>" alt="Header Logo" />
                        </a>
                    </div>

                    <div class="top-headernerds">
                        <div class="header-nerds Star">
                            <?php wp_nav_menu([
                                "menu" => "main-menu",

                                "theme_location" => "main-menu",

                                "container" => false,

                                "menu_class" => "header-products",
                            ]); ?>
                        </div>
                        <!-- user menu -->
                        <div class="HeaderSrch">
                            <div class=" header-btn">
                           <!-- <a href="<//?php echo home_url().'/search'; ?>" aria-label="search icons"> -->
                                <a href="javascript:void(0);" aria-label="search icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.328" height="26.328"
                                        viewBox="0 0 26.328 26.328">
                                        <g id="Icon_feather-search" data-name="Icon feather-search"
                                            transform="translate(-3 -3)">
                                            <path id="Path_1431" data-name="Path 1431"
                                                d="M24.684,14.592A10.092,10.092,0,1,1,14.592,4.5,10.092,10.092,0,0,1,24.684,14.592Z"
                                                fill="none" stroke="#023047" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="3" />
                                            <path id="Path_1432" data-name="Path 1432" d="M30.462,30.462l-5.487-5.487"
                                                transform="translate(-3.256 -3.256)" fill="none" stroke="#023047"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />
                                        </g>
                                    </svg>
                                    <?php echo $search; ?>
                                </a>
                            </div>
                        </div>
                        <!-- serch -->
                    </div>

                </div>
            </div>
            <!-- bottom header -->
            <div class="bottom-header">
                <div class="cst-container">
                    <!-- <ul class="PodcastsUl"> -->
                    <?php wp_nav_menu([
                        "menu" => "secondary-menu",

                        "theme_location" => "secondary-menu",

                        "container" => false,

                        "menu_class" => "PodcastsUl",
                    ]); ?>
                    <!-- <li class="Podcasts-btn  font-16text">
            <a href="javascript:void(0)">
            More 
            </a>
          </li> -->
                    <!-- </ul> -->
                </div>
            </div>
        </header>
        <!-- desktop menu  -->
        <!-- mobile menu bar -->
        <div class="MobileBar">
            <div class="cst-container">
                <div class="mb-nerds-menu">
                    <div class="mb-nerds-logo">
                        <a href="<?php echo get_site_url(); ?>" aria-label="Site Logo">
                            <img src="<?php echo $site_logo; ?>" alt="site-logo" /></a>
                    </div>
                    <div class="mb-nerds-row">
                        <div class="Mb-Serach-link header-btn">
                            <a href="javascript:void(0);" aria-label="Site Serach">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26.328" height="26.328"
                                    viewBox="0 0 26.328 26.328">
                                    <g id="Icon_feather-search" data-name="Icon feather-search"
                                        transform="translate(-3 -3)">
                                        <path id="Path_1431" data-name="Path 1431"
                                            d="M24.684,14.592A10.092,10.092,0,1,1,14.592,4.5,10.092,10.092,0,0,1,24.684,14.592Z"
                                            fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="3"></path>
                                        <path id="Path_1432" data-name="Path 1432" d="M30.462,30.462l-5.487-5.487"
                                            transform="translate(-3.256 -3.256)" fill="none" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="3"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <!-- search link -->
                        <div class="mb-nerds-lng position-relative">
                            <?php if (is_user_logged_in()) {
                                $user = wp_get_current_user(); ?>
                            <div class="nerds-user-mb position-relative">
                                <span class="userIcon-lng">
                                    <img class="profile_class" src="<?php echo get_avatar_url(
                                        $user
                                    ); ?>"
                                        alt="site-logo" style="width: 25px" />
                                </span>
                                <span class="mbIcon-dow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="9" viewBox="0 0 23 9">
                                        <text id="_" data-name=">" transform="translate(23) rotate(90)" fill="#FFFFFF"
                                            font-size="16" font-family="Poppins-Regular, Poppins">
                                            <tspan x="0" y="17">&gt;</tspan>
                                        </text>
                                    </svg>
                                </span>
                            </div>
                            <!-- users nerds -->

                            <ul class="mb-options-list">

                                <li><a href="<?php echo wp_logout_url(
                                    get_permalink()
                                ); ?>"
                                        aria-label="Logout Title"><?php echo $logout; ?></a></li>
                            </ul>
                            <?php
                            } else {
                                 ?>
                            <div class="nerds-user-mb position-relative">
                                <a href="<?php echo home_url() .
                                    "/account"; ?>" aria-label="Login Title">
                                    <span class="userIcon-lng">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            viewBox="0 0 25 25">
                                            <g id="Group_3821" data-name="Group 3821" transform="translate(-1600 -8)">
                                                <path id="Icon_material-person-outline"
                                                    data-name="Icon material-person-outline"
                                                    d="M12.091,7.447a1.6,1.6,0,1,1-1.6,1.6,1.6,1.6,0,0,1,1.6-1.6m0,6.853c2.261,0,4.645,1.112,4.645,1.6v.838H7.447V15.9c0-.487,2.383-1.6,4.645-1.6m0-8.3a3.046,3.046,0,1,0,3.046,3.046A3.045,3.045,0,0,0,12.091,6Zm0,6.853C10.058,12.853,6,13.873,6,15.9v2.284H18.183V15.9C18.183,13.873,14.124,12.853,12.091,12.853Z"
                                                    transform="translate(1600.409 7.5)" fill="#fff" opacity="0.5">
                                                </path>
                                                <g id="Ellipse_9" data-name="Ellipse 9" transform="translate(1600 8)"
                                                    fill="none" stroke="#fff" stroke-width="2" opacity="0.5">
                                                    <circle cx="12.5" cy="12.5" r="12.5" stroke="none"></circle>
                                                    <circle cx="12.5" cy="12.5" r="11.5" fill="none"></circle>
                                                </g>
                                            </g>
                                        </svg>

                                    </span>
                                </a>

                            </div>

                            <?php
                            } ?>

                        </div>
                        <!-- mb nerds lang -->
                        <div class="mb-hamburger">
                            <div class="users-hamburger">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="15.75"
                                        viewBox="0 0 27 15.75">
                                        <g id="Icon_ionic-ios-menu" data-name="Icon ionic-ios-menu"
                                            transform="translate(-4.5 -10.125)">
                                            <path id="Path_5147" data-name="Path 5147"
                                                d="M30.375,12.375H5.625A1.128,1.128,0,0,1,4.5,11.25h0a1.128,1.128,0,0,1,1.125-1.125h24.75A1.128,1.128,0,0,1,31.5,11.25h0A1.128,1.128,0,0,1,30.375,12.375Z"
                                                fill="#000" />
                                            <path id="Path_5148" data-name="Path 5148"
                                                d="M30.375,19.125H5.625A1.128,1.128,0,0,1,4.5,18h0a1.128,1.128,0,0,1,1.125-1.125h24.75A1.128,1.128,0,0,1,31.5,18h0A1.128,1.128,0,0,1,30.375,19.125Z"
                                                fill="#000" />
                                            <path id="Path_5149" data-name="Path 5149"
                                                d="M30.375,25.875H5.625A1.128,1.128,0,0,1,4.5,24.75h0a1.128,1.128,0,0,1,1.125-1.125h24.75A1.128,1.128,0,0,1,31.5,24.75h0A1.128,1.128,0,0,1,30.375,25.875Z"
                                                fill="#000" />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <!-- apper popup start -->
                            <div class="mb-container-menu">
                                <div class="Pdclass">
                                    <div class="mb-main-menu">
                                        <!-- <ul class="mb-list-menu"> -->
                                        <?php
                                        wp_nav_menu([
                                            "menu" => "mobile-menu",

                                            "theme_location" => "mobile-menu",

                                            "container" => false,

                                            "menu_class" => "mb-list-menu",
                                        ]);
                                        $popular_categories = get_field(
                                            "popular_categories",
                                            "option"
                                        )
                                            ? get_field(
                                                "popular_categories",
                                                "option"
                                            )
                                            : "Popular categories";
                                        ?>
                                        <!-- </ul> -->
                                    </div>
                                    <!-- mb main menu -->
                                    <!-- div other menu  -->
                                    <div class="nerds-other-mb">
                                        <h2 class="HeadingH3-25-bold"><?php echo $popular_categories; ?></h2>
                                        <div class="nerds-other-items">

                                            <?php wp_nav_menu([
                                                "menu" => "mobile-second-menu",

                                                "theme_location" =>
                                                    "mobile-second-menu",

                                                "container" => false,

                                                "menu_class" => "Nerd-sub",
                                            ]); ?>


                                        </div>
                                    </div>
                                    <!-- div other menu  END -->
                                    <div class="class-English">
                                        <div class="gl-img">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Icon-material-language.png"
                                                alt="default" />
                                        </div>
                                        <div class="Ln-img">
                                            <?php
                                            $page_id = get_queried_object_id();
                                            if (
                                                is_page() ||
                                                is_search() ||
                                                is_single()
                                            ) {

                                                if (
                                                    get_field(
                                                        "language_switcher",
                                                        "option"
                                                    )
                                                ) {
                                                    $option_array = [];
                                                    foreach (
                                                        get_field(
                                                            "language_switcher",
                                                            "option"
                                                        )
                                                        as $data
                                                    ) {
                                                        array_push(
                                                            $option_array,
                                                            $data
                                                        );
                                                    }
                                                }
                                                if (
                                                    get_field(
                                                        "language_switcher_page",
                                                        $page_id
                                                    )
                                                ) {
                                                    $page_array = [];
                                                    foreach (
                                                        get_field(
                                                            "language_switcher_page",
                                                            $page_id
                                                        )
                                                        as $pagedata
                                                    ) {
                                                        array_push(
                                                            $page_array,
                                                            $pagedata
                                                        );
                                                    }
                                                }
                                                ?>
                                            <ul class="Ln-img-lng">
                                                <?php
                                                $splitValuesngl = [];
                                                if ($page_array) {
                                                    $PerPagearr = [];
                                                    foreach (
                                                        $option_array
                                                        as $defaultdata
                                                    ) {
                                                        foreach (
                                                            $page_array
                                                            as $currPagedata
                                                        ) {
                                                            if (
                                                                $currPagedata[
                                                                    "language_code"
                                                                ] ==
                                                                $defaultdata[
                                                                    "language_code"
                                                                ]
                                                            ) {
                                                                array_push(
                                                                    $splitValuesngl,
                                                                    $currPagedata[
                                                                        "language_code"
                                                                    ]
                                                                );
                                                                $DataNewPage[
                                                                    "language_code"
                                                                ] =
                                                                    $currPagedata[
                                                                        "language_code"
                                                                    ];
                                                                $DataNewPage[
                                                                    "site_name"
                                                                ] =
                                                                    $defaultdata[
                                                                        "site_name"
                                                                    ];
                                                                $DataNewPage[
                                                                    "page_url"
                                                                ] =
                                                                    $currPagedata[
                                                                        "page_url"
                                                                    ];

                                                                array_push(
                                                                    $PerPagearr,
                                                                    $DataNewPage
                                                                );
                                                            }
                                                        }
                                                    }
                                                    if (
                                                        count($PerPagearr) < 3
                                                    ) {
                                                        foreach (
                                                            $option_array
                                                            as $defaultdata
                                                        ) {
                                                            if (
                                                                !in_array(
                                                                    $defaultdata[
                                                                        "language_code"
                                                                    ],
                                                                    $splitValuesngl
                                                                )
                                                            ) {
                                                                $DataNewPage[
                                                                    "language_code"
                                                                ] =
                                                                    $defaultdata[
                                                                        "language_code"
                                                                    ];
                                                                $DataNewPage[
                                                                    "site_name"
                                                                ] =
                                                                    $defaultdata[
                                                                        "site_name"
                                                                    ];
                                                                $DataNewPage[
                                                                    "page_url"
                                                                ] =
                                                                    $defaultdata[
                                                                        "site_url"
                                                                    ];

                                                                array_push(
                                                                    $PerPagearr,
                                                                    $DataNewPage
                                                                );
                                                            }
                                                        }
                                                    }

                                                    foreach (
                                                        $PerPagearr
                                                        as $data
                                                    ) {
                                                        $i = 0; ?>
                                                <li class="img-lng <?php if (
                                                    $i == 0
                                                ) {
                                                    echo "active";
                                                } ?>"><a
                                                        href="<?php echo $data[
                                                            "page_url"
                                                        ]; ?>"
                                                        aria-label="Site Url Title"><?php echo $data[
                                                            "site_name"
                                                        ]; ?></a>
                                                </li>
                                                <?php
                                                    }
                                                } else {
                                                    foreach (
                                                        $option_array
                                                        as $constdata
                                                    ) { ?>
                                                <li class="img-lng"><a href="<?php echo $constdata[
                                                    "site_url"
                                                ]; ?>"
                                                        aria-label="Site Url Title"><?php echo $constdata[
                                                            "site_name"
                                                        ]; ?></a>
                                                </li>
                                                <?php }
                                                }
                                                ?>
                                            </ul>
                                            <?php
                                            }
                                            if (is_category()) {

                                                if (
                                                    get_field(
                                                        "language_switcher",
                                                        "option"
                                                    )
                                                ) {
                                                    $option_array = [];
                                                    foreach (
                                                        get_field(
                                                            "language_switcher",
                                                            "option"
                                                        )
                                                        as $data
                                                    ) {
                                                        array_push(
                                                            $option_array,
                                                            $data
                                                        );
                                                    }
                                                }
                                                if (
                                                    get_field(
                                                        "language_switcher_page",
                                                        "category_" . $page_id
                                                    )
                                                ) {
                                                    $page_array = [];
                                                    foreach (
                                                        get_field(
                                                            "language_switcher_page",
                                                            "category_" .
                                                                $page_id
                                                        )
                                                        as $pagedata
                                                    ) {
                                                        array_push(
                                                            $page_array,
                                                            $pagedata
                                                        );
                                                    }
                                                }
                                                ?>
                                            <ul class="Ln-img-lng">
                                                <?php
                                                $splitValuesngl = [];
                                                if ($page_array) {
                                                    $PerPagearr = [];
                                                    foreach (
                                                        $option_array
                                                        as $defaultdata
                                                    ) {
                                                        foreach (
                                                            $page_array
                                                            as $currPagedata
                                                        ) {
                                                            if (
                                                                $currPagedata[
                                                                    "language_code"
                                                                ] ==
                                                                $defaultdata[
                                                                    "language_code"
                                                                ]
                                                            ) {
                                                                array_push(
                                                                    $splitValuesngl,
                                                                    $currPagedata[
                                                                        "language_code"
                                                                    ]
                                                                );
                                                                $DataNewPage[
                                                                    "language_code"
                                                                ] =
                                                                    $currPagedata[
                                                                        "language_code"
                                                                    ];
                                                                $DataNewPage[
                                                                    "site_name"
                                                                ] =
                                                                    $defaultdata[
                                                                        "site_name"
                                                                    ];
                                                                $DataNewPage[
                                                                    "page_url"
                                                                ] =
                                                                    $currPagedata[
                                                                        "page_url"
                                                                    ];

                                                                array_push(
                                                                    $PerPagearr,
                                                                    $DataNewPage
                                                                );
                                                            }
                                                        }
                                                    }
                                                    if (
                                                        count($PerPagearr) < 3
                                                    ) {
                                                        foreach (
                                                            $option_array
                                                            as $defaultdata
                                                        ) {
                                                            if (
                                                                !in_array(
                                                                    $defaultdata[
                                                                        "language_code"
                                                                    ],
                                                                    $splitValuesngl
                                                                )
                                                            ) {
                                                                $DataNewPage[
                                                                    "language_code"
                                                                ] =
                                                                    $defaultdata[
                                                                        "language_code"
                                                                    ];
                                                                $DataNewPage[
                                                                    "site_name"
                                                                ] =
                                                                    $defaultdata[
                                                                        "site_name"
                                                                    ];
                                                                $DataNewPage[
                                                                    "page_url"
                                                                ] =
                                                                    $defaultdata[
                                                                        "site_url"
                                                                    ];

                                                                array_push(
                                                                    $PerPagearr,
                                                                    $DataNewPage
                                                                );
                                                            }
                                                        }
                                                    }

                                                    foreach (
                                                        $PerPagearr
                                                        as $data
                                                    ) {
                                                        $i = 0; ?>
                                                <li class="img-lng <?php if (
                                                    $i == 0
                                                ) {
                                                    echo "active";
                                                } ?>"><a
                                                        href="<?php echo $data[
                                                            "page_url"
                                                        ]; ?>"
                                                        aria-label="Site Url Title"><?php echo $data[
                                                            "site_name"
                                                        ]; ?></a>
                                                </li>
                                                <?php
                                                    }
                                                } else {
                                                    foreach (
                                                        $option_array
                                                        as $constdata
                                                    ) { ?>
                                                <li class="img-lng"><a href="<?php echo $constdata[
                                                    "site_url"
                                                ]; ?>"
                                                        aria-label="Site Url Title"><?php echo $constdata[
                                                            "site_name"
                                                        ]; ?></a>
                                                </li>
                                                <?php }
                                                }
                                                ?>
                                            </ul>
                                            <?php
                                            }
                                            ?>




                                        </div>
                                    </div>
                                    <!-- div lng -->
                                </div>
                            </div>
                            <!-- apper popup end -->
                        </div>
                        <!-- menu hum -->
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile menu Bar END -->
    </div>

    <!-- side bar search bar --->

   <?php
   $placeholder_text = get_field("search_placeholder_text", "option")
       ? get_field("search_placeholder_text", "option")
       : "Search on VR Nerds";
   $most_popular_searches_heading = get_field(
       "most_popular_searches_heading",
       "option"
   )
       ? get_field("most_popular_searches_heading", "option")
       : "Most popular searches";
   $assign_most_popular_searchs = get_field(
       "assign_most_popular_searchs",
       "option"
   );
   $post_per_page = get_field("search_posts_per_page", "option")
       ? get_field("search_posts_per_page", "option")
       : 9;
   $search_on_vrx_heading = get_field("search_on_vrx_heading", "option");
   ?>
    <div class="right-search ">

        <div class="srv-close">
            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="45.1441" height="4.93161" rx="2.4658"
                    transform="matrix(0.707128 0.707085 -0.707128 0.707085 3.9873 0.296143)" fill="#023047"></rect>
                <rect width="45.1441" height="4.93161" rx="2.4658"
                    transform="matrix(0.707128 -0.707085 0.707128 0.707085 0.5 32.2168)" fill="#023047"></rect>
            </svg>
        </div>

        <div class="search-V">
            <h2 class="side-heading"> <svg xmlns="http://www.w3.org/2000/svg" width="34.328" height="34.328"
                    viewBox="0 0 34.328 34.328">
                    <g id="Icon_feather-search" data-name="Icon feather-search" transform="translate(-3 -3)">
                        <path id="Path_1431" data-name="Path 1431"
                            d="M24.684,14.592A10.092,10.092,0,1,1,14.592,4.5,10.092,10.092,0,0,1,24.684,14.592Z"
                            fill="none" stroke="#023047" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="3"></path>
                        <path id="Path_1432" data-name="Path 1432" d="M30.462,30.462l-5.487-5.487"
                            transform="translate(-3.256 -3.256)" fill="none" stroke="#023047" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="3"></path>
                    </g>
                </svg>

                <span><?php echo $search_on_vrx_heading; ?></span>
            </h2>

            <div class="srV-data">
                <form action="<?php echo home_url(); ?>">
                    <div class="searchK font-18text">
                        <input type="text" class="input-grey-rounded"  autocomplete="off" placeholder="<?php echo $placeholder_text; ?>"  value="<?php echo get_search_query(); ?>" name="s" id="Inputarticle" onkeyup="fetchResults()" >


                             <div class="e-search" style="display:block;">
                                    <div id="article-fetchresult">


                                    </div>  

                                 <!-- <a  href="#">View all results ></a> -->
                                    
                                    
                             </div>


                    </div>
                    
                </form>
            </div>
           <!-- srch div end -->
           <?php if ($assign_most_popular_searchs) { ?>
            <div class="most-dataV">
              <h3 class="HeadingH3-25-bold"><?php echo $most_popular_searches_heading; ?></h3>

              <ul class="mostS-list">
                     <?php foreach (
                         $assign_most_popular_searchs
                         as $assign_most_searchs
                     ) {
                         $mst_pop_title = mb_strimwidth(
                             get_the_title($assign_most_searchs),
                             0,
                             30,
                             "...."
                         ); ?>
                                <li class="font-20text">
                                    <a  href="<?php echo get_the_permalink(
                                        $assign_most_searchs
                                    ); ?>"><?php echo strip_tags(
    $mst_pop_title
); ?></a>
                                </li>
                     <?php
                     } ?>
               </ul>


            </div>
            <?php } else {$args = [
                   "post_type" => "post",
                   "post_status" => "publish",
                   "posts_per_page" => $post_per_page,
                   "meta_key" => "post_views_count",
                   "orderby" => "meta_value_num",
                   "order" => "DESC",
               ];
               $loop = new WP_Query($args);
               if ($loop->have_posts()) { ?>
         <div class="most-dataV">
              <h3 class="HeadingH3-25-bold"><?php echo $most_popular_searches_heading; ?></h3>

              <ul class="mostS-list">
                        <?php while ($loop->have_posts()) {

                            $loop->the_post();

                            $posts_id = get_the_ID($loop);
                            $mst_pop_title = mb_strimwidth(
                                get_the_title($posts_id),
                                0,
                                30,
                                "...."
                            );
                            ?>
                                <li class="font-20text">
                                <a href="<?php echo get_the_permalink(
                                    $posts_id
                                ); ?>"><?php echo strip_tags(
    $mst_pop_title
); ?></a>
                                </li>
                     <?php
                        } ?>
               </ul>


            </div>
            <?php }} ?>


        </div>


    </div>