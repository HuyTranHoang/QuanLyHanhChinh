$(document).ready(function(){
    $('#maPhong').change(function(){
        let inputValue = $(this).val();
        $.post('views/api.php', { maPhong: inputValue }, function(data){
            $('#maNV').html(data);
        });
    });
});