<header id="header" class="">
    <div id="header-wrap" class="">
        <div class="container">
            <div class="header-row justify-content-lg-between">
                <div id="logo" class="order-lg-2 col-auto px-0 me-lg-0">
                    <a href="<?php echo e(route('frontend.home')); ?>" class="standard-logo" data-dark-logo="images/logo-dark.png"><img
                            src="<?php echo e($web_information->image->logo_header ?? ''); ?>" alt="FHM Logo" style="height: 100px" /></a>
                    <a href="<?php echo e(route('frontend.home')); ?>" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img
                            src="<?php echo e($web_information->image->logo_header ?? ''); ?>" alt="FHM Logo"
                            style="height: 100px" /></a>
                </div>
                <div class="header-misc d-flex d-lg-none">
                    <div id="top-cart" class="header-misc-icon">
                        <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span
                                class="top-cart-number">5</span></a>
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Shopping Cart</h4>
                            </div>
                            <div class="top-cart-items">
                                <div class="top-cart-item">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img src="images/shop/small/1.jpg"
                                                alt="Blue Round-Neck Tshirt" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <div class="top-cart-item-desc-title">
                                            <a href="#">Blue Round-Neck Tshirt with a Button</a>
                                            <span class="top-cart-item-price d-block">$19.99</span>
                                        </div>
                                        <div class="top-cart-item-quantity">x 2</div>
                                    </div>
                                </div>
                                <div class="top-cart-item">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img src="images/shop/small/6.jpg"
                                                alt="Light Blue Denim Dress" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <div class="top-cart-item-desc-title">
                                            <a href="#">Light Blue Denim Dress</a>
                                            <span class="top-cart-item-price d-block">$24.99</span>
                                        </div>
                                        <div class="top-cart-item-quantity">x 3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-cart-action">
                                <span class="top-checkout-price">$114.95</span>
                                <a href="#" class="button button-3d button-small m-0">View Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100">
                        <path
                            d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                        </path>
                        <path d="m 30,50 h 40"></path>
                        <path
                            d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                        </path>
                    </svg>
                </div>

                <nav class="primary-menu order-lg-1 col-lg-5 px-0" style="position: inherit">
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
                                                $content .=
                                                    '<li class="menu-item sub-menu ' .
                                                    $active .
                                                    '"> <a   class="menu-link"href="' .
                                                    $url .
                                                    '" ><div>' .
                                                    $title .
                                                    '<i class="icon-angle-down"></i></div></a>';
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
                <nav class="primary-menu order-lg-3 col-lg-5 px-0" style="position: inherit">
                  <div class="menu-container justify-content-lg-end">        
                                    <?php if(isset($menu)): ?>
                            <?php
                                $main_menu = $menu->first(function ($item, $key) {
                                    return $item->menu_type == 'header_right' && ($item->parent_id == null || $item->parent_id == 0);
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
                      </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="header-wrap-clone" style="height: 100px"></div>
</header>
<?php /**PATH C:\xampp\htdocs\FHM_agency\resources\views/frontend/blocks/header/styles/default.blade.php ENDPATH**/ ?>