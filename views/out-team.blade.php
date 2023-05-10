@extends('layout')

@section('title'){{ __('out-team.metaTitle') }}@endsection
@section('metaDiscription'){{ __('out-team.metaDescription') }}@endsection

@section('main_content')
<main class="out-team wrp-margin">
    <h1 class="title-h1">{{ __('out-team.title') }}</h1>
    <div>
        <div>
            <img class="out-team__img-emp" src="/img/seo-tatiana.jpg" alt="{{ __('names-employees.TatyanaMokraya') }}">
            <p>{{ __('names-employees.TatyanaMokraya') }}</p>
            <h3>{{ __('names-employees.TatyanaMokraya') }}</h3>
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