@if ($block)
  @php
    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
  @endphp
 <div id="gender" class="section bg-transparent py-0 my-0">
        <!--Start Single Swiper Slide-->
        <div class="row">
        @if ($block_childs)
          @foreach ($block_childs as $item)
            @php
              $title = $item->json_params->title->{$locale} ?? $item->title;
              $brief = $item->json_params->brief->{$locale} ?? $item->brief;
              $image = $item->image != '' ? $item->image : null;
              $image_background = $item->image_background != '' ? $item->image_background : null;
              $video = $item->json_params->video ?? null;
              $video_background = $item->json_params->video_background ?? null;
              $url_link = $item->url_link != '' ? $item->url_link : '';
              $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
              $icon = $item->icon != '' ? $item->icon : '';
              $style = isset($item->json_params->style) ? $item->json_params->style : '';
              
              $image_for_screen = null;
              if ($agent->isDesktop() && $image_background != null) {
                  $image_for_screen = $image_background;
              } else {
                  $image_for_screen = $image;
              }
              
            @endphp
           <div
           class="col-lg-6 col-md-12 gender-col"
           style="
             background-image: url('{{$image}}');
           "
         >
           <div
             class="heading-block border-bottom-0 mb-0 p-4 d-flex flex-column align-items-center"
             style="max-width: 550px"
           >
             <h1
               class="titular-title fw-normal center font-secondary fst-normal mb-3 text-light"
             >
               {{$title}}
             </h1>

             <a
               href="{{$url_link}}"
               class="button button-large button-light text-light bg-transparent border nott m-0 ls0"
               >{{$url_link_title}}</a
             >
           </div>
         </div>
          @endforeach
        @endif
      </div>
    </div>
@endif
