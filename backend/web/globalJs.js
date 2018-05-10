$(document).ready(function () {
    $('body').on('beforeSubmit', 'form#dynamic-form111', function () {
        var form = $(this);
        // return false if form still have some validation errors
        if (form.find('.has-error').length)
        {
            return false;
        }
        // submit form
        $.ajax({
            url    : form.attr('action'),
            type   : 'post',
            data   : form.serialize(),
            success: function (response)
            {
                $('#modal').modal('hide');
                var getupdatedata = $(response).find('#filter_id_test');
                // $.pjax.reload('#note_update_id'); for pjax update
                $('#yiiikap').html(getupdatedata);
                //console.log(getupdatedata);
            },
            error  : function ()
            {
                console.log('internal server error');
            }
        });
        return false;
    });
});