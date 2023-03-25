<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">


     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <?php echo e(__("You're logged in!")); ?>

                </div>
            </div>
                
            </div>
    </div> -->

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <?php if (isset($component)) { $__componentOriginal1f377f8327a5003f326233d07cda773bd86f6d98 = $component; } ?>
<?php $component = Koossaayy\LaravelMapbox\Components\Mapbox::resolve(['id' => 'map','center' => ['long' => -120, 'lat' => 49.93],'navigationControls' => true,'interactive' => true,'markers' => [['long' => -119.5, 'lat' => 49.89,'description' => 'Kelowna'], 
    ['long' => -120.33, 'lat' => 50.67,'description' => 'Kamloops 1'], 
    ['long' => -120.5, 'lat' => 50.79,'description' => 'Kamloops 2'],
    ['long' => -120.79, 'lat' => 50.11,'description' => 'Merritt'],
    ['long' => -122.75, 'lat' => 53.92,'description' => 'Prince George'],
    ['long' => -121.44, 'lat' => 49.38,'description' => 'Hope'],
    ['long' => -117.66, 'lat' => 49.32,'description' => 'Castlegar']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('mapbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Koossaayy\LaravelMapbox\Components\Mapbox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'hellomap','style' => 'height: 500px; width: 1175px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f377f8327a5003f326233d07cda773bd86f6d98)): ?>
<?php $component = $__componentOriginal1f377f8327a5003f326233d07cda773bd86f6d98; ?>
<?php unset($__componentOriginal1f377f8327a5003f326233d07cda773bd86f6d98); ?>
<?php endif; ?>   
                    
    </body>
    
    
   
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\Work\COSC499\GEMS-B\testSite\resources\views/dashboard.blade.php ENDPATH**/ ?>