<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="<?php echo e(route('group.store')); ?>">
            <?php echo csrf_field(); ?>
            <label for="name_group">Group Name:</label><br>
            <input 
                type="text" 
                id="name_group" 
                name="name_group" 
                placeholder="<?php echo e(__('Eg: South Bend EMS')); ?>"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="booked">Booked Status:</label>
            <input 
                type="checkbox" 
                id="booked" 
                name="booked" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="accommodation">Current Accommodation if applicable:</label><br>
            <input 
                type="text" 
                id="accommodation" 
                name="accommodation" 
                placeholder="<?php echo e(__('Eg: Hyatt Place')); ?>"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="telephone_primary_contact">Name of Primary Contact:</label><br>
            <input 
                type="text" 
                id="telephone_primary_contact" 
                name="telephone_primary_contact" 
                placeholder="<?php echo e(__('Eg: John Smith')); ?>"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="name_primary_contact">Phone of Primary Contact:</label><br>
            <input 
                type="text" 
                id="name_primary_contact" 
                name="name_primary_contact" 
                placeholder="<?php echo e(__('Eg: 555-555-5555')); ?>"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="email_primary_contact">Email of Primary Contact:</label><br>
            <input 
                type="email" 
                id="email_primary_contact" 
                name="email_primary_contact" 
                placeholder="<?php echo e(__('Eg: frontdesk@company.com')); ?>"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="name_secondary_contact">Name of Secondary Contact:</label><br>
            <input 
                type="text" 
                id="name_secondary_contact" 
                name="name_secondary_contact" 
                placeholder="<?php echo e(__('Eg: Jane Smith')); ?>"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="telephone_secondary_contact">Phone of Secondary Contact:</label><br>
            <input 
                type="text" 
                id="telephone_secondary_contact" 
                name="telephone_secondary_contact" 
                placeholder="<?php echo e(__('Eg: 555-555-5555')); ?>"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="email_secondary_contact">Email of Secondary Contact:</label><br>
            <input 
                type="email" 
                id="email_secondary_contact" 
                name="email_secondary_contact" 
                placeholder="<?php echo e(__('Eg: frontdesk@company.com')); ?>"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="is_ESS_group">ESS:</label>
            <input 
                type="checkbox" 
                id="is_ESS_group" 
                name="is_ESS_group" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="group_count">Group Headcount:</label><br>
            <input 
                type="text" 
                id="group_count" 
                name="group_count" 
                placeholder="<?php echo e(__('Eg: 20')); ?>"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="adult_count">Adult Headcount:</label><br>
            <input 
                type="text" 
                id="adult_count" 
                name="adult_count" 
                placeholder="<?php echo e(__('Eg: 20')); ?>"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="children_count">Child Under-18 Headcount:</label><br>
            <input 
                type="text" 
                id="children_count" 
                name="children_count" 
                placeholder="<?php echo e(__('Eg: 20')); ?>"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="pet_count">Pet Headcount:</label><br>
            <input 
                type="text" 
                id="pet_count" 
                name="pet_count" 
                placeholder="<?php echo e(__('Eg: 20')); ?>"
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <br>
            <label for="need_accessibility">Accessibility Needs?:</label>
            <input 
                type="checkbox" 
                id="need_accessibility" 
                name="need_accessibility" 
                class="block border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => ['class' => 'mt-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-4']); ?><?php echo e(__('Create Group')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </form>

        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="p-6 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800"><?php echo e($group->user->name); ?></span>
                                <small class="ml-2 text-sm text-gray-600"><?php echo e($group->created_at->format('j M Y, g:i a')); ?></small>
                                <?php if (! ($group->created_at->eq($group->updated_at))): ?>
                                <small class="text-sm text-gray-600"> &middot; <?php echo e(__('edited')); ?></small>
                                <?php endif; ?>
                            </div>
                            <?php if($group->user->is(auth()->user())): ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('group.edit', $group)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('group.edit', $group))]); ?>
                                        <?php echo e(__('Edit')); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                    <form method="POST" action="<?php echo e(route('group.destroy', $group)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => route('group.destroy', $group),'onclick' => 'event.preventDefault(); this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('group.destroy', $group)),'onclick' => 'event.preventDefault(); this.closest(\'form\').submit();']); ?>
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
                        <p class="mt-4 text-lg text-gray-900">
                            <b><?php echo e($group->name_group); ?></b>
                            <br>Available Accommodations:
                            <?php echo e($group->booked); ?>

                            <br>Current Bookings:
                            <?php echo e($group->accommodation); ?>

                            <br>Available Rooms:
                            <?php echo e($group->name_primary_contact); ?>

                            <br>Available Accommodations:
                            <?php echo e($group->telephone_primary_contact); ?>

                            <br>Current Bookings:
                            <?php echo e($group->email_primary_contact); ?>

                            <br>Available Rooms:
                            <?php echo e($group->name_secondary_contact); ?>

                            <br>Available Accommodations:
                            <?php echo e($group->telephone_secondary_contact); ?>

                            <br>Current Bookings:
                            <?php echo e($group->email_secondary_contact); ?>

                            <br>Available Rooms:
                            <?php echo e($group->group_count); ?>

                            <br>Available Accommodations:
                            <?php echo e($group->adult_count); ?>

                            <br>Current Bookings:
                            <?php echo e($group->children_count); ?>

                            <br>Available Rooms:
                            <?php echo e($group->pet_count); ?>

                            <br>Available Accommodations:
                            <?php echo e($group->need_accessibility); ?>

                        </p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\test-site\resources\views/group/index.blade.php ENDPATH**/ ?>