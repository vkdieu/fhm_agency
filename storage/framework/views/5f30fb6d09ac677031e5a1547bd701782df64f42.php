<header id="header" class="header-size-sm" data-sticky-shrink="false">
  <div class="container">
    <div class="header-row py-2">
      <!-- Logo
      ============================================= -->
      <div id="logo" class="col-md-3 col-12">
        <a href="<?php echo e(route('frontend.home')); ?>" class="standard-logo"><img
            src="<?php echo e($web_information->image->logo_header ?? ''); ?>" alt="Logo" width="auto" height="auto" /></a>
        <a href="<?php echo e(route('frontend.home')); ?>" class="retina-logo"><img
            src="<?php echo e($web_information->image->logo_header ?? ''); ?>" alt="Logo" /></a>
      </div>
      <!-- #logo end -->

      <form action="<?php echo e(route('frontend.search.index')); ?>" method="get"
        class="header-search-bar-container col-md-6 mb-0 d-none d-md-block">

        <input type="text" class="header-search-input" placeholder="Tìm sản phẩm" name="keyword" required
          value="<?php echo e($params['keyword'] ?? ''); ?>" />
        <a class="header-search-btn" style="margin-top: 12px">
          <i class="icon-line-search header-search-btn-icon"></i>
        </a>
      </form>

      <div class="header-misc d-none d-md-flex col">
        <ul class="header-extras">
          <li>
            <i class="i-plain icon-call m-0"></i>
            <div class="he-text">
              <?php echo app('translator')->get('Hotline'); ?>
              <span><?php echo e($web_information->information->hotline ?? ''); ?></span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div id="header-wrap">
    <div class="container">
      <div class="header-row justify-content-between flex-row-reverse flex-lg-row justify-content-lg-center">
        <div class="header-misc">

          <div id="top-cart" class="header-misc-icon">
            <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span
                class="top-cart-number"><?php echo e(count((array) session('cart') ?? 0)); ?></span></a>
            <?php if(session('cart')): ?>
              <div class="top-cart-content">
                <div class="top-cart-items">
                  <?php $total = 0 ?>
                  <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                      $total += $details['price'] * $details['quantity'];
                      $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $details['title'], $id, 'detail');
                    ?>
                    <div class="top-cart-item">
                      <div class="top-cart-item-image">
                        <a href="<?php echo e($alias); ?>"><img src="<?php echo e($details['image_thumb'] ?? $details['image']); ?>"
                            alt="<?php echo e($details['title']); ?>"></a>
                      </div>
                      <div class="top-cart-item-desc">
                        <div class="top-cart-item-desc-title">
                          <a href="<?php echo e($alias); ?>"><?php echo e($details['title']); ?></a>
                          <span
                            class="top-cart-item-price d-block"><?php echo e(isset($details['price']) && $details['price'] > 0 ? number_format($details['price']) . ' ₫' : __('Contact')); ?></span>
                        </div>
                        <div class="top-cart-item-quantity">x <?php echo e($details['quantity']); ?></div>
                      </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="top-cart-action">
                  <a href="<?php echo e(route('frontend.order.cart')); ?>"
                    class="button button-3d button-small m-0"><?php echo app('translator')->get('View cart'); ?></a>
                </div>
              </div>
            <?php endif; ?>
          </div>

        </div>

        <div id="primary-menu-trigger">
          <svg class="svg-trigger" viewBox="0 0 100 100">
            <path
              d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
            </path>
            <path d="m 30,50 h 40"></path>
            <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
            </path>
          </svg>
        </div>

        <!-- Primary Navigation
        ============================================= -->
        <nav class="primary-menu with-arrows">
          <ul class="menu-container">
            <?php if(isset($menu)): ?>
              <?php
                $main_menu = $menu->first(function ($item, $key) {
                    return $item->menu_type == 'header' && ($item->parent_id == null || $item->parent_id == 0);
                });
                if ($main_menu) {
                    $content = '';
                    foreach ($menu as $item) {
                        $url = $title = '';
                        if ($item->parent_id == $main_menu->id) {
                            $title = isset($item->json_params->title->{$locale}) && $item->json_params->title->{$locale} != '' ? $item->json_params->title->{$locale} : $item->name;
                            $url = $item->url_link;
                            $active = $url == url()->full() ? 'current' : '';
                
                            if ($item->sub > 0) {
                                $content .= '<li class="menu-item ' . $active . '"><a class="menu-link" href="' . $url . '" ><div>' . $title . '</div></a>';
                                $content .= '<ul class="sub-menu-container">';
                                foreach ($menu as $item_sub) {
                                    $url = $title = '';
                                    if ($item_sub->parent_id == $item->id) {
                                        $title = isset($item_sub->json_params->title->{$locale}) && $item_sub->json_params->title->{$locale} != '' ? $item_sub->json_params->title->{$locale} : $item_sub->name;
                                        $url = $item_sub->url_link;
                
                                        $content .= '<li class="menu-item"><a class="menu-link" href="' . $url . '"><div>' . $title . '</div></a>';
                
                                        $content .= '</li>';
                                    }
                                }
                                $content .= '</ul>';
                            } else {
                                $content .= '<li class="menu-item ' . $active . '"><a class="menu-link" href="' . $url . '"><div>' . $title . '</div></a>';
                            }
                            $content .= '</li>';
                        }
                    }
                    echo $content;
                }
              ?>
            <?php endif; ?>
          </ul>
        </nav>
        <!-- #primary-menu end -->

      </div>
    </div>
  </div>
  <div class="header-wrap-clone"></div>
</header>
<?php /**PATH D:\project\phanlong\resources\views/frontend/blocks/header/styles/default.blade.php ENDPATH**/ ?>