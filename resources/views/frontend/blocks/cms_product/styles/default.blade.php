@if ($block)
  @php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $background = $block->image_background != '' ? $block->image_background : url('assets/img/banner.jpg');
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    
    $params['status'] = App\Consts::POST_STATUS['active'];
    $params['is_featured'] = true;
    $params['is_type'] = App\Consts::POST_TYPE['product'];
    
    $rows = App\Http\Services\ContentService::getCmsPost($params)->get();
    
  @endphp
  <div class="container clearfix product-wrap">
    <div class="clear"></div>

    <div class="fancy-title title-center title-border topmargin">
      <h3 class="product-title-highlight">{{ $title }}</h3>
    </div>

    <div id="oc-products" class="owl-carousel products-carousel carousel-widget" data-pagi="false" data-items-xs="1"
      data-loop="true" data-autoplay="2000" data-items-sm="2" data-items-md="3" data-items-lg="4">

      @foreach ($rows as $item)
        @php
          $title = $item->json_params->title->{$locale} ?? $item->title;
          $brief = $item->json_params->brief->{$locale} ?? $item->brief;
          $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
          $date = date('H:i d/m/Y', strtotime($item->created_at));
          // Viet ham xu ly lay slug
          // $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $item->taxonomy_title, $item->taxonomy_id);
          $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $title, $item->id, 'detail');
        @endphp
        <div class="oc-item">
          <div class="product">
            <div class="product-image">
              <a href="{{ $alias }}">
                <img src="{{ $image }}" alt="{{ $title }}" /></a>
              <a href="{{ $alias }}">
                <img src="{{ $image }}" alt="{{ $title }}" /></a>
              <div class="bg-overlay">
                <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn"
                  data-hover-speed="400">
                  <a href="javascript:void(0)" title="@lang('Add to cart')" class="btn btn-dark me-2 add-to-cart"
                    data-id="{{ $item->id }}" data-quantity="1"><i class="icon-shopping-basket"></i></a>
                  <a href="{{ $alias }}" class="btn btn-dark" title="@lang('Detail')"><i
                      class="icon-line-expand"></i></a>
                </div>
                <div class="bg-overlay-bg bg-transparent"></div>
              </div>
            </div>
            <div class="product-desc center">
              <div class="product-title-highlight">
                <h3>
                  <a href="{{ $alias }}">{{ $title }}</a>
                </h3>
              </div>
              <div class="product-price">
                @if (isset($item->json_params->price_old) && $item->json_params->price_old > 0)
                  <del>
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

    </div>

    <div class="clear"></div>
  </div>


@endif
