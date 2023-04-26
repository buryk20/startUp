@extends('layout')

@section('title'){{ __('chto-takoye-seo.title') }}@endsection

@section('main_content')
<main>
    <div class="blog">
        <h1 class="blog__title">SEO</h1>
        <div class="blog__article-wrp">
            <img class="blog__article-img" src="https://hivelife.com/wp-content/uploads/2020/09/ceo-roles-hive-life-banner-1024x427.jpg" alt="">
            <div class="blog__article-text-wrp">
                <a href="{{ LaravelLocalization::localizeUrl('/blog/SEO/chto-takoye-seo') }}">
                    <h2 class="blog__article-text-title">{{ __('chto-takoye-seo.title') }}</h2>
                    <p>{{ __('chto-takoye-seo.shortDescription') }}</p>
                </a>
            </div>
        </div>
    </div>
</main>
@endsection