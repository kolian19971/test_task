var searchInput = $('.search .searchBg .content form input[type=text]'),
    map = null,
    markers = [],
    defaultCenterLatLng = { lat: 24.316393, lng: -25.634045 },
    defaultZoom = 2;

function initMap() {

    if(map == null){
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: defaultZoom,
            center: defaultCenterLatLng
        });
    }
}

function clearOfficeActive(){
    $('.popup .offices .office').removeClass('active');
}

function resetMap(){
    if(markers.length > 0){
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }

        markers = [];
    }

    map.setCenter(defaultCenterLatLng);
    map.setZoom(defaultZoom);

}

$(document).ready(function (){

    //init top slider
    $('.homeSlider').slick({
        lazyLoad: 'ondemand',
        dots: true,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1
    });

    //init portfolio slider
    $('.portfolio .content .portfolioSlider').slick({
        infinite: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        prevArrow: $('.portfolioArrows .arrow.prev'),
        nextArrow: $('.portfolioArrows .arrow.next'),

        responsive: [
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },

            {
                breakpoint: 550,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerMode: true,
                    variableWidth: true
                }
            },


            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    variableWidth: true
                }
            },



        ]

    });


    //set zip mask on search input
    searchInput.mask('000000');

    //init autocomplete by zip code
    searchInput.autocomplete({
        source: function( request, response ) {
            $.ajax({
                url: '/get/autocomplete/hints',
                type: 'POST',
                data: {
                    _token: getToken(),
                    zip: request.term
                },
                success: function( data ) {
                    response( data );
                },
                error: function () {
                    window.location.reload();
                }
            });
        }
    });

});

//on search
$('.search .searchBg .content form').on('submit', function (e) {

    e.preventDefault();

    var action = $(this).attr('action');

    $.ajax({
        url: action,
        type: 'POST',
        data: {
            _token: getToken(),
            zip: searchInput.val()
        },
        success: function( data ) {

            resetMap();

            //if office is not found
            if(data.isset == 0){
                //clear search input
                searchInput.val('')

                //error message
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'No offices found. Please enter a new postcode!'
                });
            }else{
                // if okey
                var popupName = 'search';
                showPopup(popupName, $(window).scrollTop());

                if(data.offices.length > 0){

                    data.offices.forEach((item) => {
                        var latLng = {
                                lat: +item.latitude,
                                lng: +item.longitude
                            },
                            name = item.name,
                            marker = new google.maps.Marker({
                                position: latLng,
                                title: name
                            });

                        markers.push(marker);

                        marker.setMap(map);
                    });


                    $('.popup.'+popupName+' .offices').html(data.office_html);

                }

            }
        },
        error: function () {
            window.location.reload();
        }
    });

});


// set center map on click on office item
$(document).on('click', '.popup .offices .office', function (){
   var markerKey = $(this).data('key');

   clearOfficeActive();
   $(this).addClass('active');

   if(typeof markers[markerKey] != "undefined"){
       map.setCenter(markers[markerKey].getPosition());
       map.setZoom(18);
   }

});
