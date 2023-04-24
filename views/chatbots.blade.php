@extends('layout')
@section('main_content')
<main id="lock" data-chat-dot data-animation-wrp class="chat-bot">
  <section class="chat-bot-banner">
    <div class="chat-bot__wrp chat-bot-banner__container">
      <div data-left class="chat-bot-banner__content wow animate__animated">
        <h1 class="chat-bot-banner__title">{{ __('chatbots.chat-bot-banner_title') }}</h1>
        <p class="chat-bot-banner__text">{{ __('chatbots.chat-bot-banner_descr') }}</p>
        <button class="chat-bot__button btn-pop-up">{{ __('chatbots.chat-bot-banner_button') }}</button>
      </div>
      <div class="chat-bot-banner__picture">
        <img data-right class="wow animate__animated" src="/img/chat_bot_banner.png" alt="banner" class="" />
      </div>
    </div>
  </section>

  <section class="chat-bot-statistics">
    <div class="chat-bot__wrp">
      <div class="chat-bot-statistics__container">
        <h3 class="chat-bot-content__title chat-bot-statistics__title">
          {{ __('chatbots.chat-bot-statistics_title') }}
        </h3>
        <p class="chat-bot-content__subtitle chat-bot-statistics__subtitle">{{ __('chatbots.chat-bot-statistics_subtitle') }}</p>
        <div class="chat-bot-statistics__content">
          <div data-wow-offset="200" class="chat-bot-statistics__item wow animate__animated animate__fadeInUp">
            <p class="chat-bot-statistics__percent">69%</p>
            <p class="chat-bot-statistics__text">{{ __('chatbots.chat-bot-statistics_1') }}</p>
          </div>
          <div data-wow-offset="200" data-wow-delay="0.2s" class="chat-bot-statistics__item wow animate__animated animate__fadeInUp">
            <p class="chat-bot-statistics__percent">40%</p>
            <p class="chat-bot-statistics__text">{{ __('chatbots.chat-bot-statistics_2') }}</p>
          </div>
          <div data-wow-offset="200" data-wow-delay="0.4s" class="chat-bot-statistics__item wow animate__animated animate__fadeInUp">
            <p class="chat-bot-statistics__percent">35%</p>
            <p class="chat-bot-statistics__text">{{ __('chatbots.chat-bot-statistics_3') }}</p>
          </div>
          <div data-wow-offset="200" data-wow-delay="0.6s" class="chat-bot-statistics__item wow animate__animated animate__fadeInUp">
            <p class="chat-bot-statistics__percent">21%</p>
            <p class="chat-bot-statistics__text">{{ __('chatbots.chat-bot-statistics_4') }}</p>
          </div>
        </div>
        <div data-right data-wow-offset="200" class="chat-bot-statistics__proof wow animate__animated">
          <p class="chat-bot-content__subtitle chat-bot-content__subtitle_italic">{{ __('chatbots.chat-bot-statistics_bottom') }}</p>
        </div>
      </div>
    </div>
  </section>

  <section class="chat-bot-why">
    <div class="chat-bot__pink-triangle">
      <img src="/img/Polygon_14.png" alt="triangle" />
    </div>
    <div class="chat-bot__wrp">
      <div class="chat-bot-why__container">
        <div data-left data-wow-offset="200" class="chat-bot-why__picture wow animate__animated">
          <img src="/img/why.png" alt="why" />
        </div>
        <div data-right data-wow-offset="200" class="chat-bot-why__content wow animate__animated">
          <h3 class="chat-bot-content__title">
            {{ __('chatbots.chat-bot-why_title') }}
          </h3>
          <ul class="chat-bot-why__list">
            <li class="chat-bot-why__item">
              {{ __('chatbots.chat-bot-why_li1') }}
            </li>
            <li class="chat-bot-why__item">
              {{ __('chatbots.chat-bot-why_li2') }}
            </li>
            <li class="chat-bot-why__item">
              {{ __('chatbots.chat-bot-why_li3') }}
            </li>
            <li class="chat-bot-why__item">
              {{ __('chatbots.chat-bot-why_li4') }}
            </li>
            <li class="chat-bot-why__item">
              {{ __('chatbots.chat-bot-why_li5') }}
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="chat-bot-advantages">
    <div class="chat-bot__wrp-advantages">
      <h2 class="chat-bot-content__title chat-bot-advantages__title">
        {{ __('chatbots.chat-bot-advantages_title') }}
      </h2>
      <div class="chat-bot-advantages__container">
        <div data-wow-offset="200" class="chat-bot-advantages__item wow animate__animated animate__fadeInLeft">
          <img src="/img/icon_advantage.png" alt="icon" class="chat-bot-advantages__icon" />
          <div class="chat-bot-advantages__content">
            <h3 class="chat-bot-advantages__subtitle">
              {{ __('chatbots.chat-bot-advantages_subtitle1') }}
            </h3>
            <p class="chat-bot-content__text chat-bot-advantages__text">
              {{ __('chatbots.chat-bot-advantages_descr1') }}
            </p>
          </div>
        </div>
        <div data-wow-offset="200" data-wow-delay="0.4s" class="chat-bot-advantages__item wow animate__animated animate__fadeInLeft">
          <img src="/img/icon_advantage_selling.png" alt="icon" class="chat-bot-advantages__icon" />
          <div class="chat-bot-advantages__content">
            <h3 class="chat-bot-advantages__subtitle">
              {{ __('chatbots.chat-bot-advantages_subtitle2') }}
            </h3>
            <p class="chat-bot-content__text chat-bot-advantages__text">
              {{ __('chatbots.chat-bot-advantages_descr2') }}
            </p>
          </div>
        </div>
        <div data-wow-offset="200" data-wow-delay="0.8s" class="chat-bot-advantages__item wow animate__animated animate__fadeInLeft">
          <img src="/img/icon_advantage_passage-of-time.png" alt="icon" class="chat-bot-advantages__icon" />
          <div class="chat-bot-advantages__content">
            <h3 class="chat-bot-advantages__subtitle">
              {{ __('chatbots.chat-bot-advantages_subtitle3') }}
            </h3>
            <p class="chat-bot-content__text chat-bot-advantages__text">
              {{ __('chatbots.chat-bot-advantages_descr3') }}
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="chat-bot-advantages__box">
      <h3 class="chat-bot-content__title chat-bot-content__title_white chat-bot-advantages__title-width">
        {{ __('chatbots.chat-bot-advantages_box_title') }}
      </h3>
      <p class="chat-bot-advantages__subtitle chat-bot-advantages__subtitle_white chat-bot-advantages__subtitle-width">
        {{ __('chatbots.chat-bot-advantages_box_descr') }}
      </p>
    </div>
  </section>

  <section class="chat-bot-explanation">
    <div class="chat-bot__wrp">
      <div class="chat-bot-explanation__container">
        <div data-left data-wow-offset="200" class="chat-bot-explanation__item wow animate__animated">
          <p class="chat-bot-content__text chat-bot-content__text_white">
            {{ __('chatbots.chat-bot-explanation_p1') }}
          </p>
          <p class="chat-bot-content__text chat-bot-content__text_white">
            {{ __('chatbots.chat-bot-explanation_p2') }}
          </p>
        </div>
        <div class="chat-bot-explanation__picture">
          <img data-right data-wow-offset="200" class="wow animate__animated" src="/img/explanation_picture.png" alt="picture" />
        </div>
      </div>
      <div class="chat-bot-explanation__content">
        <div data-left data-wow-offset="200" class="chat-bot-explanation__text chat-bot-content__text chat-bot-content__text_weight wow animate__animated">
          {{ __('chatbots.chat-bot-explanation_blockleft') }}
        </div>
        <div data-right data-wow-offset="200" class="chat-bot-explanation__content-item wow animate__animated">
          <h4 class="chat-bot-content__subtitle chat-bot-content__subtitle_white chat-bot-explanation__position">
            {{ __('chatbots.chat-bot-explanation_blockright_title') }}
          </h4>
          <div class="chat-bot-explanation__list">
            <div class="chat-bot-explanation__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item">
                {{ __('chatbots.chat-bot-explanation_blockright_li1') }}
              </p>
            </div>
            <div class="chat-bot-explanation__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item">
                {{ __('chatbots.chat-bot-explanation_blockright_li2') }}
              </p>
            </div>
            <div class="chat-bot-explanation__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item">
                {{ __('chatbots.chat-bot-explanation_blockright_li3') }}
              </p>
            </div>
            <div class="chat-bot-explanation__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item">
                {{ __('chatbots.chat-bot-explanation_blockright_li4') }}
              </p>
            </div>
            <div class="chat-bot-explanation__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item">
                {{ __('chatbots.chat-bot-explanation_blockright_li5') }}
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="chat-bot-explanation__box">
        <p class="chat-bot-content__subtitle chat-bot-content__subtitle_explain">
          {{ __('chatbots.chat-bot-explanation_titlebottom') }}
        </p>
        <button class="chat-bot__button btn-pop-up">{{ __('chatbots.chat-bot-explanation_button') }}</button>
      </div>
    </div>
  </section>

  <section class="chat-bot-create">
    <div class="chat-bot__blue-triangle">
      <img src="/img/Polygon_15.png" alt="triangle" />
    </div>
    <div class="chat-bot__wrp">
      <h2 class="chat-bot-content__title chat-bot-create__title">
        {{ __('chatbots.chat-bot-create_title') }}
      </h2>
      <div class="chat-bot-create__container">
        <div class="chat-bot-create__item">
          <div class="chat-bot-create__item-box">
            <img src="/icons/create_icon_left.png" alt="icon" class="chat-bot-create__content-icon" />
            <div class="chat-bot-create__content">
              <div class="chat-bot-create__content-box">
                <h3 class="chat-bot-create__content-title">
                  {{ __('chatbots.chat-bot-create_left_title') }}
                </h3>
                <img src="/icons/arrow_bot_icon.png" alt="arrow" class="chat-bot-create__arrow" />
              </div>
              <p class="chat-bot-content__text chat-bot-content__text_invisible">
                {{ __('chatbots.chat-bot-create_left_descr') }}
              </p>
            </div>
          </div>
          <div class="chat-bot__js">
            <p class="chat-bot-content__text chat-bot-content__text_visible">
              {{ __('chatbots.chat-bot-create_left_descr') }}
            </p>
            <h4 class="chat-bot-create__subtitle">
              {{ __('chatbots.chat-bot-create_left_subtitle') }}
            </h4>
            <div class="chat-bot-create__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <div class="chat-bot-content__list-item chat-bot-content__list-item_dark">
                {{ __('chatbots.chat-bot-create_left_li1') }}
              </div>
            </div>
            <div class="chat-bot-create__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_dark">
                {{ __('chatbots.chat-bot-create_left_li2') }}
              </p>
            </div>
            <div class="chat-bot-create__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_dark">
                {{ __('chatbots.chat-bot-create_left_li3') }}
              </p>
            </div>
            <p class="chat-bot-create__text">
              {{ __('chatbots.chat-bot-create_left_bottom') }}
            </p>
          </div>
        </div>
        <div class="chat-bot-create__item">
          <div class="chat-bot-create__item-box">
            <img src="/icons/create_icon_right.png" alt="icon" class="chat-bot-create__content-icon" />

            <div class="chat-bot-create__content">
              <div class="chat-bot-create__content-box">
                <h3 class="chat-bot-create__content-title">
                  {{ __('chatbots.chat-bot-create_right_title') }}
                </h3>
                <img src="/icons/arrow_bot_icon.png" alt="arrow" class="chat-bot-create__arrow" />
              </div>
              <p class="chat-bot-content__text chat-bot-content__text_center chat-bot-content__text_invisible">
                {{ __('chatbots.chat-bot-create_right_descr') }}
              </p>
            </div>
          </div>
          <div class="chat-bot__js">
            <p class="chat-bot-content__text chat-bot-content__text_center chat-bot-content__text_visible">
              {{ __('chatbots.chat-bot-create_right_descr') }}
            </p>
            <h4 class="chat-bot-create__subtitle">
              {{ __('chatbots.chat-bot-create_right_subtitle') }}
            </h4>
            <div class="chat-bot-create__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_dark">
                {{ __('chatbots.chat-bot-create_right_li1') }}
              </p>
            </div>
            <div class="chat-bot-create__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_dark">
                {{ __('chatbots.chat-bot-create_right_li2') }}
              </p>
            </div>
            <div class="chat-bot-create__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_dark">
                {{ __('chatbots.chat-bot-create_right_li3') }}
              </p>
            </div>
            <p class="chat-bot-create__text">
              {{ __('chatbots.chat-bot-create_right_bottom') }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="chat-bot-types">
    <div class="chat-bot__wrp">
      <div class="chat-bot-types__title-box">
        <h2 class="chat-bot-content__title chat-bot-types__title-margin">
          {{ __('chatbots.chat-bot-types_title') }}
        </h2>
        <h4 class="chat-bot-content__subtitle">
          {{ __('chatbots.chat-bot-types_subtitle') }}
        </h4>
      </div>
      <div class="chat-bot-types__slider-wrap">
        <div class="chat-bot-types__slider">
          <div class="chat-bot-types__slider-item js-active">{{ __('chatbots.chat-bot-types_tab1_title') }}</div>
          <div class="chat-bot-types__slider-item">{{ __('chatbots.chat-bot-types_tab2_title') }}</div>
          <div class="chat-bot-types__slider-item">{{ __('chatbots.chat-bot-types_tab3_title') }}</div>
          <div class="chat-bot-types__slider-item">{{ __('chatbots.chat-bot-types_tab4_title') }}</div>
        </div>
      </div>
      <div class="chat-bot-types__js js-active">
        <div class="chat-bot-types__item">
          <div data-wow-offset="200" class="chat-bot-types__item-content wow animate__animated animate__fadeInLeft">
            <div class="chat-bot-types__subtitle-box">
              <img src="/icons/web_icon.png" alt="icon" class="chat-bot-types__icon" />
              <h4 class="chat-bot-types__subtitle">
                {{ __('chatbots.chat-bot-types_tab1_block1_title') }}
              </h4>
            </div>
            <div class="chat-bot-types__line">
              <img src="/icons/line_icon.svg" alt="arrow" />
            </div>
            <ul class="chat-bot-types__list">
              <li class="chat-bot-content__text">{{ __('chatbots.chat-bot-types_tab1_block1_li1') }}</li>
              <li class="chat-bot-content__text">{{ __('chatbots.chat-bot-types_tab1_block1_li2') }}</li>
              <li class="chat-bot-content__text">{{ __('chatbots.chat-bot-types_tab1_block1_li3') }}</li>
              <li class="chat-bot-content__text">{{ __('chatbots.chat-bot-types_tab1_block1_li4') }}</li>
              <li class="chat-bot-content__text">{{ __('chatbots.chat-bot-types_tab1_block1_li5') }}</li>
              <li class="chat-bot-content__text">{{ __('chatbots.chat-bot-types_tab1_block1_li6') }}</li>
            </ul>
          </div>
          <div data-wow-offset="200" data-wow-delay="0.4s" class="chat-bot-types__item-content wow animate__animated animate__fadeInLeft">
            <div class="chat-bot-types__subtitle-box">
              <img src="/icons/customer_support_icon.png" alt="icon" class="chat-bot-types__icon" />
              <h4 class="chat-bot-types__subtitle">
                {{ __('chatbots.chat-bot-types_tab1_block2_title') }}
              </h4>
            </div>
            <div class="chat-bot-types__line">
              <img src="/icons/line_icon.svg" alt="arrow" />
            </div>
            <ul class="chat-bot-types__list">
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab1_block2_li1') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab1_block2_li2') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab1_block2_li3') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab1_block2_li4') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab1_block2_li5') }}
              </li>
            </ul>
          </div>
          <div data-wow-offset="200" data-wow-delay="0.8s" class="chat-bot-types__item-content wow animate__animated animate__fadeInLeft">
            <div class="chat-bot-types__subtitle-box">
              <img src="/icons/work__staff_icon.png" alt="icon" class="chat-bot-types__icon" />
              <h4 class="chat-bot-types__subtitle">
                {{ __('chatbots.chat-bot-types_tab1_block3_title') }}
              </h4>
            </div>
            <div class="chat-bot-types__line">
              <img src="/icons/line_icon.svg" alt="arrow" />
            </div>
            <ul class="chat-bot-types__list">
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab1_block3_li1') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab1_block3_li2') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab1_block3_li3') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab1_block3_li4') }}
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="chat-bot-types__js">
        <div class="chat-bot-types__item">
          <div class="chat-bot-types__item-content">
            <div>
              <div class="chat-bot-types__subtitle-box chat-bot-types__subtitle-box-br">
                <img src="/icons/video_call_icon.svg" alt="icon" class="chat-bot-types__icon" />
                <h4 class="chat-bot-types__subtitle chat-bot-types__subtitle_info">
                  {{ __('chatbots.chat-bot-types_tab2_block1_title') }}
                </h4>
              </div>
              <p class="chat-bot-types__text chat-bot-types__text_invisible">
                {{ __('chatbots.chat-bot-types_tab2_block1_title') }}
              </p>
            </div>
            <div class="chat-bot-types__line">
              <img src="/icons/line_icon.svg" alt="arrow" />
            </div>
            <ul class="chat-bot-types__list">
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab2_block1_li1') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab2_block1_li2') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab2_block1_li3') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab2_block1_li4') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab2_block1_li5') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab2_block1_li6') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab2_block1_li7') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab2_block1_li8') }}
              </li>
              <li class="chat-bot-content__text">
                {{ __('chatbots.chat-bot-types_tab2_block1_li9') }}
              </li>
            </ul>
            <p class="chat-bot-types__text chat-bot-types__text_visible">
              {{ __('chatbots.chat-bot-types_tab2_block1_bottom') }}
            </p>
          </div>
        </div>
      </div>
      <div class="chat-bot-types__js">
        <div class="chat-bot-types__subtitle-sale">
          {{ __('chatbots.chat-bot-types_tab3_block_head1') }}
          <p>
            {{ __('chatbots.chat-bot-types_tab3_block_head2') }}
          </p>
        </div>
        <div class="chat-bot-types__item-container">
          <div class="chat-bot-types__item-colunm">
            <div class="chat-bot-types__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_black">
                {{ __('chatbots.chat-bot-types_tab3_block_li1') }}
              </p>
            </div>
            <div class="chat-bot-types__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_black">
                {{ __('chatbots.chat-bot-types_tab3_block_li2') }}
              </p>
            </div>
            <div class="chat-bot-types__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_black">
                {{ __('chatbots.chat-bot-types_tab3_block_li3') }}
              </p>
            </div>
            <div class="chat-bot-types__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_black">
                {{ __('chatbots.chat-bot-types_tab3_block_li4') }}
              </p>
            </div>
            <div class="chat-bot-types__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_black">
                {{ __('chatbots.chat-bot-types_tab3_block_li5') }}
              </p>
            </div>
            <div class="chat-bot-types__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_black">
                {{ __('chatbots.chat-bot-types_tab3_block_li6') }}
              </p>
            </div>
          </div>
          <div class="chat-bot-types__item-colunm">
            <div class="chat-bot-types__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_black">
                {{ __('chatbots.chat-bot-types_tab3_block_li7') }}
              </p>
            </div>
            <div class="chat-bot-types__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_black">
                {{ __('chatbots.chat-bot-types_tab3_block_li8') }}
              </p>
            </div>
            <div class="chat-bot-types__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_black">
                {{ __('chatbots.chat-bot-types_tab3_block_li9') }}
              </p>
            </div>
            <div class="chat-bot-types__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_black">
                {{ __('chatbots.chat-bot-types_tab3_block_li10') }}
              </p>
            </div>
            <div class="chat-bot-types__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_black">
                {{ __('chatbots.chat-bot-types_tab3_block_li11') }}
              </p>
            </div>
            <div class="chat-bot-types__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_black">
                {{ __('chatbots.chat-bot-types_tab3_block_li12') }}
              </p>
            </div>
            <div class="chat-bot-types__list-box">
              <img src="/icons/dot_icon.png" alt="dot" class="chat-bot-content__list-icon" />
              <p class="chat-bot-content__list-item chat-bot-content__list-item_black">
                {{ __('chatbots.chat-bot-types_tab3_block_li13') }}
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="chat-bot-types__js">
        <h3 class="chat-bot-types__subtitle-solution chat-bot-types__subtitle-solution_mob">
          {{ __('chatbots.chat-bot-types_tab4_text') }}
        </h3>
      </div>
    </div>
  </section>

  <section data-input-wrp class="chat-bot-form main-form">
    <div class="chat-bot-form__container">
      <h3 class="chat-bot-content__title chat-bot-content__title_white">
        {{ __('chatbots.chat-bot-form_title') }}
      </h3>
      <h5 class="chat-bot-form__subtitle">
        {{ __('chatbots.chat-bot-form_subtitle') }}
      </h5>
    </div>
    <div class="chat-bot-form__box main-form__wrp">
      <div class="main-form__container js-activ">
        <div class="main-form__form-wrp">
          <div class="contacts__btn-close js-btn-close">
            <span class="contacts__btn-close-line contacts__btn-close-line-r"></span>
            <span class="contacts__btn-close-line contacts__btn-close-line-l"></span>
          </div>
          <p class="main-form__form-title">{{ __('chatbots.chat-bot-form_formtitle') }}</p>
          <form class="main-form__form-list js-form" name="form" id="frmContact">
            <div id="mail-status"></div>
            <div class="main-form__form-list-wrp">
              <input type="text" id="UserName" name="UserName" placeholder="{{ __('chatbots.chat-bot-form_formname') }}" class="main-form__form-item js-input" />
              <input type="text" id="CompanyName" name="CompanyName" placeholder="{{ __('chatbots.chat-bot-form_formcompany') }}" class="main-form__form-item" />
              <div class="main-form__phone-wrp">
                <input data-err-phone type="tel" id="phone" name="phone" class="main-form__form-item js-input js-input-phone" />
                <span id="valid-msg" class="hide"></span>
                <span id="error-msg" class="hide"></span>
              </div>
              <input type="text" id="UserEmail" name="UserEmail" placeholder="E-mail" class="main-form__form-item js-input js-input-email" />
            </div>
            <div class="main-form__form-list-text-wrp">
              <img src="/icons/FormCheck_icon.svg" alt="Check" class="main-form__form-list-text-img" />
              <p class="main-form__form-list-text">
                {{ __('chatbots.chat-bot-form_formprivacy') }}
              </p>
            </div>
            <button type="submit" class="main-form__form-button btn-form" onClick="sendContactChatbots();">
              {{ __('chatbots.chat-bot-form_formbutton') }}
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <div data-contacts-wrp class="contacts">
    <div class="main-form__container popup-form__container js-btn-contact">
      <div class="contacts__wrp-cont">
        <div class="contacts__btn-close js-btn-close">
          <span class="contacts__btn-close-line contacts__btn-close-line-r"></span>
          <span class="contacts__btn-close-line contacts__btn-close-line-l"></span>
        </div>
        <div class="contacts__wrp-cont-width">
          <h3 class="contacts__title">{{ __('chatbots.chat-bot-contacts_title') }}</h3>

          <p class="contacts__linc-cont-wrp">
            <a class="contacts__link-wrp" href="tel:+380681804842">
              <img class="contacts__phone-img" src="/icons/phone-icon.svg" alt="phone number" />
              <span class="contacts__text">+38(068)180 48 42</span>
            </a>
          </p>
          <p>
            <a class="contacts__link-wrp" href="mailto:info@star-up-group.com.ua">
              <img class="contacts__phone-img" src="/icons/email-icon.svg" alt="Emeil" />
              <span class="contacts__text">info@star-up-group.com.ua</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
@section('pop-up')
<div id="accept" class="popup-accept__container">
  <div class="popup-accept__wrp">
    <img class="popup-accept__img" src="/img/check_desk_icon.svg" alt="checked" />
    <p class="popup-accept__text">
      Наши специалисты проконсультируют вас и подберут оптимальное решение
      под вашу бизнес-цель!
    </p>
  </div>
</div>
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