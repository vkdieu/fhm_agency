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
     <div id="quote" class="section">
        <div class="row">
          <div class="col-lg-8 offset-lg-1 col-md-12">
            <div class="border-bottom-0 mb-0 p-4">
              <h1
                class="display-4 fw-normal font-secondary fst-normal text-light mb-3"
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
        </div>
      </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\FHM_Watches\resources\views/frontend/blocks/custom/styles/quocte.blade.php ENDPATH**/ ?>