<?php $__env->startSection('title', 'Wishes Showcase - Faith & Samuel Wedding'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero -->
<div class="relative bg-gradient-to-br from-royal-purple via-royal-purple/90 to-lilac/80 py-20 sm:py-28 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-20 w-40 h-40 border border-white/30 rounded-full"></div>
        <div class="absolute bottom-10 left-10 w-60 h-60 border border-white/20 rounded-full"></div>
    </div>
    <div class="relative container mx-auto px-4 sm:px-6 text-center text-white">
        <span class="font-alex text-3xl sm:text-4xl block mb-3 opacity-90" data-aos="fade-down">Heartfelt Messages</span>
        <h1 class="font-cormorant text-4xl sm:text-5xl lg:text-6xl font-semibold text-white mb-4" data-aos="fade-up" data-aos-delay="100">Wedding Wishes</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto font-nunito" data-aos="fade-up" data-aos-delay="200">
            Read the beautiful messages from our loved ones. Each word is a precious gift.
        </p>
    </div>
</div>

<div class="py-12 sm:py-20 bg-gray-50/50">
    <div class="container mx-auto px-4 sm:px-6">
        <!-- Add Wish Button -->
        <div class="text-center mb-10" data-aos="fade-up">
            <a href="<?php echo e(route('wishes')); ?>" class="wedding-button inline-flex items-center justify-center">
                <i class="ti-plus mr-2"></i> Add Your Wish
            </a>
        </div>

        <?php if(count($wishes) > 0): ?>
            <div class="wishes-grid">
                <?php $__currentLoopData = $wishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="wish-card" data-aos="fade-up">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-royal-purple to-lilac rounded-full flex items-center justify-center flex-shrink-0">
                                    <i class="ti-user text-white text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-cormorant text-lg text-gray-800 leading-tight"><?php echo e($wish->name); ?></h4>
                                    <p class="text-xs text-gray-400"><?php echo e($wish->created_at->format('F j, Y')); ?></p>
                                </div>
                            </div>
                            <i class="ti-heart text-lilac heart-animation text-sm"></i>
                        </div>

                        <p class="text-gray-600 leading-relaxed text-sm mb-3"><?php echo e($wish->message); ?></p>

                        <?php if($wish->video_path): ?>
                            <div class="mt-3 relative rounded-xl overflow-hidden bg-black">
                                <video class="w-full max-h-80" controls preload="metadata">
                                    <source src="<?php echo e(asset('storage/' . $wish->video_path)); ?>" type="video/mp4">
                                </video>
                                <div class="absolute top-2 right-2 bg-royal-purple/80 text-white px-2 py-0.5 rounded-full text-[10px] backdrop-blur-sm">
                                    <i class="ti-video-camera mr-1"></i> Video
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="mt-3 pt-3 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-xs text-gray-400"><i class="ti-heart mr-1"></i> Sent with love</span>
                            <button class="text-lilac hover:text-royal-purple transition-colors text-sm" onclick="this.classList.toggle('text-red-500')">
                                <i class="ti-heart"></i>
                            </button>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Stats -->
            <div class="mt-12 sm:mt-16" data-aos="fade-up">
                <div class="bg-gradient-to-br from-wedding-pink to-white rounded-2xl p-6 sm:p-8 shadow-md">
                    <div class="grid grid-cols-3 gap-4 text-center">
                        <div>
                            <div class="text-2xl sm:text-3xl font-bold gradient-text font-nunito mb-1"><?php echo e(count($wishes)); ?></div>
                            <div class="text-gray-500 text-xs sm:text-sm">Total Wishes</div>
                        </div>
                        <div>
                            <div class="text-2xl sm:text-3xl font-bold gradient-text font-nunito mb-1"><?php echo e($wishes->whereNotNull('video_path')->count()); ?></div>
                            <div class="text-gray-500 text-xs sm:text-sm">Video Messages</div>
                        </div>
                        <div>
                            <div class="text-2xl sm:text-3xl font-bold gradient-text font-nunito mb-1"><?php echo e($wishes->where('created_at', '>=', now()->subDays(7))->count()); ?></div>
                            <div class="text-gray-500 text-xs sm:text-sm">This Week</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10" data-aos="fade-up">
                <a href="<?php echo e(route('wishes')); ?>" class="inline-flex items-center justify-center px-8 py-4 border-2 border-royal-purple text-royal-purple rounded-xl hover:bg-royal-purple hover:text-white transition-all duration-300 font-nunito font-semibold text-sm">
                    <i class="ti-plus mr-2"></i> Add Your Own Wish
                </a>
            </div>
        <?php else: ?>
            <div class="text-center py-16" data-aos="fade-up">
                <div class="w-20 h-20 bg-royal-purple/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ti-heart text-3xl text-royal-purple"></i>
                </div>
                <h3 class="font-cormorant text-2xl text-gray-700 mb-3">No Wishes Yet</h3>
                <p class="text-gray-500 max-w-md mx-auto mb-8 text-sm">Be the first to share your heartfelt wishes with us!</p>
                <a href="<?php echo e(route('wishes')); ?>" class="wedding-button inline-flex items-center justify-center">
                    <i class="ti-heart mr-2"></i> Send First Wish
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wedding-site\resources\views/wishes/showcase.blade.php ENDPATH**/ ?>