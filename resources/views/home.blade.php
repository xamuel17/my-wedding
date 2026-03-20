@extends('layouts.app')

@section('title', 'Home - Faith & Samuel Wedding')

@section('content')
<!-- Header Video -->
<header id="home" class="relative h-screen overflow-hidden">
    <div class="banner-image" style="background-image: url('{{ asset('assets/gallery/18.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/50 to-black/70"></div>

    <div class="absolute inset-0 flex items-center justify-center text-white text-center px-4 mt-100">
        <div class="container mx-auto">
            <div data-aos="fade-down" data-aos-duration="1000">
                <span class="inline-block w-16 h-px bg-white/50 mb-6"></span>
            </div>
            <h1 class="font-alex text-5xl sm:text-6xl lg:text-8xl mb-4 text-white/80" data-aos="zoom-in" data-aos-duration="1200">Faith & Samuel</h1>
            <h5 class="font-nunito text-sm sm:text-lg lg:text-xl tracking-[0.3em] uppercase mb-8 text-white/80" data-aos="fade-up" data-aos-delay="300">
                30 May, 2026 – Lagos, Nigeria
            </h5>
            <div data-aos="fade-up" data-aos-delay="500">
                <span class="inline-block w-16 h-px bg-white/50 mb-8"></span>
            </div>

            <!-- View Invitation Button -->
            <div class="mt-6" data-aos="fade-up" data-aos-delay="600">
                <button onclick="openFlipbook()"
                   class="inline-flex items-center gap-2 px-6 py-3 bg-white/10 backdrop-blur-sm border border-white/30 rounded-full text-white hover:bg-white/20 hover:border-white/50 transition-all duration-300 text-sm font-nunito tracking-wider cursor-pointer">
                    <i class="ti-book text-lilac"></i> View Invitation Card
                </button>
            </div>

            <!-- Scroll Down Arrow -->
            <div class="animate-bounce mt-6" data-aos="fade-up" data-aos-delay="700">
                <a href="#couple" class="inline-flex flex-col items-center gap-2 group">
                    <span class="text-xs tracking-widest uppercase text-white/60 group-hover:text-white transition-colors">Scroll</span>
                    <i class="ti-angle-double-down text-xl text-white/60 group-hover:text-lilac transition-colors duration-300"></i>
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Couple Section -->
<section id="couple" class="bg-wedding-pink py-16 sm:py-24">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="grid md:grid-cols-2 gap-8 lg:gap-12 mb-12 sm:mb-16">
            <!-- Bride -->
            <div class="flex flex-col sm:flex-row items-center bg-white p-6 sm:p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-shadow duration-500" data-aos="fade-right" data-aos-delay="100">
                <div class="w-28 h-28 sm:w-32 sm:h-32 rounded-full overflow-hidden mb-4 sm:mb-0 sm:mr-6 ring-4 ring-lilac/30 flex-shrink-0">
                    <img src="{{ asset('assets/gallery/Faith.jpeg') }}" alt="Faith" class="w-full h-full object-cover">
                </div>
                <div class="text-center sm:text-left">
                    <h6 class="font-cormorant text-2xl mb-1">Faith Michael <i class="ti-heart text-lilac text-sm heart-animation"></i></h6>
                    <span class="text-lilac font-alex text-xl">The Bride</span>
                    <p class="mt-3 text-gray-500 text-sm leading-relaxed">Hi, I’m Faith. Lover of soft moments, deep belly laughter, and happily ever afters. I found my forever in Samuel, and now I’m counting down to a lifetime of love, joy, and inside jokes.</p>
                    <div class="flex justify-center sm:justify-start gap-2 mt-4">
                        {{-- <a href="#" class="w-8 h-8 rounded-full bg-royal-purple/10 flex items-center justify-center hover:bg-royal-purple hover:text-white text-royal-purple transition-all duration-300 text-xs"><i class="ti-facebook"></i></a>
                        <a href="#" class="w-8 h-8 rounded-full bg-royal-purple/10 flex items-center justify-center hover:bg-royal-purple hover:text-white text-royal-purple transition-all duration-300 text-xs"><i class="ti-twitter"></i></a>
                        <a href="#" class="w-8 h-8 rounded-full bg-royal-purple/10 flex items-center justify-center hover:bg-royal-purple hover:text-white text-royal-purple transition-all duration-300 text-xs"><i class="ti-instagram"></i></a> --}}
                    </div>
                </div>
            </div>

            <!-- Groom -->
            <div class="flex flex-col sm:flex-row-reverse items-center bg-white p-6 sm:p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-shadow duration-500" data-aos="fade-left" data-aos-delay="200">
                <div class="w-28 h-28 sm:w-32 sm:h-32 rounded-full overflow-hidden mb-4 sm:mb-0 sm:ml-6 ring-4 ring-lilac/30 flex-shrink-0">
                    <img src="{{ asset('assets/gallery/Samuel.jpeg') }}" alt="Samuel" class="w-full h-full object-cover">
                </div>
                <div class="text-center sm:text-right">
                    <h6 class="font-cormorant text-2xl mb-1">Samuel Ogechukwu <i class="ti-heart text-lilac text-sm heart-animation"></i></h6>
                    <span class="text-lilac font-alex text-xl">The Groom</span>
                    <p class="mt-3 text-gray-500 text-sm leading-relaxed">Meet the man of the hour, Samuel Ogechukwu. With a smile that lights up the room and a heart big enough to match, Samuel is the steady anchor in this love story.</p>
                    <div class="flex justify-center sm:justify-end gap-2 mt-4">
                        {{-- <a href="#" class="w-8 h-8 rounded-full bg-royal-purple/10 flex items-center justify-center hover:bg-royal-purple hover:text-white text-royal-purple transition-all duration-300 text-xs"><i class="ti-facebook"></i></a>
                        <a href="#" class="w-8 h-8 rounded-full bg-royal-purple/10 flex items-center justify-center hover:bg-royal-purple hover:text-white text-royal-purple transition-all duration-300 text-xs"><i class="ti-twitter"></i></a>
                        <a href="#" class="w-8 h-8 rounded-full bg-royal-purple/10 flex items-center justify-center hover:bg-royal-purple hover:text-white text-royal-purple transition-all duration-300 text-xs"><i class="ti-instagram"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center" data-aos="zoom-in" data-aos-delay="100">
            <h3 class="font-alex text-4xl sm:text-5xl gradient-text mb-3">Are getting married!</h3>
            <h4 class="font-cormorant text-lg sm:text-xl text-gray-600">May 30, 2026 — Lagos, Nigeria</h4>
        </div>
    </div>
</section>

<!-- Fun Facts -->
<br/><br/>
<section id="fun-facts" class="py-1 sm:py-2 bg-white overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="text-center mb-10 sm:mb-14" data-aos="fade-up">
            <span class="font-alex text-2xl sm:text-3xl text-lilac block mb-2">Get to Know Us</span>
            <h3 class="font-cormorant text-3xl sm:text-4xl text-royal-purple">Fun Facts About Us</h3>
            <div class="flex justify-center gap-1.5 mt-4">
                <span class="w-2 h-2 rounded-full bg-lilac/40"></span>
                <span class="w-8 h-1.5 rounded-full bg-gradient-to-r from-royal-purple to-lilac"></span>
                <span class="w-2 h-2 rounded-full bg-lilac/40"></span>
            </div>
        </div>
    </div>

    @php
        $brideFacts = [
            ['emoji' => '📚', 'fact' => 'Her organizational skills are top notch (she knows exactly how her stuff are arranged, so don\'t mess it up!)'],
            ['emoji' => '✨', 'fact' => 'Faith is a skincare enthusiast (awon "Use your sunscreen generously, don\'t mince it")'],
            ['emoji' => '🍕', 'fact' => 'Faith treats new food like a suspicious email; Ignore at all costs!'],
            ['emoji' => '👨‍💼', 'fact' => 'Faith and work are 5&6, every other person is probably a \'learner\''],
            ['emoji' => '👗', 'fact' => 'Faith could wear a Shirt and Jeans 24/7, 365!'],
            ['emoji' => '😴', 'fact' => 'If sleep were a sport, Faith would be a Pro!'],
            ['emoji' => '🙏', 'fact' => 'She’s my answered prayer. Now I don’t just live by Faith, I will be married to her!'],
        ];

        $groomFacts = [
            ['emoji' => '💻', 'fact' => 'He never jokes with his codes and production deployment (awon senior Dev.. Techbro!!!)'],
            ['emoji' => '🍽️', 'fact' => 'He eats fast. One would wonder if he has a freezer in his mouth'],
            ['emoji' => '🍳', 'fact' => 'He doesn\'t select food (Thank you Jesus)'],
            ['emoji' => '🎤', 'fact' => 'He can\'t dance but we can manage his voice; atleast it\'s not off-key'],
            ['emoji' => '👨‍🍳', 'fact' => 'He is a fantastic cook (Ever tasted his chicken stew?? Yum!!)'],
            ['emoji' => '📚', 'fact' => 'He is intelligent, well read and googles everything and anything.. (God know say I no fit marry "Olodo")'],
            ['emoji' => '👨‍💼', 'fact' => 'He is intentional, patient and supportive (Give it up for sugar daddy Sammy!!!)'],
            
        ];
    @endphp

    <!-- Bride Facts - scrolls left -->
    <div class="mb-6 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
        <div class="fun-facts-track fun-facts-left">
            <div class="fun-facts-slide">
                @foreach($brideFacts as $fact)
                <div class="fun-fact-card group">
                    <div class="flex items-center gap-3 sm:gap-4">
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 rounded-full overflow-hidden ring-2 ring-lilac/40 group-hover:ring-lilac transition-all duration-300">
                            <img src="{{ asset('assets/gallery/Faith.jpeg') }}" alt="Faith" class="w-full h-full object-cover">
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-xl sm:text-2xl">{{ $fact['emoji'] }}</span>
                            <p class="font-nunito text-sm sm:text-base text-gray-700 whitespace-nowrap">{{ $fact['fact'] }}</p>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-lilac/0 via-lilac to-lilac/0 scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
                @endforeach
            </div>
            <div class="fun-facts-slide" aria-hidden="true">
                @foreach($brideFacts as $fact)
                <div class="fun-fact-card group">
                    <div class="flex items-center gap-3 sm:gap-4">
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 rounded-full overflow-hidden ring-2 ring-lilac/40 group-hover:ring-lilac transition-all duration-300">
                            <img src="{{ asset('assets/gallery/Faith.jpeg') }}" alt="Faith" class="w-full h-full object-cover">
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-xl sm:text-2xl">{{ $fact['emoji'] }}</span>
                            <p class="font-nunito text-sm sm:text-base text-gray-700 whitespace-nowrap">{{ $fact['fact'] }}</p>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-lilac/0 via-lilac to-lilac/0 scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Groom Facts - scrolls right -->
    <div class="overflow-hidden" data-aos="fade-up" data-aos-delay="200">
        <div class="fun-facts-track fun-facts-right">
            <div class="fun-facts-slide">
                @foreach($groomFacts as $fact)
                <div class="fun-fact-card group">
                    <div class="flex items-center gap-3 sm:gap-4">
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 rounded-full overflow-hidden ring-2 ring-royal-purple/40 group-hover:ring-royal-purple transition-all duration-300">
                            <img src="{{ asset('assets/gallery/Samuel.jpeg') }}" alt="Samuel" class="w-full h-full object-cover">
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-xl sm:text-2xl">{{ $fact['emoji'] }}</span>
                            <p class="font-nunito text-sm sm:text-base text-gray-700 whitespace-nowrap">{{ $fact['fact'] }}</p>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-royal-purple/0 via-royal-purple to-royal-purple/0 scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
                @endforeach
            </div>
            <div class="fun-facts-slide" aria-hidden="true">
                @foreach($groomFacts as $fact)
                <div class="fun-fact-card group">
                    <div class="flex items-center gap-3 sm:gap-4">
                        <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 rounded-full overflow-hidden ring-2 ring-royal-purple/40 group-hover:ring-royal-purple transition-all duration-300">
                            <img src="{{ asset('assets/gallery/Samuel.jpeg') }}" alt="Samuel" class="w-full h-full object-cover">
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-xl sm:text-2xl">{{ $fact['emoji'] }}</span>
                            <p class="font-nunito text-sm sm:text-base text-gray-700 whitespace-nowrap">{{ $fact['fact'] }}</p>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-royal-purple/0 via-royal-purple to-royal-purple/0 scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Countdown -->
<section id="countdown" class="relative bg-cover bg-fixed bg-center py-16 sm:py-24" style="background-image: url('https://picsum.photos/seed/weddingbg1/1920/800')">
    <div class="absolute inset-0 bg-gradient-to-r from-royal-purple/80 to-lilac/60"></div>
    <div class="relative container mx-auto px-4 sm:px-6 text-center text-white">
        <div class="mb-8" data-aos="fade-down">
            <span class="font-alex text-2xl sm:text-3xl text-white/90 block mb-2">Save the Date</span>
            <h4 class="font-nunito text-sm sm:text-lg tracking-widest uppercase text-white/70">We will become a family in</h4>
        </div>
        <div class="flex justify-center gap-3 sm:gap-6 md:gap-10" data-aos="fade-up" data-aos-delay="200">
            @foreach(['days' => 'Days', 'hours' => 'Hours', 'minutes' => 'Minutes', 'seconds' => 'Seconds'] as $id => $label)
            <div class="text-center">
                <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 rounded-2xl bg-white/10 backdrop-blur-sm flex items-center justify-center mb-2 sm:mb-3 border border-white/20">
                    <span id="{{ $id }}" class="block text-2xl sm:text-4xl md:text-5xl font-bold font-nunito">00</span>
                </div>
                <span class="text-[10px] sm:text-xs uppercase tracking-widest font-nunito text-white/70">{{ $label }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Our Story Preview -->
<section id="story-preview" class="py-16 sm:py-24">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="grid md:grid-cols-2 gap-8 lg:gap-16 items-center">
            <div class="relative" data-aos="fade-right">
                <div class="relative p-2 sm:p-4">
                    <img src="{{ asset('assets/gallery/8.jpg') }}" alt="Our Story" class="rounded-2xl shadow-2xl w-full">
                    <div class="absolute -top-4 -right-4 sm:-top-6 sm:-right-6 w-16 h-16 sm:w-24 sm:h-24 bg-gradient-to-br from-royal-purple to-lilac rounded-full flex items-center justify-center animate-spin-slow shadow-lg">
                        <i class="ti-heart text-white text-xl sm:text-3xl"></i>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-delay="200">
                <span class="font-alex text-2xl sm:text-3xl text-lilac block mb-2">Our love.</span>
                <h3 class="font-cormorant text-3xl sm:text-4xl mb-6">Our Story</h3>
                <p class="text-gray-500 mb-4 leading-relaxed">Faith and Samuel’s story began in the most ordinary place. What started as a simple conversation between strangers quickly grew into a genuine friendship, built on laughter, shared moments, and an easy connection.Over time, that friendship blossomed into love.
                <p class="text-gray-500 mb-6 leading-relaxed">Life brought us even closer when we became colleagues in the same office, sharing not just workspaces but dreams, ideas, and daily experiences. Even when Faith moved on to a new opportunity, our bond only grew stronger.</p>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-px bg-royal-purple"></div>
                    <h4 class="font-cormorant text-lg text-royal-purple">April 5th, 2025, We Said Yes!</h4>
                </div>
                <a href="{{ route('story') }}" class="wedding-button">Read Our Full Story</a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Links -->
<section class="py-12 sm:py-16 bg-wedding-pink">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
            @php
                $links = [
                    ['route' => 'gallery', 'icon' => 'ti-image', 'title' => 'Gallery', 'desc' => 'View our photos'],
                    ['route' => 'wishes', 'icon' => 'ti-heart', 'title' => 'Wishes', 'desc' => 'Send a message'],
                    ['route' => 'donate', 'icon' => 'ti-gift', 'title' => 'Gift', 'desc' => 'Support our journey'],
                    ['route' => 'rsvp', 'icon' => 'ti-email', 'title' => 'RSVP', 'desc' => 'Confirm attendance'],
                ];
            @endphp
            @foreach($links as $i => $link)
                <a href="{{ route($link['route']) }}"
                   class="bg-white rounded-2xl p-5 sm:p-8 text-center shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-400 group"
                   data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <div class="w-12 h-12 sm:w-14 sm:h-14 bg-gradient-to-br from-royal-purple to-lilac rounded-2xl flex items-center justify-center mx-auto mb-3 sm:mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg shadow-royal-purple/20">
                        <i class="{{ $link['icon'] }} text-white text-lg sm:text-xl"></i>
                    </div>
                    <h4 class="font-cormorant text-lg sm:text-xl mb-1">{{ $link['title'] }}</h4>
                    <p class="text-xs sm:text-sm text-gray-400">{{ $link['desc'] }}</p>
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Flipbook Modal -->
<div id="flipbook-modal" class="fixed inset-0 z-[9999] hidden">
    <div class="absolute inset-0 bg-black/90 backdrop-blur-sm" onclick="closeFlipbook()"></div>
    <button onclick="closeFlipbook()" class="absolute top-4 right-4 z-10 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all">
        <i class="ti-close text-lg"></i>
    </button>

    <!-- Navigation Arrows -->
    <button id="flipbook-prev" onclick="flipPrev()" class="absolute left-2 sm:left-6 top-1/2 -translate-y-1/2 z-10 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all">
        <i class="ti-angle-left text-lg"></i>
    </button>
    <button id="flipbook-next" onclick="flipNext()" class="absolute right-2 sm:right-6 top-1/2 -translate-y-1/2 z-10 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all">
        <i class="ti-angle-right text-lg"></i>
    </button>

    <!-- Page Counter -->
    <div id="flipbook-counter" class="absolute bottom-4 left-1/2 -translate-x-1/2 z-10 text-white/70 text-sm font-nunito"></div>

    <!-- Loading -->
    <div id="flipbook-loading" class="absolute inset-0 flex items-center justify-center z-10">
        <div class="text-center text-white">
            <div class="w-12 h-12 border-3 border-white/30 border-t-lilac rounded-full animate-spin mx-auto mb-3"></div>
            <p class="font-nunito text-sm text-white/70">Loading invitation...</p>
        </div>
    </div>

    <!-- Flipbook Container -->
    <div class="relative flex items-center justify-center w-full h-full p-12 sm:p-16">
        <div id="flipbook-container" class="relative"></div>
    </div>
</div>
@endsection

@section('scripts')
<!-- PDF.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<!-- StPageFlip -->
<script src="https://cdn.jsdelivr.net/npm/page-flip@2.0.7/dist/js/page-flip.browser.js"></script>

<script>
var flipbookInstance = null;
var pdfUrl = "{{ asset('assets/images/invitation.pdf') }}";

function openFlipbook() {
    var modal = document.getElementById('flipbook-modal');
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    loadPdfFlipbook();
}

function closeFlipbook() {
    var modal = document.getElementById('flipbook-modal');
    modal.classList.add('hidden');
    document.body.style.overflow = '';
    if (flipbookInstance) {
        flipbookInstance.destroy();
        flipbookInstance = null;
    }
    document.getElementById('flipbook-container').innerHTML = '';
    document.getElementById('flipbook-loading').style.display = 'flex';
}

function flipPrev() {
    if (flipbookInstance) flipbookInstance.flipPrev();
}

function flipNext() {
    if (flipbookInstance) flipbookInstance.flipNext();
}

function updateCounter() {
    if (!flipbookInstance) return;
    var current = flipbookInstance.getCurrentPageIndex() + 1;
    var total = flipbookInstance.getPageCount();
    document.getElementById('flipbook-counter').textContent = 'Page ' + current + ' of ' + total;
}

function loadPdfFlipbook() {
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

    pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
        var totalPages = pdf.numPages;
        var container = document.getElementById('flipbook-container');
        container.innerHTML = '';

        var renderPromises = [];

        for (var i = 1; i <= totalPages; i++) {
            (function(pageNum) {
                renderPromises.push(
                    pdf.getPage(pageNum).then(function(page) {
                        var scale = 1.5;
                        var viewport = page.getViewport({ scale: scale });
                        var canvas = document.createElement('canvas');
                        canvas.width = viewport.width;
                        canvas.height = viewport.height;
                        canvas.className = 'flipbook-page';
                        canvas.dataset.pageNum = pageNum;

                        var ctx = canvas.getContext('2d');
                        return page.render({ canvasContext: ctx, viewport: viewport }).promise.then(function() {
                            return { pageNum: pageNum, canvas: canvas, width: viewport.width, height: viewport.height };
                        });
                    })
                );
            })(i);
        }

        Promise.all(renderPromises).then(function(pages) {
            pages.sort(function(a, b) { return a.pageNum - b.pageNum; });

            var pageWidth = pages[0].width;
            var pageHeight = pages[0].height;

            // Scale to fit viewport
            var maxW = window.innerWidth * 0.8;
            var maxH = window.innerHeight * 0.75;
            var ratio = Math.min(maxW / pageWidth, maxH / pageHeight, 1);
            var finalW = Math.floor(pageWidth * ratio);
            var finalH = Math.floor(pageHeight * ratio);

            pages.forEach(function(p) {
                var div = document.createElement('div');
                div.className = 'page-content-wrapper';
                div.style.cssText = 'width:' + finalW + 'px;height:' + finalH + 'px;';

                var img = document.createElement('img');
                img.src = p.canvas.toDataURL('image/jpeg', 0.92);
                img.style.cssText = 'width:100%;height:100%;object-fit:contain;';
                div.appendChild(img);
                container.appendChild(div);
            });

            document.getElementById('flipbook-loading').style.display = 'none';

            flipbookInstance = new St.PageFlip(container, {
                width: finalW,
                height: finalH,
                size: 'fixed',
                showCover: true,
                mobileScrollSupport: false,
                maxShadowOpacity: 0.5,
                drawShadow: true,
                flippingTime: 800,
                usePortrait: true,
                autoSize: true,
            });

            flipbookInstance.loadFromHTML(container.querySelectorAll('.page-content-wrapper'));
            updateCounter();
            flipbookInstance.on('flip', updateCounter);
        });

    }).catch(function(error) {
        console.error('PDF load error:', error);
        document.getElementById('flipbook-loading').innerHTML = '<div class="text-center text-white"><i class="ti-alert text-3xl text-lilac mb-3 block"></i><p class="font-nunito">Could not load invitation.</p><p class="text-xs text-white/50 mt-1">Make sure invitation.pdf is in public/assets/images/</p></div>';
    });
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        var modal = document.getElementById('flipbook-modal');
        if (!modal.classList.contains('hidden')) closeFlipbook();
    }
});
</script>

