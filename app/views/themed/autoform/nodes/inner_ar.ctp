<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>IMG - INTERNATIONAL MARITIME GROUP</title>
 <?php
        // echo $this->Meta->meta();
        echo $this->Layout->feed();
        echo $this->Html->script(array('jquery.min','jquery.transit.min','jquery.textanimation',
            'jquery-ui',
            'frontend/jquery.easing.1.3', 'frontend/jquery.image_mapper', 'frontend/jquery.mousewheel.min',
            'frontend/jquery.mCustomScrollbar.min',
           
            'frontend/rollover','main' ,'cufon' ,'jquery.prettyPhoto','sliders/scripts/slider_paralel'
           
        ));
        echo $this->Html->css(array(
            'style',
            'skins/blue/blue.css',
            'prettyPhoto',
            'slider_static2', 'style-noscript','frontend/image_mapper','frontend/jquery.mCustomScrollbar','slider_paralel'
        ));
        echo $this->Blocks->get('css');
        echo $this->Blocks->get('script');
        echo $scripts_for_layout;
        ?>
    <!-- 
    <link rel="stylesheet" type="text/css" href="style.css"/>
  
    <link rel="stylesheet" type="text/css" href="skins/blue/blue.css"/>
    <link rel="stylesheet" type="text/css" href="js/prettyphoto/css/prettyPhoto.css"/>

    <link rel="stylesheet" type="text/css" href="sliders/slider_static2.css"/>    <noscript>
        <link rel="stylesheet" type="text/css" href="style-noscript.css"/>
    </noscript>-->

    <!-- mab
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="./js/frontend/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="./js/frontend/jquery.image_mapper.js"></script>
	<script type="text/javascript" src="./js/frontend/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="./js/frontend/jquery.mCustomScrollbar.min.js"></script>
	<script type="text/javascript" src="./js/frontend/rollover.js"></script>
	<link rel="stylesheet" type="text/css" href="./style.css" />
	<link rel="stylesheet" type="text/css" href="./css/frontend/image_mapper.css" />
	<link rel="stylesheet" type="text/css" href="./css/frontend/jquery.mCustomScrollbar.css" />
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/cufon.js"></script>
    <script type="text/javascript" src="js/prettyphoto/js/jquery.prettyPhoto.js"></script>-->

<script type="text/javascript">
var autoslide_time =3000;
jQuery(document).ready(function($){$("a[rel^='prettyPhoto']").prettyPhoto();  } );</script>
<link rel="stylesheet" type="text/css" href="sliders/slider_paralel.css"/>
<script type="text/javascript" src="sliders/scripts/slider_paralel.js"></script>
</head>

</head>
<body>
    <div id="header_wrapper">
        <div id="header">
                     <div id="logo">
                <a href="/">
                	<!--<img style="float:left;" src="gfx/logo.png" alt="Showtime" />-->
                    <?php echo $this->Html->image('/img/gfx/logo.png', array( "alt" => "IMG","style"=>"float:left;")); ?>
                    <div class="text_logo">
                        <div id="demo_jump1" class="demo" >IM G</div>
                        <div id="demo_high2" class="demo" >International Maritime Group</div>
                        <script type="text/javascript">
$(document.body).ready(function(){
    $("div#demo_roll1").textAnimation({
		mode: "roll"
	});
    $("div#demo_roll2").textAnimation({
		mode: "roll",
		minsize: 20,
		magnification: 30,
		fixed: "top",
		delay: 15,
		stuff: 1.5
	});
    $("div#demo_step1").textAnimation({
		mode: "step"
	});
	$("div#demo_step2").textAnimation({
	    mode:"step",
	    minsize:20,            //minimum font size[integer]
	    maxsize:60,            //maximum font size[integer]
	    upper:false,           //is upper step? [boolean]
	    fixed:"top",           //which fixed top or bottom ["top","bottom"]
	    stuff:2.2,             //font stuff quantity[float]
	    delay:200,             //delay for between charactors animation
	    interval:0,            //interval for between animation
	    duration:1000          //animation duration
	});
    $("div#demo_high1").textAnimation({
		mode: "highlight"
	});
    $("div#demo_high2").textAnimation({
		mode: "highlight",
		baseColor: "#fff",
		highlightColor: "#03a8d2",
		delay: 20,
		interval: 5,
		duration: 100
	});    
	$("div#demo_jump1").textAnimation({
	    mode:"jump"
	});
	$("div#demo_jump2").textAnimation({
	    mode:"jump",         
	    altitude:10,              //jump altitude[integer] 
	    bound :false,             //bound animation[boolean]
        fixed:"bottom",           //which fixed top or bottom ["top","bottom"]
	    delay:80,                 //delay time for animation between characters[integer] 
	    interval:0,               //interval time for between animation[integer]
	    duration:400              //animation duration time[integer]
	});
    $("div#demo_puff1").textAnimation({
        mode:"puff"
    });
    $("div#demo_puff2").textAnimation({
        mode:"puff",
        color:"#77FF6F",          //highlight puffing color
        percent:200,              //font scale percentage.[integer]     
        interval:1000,               //interval time for between animation[integer]
        duration:1000,             //animation duration time[integer]
        times : 5                 //how times puffing animation[integer]
    });
});
        </script>
                    </div>
                </a>
            </div>

           <div class="search_top">
               <?php echo $this->Html->image('/img/Animated-Flag-Canada.gif',array("width"=>"82px;")); ?>
            <!--     <form id="searchform" action="#" method="get">
                    <p><input type="text" name="s" id="s" class="search_top_input" value="Enter keywords.." onFocus="if (this.value == 'Enter keywords..') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Enter keywords..';}"/></p>
                    <p><input type="submit" value="" name="submit" class="search_top_btn"/></p>
                </form> -->
            </div><!-- END "div.search" -->
            <div class="clear"></div>
        </div><!-- END "div#header" -->
    </div><!-- END "div#header_wrapper" -->
    <div id="nav_wrapper" style="background-color: #0473b2;">
        <div class="menu-navigation-container">
	



 <ul id="menu-navigation" class="menu">
                    <?php

                    $results = $this->requestAction("menus/links/getlinks");
                    //print_r($results);
                    foreach ($results as $data) {
                        ?>

                         <li class="menu-item menu-item-type-custom">
                    <a href="<?php echo $this->Html->url($data['Link']['link'], true); ?>"><?php echo $data['Link']['title']; ?></a>
                <?php if (!empty($data['children'])) { ?>

                      <ul class="sub-menu">
                      <?php foreach ($data['children'] as $data_children) { ?>
                        <li class="menu-item menu-item-type-custom "><a href="<?php echo $this->Html->url($data_children['Link']['link'], true); ?>"><?php echo $data_children['Link']['title']; ?></a></li>

                        <?php } ?>

                    </ul>

                <?php } ?>
                </li>
                 <?php } ?>
              <?php if (! $this->Session->read('Auth.User.id')) { ?>
             <li  class="menu-item menu-item-type-custom " >
                    <a href="/reports" style="color:red;">ClIENT'S LOGIN</a>
                </li>
                <?php }
            else{ ?>
                 <li  class="menu-item menu-item-type-custom " >
                    <a href="/users/users/logout" style="color:red;">LOGOUT</a>
                </li>

            <?php }
            ?>
</ul>
        </div>
    </div><!-- END "div#nav_wrapper" -->


	 <?php echo $content_for_layout; ?>
			
			

<?php echo   $this->element("footer"); ?>
		
</body>
</html>