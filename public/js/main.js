(function($){"use strict";$(document).ready(function(){var navbarFix=$("#js-navbar-fixed");var headerOffset=navbarFix.offset().top+1;$(window).scroll(function(){if($(window).scrollTop()>headerOffset){navbarFix.addClass('fixed').removeClass("unfixed");}else{navbarFix.addClass('unfixed').removeClass("fixed");}});var navbarSelect=document.querySelector("#js-navbar-fixed.section-navbar-4, #js-navbar-fixed.section-navbar-6");if(navbarSelect){var headroom=new Headroom(navbarSelect,{classes:{initial:"headroom",pinned:"headroom--pinned",unpinned:"headroom--unpinned",top:"unfixed",notTop:"headroom--not-top",bottom:"headroom--bottom",notBottom:"headroom--not-bottom"}});headroom.init();}
var config={'.chosen-select':{disable_search_threshold:10,width:"100%"},'.chosen-select-deselect':{allow_single_deselect:true,width:"100%"},'.chosen-select-no-single':{disable_search_threshold:100,width:"100%"},'.chosen-select-no-single.no-search':{disable_search_threshold:10,width:"100%"},'.chosen-select-no-results':{no_results_text:'Oops, nothing found!'},'.chosen-select-width':{width:"95%"}};for(var selector in config){if(config.hasOwnProperty(selector)){$(selector).chosen(config[selector]);}}
var searchWidget=$('.search-widget-1'),searchWidgetIcon=$('.search-widget-1 .icon-search'),searchWidgetInput=$('.search-widget-1 input');searchWidgetIcon.on('click',function(){searchWidget.toggleClass('search-widget-open');if(searchWidgetInput.hasClass('fadeInUp')){searchWidgetInput.removeClass('fadeInUp');searchWidgetInput.addClass('fadeOutDown');}else if(searchWidgetInput.hasClass('fadeOutDown')){searchWidgetInput.removeClass('fadeOutDown');searchWidgetInput.addClass('fadeInUp');}else{searchWidgetInput.addClass('fadeInUp');}});$('.hamburger').on("click",function(){$(this).toggleClass("is-active");$('.au-navbar-mobile').slideToggle(200,'linear');});$('.au-navbar-mobile .au-navbar-menu .drop .arrow').on('click',function(e){$(this).siblings('.drop-menu').slideToggle(200,'linear');$(this).toggleClass('clicked');e.stopPropagation();});var executed=false;var waypointSelector=$('.js-waypoint');if(waypointSelector){waypointSelector.waypoint(function(){if(!executed){executed=true;$('.au-progress-1 .au-progress-bar').progressbar({update:function(current_percentage,$this){$this.find("span").html(current_percentage+'%');}});$('.au-progress-3 .au-progress-bar').progressbar({update:function(current_percentage,$this){$this.find("span").html(current_percentage+'%');}});$('.au-progress-2 .au-progress-bar').progressbar({update:function(current_percentage,$this){$this.find("span").html(current_percentage+'%');var $circle=$this.find(".bar-color");var offset=$circle.attr('stroke-dashoffset');var pct=offset-(offset*current_percentage)/100+10;$circle.css('stroke-dashoffset',pct);}});}},{offset:'bottom-in-view'});}
var counterUp=$(".counterUp");if(counterUp){counterUp.counterUp({delay:10,time:1000});}
var accordion_select=$('.accordion');if(accordion_select){accordion_select.each(function(){$(this).accordion({"transitionSpeed":400,transitionEasing:'ease-in-out'});});}
var matchHeigh=$('.matchHeigh');if(matchHeigh){matchHeigh.matchHeight();}
var $topeContainer=$('.isotope-grid');var $filter=$('.filter-tope-group');$filter.each(function(){$filter.on('click','li span',function(){var filterValue=$(this).attr('data-filter');$topeContainer.isotope({filter:filterValue});});var $buttonGroup=$('.filter-tope-group');$buttonGroup.on('click','li',function(){$buttonGroup.find('.active').removeClass('active');$(this).addClass('active');});});var $grid=$topeContainer.each(function(){$(this).isotope({itemSelector:'.isotope-item',percentPosition:true,masonry:{columnWidth:'.isotope-item'}});});$grid.imagesLoaded().progress(function(){$grid.isotope('layout');});var player=plyr.setup(".js-video");$(".plyr-video").on("click",function(){$(this).find(".poster").hide();$(this).find(".sprite").hide();player.play();});var galleryPhoto=$('.gallery-photo');galleryPhoto.magnificPopup({type:'image',gallery:{enabled:true},width:550});var careersToglle=$(".careers .au-toggle");careersToglle.find(".btn-toggle").on("click",function(){if($(this).text()=="MORE DETAILS"){$(this).html("LESS DETAILS");}else{$(this).html("MORE DETAILS");}});$(".bg-parallax").paroller();var offset=450;var duration=500;var upToTop=$("#up-to-top");upToTop.hide();$(window).on('scroll',function(){if($(this).scrollTop()>offset){upToTop.fadeIn(duration);}else{upToTop.fadeOut(duration);}});upToTop.on('click',function(event){event.preventDefault();$('html, body').animate({scrollTop:0},duration);return false;});});$(window).on('load',function(){$('.page-loader').fadeOut('slow',function(){$(this).remove();});});})(jQuery);