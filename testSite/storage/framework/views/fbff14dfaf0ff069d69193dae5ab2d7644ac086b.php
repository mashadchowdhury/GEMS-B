<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="relative mt-2 flex">
        <div class="relative flex-auto m-5 p-5 w-full h-full overflow-y-auto overflow-x-hidden rounded-lg border border-gray-200 shadow-md">
            <!-- Main Body -->
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-1 py-4">Accommodation</th>
                    <th scope="col" class="px-1 py-4">Region Location</th>
                    <th scope="col" class="px-1 py-4">Address</th>
                    <th scope="col" class="px-1 py-4">Email</th>
                    <th scope="col" class="px-1 py-4">Room Type</th>
                    <th scope="col" class="px-1 py-4">Number of Rooms</th>
                    <th scope="col" class="px-1 py-4">Number of Beds</th>
                    <th scope="col" class="px-1 py-4">ESS Support</th>
                    <th scope="col" class="px-1 py-4">Nearby Restaurants</th>
                    <th scope="col" class="px-1 py-4">Pet-friendly</th>
                    <th scope="col" class="px-1 py-4">Disability Access</th>
                    <th scope="col" class="px-1 py-4">Wheelchair Access</th>
                    <th scope="col" class="px-1 py-4">Walker Access</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <?php $__currentLoopData = $accommodation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accommodation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-1 py-4 font-normal text-gray-900">
                        <div class="text-sm"><?php echo e($accommodation->name_accommodation); ?></div>
                    </th>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($accommodation->name_region); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($accommodation->address); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($accommodation->email_accommodation); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($accommodation->room_type); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($accommodation->number_of_rooms); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($accommodation->number_of_beds); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($accommodation->ESS_support); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($accommodation->restaurant_available); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($accommodation->pets_allowed); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($accommodation->accessibility_available); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($accommodation->accessibility_wheelchair); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($accommodation->accessibility_walker); ?></div>
                    </td>
                    <td class="px-1 py-4">
                    <div class="flex justify-end">
                        <?php if($accommodation->user->is(auth()->user())): ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                             <?php $__env->slot('trigger', null, []); ?> 
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                             <?php $__env->endSlot(); ?>
                             <?php $__env->slot('content', null, []); ?> 
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('accommodation.edit', $accommodation)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('accommodation.edit', $accommodation))]); ?>
                                    <?php echo e(__('Edit')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                <form method="POST" action="<?php echo e(route('accommodation.destroy', $accommodation)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('accommodation.destroy', $accommodation),'onclick' => 'event.preventDefault(); this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('accommodation.destroy', $accommodation)),'onclick' => 'event.preventDefault(); this.closest(\'form\').submit();']); ?>
                                        <?php echo e(__('Delete')); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                </form>
                             <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php endif; ?>
                    </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <!--Bottom Bar-->
            <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            <?php
                                $count = DB::table('accommodations')->count();
                            ?>
                            Showing
                            <span class="font-medium">
                                <?php 
                                    if ($count > 0)
                                        echo "1";
                                    else
                                        echo "0";
                                ?>
                            </span>
                            to
                            <span class="font-medium">
                                <?php 
                                    if ($count < 20)
                                        echo $count;
                                    else
                                        echo "20";
                                ?>
                            </span>
                            of
                            <span class="font-medium">
                                <?php 
                                    echo $count;
                                ?>
                            </span>
                            results
                        </p>
                    </div>
                    <div>
                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                            <span class="sr-only">Previous</span>
                            <!-- Heroicon name: mini/chevron-left -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                            </svg>
                            </a>
                            <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                            <a href="#" aria-current="page" class="relative z-10 inline-flex items-center border border-indigo-500 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20">1</a>
                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
                            <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
                            <span class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
                            <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">8</a>
                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">9</a>
                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">10</a>
                            <a href="#" class="relative inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                            <span class="sr-only">Next</span>
                            <!-- Heroicon name: mini/chevron-right -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
        <span  class="p-4 text-sm bg-white rounded-lg border border-gray-200 shadow-md">
            <!-- Pop-up Form -->
            <form method="POST" action="<?php echo e(route('accommodation.store')); ?>">
                <?php echo csrf_field(); ?>
                <label for="name_accommodation">Name of Accommodation:</label><br>
                <input 
                    type="text" 
                    id="name_accommodation" 
                    name="name_accommodation" 
                    placeholder="<?php echo e(__('Eg: Hyatt Place')); ?>"
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <br>
                <label for="address">Address of Accommodation:</label><br>
                <input 
                    type="text" 
                    id="address" 
                    name="address" 
                    placeholder="<?php echo e(__('Eg: 1800 Main St.')); ?>"
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <br>
                <label for="email_accommodation">Email of Accommodation:</label><br>
                <input 
                    type="email" 
                    id="email_accommodation" 
                    name="email_accommodation" 
                    placeholder="<?php echo e(__('Eg: frontdesk@company.com')); ?>"
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <br>
                <label for="room_type">Room Type:</label><br>
                <input 
                    type="text" 
                    id="room_type" 
                    name="room_type" 
                    placeholder="<?php echo e(__('Eg: Gymnasium, Hotel')); ?>"
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <br>
                <label for="number_of_rooms">Number of Rooms:</label><br>
                <input 
                    type="text" 
                    id="number_of_rooms" 
                    name="number_of_rooms" 
                    placeholder="<?php echo e(__('Eg: 23')); ?>"
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <br>
                <label for="number_of_beds">Number of Beds:</label><br>
                <input 
                    type="text" 
                    id="number_of_beds" 
                    name="number_of_beds" 
                    placeholder="<?php echo e(__('Eg: 58')); ?>"
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <br>
                <label for="ESS_support">ESS Supported here?:</label>
                <input 
                    type="checkbox" 
                    id="ESS_support" 
                    name="ESS_support" 
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <br>
                <label for="restaurant_available">Restaurants available nearby?:</label>
                <input 
                    type="checkbox" 
                    id="restaurant_available" 
                    name="restaurant_available" 
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <br>
                <label for="pets_allowed">Pets allowed?:</label>
                <input 
                    type="checkbox" 
                    id="pets_allowed" 
                    name="pets_allowed" 
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <br>
                <label for="accessibility_available">Disability access available?:</label>
                <input 
                    type="checkbox" 
                    id="accessibility_available" 
                    name="accessibility_available" 
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <br>
                <label for="accessibility_wheelchair">Wheelchair access available?:</label>
                <input 
                    type="checkbox" 
                    id="accessibility_wheelchair" 
                    name="accessibility_wheelchair" 
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <br>
                <label for="accessibility_walker">Walker access available?:</label>
                <input 
                    type="checkbox" 
                    id="accessibility_walker" 
                    name="accessibility_walker" 
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <br>
                <label for="name_region">Location/Region:</label><br>
                <input 
                    type="text" 
                    id="name_region" 
                    name="name_region" 
                    placeholder="<?php echo e(__('Eg: Kelowna')); ?>"
                    class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => ['class' => 'mt-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-4']); ?><?php echo e(__('Create Accommodation')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </form>
        </span>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH D:\Work\COSC499\GEMS-B\testSite\resources\views/accommodation/index.blade.php ENDPATH**/ ?>