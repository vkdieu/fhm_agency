@if ($block)
  @php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $image = $block->image != '' ? $block->image : null;
    $background = $block->image_background != '' ? $block->image_background : null;
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    
  @endphp
  <section class="contact bg-light" id="contact">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6 col-lg-12">
          {!! $content !!}
        </div>

        <div class="col-xl-6 col-lg-12">
          <div class="text-center pb-3">
            <h2>{{ $title }}</h2>
          </div>
          <form class="contact-form form_ajax" method="post" action="{{ route('frontend.contact.store') }}">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" required value=""
                autocomplete="off" onkeyup="this.setAttribute('value', this.value);" />
              <label for="name">@lang('Fullname') *</label>
              <span class="input-border"></span>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" value="" autocomplete="off"
                onkeyup="this.setAttribute('value', this.value);" />
              <label for="email">Email</label>
              <span class="input-border"></span>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="phone" name="phone" required value=""
                autocomplete="off" onkeyup="this.setAttribute('value', this.value);" />
              <label for="subject">@lang('Phone') *</label>
              <span class="input-border"></span>
            </div>
            <div class="form-group">
              <textarea class="form-control" id="content" name="content" required data-value="" autocomplete="off"
                onkeyup="this.setAttribute('data-value', this.value);"></textarea>
              <label for="message">@lang('Content') *</label>
              <span class="input-border"></span>
            </div>
            <!-- Button Send Message  -->
            <input type="hidden" name="is_type" value="call_request">
            <button class="contact-btn main-btn" type="submit" name="send">
              <span>@lang('Gửi đăng ký')</span>
            </button>
            <!-- Form Message  -->
            <div class="form-message text-center"><span></span></div>
          </form>
        </div>

      </div>
    </div>
  </section>
@endif
