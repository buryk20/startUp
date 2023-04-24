@extends('layout')

@section('title'){{ __('blog.title') }}@endsection

@section('main_content')
<main>
    <div class="blog">
        <h1 class="blog__title">Новое в блоге</h1>
        <div class="blog__article-wrp">
            <img class="blog__article-img" src="https://hivelife.com/wp-content/uploads/2020/09/ceo-roles-hive-life-banner-1024x427.jpg" alt="">
            <div class="blog__article-text-wrp">
                <a href="#">
                    <h2 class="blog__article-text-title">Название статьи</h2>
                    <p>Короткое описание, статьи</p>
                </a>
            </div>
        </div>
    </div>
</main>
@endsection