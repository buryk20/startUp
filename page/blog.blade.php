@extends('layout')

@section('title'){{ __('blog.metaTitle') }}@endsection
@section('metaDiscription'){{ __('blog.metaDescription') }}@endsection

@section('main_content')
<main>
    <div class="blog">
        <h1 class="blog__title">{{ __('blog.title') }}</h1>
        <div class="blog__article-wrp">
            <div class="blog__article-img-wrp">
                <a href="{{ LaravelLocalization::localizeUrl('/blog/SEO/chto-takoye-seo') }}">
                    <img class="blog__article-img" src="https://hivelife.com/wp-content/uploads/2020/09/ceo-roles-hive-life-banner-1024x427.jpg" alt="{{ __('chto-takoye-seo.title') }}">
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

<script>
  var input = document.querySelector('#phone');
  errorMsg = document.querySelector("#error-msg"),
    validMsg = document.querySelector("#valid-msg");
  var errorClasse = document.querySelector('.js-input-phone')
  var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
  var intl = window.intlTelInput(input, {
    initialCountry: "auto",
    geoIpLookup: function(success, failure) {
      $.get('https://ipinfo.io/json?token=95d0af0903244e', function() {}, 'jsonp').always(
        function(resp) {
          var countryCode =
            resp && resp.country ? resp.country : '';
          console.log(countryCode);
          success(countryCode);
        },
      );
    },
    utilsScript: "js/utils.js"
  });

  var reset = function() {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
  };

  // Validate on blur event
  input.addEventListener('blur', function() {
    reset();
    if (input.value.trim()) {
      if (intl.isValidNumber()) {
        validMsg.classList.remove("hide");
        errorClasse.classList.remove("errorInput")
        console.log("err");
      } else {
        input.classList.add("error");
        var errorCode = intl.getValidationError();
        errorMsg.innerHTML = errorMap[errorCode];


        errorMsg.classList.remove("hide");
        console.log(errorMsg.classList.contains('hide'));
        errorClasse.classList.remove("errorInput");
        if (errorMsg.classList.contains('hide') === false) {
          errorClasse.classList.add("errorInput")
        }

      }
    }
    // console.log(errorMsg.classList.contains);

  });

  // Reset on keyup/change event
  input.addEventListener('change', reset);
  input.addEventListener('keyup', reset);
</script>
@endsection