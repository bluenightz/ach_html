$(function(){

	// home gallery script
    $('.home-gallery').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });


    $("#googleMap").on("shown.bs.modal", function(e){
        $("#googleMapBox").width("100%").height(400);
        if( $("#googleMapBox > div").length == 0 ){
            $('#googleMapBox').gmap3({
              center:[13.793645,100.57496], 
              zoom: 13,
              mapTypeId : google.maps.MapTypeId.ROADMAP
            })
            .marker({
                position:[13.793645,100.57496]
            });
        }
    });


    // dotdotdot ...
    $(".course-desc").dotdotdot();


    // faq
    $(".ask").click(function(e){
        e.preventDefault();
        $(this).next().toggleClass("open");
    });


    // testimonial
    $('.grid').masonry({
      // options
      itemSelector: '.grid-item'
    });
    

});