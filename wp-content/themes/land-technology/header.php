<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- STAR #header -->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="cover-topheader">
                    <?php get_template_part( 'template-parts/header/header', 'top' ); ?>
                </div> <!-- .cover-topheader -->
            </div> <!-- .row -->
        </div> <!-- .container -->
        <div class="container-fluid cover-bg-menu">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <?php the_custom_logo(); ?>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .container-fluid -->
    </header><!-- END #header -->