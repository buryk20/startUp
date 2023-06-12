@extends('layout')

@section('title'){{ __('title-vazhen-ili-net.metaTitle') }}@endsection
@section('metaDiscription'){{ __('title-vazhen-ili-net.metaDescription') }}@endsection

@section('main_content')
<main class="article">
    <div class="article__title-wrp">
        <h1 class="article__title">{{ __('title-vazhen-ili-net.title') }}</h1>
    </div>
    <div class="article__wrp">
        <div class="article__img-wrp">
            <img class="article__img" src="/img/blog/chto-takoye-seo/main-banner-chto-takoye-seo-img.png" alt="{{ __('title-vazhen-ili-net.title') }}">
        </div>
        <div class="article-text">
            <ol>
                <li><a href="#whatIsTitle"><strong>{{ __('title-vazhen-ili-net.whatIsTitle') }}</strong></a></li>
                <li><a href="#whatShouldBeWrittenInTitle"><strong>{{ __('title-vazhen-ili-net.whatShouldBeWrittenInTitle') }}</strong></a></li>
                <li><a href="#howToWriteCorrectTitle"><strong>{{ __('title-vazhen-ili-net.howToWriteCorrectTitle') }}</strong></a>
                </li>
                <li><a href="#titleExample"><strong>{{ __('title-vazhen-ili-net.titleExample') }}</strong></a></li>
                <li><a href="#title"><strong>{{ __('title-vazhen-ili-net.title') }}</strong></a>
                </li>
            </ol>
            <p>
                {{ __('title-vazhen-ili-net.title_1') }}
            </p>
            <h2 id="whatIsTitle">
                {{ __('title-vazhen-ili-net.whatIsTitle') }}
            </h2>
            <p>
                {{ __('title-vazhen-ili-net.whatIsTitle_1') }}
            </p>
            <p>
                {{ __('title-vazhen-ili-net.whatIsTitle_2') }}
            </p>
            <p>
                {{ __('title-vazhen-ili-net.whatIsTitle_3') }}
            </p>
            <h2 id="whatShouldBeWrittenInTitle">
                {{ __('title-vazhen-ili-net.whatShouldBeWrittenInTitle') }}
            </h2>
            <p>
                {{ __('title-vazhen-ili-net.whatShouldBeWrittenInTitle_1') }}
            </p>
            <h2 id="howToWriteCorrectTitle">
                {{ __('title-vazhen-ili-net.howToWriteCorrectTitle') }}
            </h2>
            <p>
                {{ __('title-vazhen-ili-net.howToWriteCorrectTitle_1') }}
            </p>
            <h2 id="titleExample">
                {{ __('title-vazhen-ili-net.titleExample') }}
            </h2>
            <p>
                {{ __('title-vazhen-ili-net.titleExample_1') }}
            </p>
            <img src="#" alt="{{ __('title-vazhen-ili-net.titleExample') }}">
            <p>
                {{ __('title-vazhen-ili-net.titleExample_2') }}
            </p>
            <p>
                {{ __('title-vazhen-ili-net.titleExample_3') }}
            </p>
            <p>
                {{ __('title-vazhen-ili-net.titleExample_4') }}
            </p>
            <p>
                {{ __('title-vazhen-ili-net.titleExample_5') }}
            </p>
            <h2 id="title">
                {{ __('title-vazhen-ili-net.title') }}
            </h2>
            <p>
                {{ __('title-vazhen-ili-net.title_2') }}
            </p>
            <p>
                {{ __('title-vazhen-ili-net.title_3') }}
            </p>
            <p>
                {{ __('title-vazhen-ili-net.title_4') }}
            </p>
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