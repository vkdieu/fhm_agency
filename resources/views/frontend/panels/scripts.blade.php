<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
============================================= -->


<script src="{{ asset('themes/frontend/watches/js/jquery.js') }}"></script>
<script src="{{ asset('themes/frontend/watches/js/plugins.min.js') }}"></script>
<script src="{{ asset('themes/frontend/watches/js/functions.js') }}"></script>

<script>
  var revapi126, tpj;
  var $ = jQuery.noConflict();

  (function () {
    if (!/loaded|interactive|complete/.test(document.readyState))
      document.addEventListener("DOMContentLoaded", onLoad);
    else onLoad();

    function onLoad() {
      if (tpj === undefined) {
        tpj = jQuery;

        if ("off" == "on") tpj.noConflict();
      }

      if (tpj("#rev_slider_126_1").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_126_1");
      } else {
        revapi126 = tpj("#rev_slider_126_1")
          .show()
          .revolution({
            sliderType: "hero",
            jsFileLocation: "include/rs-plugin/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {},
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [868, 768, 960, 720],
            lazyType: "none",
            parallax: {
              type: "mouse",
              origo: "slidercenter",
              speed: 400,
              speedbg: 0,
              speedls: 0,
              levels: [
                1, 2, 3, 4, 5, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55,
              ],
            },
            shadow: 0,
            spinner: "spinner0",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "60px",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              disableFocusListener: false,
            },
          });
      } /* END OF revapi call */

      RsTypewriterAddOn(tpj, revapi126);
    } /* END OF ON LOAD FUNCTION */
  })(); /* END OF WRAPPING FUNCTION */
</script>

<script>
  $(function() {

    $("#form-booking").submit(function(e) {
      $(".form-process").show();
      e.preventDefault();
      var form = $(this);
      var url = form.attr('action');
      $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        success: function(response) {
          form[0].reset();
          $(".form-process").hide();
          alert(response.message);
          location.reload();
        },
        error: function(response) {
          $(".form-process").hide();
          // Get errors
          if (typeof response.responseJSON.errors !== 'undefined') {
            var errors = response.responseJSON.errors;
            // Foreach and show errors to html
            var elementErrors = '';
            $.each(errors, function(index, item) {
              if (item === 'CSRF token mismatch.') {
                item = "@lang('CSRF token mismatch.')";
              }
              elementErrors += '<p>' + item + '</p>';
            });
            $(".form-result").html(elementErrors);
          } else {
            var errors = response.responseJSON.message;
            if (errors === 'CSRF token mismatch.') {
              $(".form-result").html("@lang('CSRF token mismatch.')");
            } else if (errors === 'The given data was invalid.') {
              $(".form-result").html("@lang('The given data was invalid.')");
            } else {
              $(".form-result").html(errors);
            }
          }
        }
      });
    });

    // Form ajax default
    $(".form_ajax").submit(function(e) {
      e.preventDefault();
      var form = $(this);
      var url = form.attr('action');
      $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        success: function(response) {
          form[0].reset();
          alert(response.message);
          location.reload();
        },
        error: function(response) {
          // Get errors
          console.log(response);
          var errors = response.responseJSON.errors;
          // Foreach and show errors to html
          var elementErrors = '';
          $.each(errors, function(index, item) {
            if (item === 'CSRF token mismatch.') {
              item = "@lang('CSRF token mismatch.')";
            }
            elementErrors += '<p>' + item + '</p>';
          });
        }
      });
    });

    $(".form_sb_order").submit(function(e) {
      e.preventDefault();
      var form = $(this);
      var url = form.attr('action');
      $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        success: function(response) {
          form[0].reset();
          alert(response.message);
          window.location.href = '{{ route('frontend.home') }}';
        },
        error: function(response) {
          // Get errors
          console.log(response);
          var errors = response.responseJSON.errors;
          // Foreach and show errors to html
          var elementErrors = '';
          $.each(errors, function(index, item) {
            if (item === 'CSRF token mismatch.') {
              item = "@lang('CSRF token mismatch.')";
            }
            elementErrors += '<p>' + item + '</p>';
          });
        }
      });
    });

    // Add to cart
    $(document).on('click', '.add-to-cart', function() {
      let _root = $(this);
      let _html = _root.html();
      let _id = _root.attr("data-id");
      let _quantity = _root.attr("data-quantity") ?? $("#quantity").val();
      if (_id > 0) {
        _root.html("@lang('Processing...')");
        var url = "{{ route('frontend.order.add_to_cart') }}";
        $.ajax({
          type: "POST",
          url: url,
          data: {
            "_token": "{{ csrf_token() }}",
            "id": _id,
            "quantity": _quantity
          },
          success: function(data) {
            _root.html(_html);
            // alert(data);
            // console.log(data);
            window.location.reload();
          },
          error: function(data) {
            // Get errors
            var errors = data.responseJSON.message;
            alert(errors);
            location.reload();
          }
        });
      }
    });

    $(".update-cart").change(function(e) {
      e.preventDefault();
      var ele = $(this);
      $.ajax({
        url: '{{ route('frontend.order.cart.update') }}',
        method: "PATCH",
        data: {
          _token: '{{ csrf_token() }}',
          id: ele.parents("tr.item").attr("data-id"),
          quantity: ele.parents("td").find(".qty").val()
        },
        success: function(response) {
          window.location.reload();
          // console.log(response);
        }
      });
    });

    $(".remove-from-cart").click(function(e) {
      e.preventDefault();
      var ele = $(this);
      if (confirm("{{ __('Are you sure want to remove?') }}")) {
        $.ajax({
          url: '{{ route('frontend.order.cart.remove') }}',
          method: "DELETE",
          data: {
            _token: '{{ csrf_token() }}',
            id: ele.parents("tr.item").attr("data-id")
          },
          success: function(response) {
            window.location.reload();
          }
        });
      }
    });

  });

  const filterArray = (array, fields, value) => {
    fields = Array.isArray(fields) ? fields : [fields];
    return array.filter((item) => fields.some((field) => item[field] === value));
  };
</script>

@isset($web_information->source_code->footer)
  {!! $web_information->source_code->footer !!}
@endisset
