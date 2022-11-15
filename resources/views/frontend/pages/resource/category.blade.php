@extends('frontend.layouts.sidebar_no')

@php
$page_title = $taxonomy->title ?? ($page->title ?? $page->name);
$image_background = $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');

$title = $taxonomy->json_params->title->{$locale} ?? ($taxonomy->title ?? null);
$image = $taxonomy->json_params->image ?? null;
$seo_title = $taxonomy->json_params->seo_title ?? $title;
$seo_keyword = $taxonomy->json_params->seo_keyword ?? null;
$seo_description = $taxonomy->json_params->seo_description ?? null;
$seo_image = $image ?? null;
$str_alias = '.html?id=';
@endphp
@push('style')
  <style>
    #services .article img {
      height: 350px;
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
          <h1 class="featured-title-heading">{{ $page_title }}</h1>
        </div>

        <div id="breadcrumbs">
          <div class="breadcrumbs-inner">
            <div class="breadcrumb-trail">
              <a href="{{ route('frontend.home') }}" class="trail-begin">@lang('Home')</a>
              <span class="sep"><i class="rt-icon-right-arrow12"></i></span>
              <a href="{{ route('frontend.cms.product') }}" class="trail-end">{{ $page->name ?? '' }}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- #featured-title -->

  <div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
      <div id="site-content" class="site-content clearfix">
        <div id="inner-content" class="inner-content-wrap">
          <div class="page-content">
            <!-- SERVICES -->
            <div class="row-services">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="wprt-spacer clearfix" data-desktop="83" data-mobi="60" data-smobi="60"></div>
                  </div>
                  @isset($posts)
                    @foreach ($posts as $item)
                      @php
                        $title = $item->json_params->title->{$locale} ?? $item->title;
                        $brief = $item->json_params->brief->{$locale} ?? $item->brief;
                        $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
                        // Viet ham xu ly lay slug
                        $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['resource'], $item->taxonomy_title, $item->taxonomy_id);
                        $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['resource'], $title, $item->id, 'detail');
                        
                      @endphp
                      <div class="col-md-4">
                        <div class="wprt-content-box style-6">
                          <div class="wprt-icon-box style-8 clearfix icon-top hexagon-bg-2 align-center">
                            <div class="">
                              <a href="{{ $alias }}">
                                <img src="{{ $image }}" alt="{{ $title }}">
                              </a>
                            </div>

                            <h3 class="heading">
                              <a href="{{ $alias }}">{{ $title }}</a>
                            </h3>

                            <p class="desc">{!! nl2br(Str::limit($brief, 100)) !!}</p>

                            <div class="elm-btn">
                              <a class="small wprt-button accent" href="{{ $alias }}">
                                @lang('View detail')
                              </a>
                            </div>

                          </div><!-- /.wprt-icon-box -->
                        </div><!-- /.wprt-content-box -->

                        <div class="wprt-spacer clearfix" data-desktop="35" data-mobi="15" data-smobi="15"></div>
                      </div><!-- /.col-md-4 -->
                    @endforeach
                  @endisset

                  {{ $posts->withQueryString()->links('frontend.pagination.default') }}
                  
                  <div class="col-md-12">
                    <div class="wprt-spacer clearfix" data-desktop="90" data-mobi="60" data-smobi="60"></div>
                  </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
              </div><!-- /.container -->
            </div>
            <!-- END SERVICES -->

          </div><!-- /.page-content -->
        </div><!-- /#inner-content -->
      </div><!-- /#site-content -->
    </div><!-- /#content-wrap -->
  </div>
  
  {{-- End content --}}
@endsection
