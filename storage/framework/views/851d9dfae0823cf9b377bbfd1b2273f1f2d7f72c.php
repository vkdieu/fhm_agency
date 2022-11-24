<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $background = $block->image_background != '' ? $block->image_background : url('assets/img/banner.jpg');
    $url_link = $block->url_link != '' ? $block->url_link : null;
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    
    $params['status'] = App\Consts::POST_STATUS['active'];
    $params['is_featured'] = true;
    $params['is_type'] = App\Consts::POST_TYPE['service'];
    
    $rows = App\Http\Services\ContentService::getCmsPost($params)->get();
    
  ?>

<div class="container">
<p class="titular-sub-title text-primary fw-bold center">
 <?php echo e($title); ?>

</p>
<h1
  class="titular-title fw-normal center font-secondary fst-normal mb-0"
>
  <?php echo e($brief); ?>

</h1>

<div class="clear mb-5"></div>
<div class="row posts-md col-mb-30">


      <?php if(isset($rows)): ?>
        <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $title = $item->json_params->title->{$locale} ?? $item->title;
            $brief = $item->json_params->brief->{$locale} ?? $item->brief;
            $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
            // Viet ham xu ly lay slug
            $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['service'], $item->taxonomy_title, $item->taxonomy_id);
            $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['service'], $title, $item->id, 'detail');
            
          ?>
          <div class="col-lg-3 col-md-6">
            <div class="entry">
              <div class="entry-image">
                <a href=" <?php echo e($alias); ?> "
                  ><img
                    src="<?php echo e($image); ?>"
                    alt="Image"
                /></a>
              </div>
              <div class="entry-title title-xs nott">
                <h3>
                  <a href="<?php echo e($alias); ?>"
                    ><?php echo e($title); ?></a
                  >
                </h3>
              </div>

              <div class="entry-content">
                <p>
                  <?php echo nl2br(Str::limit($brief, 200)); ?>

                </p>
              </div>
            </div>
          </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- END BLOGS -->
</div>
</section>
  
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\FHM_Watches\resources\views/frontend/blocks/cms_service/styles/default.blade.php ENDPATH**/ ?>