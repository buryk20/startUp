@extends('layout')

@section('title'){{ __('out-team.metaTitle') }}@endsection
@section('metaDiscription'){{ __('out-team.metaDescription') }}@endsection

@section('main_content')
<main class="out-team wrp-margin">
    <h1 class="title-h1">{{ __('out-team.title') }}</h1>
    <div class="out-team__wrp-cont">
        <div class="out-team__conteiner-wrp">
            <img class="out-team__img-emp" src="/img/SergeyBurtsev.jpg" alt="{{ __('names-employees.SergeyBurtsev') }}">
            <p class="out-team__text-name">{{ __('names-employees.SergeyBurtsev') }}</p>
            <h3 class="out-team__text-speciality">{{ __('names-employees.SergeyBurtsev_specialist') }}</h3>
        </div>
        <div class="out-team__conteiner-wrp">
            <img class="out-team__img-emp" src="/img/PetrLadan.jpg" alt="{{ __('names-employees.PetrLadan') }}">
            <p class="out-team__text-name">{{ __('names-employees.PetrLadan') }}</p>
            <h3 class="out-team__text-speciality">{{ __('names-employees.PetrLadan_specialist') }}</h3>
        </div>
        <div class="out-team__conteiner-wrp">
            <img class="out-team__img-emp" src="/img/DmytroBokhan.jpg" alt="{{ __('names-employees.DmytroBokhan') }}">
            <p class="out-team__text-name">{{ __('names-employees.DmytroBokhan') }}</p>
            <h3 class="out-team__text-speciality">{{ __('names-employees.DmytroBokhan_specialist') }}</h3>
        </div>
        <div class="out-team__conteiner-wrp">
            <img class="out-team__img-emp" src="/img/seo-tatiana.jpg" alt="{{ __('names-employees.TatyanaMokraya') }}">
            <p class="out-team__text-name">{{ __('names-employees.TatyanaMokraya') }}</p>
            <h3 class="out-team__text-speciality">{{ __('names-employees.TatyanaMokraya_specialist') }}</h3>
        </div>
        <div class="out-team__conteiner-wrp">
            <img class="out-team__img-emp" src="/img/YuliaTimchenko.JPG" alt="{{ __('names-employees.YuliaTimchenko') }}">
            <p class="out-team__text-name">{{ __('names-employees.YuliaTimchenko') }}</p>
            <h3 class="out-team__text-speciality">{{ __('names-employees.YuliaTimchenko_specialist') }}</h3>
        </div>
        <div class="out-team__conteiner-wrp">
            <img class="out-team__img-emp" src="/img/Evgeny-Vitchenko.jpg" alt="{{ __('names-employees.EvgenyVitchenko') }}">
            <p class="out-team__text-name">{{ __('names-employees.EvgenyVitchenko') }}</p>
            <h3 class="out-team__text-speciality">{{ __('names-employees.EvgenyVitchenko_specialist') }}</h3>
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