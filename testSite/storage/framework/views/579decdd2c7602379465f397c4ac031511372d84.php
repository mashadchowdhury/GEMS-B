<style>
    #<?php echo e($id); ?> {
        position: absolute;
        top: 0;
        bottom: 0;
        <?php echo e($attributes['style'] && Str::contains($attributes['style'], 'width') ? $attributes['style'] : $attributes['style'] . 'width: 100%;'); ?>

    }

    .marker {
        display: block;
        border: none;
        cursor: pointer;
        padding: 0;
    }
</style>

<div id="<?php echo e($id); ?>" class="<?php echo e($attributes['class'] ?? ''); ?>"></div>

<?php echo $__env->make('mapbox::includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\Work\COSC499\GEMS-B\testSite\vendor\koossaayy\laravel-mapbox\src\/../resources/views/components/mapbox.blade.php ENDPATH**/ ?>