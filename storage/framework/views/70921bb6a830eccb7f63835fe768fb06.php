<?php $__env->startSection('title', 'Gallery - Faith & Samuel — Together Forever'); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/photoswipe@5.4.4/dist/photoswipe.css">
<style>
    /* PhotoSwipe custom theme */
    .pswp {
        --pswp-bg: rgba(0, 0, 0, 0.95);
        --pswp-icon-color: #FFFFFF;
        --pswp-icon-color-secondary: #C8A2C8;
        --pswp-error-text-color: #FFFFFF;
    }
    .pswp__top-bar {
        background: rgba(0, 0, 0, 0.8);
    }
    .pswp__counter {
        color: #C8A2C8;
    }
    .pswp__button--arrow--left::before,
    .pswp__button--arrow--right::before {
        background: #FFFFFF;
    }
    .pswp__button:hover {
        color: #C8A2C8;
    }
    
    /* PhotoSwipe background override removed - videos use separate modal */
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Gallery Hero -->
<div class="relative bg-gradient-to-br from-royal-purple via-royal-purple/90 to-lilac/80 py-20 sm:py-28 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-40 h-40 border border-white/30 rounded-full"></div>
        <div class="absolute bottom-10 right-10 w-60 h-60 border border-white/20 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 border border-white/10 rounded-full"></div>
    </div>
    <div class="relative container mx-auto px-4 sm:px-6 text-center text-white">
        <span class="font-alex text-3xl sm:text-4xl block mb-3 opacity-90" data-aos="fade-down">Our Memories</span>
        <h1 class="font-cormorant text-4xl sm:text-5xl lg:text-6xl font-semibold text-white mb-4" data-aos="fade-up" data-aos-delay="100">Gallery</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto text-base sm:text-lg font-nunito" data-aos="fade-up" data-aos-delay="200">
            Every image tells a part of our love story.
        </p>
        <div class="mt-6 flex justify-center gap-2" data-aos="fade-up" data-aos-delay="300">
            <span class="w-2 h-2 rounded-full bg-white/60"></span>
            <span class="w-8 h-2 rounded-full bg-white"></span>
            <span class="w-2 h-2 rounded-full bg-white/60"></span>
        </div>
    </div>
</div>

<!-- Filter Tabs -->
<div class="sticky top-0 z-30 bg-white/90 backdrop-blur-md border-b border-gray-100 shadow-sm" data-aos="fade-down" data-aos-delay="100">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="flex justify-center gap-2 sm:gap-4 py-4 flex-wrap" x-data="{ filter: 'all' }">
            <button @click="filter = 'all'; filterGallery('all')"
                    :class="filter === 'all' ? 'bg-royal-purple text-white shadow-lg' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                    class="px-5 py-2 rounded-full text-sm font-nunito font-semibold transition-all duration-300">
                All
            </button>
            <button @click="filter = 'image'; filterGallery('image')"
                    :class="filter === 'image' ? 'bg-royal-purple text-white shadow-lg' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                    class="px-5 py-2 rounded-full text-sm font-nunito font-semibold transition-all duration-300">
                <i class="ti-image mr-1"></i> Photos
            </button>
            <button @click="filter = 'video'; filterGallery('video')"
                    :class="filter === 'video' ? 'bg-royal-purple text-white shadow-lg' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                    class="px-5 py-2 rounded-full text-sm font-nunito font-semibold transition-all duration-300">
                <i class="ti-video-camera mr-1"></i> Videos
            </button>
        </div>
    </div>
</div>

