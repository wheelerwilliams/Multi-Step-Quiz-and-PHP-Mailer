<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
        <?php endif; ?>
            <?php wp_head(); ?>
                <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,500,700|PT+Sans:400,700|Arimo:400,700&amp;display=swap" rel="stylesheet">
                <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/main.min.css">
                <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css">
                <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/style.min.css">
                <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.js"></script>
                <script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery-migrate.min.js"></script>
                <script src="<?php echo get_stylesheet_directory_uri();?>/js/plugins.min.js"></script>
                <script src="<?php echo get_stylesheet_directory_uri();?>/js/main.min.js"></script>
</head>

<body <?php body_class(); ?>>
    <div id="preloader">
        <div class="txt">
            <p class="txt-perc">0%</p>
            <div class="progress"><span></span></div>
        </div>
    </div>

    <header class="site-nav">
        <a class="call" href="tel:408-669-0310"> <i class="fas fa-phone"></i><span><span>Call Today!</span> 408-669-0310</span>
        </a>
        <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img class="precision-logo" src="/wp-content/uploads/2019/12/logo.png"> </a>
        <nav role="navigation">
            <ul id="menu-header" class="menu d-flex justify-content-between">
                <li id="menu-item-763" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-116 current_page_item menu-item-763"><a href="index.html" aria-current="page">Home</a></li>
                <li id="menu-item-454" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-454"><a href="#candidatequiz">Candidate Quiz</a></li>
                <li id="menu-item-456" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-456"><a href="#howwecompare">How We Compare</a></li>
                <li id="menu-item-455" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-455"><a href="#gallery">Before &#038; After</a></li>
                <li id="menu-item-460" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-460"><a href="#faqs">FAQS</a></li>
                <li id="menu-item-457" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-457"><a href="#meetjessicaoslo">MasterSlimmers™</a></li>
                <li id="menu-item-458" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-458"><a href="#testimonials">Testimonials</a></li>
                <li id="menu-item-459" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-459"><a href="#schedule">Schedule</a></li>
            </ul>
        </nav>
        <div class="header-bg"></div>
    </header>
    <div class="header-sticky"></div>

    <div class='popup-new' style='display:none;'>
		<div class='cnt223'>
			<span class='close'>×</span>
			<h3 style="color:#1964b0;">X-TONE IS HERE!</h3>
            <img class="precision-logo" src="/wp-content/uploads/2022/02/749248D9-33E1-49E1-BB68-3BFFC5C24746.jpeg" style="width: 80%;"> 
			<p class='sub-title' style='text-align:left; padding-top:20px;'>THE FAST, EASY AND SAFE WAY TO.</p>
            <p class='txt' style=''>BUILD MUSCLE - GET TONED LOSE STUBBORN FAT</p>
            <button id="quiz-btn" class="btn btn-secondary close" style="background-color:#eb6834; padding: 0.5em 2em;">BOOK YOUR FREE<br/>CONSULTATION</button>
		</div>
	</div>

    <style type="text/css">
    #overlay {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: #141414;
		filter:alpha(opacity=70);
		-moz-opacity:0.7;
		-khtml-opacity: 0.7;
		opacity: 0.7;
		z-index: 100;
		display: none;
	}
	
	.cnt223 a{
		text-decoration: none;
	}
	.popup-new{
		width: 100%;
		margin: 0 auto;
		display: none;
		position: fixed;
		z-index: 101;
	}
    .popup-new .txt{
        font-size:2em; 
        line-height:1.2; 
        color:#1964b0;
    }
	.cnt223{
		text-align:center;
		min-width: 600px;
		width: 600px;
		min-height: 150px;
		margin: 100px auto;
		background: #f3f3f3;
		position: relative;
		z-index: 103;
		padding: 40px 40px;
		border-radius: 5px;
		box-shadow: 0 2px 5px #000;
	}
	.cnt223 p{
		clear: both;
		color: #555555;
		/* text-align: justify; */
		font-size: 20px;
		font-family: sans-serif;
	}
	.cnt223 p a{
		color: #d91900;
		font-weight: bold;
	}
	.cnt223 .x{
		float: right;
		height: 35px;
		left: 22px;
		position: relative;
		top: -25px;
		width: 34px;
	}
	.cnt223 .x:hover{
		cursor: pointer;
	}
	span.close{
		position: absolute;
		top: 0px;
		right: 10px;
		font-size: 25px;
		cursor: pointer;
	}

	@media (max-width: 767.98px){
		.popup-new{
            max-width: 90%;
            margin-left: 5%;
        }
        .cnt223{
			min-width:100%;
          	width:100%;
            padding: 40px 25px
        }
        .popup-new .txt{
            font-size: 1.3em;
            line-height: 1.5;
            color: #1964b0;
            padding-bottom: 15px;
        }
    }
	
</style>
<script type='text/javascript'>
	jQuery(function($){
		// $.getJSON("https://jsonip.com?callback=?", function (data) {
		// 	$.get('https://ipapi.co/'+data.ip+'/city/', function(data){
		// 		console.log(data);
		// 	});
		// });

		var overlay = $('<div id="overlay"></div>');
		// $('main').css('opacity', '0.3');
		// overlay.show();
		// overlay.appendTo(document.body);
        
        var showDiv = function() {
            $('.popup-new').fadeIn();
            overlay.show();
            overlay.appendTo(document.body);
        }

        var hideDiv = function(){
            $('.popup-new').hide();
            overlay.hide();
            overlay.appendTo(document.body).remove();
			localStorage.setItem('popState','shown');
        } 

        

        if(localStorage.getItem('popState') != 'shown'){
            setTimeout(showDiv, 4000);
        }

		$('.close').click(function(){
            hideDiv();
            return false;

		});

	});
</script>