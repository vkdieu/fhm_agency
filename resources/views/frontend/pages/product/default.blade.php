@extends('frontend.layouts.default')

@php
$page_title = $taxonomy->title ?? ($page->title ?? ($page->name ?? null));
$image_background = $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');
@endphp

@section('content')

  <section id="page-title">

    <div class="container clearfix">
      <h1>{{ $page_title }}</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">@lang('Home')</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $page->name ?? '' }}</li>
      </ol>
    </div>

  </section>

  <!-- Main Content -->
  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix">

        <div class="row gutter-40 col-mb-80">

          <div class="postcontent col-lg-9">

            <div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">


                @if ($posts)
                  @foreach ($posts as $item)
                    @php
                      $title = $item->json_params->title->{$locale} ?? $item->title;
                      $brief = $item->json_params->brief->{$locale} ?? $item->brief;
                      $image = $item->image_thumb ?? ($item->image ?? null);
                      $date = date('H:i d/m/Y', strtotime($item->created_at));
                      // Viet ham xu ly lay alias bai viet
                      $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $item->taxonomy_title, $item->taxonomy_id);
                      $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $title, $item->id, 'detail');
                    @endphp
                    <div class="col-lg-4 col-md-4 col-6 px-2">
                      <div class="product">
                        <div class="product-image">
                          <a href="{{ $alias }}"><img src="{{ $image }}" alt="{{ $title }}" /></a>
                          <a href="{{ $alias }}"><img src="{{ $image }}" alt="{{ $title }}" /></a>
                          <div class="bg-overlay">
                            <div class="bg-overlay-content align-items-end justify-content-between"
                              data-hover-animate="fadeIn" data-hover-speed="400">
                              <a href="javascript:void(0)" title="@lang('Add to cart')" class="btn btn-dark me-2 add-to-cart" data-id="{{ $item->id }}" data-quantity="1"><i
                                  class="icon-shopping-basket"></i></a>
                              <a href="{{ $alias }}" class="btn btn-dark" title="@lang('Detail')"><i
                                  class="icon-line-expand"></i></a>
                            </div>
                            <div class="bg-overlay-bg bg-transparent"></div>
                          </div>
      
                        </div>
                        <div class="product-desc">
                          <div class="product-title mb-1">
                            <h3>
                              <a href="{{ $alias }}">{{ $title }}</a>
                            </h3>
                          </div>
                          <div class="product-price font-primary">
                            @if (isset($item->json_params->price_old) && $item->json_params->price_old > 0)
                              <del class="me-1">
                                {{ number_format($item->json_params->price_old, 0, ',', '.') }} đ
                              </del>
                            @endif
                            <ins>
                              {{ isset($item->json_params->price) && $item->json_params->price > 0 ? number_format($item->json_params->price, 0, ',', '.') . ' đ' : __('Contact') }}
                            </ins>
      
                          </div>
                          <div class="product-rating">
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                            <i class="icon-star3"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                @else
                  <p>@lang('not_found')</p>
                @endif
                

              {{ $posts->withQueryString()->links('frontend.pagination.default') }}


            </div><!-- /.content-woocommerce -->
          </div><!-- /#inner-content -->

          @include('frontend.components.sidebar.product')


        </div><!-- /#site-content -->


      </div><!-- /#content-wrap -->
    </div><!-- /#main-content -->
  </section>

  {{-- End content --}}
@endsection
