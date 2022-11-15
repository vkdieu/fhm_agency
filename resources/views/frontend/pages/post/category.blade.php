@extends('frontend.layouts.default')

@php
$page_title = $taxonomy->title ?? ($page->title ?? $page->name);
$image_background = $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');

$title = $taxonomy->json_params->title->{$locale} ?? ($taxonomy->title ?? null);
$image = $taxonomy->json_params->image ?? null;
$seo_title = $taxonomy->json_params->seo_title ?? $title;
$seo_keyword = $taxonomy->json_params->seo_keyword ?? null;
$seo_description = $taxonomy->json_params->seo_description ?? null;
$seo_image = $image ?? null;
@endphp
@push('style')
  <style>

  </style>
@endpush
@section('content')
  {{-- Print all content by [module - route - page] without blocks content at here --}}
 
  <section id="page-title">
    <div class="container clearfix">
      <h1><h1>{{ $page_title }}</h1></h1>
    </div>
  </section>
  <section id="content">

    <div class="content-wrap">
      <div class="container ">

        <div class="row clearfix">
          @foreach ($posts as $item)
            @php
              $title = $item->json_params->title->{$locale} ?? $item->title;
              $brief = $item->json_params->brief->{$locale} ?? $item->brief;
              $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
              // $date = date('H:i d/m/Y', strtotime($item->created_at));
              $date = date('d', strtotime($item->created_at));
              $month = date('M', strtotime($item->created_at));
              $year = date('Y', strtotime($item->created_at));
              // Viet ham xu ly lay slug
              $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $item->taxonomy_title, $item->taxonomy_id);
              $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $title, $item->id, 'detail');
            @endphp
            <div class="col-md-4">
              <article class="entry">
                <div class="entry-image mb-3">
                  <a href="{{ $alias }}"><img src="{{ $image }}" alt="{{ $title }}"></a>
                  <div class="bg-overlay">
                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                      <a href="{{ $alias }}" class="overlay-trigger-icon bg-light text-dark"
                        data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                    </div>
                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
                  </div>
                </div>
                <div class="entry-title">
                  <h3><a href="{{ $alias }}">{{ $title }}</a></h3>
                </div>
                <div class="entry-meta">
                  <ul>
                    <li><i class="icon-line2-folder"></i><a href="{{ $alias_category }}">
                        {{ $item->taxonomy_title }}</a>
                    </li>
                    <li><i class="icon-calendar-times1"></i> {{ $date }} {{ $month }}
                      {{ $year }}
                    </li>
                  </ul>
                </div>
                <div class="entry-content clearfix">
                  <p>{{ Str::limit($brief, 100) }}</p>
                </div>
              </article>
            </div>
          @endforeach
        </div>

        {{ $posts->withQueryString()->links('frontend.pagination.default') }}

      </div>
    </div>
  </section>
  {{-- End content --}}
@endsection
