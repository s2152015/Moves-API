Cufon.replace('#menu ul li a', { fontFamily: 'Delicious' });
Cufon.replace('h1, h2, h3, h4, h5, h6, a.bigbutton, #footerwrap a.button', { fontFamily: 'Sansation' });

$(document).ready(function() {
	
	var portfolioSorter = jQuery('.portfolio'); // selects the portfolio container
	portfolioSorter.quicksand({items:'.third'});	// activates portfolio sorting
	portfolioSorter.quicksand({items:'.fourth'});	// activates portfolio sorting
	
    $('.content').image_preloader({delay:100});
	
	//on sites without portfolio activate basic image preloading
    
    $('a.hovertip').tipsy({fade: true, title: 'title'});
    
    // == Menu == //
    $('#menu li').hover(function(){
        if ($(this).hasClass('home') == false){
        $(this).find('a:first').css('background', 'url(images/nav-hover.png) 0 0 repeat-x');
        }
        $(this).find('ul').slideToggle('slow');
    }, function() {
        if ($(this).hasClass('home') == false){
            $(this).find('a:first').css('background', '');
            $(this).find('ul').hide('fast');
        }
    });

    $('#menu li ul li').hover(function(){
        $(this).find('a:first').css('background', 'url(images/footer-li-bg.png) 0 bottom repeat-x #111111');
    }, function() {
        $(this).find('a:first').css('background', '');
    });
    
    // == Search input field == //
    $(".searchfield").focus(function() {
        if ($(this).val() == "Search...") {
            $(this).val("");
        } 
    });
    $(".searchfield").blur(function() {
        if ($(this).val() == "") {
            $(this).val("Search...");
        } 
    });
    
    // == Big button hover == //
    $("a.bigbutton").hover(function() {
        $(this).css('background-position', 'right -141px');
        $(this).find('span').css('background-position', '0 -94px');
    },
    function () {
        $(this).find('span').css('background-position', '0 0');
        $(this).css('background-position', 'right -47px');
    });
    
    // == Scroll to the top of the page == //
    $('.top a, a.top, a.anchoranimate').anchorAnimate();

    // == input form fields == //
    $('input[name=sname]').focus(function() {
        if ($(this).val() == "Name*") {
            $(this).val("");
        } 
    });
    $("input[name=sname]").blur(function() {
        if ($(this).val() == "") {
            $(this).val("Name*");
        } else if ($(this).val() != "Name*") {
            $(this).removeClass('error');
        }
    });

    $('input[name=semail]').focus(function() {
        if ($(this).val() == "Email*") {
            $(this).val("");
        } 
    });
    $("input[name=semail]").blur(function() {
        if ($(this).val() == "") {
            $(this).val("Email*");
        } else if ($(this).val() != "Email*") {
            $(this).removeClass('error');
        } 
    });   

    $('input[name=website]').focus(function() {
        if ($(this).val() == "Website") {
            $(this).val("");
        } 
    });
    $("input[name=website]").blur(function() {
        if ($(this).val() == "") {
            $(this).val("Website");
        } 
    });
    
    $('.quickcontact a.submit').live('click', function() {
        var container = $(this).parents('form'),
        sname = container.find('input[name=sname]').val(),
        semail = container.find('input[name=semail]').val(),
        swebsite = container.find('input[name=website]').val(),
        myemail = container.find('input[name=myemail]').val(),
        mysitename = container.find('input[name=mysitename]').val(),
        smessage = container.find('textarea[name=smessage]').val();
        
        var bSend = true;
        
        if ( sname == "" || sname == "Name*"){
            container.find('input[name=sname]').addClass('error');
            bSend = false;
        }

        if ( semail == "" || semail == "Email*"){
            container.find('input[name=semail]').addClass('error');
            bSend = false;
        }

        if ( smessage == ""){
            container.find('textarea[name=smessage]').addClass('error');
            bSend = false;
        }
        
        if (bSend == true) {
            var dataString = 'sname='+ sname + '&semail=' + semail + '&smessage=' + smessage + '&mysitename=' + mysitename + '&myemail=' + myemail + '&swebsite=' + swebsite;

            
            $.ajax({
                type: "POST",
                url: "SubmitTo/SendEmail.php",
                data: dataString,
                success: function(response) {
                  container.find('.button').before('<div class="success">' + response + '</div>');
                  $('.success').show('slow');
                  
                    container.find('input[name=sname], input[name=semail], textarea[name=smessage]').val('');
                }
              });
        }
        
        return false;
    });   
    
    // == Portfolio Overlay == // 
    my_lightbox("a[rel^='prettyPhoto'], a[rel^='lightbox']",true);
})

