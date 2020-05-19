'use strict';

// Инициализация модального окна
$('.popup-with-form').magnificPopup({
    type: 'inline',
    focus: '#form_name'
 });

// Отправка формы обратной связи.
$(document).ready(function(){
    $('#button_contacts').click(function(){
        var form_name = $('#form_name').val();
        var form_message = $('#form_message').val();
        var form_capcha = $('#form_capcha').val();
        $.ajax({
            url: "wp-content/themes/cash_flow/functions-parts/post-form.php", 
            type: "post", 
            dataType: "json", 
            data: { 
                "form_name":   form_name,
                "form_message": form_message,
                "form_capcha": form_capcha
            },
            success: function(data){
                $('.messages').html(data.result); 
            }
        });
    });
});
