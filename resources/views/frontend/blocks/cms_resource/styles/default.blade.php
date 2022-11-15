@if ($block)
  @php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $url_link = $block->url_link != '' ? $block->url_link : null;
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    
    $params['status'] = App\Consts::POST_STATUS['active'];
    $params['is_featured'] = true;
    $params['is_type'] = App\Consts::POST_TYPE['resource'];
    
    $rows = App\Http\Services\ContentService::getCmsPost($params)->get();
    
  @endphp
  <div class="row-gallery">
    <div class="container-fluid no-padding">
      <div class="row no-gutters">
        <div class="col-md-12">
          <div class="wprt-spacer clearfix" data-desktop="83" data-mobi="60" data-smobi="60"></div>

          <div class="wprt-headings style-1 clearfix text-center">
            <h2 class="heading clearfix">{{ $title }}</h2>
            <div class="sep clearfix"></div>
            <p class="sub-heading clearfix">{{ $brief }}</p>
          </div><!-- /.wprt-headings -->

          <div class="wprt-spacer clearfix" data-desktop="45" data-mobi="40" data-smobi="40"></div>

          <div class="wprt-gallery center-showcase has-arrows arrow-center offset10 offset-v0" data-loop="true"
            data-auto="false" data-column="3" data-column2="2" data-column3="1" data-gap="20">
            <div class="grid-full-wrap">
              <div class="container">
                <div class="owl-carousel owl-theme">
                  @if ($rows)
                    @foreach ($rows as $item)
                      @php
                        $title = $item->json_params->title->{$locale} ?? $item->title;
                        $brief = $item->json_params->brief->{$locale} ?? $item->brief;
                        $image = $item->image != '' ? $item->image : null;
                        $image_thumb = $item->image_thumb != '' ? $item->image_thumb : null;
                        $date = date('H:i d/m/Y', strtotime($item->created_at));
                        // Viet ham xu ly lay slug
                        $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['resource'], $item->taxonomy_title, $item->taxonomy_id);
                        $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['resource'], $title, $item->id, 'detail');
                      @endphp
                      <div class="gallery-box style-2">
                        <div class="inner">
                          <div class="hover-effect">
                            <div class="gallery-image">
                              <img src="{{ $image_thumb ?? $image }}" alt="{{ $title }}">
                            </div>

                            <div class="text">
                              <div class="icon">
                                <a class="zoom-popup" href="{{ $image ?? $image_thumb }}">
                                  <i class="rt-icon-zoom-in-2"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <a href="{{ $alias }}" title="{{ $title }}">
                          <h2 data-title="{{ $title }}">
                            {{ $title }}
                          </h2>
                        </a>
                      </div><!-- /.gallery-box -->
                    @endforeach
                  @endif
                </div>
              </div>
            </div>
          </div><!-- /.wprt-gallery -->

          <div class="wprt-spacer clearfix" data-desktop="84" data-mobi="60" data-smobi="60"></div>
        </div><!-- /.col-md-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div>

@endif
