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
    
  ?>
     <!-- START BESTSELLER -->
     <div id="product" class="section bg-transparent mb-0">
      <div class="container">
        <h1
          class="titular-title fw-normal center font-secondary fst-normal mb-0"
        >
          <?php echo e($title); ?>

        </h1>
        <p class="text-center">
         <?php echo e($brief); ?>

        </p>

        <div class="clear mb-5"></div>
      </div>
      <div class="container-fluid g-0">
        <div
          id="oc-products"
          class="owl-carousel products-carousel carousel-widget"
          data-pagi="false"
          data-items-xs="1"
          data-items-sm="2"
          data-items-md="3"
          data-items-lg="4"
        >
      <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
          $title = $item->json_params->title->{$locale} ?? $item->title;
          $brief = $item->json_params->brief->{$locale} ?? $item->brief;
          $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
          $date = date('H:i d/m/Y', strtotime($item->created_at));
          // Viet ham xu ly lay slug
          // $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $item->taxonomy_title, $item->taxonomy_id);
          $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $title, $item->id, 'detail');
        ?>
      <div class="oc-item">
        <div class="product">
          <div class="product-image">
            <a href="#"
              ><img
                src="<?php echo e($image); ?>"
                alt="Slim Fit Chinos"
            /></a>
            <a href="#"
              ><img
                src="<?php echo e($image); ?>"
                alt="Slim Fit Chinos"
            /></a>
            <div class="bg-overlay">
              <div
                class="bg-overlay-content align-items-end justify-content-between"
                data-hover-animate="fadeIn"
                data-hover-speed="400"
              >
                <a href="#" class="btn btn-dark me-2"
                  ><i class="icon-shopping-basket"></i
                ></a>
                <a
                  href="include/ajax/shop-item.html"
                  class="btn btn-dark"
                  data-lightbox="ajax"
                  ><i class="icon-line-expand"></i
                ></a>
              </div>
              <div class="bg-overlay-bg bg-transparent"></div>
            </div>
          </div>
          <div class="product-desc center">
            <div class="product-title">
              <h3><a href="<?php echo e($alias); ?>"><?php echo e($title); ?></a></h3>
            </div>
            <div class="product-price"><?php echo e(isset($item->json_params->price) && $item->json_params->price > 0 ? number_format($item->json_params->price, 0, ',', '.') . ' đ' : __('Contact')); ?></div>
            <!-- <div class="product-rating">
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star3"></i>
              <i class="icon-star-half-full"></i>
              <i class="icon-star-empty"></i>
            </div> -->
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
  </div>
</div>


<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\FHM_Watches\resources\views/frontend/blocks/product_feature/styles/default.blade.php ENDPATH**/ ?>