<!-- Gallery Content -->
<div class="py-10 sm:py-16 bg-gray-50/50">
    <div class="container mx-auto px-4 sm:px-6">
        <?php if(count($galleryItems) > 0): ?>
            <!-- Magazine Masonry Gallery -->
            <div class="gallery-masonry" id="wedding-gallery">
                <?php $__currentLoopData = $galleryItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item['type'] === 'image'): ?>
                    <div class="gallery-item gallery-image group loading"
                         data-pswp-src="<?php echo $item['src']; ?>"
                         data-pswp-width="1920"
                         data-pswp-height="1080"
                         data-pswp-type="image"
                         data-caption="<?php echo e($item['caption']); ?>"
                         data-aos="fade-up"
                         data-aos-delay="<?php echo e(($index % 5) * 80); ?>">
                        <!-- Shimmer wrapper with loading text -->
                        <div class="shimmer-wrapper">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="w-10 h-10 border-2 border-lilac/30 border-t-lilac rounded-full animate-spin mx-auto mb-2"></div>
                                    <p class="text-sm text-white/80 font-nunito">Image loading...</p>
                                </div>
                            </div>
                        </div>

                    <a href="<?php echo $item['src']; ?>" 
                            data-pswp-src="<?php echo $item['src']; ?>"
                            data-pswp-width="" 
                            data-pswp-height="" 
                            data-pswp-type="image"
                            data-caption="<?php echo e($item['caption']); ?>"
                            target="_blank">

                        <img src="<?php echo e($item['thumb']); ?>"
                             alt="<?php echo e($item['caption']); ?>"
                             class="w-full h-auto opacity-0 transition-opacity duration-300"
                             loading="lazy"
                             onload="window.handleMediaLoad(this.closest('.gallery-item'))"
                             onerror="window.handleMediaError(this.closest('.gallery-item'))">
                            </a>
                    <?php else: ?>
                    <div class="gallery-item group loading"
                         data-pswp-src="<?php echo $item['src']; ?>"
                         data-pswp-type="video"
                         data-pswp-width="1920"
                         data-pswp-height="1080"
                         data-caption="<?php echo e($item['caption']); ?>"
                         data-aos="fade-up"
                         data-aos-delay="<?php echo e(($index % 5) * 80); ?>">
                        <!-- Shimmer wrapper with loading text -->
                        <div class="shimmer-wrapper">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center">
                                    <div class="w-10 h-10 border-2 border-lilac/30 border-t-lilac rounded-full animate-spin mx-auto mb-2"></div>
                                    <p class="text-sm text-white/80 font-nunito">Video loading...</p>
                                </div>
                            </div>
                        </div>
                        <video class="w-full h-auto opacity-0 transition-opacity duration-300" 
                               muted 
                               preload="metadata"
                               
                            <source src="<?php echo $item['src']; ?>" type="video/mp4">
                        </video>
                        <!-- Video play overlay -->
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/20 transition-all duration-500 cursor-pointer z-30"
                             onclick="console.log('Video overlay clicked'); openVideoModal('<?php echo $item['src']; ?>', '<?php echo e($item['caption']); ?>'); return false;"
                             >
                            <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-white flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-300">
                                <i class="ti-control-play text-2xl ml-1" style="color: #4B0082;"></i>
                            </div>
                        </div>
                    <?php endif; ?>

                        <!-- Hover overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-5 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                <h4 class="font-cormorant text-lg sm:text-xl text-white mb-1"><?php echo e($item['caption']); ?></h4>
                                <div class="flex items-center gap-2 text-white/70 text-xs">
                                    <i class="<?php echo e($item['type'] === 'video' ? 'ti-video-camera' : 'ti-camera'); ?>"></i>
                                    <span><?php echo e($item['type'] === 'video' ? 'Video' : 'Photo'); ?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Corner icon -->
                        <div class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 text-white text-xs">
                            <i class="ti-zoom-in"></i>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Gallery count -->
            <div class="text-center mt-10" data-aos="fade-up">
                <p class="font-nunito text-gray-400 text-sm">
                    <span class="text-royal-purple font-semibold"><?php echo e(count($galleryItems)); ?></span> memories captured
                </p>
            </div>
        <?php else: ?>
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-lilac/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ti-image text-4xl text-royal-purple"></i>
                </div>
                <h3 class="font-cormorant text-2xl text-gray-700 mb-4">Gallery Coming Soon</h3>
                <p class="text-gray-600 max-w-md mx-auto">
                    We're curating our beautiful memories. Check back soon!
                </p>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Tips Section -->
