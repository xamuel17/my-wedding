@extends('layouts.app')

@section('title', 'Donate - Faith & Samuel Wedding')

@section('content')
<!-- Hero -->
<div class="relative bg-gradient-to-br from-royal-purple via-royal-purple/90 to-lilac/80 py-20 sm:py-28 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-40 h-40 border border-white/30 rounded-full"></div>
        <div class="absolute bottom-10 right-10 w-60 h-60 border border-white/20 rounded-full"></div>
    </div>
    <div class="relative container mx-auto px-4 sm:px-6 text-center text-white">
        <span class="font-alex text-3xl sm:text-4xl block mb-3 opacity-90" data-aos="fade-down">Gift of Love</span>
        <h1 class="font-cormorant text-4xl sm:text-5xl lg:text-6xl font-semibold text-white mb-4" data-aos="fade-up" data-aos-delay="100">Support Our Journey</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto font-nunito" data-aos="fade-up" data-aos-delay="200">
            Your generous gift will help us start our new life together. Every contribution is deeply cherished.
        </p>
    </div>
</div>

<div class="py-12 sm:py-20 bg-gray-50/50">
    <div class="container mx-auto px-4 sm:px-6">
        <!-- Bank Details -->
        <div class="max-w-2xl mx-auto mb-10 sm:mb-14" data-aos="fade-up">
            <div class="bg-white rounded-2xl shadow-xl p-6 sm:p-8 border border-lilac/30 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-royal-purple to-lilac"></div>
                <h3 class="font-cormorant text-2xl text-royal-purple mb-6 text-center">Bank Transfer Details</h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="font-nunito font-semibold text-gray-600 text-sm">Bank:</span>
                        <span class="font-nunito text-gray-900 font-medium">Zenith Bank</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="font-nunito font-semibold text-gray-600 text-sm">Account Name:</span>
                        <span class="font-nunito text-gray-900 font-medium">Faith & Samuel Wedding</span>
                    </div>
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <span class="font-nunito font-semibold text-gray-600 text-sm">Account Number:</span>
                        <span class="font-nunito text-royal-purple font-bold text-lg tracking-wider">9876543210</span>
                    </div>
                </div>
                <div class="mt-6 p-4 bg-royal-purple/5 rounded-xl">
                    <p class="text-sm text-gray-500 text-center">
                        <i class="ti-info-alt text-royal-purple mr-1"></i>
                        Please use your name as the reference when making the transfer
                    </p>
                </div>
            </div>
        </div>

        <!-- Donation Form -->
        <div class="max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
            <form action="{{ route('donate.confirm') }}" method="POST" class="wedding-form bg-white rounded-2xl shadow-xl p-6 sm:p-8 border border-gray-100">
                @csrf
                <div class="text-center mb-8">
                    <div class="w-14 h-14 bg-gradient-to-br from-royal-purple to-lilac rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-royal-purple/20">
                        <i class="ti-gift text-white text-xl"></i>
                    </div>
                    <h3 class="font-cormorant text-2xl text-royal-purple mb-1">Confirm Your Gift</h3>
                    <p class="text-gray-500 text-sm">Fill in your details after making the bank transfer</p>
                </div>

                <div class="mb-5">
                    <label for="name" class="block font-nunito font-semibold text-gray-700 mb-2 text-sm">Your Name <span class="text-red-400">*</span></label>
                    <input type="text" id="name" name="name" required value="{{ old('name') }}" class="w-full wedding-form-input" placeholder="John and Jane Doe">
                    @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-5">
                    <label for="amount" class="block font-nunito font-semibold text-gray-700 mb-2 text-sm">Amount Donated ($) <span class="text-red-400">*</span></label>
                    <input type="number" id="amount" name="amount" required min="1" step="0.01" value="{{ old('amount') }}" class="w-full wedding-form-input" placeholder="100.00">
                    @error('amount') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-5">
                    <label for="message" class="block font-nunito font-semibold text-gray-700 mb-2 text-sm">Message / Love Note</label>
                    <textarea id="message" name="message" rows="4" class="w-full wedding-form-input resize-none" placeholder="Wishing you both a lifetime of love and happiness...">{{ old('message') }}</textarea>
                    @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="mb-8">
                    <label class="flex items-start cursor-pointer group">
                        <input type="checkbox" name="confirm_transfer" value="1" required class="mt-1 mr-3 accent-royal-purple">
                        <span class="text-gray-600 text-sm group-hover:text-gray-800 transition-colors">
                            I have already sent the money via bank transfer to the account above <span class="text-red-400">*</span>
                        </span>
                    </label>
                    @error('confirm_transfer') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="wedding-button inline-flex items-center justify-center px-8 py-4">
                        <i class="ti-heart mr-2"></i> Confirm My Gift
                    </button>
                </div>
            </form>
        </div>

        <!-- Preview -->
        <div class="max-w-2xl mx-auto mt-10 sm:mt-14" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-gradient-to-br from-wedding-pink to-white rounded-2xl p-8 text-center shadow-md">
                <div class="w-16 h-16 bg-gradient-to-br from-royal-purple to-lilac rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <i class="ti-heart text-white text-2xl heart-animation"></i>
                </div>
                <h3 class="font-cormorant text-xl text-royal-purple mb-3">Thank You!</h3>
                <p class="text-gray-500 text-sm">After confirming, you'll see a special celebration animation as our way of saying thank you!</p>
            </div>
        </div>
    </div>
</div>
@endsection
