@extends('layout')

@section('title'){{ __('privacy-policy.title_seo') }}@endsection
<!-- @section('metaDiscription'){{ __('blog.metaDescription') }}@endsection -->

@section('main_content')
<main class="main privacy-policy wrp-margin">
    <div class="main-wrp">
        <h1>{{ __('privacy-policy.title') }}</h1>
        <ol>
            <li>
                {{ __('privacy-policy.item_1') }}
            </li>
            <li>
                {{ __('privacy-policy.item_2') }}
            </li>
            <li>
                {{ __('privacy-policy.item_3') }}
            </li>
            <li>
                {{ __('privacy-policy.item_4') }}
                <ul>
                    <li>
                        <span class="privacy-policy__list">4.1</span>{{ __('privacy-policy.item_4_1') }}
                    </li>
                    <li>
                        <span class="privacy-policy__list">4.2</span>{{ __('privacy-policy.item_4_2') }}
                    </li>
                    <li>
                        <span class="privacy-policy__list">4.3</span>{{ __('privacy-policy.item_4_3') }}
                    </li>
                    <li>
                        <span class="privacy-policy__list">4.4</span>{{ __('privacy-policy.item_4_4') }}
                    </li>
                    <li>
                        <span class="privacy-policy__list">4.5</span>{{ __('privacy-policy.item_4_5') }}
                    </li>
                    <li>
                        <span class="privacy-policy__list">4.6</span>{{ __('privacy-policy.item_4_6') }}
                    </li>
                    <li>
                        <span class="privacy-policy__list">4.7</span>{{ __('privacy-policy.item_4_7') }}
                    </li>
                    <li>
                        <span class="privacy-policy__list">4.8</span>{{ __('privacy-policy.item_4_8') }}
                    </li>
                    <li>
                        <span class="privacy-policy__list">4.9</span>{{ __('privacy-policy.item_4_9') }}
                    </li>
                    <li>
                        <span class="privacy-policy__list">4.10</span>{{ __('privacy-policy.item_4_10') }}
                    </li>
                    <li>
                        <span class="privacy-policy__list">4.11</span>{{ __('privacy-policy.item_4_11') }}
                    </li>
                </ul>
            </li>
            <li>
                {{ __('privacy-policy.item_5') }}
            </li>
            <li>
                {{ __('privacy-policy.item_6') }}
                <ul>
                    <li>
                    <span class="privacy-policy__list">6.1</span>{{ __('privacy-policy.item_6_1') }}
                    </li>
                    <li>
                    <span class="privacy-policy__list">6.2</span>{{ __('privacy-policy.item_6_2') }}
                    </li>
                    <li>
                    <span class="privacy-policy__list">6.3</span>{{ __('privacy-policy.item_6_3') }}
                    </li>
                </ul>
            </li>
            <li>
                {{ __('privacy-policy.item_7') }}
            </li>
            <li>
                {{ __('privacy-policy.item_8') }}
            </li>
            <li>
                {{ __('privacy-policy.item_9') }}
            </li>
            <li>
                {{ __('privacy-policy.item_10') }}
            </li>
            <li>
                {{ __('privacy-policy.item_11') }}
            </li>
            <li>
                {{ __('privacy-policy.item_12') }}
            </li>
            <li>
                {{ __('privacy-policy.item_13') }}
            </li>
            <li>
                {{ __('privacy-policy.item_14') }}
            </li>
            <li>
                {{ __('privacy-policy.item_15') }}
            </li>
            <li>
                {{ __('privacy-policy.item_16') }}
            </li>
            <li>
                {{ __('privacy-policy.item_17') }}
            </li>
            <li>
                {{ __('privacy-policy.item_17') }}
            </li>
        </ol>
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