<?php if(count($galleryItems) > 0): ?>
<div class="py-12 sm:py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="0">
                    <div class="w-14 h-14 bg-gradient-to-br from-royal-purple to-lilac rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-royal-purple/20">
                        <i class="ti-zoom-in text-white text-xl"></i>
                    </div>
                    <h4 class="font-cormorant text-lg mb-2">Click to View</h4>
                    <p class="text-sm text-gray-500">Open any image full-screen</p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-gradient-to-br from-royal-purple to-lilac rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-royal-purple/20">
                        <i class="ti-arrows-horizontal text-white text-xl"></i>
                    </div>
                    <h4 class="font-cormorant text-lg mb-2">Swipe or Arrow</h4>
                    <p class="text-sm text-gray-500">Navigate between images</p>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-gradient-to-br from-royal-purple to-lilac rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-royal-purple/20">
                        <i class="ti-video-camera text-white text-xl"></i>
                    </div>
                    <h4 class="font-cormorant text-lg mb-2">Watch Videos</h4>
                    <p class="text-sm text-gray-500">Play videos in lightbox</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Video Modal -->
<div id="video-modal" class="fixed inset-0 z-[9999] hidden" onclick="if(event.target===this)closeVideoModal()">
    <div class="absolute inset-0 bg-black/95"></div>
    <button onclick="console.log('Close button clicked'); closeVideoModal(); return false;" class="absolute top-4 right-4 z-40 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all">
        <i class="ti-close text-lg"></i>
    </button>
    <div class="relative flex items-center justify-center w-full h-full p-4 sm:p-8 z-20">
        <div class="text-center">
            <video id="modal-video" class="max-w-full max-h-full rounded-xl shadow-2xl" controls playsinline preload="metadata">
            </video>
            <div class="video-caption mt-4 text-white text-lg font-cormorant hidden"></div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<!-- PhotoSwipe JS -->
<script src="https://cdn.jsdelivr.net/npm/photoswipe@5.4.4/dist/umd/photoswipe.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/photoswipe@5.4.4/dist/umd/photoswipe-lightbox.umd.min.js"></script>
<style>
/* Optimized shimmer loading effect */
.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 0.75rem;
}

.gallery-item.loading .shimmer-wrapper {
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(75, 0, 130, 0.1) 25%, rgba(200, 162, 200, 0.2) 50%, rgba(75, 0, 130, 0.1) 75%);
    background-size: 200% 100%;
    animation: shimmer 1.2s ease-in-out infinite;
    z-index: 2;
    min-height: 200px;
    backdrop-filter: blur(2px);
    border-radius: 0.75rem;
}

@keyframes shimmer {
    0% { background-position: -200% 0; opacity: 0.8; }
    50% { opacity: 1; }
    100% { background-position: 200% 0; opacity: 0.8; }
}

.gallery-item.loaded .shimmer-wrapper {
    opacity: 0;
    transition: opacity 0.3s ease-out;
    pointer-events: none;
}

.gallery-item.loading img,
.gallery-item.loading video {
    opacity: 0;
    transform: scale(0.95);
    transition: opacity 0.3s ease-out, transform 0.3s ease-out;
}

.gallery-item.loaded img,
.gallery-item.loaded video {
    opacity: 1;
    transform: scale(1);
}

/* Preload critical images */
.gallery-item img[src*="thumb"] {
    content-visibility: auto;
    contain-intrinsic-size: 400px 300px;
}
</style>
<script>
// Optimized media loading functions
window.handleMediaLoad = function(galleryItem) {
    if (galleryItem) {
        galleryItem.classList.remove('loading');
        galleryItem.classList.add('loaded');
        
        // Get the image and set dynamic dimensions
        const img = galleryItem.querySelector('img');
        const link = galleryItem.querySelector('a');
        if (img && link) {
            // Create a new image object to get real dimensions
            const tempImg = new Image();
            tempImg.onload = function() {
                // Set the actual dimensions for PhotoSwipe
                link.setAttribute('data-pswp-width', this.naturalWidth);
                link.setAttribute('data-pswp-height', this.naturalHeight);
                
                // Fade in the image
                setTimeout(() => {
                    img.style.opacity = '1';
                    img.style.transform = 'scale(1)';
                }, 50);
            };
            tempImg.src = img.src;
        } else {
            // Fallback for non-image media
            const media = galleryItem.querySelector('img, video');
            if (media) {
                setTimeout(() => {
                    media.style.opacity = '1';
                    media.style.transform = 'scale(1)';
                }, 50);
            }
        }
    }
};

