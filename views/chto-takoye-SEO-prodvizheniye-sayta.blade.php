@extends('layout')

@section('title'){{ __('chto-takoye-SEO-prodvizheniye-sayta.metaTitle') }}@endsection
@section('metaDiscription'){{ __('chto-takoye-SEO-prodvizheniye-sayta.metaDescription') }}@endsection

@section('main_content')
<main class="article">
    <div class="article__title-wrp">
        <h1 class="article__title">{{ __('chto-takoye-SEO-prodvizheniye-sayta.title') }}</h1>
    </div>
    <div class="article__wrp">
        <div class="article__img-wrp">
            <img class="article__img" src="/img/blog/chto-takoye-seo/main-banner-chto-takoye-seo-img.png" alt="{{ __('chto-takoye-seo.title') }}">
        </div>
        <div class="article-text">
            <ol>
                <li><a href="#What-is-SEO"><strong>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_1') }}</strong></a></li>
                <li><a href="#How-SEO-promotion-works"><strong>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_2') }}</strong></a></li>
                <li><a href="#Key-Principles"><strong>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_3') }}</strong></a></li>
                <li><a href="#Importance-of-SEO"><strong>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_4') }}</strong></a></li>
            </ol>
            <p>{{ __('chto-takoye-SEO-prodvizheniye-sayta.prologue') }}</p>
            <h2 style="text-align: center;"><a id="What-is-SEO" name="What-is-SEO"></a><strong>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_1') }}</strong></h2>
            <p>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_1_text_1') }}</p>
            <p>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_1_text_2') }}</p>
            <p>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_1_text_3') }}</p>
            <h3 style="text-align: center;"><a id="How-SEO-promotion-works" name="How-SEO-promotion-works"></a><strong>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_2') }}</strong></h3>
            <img src="/img/blog/chto-takoye-seo/chto-takoye-seo-img.png" alt="{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_2') }}">
            <p>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_2_text_1') }}</p>
            <p>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_2_text_2') }}</p>
            </p>
            <h3 style="text-align: center;"><strong>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_2_text_3') }}</strong></h3>
            <ol>
                <li>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_2_text_li_1') }}</li>
                <li>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_2_text_li_2') }}</li>
                <li>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_2_text_li_3') }}</li>
                <li>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_2_text_li_4') }}</li>
            </ol>
            <p>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_2_text_4') }}</p>
            <h3 style="text-align: center;"><a id="Key-Principles" name="Key-Principles"></a><strong>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_3') }}</strong>
            </h3>
            <p>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_3_text_1') }}</p>
            <p>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_3_text_2') }}</p>
            <p>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_3_text_3') }}</p>
            <h4 style="text-align: center;"><a id="Importance-of-SEO" name="Importance-of-SEO"></a><strong>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_4') }}</strong>
            </h4>
            <p>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_4_text_1') }}</p>
            <ul>
                <li>
                    {{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_4_text_li_1') }}
                </li>
                <li>
                    {{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_4_text_li_2') }}
                </li>
                <li>
                    {{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_4_text_li_3') }}
                </li>
                <li>
                    {{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_4_text_li_4') }}
                </li>
            </ul>
            <p>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_4_text_2') }}</p>
            <p>{{ __('chto-takoye-SEO-prodvizheniye-sayta.nav_item_4_text_3') }}</p>
        </div>
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

@endsection