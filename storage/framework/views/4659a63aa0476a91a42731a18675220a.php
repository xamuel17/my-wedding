<?php $__env->startSection('title', 'Wishes - Faith & Samuel Wedding'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero -->
<div class="relative bg-gradient-to-br from-royal-purple via-royal-purple/90 to-lilac/80 py-20 sm:py-28 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-40 h-40 border border-white/30 rounded-full"></div>
        <div class="absolute bottom-10 right-10 w-60 h-60 border border-white/20 rounded-full"></div>
    </div>
    <div class="relative container mx-auto px-4 sm:px-6 text-center text-white">
        <span class="font-alex text-3xl sm:text-4xl block mb-3 opacity-90" data-aos="fade-down">Share Your Love</span>
        <h1 class="font-cormorant text-4xl sm:text-5xl lg:text-6xl font-semibold text-white mb-4" data-aos="fade-up" data-aos-delay="100">Wedding Wishes</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto font-nunito" data-aos="fade-up" data-aos-delay="200">
            Leave us a heartfelt message or record a video wish. Your words will be treasured forever.
        </p>
    </div>
</div>

<div class="py-12 sm:py-20 bg-gray-50/50">
    <div class="container mx-auto px-4 sm:px-6">
        <!-- Wish Form -->
        <div class="max-w-2xl mx-auto mb-12 sm:mb-16" data-aos="fade-up">
            <form action="<?php echo e(route('wishes.store')); ?>" method="POST" enctype="multipart/form-data" class="wedding-form bg-white rounded-2xl shadow-xl p-6 sm:p-8 border border-gray-100 relative overflow-hidden">
                <?php echo csrf_field(); ?>
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-royal-purple to-lilac"></div>

                <div class="text-center mb-8">
                    <div class="w-14 h-14 bg-gradient-to-br from-royal-purple to-lilac rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-royal-purple/20">
                        <i class="ti-pencil-alt text-white text-xl"></i>
                    </div>
                    <h3 class="font-cormorant text-2xl text-royal-purple mb-1">Send Your Wishes</h3>
                    <p class="text-gray-500 text-sm">Share your heartfelt message with us</p>
                </div>

                <div class="mb-5">
                    <label for="name" class="block font-nunito font-semibold text-gray-700 mb-2 text-sm">Your Name <span class="text-red-400">*</span></label>
                    <input type="text" id="name" name="name" required value="<?php echo e(old('name')); ?>" class="w-full wedding-form-input" placeholder="John Doe">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-5">
                    <label for="message" class="block font-nunito font-semibold text-gray-700 mb-2 text-sm">Your Message <span class="text-red-400">*</span></label>
                    <textarea id="message" name="message" rows="5" required class="w-full wedding-form-input resize-none" placeholder="Wishing you a lifetime of love, happiness, and beautiful memories together..."><?php echo e(old('message')); ?></textarea>
                    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-8">
                    <label class="block font-nunito font-semibold text-gray-700 mb-2 text-sm">Video Wish (Optional)</label>
                    <div class="border-2 border-dashed border-gray-200 rounded-2xl p-6 text-center hover:border-royal-purple/50 transition-colors duration-300 bg-gray-50/50">
                        <div class="w-14 h-14 bg-royal-purple/10 rounded-2xl flex items-center justify-center mx-auto mb-3">
                            <i class="ti-video-camera text-xl text-royal-purple"></i>
                        </div>
                        <p class="text-gray-500 text-sm mb-1">Record a video message (max 100MB)</p>
                        <p class="text-xs text-gray-400 mb-4">MP4, MOV, AVI, WMV formats supported</p>
                        <input type="file" id="video" name="video" accept="video/mp4,video/mov,video/avi,video/wmv" class="hidden">
                        <button type="button" onclick="document.getElementById('video').click()" class="inline-flex items-center px-5 py-2.5 bg-royal-purple/10 text-royal-purple rounded-xl hover:bg-royal-purple hover:text-white transition-all duration-300 text-sm font-nunito font-semibold">
                            <i class="ti-upload mr-2"></i> Choose Video
                        </button>
                        <div id="video-file-info" class="hidden mt-3 text-sm text-royal-purple font-medium"></div>
                    </div>
                    <?php $__errorArgs = ['video'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="text-center">
                    <button type="submit" class="wedding-button inline-flex items-center justify-center px-8 py-4">
                        <i class="ti-heart mr-2"></i> Send My Wishes
                    </button>
                </div>
            </form>
        </div>

        <!-- View Wishes -->
        <div class="text-center mb-12 sm:mb-16" data-aos="fade-up">
            <a href="<?php echo e(route('wishes.showcase')); ?>" class="inline-flex items-center justify-center px-8 py-4 border-2 border-royal-purple text-royal-purple rounded-xl hover:bg-royal-purple hover:text-white transition-all duration-300 font-nunito font-semibold text-sm">
                <i class="ti-book mr-2"></i> View All Wishes
            </a>
        </div>

        <!-- Features -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <?php
                $features = [
                    ['icon' => 'ti-pencil', 'title' => 'Written Wishes', 'desc' => 'Share your heartfelt thoughts and blessings in writing'],
                    ['icon' => 'ti-video-camera', 'title' => 'Video Messages', 'desc' => 'Record a personal video wish up to 100MB'],
                    ['icon' => 'ti-heart', 'title' => 'Forever Treasured', 'desc' => 'Your wishes will be cherished memories for years to come'],
                ];
            ?>
            <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="text-center" data-aos="fade-up" data-aos-delay="<?php echo e($i * 100); ?>">
                    <div class="w-14 h-14 bg-gradient-to-br from-royal-purple to-lilac rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-royal-purple/20">
                        <i class="<?php echo e($f['icon']); ?> text-white text-xl"></i>
                    </div>
                    <h4 class="font-cormorant text-lg mb-2"><?php echo e($f['title']); ?></h4>
                    <p class="text-gray-500 text-sm"><?php echo e($f['desc']); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
document.getElementById('video').addEventListener('change', function() {
    var info = document.getElementById('video-file-info');
    if (this.files.length > 0) {
        info.classList.remove('hidden');
        info.textContent = this.files[0].name + ' (' + (this.files[0].size / 1048576).toFixed(1) + ' MB)';
    }
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wedding-site\resources\views/wishes/index.blade.php ENDPATH**/ ?>