<style>
    #flipbook-container { perspective: 2000px; }
    #flipbook-container .stf__parent { box-shadow: 0 10px 60px rgba(0,0,0,0.5); border-radius: 4px; }
    #flipbook-container .page-content-wrapper { background: white; }
    .border-3 { border-width: 3px; }

    /* Fun Facts Auto-Scroll */
    .fun-facts-track {
        display: flex;
        width: max-content;
    }

    .fun-facts-slide {
        display: flex;
        gap: 1rem;
        padding-right: 1rem;
    }

    .fun-facts-left {
        animation: scrollLeft 95s linear infinite;
    }

    .fun-facts-right {
        animation: scrollRight 95s linear infinite;
    }

    .fun-facts-track:hover {
        animation-play-state: paused;
    }

    .fun-fact-card {
        position: relative;
        flex-shrink: 0;
        padding: 0.875rem 1.25rem;
        background: linear-gradient(135deg, #fafafa 0%, #f5f0ff 100%);
        border: 1px solid rgba(75, 0, 130, 0.08);
        border-radius: 9999px;
        cursor: default;
        transition: all 0.3s ease;
    }

    .fun-fact-card:hover {
        background: linear-gradient(135deg, #f5f0ff 0%, #ede4ff 100%);
        border-color: rgba(75, 0, 130, 0.2);
        box-shadow: 0 4px 20px rgba(75, 0, 130, 0.1);
        transform: translateY(-2px);
    }

    @keyframes scrollLeft {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    @keyframes scrollRight {
        0% { transform: translateX(-50%); }
        100% { transform: translateX(0); }
    }

    /* Contain fun facts within viewport */
    #fun-facts {
        max-width: 100vw;
        overflow: hidden;
        -webkit-mask-image: linear-gradient(to right, transparent 0%, black 5%, black 95%, transparent 100%);
        mask-image: linear-gradient(to right, transparent 0%, black 5%, black 95%, transparent 100%);
    }
</style>
@endsection
