<?php echo $__env->make('../frontend/partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   


    <div id="app">
      
            <?php echo $__env->make('../frontend/partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
       
    </div>

<?php echo $__env->make('../frontend/partials/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    <?php /**PATH /mnt/01D98767132C6C80/Download/JobFinder-Job-Portal-Laravel-Vue-Script-main/resources/views/layouts/main.blade.php ENDPATH**/ ?>