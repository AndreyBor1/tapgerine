<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo get_query_var('pagename'); ?></title>
        
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
        crossorigin="anonymous">
        <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
        integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r"
        crossorigin="anonymous">
        
        <!-- FONT AWESOME -->
        <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="FHeader">
            <a href="">
                <img src="<?php the_field('top_logo', 'option'); ?>" alt="Tapgerine Logo"/>
            </a>
        </header
        
        <!-- SIDE NAVIGATION -->
        <div id="SideNav">
            <div class="home-page">
                <a href="http://tapgerine-test.thegustoapp.com/">
                    Home Page
                </a>
            </div>
            <div class="first-page">
                <a href="http://tapgerine-test.thegustoapp.com/first-page/">
                    First Page
                </a>
            </div>
            <div class="second-page">
                <a href="http://tapgerine-test.thegustoapp.com/second-page/">
                    Second Page
                </a>
            </div>
        </div>