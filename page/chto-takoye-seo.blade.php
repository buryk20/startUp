@extends('layout')

@section('title'){{ __('chto-takoye-seo.metaTitle') }}@endsection
@section('metaDiscription'){{ __('chto-takoye-seo.metaDescription') }}@endsection

@section('main_content')
<main class="article">
  <div class="article__title-wrp">
    <h1 class="article__title">{{ __('chto-takoye-seo.title') }}</h1>
  </div>
  <div class="article__wrp">
    <div class="article__img-wrp">
      <img class="article__img" src="/img/chat_bot_banner.png" alt="{{ __('chto-takoye-seo.title') }}">
    </div>
    <div class="article-text">
      <ol>
        <li><a href="#chto takoe seo"><strong>{{ __('chto-takoye-seo.title') }}</strong></a></li>
        <li><a href="#kakie problemi reshaet seo"><strong>{{ __('chto-takoye-seo.problems') }}</strong></a></li>
        <li><a href="#Sostavlyayuschie SEO prodvijeniya"><strong>{{ __('chto-takoye-seo.components') }}</strong></a>
        </li>
        <li><a href="#uspeshnost SEO prodvijeniya"><strong>{{ __('chto-takoye-seo.success') }}</strong></a></li>
        <li><a href="#samostoyatelnoe prodvijenie"><strong>{{ __('chto-takoye-seo.onOwn') }}</strong></a>
        </li>
      </ol>
      <h2 style="text-align: center;"><strong>{{ __('chto-takoye-seo.whatSeo') }}</strong></h2>
      <p>{{ __('chto-takoye-seo.process') }}</p>
      <h2 style="text-align: center;"><a id="chto takoe seo" name="chto takoe seo"></a><strong>{{ __('chto-takoye-seo.title') }}</strong></h2>
      <p><strong>SEO (Search Engine Optimization)</strong> {{ __('chto-takoye-seo.seoIs') }}
      <p>{{ __('chto-takoye-seo.target') }}
      </p>{{ __('chto-takoye-seo.successT') }}</p>
      <h3 style="text-align: center;"><a id="kakie problemi reshaet seo" name="kakie problemi reshaet seo"></a><strong>{{ __('chto-takoye-seo.problems') }}</strong></h3>
      <p>{{ __('chto-takoye-seo.seoOptimization') }}</p>
      <p>{{ __('chto-takoye-seo.seoOptimization_1') }}</p>
      <p>{{ __('chto-takoye-seo.seoOptimization_2') }}
      </p>
      <h3 style="text-align: center;"><a id="Sostavlyayuschie SEO prodvijeniya" name="Sostavlyayuschie SEO prodvijeniya"></a><strong>{{ __('chto-takoye-seo.components') }}</strong></h3>
      <p>{{ __('chto-takoye-seo.elemSeo') }}</p>
      <ul>
        <li><strong>{{ __('chto-takoye-seo.elemSeo_1_s') }}</strong>{{ __('chto-takoye-seo.elemSeo_1') }}</li>
        <li><strong>{{ __('chto-takoye-seo.elemSeo_2_s') }}</strong>{{ __('chto-takoye-seo.elemSeo_2') }}</li>
        <li><strong>{{ __('chto-takoye-seo.elemSeo_3_s') }}</strong> {{ __('chto-takoye-seo.elemSeo_3') }}</li>
        <li><strong>{{ __('chto-takoye-seo.elemSeo_4_s') }}</strong>{{ __('chto-takoye-seo.elemSeo_4') }}</li>
        <li><strong>{{ __('chto-takoye-seo.elemSeo_5_s') }}</strong>{{ __('chto-takoye-seo.elemSeo_5') }}</li>
        <li><strong>{{ __('chto-takoye-seo.elemSeo_6_s') }}</strong>{{ __('chto-takoye-seo.elemSeo_6') }}</li>
      </ul>
      <h3 style="text-align: center;"><a id="uspeshnost SEO prodvijeniya" name="uspeshnost SEO prodvijeniya"></a><strong>{{ __('chto-takoye-seo.successfulPromotion') }}</strong>
      </h3>
      <p>{{ __('chto-takoye-seo.successfulPromotionList') }}</p>
      <ul>
        <li><strong>{{ __('chto-takoye-seo.successfulPromotionList_1_s') }}</strong>{{ __('chto-takoye-seo.successfulPromotionList_1') }}</li>
        <li><strong>{{ __('chto-takoye-seo.successfulPromotionList_2_s') }}</strong>{{ __('chto-takoye-seo.successfulPromotionList_2') }}</li>
        <li><strong>{{ __('chto-takoye-seo.successfulPromotionList_3_s') }}</strong>{{ __('chto-takoye-seo.successfulPromotionList_3') }}</li>
        <li><strong>{{ __('chto-takoye-seo.successfulPromotionList_4_s') }}</strong>{{ __('chto-takoye-seo.successfulPromotionList_4') }}</li>
        <li><strong>{{ __('chto-takoye-seo.successfulPromotionList_5_s') }}</strong>{{ __('chto-takoye-seo.successfulPromotionList_5') }}</li>
        <li><strong>{{ __('chto-takoye-seo.successfulPromotionList_6_s') }}</strong>{{ __('chto-takoye-seo.successfulPromotionList_6') }}</li>
        <li><strong>{{ __('chto-takoye-seo.successfulPromotionList_7_s') }}</strong>{{ __('chto-takoye-seo.successfulPromotionList_7') }}</li>
      </ul>
      <p>{{ __('chto-takoye-seo.successfulPromotionS') }}</p>
      <h4 style="text-align: center;"><a id="samostoyatelnoe prodvijenie" name="samostoyatelnoe prodvijenie"></a><strong>{{ __('chto-takoye-seo.own') }}</strong>
      </h4>
      <p>{{ __('chto-takoye-seo.own_1') }}</p>
      <p><strong>{{ __('chto-takoye-seo.important') }}</strong></p>
      <p>{{ __('chto-takoye-seo.important') }}</p>
      <p>Не забывайте, что SEO - это долгосрочная стратегия, которая может принести значительные результаты в
        будущем, если вы будете работать над ней постоянно и усердно.<br />&nbsp;</p>

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