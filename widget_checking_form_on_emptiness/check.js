function checkForm(){
    console.log('ok');
    var phone = document.getElementById("phone").value;
    var name = document.getElementById("name").value;
    var message = document.getElementById("message").value;
    console.log(phone);
    console.log(name);
    console.log(message);

    if (phone == '')
    {
        alert("Укажите, пожалуйста, телефон.");
        return false;
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'send.php',
            data: 'contact_name='+name+'&contact_phone='+phone+'&message='+message+'',
            success: function(data){
                alert('Спасибо! Ваша заявка успешно отправлена!')
                $("#form")[0].reset();
            }
        });
    }
}
