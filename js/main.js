$(document).ready(function () {
    $('#maPhong').change(function () {
        let inputValue = $(this).val();
        $.post('views/api.php', {maPhong: inputValue}, function (data) {
            $('#maNV').html(data);
        });
    });


    $('#addpb').click(function (e) {
        let tenPhong = $('#tenPhong').val();
        let vietTat = $('#vietTat').val();
        let ghiChu = $('#ghiChu').val();
        $.post('views/api.php', {
            tenPhong: tenPhong,
            vietTat: vietTat,
            ghiChu: ghiChu,
            addpb: 'addpb'
        }, function (data) {
            $('#tablePB').append(data);
            toastr["info"](`Thêm thành công phòng ${tenPhong}`);
        });
        $('#tenPhong').val('');
        $('#vietTat').val('');
        $('#ghiChu').val('');
    });

    $('#tablePB').on("click", ".btnXoa", function () {
        let id = $(this).data('id');
        let act = $(this).data('act');
        let parent_tr = $(this).parents('tr');
        if (act == 'phongban') {
            $.post('views/api.php', {maPhongPB: id, confirm: 'confirm'}, function (data) {
                $('#confirm').html(data);
            });

            $('#formPB').on("click", "#btnConfirm", function () {
                let id = $(this).data('id');
                let act = $(this).data('act');
                if (act == 'phongban') {
                    $.post('views/api.php', {id: id, delete: 'delete'}, function (data) {
                        parent_tr.remove();
                        $('#confirm').html('');
                    }).done(function() {
                        toastr.options.preventDuplicates = true;
                        toastr["info"](`Xóa thành công phòng id ${id}`);
                    });
                }
            });
        }

    });


    // $( '.btnXoa' ).click(function() {
    //     let id = $(this).data('id');
    //     let act = $(this).data('act');
    //     if (act == 'phongban') {
    //         $.post('views/api.php', { maPhongPB: id, confirm: 'confirm' }, function(data){
    //             $('#confirm').html(data);
    //         });
    //     }
    // });


});