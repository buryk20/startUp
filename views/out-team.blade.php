@extends('layout')

@section('title'){{ __('out-team.metaTitle') }}@endsection
@section('metaDiscription'){{ __('out-team.metaDescription') }}@endsection

@section('main_content')
<main class="out-team wrp-margin">
    <h1 class="title-h1">{{ __('out-team.title') }}</h1>
    <div  class="out-team__wrp-cont">
        <div class="out-team__conteiner-wrp">
            <img class="out-team__img-emp" src="/img/SergeyBurtsev.jpg" alt="{{ __('names-employees.SergeyBurtsev') }}">
            <p class="out-team__text-name">{{ __('names-employees.SergeyBurtsev') }}</p>
            <h3 class="out-team__text-speciality">{{ __('names-employees.SergeyBurtsev_specialist') }}</h3>
        </div>
        <div class="out-team__conteiner-wrp">
            <img class="out-team__img-emp" src="/img/seo-tatiana.jpg" alt="{{ __('names-employees.TatyanaMokraya') }}">
            <p class="out-team__text-name">{{ __('names-employees.TatyanaMokraya') }}</p>
            <h3 class="out-team__text-speciality">{{ __('names-employees.TatyanaMokraya_specialist') }}</h3>
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