@extends('frontend.layouts.sidebar_right')

@php
$title = $detail->json_params->title->{$locale} ?? $detail->title;
$brief = $detail->json_params->brief->{$locale} ?? null;
$content = $detail->json_params->content->{$locale} ?? null;
$image = $detail->image != '' ? $detail->image : null;
$image_thumb = $detail->image_thumb != '' ? $detail->image_thumb : null;
$date = date('H:i d/m/Y', strtotime($detail->created_at));
// For taxonomy
$taxonomy_json_params = json_decode($detail->taxonomy_json_params);
$taxonomy_title = $taxonomy_json_params->title->{$locale} ?? $detail->taxonomy_title;
$image_background = $taxonomy_json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? null);
$taxonomy_alias = Str::slug($taxonomy_title);
$alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['resource'], $taxonomy_alias, $detail->taxonomy_id);

$seo_title = $detail->json_params->seo_title ?? $title;
$seo_keyword = $detail->json_params->seo_keyword ?? null;
$seo_description = $detail->json_params->seo_description ?? $brief;
$seo_image = $image ?? ($image_thumb ?? null);

@endphp

@push('style')
  <style>
    #content-detail h2 {
      font-size: 30px;
    }

    #content-detail h3 {
      font-size: 24px;
    }

    #content-detail h4 {
      font-size: 18px;
    }

    #content-detail h5,
    #content-detail h6 {
      font-size: 16px;
    }

    #content-detail p {
      margin-top: 0;
      margin-bottom: 0;
    }

    #content-detail h1,
    #content-detail h2,
    #content-detail h3,
    #content-detail h4,
    #content-detail h5,
    #content-detail h6 {
      margin-top: 0;
      margin-bottom: .5rem;
    }

    #content-detail p+h2,
    #content-detail p+.h2 {
      margin-top: 1rem;
    }

    #content-detail h2+p,
    #content-detail .h2+p {
      margin-top: 1rem;
    }

    #content-detail p+h3,
    #content-detail p+.h3 {
      margin-top: 0.5rem;
    }

    #content-detail h3+p,
    #content-detail .h3+p {
      margin-top: 0.5rem;
    }

    #content-detail ul,
    #content-detail ol {
      list-style: inherit;
      padding: 0 0 0 50px;

    }

    #content-detail ul li,
    #content-detail ol li {
      display: list-item;
    }

    .posts-sm .entry-image {
      width: 75px;
    }

    #content-detail img {
      max-width: 100%;
    }

    .flex {
      display: flex;
      /* justify-content: center;
                  align-items: center; */
    }

    .gallery-container {
      /* margin: 0 5px; */
      width: 100%;
    }

    .gallery-container a {
      display: block;
      width: 100%;
    }

    .gallery-container a img {
      width: 100%;
      padding: 5px;
    }

    .gallery-container a img:hover {
      opacity: 0.75;
    }
  </style>
@endpush

@section('content')
  {{-- Print all content by [module - route - page] without blocks content at here --}}

  <!-- Featured Title -->
  <div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="wprt-container clearfix">
      <div class="featured-title-inner-wrap">
        <div class="featured-title-heading-wrap">
          <h1 class="featured-title-heading">{{ $title }}</h1>
        </div>

        <div id="breadcrumbs">
          <div class="breadcrumbs-inner">
            <div class="breadcrumb-trail">
              <a href="{{ route('frontend.home') }}" class="trail-begin">@lang('Home')</a>
              <span class="sep"><i class="rt-icon-right-arrow12"></i></span>
              <a href="{{ $alias_category }}" class="trail-end">{{ $taxonomy_title }}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- #featured-title -->


  <div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="wprt-container">
      <div id="site-content" class="site-content clearfix">
        <div id="inner-content" class="inner-content-wrap">
          <article class="hentry">
            <div class="post-content-single-wrap">

              <div class="post-content" id="content-detail">

                @isset($detail->json_params->gallery_video)
                  @foreach ($detail->json_params->gallery_video as $key => $item)
                    @if ($item->source != '')
                      @if (Str::contains($item->source, 'youtu.be') || Str::contains($item->source, 'youtube.com'))
                        @php
                          if (Str::contains($item->source, 'youtu.be')) {
                              $video_code = 'https://www.youtube.com/embed/' . Str::afterLast($item->source, '/');
                          } else {
                              $video_code = 'https://www.youtube.com/embed/' . Str::afterLast($item->source, 'v=');
                          }
                        @endphp

                        <iframe title="{{ $item->title ?? '' }}" width="500" height="281" src="{{ $video_code }}"
                          frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen>
                        </iframe>
                        <div class="wprt-spacer clearfix" data-desktop="30" data-mobi="15" data-smobi="15"></div>
                      @else
                        <video preload="auto" controls style="display: block; width: 100%;">
                          <source src='{{ $item->source ?? '' }}' />
                        </video>
                        <div class="wprt-spacer clearfix" data-desktop="30" data-mobi="15" data-smobi="15"></div>
                      @endif
                    @endif
                  @endforeach
                @endisset


                {!! $content !!}
              </div><!-- /.post-excerpt -->

              @isset($detail->json_params->gallery_image)
                <div class="wprt-spacer clearfix" data-desktop="30" data-mobi="15" data-smobi="15"></div>
                <h3 class="text-uppercase">@lang('Gallery Image')</h3>

                <div class="wprt-gallery has-arrows arrow-center offsetcenter offset-v0" data-auto="true" data-column="3"
                  data-column2="2" data-column3="1" data-gap="20">
                  <div class="owl-carousel owl-theme">

                    @foreach ($detail->json_params->gallery_image as $key => $value)
                      <div class="gallery-box">
                        <div class="inner">
                          <div class="hover-effect">
                            <div class="gallery-image">
                              <img src="{{ $value }}" alt="Image">
                            </div>

                            <div class="text">
                              <div class="icon">
                                <a class="zoom-popup" href="{{ $value }}"><i class="rt-icon-zoom-in-2"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div><!-- /.wprt-gallery -->
              @endisset

            </div><!-- /.post-content-single-wrap -->
          </article>


          @if (isset($relatedPosts) && count($relatedPosts) > 0)
            <div class="related posts">
              <h3 class="text-uppercase">@lang('Related Resources')</h3>

              <div class="row">

                @foreach ($relatedPosts as $item)
                  @php
                    $title = $item->json_params->title->{$locale} ?? $item->title;
                    $brief = $item->json_params->brief->{$locale} ?? $item->brief;
                    $image = $item->image_thumb ?? ($item->image ?? null);
                    $date = date('H:i d/m/Y', strtotime($item->created_at));
                    // Viet ham xu ly lay alias bai viet
                    $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['resource'], $item->taxonomy_title, $item->taxonomy_id);
                    $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['resource'], $title, $item->id, 'detail');
                  @endphp
                  <div class="col-md-4">
                    <div class="inner">
                      <a href="{{ $alias }}" class="woocommerce-LoopProduct-link">
                        <div class="product-thumbnail">
                          <img width="370" height="370" src="{{ $image }}" alt="{{ $title }}">
                        </div>
                      </a>

                      <div class="post-info">
                        <a href="{{ $alias }}" class="woocommerce-LoopProduct-link">
                          <h5 class="woocommerce-loop-product__title">
                            {{ Str::limit($title, 50) }}
                          </h5>
                        </a>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          @endif

        </div><!-- /#inner-content -->
      </div><!-- /#site-content -->

      @include('frontend.components.sidebar.resource')

    </div><!-- /#content-wrap -->
  </div>

  {{-- End content --}}
@endsection

