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

<div class="container">
<p class="titular-sub-title text-primary fw-bold center">
 {{$title}}
</p>
<h1
  class="titular-title fw-normal center font-secondary fst-normal mb-0"
>
  {{$brief}}
</h1>

<div class="clear mb-5"></div>
<div class="row posts-md col-mb-30">


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
          <div class="col-lg-3 col-md-6">
            <div class="entry">
              <div class="entry-image">
                <a href=" {{ $alias }} "
                  ><img
                    src="{{$image}}"
                    alt="Image"
                /></a>
              </div>
              <div class="entry-title title-xs nott">
                <h3>
                  <a href="{{ $alias }}"
                    >{{$title}}</a
                  >
                </h3>
              </div>

              <div class="entry-content">
                <p>
                  {!! nl2br(Str::limit($brief, 200)) !!}
                </p>
              </div>
            </div>
          </div>
        
        @endforeach
      @endisset
    </div>
  </div>
</div>
<!-- END BLOGS -->
</div>
</section>
  
@endif
