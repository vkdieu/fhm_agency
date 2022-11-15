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
  <div class="row-facts-1 parallax" style="background: url('{{ $image_background }}');background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="wprt-spacer clearfix" data-desktop="90" data-mobi="60" data-smobi="60"></div>
        </div><!-- /.col-md-12 -->
      </div><!-- /.row -->

      <div class="row separator dark">

        @if ($block_childs)
          @foreach ($block_childs as $item)
            @php
              $title_sub = $item->json_params->title->{$locale} ?? $item->title;
              $brief_sub = $item->json_params->brief->{$locale} ?? $item->brief;
              $content_sub = $item->json_params->content->{$locale} ?? $item->content;
              $image_sub = $item->image != '' ? $item->image : null;
            @endphp
            <div class="col-md-3">
              <div class="wprt-counter style-2 clearfix icon-left text-center">
                <div class="inner">
                  @if ($image_sub)
                    <div class="icon-wrap">
                      <div class="icon">
                        <img src="{{ $image_sub }}" alt="{{ $title_sub }}">
                      </div>
                    </div>
                  @endif
                  <div class="text-wrap">
                    <div class="number-wrap font-heading"><span class="prefix"></span><span class="number "
                        data-speed="2000" data-to="{{ $title_sub }}"
                        data-inviewport="yes">{{ $title_sub }}</span><span class="suffix">{{ $brief_sub }}</span>
                    </div>
                    <h3 class="heading">{{ $content_sub }}</h3>
                  </div>
                </div>
              </div><!-- /.wprt-counter -->

              <div class="wprt-spacer clearfix" data-desktop="0" data-mobi="35" data-smobi="35"></div>
            </div><!-- /.col-md-3 -->
          @endforeach
        @endif
      </div><!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="wprt-spacer clearfix" data-desktop="90" data-mobi="60" data-smobi="60"></div>
        </div><!-- /.col-md-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div>

@endif
