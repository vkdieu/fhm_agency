<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $image_background = $block->image_background != '' ? $block->image_background : '';
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    $style = isset($block->json_params->style) && $block->json_params->style == 'slider-caption-right' ? 'd-none' : '';
    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
  ?>
<section id="slider" class="slider-element revslider-wrap">
  <div
    id="rev_slider_126_1_wrapper"
    class="rev_slider_wrapper fullscreen-container"
    data-alias="clean-landing-page"
    data-source="gallery"
    style="background: transparent; padding: 0px"
  >
    <!-- START REVOLUTION SLIDER 5.4.7.1 fullscreen mode -->
    <div
      id="rev_slider_126_1"
      class="rev_slider fullscreenbanner"
      style="display: none"
      data-version="5.4.7.1"
    >
      <ul>
        <!-- SLIDE  -->
        <li
          data-index="rs-283"
          data-transition="fade"
          data-slotamount="default"
          data-hideafterloop="0"
          data-hideslideonmobile="off"
          data-easein="default"
          data-easeout="default"
          data-masterspeed="300"
          data-rotate="0"
          data-saveperformance="off"
          data-title="Slide"
          data-param1=""
          data-param2=""
          data-param3=""
          data-param4=""
          data-param5=""
          data-param6=""
          data-param7=""
          data-param8=""
          data-param9=""
          data-param10=""
          data-description=""
        >
          <!-- MAIN IMAGE -->
          <img
            src="include/rs-plugin/demos/assets/images/transparent.png"
            data-bgcolor="#ffffff"
            style="background: #ffffff"
            alt="Image"
            data-bgposition="center center"
            data-bgfit="cover"
            data-bgrepeat="no-repeat"
            data-bgparallax="off"
            class="rev-slidebg"
            data-no-retina
          />
          <!-- LAYERS -->
          <div
            id="rrzt_283"
            class="rev_row_zone rev_row_zone_top"
            style="z-index: 43"
          >
            <!-- LAYER NR. 1 -->
            <div
              class="tp-caption"
              id="slide-283-layer-38"
              data-x="['left','left','left','left']"
              data-hoffset="['100','100','100','100']"
              data-y="['top','top','top','top']"
              data-voffset="['100','100','100','100']"
              data-width="none"
              data-height="none"
              data-whitespace="normal"
              data-type="row"
              data-columnbreak="3"
              data-basealign="slide"
              data-responsive_offset="on"
              data-responsive="off"
              data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-margintop="[0,0,0,0]"
              data-marginright="[0,0,0,0]"
              data-marginbottom="[0,0,0,0]"
              data-marginleft="[0,0,0,0]"
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[100,50,50,30]"
              data-paddingright="[100,50,50,30]"
              data-paddingbottom="[0,0,0,0]"
              data-paddingleft="[100,50,50,30]"
              style="
                z-index: 43;
                white-space: normal;
                font-size: 20px;
                line-height: 22px;
                font-weight: 400;
                color: #ffffff;
                letter-spacing: 0px;
              "
            >
              <!-- LAYER NR. 2 -->
              <div
                class="tp-caption"
                id="slide-283-layer-39"
                data-x="['left','left','left','left']"
                data-hoffset="['100','100','100','100']"
                data-y="['top','top','top','top']"
                data-voffset="['100','100','100','100']"
                data-fontsize="['20','20','20','20']"
                data-lineheight="['22','22','22','22']"
                data-fontweight="['400','400','400','400']"
                data-letterspacing="['0','0','0','0']"
                data-width="none"
                data-height="none"
                data-whitespace="normal"
                data-type="column"
                data-responsive_offset="on"
                data-responsive="off"
                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                data-columnwidth="50%"
                data-verticalalign="top"
                data-margintop="[0,0,0,0]"
                data-marginright="[0,0,0,0]"
                data-marginbottom="[0,0,0,0]"
                data-marginleft="[0,0,0,0]"
                data-textAlign="['inherit','inherit','inherit','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 44; width: 100%"
              >
                <!-- LAYER NR. 3 -->
                <!-- <div
                  class="tp-caption tp-resizeme tp-svg-layer"
                  id="slide-283-layer-30"
                  data-x="['left','left','left','left']"
                  data-hoffset="['0','0','0','0']"
                  data-y="['top','top','top','top']"
                  data-voffset="['0','0','0','0']"
                  data-width="30"
                  data-height="37"
                  data-whitespace="normal"
                  data-type="svg"
                  data-svg_src="include/rs-plugin/demos/assets/images/file-text-o.svg"
                  data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;"
                  data-responsive_offset="on"
                  data-frames='[{"delay":"+490","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                  data-margintop="[12,12,12,12]"
                  data-marginright="[0,0,0,0]"
                  data-marginbottom="[0,0,0,0]"
                  data-marginleft="[0,0,0,0]"
                  data-textAlign="['inherit','inherit','inherit','inherit']"
                  data-paddingtop="[0,0,0,0]"
                  data-paddingright="[0,0,0,0]"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[5,5,5,5]"
                  style="
                    z-index: 45;
                    min-width: 30px;
                    max-width: 30px;
                    max-width: 37px;
                    max-width: 37px;
                    color: #000000;
                    display: inline-block;
                  "
                ></div> -->

                <!-- LAYER NR. 4 -->
                <!-- <div
                  class="tp-caption tp-resizeme"
                  id="slide-283-layer-43"
                  data-x="['left','left','left','left']"
                  data-hoffset="['0','0','0','0']"
                  data-y="['top','top','top','top']"
                  data-voffset="['0','0','0','0']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="normal"
                  data-type="text"
                  data-typewriter='{"lines":"Revolution Slider,RTL Support,LESS Support,SASS Support","enabled":"on","speed":"30","delays":"1%7C100","looped":"on","cursorType":"one","blinking":"on","word_delay":"off","sequenced":"on","hide_cursor":"off","start_delay":"1000","newline_delay":"1000","deletion_speed":"20","deletion_delay":"1000","blinking_speed":"500","linebreak_delay":"60","cursor_type":"two","background":"off"}'
                  data-responsive_offset="on"
                  data-frames='[{"delay":"+590","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                  data-margintop="[0,0,0,0]"
                  data-marginright="[0,0,0,0]"
                  data-marginbottom="[0,0,0,0]"
                  data-marginleft="[0,0,0,0]"
                  data-textAlign="['inherit','inherit','inherit','inherit']"
                  data-paddingtop="[0,0,0,0]"
                  data-paddingright="[10,10,10,10]"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[10,10,10,10]"
                  style="
                    z-index: 46;
                    white-space: normal;
                    font-size: 16px;
                    line-height: 50px;
                    font-weight: 700;
                    color: #000000;
                    letter-spacing: 0px;
                    display: inline-block;
                    font-family: Poppins;
                    text-transform: uppercase;
                  "
                >
                  Bootstrap 4|
                </div> -->
              </div>

              <!-- LAYER NR. 5 -->
              <div
                class="tp-caption"
                id="slide-283-layer-40"
                data-x="['left','left','left','left']"
                data-hoffset="['100','100','100','100']"
                data-y="['top','top','top','top']"
                data-voffset="['100','100','100','100']"
                data-width="none"
                data-height="none"
                data-whitespace="normal"
                data-type="column"
                data-responsive_offset="on"
                data-responsive="off"
                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                data-columnwidth="50%"
                data-verticalalign="top"
                data-margintop="[0,0,0,0]"
                data-marginright="[0,0,0,0]"
                data-marginbottom="[0,0,0,0]"
                data-marginleft="[0,0,0,0]"
                data-textAlign="['right','right','right','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 47; width: 100%"
              >
                <!-- LAYER NR. 6 -->
                <a
                  class="tp-caption rev-btn tp-resizeme tp-pointer"
                  href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123?ref=SemiColonWeb&amp;license=regular&amp;open_purchase_for_item_id=9228123&amp;purchasable=source"
                  target="_self"
                  id="slide-283-layer-41"
                  data-x="['left','left','left','left']"
                  data-hoffset="['0','0','0','0']"
                  data-y="['top','top','top','top']"
                  data-voffset="['0','0','0','0']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="normal"
                  data-type="button"
                  data-actions=""
                  data-responsive_offset="on"
                  data-frames='[{"delay":"+1240","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);bc:rgb(0,0,0);"}]'
                  data-margintop="[0,0,0,0]"
                  data-marginright="[0,0,0,0]"
                  data-marginbottom="[0,0,0,0]"
                  data-marginleft="[0,0,0,0]"
                  data-textAlign="['inherit','inherit','inherit','inherit']"
                  data-paddingtop="[0,0,0,0]"
                  data-paddingright="[120,120,120,120]"
                  data-paddingbottom="[0,0,0,0]"
                  data-paddingleft="[30,30,30,30]"
                  style="
                    z-index: 48;
                    white-space: normal;
                    font-size: 16px;
                    line-height: 46px;
                    font-weight: 700;
                    color: rgba(255, 255, 255, 1);
                    letter-spacing: px;
                    display: inline-block;
                    font-family: Poppins;
                    background-color: rgb(0, 0, 0);
                    border-color: rgba(0, 0, 0, 1);
                    border-style: solid;
                    border-width: 2px 2px 2px 2px;
                    outline: none;
                    box-shadow: none;
                    box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    -webkit-box-sizing: border-box;
                    cursor: pointer;
                    text-decoration: none;
                  "
                  ><?php echo e($title); ?> <i class="icon-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div
            id="rrzb_283"
            class="rev_row_zone rev_row_zone_bottom"
            style="z-index: 34"
          >
            <!-- LAYER NR. 7 -->
            <div
              class="tp-caption"
              id="slide-283-layer-33"
              data-x="['left','left','left','left']"
              data-hoffset="['0','0','0','0']"
              data-y="['bottom','bottom','bottom','bottom']"
              data-voffset="['834','834','834','834']"
              data-width="none"
              data-height="none"
              data-whitespace="normal"
              data-type="row"
              data-columnbreak="3"
              data-basealign="slide"
              data-responsive_offset="on"
              data-responsive="off"
              data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-margintop="[0,0,0,0]"
              data-marginright="[0,0,0,0]"
              data-marginbottom="[0,0,0,0]"
              data-marginleft="[0,0,0,0]"
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[100,50,50,30]"
              data-paddingbottom="[50,30,30,30]"
              data-paddingleft="[100,50,50,30]"
              style="
                z-index: 27;
                white-space: normal;
                font-size: 20px;
                line-height: 22px;
                font-weight: 400;
                color: #ffffff;
                letter-spacing: 0px;
              "
            >
              <!-- LAYER NR. 8 -->
              <div
                class="tp-caption"
                id="slide-283-layer-34"
                data-x="['left','left','left','left']"
                data-hoffset="['100','100','100','100']"
                data-y="['top','top','top','top']"
                data-voffset="['100','100','100','100']"
                data-width="none"
                data-height="none"
                data-whitespace="normal"
                data-type="column"
                data-responsive_offset="on"
                data-responsive="off"
                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                data-columnwidth="33.33%"
                data-verticalalign="top"
                data-margintop="[0,0,0,0]"
                data-marginright="[0,0,0,0]"
                data-marginbottom="[0,0,0,0]"
                data-marginleft="[0,0,0,0]"
                data-textAlign="['inherit','inherit','inherit','inherit']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[50,50,50,50]"
                data-paddingbottom="[0,0,0,10]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 28; width: 100%"
              >
                <!-- LAYER NR. 9 -->
                <div
                  class="tp-caption tp-resizeme"
                  id="slide-283-layer-27"
                  data-x="['left','left','left','left']"
                  data-hoffset="['0','0','0','0']"
                  data-y="['top','top','top','top']"
                  data-voffset="['0','0','0','0']"
                  data-fontsize="['40','40','25','25']"
                  data-lineheight="['40','40','25','25']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="normal"
                  data-type="text"
                  data-responsive_offset="on"
                  data-frames='[{"delay":"+490","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                  data-margintop="[0,0,0,0]"
                  data-marginright="[0,0,0,0]"
                  data-marginbottom="[0,0,0,0]"
                  data-marginleft="[0,0,0,0]"
                  data-textAlign="['inherit','inherit','inherit','inherit']"
                  data-paddingtop="[5,5,5,5]"
                  data-paddingright="[5,5,5,5]"
                  data-paddingbottom="[5,5,5,5]"
                  data-paddingleft="[5,5,5,5]"
                  style="
                    z-index: 29;
                    white-space: normal;
                    font-size: 40px;
                    line-height: 40px;
                    font-weight: 700;
                    color: #000000;
                    letter-spacing: 0px;
                    display: inline-block;
                    font-family: Poppins;
                  "
                >
 
                <?php echo nl2br($brief); ?>

              </div>
              </div>

              <!-- LAYER NR. 10 -->
              <div
                class="tp-caption"
                id="slide-283-layer-35"
                data-x="['left','left','left','left']"
                data-hoffset="['100','100','100','100']"
                data-y="['top','top','top','top']"
                data-voffset="['100','100','100','100']"
                data-fontsize="['20','20','20','20']"
                data-lineheight="['22','22','22','22']"
                data-fontweight="['400','400','400','400']"
                data-letterspacing="['0','0','0','0']"
                data-width="none"
                data-height="none"
                data-whitespace="normal"
                data-type="column"
                data-responsive_offset="on"
                data-responsive="off"
                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                data-columnwidth="33.33%"
                data-verticalalign="top"
                data-margintop="[0,0,0,0]"
                data-marginright="[0,0,0,0]"
                data-marginbottom="[0,0,0,0]"
                data-marginleft="[0,0,0,0]"
                data-textAlign="['inherit','inherit','inherit','inherit']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 30; width: 100%"
              >
                <!-- LAYER NR. 11 -->
                <div
                  class="tp-caption tp-resizeme"
                  id="slide-283-layer-31"
                  data-x="['left','left','left','left']"
                  data-hoffset="['0','0','0','0']"
                  data-y="['top','top','top','top']"
                  data-voffset="['0','0','0','0']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="normal"
                  data-type="text"
                  data-responsive_offset="on"
                  data-frames='[{"delay":"+990","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                  data-margintop="[0,0,0,0]"
                  data-marginright="[0,0,0,0]"
                  data-marginbottom="[0,0,0,0]"
                  data-marginleft="[0,0,0,0]"
                  data-textAlign="['inherit','inherit','inherit','inherit']"
                  data-paddingtop="[5,5,5,5]"
                  data-paddingright="[5,5,5,5]"
                  data-paddingbottom="[5,5,5,5]"
                  data-paddingleft="[5,5,5,5]"
                  style="
                    z-index: 31;
                    white-space: normal;
                    font-size: 16px;
                    line-height: 22px;
                    font-weight: 400;
                    color: #000000;
                    letter-spacing: 0px;
                    display: inline-block;
                    font-family: Poppins;
                  "
                >
                  <?php echo nl2br($content); ?>

                </div>
              </div>

              <!-- LAYER NR. 12 -->
              <div
                class="tp-caption"
                id="slide-283-layer-36"
                data-x="['left','left','left','left']"
                data-hoffset="['100','100','100','100']"
                data-y="['top','top','top','top']"
                data-voffset="['100','100','100','100']"
                data-width="none"
                data-height="none"
                data-whitespace="normal"
                data-type="column"
                data-responsive_offset="on"
                data-responsive="off"
                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                data-columnwidth="33.33%"
                data-verticalalign="top"
                data-margintop="[0,0,0,0]"
                data-marginright="[0,0,0,0]"
                data-marginbottom="[0,0,0,0]"
                data-marginleft="[0,0,0,0]"
                data-textAlign="['right','right','right','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 32; width: 100%"
              >
                <!-- LAYER NR. 13 -->
                <div
                  class="tp-caption tp-resizeme"
                  id="slide-283-layer-32"
                  data-x="['left','left','left','left']"
                  data-hoffset="['0','0','0','0']"
                  data-y="['top','top','top','top']"
                  data-voffset="['0','0','0','0']"
                  data-fontsize="['20','20','15','15']"
                  data-lineheight="['25','25','20','20']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="normal"
                  data-type="text"
                  data-responsive_offset="on"
                  data-frames='[{"delay":"+1240","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                  data-margintop="[0,0,0,0]"
                  data-marginright="[0,0,0,0]"
                  data-marginbottom="[0,0,0,0]"
                  data-marginleft="[0,0,0,0]"
                  data-textAlign="['left','left','left','left']"
                  data-paddingtop="[5,5,5,5]"
                  data-paddingright="[5,5,5,5]"
                  data-paddingbottom="[5,5,5,5]"
                  data-paddingleft="[5,5,5,5]"
                  style="
                    z-index: 33;
                    white-space: normal;
                    font-size: 20px;
                    line-height: 25px;
                    font-weight: 700;
                    color: #000000;
                    letter-spacing: 0px;
                    display: inline-block;
                    font-family: Poppins;
                  "
                >
                  <?php echo nl2br($url_link_title); ?>

                </div>
              </div>
            </div>

            <!-- LAYER NR. 14 -->
            <div

              class="tp-caption"
              id="slide-283-layer-45"
              data-x="['left','left','left','left']"
              data-hoffset="['0','0','0','0']"
              data-y="['bottom','bottom','bottom','bottom']"
              data-voffset="['607','607','607','607']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-type="row"
              data-columnbreak="3"
              data-basealign="slide"
              data-responsive_offset="on"
              data-responsive="off"
              data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-margintop="[0,0,0,0]"
              data-marginright="[0,0,0,0]"
              data-marginbottom="[0,0,0,0]"
              data-marginleft="[0,0,0,0]"
              data-textAlign="['inherit','inherit','inherit','inherit']"
              data-paddingtop="[0,0,0,0]"
              data-paddingright="[100,50,50,30]"
              data-paddingbottom="[100,50,50,30]"
              data-paddingleft="[100,50,50,30]"
              style="
                z-index: 34;
                white-space: nowrap;
                font-size: 20px;
                line-height: 22px;
                font-weight: 400;
                color: #ffffff;
                letter-spacing: 0px;
              "
            >
              <!-- LAYER NR. 15 -->
              <div
                class="tp-caption"
                id="slide-283-layer-46"
                data-x="['left','left','left','left']"
                data-hoffset="['100','100','100','100']"
                data-y="['top','top','top','top']"
                data-voffset="['100','100','100','100']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="column"
                data-responsive_offset="on"
                data-responsive="off"
                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                data-columnwidth="50%"
                data-verticalalign="top"
                data-margintop="[0,0,0,0]"
                data-marginright="[0,0,0,0]"
                data-marginbottom="[0,0,0,10]"
                data-marginleft="[0,0,0,0]"
                data-textAlign="['inherit','inherit','inherit','inherit']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 35; width: 100%"
              >
                <!-- LAYER NR. 16 -->
                <!-- <div
                  class="tp-caption tp-resizeme"
                  id="slide-283-layer-48"
                  data-x="['left','left','left','left']"
                  data-hoffset="['0','0','0','0']"
                  data-y="['top','top','top','top']"
                  data-voffset="['0','0','0','0']"
                  data-lineheight="['14','14','14','10']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="normal"
                  data-type="text"
                  data-responsive_offset="on"
                  data-frames='[{"delay":"+490","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                  data-margintop="[0,0,0,0]"
                  data-marginright="[30,30,30,10]"
                  data-marginbottom="[0,0,0,0]"
                  data-marginleft="[0,0,0,0]"
                  data-textAlign="['inherit','inherit','inherit','inherit']"
                  data-paddingtop="[5,5,5,5]"
                  data-paddingright="[5,5,5,5]"
                  data-paddingbottom="[5,5,5,5]"
                  data-paddingleft="[5,5,5,5]"
                  style="
                    z-index: 36;
                    white-space: normal;
                    font-size: 12px;
                    line-height: 14px;
                    font-weight: 600;
                    color: #000000;
                    letter-spacing: 0px;
                    display: inline-block;
                    font-family: Poppins;
                  "
                >
                  FOLLOW US:
                </div> -->

                <!-- LAYER NR. 17 -->
                <!-- <a
                  class="tp-caption tp-resizeme tp-pointer tp-hoverfix"
                  href="https://www.facebook.com/semicolonweb"
                  target="_blank"
                  id="slide-283-layer-49"
                  data-x="['left','left','left','left']"
                  data-hoffset="['5','5','5','5']"
                  data-y="['top','top','top','top']"
                  data-voffset="['5','5','5','5']"
                  data-lineheight="['14','14','14','10']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="normal"
                  data-type="text"
                  data-actions=""
                  data-responsive_offset="on"
                  data-frames='[{"delay":"+540","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);td:line-through;"}]'
                  data-margintop="[0,0,0,0]"
                  data-marginright="[0,0,0,0]"
                  data-marginbottom="[0,0,0,0]"
                  data-marginleft="[0,0,0,0]"
                  data-textAlign="['inherit','inherit','inherit','inherit']"
                  data-paddingtop="[5,5,5,5]"
                  data-paddingright="[10,10,10,10]"
                  data-paddingbottom="[5,5,5,5]"
                  data-paddingleft="[5,5,5,5]"
                  style="
                    z-index: 37;
                    white-space: normal;
                    font-size: 12px;
                    line-height: 14px;
                    font-weight: 500;
                    color: #000000;
                    letter-spacing: 0px;
                    display: inline-block;
                    font-family: Poppins;
                    text-decoration: none;
                  "
                  >+FACEBOOK
                </a> -->

                <!-- LAYER NR. 18 -->
                <!-- <a
                  class="tp-caption tp-resizeme tp-pointer tp-hoverfix"
                  href="https://twitter.com/__semicolon"
                  target="_blank"
                  id="slide-283-layer-50"
                  data-x="['left','left','left','left']"
                  data-hoffset="['10','10','10','10']"
                  data-y="['top','top','top','top']"
                  data-voffset="['10','10','10','10']"
                  data-lineheight="['14','14','14','10']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="normal"
                  data-type="text"
                  data-actions=""
                  data-responsive_offset="on"
                  data-frames='[{"delay":"+590","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);td:line-through;"}]'
                  data-margintop="[0,0,0,0]"
                  data-marginright="[0,0,0,0]"
                  data-marginbottom="[0,0,0,0]"
                  data-marginleft="[0,0,0,0]"
                  data-textAlign="['inherit','inherit','inherit','inherit']"
                  data-paddingtop="[5,5,5,5]"
                  data-paddingright="[10,10,10,10]"
                  data-paddingbottom="[5,5,5,5]"
                  data-paddingleft="[5,5,5,5]"
                  style="
                    z-index: 38;
                    white-space: normal;
                    font-size: 12px;
                    line-height: 14px;
                    font-weight: 500;
                    color: #000000;
                    letter-spacing: 0px;
                    display: inline-block;
                    font-family: Poppins;
                    text-decoration: none;
                  "
                  >+TWITTER
                </a> -->

                <!-- LAYER NR. 19 -->
                <!-- <a
                  class="tp-caption tp-resizeme tp-pointer tp-hoverfix"
                  href="https://www.youtube.com/user/shank20121/videos"
                  target="_blank"
                  id="slide-283-layer-51"
                  data-x="['left','left','left','left']"
                  data-hoffset="['15','15','15','15']"
                  data-y="['top','top','top','top']"
                  data-voffset="['15','15','15','15']"
                  data-lineheight="['14','14','14','10']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="normal"
                  data-type="text"
                  data-actions=""
                  data-responsive_offset="on"
                  data-frames='[{"delay":"+640","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);td:line-through;"}]'
                  data-margintop="[0,0,0,0]"
                  data-marginright="[0,0,0,0]"
                  data-marginbottom="[0,0,0,0]"
                  data-marginleft="[0,0,0,0]"
                  data-textAlign="['inherit','inherit','inherit','inherit']"
                  data-paddingtop="[5,5,5,5]"
                  data-paddingright="[10,10,10,10]"
                  data-paddingbottom="[5,5,5,5]"
                  data-paddingleft="[5,5,5,5]"
                  style="
                    z-index: 39;
                    white-space: normal;
                    font-size: 12px;
                    line-height: 14px;
                    font-weight: 500;
                    color: #000000;
                    letter-spacing: 0px;
                    display: inline-block;
                    font-family: Poppins;
                    text-decoration: none;
                  "
                  >+YOUTUBE
                </a> -->

                <!-- LAYER NR. 20 -->
                <!-- <a
                  class="tp-caption tp-resizeme tp-pointer tp-hoverfix"
                  href="https://www.instagram.com/semicolonweb/"
                  target="_blank"
                  id="slide-283-layer-52"
                  data-x="['left','left','left','left']"
                  data-hoffset="['20','20','20','20']"
                  data-y="['top','top','top','top']"
                  data-voffset="['20','20','20','20']"
                  data-lineheight="['14','14','14','10']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="normal"
                  data-type="text"
                  data-actions=""
                  data-responsive_offset="on"
                  data-frames='[{"delay":"+690","speed":1000,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);td:line-through;"}]'
                  data-margintop="[0,0,0,0]"
                  data-marginright="[0,0,0,0]"
                  data-marginbottom="[0,0,0,0]"
                  data-marginleft="[0,0,0,0]"
                  data-textAlign="['inherit','inherit','inherit','inherit']"
                  data-paddingtop="[5,5,5,5]"
                  data-paddingright="[10,10,10,10]"
                  data-paddingbottom="[5,5,5,5]"
                  data-paddingleft="[5,5,5,5]"
                  style="
                    z-index: 40;
                    white-space: normal;
                    font-size: 12px;
                    line-height: 14px;
                    font-weight: 500;
                    color: #000000;
                    letter-spacing: 0px;
                    display: inline-block;
                    font-family: Poppins;
                    text-decoration: none;
                  "
                  >+INSTAGRAM
                </a> -->
              </div>

              <!-- LAYER NR. 21 -->
              <div
                class="tp-caption"
                id="slide-283-layer-47"
                data-x="['left','left','left','left']"
                data-hoffset="['100','100','100','100']"
                data-y="['top','top','top','top']"
                data-voffset="['100','100','100','100']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="column"
                data-responsive_offset="on"
                data-responsive="off"
                data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                data-columnwidth="50%"
                data-verticalalign="top"
                data-margintop="[0,0,0,0]"
                data-marginright="[0,0,0,0]"
                data-marginbottom="[0,0,0,0]"
                data-marginleft="[0,0,0,0]"
                data-textAlign="['right','right','right','left']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 41; width: 100%"
              >
              
              </div>
            </div>
          </div>


