$(document).ready(function () {
    //load the table view
    $('#table-view').click(function () {
        $.ajax({
            type:'GET',
            url:'/medicine/table/view',
            success:function (data) {
                $('#medicine').html(data);
            }
        });

    });
    //load card view

    $('#card-view').click(function () {
        $.ajax({
            type:'GET',
            url:'/medicine/card/view',
            success:function (data) {
                $('#medicine').html(data);
            }
        });

    });
    $('#create-card-form').submit(function (event) {
        event.preventDefault();
        $.ajax({
            type:'POST',
            url:'/cards',
            data:$(this).serialize(),
            success:function (data) {
                if(data.id){
                    $('#create-card').modal('hide');
                }

            },
            error: function (error) {
                $('#error').html(error.responseJSON.message);
                
            }
        });
    });


});