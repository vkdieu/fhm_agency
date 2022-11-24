@if ($block)
    @php
        $title = $block->json_params->title->{$locale} ?? $block->title;
        $brief = $block->json_params->brief->{$locale} ?? $block->brief;
        $background = $block->image_background != '' ? $block->image_background : url('assets/img/banner.jpg');
        $url_link = $block->url_link != '' ? $block->url_link : '';
        $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
        
        $params['status'] = App\Consts::POST_STATUS['active'];
        $params['is_featured'] = true;
        $params['is_type'] = App\Consts::POST_TYPE['post'];
        
        $rows = App\Http\Services\ContentService::getCmsPost($params)->get();
    @endphp
    <div class="section border-top-0 m-0">
        <div class="container text-center">
            <div class="heading-block center">
                <h2>{{ $title }}</h2>
                <span>{{ $brief }}</span>
            </div>
        </div>
        <div class="container clearfix">
            <div class="row">





                @if ($rows)
                    @foreach ($rows as $item)
                        @php
                            $title = $item->json_params->title->{$locale} ?? $item->title;
                            $brief = $item->json_params->brief->{$locale} ?? $item->brief;
                            $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
                            $date = date('d/m/Y', strtotime($item->created_at));
                            // Viet ham xu ly lay slug
                            $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $item->taxonomy_title, $item->taxonomy_id);
                            $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $title, $item->id, 'detail');
                        @endphp
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <img class="card-img-top w-100 h-auto" data-src="holder.js/300x200" alt="300x200"
                                    style="width: 300px; height: 200px" src="{{ $image }}"
                                    data-holder-rendered="true" />
                                <div class="card-body">
                                    <p class="card-text">
                                        {{ $brief }}
                                    </p>
                                    <a href="{{ $alias }}" class="btn btn-primary">Xem thêm</a>
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
@endif
