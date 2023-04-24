@extends('layout')
@section('title'){{ __('home.seo-title') }}@endsection
@section('main_content')
<main id="lock" data-main-page data-animation-wrp class="main">
  <section class="main-idea">
    <div class="main-idea__wrp">
      <div data-left class="main-idea__text wow animate__animated">
        <h1 class="main-idea__title">
          {{ __('home.main-idea_title') }}
        </h1>
        <img data-right src="/img/idea_photo.png" alt="idea" class="main-idea__img-mob wow animate__animated" />
        <p class="main-idea__description">
          {{ __('home.main-idea_subtitle') }}
        </p>
      </div>
      <div class="main-idea__img-wrp">
        <img data-right class="wow animate__animated" src="img/idea_photo.png" alt="idea" class="main-idea__img" />
      </div>
    </div>
  </section>

  <section class="tilda">
    <div class="tilda__wrp">
      <div data-left data-wow-offset="200" class="tilda__wrp-text wow animate__animated">
        <p class="tilda__text">
          {{ __('home.tilda_text') }}
        </p>
        <div class="main-request__button-wrp">
          <button class="main-request__button-request btn-pop-up">
            {{ __('home.tilda_buttonform') }}
          </button>
          <button class="main-request__button-contacts js-btn-contact-item">
            {{ __('home.tilda_buttoncontacts') }}
          </button>
        </div>
      </div>
      <div class="tilda__wrp-img">
        <img data-right data-wow-offset="200" class="wow animate__animated" src="/img/tilda-img.png" alt="Migrate from Tilda">
      </div>
    </div>
  </section>

  <section class="main-request">
    <div class="main-request__wrp">
      <div data-left data-wow-offset="200" class="main-request__img-wrp wow animate__animated">
        <img src="/img/thinking_man.png" alt="thinking man" class="main-request__img" />
      </div>
      <div data-right data-wow-offset="200" class="main-request__text wow animate__animated">
        <h3 class="main-request__title">
          {{ __('home.main-request_title') }}
        </h3>
        <p class="main-request__description">
          {{ __('home.main-request_text') }}
        </p>
        <div class="main-request__button-wrp">
          <button class="main-request__button-request btn-pop-up">
            {{ __('home.main-request_buttonform') }}
          </button>
          <button class="main-request__button-contacts js-btn-contact-item">
            {{ __('home.main-request_buttoncontacts') }}
          </button>
        </div>
      </div>
    </div>
  </section>
  <section class="main-offer">
    <div data-wow-offset="200" class="main-offer__wrp">
      <h2 class="main-offer__title">
        {{ __('home.main-offer_title') }}
      </h2>
      <p class="main-offer__text">{{ __('home.main-offer_subtitle') }}</p>
      <div class="main-offer__list">
        <div data-wow-offset="200" class="main-offer__item wow animate__animated animate__fadeInUp">
          <img src="icons/Key_icon.svg" alt="key" class="main-offer__item-img" />
          <p class="main-offer__item-text">{{ __('home.main-offer_block1') }}</p>
        </div>
        <div data-wow-offset="200" data-wow-delay="0.2s" class="main-offer__item wow animate__animated animate__fadeInUp">
          <img src="icons/Server_icon.svg" alt="server" class="main-offer__item-img" />
          <p class="main-offer__item-text">{{ __('home.main-offer_block2') }}</p>
        </div>
        <div data-wow-offset="200" data-wow-delay="0.4s" class="main-offer__item wow animate__animated animate__fadeInUp">
          <img src="icons/Trand_icon.svg" alt="trand" class="main-offer__item-img" />
          <p class="main-offer__item-text">{{ __('home.main-offer_block3') }}</p>
        </div>
        <div data-wow-offset="200" data-wow-delay="0.6s" class="main-offer__item wow animate__animated animate__fadeInUp">
          <img src="icons/Ads_icon.svg" alt="ads" class="main-offer__item-img" />
          <p class="main-offer__item-text">{{ __('home.main-offer_block4') }}</p>
        </div>
      </div>
      <div data-right data-wow-offset="200" class="main-offer__description wow animate__animated">
        <p class="main-offer__description-text">
          {{ __('home.main-offer_textbottom') }}
        </p>
      </div>
    </div>
  </section>
  <section class="main-purpose">
    <div class="main-purpose__wrp">
      <div data-right data-wow-offset="200" class="main-purpose__img-wrp wow animate__animated ">
        <img src="img/woman.png" alt="woman" class="main-purpose__img" />
      </div>
      <div data-left data-wow-offset="200" class="main-purpose__text wow animate__animated">
        <h3 class="main-purpose__title">
          {{ __('home.main-purpose_title') }}
        </h3>
        <div class="main-purpose__button-wrp">
          <button class="main-purpose__button-order btn-pop-up">
            {{ __('home.main-purpose_buttonform') }}
          </button>
          <button class="main-purpose__button-about">{{ __('home.main-purpose_buttonaboutus') }}</button>
        </div>
      </div>
    </div>
  </section>
  <section class="main-realization">
    <div class="main-realization__wrp">
      <h2 class="main-realization__title">
        {{ __('home.main-realization_title') }}
      </h2>
      <div class="main-realization__wrp-grid">
        <p class="main-realization__development-numer">01</p>
        <div class="main-realization__development-triangle wow animate__animated animate__rubberBand"></div>
        <p class="main-realization__development-text">{{ __('home.main-realization_text1') }}</p>
        <div class="main-realization__development-mob">
          <div class="main-realization__development-triangle-mob wow animate__animated animate__rubberBand"></div>
          <p class="main-realization__development-text-mob">{{ __('home.main-realization_text1') }}</p>
        </div>
        <div class="main-realization__development-arrow"></div>
        <p class="main-realization__content-numer">02</p>
        <div data-wow-delay="0.4s" class="main-realization__content-triangle wow animate__animated animate__rubberBand"></div>
        <p class="main-realization__content-text">{{ __('home.main-realization_text2') }}</p>
        <div class="main-realization__content-mob">
          <div data-wow-delay="0.4s" class="main-realization__content-triangle-mob wow animate__animated animate__rubberBand"></div>
          <p class="main-realization__content-text-mob">{{ __('home.main-realization_text2') }}</p>
        </div>
        <div class="main-realization__content-arrow"></div>
        <p class="main-realization__promotion-numer">03</p>
        <div data-wow-delay="0.8s" class="main-realization__promotion-triangle wow animate__animated animate__rubberBand"></div>
        <p class="main-realization__promotion-text">{{ __('home.main-realization_text3') }}</p>
        <div class="main-realization__promotion-mob">
          <div data-wow-delay="0.8s" class="main-realization__promotion-triangle-mob wow animate__animated animate__rubberBand"></div>
          <p class="main-realization__promotion-text-mob">{{ __('home.main-realization_text3') }}</p>
        </div>
      </div>
    </div>
  </section>
  <section class="main-advantage">
    <div class="main-advantage__wrp-bg">
      <div class="main-advantage__wrp">
        <div class="main-advantage__workwith-wrp">
          <p class="main-advantage__workwith-title">{{ __('home.main-advantage_title1') }}</p>
          <div class="main-advantage__workwith-list">
            <div data-wow-offset="200" class="main-advantage__workwith-item wow animate__animated animate__fadeInUp">
              <img src="icons/Diagram_icon.svg" alt="Diagram" class="main-advantage__workwith-item-img" />
              <p class="main-advantage__workwith-item-text">
                {{ __('home.main-advantage_textblock1') }}
              </p>
            </div>
            <div data-wow-offset="200" data-wow-delay="0.2s" class="main-advantage__workwith-item wow animate__animated animate__fadeInUp">
              <img src="icons/Businessman_icon.svg" alt="Businessman" class="main-advantage__workwith-item-img" />
              <p class="main-advantage__workwith-item-text">
                {{ __('home.main-advantage_textblock2') }}
              </p>
            </div>
            <div data-wow-offset="200" data-wow-delay="0.4s" class="main-advantage__workwith-item wow animate__animated animate__fadeInUp">
              <img src="icons/Money_icon.svg" alt="Money" class="main-advantage__workwith-item-img" />
              <p class="main-advantage__workwith-item-text">
                {{ __('home.main-advantage_textblock3') }}
              </p>
            </div>
            <div data-wow-offset="200" data-wow-delay="0.6s" class="main-advantage__workwith-item wow animate__animated animate__fadeInUp">
              <img src="icons/People_icon.svg" alt="People" class="main-advantage__workwith-item-img" />
              <p class="main-advantage__workwith-item-text">
                {{ __('home.main-advantage_textblock4') }}
              </p>
            </div>
          </div>
        </div>
        <div class="main-advantage__advantage-wrp">
          <h2 class="main-advantage__advantage-title">
            {{ __('home.main-advantage_title2') }}
          </h2>
          <div class="main-advantage__advantage-list">
            <div class="main-advantage__advantage-list-left">
              <div data-wow-offset="200" class="main-advantage__advantage-list-item-wrp wow first-circle wow animate__animated animate__bounceInUp">
                <div class="main-advantage__advantage-list-item">
                  <img src="icons/Cogwheel_icon.png" alt="Cogwheel" class="main-advantage__advantage-list-img" />
                  <p class="main-advantage__advantage-list-title">
                    {{ __('home.main-advantage_subtitle1') }}
                  </p>
                  <p class="main-advantage__advantage-list-text">
                    {{ __('home.main-advantage_textblock5') }}
                  </p>
                </div>
              </div>
              <div data-wow-offset="200" class="main-advantage__advantage-list-item-wrp second-circle wow animate__animated animate__bounceInUp">
                <div class="main-advantage__advantage-list-item">
                  <img src="icons/Geometric_icon.png" alt="Geometric figures" class="main-advantage__advantage-list-img" />
                  <p class="main-advantage__advantage-list-title">
                    Комплексность работ
                  </p>
                  <p class="main-advantage__advantage-list-text">
                    {{ __('home.main-advantage_textblock7') }}
                  </p>
                </div>
              </div>
            </div>
            <div class="main-advantage__advantage-list-right">
              <div data-wow-offset="200" class="main-advantage__advantage-list-item-wrp third-circle wow animate__animated animate__bounceInUp">
                <div class="main-advantage__advantage-list-item">
                  <img src="icons/Clock_icon.png" alt="Clock" class="main-advantage__advantage-list-img" />
                  <p class="main-advantage__advantage-list-title">
                    {{ __('home.main-advantage_subtitle2') }}
                  </p>
                  <p class="main-advantage__advantage-list-text">
                    {{ __('home.main-advantage_textblock6') }}
                  </p>
                </div>
              </div>
              <div data-wow-offset="200" class="main-advantage__advantage-list-item-wrp second-circle-mob wow animate__animated animate__bounceInUp">
                <div class="main-advantage__advantage-list-item">
                  <img src="icons/Geometric_icon.png" alt="Geometric figures" class="main-advantage__advantage-list-img" />
                  <p class="main-advantage__advantage-list-title">
                    {{ __('home.main-advantage_subtitle3') }}
                  </p>
                  <p class="main-advantage__advantage-list-text">
                    {{ __('home.main-advantage_textblock7') }}
                  </p>
                </div>
              </div>
              <div data-wow-offset="200" class="main-advantage__advantage-list-item-wrp fourth-circle wow animate__animated animate__bounceInUp">
                <div class="main-advantage__advantage-list-item">
                  <img src="icons/Dollar_icon.png" alt="Dollar" class="main-advantage__advantage-list-img" />
                  <p class="main-advantage__advantage-list-title">
                    {{ __('home.main-advantage_subtitle4') }}
                  </p>
                  <p class="main-advantage__advantage-list-text">
                    {{ __('home.main-advantage_textblock8') }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="main-branding">
    <div class="main-branding__wrp">
      <div class="main-branding__brand-circle">
        <p class="main-branding__brand-title">.Branding</p>
      </div>
      <div class="main-branding__brand-text-wrp">
        <h2 class="main-branding__brand-text-title">
          {{ __('home.main-branding_title') }}
        </h2>
        <div class="main-branding__brand-text-line"></div>
        <p class="main-branding__brand-text-main">
          {{ __('home.main-branding_text') }}
        </p>
      </div>
    </div>
  </section>
  <section class="main-marketing">
    <div class="main-marketing__wrp">
      <div class="main-marketing__body-wrp">
        <div class="main-marketing__blocks-list">
          <div data-wow-offset="200" class="main-marketing__blocks-item wow animate__animated animate__fadeInUp">
            <img src="icons/Radial_icon.svg" alt="Radial" class="main-marketing__blocks-img" />
            <p class="main-marketing__blocks-text">
              {{ __('home.main-marketing_upperblock1') }}
            </p>
          </div>
          <div data-wow-offset="200" data-wow-delay="0.2s" class="main-marketing__blocks-item wow animate__animated animate__fadeInUp">
            <img src="icons/Trand_icon.svg" alt="Trand" class="main-marketing__blocks-img" />
            <p class="main-marketing__blocks-text">{{ __('home.main-marketing_upperblock2') }}</p>
          </div>
          <div data-wow-offset="200" data-wow-delay="0.4s" class="main-marketing__blocks-item wow animate__animated animate__fadeInUp">
            <img src="icons/Architecture_icon.svg" alt="Architecture" class="main-marketing__blocks-img" />
            <p class="main-marketing__blocks-text">{{ __('home.main-marketing_upperblock3') }}</p>
          </div>
          <div data-wow-offset="200" data-wow-delay="0.6s" class="main-marketing__blocks-item wow animate__animated animate__fadeInUp">
            <img src="icons/Strategy_icon.svg" alt="Strategy" class="main-marketing__blocks-img" />
            <p class="main-marketing__blocks-text">{{ __('home.main-marketing_upperblock4') }}</p>
          </div>
        </div>
        <p class="main-marketing__body-title">
          {{ __('home.main-marketing_title') }}
        </p>
        <div class="main-marketing__body-list">
          <div data-wow-offset="200" class="main-marketing__body-list-item  wow animate__animated animate__fadeInLeft">
            <h4 class="main-marketing__body-list-title">{{ __('home.main-marketing_subtitle1') }}</h4>
            <img src="icons/ArrowMarketing.svg" alt="Arrow" class="main-marketing__body-list-img" />
            <p class="main-marketing__body-list-text">
              {{ __('home.main-marketing_text1') }}
            </p>
          </div>
          <div data-wow-offset="200" data-wow-delay="0.4s" class="main-marketing__body-list-item wow animate__animated animate__fadeInLeft">
            <h4 class="main-marketing__body-list-title">{{ __('home.main-marketing_subtitle2') }}</h4>
            <img src="icons/ArrowMarketing.svg" alt="Arrow" class="main-marketing__body-list-img" />
            <p class="main-marketing__body-list-text">
              {{ __('home.main-marketing_text2') }}
            </p>
          </div>
          <div data-wow-offset="200" data-wow-delay="0.8s" class="main-marketing__body-list-item wow animate__animated animate__fadeInLeft">
            <h4 class="main-marketing__body-list-title">{{ __('home.main-marketing_subtitle3') }}</h4>
            <img src="icons/ArrowMarketing.svg" alt="Arrow" class="main-marketing__body-list-img" />
            <p class="main-marketing__body-list-text">
              {{ __('home.main-marketing_text3') }}
            </p>
          </div>
        </div>
      </div>
      <div class="main-marketing__request-wrp">
        <p class="main-marketing__request-title">
          {{ __('home.main-marketing_downtitle') }}
        </p>
        <button class="main-marketing__request-button btn-pop-up">
          {{ __('home.main-marketing_button') }}
        </button>
      </div>
    </div>
  </section>
  <section data-input-wrp class="main-form">
    <div class="main-form__wrp">
      <div class="main-form__container js-activ">
        <div class="main-form__form-wrp">
          <div class="contacts__btn-close js-btn-close">
            <span class="contacts__btn-close-line contacts__btn-close-line-r"></span>
            <span class="contacts__btn-close-line contacts__btn-close-line-l"></span>
          </div>
          <p class="main-form__form-title">{{ __('home.main-form_title') }}</p>
          <form class="main-form__form-list js-form" name="form" id="frmContact">
            <div class="main-form__form-list-wrp">
              <div id="mail-status"></div>
              <input type="text" id="UserName" name="UserName" placeholder="{{ __('home.main-form_name') }}" class="main-form__form-item js-input" />
              <input type="text" id="CompanyName" name="CompanyName" placeholder="{{ __('home.main-form_company') }}" class="main-form__form-item" />
              <div class="main-form__phone-wrp">
                <input data-err-phone type="tel" id="phone" name="phone" class="main-form__form-item js-input js-input-phone" />
                <span id="valid-msg" class="hide"></span>
                <span id="error-msg" class="hide"></span>
              </div>

              <input type="text" id="UserEmail" name="UserEmail" placeholder="E-mail" class="main-form__form-item js-input js-input-email" />
            </div>
            <div class="main-form__form-list-text-wrp">
              <img src="icons/FormCheck_icon.svg" alt="Check" class="main-form__form-list-text-img" />
              <p class="main-form__form-list-text">
                {{ __('home.main-form_privacy') }}
              </p>
            </div>
            <button type="submit" class="main-form__form-button btn-form" onClick="sendContactHomePage();">
              {{ __('home.main-form_button') }}
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <div data-contacts-wrp class="contacts">
    <div class="main-form__container popup-form__container js-btn-contact">
      <div class="contacts__wrp-cont">
        <div class="contacts__btn-close js-btn-close">
          <span class="contacts__btn-close-line contacts__btn-close-line-r"></span>
          <span class="contacts__btn-close-line contacts__btn-close-line-l"></span>
        </div>
        <div class="contacts__wrp-cont-width">
          <h3 class="contacts__title">{{ __('home.main-contacts_title') }}</h3>
          <div class="contacts__dev-site-wrp">
            <h4 class="contacts__dev-site-text">{{ __('home.main-modalform_websites') }}</h4>
            <div class="contacts__dev-site-tel-wrp">
              <a class="contacts__dev-site-tel-number-wrp" href="tel:+380660773734">
                <img src="icons/flag-ua-contacts.svg" alt="">
                <p class="contacts__dev-site-tel-text">+38 (066) 077 37 34</p>
              </a>
              <a href="https://t.me/StarUpGroupTeamLead" target="_blank">
                <img class="contacts__dev-site-icon" src="icons/telegram-contacts-icon.svg" alt="telegram">
              </a>
              <a href="viber://chat?number=%2B380660773734">
                <img class="contacts__dev-site-icon" src="icons/viber-contacts-icon.svg" alt="viber">
              </a>
            </div>
            <div class="contacts__dev-site-tel-wrp">
              <a class="contacts__dev-site-tel-number-wrp" href="tel:+353852004531">
                <img src="icons/flag-eu-contacts.svg" alt="">
                <p class="contacts__dev-site-tel-text">+353 (85) 200 45 31</p>
              </a>
              <a href="https://t.me/@starupgroup" target="_blank">
                <img class="contacts__dev-site-icon" src="icons/telegram-contacts-icon.svg" alt="telegram">
              </a>
              <a href="viber://chat?number=%2B380660773734">
                <img class="contacts__dev-site-icon" src="icons/viber-contacts-icon.svg" alt="viber">
              </a>
            </div>
          </div>
          <div class="contacts__dev-bot-wrp">
            <h4 class="contacts__dev-site-text">{{ __('home.main-modalform_chatbots') }}</h4>
            <div class="contacts__dev-site-tel-wrp">
              <a class="contacts__dev-site-tel-number-wrp" href="tel:+380631269453">
                <img src="icons/flag-ua-contacts.svg" alt="">
                <p class="contacts__dev-site-tel-text">+38 (063) 126 94 53</p>
              </a>
              <a href="https://t.me/@dmytro_bokhan" target="_blank">
                <img class="contacts__dev-site-icon" src="icons/telegram-contacts-icon.svg" alt="telegram">
              </a>
              <a href="viber://chat?number=%2B380631269453">
                <img class="contacts__dev-site-icon" src="icons/viber-contacts-icon.svg" alt="viber">
              </a>
              <a href="http://">
                <img class="contacts__dev-site-icon" src="icons/WhatsApp.svg" alt="">
              </a>
            </div>
          </div>
          <a class="contacts__link-wrp" href="mailto:info@star-up-group.com.ua">
            <img class="contacts__phone-img" src="/icons/email-icon.svg" alt="Emeil" />
            <span class="contacts__dev-site-tel-text">info@star-up-group.com.ua</span>
          </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
@section('pop-up')
<div id="accept" class="popup-accept__container">
  <div class="popup-accept__wrp">
    <img class="popup-accept__img" src="img/check_desk_icon.svg" alt="checked" />
    <p class="popup-accept__text">
      Наши специалисты проконсультируют вас и подберут оптимальное решение
      под вашу бизнес-цель!
    </p>
  </div>
</div>
@endsection
@section('script_tel')
<script src="js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/intlTelInput-jquery.min.js"></script>
<script src="js/intlTelInput.js"></script>
<script src="js/sendmail.js"></script>
<script src="js/utils.js"></script>
<script src="dist/bundle.js"></script>
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