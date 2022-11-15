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
  <div class="container" id="form_contact">
    <div class="divider divider-sm divider-center">
      <i class="icon-circle"></i>
    </div>

    <div id="section-contact" class="heading-block text-center page-section">
      <h2>{{ $title }}</h2>
    </div>

    <div class="row align-items-stretch col-mb-50 mb-0">
      

      <!-- Contact Form
          ============================================= -->
      <div class="col-md-7 col-lg-6">
        <div class="fancy-title title-border">
          <h3>{{ $brief }}</h3>
        </div>

        <div>
          <div class="form-result"></div>

          <form class="mb-0" action="{{ route('frontend.contact.store') }}" method="post" id="form-booking">
            @csrf
            <div class="form-process">
              <div class="css3-spinner">
                <div class="css3-spinner-scaler"></div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="name">@lang('Fullname') <small class="text-danger">*</small></label>
                <input type="text" id="name" name="name" value="" class="sm-form-control required" required />
              </div>

              <div class="col-md-6 form-group">
                <label for="email">Email </label>
                <input type="email" id="email" name="email" value=""
                  class="required email sm-form-control" />
              </div>

              <div class="col-md-6 form-group">
                <label for="phone">@lang('Phone') <small class="text-danger">*</small></label>
                <input type="text" id="phone" name="phone" value="" class="sm-form-control" required />
              </div>

              <div class="w-100"></div>

              <div class="col-12 form-group">
                <label for="content">@lang('Content') <small class="text-danger">*</small></label>
                <textarea class="required sm-form-control" id="content" name="content" rows="6" cols="30" required></textarea>
              </div>

              <div class="col-12 form-group">
                <button class="btn btn-secondary service-btn" type="submit" id="submit" name="submit"
                  value="submit">
                  @lang('Gửi đăng ký')
                </button>
              </div>
            </div>

            <input type="hidden" name="is_type" value="call_request">
          </form>
        </div>
      </div>
      <!-- Contact Form End -->

      <div class="col-md-5 col-lg-6 min-vh-40">
        <img style="border-radius: 10px" src="{{ $image }}" />
      </div>
      
    </div>
  </div>
  
@endif