window.handleMediaError = function(galleryItem) {
    if (galleryItem) {
        galleryItem.classList.remove('loading');
        galleryItem.classList.add('loaded', 'error');
        
        const media = galleryItem.querySelector('img, video');
        if (media) {
            media.style.opacity = '1';
            media.style.transform = 'scale(1)';
        }
        
        // Show error state
        const shimmer = galleryItem.querySelector('.shimmer-wrapper');
        if (shimmer) {
            shimmer.innerHTML = '<div class="absolute inset-0 flex items-center justify-center"><div class="text-center"><i class="ti-alert text-2xl text-red-400 mb-2 block"></i><p class="text-sm text-white/80">Failed to load</p></div></div>';
        }
    }
};

// Initialize PhotoSwipe and optimize loading
document.addEventListener('DOMContentLoaded', function() {
    // Initialize PhotoSwipe
    const lightbox = new PhotoSwipeLightbox({
        gallery: '#wedding-gallery',
        children: '.gallery-item',
        pswpModule: PhotoSwipe,
        showHideAnimationType: 'fade',
        bgOpacity: 0.95,
        spacing: 0.12,
        allowPanToNext: true,
        loop: true,
        pinchToClose: true,
        tapToClose: true,
        closeOnVerticalDrag: true,
        mouseMovePan: true,
        arrowKeys: true,
        history: false,
        preload: [1, 2],
        errorMsg: 'The image could not be loaded'
    });
    
    lightbox.on('beforeOpen', () => {
        document.body.style.overflow = 'hidden';
    });
    
    lightbox.on('close', () => {
        document.body.style.overflow = '';
    });
    
    lightbox.init();
    
    // Preload first few images for better UX
    const galleryItems = document.querySelectorAll('.gallery-item');
    const itemsToPreload = Math.min(6, galleryItems.length);
    
    for (let i = 0; i < itemsToPreload; i++) {
        const item = galleryItems[i];
        const img = item.querySelector('img');
        if (img && !img.complete) {
            const preloadImg = new Image();
            preloadImg.src = img.src;
        }
    }
    
    // Check for already loaded media
    document.querySelectorAll('.gallery-item img, .gallery-item video').forEach(function(media) {
        const galleryItem = media.closest('.gallery-item');
        
        if (media.complete && media.naturalHeight !== 0) {
            window.handleMediaLoad(galleryItem);
        } else if (media.readyState >= 2) {
            window.handleMediaLoad(galleryItem);
        } else {
            // Add optimized fallback
            setTimeout(() => {
                if (galleryItem.classList.contains('loading')) {
                    window.handleMediaLoad(galleryItem);
                }
            }, 2000);
        }
    });
});

// Video modal functions (keep for videos)
function openVideoModal(src, caption = '') {
    console.log('openVideoModal called with:', src, caption);
    const modal = document.getElementById('video-modal');
    const video = document.getElementById('modal-video');
    
    if (!modal || !video) {
        console.error('Video modal or video element not found');
        return;
    }
    
    console.log('Setting video src:', src);
    video.src = src;
    
    // Set caption if provided
    const captionElement = modal.querySelector('.video-caption');
    if (captionElement && caption) {
        captionElement.textContent = caption;
        captionElement.style.display = 'block';
    } else if (captionElement) {
        captionElement.style.display = 'none';
    }
    
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    console.log('Modal should be visible now');
    
    // Try to play the video
    video.play().then(() => {
        console.log('Video playing successfully');
    }).catch(error => {
        console.error('Video play error:', error);
    });
}

function closeVideoModal() {
    console.log('closeVideoModal called');
    const modal = document.getElementById('video-modal');
    const video = document.getElementById('modal-video');
    
    if (!modal || !video) {
        console.error('Modal or video element not found in close function');
        return;
    }
    
    console.log('Pausing video and closing modal');
    video.pause();
    video.src = '';
    modal.classList.add('hidden');
    document.body.style.overflow = '';
    console.log('Modal should be hidden now');
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeVideoModal();
    }
});

function filterGallery(type) {
    document.querySelectorAll('#wedding-gallery .gallery-item').forEach(function(item) {
        if (type === 'all' || item.dataset.pswpType === type) {
            item.style.display = '';
            item.style.opacity = '0';
            setTimeout(() => { item.style.opacity = '1'; }, 50);
        } else {
            item.style.display = 'none';
        }
    });
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wedding-site\resources\views/gallery.blade.php ENDPATH**/ ?>