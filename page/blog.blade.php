@extends('layout')

@section('title'){{ __('chto-takoye-seo.title') }}@endsection

@section('main_content')
<main>
    <div class="blog">
        <h1 class="blog__title">Новое в блоге</h1>
        <div class="blog__article-wrp">
            <div class="blog__article-img-wrp">
                <a href="{{ LaravelLocalization::localizeUrl('/blog/SEO/chto-takoye-seo') }}">
                    <img class="blog__article-img" src="https://hivelife.com/wp-content/uploads/2020/09/ceo-roles-hive-life-banner-1024x427.jpg" alt="">
                </a>
            </div>
            <div class="blog__article-type-wrp">
                <a class="blog__article-type" href="#">SEO</a>
                <a class="blog__article-type-specialist-wrp" href="http://">
                    <img class="blog__article-type-img" src="../img/seo-tatiana.jpg" alt="">
                    <p class="blog__article-type-specialist-text">Татьяна Мокрая</p>
                </a>
            </div>
            <div class="blog__article-text-wrp">
                <a class="blog__article-text-link" href="{{ LaravelLocalization::localizeUrl('/blog/SEO/chto-takoye-seo') }}">
                    <h2 class="blog__article-text-title">Название статьи</h2>

                </a>
                <p class="blog__article-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                    culpa facilis beatae
                    obcaecati dolores vero quas officiis animi, molestias ex fugit sunt amet delectus hic!
                    Maiores repudiandae corrupti rerum! Culpa!
                </p>
            </div>
        </div>
    </div>
</main>
@endsection