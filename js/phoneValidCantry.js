export let phoneValidCantry = function() {
    var input = document.querySelector('#phone'),
    errorMsg = document.querySelector("#error-msg"),
      validMsg = document.querySelector("#valid-msg");
    var errorClasse = document.querySelector('.js-input-phone')
    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
    var intl = window.intlTelInput(input, {
      initialCountry: "auto",
      geoIpLookup: function (success, failure) {
        $.get('http://ip-api.com/json/', function () { }, 'jsonp').always(
          function (resp) {
            var countryCode =
              resp && resp.countryCode ? resp.countryCode : '';
            success(countryCode);
          },
        );
      },
      utilsScript: "js/utils.js"
    });

    var reset = function () {
      input.classList.remove("error");
      errorMsg.innerHTML = "";
      errorMsg.classList.add("hide");
      validMsg.classList.add("hide");
    };

    // Validate on blur event
    input.addEventListener('blur', function () {
      reset();
      if (input.value.trim()) {
        if (intl.isValidNumber()) {
          validMsg.classList.remove("hide");
          errorClasse.classList.remove("errorInput")
          console.log("err");
        } else {
          input.classList.add("error");
          var errorCode = intl.getValidationError();
          errorMsg.innerHTML = errorMap[errorCode];


          errorMsg.classList.remove("hide");
          console.log(errorMsg.classList.contains('hide'));
          errorClasse.classList.remove("errorInput");
          if (errorMsg.classList.contains('hide') === false) {
            errorClasse.classList.add("errorInput")
          }

        }
      }
      // console.log(errorMsg.classList.contains);

    });

    // Reset on keyup/change event
    input.addEventListener('change', reset);
    input.addEventListener('keyup', reset);

}
 