$(document).ready(function(){
    $('#maPhong').change(function(){
        let inputValue = $(this).val();
        $.post('views/submit.php', { maPhong: inputValue }, function(data){
            $('#maNV').html(data);
        });
    });
});