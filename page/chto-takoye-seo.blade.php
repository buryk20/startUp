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
            <img class="article__img" src="https://hivelife.com/wp-content/uploads/2020/09/ceo-roles-hive-life-banner-1024x427.jpg" alt="">
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
            </p>{{ __('chto-takoye-seo.success') }}</p>
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
                <li><strong>{{ __('chto-takoye-seo.successfulPromotionList_4_s') }}</strong>количество и качество внешних ссылок, указывающих на сайт,
                    могут влиять на его ранжирование в поисковой выдаче. Однако, важно, чтобы эти ссылки были
                    органическими и натуральными, а не созданными искусственно.</li>
                <li><strong>Социальные сигналы: </strong>количество лайков, репостов и комментариев на страницах
                    сайта в
                    социальных сетях может также влиять на его ранжирование в поисковой выдаче.</li>
                <li><strong>Конкуренция на рынке: </strong>чем выше конкуренция на рынке, тем сложнее будет достичь
                    высоких позиций в поисковой выдаче. В таких случаях может потребоваться более глубокий анализ
                    конкурентов и создание уникальной SEO-стратегии.</li>
                <li><strong>Обновления поисковых алгоритмов:</strong> поисковые алгоритмы регулярно обновляются, что
                    может влиять на ранжирование сайтов в поисковой выдаче. Поэтому важно постоянно отслеживать
                    обновления и адаптировать SEO-стратегию соответствующим образом.</li>
            </ul>
            <p>Эти составляющие являются основой успешного SEO-продвижения, и каждый из них требует определенных
                навыков
                и знаний, чтобы эффективно реализовать их в вашей стратегии продвижения.</p>
            <h4 style="text-align: center;"><a id="samostoyatelnoe prodvijenie" name="samostoyatelnoe prodvijenie"></a><strong>Можно ли продвигать сайты
                    самостоятельно?</strong>
            </h4>
            <p>Решение о том, заниматься ли самостоятельно SEO-продвижением или обратиться к специалисту, зависит от
                многих факторов. Однако, если вы не хотите рисковать и хотите получить максимальную отдачу от
                SEO-продвижения, то лучше обратиться к специалистам. Опытные SEO-специалисты знают все тонкости и
                секреты продвижения сайтов, что позволяет им достичь лучших результатов в кратчайшие сроки. Они
                также
                могут предоставить комплексный подход к продвижению, включающий в себя как внутреннюю, так и внешнюю
                оптимизацию сайта, анализ конкурентов, а также работу с контентом и ссылочным профилем.</p>
            <p><strong>Важно выбирать опытных и квалифицированных специалистов, чтобы получить максимальную отдачу
                    от
                    инвестиций в SEO-продвижение.</strong></p>
            <p>В заключение, эффективное SEO продвижение - это сложный и постоянно меняющийся процесс, который
                требует
                времени, усилий и экспертизы. Однако, если вы уделите достаточно внимания оптимизации вашего сайта
                для
                поисковых систем и выполните рекомендации профессиональных SEO-специалистов, то вы сможете
                значительно
                улучшить позиции своего сайта в результатах поиска и привлечь больше трафика на свой сайт.</p>
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