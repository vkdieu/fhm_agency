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
                     <?php echo e($title); ?>

                    </h2>
                  </div>
                  <p>
                    <?php echo e($brief); ?>

                  </p>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-6 mt-5 mt-sm-0">
                  <div class="d-none d-lg-flex">
                    <img
                      src="<?php echo e($image); ?>"
                      class="fast fadeInDown animated"
                      alt="Image"
                      style="height: 600px"
                      data-animate="fadeInDown"
                    />
                    <img
                      src="<?php echo e($image_background); ?>"
                      class="fast fadeInUp animated"
                      alt="Image"
                      style="height: 600px"
                      data-animate="fadeInUp"
                    />
                  </div>
               
              </div>
            </div>
          </div>

<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\fhm\resources\views/frontend/blocks/custom/styles/about_us.blade.php ENDPATH**/ ?>