@extends('layouts.app')

@section('title', 'Thank You - Faith & Samuel — Together Forever')

@section('content')
<div class="min-h-screen flex items-center justify-center py-12 sm:py-20 bg-gradient-to-br from-wedding-pink via-white to-wedding-pink">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="max-w-2xl mx-auto">
            <!-- Thank You Card -->
            <div class="bg-white rounded-2xl shadow-2xl p-6 sm:p-10 text-center relative overflow-hidden" data-aos="zoom-in">
                <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-royal-purple via-lilac to-royal-purple"></div>

                <div class="mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-royal-purple to-lilac rounded-full flex items-center justify-center mx-auto mb-5 shadow-xl shadow-royal-purple/30 animate-bounce">
                        <i class="ti-heart text-white text-3xl"></i>
                    </div>
                    <h2 class="font-cormorant text-4xl sm:text-5xl gradient-text mb-3">Thank You!</h2>
                    <p class="font-alex text-2xl sm:text-3xl text-lilac">Your generosity warms our hearts</p>
                </div>

                @if($donation)
                    <div class="bg-gray-50 rounded-2xl p-5 sm:p-6 mb-8 text-left border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="font-cormorant text-xl text-royal-purple mb-4 text-center">Donation Summary</h3>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="font-nunito text-gray-500 text-sm">Name:</span>
                                <span class="font-nunito font-semibold text-gray-800">{{ $donation['name'] }}</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="font-nunito text-gray-500 text-sm">Amount:</span>
                                <span class="font-nunito font-bold text-royal-purple text-xl">₦{{ number_format($donation['amount'], 2) }}</span>
                            </div>
                            @if($donation['message'])
                                <div class="py-2">
                                    <span class="font-nunito text-gray-500 text-sm block mb-2">Message:</span>
                                    <p class="font-nunito text-gray-600 italic bg-white p-4 rounded-xl border border-gray-100 text-sm leading-relaxed">"{{ $donation['message'] }}"</p>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif

                <div class="mb-8" data-aos="fade-up" data-aos-delay="300">
                    <p class="text-gray-500 text-sm mb-3 leading-relaxed">
                        Your generous gift means the world to us. It will help us build our dream life together.
                    </p>
                    <p class="text-gray-500 text-sm mb-2">With all our love and gratitude,</p>
                    <p class="font-alex text-2xl sm:text-3xl gradient-text">Faith & Samuel</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 justify-center" data-aos="fade-up" data-aos-delay="400">
                    <a href="{{ route('home') }}" class="wedding-button inline-flex items-center justify-center">
                        <i class="ti-home mr-2"></i> Back to Home
                    </a>
                    <a href="{{ route('wishes') }}" class="inline-flex items-center justify-center px-6 py-3 border-2 border-royal-purple text-royal-purple rounded hover:bg-royal-purple hover:text-white transition-all duration-300 font-nunito text-sm font-semibold uppercase tracking-wider">
                        <i class="ti-heart mr-2"></i> Send a Wish
                    </a>
                </div>
            </div>

            <div class="mt-8 text-center" data-aos="fade-up" data-aos-delay="500">
                <div class="flex justify-center gap-4">
                    <i class="ti-heart text-lilac text-lg heart-animation" style="animation-delay: 0s"></i>
                    <i class="ti-heart text-royal-purple text-xl heart-animation" style="animation-delay: 0.3s"></i>
                    <i class="ti-heart text-lilac text-lg heart-animation" style="animation-delay: 0.6s"></i>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@if($showConfetti)
@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof triggerConfetti === 'function') { triggerConfetti(); }
});
</script>
@endsection
@endif
