$(document).on('click', '.adminArea .content .items .item a.btn', function (e){
    e.preventDefault();
    var popup = $(this).data('popup');

    if(popup === 'clearDatabase'){
        Swal.fire({
            title: 'Do you want to Clear Database?',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: `Yes`,
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                   url: '/admin/clear/database',
                   data: {_token: getToken()},
                   type: 'POST',
                   success: function (data){
                       Swal.fire('Cleared!', '', 'success');
                   },

                   error: function (){
                       window.location.reload();
                   }
                });

            }
        });
    }else{
        showPopup(popup);
    }

});

