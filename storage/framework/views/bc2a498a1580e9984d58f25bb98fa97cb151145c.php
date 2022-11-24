

    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/bootstrap.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/style.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/swiper.css')); ?>" type="text/css" />

<!-- shop Demo Specific Stylesheet -->
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/dark.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/font-icons.css')); ?>" type="text/css" />
<!-- / -->

<!-- Construction Demo Specific Stylesheet -->
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/animate.css')); ?>"
  type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/magnific-popup.css')); ?>" type="text/css" />

<!-- / -->

<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/custom.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/css/colors9bb7.css?color=193532')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/demos/furniture/furniture.css')); ?>" type="text/css" />
<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/demos/furniture/css/fonts.css')); ?>" type="text/css" />

<link rel="stylesheet" href="<?php echo e(asset('themes/frontend/watches/fhm_watches.css')); ?>"
  type="text/css" />

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
.breadcrumb-item + .breadcrumb-item::before {
  float: left;
  padding-right: 0.5rem;
  color: #6c757d;
  content: var(--bs-breadcrumb-divider, "/");
}
</style>

<?php if(isset($web_information->source_code->header)): ?>
  <?php echo $web_information->source_code->header; ?>

<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\FHM_Watches\resources\views/frontend/panels/styles.blade.php ENDPATH**/ ?>