

<?php
$page_title = $taxonomy->title ?? ($page->title ?? ($page->name ?? ''));
$image_background = $taxonomy->json_params->image_background ?? ($web_information->image->background_breadcrumbs ?? '');
?>
<?php $__env->startPush('style'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
  

  <section id="page-title">

    <div class="container clearfix">
      <h1><?php echo e($page_title); ?></h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('frontend.home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo e($page->name ?? ''); ?></li>
      </ol>
    </div>

  </section>
  <section id="content">
    <div class="content-wrap">
      <div class="container">
        <?php if(session('cart')): ?>
          <table class="table cart mb-5">
            <thead>
              <tr>
                <th class="cart-product-remove">&nbsp;</th>
                <th class="cart-product-thumbnail">&nbsp;</th>
                <th class="cart-product-name"><?php echo app('translator')->get('Product'); ?></th>
                <th class="cart-product-price"><?php echo app('translator')->get('Price'); ?></th>
                <th class="cart-product-quantity"><?php echo app('translator')->get('Quantity'); ?></th>
                <th class="cart-product-subtotal"><?php echo app('translator')->get('Total'); ?></th>
              </tr>
            </thead>
            <tbody>
              <?php $total = $quantity = 0 ?>
              <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                  $total += $details['price'] * $details['quantity'];
                  $quantity += $details['quantity'];
                  $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['product'], $details['title'], $id, 'detail');
                ?>
                <tr class="cart_item item" data-id="<?php echo e($id); ?>">
                  <td class="cart-product-remove">
                    <a href="javascript:void(0)" class="remove remove-from-cart" title="<?php echo app('translator')->get('Remove this item'); ?>"><i
                        class="icon-trash2"></i></a>
                  </td>

                  <td class="cart-product-thumbnail">
                    <a href="<?php echo e($alias); ?>"><img width="64" height="64"
                        src="<?php echo e($details['image_thumb'] ?? $details['image']); ?>" alt="<?php echo e($details['title']); ?>"></a>
                  </td>

                  <td class="cart-product-name">
                    <a href="<?php echo e($alias); ?>"><?php echo e($details['title']); ?></a>
                  </td>

                  <td class="cart-product-price">
                    <span class="amount">
                      <?php echo e(isset($details['price']) && $details['price'] > 0 ? number_format($details['price'], 0, ',', '.') : __('Contact')); ?>

                    </span>
                  </td>

                  <td class="cart-product-quantity">
                    <div class="quantity">
                      <input type="button" value="-" class="minus">
                      <input type="text" name="quantity" value="<?php echo e($details['quantity']); ?>" class="qty update-cart" />
                      <input type="button" value="+" class="plus">
                    </div>
                  </td>

                  <td class="cart-product-subtotal">
                    <span class="amount">
                      <?php echo e(number_format($details['price'] * $details['quantity'], 0, ',', '.')); ?>

                    </span>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

          </table>

          <div class="row col-mb-30">
            <div class="col-lg-6">
              <h3 class="text-uppercase"><?php echo app('translator')->get('Submit Order Cart'); ?></h3>
              <form class="row" method="POST" action="<?php echo e(route('frontend.order.store.product')); ?>">
                <?php echo csrf_field(); ?>
                <div class="col-md-12 form-group">
                  <input type="text" class="sm-form-control" name="name" placeholder="<?php echo app('translator')->get('Fullname'); ?> *" />
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" class="sm-form-control" name="phone" placeholder="<?php echo app('translator')->get('Phone'); ?> *" />
                </div>

                <div class="col-md-6 form-group">
                  <input type="text" class="sm-form-control" name="email" placeholder="Email" />
                </div>
                <div class="col-12 form-group">
                  <textarea name="address" tabindex="11" class="sm-form-control" placeholder="<?php echo app('translator')->get('Address'); ?> *" required></textarea>
                </div>
                <div class="col-12 form-group">
                  <textarea name="customer_note" tabindex="11" cols="40" rows="5" class="sm-form-control" placeholder="<?php echo app('translator')->get('Content note'); ?>"></textarea>
                </div>
                <div class="col-12 form-group">
                  <button class="button button-3d m-0 button-primary"><?php echo app('translator')->get('Submit Order'); ?></button>
                </div>
              </form>
            </div>

            <div class="col-lg-6">
              <h3 class="text-uppercase"><?php echo app('translator')->get('Order detail'); ?></h3>

              <div class="table-responsive">
                <table class="table cart cart-totals">
                  <tbody>
                    <tr class="cart_item">
                      <td class="cart-product-name">
                        <strong><?php echo app('translator')->get('Total quantity'); ?></strong>
                      </td>

                      <td class="cart-product-name">
                        <span class="amount"><?php echo e($quantity); ?></span>
                      </td>
                    </tr>
                    <tr class="cart_item">
                      <td class="cart-product-name">
                        <strong><?php echo app('translator')->get('Total'); ?></strong>
                      </td>

                      <td class="cart-product-name">
                        <span class="amount color lead"><strong><?php echo e(number_format($total, 0, ',', '.')); ?></strong></span>
                      </td>
                    </tr>
                  </tbody>

                </table>
              </div>
            </div>
          </div>
        <?php else: ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="style-msg alertmsg">
                <div class="sb-msg">
                  <?php echo app('translator')->get('Cart is empty!'); ?>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </section>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project\phanlong\resources\views/frontend/pages/cart/index.blade.php ENDPATH**/ ?>