<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $background = $block->image_background != '' ? $block->image_background : url('assets/img/banner.jpg');
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    
    $params['status'] = App\Consts::POST_STATUS['active'];
    $params['is_featured'] = true;
    $params['is_type'] = App\Consts::POST_TYPE['product'];
    
    $rows = App\Http\Services\ContentService::getCmsPost($params)->get();
    
    $params['status'] = App\Consts::TAXONOMY_STATUS['active'];
    $params['taxonomy'] = App\Consts::TAXONOMY['product'];
    
    $taxonomys = App\Http\Services\ContentService::getCmsTaxonomy($params)->get();
    
  ?>

  <?php if(isset($taxonomys)): ?>
    <?php $__currentLoopData = $taxonomys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_taxonomy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
        $title_taxonomy = $item_taxonomy->json_params->title->{$locale} ?? $item_taxonomy->title;
        $brief_taxonomy = $item_taxonomy->json_params->brief->{$locale} ?? null;
        $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $title_taxonomy, $item_taxonomy->id);
      ?>
      <div class="container clearfix">
        <div class="fancy-title title-center title-border topmargin">
          <h3 class="text-uppercase"><?php echo e($title_taxonomy); ?></h3>
        </div>

        <div class="row grid-6">
          <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($item->taxonomy_id == $item_taxonomy->id): ?>
              <?php
                $title = $item->json_params->title->{$locale} ?? $item->title;
                $brief = $item->json_params->brief->{$locale} ?? $item->brief;
                $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
                $date = date('H:i d/m/Y', strtotime($item->created_at));
                // Viet ham xu ly lay slug
                // $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $item->taxonomy_title, $item->taxonomy_id);
                $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $title, $item->id, 'detail');
              ?>
              <div class="col-lg-3 col-md-4 px-2">
                <div class="product">
                  <div class="product-image">
                    <a href="<?php echo e($alias); ?>"><img src="<?php echo e($image); ?>" alt="<?php echo e($title); ?>" /></a>
                    <a href="<?php echo e($alias); ?>"><img src="<?php echo e($image); ?>" alt="<?php echo e($title); ?>" /></a>
                    <div class="bg-overlay">
                      <div class="bg-overlay-content align-items-end justify-content-between"
                        data-hover-animate="fadeIn" data-hover-speed="400">
                        <a href="javascript:void(0)" title="<?php echo app('translator')->get('Add to cart'); ?>" class="btn btn-dark me-2 add-to-cart" data-id="<?php echo e($item->id); ?>" data-quantity="1"><i
                            class="icon-shopping-basket"></i></a>
                        <a href="<?php echo e($alias); ?>" class="btn btn-dark" title="<?php echo app('translator')->get('Detail'); ?>"><i
                            class="icon-line-expand"></i></a>
                      </div>
                      <div class="bg-overlay-bg bg-transparent"></div>
                    </div>

                  </div>
                  <div class="product-desc">
                    <div class="product-title mb-1">
                      <h3>
                        <a href="<?php echo e($alias); ?>"><?php echo e($title); ?></a>
                      </h3>
                    </div>
                    <div class="product-price font-primary">
                      <?php if(isset($item->json_params->price_old) && $item->json_params->price_old > 0): ?>
                        <del class="me-1">
                          <?php echo e(number_format($item->json_params->price_old, 0, ',', '.')); ?> đ
                        </del>
                      <?php endif; ?>
                      <ins>
                        <?php echo e(isset($item->json_params->price) && $item->json_params->price > 0 ? number_format($item->json_params->price, 0, ',', '.') . ' đ' : __('Contact')); ?>

                      </ins>

                    </div>
                    <div class="product-rating">
                      <i class="icon-star3"></i>
                      <i class="icon-star3"></i>
                      <i class="icon-star3"></i>
                      <i class="icon-star3"></i>
                      <i class="icon-star3"></i>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>
<?php endif; ?>
<?php /**PATH D:\project\phanlong\resources\views/frontend/blocks/cms_product_category/styles/default.blade.php ENDPATH**/ ?>