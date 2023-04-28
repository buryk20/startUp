<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @yield('metaDiscription')
    <link rel="icon" type="image/x-icon" href="/icons/Main_logo.svg" />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/intlTelInput.css">
    <link rel="stylesheet" href="/css/animate.css">
    <!-- <script type="module" src="js/main.js"></script> -->
    <style>
    </style>
</head>

<body>
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
                    <div data-name="/contacts" style="display: none;" class="header__nav-item"><a data-link-nav href="#">{{ __('header.Contacts') }}</a></div>
                    <div data-name="/marketing" style="display: none;" class="header__nav-item"><a data-link-nav href="#">{{ __('header.Marketing') }}</a></div>
                    <div data-name="/web-development" style="display: none;" class="header__nav-item"><a data-link-nav href="#">{{ __('header.WebDevelopment') }}</a></div>
                    <div data-name="/chatbots" class="header__nav-item"><a data-link-nav href="{{ LaravelLocalization::localizeUrl('/chatbots') }}">{{ __('header.Chatbots') }}</a></div>
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
                <div style="display: none;" class="footer__nav-item">{{ __('footer.Contacts') }}</div>
                <div style="display: none;" class="footer__nav-item">{{ __('footer.Marketing') }}</div>
                <div class="footer__nav-item"><a href="{{ LaravelLocalization::localizeUrl('/chatbots') }}">{{ __('footer.Chatbots') }}</a></div>
                <div style="display: none;" class="footer__nav-item">{{ __('footer.WebDevelopment') }}</div>
                <div style="display: none;" class="footer__nav-item">{{ __('footer.SEO') }}</div>
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
    <div id="accept" class="popup-accept__container">
        <div class="popup-accept__wrp">
            <img class="popup-accept__img" src="img/check_desk_icon.svg" alt="checked" />
            <p class="popup-accept__text">
                Наши специалисты проконсультируют вас и подберут оптимальное решение
                под вашу бизнес-цель!
            </p>
        </div>
    </div>
    @yield('pop_up')
    @yield('script_tel')
</body>