jQuery.fn.anchorAnimate = function(settings) {

 	settings = jQuery.extend({
		speed : 1100
	}, settings);	
	
	return this.each(function(){
		var caller = this
		$(caller).click(function (event) {	
			event.preventDefault()
			var locationHref = window.location.href
			var elementClick = $(caller).attr("href")
			
			var destination = $(elementClick).offset().top;
			$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
				window.location.hash = elementClick
			});
		  	return false;
		})
	})
}

function my_lightbox($elements, autolink){	
	
	if(autolink)
	{
		jQuery('a[href$=jpg], a[href$=png], a[href$=gif], a[href$=jpeg], a[href$=.mov] , a[href$=.swf] , a[href*=vimeo.com] , a[href*=youtube.com]').contents("img").parent().each(function()
		{
			if(!jQuery(this).attr('rel') != undefined && !jQuery(this).attr('rel') != '' && !jQuery(this).hasClass('noLightbox'))
			{
				jQuery(this).attr('rel','prettyPhoto[auto_group]')
				jQuery(this).addClass('lightboxlink')
			}
		});
	}
		
	jQuery($elements).each(function()
	{	
		var $image = jQuery(this).contents("img");
		$newclass = 'lightbox_video';
		
		if(jQuery(this).attr('href').match(/(jpg|gif|jpeg|png|tif)/)) $newclass = 'lightbox_image';
			
		if ($image.length > 0)
		{	
			
			var $bg = jQuery("<span class='"+$newclass+" '></span>").appendTo(jQuery(this));
			
			jQuery(this).bind('mouseenter', function()
			{
				$height = $image.height();
				$width = $image.width();
				if(jQuery.browser.msie &&  jQuery.browser.version == 7){
				    $height = $height + 4;
				    $width = $width + 4;
				}
				$pos =  $image.position();		
				$bg.css({height:$height, width:$width, top:$pos.top, left:$pos.left});
			});
		}
	});	
	
	jQuery($elements).contents("img").hover(function()
	{
		jQuery(this).stop().animate({opacity:0.5},400);
	},
	function()
	{
		jQuery(this).stop().animate({opacity:1},400);
	});
}


