var $ = jQuery;
var swiper = new Swiper(".mySwiper", {
    freeMode: true,
    grabCursor: true,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});
var stickerSwiper = new Swiper(".stickerProductSwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    // pagination: {
    //   el: ".swiper-pagination",
    // },
    slidesPerView: 2,
    spaceBetween: 5,
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 15
      }
    }
});
var bookSwiper = new Swiper(".bookProductSwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    // pagination: {
    //   el: ".swiper-pagination",
    // },
    slidesPerView: 2,
    spaceBetween: 5,
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 15
      }
    }
});
var mugSwiper = new Swiper(".mugProductSwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    // pagination: {
    //   el: ".swiper-pagination",
    // },
    slidesPerView: 2,
    spaceBetween: 5,
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 15
      }
    }
});
var sheetStickerSwiper = new Swiper(".sheetStickerProductSwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    // pagination: {
    //   el: ".swiper-pagination",
    // },
    slidesPerView: 2,
    spaceBetween: 5,
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 15
      }
    }
});
var lastPostBlogSwiper = new Swiper(".lastPostBlogSwiper", {
    // navigation: {
    //   nextEl: ".swiper-button-next",
    //   prevEl: ".swiper-button-prev",
    // },
    pagination: {
      el: ".lastPostSwiper-pagination",
    },
    slidesPerView: 2,
    spaceBetween: 10,
    breakpoints: {
      480: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
});
// var irFactoryProductSwiper = new Swiper(".irFactoryProductSwiper", {
//     navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev",
//     },
//     pagination: {
//       el: ".irFactorySwiper-pagination",
//     },
//     slidesPerView: 5,
//     spaceBetween: 10,
// });



$(document).ready(function(){
  if($(window).width() < 480){
    $('.kadinerMobileMenuContainer>.productMenu>ul>.menu-item-has-children>a , .kadinerMobileMenuContainer>.productMenu>ul>.menu-item-has-children>ul>.menu-item-has-children>a').after('<svg height="15" width="15" fill="#d6d6d6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" xml:space="preserve"><path d="M325.607 79.393c-5.857-5.857-15.355-5.858-21.213.001l-139.39 139.393L25.607 79.393c-5.857-5.857-15.355-5.858-21.213.001-5.858 5.858-5.858 15.355 0 21.213l150.004 150a14.999 14.999 0 0 0 21.212-.001l149.996-150c5.859-5.857 5.859-15.355.001-21.213z"></path></svg>');
    $('.menuProductParent').click(function (e) { 
      e.preventDefault();
      $('.kadinerMobileMenuContainer').css('display' , 'block');
      $('.kadinerMobileMenuContainer').addClass('showKadinerMobileMenu');
      // $('.kadinerMobileMenuContainer').fadeIn(300);
      $('.mainSiteOverlay').addClass('showSiteOverlay');
      // console.log('clickkk');
    });
    $('.mainSiteOverlay , .mobileMenuClose').click(function(){
      $('.mainSiteOverlay').removeClass('showSiteOverlay');
      $('.kadinerMobileMenuContainer').removeClass('showKadinerMobileMenu');
      $('.kadinerMobileMenuContainer').css('display' , 'none');
    });
    $('.kadinerMobileMenuContainer .productMenu>ul>.menu-item-has-children>svg').click(function () { 
      $('.productMenu>ul>.menu-item-has-children>ul').slideUp(300);
        if($(this).siblings("ul").css('display') == 'block'){
            // console.log(click);
            $(this).siblings('ul').slideUp(400);
        }
        else{
            $(this).siblings('ul').slideToggle(400);
        } 
    });
    $('.kadinerMobileMenuContainer .productMenu>ul>.menu-item-has-children>ul>.menu-item-has-children>svg').click(function () { 
      $('.productMenu>ul>.menu-item-has-children>ul>.menu-item-has-children>ul').slideUp(300);
        if($(this).siblings("ul").css('display') == 'block'){
          // console.log(click);
          $(this).siblings('ul').slideUp(400);
        }
        else{
            $(this).siblings('ul').slideToggle(400);
        } 
    });
  }
  $('.navbarSearchIcon').click(function () { 
    $('.js-dgwt-wcas-enable-mobile-form').trigger('click');
  });

  // let updateButton = $('body.woocommerce-cart.woocommerce-page.woocommerce-js td.actions button.button[name="update_cart"]');
  // $(document).on('change','.qty',function(){
      
  //     setTimeout(function(){
  //         updateButton.trigger('click');
  //     },700);
  // });
});

$(document).ready(function () {
  $( '.add_to_cart_button' ).on( 'click', function(){
      $(this).addClass('loading');
   });
  $( '.single_add_to_cart_button' ).on( 'click', function(){
      $(this).addClass('loading');
   });
});