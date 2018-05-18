$(function () {
    $("#warehouses").DataTable();
    $("#products").DataTable();

});

$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.warehouses').click(function () {
        var id = $(this).data('warehouse-id');

        if (confirm('Are you sure you want to delete?')) {

            $.ajax({
                type: "post",
                url: document.location.origin + '/warehouses/'+ id,
                data: {id: id, _method: 'delete'},
                success: function (del) {
                    console.log(id + ' удалилось');
                    // window.location.reload(true);
                    $('#'+id).remove();
                },
                error: function () {
                    console.log("ошибка");
                }
            });

        }
    });

    $('.product').click(function () {
        var id = $(this).data('product-id');

        if (confirm('Are you sure you want to delete?')) {

            $.ajax({
                type: "post",
                url: document.location.origin + '/product/'+ id,
                data: {id: id, _method: 'delete'},
                success: function (del) {
                    console.log(id + ' удалилось');
                    // window.location.reload(true);
                    $('#'+id).remove();
                },
                error: function () {
                    console.log("ошибка");
                }
            });

        }
    });



});


