

<?php
$page_title = $taxonomy->title ?? ($page->title ?? $page->name);
$image_background = $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');

$title = $taxonomy->json_params->title->{$locale} ?? ($taxonomy->title ?? null);
$image = $taxonomy->json_params->image ?? null;
$seo_title = $taxonomy->json_params->seo_title ?? $title;
$seo_keyword = $taxonomy->json_params->seo_keyword ?? null;
$seo_description = $taxonomy->json_params->seo_description ?? null;
$seo_image = $image ?? null;

?>

<?php $__env->startSection('content'); ?>
  
  <section id="page-title">

    <div class="container clearfix">
      <h1><?php echo e($page_title); ?></h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('frontend.home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('frontend.cms.product')); ?>"><?php echo e($page->name ?? ''); ?></a></li>
      </ol>
    </div>

  </section>
  

  <!-- Main Content -->
  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix">

        <div class="row gutter-40 col-mb-80">

          <div class="postcontent col-lg-9">

            <div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">


                <?php if($posts): ?>
                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                      $title = $item->json_params->title->{$locale} ?? $item->title;
                      $brief = $item->json_params->brief->{$locale} ?? $item->brief;
                      $image = $item->image_thumb ?? ($item->image ?? null);
                      $date = date('H:i d/m/Y', strtotime($item->created_at));
                      // Viet ham xu ly lay alias bai viet
                      $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $item->taxonomy_title, $item->taxonomy_id);
                      $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $title, $item->id, 'detail');
                    ?>
                    <div class="col-lg-4 col-md-4 col-6 px-2">
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
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                  <p><?php echo app('translator')->get('not_found'); ?></p>
                <?php endif; ?>
                

              <?php echo e($posts->withQueryString()->links('frontend.pagination.default')); ?>



            </div><!-- /.content-woocommerce -->
          </div><!-- /#inner-content -->

          <?php echo $__env->make('frontend.components.sidebar.product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        </div><!-- /#site-content -->


      </div><!-- /#content-wrap -->
    </div><!-- /#main-content -->
  </section>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project\phanlong\resources\views/frontend/pages/product/category.blade.php ENDPATH**/ ?>