<?php if($block): ?>
  <?php
    $title = $block->json_params->title->{$locale} ?? $block->title;
    $brief = $block->json_params->brief->{$locale} ?? $block->brief;
    $background = $block->image_background != '' ? $block->image_background : url('assets/img/banner.jpg');
    $url_link = $block->url_link != '' ? $block->url_link : '';
    $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
    
    $params['status'] = App\Consts::POST_STATUS['active'];
    $params['is_featured'] = true;
    $params['is_type'] = App\Consts::POST_TYPE['post'];
    
    $rows = App\Http\Services\ContentService::getCmsPost($params)->get();
  ?>
  <div class="container" id="news">
    <div class="fancy-title title-center title-border topmargin">
      <h3><?php echo $title; ?></h3>
    </div>

    <div id="oc-posts" class="owl-carousel posts-carousel carousel-widget posts-md" data-pagi="false" data-items-xs="1"
      data-loop="true" data-autoplay="2000" data-items-sm="2" data-items-md="3" data-items-lg="4">

      <?php if($rows): ?>
        <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $title = $item->json_params->title->{$locale} ?? $item->title;
            $brief = $item->json_params->brief->{$locale} ?? $item->brief;
            $image = $item->image_thumb != '' ? $item->image_thumb : ($item->image != '' ? $item->image : null);
            $date = date('d/m/Y', strtotime($item->created_at));
            // Viet ham xu ly lay slug
            $alias_category = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $item->taxonomy_title, $item->taxonomy_id);
            $alias = App\Helpers::generateRoute(App\Consts::TAXONOMY['post'], $title, $item->id, 'detail');
          ?>
          <div class="oc-item">
            <div class="entry">
              <div class="entry-image">
                <a href="<?php echo e($alias); ?>">
                  <img src="<?php echo e($image); ?>" alt="<?php echo e($title); ?>" />
                </a>
              </div>
              <div class="entry-title title-xs nott">
                <h3>
                  <a href="<?php echo e($alias); ?>"><?php echo e(Str::limit($title, 40)); ?></a>
                </h3>
              </div>
              <div class="entry-meta">
                <ul>
                  <li><i class="icon-calendar3"></i> <?php echo e($date); ?></li>
                  <li>
                    <a href="<?php echo e($alias_category); ?>"><i class="icon-folder"></i> <?php echo e($item->taxonomy_title); ?></a>
                  </li>
                </ul>
              </div>
              <div class="entry-content">
                <p><?php echo e(Str::limit($brief, 80)); ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    </div>
  </div>

<?php endif; ?>
<?php /**PATH D:\project\phanlong\resources\views/frontend/blocks/cms_post/styles/default.blade.php ENDPATH**/ ?>