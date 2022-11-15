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
  <div class="section border-top-0 m-0 section-clients">
    <div class="container clearfix">
      <div class="heading-block center">
        <h2><?php echo e($title); ?></h2>
        <span><?php echo e($brief); ?></span>
      </div>
      <div
        id="oc-clients"
        class="owl-carousel image-carousel carousel-widget owl-loaded owl-drag with-carousel-dots"
        data-margin="20"
        data-nav="false"
        data-pagi="true"
        data-items-xs="2"
        data-items-sm="3"
        data-items-md="4"
        data-items-lg="5"
        data-items-xl="6"
      >
        <div class="owl-stage-outer">
          <div
            class="owl-stage"
            style="
              transform: translate3d(0px, 0px, 0px);
              transition: all 0s ease 0s;
              width: 2194px;
            "
          >
            <div
              class="owl-item active"
              style="width: 199.333px; margin-right: 20px"
            >
      <?php if($block_childs): ?>
        <?php $__currentLoopData = $block_childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $title_child = $item->json_params->title->{$locale} ?? $item->title;
            $brief_child = $item->json_params->brief->{$locale} ?? $item->brief;
            $content_child = $item->json_params->content->{$locale} ?? $item->content;
            $image_child = $item->image != '' ? $item->image : null;
            $url_link = $item->url_link != '' ? $item->url_link : 'javascript:void(0)';
            $url_link_title = $item->json_params->url_link_title->{$locale} ?? $item->url_link_title;
            $icon = $item->icon != '' ? $item->icon : '';
            $style = $item->json_params->style ?? '';
          ?>
              <div class="oc-item">
                <a href="<?php echo e($url_link); ?>"
                <?php if(isset($image_child)): ?>
                ><img src="<?php echo e($image_child); ?>" alt="Clients"

                <?php endif; ?>
                /></a>
              </div>
            </div>
            <div
            class="owl-item"
            style="width: 199.333px; margin-right: 20px"
          >
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
     
    </div>
  </div>
</div>
<div class="owl-nav disabled">
  <button type="button" role="presentation" class="owl-prev">
    <i class="icon-angle-left"></i></button
  ><button type="button" role="presentation" class="owl-next">
    <i class="icon-angle-right"></i>
  </button>
</div>
</div>
</div>
</div>
<div
class="section section-about m-0"
style="
padding: 120px 0;
background: url('demos/articles/images/dots-1.png') 100% 0
no-repeat / 40%;
"
>

<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\fhm\resources\views/frontend/blocks/custom/styles/clients.blade.php ENDPATH**/ ?>