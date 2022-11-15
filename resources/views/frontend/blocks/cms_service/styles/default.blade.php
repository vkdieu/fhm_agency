@if ($block)
  @php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $background = $block->image_background != '' ? $block->image_background : url('assets/img/banner.jpg');
    $url_link = $block->url_link != '' ? $block->url_link : null;
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    
    $params['status'] = App\Consts::POST_STATUS['active'];
    $params['is_featured'] = true;
    $params['is_type'] = App\Consts::POST_TYPE['service'];
    
    $rows = App\Http\Services\ContentService::getCmsPost($params)->get();
    
  @endphp

  <div class="container clearfix" id="services">
    <div class="clear"></div>

    <div class="fancy-title title-center title-border topmargin">
      <h3>{{ $title }}</h3>
    </div>

    <div class="row justify-content-center col-mb-50 mb-0">
      @isset($rows)
        @foreach ($rows as $item)
          @php
            $title = $item->json_params->title->{$locale} ?? $item->title;
            $brief = $item->json_params->brief->{$locale} ?? $item->brief;
            $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
            // Viet ham xu ly lay slug
            $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['service'], $item->taxonomy_title, $item->taxonomy_id);
            $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['service'], $title, $item->id, 'detail');
            
          @endphp
          <div class="col-sm-6 col-lg-4">
            <div class="feature-box media-box fbox-bg">
              <div class="fbox-media">
                <a href="{{ $alias }}">
                  <img src="{{ $image }}" alt="{{ $title }}" style="border-radius: 0" />
                </a>
              </div>
              <div class="fbox-content">
                
                  <h3 class="text-center mb-3">
                    <a href="{{ $alias }}">
                    {{ $title }}
                  </a>
                  </h3>
                
                <span class="subtitle">
                  {!! nl2br(Str::limit($brief, 200)) !!}
                </span>
              </div>
            </div>
          </div>
        @endforeach
      @endisset
    </div>

    <div class="clear"></div>
  </div>
  
@endif
