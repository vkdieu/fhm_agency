<link
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700&amp;display=swap"
  rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/demos/articles/articles.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/./FHMtemp-agency.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/css/bootstrap.css')); ?>" type="text/css" />

<!-- shop Demo Specific Stylesheet -->
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/style.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/css/swiper.css')); ?>" type="text/css" />
<!-- / -->

<!-- Construction Demo Specific Stylesheet -->
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/css/dark.css')); ?>"
  type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/css/font-icons.css')); ?>" type="text/css" />

<!-- / -->

<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/css/animate.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/css/magnific-popup.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/css/custom.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/include/rs-plugin/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')); ?>" type="text/css" />

<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/demos/articles/css/fonts.css')); ?>"
  type="text/css" />

<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/include/rs-plugin/css/addons/revolution.addon.explodinglayers.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/include/rs-plugin/css/settings.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/include/rs-plugin/css/layers.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/fhm/include/rs-plugin/css/navigation.css')); ?>" type="text/css" />

<style>
  .widget>h4 {
    font-size: 1.5rem;
  }

  a {
    text-decoration: none !important;
    color: #1C66C9;
  }

  .top-cart-number::before {
    background-color: red;
  }

  #page-title h1 {
    max-width: 80%;
  }

  @media (max-width: 767.98px) {
    #page-title h1 {
      max-width: 100%;
    }
  }

  .si-share span {
    font-size: 1rem;
  }

  .current-nav-item a {
    color: #1C66C9 !important;
    font-weight: 700;
  }

  .widget {
    position: relative;
    margin-top: 30px;
  }

  .sidebar-widgets-wrap .widget {
    padding-top: 30px;
    border-top: 1px solid #eee;
  }

  .alert-fixed {
    position: fixed;
    top: 0px;
    right: 0px;
    margin: 1rem;
    z-index: 9999;
  }

  .svg-trigger path {
    stroke: #FFFFFF;
  }

  .menu-item .sub-menu-trigger {
    color: #FFF;
  }
</style>

<?php if(isset($web_information->source_code->header)): ?>
  <?php echo $web_information->source_code->header; ?>

<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\mid\resources\views/frontend/panels/styles.blade.php ENDPATH**/ ?>