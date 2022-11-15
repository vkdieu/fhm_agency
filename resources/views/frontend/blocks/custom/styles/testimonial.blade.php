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

  <section class="testimonial-section" style="background-image: url('{{ $image_background }}')">
    <div class="auto-container">
      <!--Sec Title / Right Align -->
      <div class="sec-title">
        <h2>DELUX</h2>
        <h3>{{ $title }}</h3>
      </div>
      <!--Single Item Carousel-->
      <div class="single-item-carousel owl-carousel owl-theme">
        
        @if ($block_childs)
          @foreach ($block_childs as $item)
            @php
              $title_child = $item->json_params->title->{$locale} ?? $item->title;
              $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
              $content_child = $item->json_params->content->{$locale} ?? $item->content;
              $image_child = $item->image != '' ? $item->image : null;
              $url_link = $item->url_link != '' ? $item->url_link : '';
              $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
              $icon = $item->icon != '' ? $item->icon : '';
              $style = $item->json_params->style ?? '';
            @endphp
            <div class="testimonial-block">
              <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-md-5 col-sm-12 col-xs-12">
                  <div class="image">
                    <img src="{{$image_child}}" alt="{{ $title_child }}" />
                  </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-7 col-sm-12 col-xs-12">
                  <div class="inner">
                    <h2>{{ $title_child }}</h2>
                    <div class="text">
                      {{ $content_child }}
                    </div>
                    <div class="author"><span>{{ $brief_child }}</span></div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </section>
  
@endif
