//()=>{} создание функции

$(document).ready(()=>{
    $("#btn").click(()=>{
        sendAjaxRequest(); //срабатывает по нажатию кнопки 
        
        
        let inputForm = document.querySelectorAll('#ajax_form input');
        
        for (var i=0; i<inputForm.length; i++) {
            if (inputForm[i].value == '') {
                inputForm[i].classList.add("error_input");
            }
            else {
                inputForm[i].classList.remove("error_input");
            }
        }
        
        return false; //запрещаем обновление страницы
    });
    
    // функция для отправки ajax запроса на сервер
    function sendAjaxRequest(){
        $.ajax({
            url: 'action_form_ajax.php', //куда отправляются данные
            type: 'POST', //метод отправки данных
            dataType: 'html', //html, xml, json, jsonp
            data: $("#ajax_form").serialize(), //отправляемые данные
            success: function(response) {
                $('#response').html(response);
            },
            error: function() {
                $('#response').text("Получить данные не удалось");
            }
        });
    }
});