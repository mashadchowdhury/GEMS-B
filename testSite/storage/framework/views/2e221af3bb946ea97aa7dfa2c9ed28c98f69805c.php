<script>
    mapboxgl.accessToken = '<?php echo e(config('mapbox.mapbox_token', null)); ?>';

    <?php if($rtl ?? ''): ?>
        mapboxgl.setRTLTextPlugin(
            'https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-rtl-text/v0.2.3/mapbox-gl-rtl-text.js',
            null,
            true
        );
    <?php endif; ?>

    const map = new mapboxgl.Map({
        container: '<?php echo e($id); ?>',
        style: 'mapbox://styles/<?php echo e($mapStyle); ?>',
        center: [<?php echo e($center['long'] ?? $center[0]); ?>, <?php echo e($center['lat'] ?? $center[1]); ?>],
        zoom: <?php echo e($zoom); ?>,
        interactive: <?php echo e($interactive ? 'true' : 'false'); ?>,
        cooperativeGestures: <?php echo e($cooperativeGestures ? 'true' : 'false'); ?>,
    });

    <?php echo e($navigationControls ? 'map.addControl(new mapboxgl.NavigationControl());' : ''); ?>


    map.on('load', function() {
        map.resize();
    });


    <?php if($draggable ?? ''): ?>
        let long = 0;
        let lat = 0;
        const marker = new mapboxgl.Marker({
                draggable: true
            })
            .setLngLat([0, 0])
            .addTo(map);
    <?php endif; ?>

    <?php $__currentLoopData = $markers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $marker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <?php if(isset($marker['icon'])): ?>
            const el<?php echo e($key); ?> = document.createElement('div');
            el<?php echo e($key); ?>.className = 'marker';
            el<?php echo e($key); ?>.innerHTML = `<?php echo $marker['icon']; ?>`;
            new mapboxgl.Marker(el<?php echo e($key); ?>)
                .setLngLat([<?php echo e($marker['long']); ?>, <?php echo e($marker['lat']); ?>])
            <?php if(isset($marker['description'])): ?>
                .setPopup(new mapboxgl.Popup({
                    offset: 25
                }).setText('<?php echo e($marker['description']); ?>'))
            <?php endif; ?>
            .addTo(map);
        <?php else: ?>
            new mapboxgl.Marker()
                .setLngLat([<?php echo e($marker['long']); ?>, <?php echo e($marker['lat']); ?>])
            <?php if(isset($marker['description'])): ?>
                .setPopup(new mapboxgl.Popup({
                    offset: 25
                }).setText('<?php echo e($marker['description']); ?>'))
            <?php endif; ?>
            .addTo(map);
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</script>
<?php /**PATH D:\Work\COSC499\GEMS-B\testSite\vendor\koossaayy\laravel-mapbox\src\/../resources/views/includes/script.blade.php ENDPATH**/ ?>