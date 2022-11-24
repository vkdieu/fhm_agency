<?php if($block): ?>
  <?php
    // Filter all blocks by parent_id
    $block_childs = $blocks->filter(function ($item, $key) use ($block) {
        return $item->parent_id == $block->id;
    });
  ?>
 <div id="gender" class="section bg-transparent py-0 my-0">
        <!--Start Single Swiper Slide-->
        <div class="row">
        <?php if($block_childs): ?>
          <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
              $title = $item->json_params->title->{$locale} ?? $item->title;
              $brief = $item->json_params->brief->{$locale} ?? $item->brief;
              $image = $item->image != '' ? $item->image : null;
              $image_background = $item->image_background != '' ? $item->image_background : null;
              $video = $item->json_params->video ?? null;
              $video_background = $item->json_params->video_background ?? null;
              $url_link = $item->url_link != '' ? $item->url_link : '';
              $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
              $icon = $item->icon != '' ? $item->icon : '';
              $style = isset($item->json_params->style) ? $item->json_params->style : '';
              
              $image_for_screen = null;
              if ($agent->isDesktop() && $image_background != null) {
                  $image_for_screen = $image_background;
              } else {
                  $image_for_screen = $image;
              }
              
            ?>
           <div
           class="col-lg-6 col-md-12 gender-col"
           style="
             background-image: url('<?php echo e($image); ?>');
           "
         >
           <div
             class="heading-block border-bottom-0 mb-0 p-4 d-flex flex-column align-items-center"
             style="max-width: 550px"
           >
             <h1
               class="titular-title fw-normal center font-secondary fst-normal mb-3 text-light"
             >
               <?php echo e($title); ?>

             </h1>

             <a
               href="<?php echo e($url_link); ?>"
               class="button button-large button-light text-light bg-transparent border nott m-0 ls0"
               ><?php echo e($url_link_title); ?></a
             >
           </div>
         </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\FHM_Watches\resources\views/frontend/blocks/banner/styles/slide.blade.php ENDPATH**/ ?>