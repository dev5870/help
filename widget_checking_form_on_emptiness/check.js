function check0(){
    console.log('ok');
    var phone0 = document.getElementById("phone0").value;
    var name0 = document.getElementById("name0").value;
    var message0 = document.getElementById("message0").value;
    console.log(phone0);
    console.log(name0);
    console.log(message0);

    if (phone0 == '')
    {
        alert("Укажите, пожалуйста, телефон.");
        return false;
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'send.php',
            data: 'contact_name='+name0+'&contact_phone='+phone0+'&message='+message0+'',
            success: function(data){
                alert('Спасибо! Ваша заявка успешно отправлена!')
                $("#pwebcontact267_form")[0].reset();
            }
        });
    }
}