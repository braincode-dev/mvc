// window.location.reload();
$(document).ready(function(){


    $('#add-user').click(function (e) {
        e.preventDefault();

        var form = $('#add-user-form');
        var formData = form.serialize();

        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData,
            success: function (data){
                window.location.reload();
                alert(data);

            }
        });

    })

    $('#update-user').click(function (e) {
        e.preventDefault();

        var form = $('#update-user-form');
        var formData = form.serialize();

        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData,
            success: function (data){
                alert(data);
                window.location.reload();

            }
        });

    })

    $('.delete-user').click(function (e) {
        e.preventDefault();
        var id_del = $(this).attr('id-del');

        // alert(id);
        $.ajax({
            type: 'POST',
            // url: 'index',
            data: {id_del:id_del},
            success: function (data){
                alert("This user delete");
                window.location.reload();
            }
        });
    })



});





