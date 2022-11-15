<footer id="footer" class="light border-0 bg-light">
  <div class="container">
    <!-- Footer Widgets
    ============================================= -->
    <div class="footer-widgets-wrap">
      <div class="row col-mb-50">
        <div class="col-lg-4">
          <div class="widget clearfix">
            <div class="footer-logo-wrapper">
              <img src="<?php echo e($web_information->image->logo_footer ?? ''); ?>" width="auto" height="auto" alt="Image"
                style="width: 100%" class="footer-logo">
            </div>
          </div>
        </div>

        <?php if(isset($menu)): ?>
          <?php
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
          ?>
        <?php endif; ?>
        <?php if(isset($web_information->source_code->facebook_fanpage)): ?>
          <div class="col-sm-6 col-lg-4">
            <div class="widget clearfix">
              <h4>Facebook fanpage</h4>
              <?php echo $web_information->source_code->facebook_fanpage; ?>

            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <!-- .footer-widgets-wrap end -->
  </div>

  <!-- #copyrights end -->
</footer><?php /**PATH D:\project\mid\resources\views/frontend/blocks/footer/styles/default.blade.php ENDPATH**/ ?>