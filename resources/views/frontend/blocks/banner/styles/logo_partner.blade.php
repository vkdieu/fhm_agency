@if ($block)
  @php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $image_background = $block->image_background != '' ? $block->image_background : '';
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    $style = isset($block->json_params->style) && $block->json_params->style == 'slider-caption-right' ? 'd-none' : '';
    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
  @endphp
  <div class="row partner bg-light-grey ">
    <div class="container">

      <div class="col-md-12">
        <div class="wprt-spacer clearfix" data-desktop="60" data-mobi="30" data-smobi="30"></div>
        <div class="wprt-headings style-1 clearfix text-center">
          <h2 class="heading clearfix">{{ $title }}</h2>
          <div class="sep clearfix"></div>
        </div>
        <div class="wprt-spacer clearfix" data-desktop="60" data-mobi="30" data-smobi="30"></div>
        <div class="wprt-partner style-2 has-shadow arrow-center offset30 offset-v0 has-arrows " data-auto="true"
          data-loop="true" data-column="5" data-column2="3" data-column3="2" data-gap="17">
          <div class="owl-carousel owl-theme">

            @if ($block_childs)
              @foreach ($block_childs as $item)
                @php
                  $title = $item->json_params->title->{$locale} ?? $item->title;
                  $brief = $item->json_params->brief->{$locale} ?? $item->brief;
                  $image = $item->image != '' ? $item->image : null;
                  $url_link = $item->url_link != '' ? $item->url_link : 'javascript:void(0)';
                  $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
                  $icon = $item->icon != '' ? $item->icon : '';
                  $style = $item->json_params->style ?? '';
                @endphp
                <div class="partner-item clearfix">

                  <a target="_blank" href="{{ $url_link }}">
                    <div class="thumb" style="padding: 0px;">
                      <img src="{{ $image }}" alt="{{ $title }}" style="height: 100px;opacity:1;">
                    </div>
                  </a>
                </div>
              @endforeach
            @endif

          </div>
        </div><!-- /.wprt-partner -->
        <div class="wprt-spacer clearfix" data-desktop="94" data-mobi="60" data-smobi="60"></div>
      </div>
    </div>
  </div>

@endif
