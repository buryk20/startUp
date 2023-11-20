@extends('layout')

@section('title'){{ __('out-works.metaTitle') }}@endsection
@section('metaDiscription'){{ __('out-works.metaDescription') }}@endsection

@section('main_content')
<main>
    <div class="out-works wrp-margin">
        <h1 class="title-h1">
            {{ __('out-works.title') }}
        </h1>
        <section class="out-works__description-wrp">
            <p class="out-works__text">
                {{ __('out-works.titleText') }}
            </p>
            <button data-btn-open-modal class="main-request__button-request btn-pop-up out-works__btn">
                {{ __('out-works.btn') }}
            </button>
        </section>
        <div class="out-works__list-wrp">
            <div class="out-works__cont-wrp">
                <div class="out-works__cont-img-wrp">
                    <img src="../img/calculator_universal_logo.svg" alt="calculator universal">
                </div>
                <p class="out-works__cont-title">{{ __('out-works.calcTitle') }}</p>
                <ol class="out-works__ul">
                    <li>
                        <p class="out-works__ul-item">{{ __('out-works.logoDev') }}</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">{{ __('out-works.websiteLayout') }}</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">Front end</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">Back end</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">{{ __('out-works.SeoOptimization') }}</p>
                    </li>
                </ol>
            </div>
            <div class="out-works__cont-wrp">
                <div class="out-works__cont-img-wrp">
                    <img src="../img/green-peace-logo.png" alt="Green Peace Oddesa">
                </div>
                <p class="out-works__cont-title">{{ __('out-works.greenPeaceTitle') }}</p>
                <ol class="out-works__ul">
                    <li>
                        <p class="out-works__ul-item">{{ __('out-works.logoDev') }}</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">{{ __('out-works.websiteLayout') }}</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">Front end</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">Back end</p>
                    </li>
                </ol>
            </div>
            <div class="out-works__cont-wrp">
                <div class="out-works__cont-img-wrp">
                    <img src="../img/logicfox-logo.svg" alt="logicfox">
                </div>
                <p class="out-works__cont-title">{{ __('out-works.businessCardWebsiteLogicFox') }}</p>
                <ol class="out-works__ul">
                    <li>
                        <p class="out-works__ul-item">{{ __('out-works.websiteLayout') }}</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">Front end</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">{{ __('out-works.SeoOptimization') }}</p>
                    </li>
                </ol>
            </div>
            <div class="out-works__cont-wrp">
                <div class="out-works__cont-img-wrp">
                    <img src="../img/Babmi-Racer-logo.svg" alt="Babmi Racer">
                </div>
                <p class="out-works__cont-title">{{ __('out-works.bambiTitle') }}</p>
                <ol class="out-works__ul">
                    <li>
                        <p class="out-works__ul-item">Front end</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">Back end</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">{{ __('out-works.SeoOptimization') }}</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">{{ __('out-works.SeoPromotion') }}</p>
                    </li>
                </ol>
            </div>
            <div class="out-works__cont-wrp">
                <div class="out-works__cont-img-wrp">
                    <img src="../img/PROFI-logo.svg" alt="PROFI">
                </div>
                <p class="out-works__cont-title">{{ __('out-works.profiTitle') }}</p>
                <ol class="out-works__ul">
                    <li>
                        <p class="out-works__ul-item">Front end</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">Back end</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">{{ __('out-works.SeoOptimization') }}</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">{{ __('out-works.SeoPromotion') }}</p>
                    </li>
                </ol>
            </div>
            <div class="out-works__cont-wrp">
                <div class="out-works__cont-img-wrp">
                    <img src="../img/alfa-grant-logo.svg" alt="alfagrant">
                </div>
                <p class="out-works__cont-title">{{ __('out-works.alfaGrentTitle') }}</p>
                <ol class="out-works__ul">
                    <li>
                        <p class="out-works__ul-item">{{ __('out-works.SeoOptimization') }}</p>
                    </li>
                    <li>
                        <p class="out-works__ul-item">{{ __('out-works.SeoPromotion') }}</p>
                    </li>
                </ol>
            </div>
        </div>
        <section data-input-wrp class="chat-bot-form main-form">
            <div class="chat-bot-form__box main-form__wrp">
                <div data-input class="main-form__container js-activ">
                    <div data-container class="main-form__form-wrp">
                        <div data-btn-close class="contacts__btn-close js-btn-close">
                            <span class="contacts__btn-close-line contacts__btn-close-line-r"></span>
                            <span class="contacts__btn-close-line contacts__btn-close-line-l"></span>
                        </div>
                        <p class="main-form__form-title">{{ __('chatbots.chat-bot-form_formtitle') }}</p>
                        <form class="main-form__form-list js-form" name="form" id="frmContact">
                            <div id="mail-status"></div>
                            <div class="main-form__form-list-wrp">
                                <input type="text" id="UserName" name="UserName" placeholder="{{ __('chatbots.chat-bot-form_formname') }}" class="main-form__form-item js-input" />
                                <input type="text" id="CompanyName" name="CompanyName" placeholder="{{ __('chatbots.chat-bot-form_formcompany') }}" class="main-form__form-item" />
                                <div class="main-form__phone-wrp">
                                    <input data-err-phone type="tel" id="phone" name="phone" class="main-form__form-item js-input js-input-phone" />
                                    <span id="valid-msg" class="hide"></span>
                                    <span id="error-msg" class="hide"></span>
                                </div>
                                <input type="text" id="UserEmail" name="UserEmail" placeholder="E-mail" class="main-form__form-item js-input js-input-email" />
                            </div>
                            <div class="main-form__form-list-text-wrp">
                                <img src="/svg/FormCheck_icon.svg" alt="Check" class="main-form__form-list-text-img" />
                                <p class="main-form__form-list-text">
                                    {{ __('chatbots.chat-bot-form_formprivacy') }}
                                </p>
                            </div>
                            <button type="submit" class="main-form__form-button btn-form" onClick="sendContactChatbots();">
                                {{ __('chatbots.chat-bot-form_formbutton') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
@section('script_tel')
<script src="/js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/intlTelInput-jquery.min.js"></script>
<script src="/js/intlTelInput.js"></script>
<script src="/js/sendmail.js"></script>
<script src="/js/utils.js"></script>
<script src="/dist/bundle.js"></script>
<script>
    var input = document.querySelector('#phone');
    errorMsg = document.querySelector("#error-msg"),
        validMsg = document.querySelector("#valid-msg");
    var errorClasse = document.querySelector('.js-input-phone')
    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
    var intl = window.intlTelInput(input, {
        initialCountry: "auto",
        geoIpLookup: function(success, failure) {
            $.get('https://ipinfo.io/json?token=95d0af0903244e', function() {}, 'jsonp').always(
                function(resp) {
                    var countryCode =
                        resp && resp.country ? resp.country : '';
                    console.log(countryCode);
                    success(countryCode);
                },
            );
        },
        utilsScript: "js/utils.js"
    });

    var reset = function() {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");
    };

    // Validate on blur event
    input.addEventListener('blur', function() {
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
</script>
@endsection