<?php if($block): ?>
  <?php
    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
  ?>
  <section id="slider" class="slider-element swiper_wrapper min-vh-75" data-loop="true">

    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">
        <?php if($block_childs): ?>
          <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
              $title = $item->json_params->title->{$locale} ?? $item->title;
              $brief = $item->json_params->brief->{$locale} ?? $item->brief;
              $content = $item->json_params->content->{$locale} ?? $item->content;
              $image = $item->image != '' ? $item->image : null;
              $image_background = $item->image_background != '' ? $item->image_background : null;
              $video = $item->json_params->video ?? null;
              $video_background = $item->json_params->video_background ?? null;
              $url_link = $item->url_link != '' ? $item->url_link : null;
              $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
              $icon = $item->icon != '' ? $item->icon : '';
              $style = isset($item->json_params->style) && $item->json_params->style == 'd-none' ? 'd-none' : '';
              
              $image_for_screen = null;
              if ($agent->isDesktop() && $image_background != null) {
                  $image_for_screen = $image_background;
              } else {
                  $image_for_screen = $image;
              }           
            ?>
                <div
                class="tp-caption tp-resizeme rs-parallaxlevel-3"
                id="slide-283-layer-25"
                data-x="['center','center','center','center']"
                data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']"
                data-voffset="['-50','-50','-121','-121']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-type="image"
                data-basealign="slide"
                data-responsive_offset="on"
                data-frames='[{"delay":100,"speed":1500,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":10,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                data-textAlign="['inherit','inherit','inherit','inherit']"
                data-paddingtop="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                style="z-index: 5"
              >
                <img
                  src="<?php echo e($image); ?>"
                  alt="Image"
                  data-ww="['103%','103%','103%','103%']"
                  data-hh=""
                  data-no-retina
                />
              </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <div
        class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
        id="slide-283-layer-2"
        data-x="['center','center','center','center']"
        data-hoffset="['0','0','0','0']"
        data-y="['middle','middle','middle','middle']"
        data-voffset="['-640','-625','-680','-655']"
        data-width="full"
        data-height="1000"
        data-whitespace="nowrap"
        data-type="shape"
        data-basealign="slide"
        data-responsive_offset="on"
        data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:1;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        style="z-index: 15; background-color: rgb(255, 255, 255)"
      ></div>

      <!-- LAYER NR. 34 -->
      <div
        class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
        id="slide-283-layer-3"
        data-x="['center','center','center','center']"
        data-hoffset="['0','0','0','-1']"
        data-y="['middle','middle','middle','middle']"
        data-voffset="['540','525','440','415']"
        data-width="full"
        data-height="1000"
        data-whitespace="nowrap"
        data-type="shape"
        data-basealign="slide"
        data-responsive_offset="on"
        data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        style="z-index: 16; background-color: rgb(255, 255, 255)"
      ></div>

      <!-- LAYER NR. 35 -->
      <div
        class="tp-caption tp-resizeme"
        id="slide-283-layer-5"
        data-x="['left','left','left','left']"
        data-hoffset="['-50','-50','0','0']"
        data-y="['middle','middle','middle','middle']"
        data-voffset="['-49','-49','-120','-120']"
        data-fontsize="['260','240','180','120']"
        data-lineheight="['260','240','180','120']"
        data-letterspacing="['-25','-20','-15','-10']"
        data-width="none"
        data-height="none"
        data-whitespace="nowrap"
        data-type="text"
        data-responsive_offset="on"
        data-frames='[{"delay":750,"speed":1500,"sfxcolor":"#000000","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[35,35,35,35]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[10,10,10,10]"
        style="
          z-index: 17;
          white-space: nowrap;
          font-size: 260px;
          line-height: 260px;
          font-weight: 700;
          color: #ffffff;
          letter-spacing: -25px;
          font-family: Poppins;
        "
      >
        <?php echo e($title); ?>

      </div>

      <!-- LAYER NR. 36 -->
      <div
        class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
        id="slide-283-layer-18"
        data-x="['center','center','center','center']"
        data-hoffset="['-600','-400','-300','-200']"
        data-y="['middle','middle','middle','middle']"
        data-voffset="['-400','-300','-300','-300']"
        data-width="['600','400','300','200']"
        data-height="['400','300','300','300']"
        data-whitespace="nowrap"
        data-type="shape"
        data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-283-layer-1","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-283-layer-1","delay":""}]'
        data-responsive_offset="on"
        data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        style="z-index: 18"
      ></div>

      <!-- LAYER NR. 37 -->
      <div
        class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
        id="slide-283-layer-17"
        data-x="['center','center','center','center']"
        data-hoffset="['0','0','0','0']"
        data-y="['middle','middle','middle','middle']"
        data-voffset="['-400','-300','-300','-300']"
        data-width="['600','400','300','200']"
        data-height="['400','300','300','300']"
        data-whitespace="nowrap"
        data-type="shape"
        data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-283-layer-7","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-283-layer-7","delay":""}]'
        data-responsive_offset="on"
        data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        style="z-index: 19"
      ></div>

      <!-- LAYER NR. 38 -->
      <div
        class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
        id="slide-283-layer-19"
        data-x="['center','center','center','center']"
        data-hoffset="['600','400','300','200']"
        data-y="['middle','middle','middle','middle']"
        data-voffset="['-400','-300','-300','-300']"
        data-width="['600','400','300','200']"
        data-height="['400','300','300','300']"
        data-whitespace="nowrap"
        data-type="shape"
        data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-283-layer-8","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-283-layer-8","delay":""}]'
        data-responsive_offset="on"
        data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        style="z-index: 20"
      ></div>

      <!-- LAYER NR. 39 -->
      <div
        class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
        id="slide-283-layer-20"
        data-x="['center','center','center','center']"
        data-hoffset="['-600','-400','-300','-200']"
        data-y="['middle','middle','middle','middle']"
        data-voffset="['0','0','0','0']"
        data-width="['600','400','300','200']"
        data-height="['400','300','300','300']"
        data-whitespace="nowrap"
        data-type="shape"
        data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-283-layer-9","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-283-layer-9","delay":""}]'
        data-responsive_offset="on"
        data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        style="z-index: 21"
      ></div>

      <!-- LAYER NR. 40 -->
      <div
        class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
        id="slide-283-layer-12"
        data-x="['center','center','center','center']"
        data-hoffset="['0','0','0','0']"
        data-y="['middle','middle','middle','middle']"
        data-voffset="['0','0','0','0']"
        data-width="['600','400','300','200']"
        data-height="['400','300','300','300']"
        data-whitespace="nowrap"
        data-type="shape"
        data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-283-layer-10","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-283-layer-10","delay":""}]'
        data-responsive_offset="on"
        data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        style="z-index: 22"
      ></div>

      <!-- LAYER NR. 41 -->
      <div
        class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
        id="slide-283-layer-21"
        data-x="['center','center','center','center']"
        data-hoffset="['600','400','300','200']"
        data-y="['middle','middle','middle','middle']"
        data-voffset="['0','0','0','0']"
        data-width="['600','400','300','200']"
        data-height="['400','300','300','300']"
        data-whitespace="nowrap"
        data-type="shape"
        data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-283-layer-11","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-283-layer-11","delay":""}]'
        data-responsive_offset="on"
        data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        style="z-index: 23"
      ></div>

      <!-- LAYER NR. 42 -->
      <div
        class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
        id="slide-283-layer-22"
        data-x="['center','center','center','center']"
        data-hoffset="['-600','-400','-300','-200']"
        data-y="['middle','middle','middle','middle']"
        data-voffset="['400','300','300','300']"
        data-width="['600','400','300','200']"
        data-height="['400','300','300','300']"
        data-whitespace="nowrap"
        data-type="shape"
        data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-283-layer-14","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-283-layer-14","delay":""}]'
        data-responsive_offset="on"
        data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        style="z-index: 24"
      ></div>

      <!-- LAYER NR. 43 -->
      <div
        class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
        id="slide-283-layer-23"
        data-x="['center','center','center','center']"
        data-hoffset="['0','0','0','0']"
        data-y="['middle','middle','middle','middle']"
        data-voffset="['400','300','300','300']"
        data-width="['600','400','300','200']"
        data-height="['400','300','300','300']"
        data-whitespace="nowrap"
        data-type="shape"
        data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-283-layer-13","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-283-layer-13","delay":""}]'
        data-responsive_offset="on"
        data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        style="z-index: 25"
      ></div>

      <!-- LAYER NR. 44 -->
      <div
        class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
        id="slide-283-layer-24"
        data-x="['center','center','center','center']"
        data-hoffset="['600','400','300','200']"
        data-y="['middle','middle','middle','middle']"
        data-voffset="['400','300','300','300']"
        data-width="['600','400','300','200']"
        data-height="['400','300','300','300']"
        data-whitespace="nowrap"
        data-type="shape"
        data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-283-layer-15","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-283-layer-15","delay":""}]'
        data-responsive_offset="on"
        data-frames='[{"delay":100,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
        data-textAlign="['inherit','inherit','inherit','inherit']"
        data-paddingtop="[0,0,0,0]"
        data-paddingright="[0,0,0,0]"
        data-paddingbottom="[0,0,0,0]"
        data-paddingleft="[0,0,0,0]"
        style="z-index: 26"
      ></div>
    </li>
  </ul>
  <div
    class="tp-bannertimer tp-bottom"
    style="visibility: hidden !important"
  ></div>
</div>
</div>
<!-- END REVOLUTION SLIDER -->
</section>
<?php endif; ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\mid\resources\views/frontend/blocks/banner/styles/slide.blade.php ENDPATH**/ ?>