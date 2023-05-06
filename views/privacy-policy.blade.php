@extends('layout')

@section('title'){{ __('blog.metaTitle') }}@endsection
@section('metaDiscription'){{ __('blog.metaDescription') }}@endsection

@section('main_content')
<main>

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