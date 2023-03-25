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
                    <th scope="col" class="px-1 py-4">Name</th>
                    <th scope="col" class="px-1 py-4">Booked</th>
                    <th scope="col" class="px-1 py-4">Accommodation</th>
                    <th scope="col" class="px-1 py-4">Primary Contact</th>
                    <th scope="col" class="px-1 py-4">Primary Phone</th>
                    <th scope="col" class="px-1 py-4">Primary Email</th>
                    <th scope="col" class="px-1 py-4">Secondary Contact</th>
                    <th scope="col" class="px-1 py-4">Secondary Phone</th>
                    <th scope="col" class="px-1 py-4">Secondary Email</th>
                    <th scope="col" class="px-1 py-4">ESS-Group</th>
                    <th scope="col" class="px-1 py-4">Headcount</th>
                    <th scope="col" class="px-1 py-4">Adult Count</th>
                    <th scope="col" class="px-1 py-4">Child Count</th>
                    <th scope="col" class="px-1 py-4">Pet Count</th>
                    <th scope="col" class="px-1 py-4">Accessibility Needs</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-1 py-4 font-normal text-gray-900">
                        <div class="text-sm"><?php echo e($group->name_group); ?></div>
                    </th>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($group->booked); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($group->name_accommodation); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($group->name_primary_contact); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($group->telephone_primary_contact); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($group->email_primary_contact); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($group->name_secondary_contact); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($group->telephone_secondary_contact); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($group->email_secondary_contact); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($group->is_ESS_group); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($group->group_count); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($group->adult_count); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($group->children_count); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($group->pet_count); ?></div>
                    </td>
                    <td class="px-1 py-4 text-sm font-medium text-gray-700">
                        <div><?php echo e($group->need_accessibility); ?></div>
                    </td>
                    <td class="px-1 py-4">
                    <div class="flex justify-end">
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
                                $count = DB::table('groups')->count();
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
                    id="name_accommodation" 
                    name="name_accommodation" 
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
        </span>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH D:\Work\COSC499\GEMS-B\testSite\resources\views/group/index.blade.php ENDPATH**/ ?>