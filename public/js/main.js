getSubCats = function ($val){
    $.get(window.location.href+'/sub_categories/'+$val
        ,function(data){
            $('.sub-type').html(data);
            subCatFun();
            $('.sub-cat a:first').click();
        })
};
setProducts = function (data){
    $('.products').parent().html(data);
    $('.product a').nivoLightbox({
        effect: 'slideDown',
        keyboardNav: true,
    });
    var $container = $('.products');
    if(!$container.hasClass('isotope')){
        $container.isotope({
            filter: '*',
            transformsEnabled: false,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
    }
    else {
        $container.isotope('destroy');
        $container.isotope({
            filter: '*',
            transformsEnabled: false,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
    }
    $("ul.pagination a").on('click',function (evt){getPage ($(this).data('url'))});
};

subCatFun = function (){
    $('.sub-cat a').click(function() {
        $('.sub-cat .active').removeClass('active');
        $(this).addClass('active');
        var id = $(this).data('id');
        getProducts(id);
        // var selector = $(this).attr('data-filter');
        // $container.isotope({
        //     filter: selector,
        //     animationOptions: {
        //         duration: 750,
        //         easing: 'linear',
        //         queue: false
        //     }
        // });
        return false;
    });
};
getProducts = function ($val){
    $.get(window.location.href+'/category_products/'+$val
        ,function(data){
        setProducts(data);
        })
};

getPage = function ($val){
    $.get($val,function(data){
            setProducts(data);
        })
};
function main() {

(function () {
   'use strict';
   
  	$('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 900);
            return false;
          }
        }
      });
    // Show Menu on Book
    $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 500;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar-default').addClass('on');
        } else {
            $('.navbar-default').removeClass('on');
        }
    });

    $('body').scrollspy({ 
        target: '.navbar-default',
        offset: 80
    });

	// Hide nav on click
  $(".navbar-nav li a").click(function (event) {
    // check if window is small enough so dropdown is created
    var toggle = $(".navbar-toggle").is(":visible");
    if (toggle) {
      $(".navbar-collapse").collapse('hide');
    }
  });
	
  	// Portfolio isotope filter
    $(window).load(function() {
        var $container = $('.products');
        if($container.attr('dir') == 'rtl') {
            $.Isotope.prototype._positionAbs = function (x, y) {
                return {right: x, top: y};
            };
        }
        $container.isotope({
            filter: '*',
            transformsEnabled: false,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var catId = $(this).attr('data-id');
            getSubCats(catId);
            // $('.sub-cat').firstChild.click();
            // var selector = $(this).attr('data-filter');
            // $container.isotope({
            //     filter: selector,
            //     animationOptions: {
            //         duration: 750,
            //         easing: 'linear',
            //         queue: false
            //     }
            // });
            return false;
        });
        subCatFun();
        $("ul.pagination a").on('click',function (evt){getPage ($(this).data('url'))});

    });
	
    // Nivo Lightbox 
    $('.product a').nivoLightbox({
            effect: 'slideDown',  
            keyboardNav: true,                            
        });

}());


}
main();