(function($)
{
	$.fn.quicksand = function(options) 
	{
		var defaults = 
		{
			items: '.items',
			linkContainer:'#portfoliosorting',
			filterItems: '.sortbytype',
			sortItems:'sortbyfilter'
			
		};
		
		var options = $.extend(defaults, options);
	
		return this.each(function()
		{
			var container = $(this),
				linkContainer = $(options.linkContainer),
				links = linkContainer.find('a'),
				items = container.find(options.items),
				itemLinks = items.find('a'),
				itemPadding = parseInt(items.css('paddingBottom')),
				itemSelection = '',
				columns = 0,
				coordinates = new Array(),
				animationArray = new Array(),
				columnPlus = new Array();
						
			container.methods = {
			
				preloadingDone: function()
				{		
									
					if(linkContainer.length > 0 && !($.browser.msie && $.browser.version < 7))
					{	
						//set container height, get all items and save coordinates
						container.css('height',container.height());
						items.each(function()
						{ 
							var item = $(this),
								itemPos = item.position();

							coordinates.push(itemPos); 
						})
						.each(function(i)
						{ 
							var item = $(this);
							item.css({position:'absolute', top: coordinates[i].top+'px', left: coordinates[i].left+'px'});
						});					
						
						//set columns
						for(i = 0; i < coordinates.length; i++)
						{	
							if(coordinates[i].top == coordinates[0].top) columns ++;
						}
						
						//show controlls
						linkContainer.css({opacity:0, visibility:"visible"}).animate({opacity:1});
						
						// bind action to click events
						container.methods.bindfunctions();
						
					}
				},
				
				bindfunctions: function()
				{	
					links.click(function()
					{	
						var clickedElement = $(this),
							elementFilter = this.id;
							
							animationArray = new Array();
							
						//apply active state
						clickedElement.parent().find('.active_sort').removeClass('active_sort');
						this.className += ' active_sort';
						
						// if we need to filter items
						if(clickedElement.parent().is(options.filterItems))
						{
							var arrayIndex = 0,
								columnIndex = 0;
								
							columnPlus = new Array();
							
							items.each(function(i)
							{
								var item = $(this);
								
								if(item.is('.'+elementFilter))
								{	
									animationArray.push(
									{
                                        element: item, 
                                        animation: 
                                        { 
                                             opacity: 1,
                                             top: coordinates[arrayIndex].top,
                                             left: coordinates[arrayIndex].left
                                        },
                                        height: item.height()
                                    });

                                    
                                    if(columnTop < coordinates[arrayIndex].top)  columnTop = coordinates[arrayIndex].top;
                                    
                                    columnIndex++;
                                    arrayIndex++;
								}
								else
								{
									animationArray.push(
                                    {
                                        element: item, 
                                        animation: 
                                        { 
                                             opacity: 0
                                        },
                                        callback: true
                                    });
								}
								
								if(items.length == i+1 || columnIndex == columns)
                                {	
 									var columnTop = 0;
                                	
                                	for (x = 0; x < columnIndex; x++)
                                	{	
                                		if(animationArray[i-x].height)
                                		{
                                			if(columnTop < animationArray[i-x].height) columnTop = animationArray[i-x].height;
                                		}
                                		else
                                		{
                                			columnIndex++;
                                		}
                                		
                                	}
                                	columnPlus.push(columnTop);
                                	columnIndex = 0;
                                }		
                                							
								if(i+1 == items.length) container.methods.startAnimation();
							});
												
						}
						else // if we need to sort items first
						{	
							var sortitems = items.get(),
								reversed = false;
							
							if(clickedElement.is('.reversed')) reversed = true;
							
							sortitems.sort(function(a, b) 
							{
								var compA = $(a).find('.'+elementFilter).text().toUpperCase();
								var compB = $(b).find('.'+elementFilter).text().toUpperCase();
								if (reversed) 
								{
									return (compA < compB) ? 1 : (compA > compB) ? -1 : 0;				
								} 
								else 
								{		
									return (compA < compB) ? -1 : (compA > compB) ? 1 : 0;	
								}
							});
							
							items = $(sortitems);
							$(options.filterItems).find('.active_sort').trigger('click');
							
						}
						
						return false;
					});
				},
				
				startAnimation: function()
				{	
					var heightmodifier = coordinates[0].top,
						visibleElement = 0,
						currentCol = 0;
					
					for (i = 0; i < animationArray.length; i++) 
					{	
						if(animationArray[i].animation.top)
						{
							if(visibleElement % columns == 0 && visibleElement != 0)
							{
								heightmodifier += columnPlus[currentCol] + itemPadding;
								currentCol ++;
							}
							visibleElement++;
						}
						
						animationArray[i].animation.top = heightmodifier;
             			animationArray[i].element.css('display','block').animate(animationArray[i].animation, 800, "easeInOutQuint", (function(i)
             			{
							return function() 
							{
								if(animationArray[i].callback == true)
	             				{	
	             					animationArray[i].element.css({display:"none"});	             					
	             				}
							}
             			})(i));
            		}
            		
            		
            		var newContainerHeight = coordinates[0].top;
            						
					for(z = 0; z < columnPlus.length; z++ )
					{
						newContainerHeight += columnPlus[z] + itemPadding;
					}
											
					container.animate({height:newContainerHeight}, 800, "easeInOutQuint");	
				}
				
			}
			
			
			
			container.image_preloader({delay:100, callback:container.methods.preloadingDone});
			
		});
	}
})(jQuery);	

(function($)
{
	$.fn.image_preloader = function(options) 
	{
		var defaults = 
		{
			repeatedCheck: 500,
			fadeInSpeed: 1000,
			delay:600,
			callback: ''
		};
		
		var options = $.extend(defaults, options);
		
		return this.each(function()
		{	
			var imageContainer = jQuery(this),
				images = imageContainer.find('img').css({opacity:0, visibility:'hidden'}),
				imagesToLoad = images.length;				
				
				imageContainer.operations =
				{	
					preload: function()
					{	
						var stopPreloading = true;
												
						images.each(function(i, event)
						{	
							var image = $(this);							
							
							if(event.complete == true)
							{	
								if($.browser.opera) imagesToLoad --;
								imageContainer.operations.showImage(image);
							}
							else
							{	
								if($.browser.opera) imagesToLoad --;
								image.bind('error load',{currentImage: image}, imageContainer.operations.showImage);
							}
							
						});
						
						return this;
					},
					
					showImage: function(image)
					{	
						if(!$.browser.opera) imagesToLoad --;
						if(image.data.currentImage != undefined) { image = image.data.currentImage;}
													
						if (options.delay <= 0) image.css('visibility','visible').animate({opacity:1}, options.fadeInSpeed);
											 
						if(imagesToLoad == 0)
						{
							if(options.delay > 0)
							{
								images.each(function(i, event)
								{	
									var image = $(this);
									setTimeout(function()
									{	
										image.css('visibility','visible').animate({opacity:1}, options.fadeInSpeed, function()
										{
											$(this).parent().removeClass('preloading');
										});
									},
									options.delay*(i+1));
								});
								
								if(options.callback != '')
								{
									setTimeout(options.callback, options.delay*images.length);
								}
							}
							else if(options.callback != '')
							{
								(options.callback)();
							}
							
						}
						
					}

				};
				
				imageContainer.operations.preload();
		});
		
	}
})(jQuery);

jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});
