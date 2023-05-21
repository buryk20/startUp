<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('metaDiscription')">
    <link rel="icon" type="image/x-icon" href="/icons/Main_logo.svg" />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/intlTelInput.css">
    <link rel="stylesheet" href="/css/animate.css">
    <!-- <script type="module" src="js/main.js"></script> -->
    <style>
    </style>
    <!-- End Google Tag Manager -->

    <!-- Google tag (gtag.js) ПЕТЯ -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XNGRYGT9DP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-XNGRYGT9DP');
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) ДИМА -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59GT497" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header">
        <div id="nav" class="header__wrp">
            <a href="{{ url('/') }}" class="header__logo-link">
                <picture>
                    <source srcset="/icons/Main_logo_small.svg" media="(max-width: 680px)" />
                    <img src="/icons/Main_logo.svg" alt="logo" />
                </picture>
            </a>
            <div id="burger_active" class="header__burger">
                <span class="header__burger-midl"></span>
            </div>
            <div id="nav_active" class="header__nav-wrp">
                <nav class="header__nav">
                    <!-- nav-list-active клас активного меню -->
                    <div data-name="/" class="header__nav-item"><a data-link-nav href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('header.Homepage') }}</a></div>
                    <div data-contact-btn data-name="/contacts" class="header__nav-item js-btn-contact-item">{{ __('header.Contacts') }}</div>
                    <div data-name="/marketing" style="display: none;" class="header__nav-item"><a data-link-nav href="#">{{ __('header.Marketing') }}</a></div>
                    <div data-name="/web-development" style="display: none;" class="header__nav-item"><a data-link-nav href="#">{{ __('header.WebDevelopment') }}</a></div>
                    <div data-name="/chatbots" class="header__nav-item"><a data-link-nav href="{{ LaravelLocalization::localizeUrl('/chatbots') }}">{{ __('header.Chatbots') }}</a></div>
                    <div data-name="/blog" class="header__nav-item"><a data-link-nav href="{{ LaravelLocalization::localizeUrl('/out-team') }}">{{ __('out-team.title') }}</a></div>
                    <div data-name="/blog" class="header__nav-item"><a data-link-nav href="{{ LaravelLocalization::localizeUrl('/blog') }}">{{ __('blog.title') }}</a></div>
                    <div data-name="/SEO" style="display: none;" class="header__nav-item"><a data-link-nav href="#">{{ __('header.SEO') }}</a></div>
                    <div data-name="/content" style="display: none;" class="header__nav-item"><a data-link-nav href="#">{{ __('header.Content') }}</a></div>
                    <div data-name="/about-us" style="display: none;" class="header__nav-item"><a data-link-nav href="#">{{ __('header.AboutUs') }}</a></div>
                </nav>
                <div class="header__nav-line-mob"></div>
                <div class="header__lang-wrp">
                    <div data-name="ua" class="header__lang-item"><a data-lang href="{{ LaravelLocalization::getLocalizedURL('ua') }}">UA</a></div>
                    <div data-name="ua/ru/" class="header__lang-item"><a data-lang href="{{ LaravelLocalization::getLocalizedURL('ru') }}">RU</a></div>
                    <div data-name="ua/en/" class="header__lang-item"><a data-lang href="{{ LaravelLocalization::getLocalizedURL('en') }}">EN</a></div>
                </div>
            </div>
        </div>
    </header>
    @yield('main_content')
    <footer class="footer">
        <div class="footer__wrp">
            <nav class="footer__nav-wrp">
                <div class="footer__nav-item"><a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('footer.Homepage') }}</a></div>
                <div data-contact-btn class="footer__nav-item">{{ __('header.Contacts') }}</div>
                <div style="display: none;" class="footer__nav-item">{{ __('footer.Marketing') }}</div>
                <div class="footer__nav-item"><a href="{{ LaravelLocalization::localizeUrl('/chatbots') }}">{{ __('footer.Chatbots') }}</a></div>
                <div class="footer__nav-item"><a href="{{ LaravelLocalization::localizeUrl('/out-team') }}">{{ __('out-team.title') }}</a></div>
                <div class="footer__nav-item"><a href="{{ LaravelLocalization::localizeUrl('/blog') }}">{{ __('blog.title') }}</a></div>
                <div style="display: none;" class="footer__nav-item">{{ __('footer.Content') }}</div>
                <div style="display: none;" class="footer__nav-item">{{ __('footer.AboutUs') }}</div>
            </nav>
            <div class="footer__nav-mob-line"></div>
            <div class="footer__agreement-wrp" style="justify-content: center;">
                <div class="footer__agreement-item">{{ __('footer.PrivacyPolicy') }}</div>
                <div style="display: none;" class="footer__agreement-dot"></div>
                <div style="display: none;" class="footer__agreement-item">{{ __('footer.PublicOfferAgreement') }}</div>
            </div>
            <div class="footer__copyright">&#169; <? echo date("Y"); ?> Star Up Group</div>
        </div>
    </footer>

    <div data-contacts-wrp-pop-up class="contacts">
        <div data-contact-modal class="pop-up-modal">
            <div data-contact-modal-container class="contacts__wrp-cont">
                <div data-contact-btn-close class="contacts__btn-close js-btn-close">
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
                                <img class="contacts__dev-site-icon" src="/icons/telegram-contacts-icon.svg" alt="telegram">
                            </a>
                            <a href="viber://chat?number=%2B380660773734">
                                <img class="contacts__dev-site-icon" src="/icons/viber-contacts-icon.svg" alt="viber">
                            </a>
                        </div>
                        <div class="contacts__dev-site-tel-wrp">
                            <a class="contacts__dev-site-tel-number-wrp" href="tel:+353852004531">
                                <img src="icons/flag-eu-contacts.svg" alt="">
                                <p class="contacts__dev-site-tel-text">+353 (85) 200 45 31</p>
                            </a>
                            <a href="https://t.me/@starupgroup" target="_blank">
                                <img class="contacts__dev-site-icon" src="/icons/telegram-contacts-icon.svg" alt="telegram">
                            </a>
                            <a href="viber://chat?number=%2B380660773734">
                                <img class="contacts__dev-site-icon" src="/icons/viber-contacts-icon.svg" alt="viber">
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
                                <img class="contacts__dev-site-icon" src="/icons/telegram-contacts-icon.svg" alt="telegram">
                            </a>
                            <a href="viber://chat?number=%2B380631269453">
                                <img class="contacts__dev-site-icon" src="/icons/viber-contacts-icon.svg" alt="viber">
                            </a>
                            <a href="http://">
                                <img class="contacts__dev-site-icon" src="/icons/WhatsApp.svg" alt="">
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
    <div id="accept" class="popup-accept__container">
        <div class="popup-accept__wrp">
            <img class="popup-accept__img" src="img/check_desk_icon.svg" alt="checked" />
            <p class="popup-accept__text">
                {{ __('home.thank') }}
            </p>
        </div>
    </div>
    @yield('pop_up')
    @yield('script_tel')
</body>