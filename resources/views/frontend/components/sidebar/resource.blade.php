<div id="sidebar">
  <div id="inner-sidebar" class="inner-content-wrap">

    @php
      $params['status'] = App\Consts::POST_STATUS['active'];
      $params['is_type'] = App\Consts::POST_TYPE['resource'];
      $params['order_by'] = 'id';
      
      $recents = App\Http\Services\ContentService::getCmsPost($params)
          ->limit(App\Consts::DEFAULT_SIDEBAR_LIMIT)
          ->get();
    @endphp
    @isset($recents)
      <div class="widget widget_recent_news">
        <h2 class="widget-title"><span>@lang('Latest resource')</span></h2>
        <ul class="recent-news clearfix">
          @foreach ($recents as $item)
            @php
              $title = $item->json_params->title->{$locale} ?? $item->title;
              $brief = $item->json_params->brief->{$locale} ?? $item->brief;
              $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
              $date = date('d/m/Y', strtotime($item->created_at));
              // Viet ham xu ly lay slug
              $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['resource'], $item->taxonomy_title, $item->taxonomy_id);
              $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['resource'], $title, $item->id, 'detail');
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
      $params['is_type'] = App\Consts::POST_TYPE['resource'];
      $params['order_by'] = 'count_visited';
      
      $mostViews = App\Http\Services\ContentService::getCmsPost($params)
          ->limit(App\Consts::DEFAULT_SIDEBAR_LIMIT)
          ->get();
    @endphp
    @isset($mostViews)
      <div class="widget widget_recent_news">
        <h2 class="widget-title"><span>@lang('Most viewed resource')</span></h2>
        <ul class="recent-news clearfix">
          @foreach ($mostViews as $item)
            @php
              $title = $item->json_params->title->{$locale} ?? $item->title;
              $brief = $item->json_params->brief->{$locale} ?? $item->brief;
              $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
              $date = date('d/m/Y', strtotime($item->created_at));
              // Viet ham xu ly lay slug
              $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['resource'], $item->taxonomy_title, $item->taxonomy_id);
              $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['resource'], $title, $item->id, 'detail');
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
