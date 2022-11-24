<header id="header" class="full-header" data-mobile-sticky="true">
    <div id="header-wrap">
      <div class="container">
        <div class="header-row">
          <!-- Logo
        ============================================= -->
          
          <div id="logo">
            <a
              href="index-2.html"
              class="standard-logo"
              data-dark-logo="images/logo-dark.png"
              ><img src="{{ $web_information->image->logo_header_dark ?? '' }}" alt="Canvas Logo"
            /></a>
            <a
              href="index-2.html"
              class="retina-logo"
              data-dark-logo="images/logo-dark@2x.png"
              ><img src="{{ $web_information->image->logo_header_dark ?? '' }}" alt="Canvas Logo"
            /></a>
          </div>
          <!-- #logo end -->
  
          <div class="header-misc">
            <!-- Top Search
          ============================================= -->
            <div id="top-search" class="header-misc-icon">
              <a href="#" id="top-search-trigger"
                ><i class="icon-line-search"></i
                ><i class="icon-line-cross"></i
              ></a>
            </div>
            <!-- #top-search end -->
  
            <!-- Top Cart
          ============================================= -->
        
            <!-- #top-cart end -->
          </div>
  
          <div id="primary-menu-trigger">
            <svg class="svg-trigger" viewBox="0 0 100 100">
              <path
                d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"
              ></path>
              <path d="m 30,50 h 40"></path>
              <path
                d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"
              ></path>
            </svg>
          </div>
           
                   
              <nav class="primary-menu">
                <ul class="menu-container">
                  @isset($menu)
                        @php
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
                                                ' <li class="menu-item' .
                                                $active .
                                                '"> <a   class="menu-link"href="' .
                                                $url .
                                                '" ><div>' .
                                                $title .
                                                '<i class="icon-angle-down"></i></div></a>';
                                            $content .= ' <ul class="sub-menu-container">';
                                            foreach ($menu as $item_sub) {
                                                $url = $title = '';
                                                if ($item_sub->parent_id == $item->id) {
                                                    $title = isset($item_sub->json_params->title->{$locale}) && $item_sub->json_params->title->{$locale} != '' ? $item_sub->json_params->title->{$locale} : $item_sub->name;
                                                    $url = $item_sub->url_link;
                            
                                                    $content .= '  <li class="menu-item"><a class="menu-link" href="' . $url . '"><div>' . $title . '</div></a>';
                            
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
                        @endphp
                    @endisset
                </ul>
                </nav>
         
                <form
                  class="top-search-form"
                  action="http://themes.semicolonweb.com/html/canvas/search.html"
                  method="get"
                >
                  <input
                    type="text"
                    name="q"
                    class="form-control"
                    value=""
                    placeholder="Type &amp; Hit Enter.."
                    autocomplete="off"
                  />
                </form>
              </div>
            </div>
          </div>
          <div class="header-wrap-clone"></div>
        </header>
  <!-- #header end -->