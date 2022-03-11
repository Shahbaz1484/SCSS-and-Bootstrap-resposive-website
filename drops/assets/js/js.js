
$(document).ready(function(){

    // For Menu
    $(".mycollape-btn").click(function(){
        $(this).toggleClass('mycollape-btn_active');

        if ($(".mycollape-btn").hasClass("mycollape-btn_active")) {
            $('body').toggleClass("overflow-hidden body_active");
            $('header').children('.container-fluid').toggleClass('position-relative');
            $('header .navbar').children().toggleClass('position-relative');
            $('header .navbar').children(':not(.mobile-phone)').toggleClass('z-index-5');
            $('header div.navbar-collapse').toggleClass('d-none');
            $('.mobile-phone').toggleClass('z-index-m-1');
        }
        else{
            $('body').toggleClass("overflow-hidden body_active");
            $('header').children('.container-fluid').toggleClass('position-relative');
            $('header .navbar').children().toggleClass('position-relative');
            $('header .navbar').children(':not(.mobile-phone)').toggleClass('z-index-5');
            $('header div.navbar-collapse').toggleClass('d-none');
            $('.mobile-phone').toggleClass('z-index-m-1');
        }
   });

   // For SelectBox
   $('.selectbox-btn + .dropdown-menu .dropdown-item').click(function(){
      let dropdow_item = $(this).text();
      $(this).parent('.dropdown-menu').parent('.dropdown').children('.selectbox-btn').addClass('selectbox-btn_active').text(dropdow_item);
   });

   $('.selectbox-btn').click(function(){
     $(this).removeClass('selectbox-btn_active');
   });

  
});