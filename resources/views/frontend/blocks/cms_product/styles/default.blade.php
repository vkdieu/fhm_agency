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
     <!-- START BESTSELLER -->
     <div class="section bg-transparent mb-0">
      <div class="container">
        <p class="titular-sub-title text-primary fw-bold center">
          {{$title}}
        </p>
        <h1
          class="titular-title fw-normal center font-secondary fst-normal"
        >
          {{$brief}}
        </h1>

        <div class="clear mb-5"></div>
      </div>
      <div class="container">
        <!-- Portfolio Items
    ============================================= -->
        <div
          id="portfolio"
          class="portfolio row grid-container gutter-20"
          data-layout="fitRows"
        >
          <!-- Portfolio Item: Start -->
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
      
        <article
        class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-media pf-icons"
      >
        <!-- Grid Inner: Start -->
        <div class="grid-inner">
          <!-- Image: Start -->
          <div class="portfolio-image">
            <a href="portfolio-single.html">
              <img
                src="{{$image}}"
                alt="Open Imagination"
              />
            </a>
            <!-- Overlay: Start -->
            <div class="bg-overlay">
              <div
                class="bg-overlay-content dark flex-column"
                data-hover-animate="fadeIn"
                style="background-color: rgba(255, 255, 255, 0.9)"
              >
                <!-- Decription: Start -->
                <div
                  class="portfolio-desc pt-0 center"
                  data-hover-animate="fadeInDownSmall"
                  data-hover-animate-out="fadeOutUpSmall"
                  data-hover-speed="350"
                >
                  <h3>
                    <a href="portfolio-single.html"
                      >{{$title}}</a
                    >
                  </h3>
                  <span>{{ isset($item->json_params->price) && $item->json_params->price > 0 ? number_format($item->json_params->price, 0, ',', '.') . ' đ' : __('Contact') }}</span>
                </div>
                <!-- Description: End -->
                <div class="d-flex">
                  <a
                    href="https://splendour.themerex.net/wp-content/uploads/2020/05/prod15-500x600.jpg"
                    class="overlay-trigger-icon bg-light text-dark"
                    data-hover-animate="fadeInUpSmall"
                    data-hover-animate-out="fadeOutDownSmall"
                    data-hover-speed="350"
                    data-lightbox="image"
                    title="Image"
                    ><i class="icon-line-plus"></i
                  ></a>
                  <a
                    href="portfolio-single.html"
                    class="overlay-trigger-icon bg-light text-dark"
                    data-hover-animate="fadeInUpSmall"
                    data-hover-animate-out="fadeOutDownSmall"
                    data-hover-speed="350"
                    ><i class="icon-line-ellipsis"></i
                  ></a>
                </div>
              </div>
              <div
                class="bg-overlay-bg dark"
                data-hover-animate="fadeIn"
              ></div>
            </div>
            <!-- Overlay: End -->
          </div>
          <!-- Image: End -->
        </div>
        <!-- Grid Inner: End -->
      </article>
      @endforeach

    </div>

    <div class="clear"></div>
  </div>


@endif
