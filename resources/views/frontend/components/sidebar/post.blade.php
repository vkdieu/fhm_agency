<div id="sidebar">
  <div id="inner-sidebar" class="inner-content-wrap">
    @php
      $params['status'] = App\Consts::TAXONOMY_STATUS['active'];
      $params['taxonomy'] = App\Consts::TAXONOMY['post'];
      
      $taxonomys = App\Http\Services\ContentService::getCmsTaxonomy($params)->get();
    @endphp
    @isset($taxonomys)
      <div class="widget widget_categories">
        <h2 class="widget-title"><span>@lang('Post category')</span></h2>
        <ul>
          @foreach ($taxonomys as $item)
            @if ($item->parent_id == 0 || $item->parent_id == null)
              @php
                $title = $item->json_params->title->{$locale} ?? $item->title;
                $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $title, $item->id);
              @endphp
              <li class="cat-item">
                <a href="{{ $alias_category }}">
                  {{ Str::limit($title, 30) }}
                </a>
              </li>
              @foreach ($taxonomys as $sub)
                @if ($sub->parent_id == $item->id)
                  @php
                    $title_sub = $sub->json_params->title->{$locale} ?? $sub->title;
                    $alias_category_sub = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $title_sub, $sub->id);
                  @endphp
                  <li class="cat-item">
                    <a href="{{ $alias_category_sub }}" style="padding-left:40px;">
                      {{ Str::limit($title_sub, 30) }}
                    </a>
                  </li>
                @endif
              @endforeach
            @endif
          @endforeach
        </ul>
      </div>
    @endisset

    @php
      $params['status'] = App\Consts::POST_STATUS['active'];
      $params['is_type'] = App\Consts::POST_TYPE['post'];
      $params['order_by'] = 'id';
      
      $recents = App\Http\Services\ContentService::getCmsPost($params)
          ->limit(App\Consts::DEFAULT_SIDEBAR_LIMIT)
          ->get();
    @endphp
    @isset($recents)
      <div class="widget widget_recent_news">
        <h2 class="widget-title"><span>@lang('Latest post')</span></h2>
        <ul class="recent-news clearfix">
          @foreach ($recents as $item)
            @php
              $title = $item->json_params->title->{$locale} ?? $item->title;
              $brief = $item->json_params->brief->{$locale} ?? $item->brief;
              $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
              $date = date('d/m/Y', strtotime($item->created_at));
              // Viet ham xu ly lay slug
              $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $item->taxonomy_title, $item->taxonomy_id);
              $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $title, $item->id, 'detail');
            @endphp
            <li class="clearfix">
              <div class="thumb">
                <a href="{{ $alias }}">
                  <img width="150" height="150" src="{{ $image }}" alt="{{ $title }}">
                </a>
              </div><!-- /.thumb -->

              <div class="texts">
                <h3><a href="{{ $alias }}">{{ $title }}</a></h3>
                {{-- <span class="post-date"><span class="entry-date">{{ $date }}</span></span> --}}
              </div><!-- /.texts -->
            </li>
          @endforeach
        </ul>
      </div>
    @endisset

    @php
      $params['status'] = App\Consts::POST_STATUS['active'];
      $params['is_type'] = App\Consts::POST_TYPE['post'];
      $params['order_by'] = 'count_visited';
      
      $mostViews = App\Http\Services\ContentService::getCmsPost($params)
          ->limit(App\Consts::DEFAULT_SIDEBAR_LIMIT)
          ->get();
    @endphp
    @isset($mostViews)
      <div class="widget widget_recent_news">
        <h2 class="widget-title"><span>@lang('Most viewed post')</span></h2>
        <ul class="recent-news clearfix">
          @foreach ($mostViews as $item)
            @php
              $title = $item->json_params->title->{$locale} ?? $item->title;
              $brief = $item->json_params->brief->{$locale} ?? $item->brief;
              $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
              $date = date('d/m/Y', strtotime($item->created_at));
              // Viet ham xu ly lay slug
              $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $item->taxonomy_title, $item->taxonomy_id);
              $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $title, $item->id, 'detail');
            @endphp
            <li class="clearfix">
              <div class="thumb">
                <a href="{{ $alias }}">
                  <img width="150" height="150" src="{{ $image }}" alt="{{ $title }}">
                </a>
              </div><!-- /.thumb -->

              <div class="texts">
                <h3><a href="{{ $alias }}">{{ $title }}</a></h3>
                {{-- <span class="post-date"><span class="entry-date">{{ $date }}</span></span> --}}
              </div><!-- /.texts -->
            </li>
          @endforeach
        </ul>
      </div>
    @endisset
  </div>
</div>
