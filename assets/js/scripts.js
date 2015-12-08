$(document).ready(function(e){
	"use strict";
	
	function f(){
		if(e(window).scrollTop()>40&&t>480){
			e(".site-back-top").fadeIn()
		}else{
			e(".site-back-top").fadeOut()
		}
	}
	
	var t=window.innerWidth;
	var n=window.innerHeight;
	
	var r=function(){
		if(t>1199){
			e(".header-menu *").unbind();
			e(".header-menu .sub").hoverIntent({
				timeout:100,
				over:function(){
					e(this).addClass("active");
					e(this).children("ul").slideDown("fast")
				},
				out:function(){
					e(this).removeClass("active");
					e(this).children("ul").slideUp("fast")}
				}
			)
		}else{
			e(".header-menu *").unbind();
			e(".header-menu .sub > a").click(function(t){
				t.preventDefault();
				e(".header-menu li ul").slideUp("normal");
				e(".header-menu li").removeClass("active");
				var n=e(this).siblings("ul");
				
				if(n.is(":visible")){
					n.slideUp("normal");
					e(this).parent().removeClass("active")
				}else{
					n.slideDown("normal");
					e(this).parent().addClass("active")
				}
			})
		}
	};
	
	e(".site-toggle").click(function(t){
		t.preventDefault();
		var n=e(".site-header");
		var r=e(".site-toggle");
		
		if(e(n).is(":visible")){
			e(n).animate({
				left:"-200px"
			},
			200,
			function(){
				e(n).hide();
				e("body").removeClass("sidebar-on")
			});
			e(r).animate(
				{left:"0px"},200
			)
		}else{
			e("body").addClass("sidebar-on");
			e(n).show();
			e(n).animate(
				{left:"0px"},
				{duration:200,queue:false}
			);
			e(r).animate(
				{left:"200px"},
				{duration:200,queue:false}
			)
		}
	});
	
	var i=function(){
		if(t>1199){
			e(".site-toggle, .site-header, .header-menu ul").removeAttr("style");
			e(".header-menu li").removeClass("active");
			e("body").removeClass("sidebar-on")
		}
	};
	
	var s=e("#owl-team");
	s.owlCarousel({
		items:3,
		itemsDesktop:[1400,3],
		itemsDesktopSmall:[1100,2],
		itemsTablet:[600,2],
		itemsMobile:[400,1],
		pagination:true,
		navigation:false
	});
	
	var o=e("#owl-testimonials");
	o.owlCarousel({
		items:1,
		itemsDesktop:[1400,1],
		itemsDesktopSmall:[1100,1],
		itemsTablet:[600,1],
		itemsMobile:[400,1],
		pagination:true,
		navigation:false
	});
	
	var u=e(".owl-gallery");
	u.owlCarousel({
		items:1,
		itemsDesktop:[1400,1],
		itemsDesktopSmall:[1100,1],
		itemsTablet:[600,1],
		itemsMobile:[400,1],
		pagination:true,
		navigation:false,
		navigationText:false
	});
	
	var a=function(){
		if(t>991){
			var n=e(".masonry-list");
			n.imagesLoaded(function(){
				n.masonry({
					itemSelector:".item",
					columnWidth:".grid-sizer",
					isAnimated:true
				})
			})
		}else{
			e(".masonry-list").masonry("destroy")
		}
	};
	
	e(".video-full").fitVids();
	e("a[data-rel^='prettyPhoto']").prettyPhoto({
		theme:"light_square",
		social_tools:false,
		deeplinking:false
	});
	
	e(".leave-new").click(function(t){
		t.preventDefault();
		var n=e(".comment-form").offset();
		e("html, body").animate(
			{scrollTop:n.top},800
		)
	});
	
	e(".site-back-top").click(function(t){
		t.preventDefault();
		e("body,html").animate(
			{scrollTop:0},800
		)
	});
	
	e(".google-map-1").width("100%").height("330px").gmap3({
		map:{
			options:{
				center:[-7.020125, 110.419518],
				zoom:15,
				scrollwheel:false,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			}
		},
		marker:{
			latLng:[-7.020125, 110.419518]
		}
	});
	
	e(".google-map-2").width("100%").height("614px").gmap3({
		map:{
			options:{
				center:[-7.020125, 110.419518],
				zoom:15,
				scrollwheel:false,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			}
		},
		marker:{
			latLng:[-7.020125, 110.419518]
		}
	});
	
	var l=e(".galleria");
	if(l.length==!0){
		Galleria.loadTheme("assets/js/galleria.classic.js");
		Galleria.run(".galleria",{
			imageCrop:true,
			transition:"fade",
			autoplay:7e3,
			idleMode:false,
			showInfo:true,
			_toggleInfo:false,
			height:n
		})
	} 
	e(window).scroll(function(){
		f()
	});
	
	e(window).load(function(){
		e(".site-loader").delay(100).fadeOut("slow");
		r();
		a();
		f();
	});
	
	e(window).resize(function(){
		t=window.innerWidth;
		n=window.innerHeight;
		r();
		i();
		a();
		f()
	});
	
	function halo(){
		console.log("hehe");
	}
})