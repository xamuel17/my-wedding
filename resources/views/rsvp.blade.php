@extends('layouts.app')

@section('title', 'RSVP - Faith & Samuel — Together Forever')

@section('content')
<!-- Hero -->
<div class="relative bg-gradient-to-br from-royal-purple via-royal-purple/90 to-lilac/80 py-20 sm:py-28 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-40 h-40 border border-white/30 rounded-full"></div>
        <div class="absolute bottom-10 right-10 w-60 h-60 border border-white/20 rounded-full"></div>
    </div>
    <div class="relative container mx-auto px-4 sm:px-6 text-center text-white">
        <span class="font-alex text-3xl sm:text-4xl block mb-3 opacity-90" data-aos="fade-down">Will you attend?</span>
        <h1 class="font-cormorant text-4xl sm:text-5xl lg:text-6xl font-semibold text-white mb-4" data-aos="fade-up" data-aos-delay="100">R.S.V.P</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto font-nunito" data-aos="fade-up" data-aos-delay="200">
            Please let us know if you can join us on our special day. Your presence means everything to us.
        </p>
    </div>
</div>

<!-- RSVP Form Section -->
<div class="py-12 sm:py-20 bg-gray-50/50">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="max-w-2xl mx-auto" data-aos="fade-up">
            <div class="bg-white rounded-2xl shadow-xl p-6 sm:p-10 border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-royal-purple to-lilac"></div>

                <form action="{{ route('rsvp.store') }}" method="POST" class="wedding-form">
                    @csrf

                    @if(session('success'))
                        <!-- Success State -->
                        <div class="text-center py-4">
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="ti-check text-green-600 text-2xl"></i>
                            </div>
                            <p class="text-green-700 font-nunito font-semibold mb-4">{{ session('success') }}</p>

                            @if(session('zoom_link'))
                                <div class="mt-4 p-5 bg-gray-50 border border-gray-200 rounded-xl text-left">
                                    <p class="font-nunito font-semibold text-gray-700 mb-2 text-sm"><i class="ti-video-camera mr-1 text-royal-purple"></i> Your Zoom Meeting Link:</p>
                                    <a href="{{ session('zoom_link') }}" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-2 text-royal-purple hover:text-lilac font-semibold break-all underline underline-offset-2 text-sm transition-colors">
                                        {{ session('zoom_link') }}
                                        <i class="ti-new-window text-xs flex-shrink-0"></i>
                                    </a>
                                    <p class="text-xs text-gray-400 mt-2">Please save this link. You will need it to join the ceremony on the wedding day.</p>
                                </div>
                            @endif

                            <!-- Wishes Prompt -->
                            <div class="mt-8 p-6 bg-wedding-pink rounded-2xl">
                                <div class="w-12 h-12 bg-gradient-to-br from-royal-purple to-lilac rounded-full flex items-center justify-center mx-auto mb-3 shadow-lg shadow-royal-purple/20">
                                    <i class="ti-heart text-white text-lg"></i>
                                </div>
                                <h4 class="font-cormorant text-xl text-royal-purple mb-2">Share Your Wishes</h4>
                                <p class="text-gray-500 text-sm mb-4">While you're here, leave us a heartfelt message or record a video!</p>
                                <a href="{{ route('wishes') }}" class="wedding-button inline-flex items-center justify-center">
                                    <i class="ti-pencil-alt mr-2"></i> Drop Your Wishes
                                </a>
                            </div>
                        </div>
                    @else
                        <!-- RSVP Form -->
                        @if($errors->any())
                            <div class="bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-xl mb-6 text-sm">
                                <ul class="list-disc list-inside">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="mb-5">
                            <label for="name" class="block font-nunito font-semibold text-gray-700 mb-2 text-sm">Your Name <span class="text-red-400">*</span></label>
                            <input type="text" id="name" name="name" required value="{{ old('name') }}" class="w-full wedding-form-input" placeholder="John Doe">
                        </div>

                        <div class="mb-5">
                            <label for="email" class="block font-nunito font-semibold text-gray-700 mb-2 text-sm">Email Address <span class="text-red-400">*</span></label>
                            <input type="email" id="email" name="email" required value="{{ old('email') }}" class="w-full wedding-form-input" placeholder="john@example.com">
                        </div>

                        <div class="mb-5">
                            <label for="guests" class="block font-nunito font-semibold text-gray-700 mb-2 text-sm">Number of Guests <span class="text-red-400">*</span></label>
                            <select id="guests" name="guests" required class="w-full wedding-form-input">
                                <option value="">Select number of guests</option>
                                <option value="1">1 Guest</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <label class="block font-nunito font-semibold text-gray-700 mb-3 text-sm">Will you attend? <span class="text-red-400">*</span></label>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                <label class="flex items-center gap-3 p-4 rounded-xl border border-gray-200 cursor-pointer hover:border-royal-purple hover:bg-royal-purple/5 transition-all duration-300 group">
                                    <input type="radio" name="attendance" value="yes" required class="accent-royal-purple">
                                    <div>
                                        <span class="text-gray-700 font-medium text-sm group-hover:text-royal-purple transition-colors">Yes, in person!</span>
                                        <p class="text-xs text-gray-400">Attend physically</p>
                                    </div>
                                </label>
                                <label class="flex items-center gap-3 p-4 rounded-xl border border-gray-200 cursor-pointer hover:border-blue-500 hover:bg-blue-50 transition-all duration-300 group">
                                    <input type="radio" name="attendance" value="virtual" required class="accent-blue-500">
                                    <div>
                                        <span class="text-gray-700 font-medium text-sm group-hover:text-blue-600 transition-colors">Virtual on Zoom</span>
                                        <p class="text-xs text-gray-400">Join via video call</p>
                                    </div>
                                </label>
                                <label class="flex items-center gap-3 p-4 rounded-xl border border-gray-200 cursor-pointer hover:border-royal-purple hover:bg-royal-purple/5 transition-all duration-300 group">
                                    <input type="radio" name="attendance" value="no" required class="accent-royal-purple">
                                    <div>
                                        <span class="text-gray-700 font-medium text-sm group-hover:text-royal-purple transition-colors">Can't make it</span>
                                        <p class="text-xs text-gray-400">Unable to attend</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="mb-8">
                            <label for="message" class="block font-nunito font-semibold text-gray-700 mb-2 text-sm">Message (Optional)</label>
                            <textarea id="message" name="message" rows="4" class="w-full wedding-form-input resize-none" placeholder="Share your well wishes or any dietary requirements...">{{ old('message') }}</textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="wedding-button inline-flex items-center justify-center px-8 py-4">
                                <i class="ti-heart mr-2"></i> Send RSVP
                            </button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Event Details -->
