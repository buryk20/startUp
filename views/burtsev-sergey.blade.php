@extends('layout')

@section('title'){{ __('out-team.metaTitle') }}@endsection
@section('metaDiscription'){{ __('out-team.metaDescription') }}@endsection

@section('main_content')
<main class="author">
    <div class="author__wrp-header">
        <div class="wrp-margin author__wrp-cont">
            <img class="author__img" src="/img/SergeyBurtsev.jpg" alt="">
            <div class="author__wrp-rigth-block">
                <div class="author__name-wrp">
                    <h2 class="author__name">{{ __('names-employees.SergeyBurtsev') }}</h2>
                    <a href="https://www.linkedin.com/in/seriy-burtsev-4a26071b1/">
                        <img class="author__social-icon" src="/svg/LinkedIn_icon.png" alt="LinkedIn">
                    </a>
                </div>
                <h1 class="author__speciality-title">SEO-specialist</h1>
                <p class="author__speciality-text">{{ __('names-employees.SergeyBurtsev_specialist_author') }}</p>
                <div class="author__article-counter-wrp">
                    <img class="author__article-icon" src="/svg/article-icon-author.png" alt="">
                    <p class="author__article-counter">2</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wrp-margin author__article-list-wrp">
        <div class="blog__article-cont-wrp">
            <div class="blog__article-img-wrp">
                <a href="{{ LaravelLocalization::localizeUrl('/blog/SEO/chto-takoye-SEO-prodvizheniye-sayta') }}">
                <img class="blog__article-img" src="/img/blog/chto-takoye-SEO-prodvizheniye-sayta/chto-takoye-SEO-prodvizheniye-sayta-main.png" alt="{{ __('chto-takoye-SEO-prodvizheniye-sayta.title') }}">
                </a>
            </div>
            <div class="blog__article-type-wrp">
                <a class="blog__article-type" href="#">SEO</a>
                <a class="blog__article-type-specialist-wrp" href="{{ LaravelLocalization::localizeUrl('/out-team') }}">
                <img class="blog__article-type-img" src="/img/SergeyBurtsev.jpg" alt="{{ __('names-employees.SergeyBurtsev') }}">
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
                <img class="blog__article-type-img" src="/img/SergeyBurtsev.jpg" alt="{{ __('names-employees.SergeyBurtsev') }}">
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