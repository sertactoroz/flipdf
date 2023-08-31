

$(document).ready(function () {

    const signinPassword = document.getElementById('signin-password');
    const togglePassword = document.getElementById('signin-toggle-password');

    //Hide/Show Password
    togglePassword.addEventListener('click', function (e) {

        const type = signinPassword.getAttribute('type') === 'password' ? 'text' : 'password';
        signinPassword.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
    //Submit Form with ajax - Asynchronous JavaScript and XML
    $("#signin-button").click(function (event) {

        var formData = {
            email: $("#signin-email").val(),
            password: $("#signin-password").val(),
        };

        console.log('formData', formData)

        $.ajax({
            type: "POST",
            url: "../api/signin.php",
            data: formData,
            dataType: 'json',
            encode: false,
        }).done(function (data) {
            console.log('Response data:', data);
            if (data.success) {
                //Mesajı göster 
                $("#signin-response-message").html('<div class="valid">' + data.message + '</div>');
                //1 saniye bekle ve anasayfaya git

                setTimeout(function () {
                    // $('#useractive').css('display', 'block');
                    // $('#userinactive').css('display', 'none');
                    window.location.href = "../screens/index-screen.php";
                }, 1000);
            } else {
                $("#signin-response-message").html(
                    '<div class="alert alert-fail">' + data.message + "</div>"
                );
            }
        }).fail(function (data) {
            console.log('test1', data)
            $("#signin-response-message").html(
                '<div class="alert alert-fail">' + data.message + "</div>"
            );

        });
        event.preventDefault();
    });
    // $("#logout").click(function (event) {
    //     console.log(event);

    // });

});