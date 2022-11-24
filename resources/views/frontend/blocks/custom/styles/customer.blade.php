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
 <div class="section border-top-0 m-0 section-clients">
  <div class="container clearfix">
    <div class="heading-block center">
          <h2>{{$title}}</h2>
          <span>{{$brief}}</span>
        </div>
        <ul class="testimonials-grid grid-1 grid-md-2 grid-lg-3">
            
      @if ($block_childs)
        @foreach ($block_childs as $item)
          @php
            $title_child = $item->json_params->title->{$locale} ?? $item->title;
            $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
            $content_child = $item->json_params->content->{$locale} ?? $item->content;
            $image_child = $item->image != '' ? $item->image : null;
            $url_link = $item->url_link != '' ? $item->url_link : 'javascript:void(0)';
            $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
            $icon = $item->icon != '' ? $item->icon : '';
            $style = $item->json_params->style ?? '';
          @endphp
        <li class="grid-item">
          <div class="testimonial">
            <div class="testi-image">
              <a href="#"
                ><img
                  src="{{$image_child}}"
                  alt="Customer Testimonails"
              /></a>
            </div>
            <div class="testi-content">
              <p>
                {{$brief_child}}
              </p>
              <div class="testi-meta">
                {{$title_child}}
                
              </div>
            </div>
          </div>
        </li>
        @endforeach
      @endif
    </ul>
  </div>
</div>

@endif
