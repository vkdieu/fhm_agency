<footer id="footer" class="dark" data-scrollto-settings='{"offset":140,"speed":1250,"easing":"easeOutQuad"}'>
    <!-- Copyrights
============================================= -->
    <div id="copyrights">
        <div class="container">
            <div class="footer-widgets-wrap">
                <div class="row col-mb-50">
                  <div class="col-lg-4">
                    <div class="widget clearfix">
                      <div class="footer-logo-wrapper">
                        <img src="{{ $web_information->image->logo_footer ?? '' }}" width="auto" height="auto" alt="Image"
                          style="width: 100%" class="footer-logo">
                      </div>
                    </div>
                  </div>
          
                  @isset($menu)
                    @php
                      $footer_menu = $menu->filter(function ($item, $key) {
                          return $item->menu_type == 'footer' && ($item->parent_id == null || $item->parent_id == 0);
                      });
                      
                      $content = '';
                      foreach ($footer_menu as $main_menu) {
                          $url = $title = '';
                          $title = isset($main_menu->json_params->title->{$locale}) && $main_menu->json_params->title->{$locale} != '' ? $main_menu->json_params->title->{$locale} : $main_menu->name;
                          $content .= '<div class="col-sm-6 col-lg-4"><div class="widget widget_links">';
                          $content .= '<h4>' . $title . '</h4>';
                          $content .= '<ul>';
                          foreach ($menu as $item) {
                              if ($item->parent_id == $main_menu->id) {
                                  $title = isset($item->json_params->title->{$locale}) && $item->json_params->title->{$locale} != '' ? $item->json_params->title->{$locale} : $item->name;
                                  $url = $item->url_link;
                      
                                  $active = $url == url()->current() ? 'active' : '';
                      
                                  $content .= '<li><a href="' . $url . '">' . $title . '</a>';
                                  $content .= '</li>';
                              }
                          }
                          $content .= '</ul>';
                          $content .= '</div></div>';
                      }
                      echo $content;
                    @endphp
                  @endisset
                  @isset($web_information->source_code->facebook_fanpage)
                    <div class="col-sm-6 col-lg-4">
                      <div class="widget clearfix">
                        <h4>Facebook fanpage</h4>
                        {!! $web_information->source_code->facebook_fanpage !!}
                      </div>
                    </div>
                  @endisset
                </div>
              </div>
        </div>
    </div>
   
    <!-- #copyrights end -->
</footer>
