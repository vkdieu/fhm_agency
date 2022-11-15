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
  <div class="section border-top-0 m-0">
    <div class="container text-center">
      <div class="heading-block center">
        <h2>{{$title}}</h2>
        <span>{{$brief}}</span>
      </div>
    </div>
    <div class="container clearfix">
      <div class="row">
      
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
                      
                     
                      <div class="col-md-6 col-lg-4">
                        <div class="card">
                          <img
                            class="card-img-top w-100 h-auto"
                            data-src="holder.js/300x200"
                            alt="300x200"
                            src="{{$image_child}}"
                            data-holder-rendered="true"
                            style="width: 300px; height: 200px"
                          />
                          <div class="card-body">
                            <p class="card-text">
                              {{$brief_child}}
                            </p>
                            <a href="{{$url_link}}" class="btn btn-primary">{{$url_link_title}}</a>
                          </div>
                        </div>
                      </div>
                          
                            @endforeach
                        @endif
                      </div>

                      <div class="clear"></div>
                    </div>
                  </div>
                </div>
              </section>
@endif