<div class="py-12 sm:py-20 bg-white">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-10" data-aos="fade-up">
                <span class="font-alex text-2xl text-lilac block mb-2">The Details</span>
                <h3 class="font-cormorant text-3xl sm:text-4xl text-royal-purple">Event Information</h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                @php
                    $details = [
                        ['icon' => 'ti-heart', 'title' => 'Wedding Ceremony', 'items' => ['May 30, 2026', '09:00 PM – 11:00 PM', 'United Evangelical Church.35 Ohikere, Street, Olodi Apapa, Lagos.'], 'icons' => ['ti-calendar', 'ti-time', 'ti-location-pin']],
                        ['icon' => 'ti-gift', 'title' => 'Wedding Reception', 'items' => ['May 30, 2026', '12:00 PM onwards', 'Cedec Multi-purpose Hall. 17 Kudaisi Street, Olodi Apapa, Lagos'], 'icons' => ['ti-calendar', 'ti-time', 'ti-location-pin']],
                        // ['icon' => 'ti-home', 'title' => 'After Party', 'items' => ['Bana Hotel', '7 min from venue', 'Special rates available'], 'icons' => ['ti-direction-alt', 'ti-direction', 'ti-money']],
                    ];
                @endphp
                @foreach($details as $i => $detail)
                    <div class="text-center bg-white p-6 sm:p-8 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-400" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                        <div class="w-14 h-14 bg-gradient-to-br from-royal-purple to-lilac rounded-2xl flex items-center justify-center mx-auto mb-5 shadow-lg shadow-royal-purple/20">
                            <i class="{{ $detail['icon'] }} text-white text-xl"></i>
                        </div>
                        <h4 class="font-cormorant text-xl text-royal-purple mb-4">{{ $detail['title'] }}</h4>
                        <div class="space-y-3">
                            @foreach($detail['items'] as $j => $item)
                                <p class="flex items-center justify-center text-gray-500 text-sm gap-2">
                                    <i class="{{ $detail['icons'][$j] }} text-lilac text-xs"></i> {{ $item }}
                                </p>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
<div class="py-12 sm:py-16 bg-gradient-to-br from-wedding-pink to-white">
    <div class="container mx-auto px-4 sm:px-6 text-center" data-aos="fade-up">
        <h3 class="font-cormorant text-2xl text-royal-purple mb-3">Questions?</h3>
        <p class="text-gray-500 mb-6 text-sm max-w-lg mx-auto">
            If you have any questions about the event, please don't hesitate to contact us.
        </p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
            <a href="mailto:unachukwu.samuel@gmail.com" class="inline-flex items-center justify-center px-6 py-3 bg-royal-purple text-white rounded-xl hover:bg-royal-purple/90 transition-all duration-300 text-sm font-nunito">
                <i class="ti-email mr-2"></i> Email Us
            </a>
            <a href="tel:+2349025750231" class="inline-flex items-center justify-center px-6 py-3 border-2 border-royal-purple text-royal-purple rounded-xl hover:bg-royal-purple hover:text-white transition-all duration-300 text-sm font-nunito">
                <i class="ti-mobile mr-2"></i> Call Us
            </a>
        </div>
    </div>
</div>
@endsection
