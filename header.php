<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"<?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="utf-8">
 
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    <script type='<?php bloginfo('template_url'); ?>/application/javascript' src='js/vendor/fastclick.js'></script>
    <script>    window.addEventListener('load', function() {
                FastClick.attach(document.body);
            }, false);
    </script>


    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">
<?php wp_head(); ?> 
</head>
<body>
     <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<div id="outer-wrap">
<div id="inner-wrap">

<div class="site-header">
    <div class="container">
            <header id="top" role="banner">
                <div class="block">
                    <h1 class="block-title">Title</h1>
                    <a class="nav-btn" id="nav-open-btn" href="#nav">Book Navigation</a>
                </div>
            </header>

            <nav id="nav" role="navigation" class="tiled group">
                <div class="block">
                    
                    <ul>
                        <li class="is-active">
                            <a href="#">Home</a>
                        </li>
                    <li>
                            <a href="#">About</a>
                        </li>
                     <li>
                            <a href="#">Work</a>
                        </li>
                         
                    <li>
                            <a href="#">Contact</a>
                        </li>
                     
                    </ul>
                    <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
                </div>
            </nav>
        </div>
</div>
