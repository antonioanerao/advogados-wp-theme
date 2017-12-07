<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <base href="<?php bloginfo("template_directory"); ?>/">
    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- PLUGINS CSS STYLE -->
    <link href="plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="#" rel="stylesheet" id="bootstrap-rtl">
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/trust-icons/style.css">
    <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" type="text/css" href="plugins/selectbox/select_option1.css">
    <link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="plugins/isotope/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="plugins/isotope/isotope.css">
    <link rel="stylesheet" type="text/css" href="plugins/animate.css">
    <link rel="stylesheet" type="text/css" href="plugins/wave/waves.min.css">
    <link rel="stylesheet" type="text/css" href="style.css?v1.0.20">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="#" rel="stylesheet" id="rtl_css">
    <link href="css/default.css" rel="stylesheet" id="option_color">

    <!-- FAVICON -->
    <link href="img/favicon.png" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        /* Paste this css to your style sheet file or under head tag */
        /* This only works with JavaScript,
        if it's not present, don't show loader */
        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url(plugins/simple-pre-loader/images/loader-64x/Preloader_1.gif) center no-repeat #fff;
        }
    </style>

    <?php wp_head(); ?>
</head>
<?php
$options = theme_setup_data();
$header_contact_setting = wp_parse_args(  get_option( 'theme_options', array() ), $options );
?>

<body class="body-wrapper">
<div class="se-pre-con"></div>
<div class="main-wrapper">
    <!-- HEADER -->
    <header id="pageTop" class="header">

        <!-- TOP INFO BAR -->
        <div class="top-info-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12 hidden-xs">
                        <ul class="list-inline social-icon">
                            <?php if(!empty($header_contact_setting['header_contact_facebook'])) { ?>
                                <li><a href="<?php echo $header_contact_setting['header_contact_facebook']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <?php } ?>

                            <?php if(!empty($header_contact_setting['header_contact_twitter'])) { ?>
                                <li><a href="<?php echo $header_contact_setting['header_contact_twitter']; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <?php } ?>

                            <?php if(!empty($header_contact_setting['header_contact_linkedin'])) { ?>
                                <li><a href="<?php echo $header_contact_setting['header_contact_linkedin']; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-xs-12 top-bar-right">
                        <a href="#requestCosultation" data-toggle="modal">Request a free cosultation
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-wrapper">
            <div class="container-fluid header-bg">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-xs-6 header-left empty">empty
                    </div>
                    <div class="col-lg-8 col-sm-8 col-xs-6 header-right empty">empty
                    </div>
                </div>
            </div>

            <!-- NAVBAR -->
            <nav id="menuBar" class="navbar navbar-default lightHeader" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo())
                            {
                                echo '<a href="'.get_option('home').'"><img class="navbar-brand" src="'. esc_url( $logo[0] ) .'"></a>';
                            }

                            else
                            {
                                echo '<a href="'.get_option('home').'"><h4 class="navbar-brand">'. get_bloginfo( 'name' ) .'</h4></a>';
                            }
                        ?>
                    </div>
                    <div class="topList hidden-xs">
                        <ul class="list-inline">
                            <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $header_contact_setting['header_contact_dias_horas']; ?></li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $header_contact_setting['header_contact_telefone']; ?></li>
                        </ul>
                    </div>

                    <!-- menu -->

                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'my-custom-menu',
                        'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
                        'menu_class' => 'nav navbar-nav navbar-right'
                    ) );
                    ?>

                    <!-- fim menu -->

                    <div class="searchBox">
                        <a href="#"><i class="fa fa-search"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <form class="navbar-form">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    <div class="form-group"> <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </header>