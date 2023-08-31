

$(document).ready(function () {

    const signupButton = document.getElementById("signup-button");
    const letter = document.getElementById("letter");
    const capital = document.getElementById("capital");
    const number = document.getElementById("number");
    const length = document.getElementById("length");
    const togglePassword = document.getElementById('signup-toggle-password');
    const invalidPasswordMessage = document.getElementById('invalid-password-message');

    const passwords = document.querySelectorAll('#password, #re-password');
    var allConditionsMet;

    //Hide/Show Password
    togglePassword.addEventListener('click', function (e) {
        passwords.forEach(v => {
            const type = v.getAttribute('type') === 'password' ? 'text' : 'password';
            v.setAttribute('type', type);
        });
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });

    // When the user clicks on the password field, show the message box
    passwords[0].onfocus = function () {
        invalidPasswordMessage.style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    passwords[0].onblur = function () {
        invalidPasswordMessage.style.display = "none";
    }

    // When the user starts to type something inside the password field
    passwords[0].onkeyup = function () {

        var lowerCaseLetters = /[a-z]/g;
        var upperCaseLetters = /[A-Z]/g;
        var numbers = /[0-9]/g;
        var validLength;
        if (passwords[0].value.length >= 8) {
            validLength = true;
        } else {
            validLength = false;
        }
        var lowercaseValid = passwords[0].value.match(lowerCaseLetters);
        var uppercaseValid = passwords[0].value.match(upperCaseLetters);
        var numbersValid = passwords[0].value.match(numbers);

        letter.classList.toggle("valid", lowercaseValid);
        letter.classList.toggle("invalid", !lowercaseValid);
        capital.classList.toggle("valid", uppercaseValid);
        capital.classList.toggle("invalid", !uppercaseValid);
        number.classList.toggle("valid", numbersValid);
        number.classList.toggle("invalid", !numbersValid);
        length.classList.toggle("valid", validLength);
        length.classList.toggle("invalid", !validLength);

        // Check if all conditions are true
        allConditionsMet = (lowercaseValid && uppercaseValid && numbersValid && validLength);

    }
    passwords[1].onkeyup = function () {
        // Enable or disable the submit button based on the conditions
        passwordMatch = (passwords[0].value === passwords[1].value);
        // Hide message box element after a second
        if (allConditionsMet && passwordMatch) {
            signupButton.disabled = false;
            console.log('signup button activated')

        }
    }
    //Submit Form with ajax - Asynchronous JavaScript and XML

    $("#signup-button").click(function (event) {
        console.log('clicked')
        var formData = {
            name: $("#name").val(),
            surname: $("#surname").val(),
            email: $("#email").val(),
            password: $("#password").val(),
        };

        $.ajax({
            type: "POST",
            url: "../signup.php",
            data: formData,
            dataType: 'json',
            encode: false,
        }).done(function (data) {
            console.log('done', data)

            if (data.success) {
                console.log('data', data)
                //Mesajı göster 
                $('#signup-response-message').html('<div class="valid">' + data.message + '</div>');
                //1 saniye bekle ve anasayfaya git

                setTimeout(function () {
                    // $('#useractive').css('display', 'block');
                    // $('#userinactive').css('display', 'none');
                    // window.location.href = "index-screen.php#home";
                }, 1000);
            } else {
                $('#signup-response-message').html(
                    '<div class="alert alert-fail">' + data.message + "</div>"
                );
            }
        }).fail(function (data) {
            $('#signup-response-message').html(
                '<div class="alert alert-fail">' + data.message + "</div>"
            );

        });
        event.preventDefault();
    });
    // $("#logout").click(function (event) {
    //     console.log(event);

    // });

});