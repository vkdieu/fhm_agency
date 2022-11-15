<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        a {
            text-decoration: none;
        }
    </style>

    <form action="<?php echo e(route('video_create')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label for="title">Tiêu Đề</label><br>
        <input type="text" id="title" name="title"><br><br>
        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="form-group">
            <div> Thêm video</div>
            <input type="file" name="file">
           
        </div><br>
        <label for="order">Số thứ tự</label><br>
        <input type="number" min="0" id="order" name="order"><br><br>
        <label for="Chọn Danh Mục">Chọn Danh Mục</label><br>
        <select name="category" id="Chọn Danh Mục">
            <option value="">Chọn</option>
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>">
                    <?php echo e($item->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select> <br><br>
        <button type="submit">Thêm Mới</button> <br><br>

        <a href="<?php echo e(route('video_index')); ?>">Danh sách video</a>
    </form>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\fhm\resources\views/admin/pages/video/create.blade.php ENDPATH**/ ?>