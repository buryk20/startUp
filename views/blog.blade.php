@extends('layout')

@section('title'){{ __('blog.metaTitle') }}@endsection
@section('metaDiscription'){{ __('blog.metaDescription') }}@endsection

@section('main_content')
<main>
  <div class="blog">
    <h1 class="blog__title">{{ __('blog.titleCat') }}</h1>
    <div class="blog__article-wrp">
      <div class="blog__article-img-wrp">
        <a href="{{ LaravelLocalization::localizeUrl('/blog/SEO/chto-takoye-seo') }}">
          <img class="blog__article-img" src="/img/main-banner-chto-takoye-seo-img.png" alt="{{ __('chto-takoye-seo.title') }}">
        </a>
      </div>
      <div class="blog__article-type-wrp">
        <a class="blog__article-type" href="#">SEO</a>
        <a class="blog__article-type-specialist-wrp" href="http://">
          <img class="blog__article-type-img" src="../img/seo-tatiana.jpg" alt="">
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