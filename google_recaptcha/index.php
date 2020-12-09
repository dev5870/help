// v2
// добавляем в форму
<div class="g-recaptcha" data-sitekey="apiKey"></div>

// v3
// вниз добавляем
<script src="https://www.google.com/recaptcha/api.js?render=apiKey" ></script>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('apiKey', { action: 'contact' }).then(function (token) {
            var recaptchaResponse = document.getElementById('recaptchaResponse');
            recaptchaResponse.value = token;
            console.log(token);
        });
    });
</script>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('apiKey', { action: 'contact' }).then(function (token2) {
            var recaptchaResponse2 = document.getElementById('recaptchaResponse2');
            recaptchaResponse2.value = token2;
            console.log(token2);
        });
    });
</script>

// затем для каждой формы соответствующий инпут
<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
