export let validation = function() {
    const validationWrp = document.querySelector('[data-input-wrp]') 
    if(validationWrp != null) {
        const confirmation = document.getElementById('accept');
        console.log(confirmation);
        const formWrp = document.querySelector('.js-activ');
        let form = document.querySelector('.js-form'),
        formInputs = form.querySelectorAll('.js-input'),
        inputEmail = form.querySelector('.js-input-email'),
        inputPhone = form.querySelector('.js-input-phone');

    function validateEmail(email) {
        let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        return re.test(String(email).toLowerCase());
        }

        function validateCountry(country) {
            let reC = new RegExp('.ru$');
            return reC.test(String(country).toLowerCase());
        }

        function validatePhone(phone) {
            let rePh = /^[0-9]*$/;
            return rePh.test(String(phone));
        }


        form.onsubmit = function () {
            let emailVal = inputEmail.value,
                phoneVal = inputPhone.value,
                emptyInputs = Array.from(formInputs).filter(input => input.value === '');

            formInputs.forEach(function (input) {
                if (input.value === '') {
                    input.classList.add('errorInput')
                } else {
                    input.classList.remove('errorInput')

                }
            });

            if (emptyInputs.length !== 0) {
                return false;
            }

            if (!validateEmail(emailVal)) {
                console.log("email error");
                inputEmail.classList.add('errorInput')
                return false;
            } else {
                inputEmail.classList.remove('errorInput')
            }

            if (validateCountry(emailVal)) {
                inputEmail.classList.add('errorInput');
                alert('Русский военный корабль пошел нах*й')
                return false;
            } else {
                inputEmail.classList.remove('errorInput')
            }

            if (!validatePhone(phoneVal)) {
                inputEmail.classList.add('errorInput');
                return false;
            } else {
                inputEmail.classList.remove('errorInput')
            }

            confirmation.classList.add('popup-accept__container-active');
            setTimeout(() => {
                confirmation.classList.remove('popup-accept__container-active');
                formWrp.classList.remove('popup-form__container');
                formWrp.classList.remove('popup-form__active');
            }, 3000);
        }

    }
}