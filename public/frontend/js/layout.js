var headerMenu = $('header .navSidebar ul.menu');

function closePopup(){
    $('.overlay').fadeOut(300, function (){
        $('.popup').fadeOut(300);
        closeTopMenu();
    });
}

function getToken(){
    return $('meta[name="csrf-token"]').attr('content');
}

function showPopup(popupName, scrollTop = null){

    var popupItem = $('.popup.'+popupName);

    $('.overlay').fadeIn(300, function (){
        popupItem.fadeIn(300);
    });

    if(scrollTop != null)
        popupItem.css({top: scrollTop});

}

function showTopMenu(){

    $('.overlay').fadeIn(300, function (){
        headerMenu.fadeIn(300);
    });
}

function closeTopMenu(){
    var windowWidth = +$(window).width();

    if(windowWidth <= 800 && headerMenu.is(':visible')){
        $('.overlay').fadeOut(300, function (){
            headerMenu.fadeOut(300);
        });
    }
}

$(document).on('click', '.popup .close, .overlay', function (){
    closePopup();
});



// open menu
$(document).on('click', 'header .navSidebar .burger', function (){
    showTopMenu();
});

$(document).on('click', 'header .navSidebar ul.menu li.close', function (e){
    closeTopMenu();
});

$(document).on('click', 'header .navSidebar ul.menu li.hasChild a', function (e){
   var windowWidth = +$(window).width();

   if(windowWidth <= 800){

       if(!$(this).hasClass('active')){
           e.preventDefault();
           $(this).addClass('active');
           $(this).closest('li').find('ul:first').addClass('active');
       }

   }

});






