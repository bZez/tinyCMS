var scrolled=0;
wh = $(window).height();
ww = $(window).width();
$(function() {
    $("#downClick").on("click" ,function(){
                scrolled=scrolled+wh;
        
				$("body").animate({
				        scrollTop:  scrolled
				   });

			});

    
    $("#upClick").on("click" ,function(){
				scrolled=scrolled-wh;
				
				$("body").animate({
				        scrollTop:  scrolled
				   });

			});
});