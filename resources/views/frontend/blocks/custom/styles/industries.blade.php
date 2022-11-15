@if ($block)
  @php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $image = $block->image != '' ? $block->image : '';
    $image_background = $block->image_background != '' ? $block->image_background : '';
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    $style = isset($block->json_params->style) && $block->json_params->style == 'slider-caption-right' ? 'd-none' : '';
    
    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
  @endphp
  <div class="row-customers">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="wprt-spacer clearfix" data-desktop="83" data-mobi="60" data-smobi="60"></div>

          <div class="wprt-headings style-1 clearfix text-center">
            <h2 class="heading clearfix">
              {{ $title }}
            </h2>
            <div class="sep clearfix"></div>
            <p class="sub-heading clearfix">
              {!! nl2br($brief) !!}
            </p>
          </div>
          <!-- /.wprt-headings -->

          <div class="wprt-spacer clearfix" data-desktop="50" data-mobi="40" data-smobi="40"></div>
        </div>
        <!-- /.col-md-12 -->

        @if ($block_childs)
          @foreach ($block_childs as $item)
            @php
              $title_sub = $item->json_params->title->{$locale} ?? $item->title;
              $brief_sub = $item->json_params->brief->{$locale} ?? $item->brief;
              $image_sub = $item->image != '' ? $item->image : null;
              $url_link = $item->url_link != '' ? $item->url_link : 'javascript:void(0)';
              $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
              $icon = $item->icon != '' ? $item->icon : '';
              $style = isset($block->json_params->style) && $block->json_params->style == 'slider-caption-right' ? 'd-none' : '';
            @endphp
            <div class="col-md-3 customers-item">
              <div
                class="wprt-icon-box style-1 clearfix icon-top outline-type grey-outline align-center rounded-100 has-width w100">
                <div class="">
                  <a href="{!! $url_link !!}">
                    <img src="{{ $image_sub }}" alt="">
                  </a>
                </div>

                <h3 class="heading">
                  <a target="_blank" href="{!! $url_link !!}">{{ $title_sub }}</a>
                </h3>
                @if ($url_link_title != '')
                  <div class="elm-btn">
                    <a target="_blank" class="simple-link font-heading"
                      href="{!! $url_link !!}">{{ $url_link_title }}</a>
                  </div>
                @endif

              </div>
              <!-- /.wprt-icon-box -->

              <div class="wprt-spacer clearfix" data-desktop="15" data-mobi="15" data-smobi="15"></div>
            </div>
          @endforeach
        @endif

        <div class="col-md-12">
          <div class="wprt-spacer clearfix" data-desktop="60" data-mobi="30" data-smobi="30"></div>
        </div>
        <!-- /.col-md-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>

@endif
