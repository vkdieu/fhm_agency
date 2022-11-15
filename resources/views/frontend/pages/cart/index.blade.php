@extends('frontend.layouts.default')

@php
$page_title = $taxonomy->title ?? ($page->title ?? ($page->name ?? ''));
$image_background = $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');
@endphp
@push('style')
@endpush
@section('content')
  {{-- Print all content by [module - route - page] without blocks content at here --}}

  <section id="page-title">

    <div class="container clearfix">
      <h1>{{ $page_title }}</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">@lang('Home')</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $page->name ?? '' }}</li>
      </ol>
    </div>

  </section>
  <section id="content">
    <div class="content-wrap">
      <div class="container">
        @if (session('cart'))
          <table class="table cart mb-5">
            <thead>
              <tr>
                <th class="cart-product-remove">&nbsp;</th>
                <th class="cart-product-thumbnail">&nbsp;</th>
                <th class="cart-product-name">@lang('Product')</th>
                <th class="cart-product-price">@lang('Price')</th>
                <th class="cart-product-quantity">@lang('Quantity')</th>
                <th class="cart-product-subtotal">@lang('Total')</th>
              </tr>
            </thead>
            <tbody>
              @php $total = $quantity = 0 @endphp
              @foreach (session('cart') as $id => $details)
                @php
                  $total += $details['price'] * $details['quantity'];
                  $quantity += $details['quantity'];
                  $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $details['title'], $id, 'detail');
                @endphp
                <tr class="cart_item item" data-id="{{ $id }}">
                  <td class="cart-product-remove">
                    <a href="javascript:void(0)" class="remove remove-from-cart" title="@lang('Remove this item')"><i
                        class="icon-trash2"></i></a>
                  </td>

                  <td class="cart-product-thumbnail">
                    <a href="{{ $alias }}"><img width="64" height="64"
                        src="{{ $details['image_thumb'] ?? $details['image'] }}" alt="{{ $details['title'] }}"></a>
                  </td>

                  <td class="cart-product-name">
                    <a href="{{ $alias }}">{{ $details['title'] }}</a>
                  </td>

                  <td class="cart-product-price">
                    <span class="amount">
                      {{ isset($details['price']) && $details['price'] > 0 ? number_format($details['price'], 0, ',', '.') : __('Contact') }}
                    </span>
                  </td>

                  <td class="cart-product-quantity">
                    <div class="quantity">
                      <input type="button" value="-" class="minus">
                      <input type="text" name="quantity" value="{{ $details['quantity'] }}" class="qty update-cart" />
                      <input type="button" value="+" class="plus">
                    </div>
                  </td>

                  <td class="cart-product-subtotal">
                    <span class="amount">
                      {{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>

          </table>

          <div class="row col-mb-30">
            <div class="col-lg-6">
              <h3 class="text-uppercase">@lang('Submit Order Cart')</h3>
              <form class="row" method="POST" action="{{ route('frontend.order.store.product') }}">
                @csrf
                <div class="col-md-12 form-group">
                  <input type="text" class="sm-form-control" name="name" placeholder="@lang('Fullname') *" />
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" class="sm-form-control" name="phone" placeholder="@lang('Phone') *" />
                </div>

                <div class="col-md-6 form-group">
                  <input type="text" class="sm-form-control" name="email" placeholder="Email" />
                </div>
                <div class="col-12 form-group">
                  <textarea name="address" tabindex="11" class="sm-form-control" placeholder="@lang('Address') *" required></textarea>
                </div>
                <div class="col-12 form-group">
                  <textarea name="customer_note" tabindex="11" cols="40" rows="5" class="sm-form-control" placeholder="@lang('Content note')"></textarea>
                </div>
                <div class="col-12 form-group">
                  <button class="button button-3d m-0 button-primary">@lang('Submit Order')</button>
                </div>
              </form>
            </div>

            <div class="col-lg-6">
              <h3 class="text-uppercase">@lang('Order detail')</h3>

              <div class="table-responsive">
                <table class="table cart cart-totals">
                  <tbody>
                    <tr class="cart_item">
                      <td class="cart-product-name">
                        <strong>@lang('Total quantity')</strong>
                      </td>

                      <td class="cart-product-name">
                        <span class="amount">{{ $quantity }}</span>
                      </td>
                    </tr>
                    <tr class="cart_item">
                      <td class="cart-product-name">
                        <strong>@lang('Total')</strong>
                      </td>

                      <td class="cart-product-name">
                        <span class="amount color lead"><strong>{{ number_format($total, 0, ',', '.') }}</strong></span>
                      </td>
                    </tr>
                  </tbody>

                </table>
              </div>
            </div>
          </div>
        @else
          <div class="row">
            <div class="col-lg-12">
              <div class="style-msg alertmsg">
                <div class="sb-msg">
                  @lang('Cart is empty!')
                </div>
              </div>
            </div>
          </div>
        @endif

      </div>
    </div>
  </section>
  {{-- End content --}}
@endsection
