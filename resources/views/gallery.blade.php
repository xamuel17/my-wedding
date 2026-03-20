@extends('layouts.app')

@section('title', 'Gallery - Faith & Samuel — Together Forever')

@section('content')
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
            Every image tells a part of our love story. Click any photo to view it in full.
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
        @if(count($galleryItems) > 0)
            <!-- Magazine Masonry Gallery -->
            <div class="gallery-masonry" id="wedding-gallery">
                @foreach($galleryItems as $index => $item)
                    @if($item['type'] === 'image')
                    <div class="gallery-item gallery-image group loading"
                         data-type="image"
                         data-src="{!! $item['src'] !!}"
                         data-sub-html="<h4 class='font-cormorant'>{{ $item['caption'] }}</h4>"
                         data-aos="fade-up"
                         data-aos-delay="{{ ($index % 5) * 80 }}">
                        <!-- Shimmer wrapper -->
                        <div class="shimmer-wrapper"></div>
                        <img src="{{ $item['thumb'] }}"
                             alt="{{ $item['caption'] }}"
                             class="w-full h-auto"
                             loading="lazy"
                             onload="console.log('Image loaded:', this.src); window.handleMediaLoad(this.closest('.gallery-item'))"
                             onerror="console.log('Image error:', this.src); window.handleMediaError(this.closest('.gallery-item'))">
                    @else
                    <div class="gallery-item group loading"
                         data-type="video"
                         data-video-src="{!! $item['src'] !!}"
                         data-aos="fade-up"
                         data-aos-delay="{{ ($index % 5) * 80 }}">
                        <!-- Shimmer wrapper -->
                        <div class="shimmer-wrapper"></div>
                        <video class="w-full h-auto" 
                               muted 
                               preload="metadata"
                               onloadeddata="window.handleMediaLoad(this.closest('.gallery-item'))"
                               onerror="window.handleMediaError(this.closest('.gallery-item'))">
                            <source src="{!! $item['src'] !!}" type="video/mp4">
                        </video>
                        <!-- Video play overlay -->
                        <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/20 transition-all duration-500"
                             onclick="openVideoModal(this.closest('.gallery-item').dataset.videoSrc)">
                            <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-white flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-300">
                                <i class="ti-control-play text-2xl ml-1" style="color: #4B0082;"></i>
                            </div>
                        </div>
                    @endif

                        <!-- Hover overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <div class="absolute bottom-0 left-0 right-0 p-4 sm:p-5 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                <h4 class="font-cormorant text-lg sm:text-xl text-white mb-1">{{ $item['caption'] }}</h4>
                                <div class="flex items-center gap-2 text-white/70 text-xs">
                                    <i class="{{ $item['type'] === 'video' ? 'ti-video-camera' : 'ti-camera' }}"></i>
                                    <span>{{ $item['type'] === 'video' ? 'Video' : 'Photo' }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Corner icon -->
                        <div class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/20 backdrop-blur-sm flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 text-white text-xs">
                            <i class="ti-zoom-in"></i>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Gallery count -->
            <div class="text-center mt-10" data-aos="fade-up">
                <p class="font-nunito text-gray-400 text-sm">
                    <span class="text-royal-purple font-semibold">{{ count($galleryItems) }}</span> memories captured
                </p>
            </div>
        @else
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-lilac/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ti-image text-4xl text-royal-purple"></i>
                </div>
                <h3 class="font-cormorant text-2xl text-gray-700 mb-4">Gallery Coming Soon</h3>
                <p class="text-gray-600 max-w-md mx-auto">
                    We're curating our beautiful memories. Check back soon!
                </p>
            </div>
        @endif
    </div>
</div>

<!-- Tips Section -->
@if(count($galleryItems) > 0)
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
@endif

<!-- Video Modal -->
<div id="video-modal" class="fixed inset-0 z-[9999] hidden" onclick="if(event.target===this)closeVideoModal()">
    <div class="absolute inset-0 bg-black/95"></div>
    <button onclick="closeVideoModal()" class="absolute top-4 right-4 z-10 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all">
        <i class="ti-close text-lg"></i>
    </button>
    <div class="relative flex items-center justify-center w-full h-full p-4 sm:p-8">
        <video id="modal-video" class="max-w-full max-h-full rounded-xl shadow-2xl" controls playsinline preload="metadata">
        </video>
    </div>
</div>
@endsection

@section('scripts')
<style>
/* Shimmer loading effect */
.gallery-item {
    position: relative;
    overflow: hidden;
}

.gallery-item.loading .shimmer-wrapper {
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: shimmer 1.5s infinite;
    z-index: 1;
    min-height: 200px;
    border-radius: 0.5rem;
    display: none; /* Temporarily disable shimmer */
}

@keyframes shimmer {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

.gallery-item.loaded .shimmer-wrapper {
    display: none;
}

.gallery-item.loading img,
.gallery-item.loading video {
    opacity: 1;
}

.gallery-item.loaded img,
.gallery-item.loaded video {
    opacity: 1;
}
</style>
<script>
// Make functions globally available
window.handleMediaLoad = function(galleryItem) {
    console.log('Media loaded:', galleryItem);
    if (galleryItem) {
        galleryItem.classList.remove('loading');
        galleryItem.classList.add('loaded');
    }
};

window.handleMediaError = function(galleryItem) {
    console.log('Media error:', galleryItem);
    if (galleryItem) {
        galleryItem.classList.remove('loading');
        galleryItem.classList.add('loaded');
        // Optionally add an error state
        galleryItem.classList.add('error');
    }
};

// Initialize existing media that might already be loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('Checking for already loaded media...');
    // Check for already loaded images and videos
    document.querySelectorAll('.gallery-item img, .gallery-item video').forEach(function(media) {
        console.log('Found media:', media);
        if (media.complete && media.naturalHeight !== 0) {
            console.log('Image already loaded');
            window.handleMediaLoad(media.closest('.gallery-item'));
        } else if (media.readyState >= 2) { // For video
            console.log('Video already loaded');
            window.handleMediaLoad(media.closest('.gallery-item'));
        } else {
            console.log('Media not yet loaded, will show shimmer');
            // Add fallback timeout in case onload doesn't fire
            setTimeout(function() {
                if (media.closest('.gallery-item').classList.contains('loading')) {
                    console.log('Fallback: Force showing media');
                    window.handleMediaLoad(media.closest('.gallery-item'));
                }
            }, 3000); // 3 second fallback
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const el = document.getElementById('wedding-gallery');
    if (el && typeof lightGallery !== 'undefined') {
        window.lgInstance = lightGallery(el, {
            plugins: [lgZoom, lgThumbnail],
            selector: '.gallery-image',
            download: false,
            thumbnail: true,
            zoom: true,
            keyboard: true,
            animateThumb: true,
            counter: true,
            getCaptionFromTitleOrAlt: false,
        });
    }
});

function openVideoModal(src) {
    var modal = document.getElementById('video-modal');
    var video = document.getElementById('modal-video');
    video.src = src;
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    video.play();
}

function closeVideoModal() {
    var modal = document.getElementById('video-modal');
    var video = document.getElementById('modal-video');
    video.pause();
    video.src = '';
    modal.classList.add('hidden');
    document.body.style.overflow = '';
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeVideoModal();
});

function filterGallery(type) {
    document.querySelectorAll('#wedding-gallery .gallery-item').forEach(function(item) {
        if (type === 'all' || item.dataset.type === type) {
            item.style.display = '';
            item.style.opacity = '0';
            setTimeout(function() { item.style.opacity = '1'; }, 50);
        } else {
            item.style.display = 'none';
        }
    });
    if (window.lgInstance) {
        window.lgInstance.refresh();
    }
}
</style>
@endsection
