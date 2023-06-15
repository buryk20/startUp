@extends('layout')

@section('title'){{ __('blog.metaTitle') }}@endsection
@section('metaDiscription'){{ __('blog.metaDescription') }}@endsection

@section('main_content')
<main>
  <div class="blog wrp-margin">
    <h1 class="title-h1">{{ __('blog.titleCat') }}</h1>
    <div class="blog__article-wrp">
      <div class="blog__article-cont-wrp">
        <div class="blog__article-img-wrp">
          <a href="{{ LaravelLocalization::localizeUrl('/blog/SEO/chto-takoye-seo') }}">
            <img class="blog__article-img" src="/img/blog/chto-takoye-seo/main-banner-chto-takoye-seo-img.png" alt="{{ __('chto-takoye-seo.title') }}">
          </a>
        </div>
        <div class="blog__article-type-wrp">
          <a class="blog__article-type" href="#">SEO</a>
          <a class="blog__article-type-specialist-wrp" href="{{ LaravelLocalization::localizeUrl('/out-team') }}">
            <img class="blog__article-type-img" src="../img/seo-tatiana.jpg" alt="{{ __('names-employees.TatyanaMokraya') }}">
            <p class="blog__article-type-specialist-text">{{ __('names-employees.TatyanaMokraya') }}</p>
          </a>
        </div>
        <div class="blog__article-text-wrp">
          <a class="blog__article-text-link" href="{{ LaravelLocalization::localizeUrl('/blog/SEO/chto-takoye-seo') }}">
            <h2 class="blog__article-text-title">{{ __('chto-takoye-seo.title') }}</h2>

          </a>
          <p class="blog__article-text">{{ __('chto-takoye-seo.shortDescription') }}
          </p>
        </div>
      </div>
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