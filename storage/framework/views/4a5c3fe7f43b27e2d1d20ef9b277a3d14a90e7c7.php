<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $content = $block->json_params->content->{$locale} ?? $block->content;
    $image = $block->image != '' ? $block->image : '';
    $image_background = $block->image_background != '' ? $block->image_background : '';
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    $style = isset($block->json_params->style) && $block->json_params->style == 'slider-caption-right' ? 'd-none' : '';
    
    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
  ?>
      <section id="content">
        <div class="content-wrap">
          <div class="section-about">
            <!-- <div class="section border-top-0 m-0">
              <div class="container text-center">
                <div class="heading-block center">
                  <h2>Heading Block</h2>
                  <span>Sub-Title for the Heading Block</span>
                </div>
                <p>
                  Millennium Development Goals, The Elders crisis situation
                  cross-cultural time of extraordinary change minority.
                  Long-term progress, humanitarian medicine capacity building
                  free expression innovate. Natural resources criteria respect
                  planned giving small-scale farmers.
                </p>
              </div>
            </div> -->
            <div class="container">
              <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-5 col-sm-6">
                  <div class="heading-block border-bottom-0">
                    <h2
                      class="fw-normal ls0 nott mb-0 font-primary"
                      style="
                        font-size: 44px;
                        line-height: 1.3;
                        font-weight: bold !important;
                        color: #000;
                      "
                    >
                      ABOUT US.
                    </h2>
                  </div>
                  <p>
                    FHM AGENCY full name is FHM Vietnam Trading Joint Stock
                    Company. Formed based on enthusiasm, effort and necessity in
                    the development trend of the market. Thereby helping
                    businesses boost the economy and increase sales.
                  </p>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-6 mt-5 mt-sm-0">
                  <div class="d-none d-lg-flex">
                    <img
                      src="demos/articles/images/iphone-1.png"
                      class="fast fadeInDown animated"
                      alt="Image"
                      style="height: 600px"
                      data-animate="fadeInDown"
                    />
                    <img
                      src="demos/articles/images/iphone-2.png"
                      class="fast fadeInUp animated"
                      alt="Image"
                      style="height: 600px"
                      data-animate="fadeInUp"
                    />
                  </div>
                  <img
                    src="demos/articles/images/iphone.png"
                    alt="Image"
                    class="d-block d-lg-none px-5 px-sm-0 p-md-5"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="section border-top-0 m-0">
            <div class="container text-center">
              <div class="heading-block center">
                <h2>OUR SERVICE</h2>
                <span>Sub-Title for the Heading Block</span>
              </div>
            </div>
            <div class="container clearfix">
              <div class="row col-mb-50">

        <?php if($block_childs): ?>
          <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
              $title_sub = $item->json_params->title->{$locale} ?? $item->title;
              $brief_sub = $item->json_params->brief->{$locale} ?? $item->brief;
              $content_sub = $item->json_params->content->{$locale} ?? $item->content;
              $image_sub = $item->image != '' ? $item->image : null;
            ?>
          <div class="row align-items-center justify-content-between">
            <div class="col-lg-5 col-md-5 col-sm-6">
              <div class="heading-block border-bottom-0">
                <h2
                  class="fw-normal ls0 nott mb-0 font-primary"
                  style="
                    font-size: 44px;
                    line-height: 1.3;
                    font-weight: bold !important;
                    color: #000;
                  "
                >
                  ABOUT US.
                </h2>
              </div>
              <p>
                FHM AGENCY full name is FHM Vietnam Trading Joint Stock
                Company. Formed based on enthusiasm, effort and necessity in
                the development trend of the market. Thereby helping
                businesses boost the economy and increase sales.
              </p>
            </div>
            <div class="col-lg-6 col-md-7 col-sm-6 mt-5 mt-sm-0">
              <div class="d-none d-lg-flex">
                <img
                  src="demos/articles/images/iphone-1.png"
                  class="fast fadeInDown animated"
                  alt="Image"
                  style="height: 600px"
                  data-animate="fadeInDown"
                />
                <img
                  src="demos/articles/images/iphone-2.png"
                  class="fast fadeInUp animated"
                  alt="Image"
                  style="height: 600px"
                  data-animate="fadeInUp"
                />
              </div>
              <img
                src="demos/articles/images/iphone.png"
                alt="Image"
                class="d-block d-lg-none px-5 px-sm-0 p-md-5"
              />
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </div>

<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\mid\resources\views/frontend/blocks/custom/styles/about_us.blade.php ENDPATH**/ ?>