@extends('layout')

@section('title'){{ __('out-team.metaTitle') }}@endsection
@section('metaDiscription'){{ __('out-team.metaDescription') }}@endsection

@section('main_content')
<main class="author">
    <div class="author__wrp-header">
        <div class="author__wrp-width">
            <img class="author__img" src="/img/SergeyBurtsev.jpg" alt="">
            <div>
                <div>
                    <h2>Бурцев Сергей</h2>
                    <a href="https://www.linkedin.com/in/seriy-burtsev-4a26071b1/">
                        <img src="/icons/LinkedIn_icon.png" alt="LinkedIn">
                    </a>
                </div>
                <h1>SEO-specialist</h1>
                <p>Я СЕО специалист, более трех лет занимаюсь продвижением сайтов, являюсь одним из основателей StarUp Group</p>
                <img src="/icons/article-icon-author.png" alt="">
            </div>
        </div>
    </div>
    <div class=" wrp-margin">
        <div class="blog__article-cont-wrp">
            <div class="blog__article-img-wrp">
                <a href="{{ LaravelLocalization::localizeUrl('/blog/SEO/chto-takoye-SEO-prodvizheniye-sayta') }}">
                <img class="blog__article-img" src="/img/blog/chto-takoye-SEO-prodvizheniye-sayta/chto-takoye-SEO-prodvizheniye-sayta-main.png" alt="{{ __('chto-takoye-SEO-prodvizheniye-sayta.title') }}">
                </a>
            </div>
            <div class="blog__article-type-wrp">
                <a class="blog__article-type" href="#">SEO</a>
                <a class="blog__article-type-specialist-wrp" href="{{ LaravelLocalization::localizeUrl('/out-team') }}">
                <img class="blog__article-type-img" src="../img/SergeyBurtsev.jpg" alt="{{ __('names-employees.SergeyBurtsev') }}">
                <p class="blog__article-type-specialist-text">{{ __('names-employees.SergeyBurtsev') }}</p>
                </a>
            </div>
            <div class="blog__article-text-wrp">
                <a class="blog__article-text-link" href="{{ LaravelLocalization::localizeUrl('/blog/SEO/chto-takoye-SEO-prodvizheniye-sayta') }}">
                <h2 class="blog__article-text-title">{{ __('chto-takoye-SEO-prodvizheniye-sayta.title') }}</h2>

                </a>
                <p class="blog__article-text">{{ __('chto-takoye-SEO-prodvizheniye-sayta.shortDescription') }}
                </p>
            </div>
            </div>
            <div class="blog__article-cont-wrp">
            <div class="blog__article-img-wrp">
                <a href="{{ LaravelLocalization::localizeUrl('/blog/SEO/title-vazhen-ili-net') }}">
                <img class="blog__article-img" src="/img/blog/title-vazhen-ili-net/title-vazhen-ili-net.png" alt="{{ __('chto-takoye-SEO-prodvizheniye-sayta.title') }}">
                </a>
            </div>
            <div class="blog__article-type-wrp">
                <a class="blog__article-type" href="#">SEO</a>
                <a class="blog__article-type-specialist-wrp" href="{{ LaravelLocalization::localizeUrl('/out-team') }}">
                <img class="blog__article-type-img" src="../img/SergeyBurtsev.jpg" alt="{{ __('names-employees.SergeyBurtsev') }}">
                <p class="blog__article-type-specialist-text">{{ __('names-employees.SergeyBurtsev') }}</p>
                </a>
            </div>
            <div class="blog__article-text-wrp">
                <a class="blog__article-text-link" href="{{ LaravelLocalization::localizeUrl('/blog/SEO/title-vazhen-ili-net') }}">
                <h2 class="blog__article-text-title">{{ __('title-vazhen-ili-net.title') }}</h2>

                </a>
                <p class="blog__article-text">{{ __('title-vazhen-ili-net.shortDescription') }}
                </p>
            </div>
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