@extends('layouts.app')

@section('title', 'Home - Faith & Samuel — Together Forever')

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
                <button onclick="openPdfViewer()"
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
                    <p class="mt-3 text-gray-500 text-sm leading-relaxed">Faith is the magic you didn't see coming, but can't forget once you do. She didn’t just find love; She curated it, styled it, and made it entirely beautiful.</p>
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
                    <p class="mt-3 text-gray-500 text-sm leading-relaxed">Meet the man of the hour, Samuel Ogechukwu. With a smile that lights up the room and a very large heart. Samuel is the steady anchor in this love story.</p>
                    <div class="flex justify-center sm:justify-end gap-2 mt-4">
                        {{-- <a href="#" class="w-8 h-8 rounded-full bg-royal-purple/10 flex items-center justify-center hover:bg-royal-purple hover:text-white text-royal-purple transition-all duration-300 text-xs"><i class="ti-facebook"></i></a>
                        <a href="#" class="w-8 h-8 rounded-full bg-royal-purple/10 flex items-center justify-center hover:bg-royal-purple hover:text-white text-royal-purple transition-all duration-300 text-xs"><i class="ti-twitter"></i></a>
                        <a href="#" class="w-8 h-8 rounded-full bg-royal-purple/10 flex items-center justify-center hover:bg-royal-purple hover:text-white text-royal-purple transition-all duration-300 text-xs"><i class="ti-instagram"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center" data-aos="zoom-in" data-aos-delay="100">
            <h3 class="font-alex text-4xl sm:text-5xl gradient-text mb-3">We are getting married!</h3>
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
<br/><br/>
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
                <p class="text-gray-500 mb-4 leading-relaxed">Faith and Samuel’s story began in the most ordinary place. What started as a simple conversation between strangers quickly grew into a genuine friendship, built on laughter, shared moments, and an easy connection.  Over time, that friendship blossomed into love.
                <p class="text-gray-500 mb-6 leading-relaxed">Life brought us even closer when we became colleagues in the same work place, sharing not just workspaces but dreams, ideas, and daily experiences. Even when Faith moved on to a new opportunity, our bond only grew stronger.</p>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-px bg-royal-purple"></div>
                    <h4 class="font-cormorant text-lg text-royal-purple">October 2nd, 2025, We Said Yes!</h4>
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
                    // ['route' => 'rsvp', 'icon' => 'ti-email', 'title' => 'RSVP', 'desc' => 'Confirm attendance'],
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

<!-- PDF Viewer Modal -->
<div id="pdf-modal" class="fixed inset-0 z-[9999] hidden">
    <div class="absolute inset-0 bg-black/90 backdrop-blur-sm" onclick="closePdfViewer()"></div>
    <button onclick="closePdfViewer()" class="absolute top-4 right-4 z-10 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-all">
        <i class="ti-close text-lg"></i>
    </button>

    <div class="relative flex items-center justify-center w-full h-full p-4 sm:p-8">
        <div class="bg-white rounded-lg shadow-2xl max-w-4xl max-h-[90vh] overflow-hidden">
            <div class="flex items-center justify-between p-3 bg-gray-100 border-b">
                <span class="text-sm font-medium text-gray-700">Invitation Card</span>
                <div class="flex items-center gap-2">
                    <button onclick="prevPage()" class="w-8 h-8 rounded bg-white hover:bg-gray-50 flex items-center justify-center text-gray-600 transition-colors disabled:opacity-50 disabled:cursor-not-allowed" id="prev-btn">
                        <i class="ti-angle-left text-xs"></i>
                    </button>
                    <span id="page-info" class="text-xs text-gray-500 w-16 text-center">1 / 2</span>
                    <button onclick="nextPage()" class="w-8 h-8 rounded bg-white hover:bg-gray-50 flex items-center justify-center text-gray-600 transition-colors" id="next-btn">
                        <i class="ti-angle-right text-xs"></i>
                    </button>
                    <div class="w-px h-4 bg-gray-300"></div>
                    <button onclick="zoomOut()" class="w-8 h-8 rounded bg-white hover:bg-gray-50 flex items-center justify-center text-gray-600 transition-colors">
                        <i class="ti-minus text-xs"></i>
                    </button>
                    <span id="zoom-level" class="text-xs text-gray-500 w-12 text-center">100%</span>
                    <button onclick="zoomIn()" class="w-8 h-8 rounded bg-white hover:bg-gray-50 flex items-center justify-center text-gray-600 transition-colors">
                        <i class="ti-plus text-xs"></i>
                    </button>
                    <button onclick="downloadPdf()" class="w-8 h-8 rounded bg-white hover:bg-gray-50 flex items-center justify-center text-gray-600 transition-colors">
                        <i class="ti-download text-xs"></i>
                    </button>
                </div>
            </div>
            <div class="relative overflow-auto" style="height: calc(90vh - 60px);">
                <canvas id="pdf-canvas" class="mx-auto"></canvas>
                <div id="pdf-loading" class="absolute inset-0 flex items-center justify-center bg-white/50">
                    <div class="text-center">
                        <div class="w-10 h-10 border-2 border-lilac/30 border-t-lilac rounded-full animate-spin mx-auto mb-2"></div>
                        <p class="text-sm text-gray-600">Loading invitation...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- PDF.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>

<script>
var pdfDoc = null;
var pageNum = 1;
var pageRendering = false;
var pageNumPending = null;
var scale = 1.5;
var canvas = document.getElementById('pdf-canvas');
var ctx = canvas.getContext('2d');
var pdfUrl = "{{ asset('assets/images/invitation.pdf') }}";

function openPdfViewer() {
    document.getElementById('pdf-modal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
    loadPdf();
}

function closePdfViewer() {
    document.getElementById('pdf-modal').classList.add('hidden');
    document.body.style.overflow = '';
    pdfDoc = null;
    pageNum = 1;
    scale = 1.5;
}

function loadPdf() {
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';
    
    pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
        pdfDoc = pdf;
        document.getElementById('pdf-loading').style.display = 'none';
        renderPage(pageNum);
    }).catch(function(error) {
        console.error('PDF load error:', error);
        document.getElementById('pdf-loading').innerHTML = '<div class="text-center"><i class="ti-alert text-2xl text-lilac mb-2 block"></i><p class="text-sm text-gray-600">Could not load invitation.</p></div>';
    });
}

function renderPage(num) {
    pageRendering = true;
    pdfDoc.getPage(num).then(function(page) {
        var viewport = page.getViewport({scale: scale});
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        var renderContext = {
            canvasContext: ctx,
            viewport: viewport
        };
        var renderTask = page.render(renderContext);

        renderTask.promise.then(function() {
            pageRendering = false;
            if (pageNumPending !== null) {
                renderPage(pageNumPending);
                pageNumPending = null;
            }
        });
    });

    updatePageInfo();
    updateZoomLevel();
}

function queueRenderPage(num) {
    if (pageRendering) {
        pageNumPending = num;
    } else {
        renderPage(num);
    }
}

function prevPage() {
    if (pageNum <= 1) return;
    pageNum--;
    queueRenderPage(pageNum);
}

function nextPage() {
    if (pageNum >= pdfDoc.numPages) return;
    pageNum++;
    queueRenderPage(pageNum);
}

function updatePageInfo() {
    document.getElementById('page-info').textContent = pageNum + ' / ' + pdfDoc.numPages;
    document.getElementById('prev-btn').disabled = pageNum <= 1;
    document.getElementById('next-btn').disabled = pageNum >= pdfDoc.numPages;
}

function zoomIn() {
    if (scale < 3) {
        scale += 0.25;
        queueRenderPage(pageNum);
    }
}

function zoomOut() {
    if (scale > 0.5) {
        scale -= 0.25;
        queueRenderPage(pageNum);
    }
}

function updateZoomLevel() {
    document.getElementById('zoom-level').textContent = Math.round(scale * 100) + '%';
}

function downloadPdf() {
    var link = document.createElement('a');
    link.href = pdfUrl;
    link.download = 'invitation.pdf';
    link.click();
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && !document.getElementById('pdf-modal').classList.contains('hidden')) {
        closePdfViewer();
    } else if (e.key === 'ArrowLeft' && !document.getElementById('pdf-modal').classList.contains('hidden')) {
        prevPage();
    } else if (e.key === 'ArrowRight' && !document.getElementById('pdf-modal').classList.contains('hidden')) {
        nextPage();
    }
});
</script>

<style>
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
