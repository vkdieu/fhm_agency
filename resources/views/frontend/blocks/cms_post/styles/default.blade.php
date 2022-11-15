@if ($block)
  @php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $background = $block->image_background != '' ? $block->image_background : url('assets/img/banner.jpg');
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    
    $params['status'] = App\Consts::POST_STATUS['active'];
    $params['is_featured'] = true;
    $params['is_type'] = App\Consts::POST_TYPE['post'];
    
    $rows = App\Http\Services\ContentService::getCmsPost($params)->get();
  @endphp
  <div class="container" id="news">
    <div class="fancy-title title-center title-border topmargin">
      <h3>{!! $title !!}</h3>
    </div>

    <div id="oc-posts" class="owl-carousel posts-carousel carousel-widget posts-md" data-pagi="false" data-items-xs="1"
      data-loop="true" data-autoplay="2000" data-items-sm="2" data-items-md="3" data-items-lg="4">

      @if ($rows)
        @foreach ($rows as $item)
          @php
            $title = $item->json_params->title->{$locale} ?? $item->title;
            $brief = $item->json_params->brief->{$locale} ?? $item->brief;
            $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
            $date = date('d/m/Y', strtotime($item->created_at));
            // Viet ham xu ly lay slug
            $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $item->taxonomy_title, $item->taxonomy_id);
            $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $title, $item->id, 'detail');
          @endphp
          <div class="oc-item">
            <div class="entry">
              <div class="entry-image">
                <a href="{{ $alias }}">
                  <img src="{{ $image }}" alt="{{ $title }}" />
                </a>
              </div>
              <div class="entry-title title-xs nott">
                <h3>
                  <a href="{{ $alias }}">{{ Str::limit($title, 40) }}</a>
                </h3>
              </div>
              <div class="entry-meta">
                <ul>
                  <li><i class="icon-calendar3"></i> {{ $date }}</li>
                  <li>
                    <a href="{{ $alias_category }}"><i class="icon-folder"></i> {{ $item->taxonomy_title }}</a>
                  </li>
                </ul>
              </div>
              <div class="entry-content">
                <p>{{ Str::limit($brief, 80) }}</p>
              </div>
            </div>
          </div>
        @endforeach
      @endif
    </div>
  </div>

@endif
