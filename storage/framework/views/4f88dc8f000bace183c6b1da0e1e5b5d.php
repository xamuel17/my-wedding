<?php $__env->startSection('title', 'Our Story - Faith & Samuel — Together Forever'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero -->
<div class="relative bg-gradient-to-br from-royal-purple via-royal-purple/90 to-lilac/80 py-20 sm:py-28 overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-20 w-40 h-40 border border-white/30 rounded-full"></div>
        <div class="absolute bottom-10 left-10 w-60 h-60 border border-white/20 rounded-full"></div>
    </div>
    <div class="relative container mx-auto px-4 sm:px-6 text-center text-white">
        <span class="font-alex text-3xl sm:text-4xl block mb-3 opacity-90" data-aos="fade-down">Our Journey</span>
        <h1 class="font-cormorant text-4xl sm:text-5xl lg:text-6xl font-semibold text-white mb-4" data-aos="fade-up" data-aos-delay="100">Our Story</h1>
        <p class="mt-4 text-white/80 max-w-2xl mx-auto font-nunito" data-aos="fade-up" data-aos-delay="200">
            From the moment we met to the day we say "I do," every chapter has led us to this beautiful beginning.
        </p>
    </div>
</div>

<!-- Story Content -->
<section class="py-16 sm:py-24">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="grid md:grid-cols-2 gap-8 lg:gap-16 items-center mb-16 sm:mb-24">
            <div class="relative" data-aos="fade-right">
                <div class="relative p-2 sm:p-4">
                    <img src="<?php echo e(asset('assets/gallery/10.jpg')); ?>" alt="Our Story" class="rounded-2xl shadow-2xl w-full">
                    <div class="absolute -top-4 -right-4 sm:-top-6 sm:-right-6 w-16 h-16 sm:w-24 sm:h-24 bg-gradient-to-br from-royal-purple to-lilac rounded-full flex items-center justify-center animate-spin-slow shadow-lg">
                        <i class="ti-heart text-white text-xl sm:text-3xl"></i>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-delay="200">
                <span class="font-alex text-2xl sm:text-3xl text-lilac block mb-2">Our love.</span>
                <h3 class="font-cormorant text-3xl sm:text-4xl mb-6">How It All Began</h3>
                                <p class="text-gray-500 mb-4 leading-relaxed">Faith and Samuel’s story began in the most ordinary place. What started as a simple conversation between strangers quickly grew into a genuine friendship, built on laughter, shared moments, and an easy connection. Over time, that friendship blossomed into love.

<p class="text-gray-500 mb-6 leading-relaxed">Life brought us even closer when we became colleagues in the same work place, sharing not just workspaces but dreams, ideas, and daily experiences. Even when Faith moved on to a new opportunity, our bond only grew stronger.</p>


    <p class="text-gray-500 mb-4 leading-relaxed">At the heart of our love is a shared vision to build a life of purpose, self-sustainability, and financial freedom. Together, we are not just partners in love, but partners in ambition, working hand in hand to create a future, a business, and a life we truly believe in.</p>

    <p class="text-gray-500 mb-6 leading-relaxed">Today, we stand not only as lovers, but as best friends and builders of a shared dream choosing each other, every step of the way.</p>

                <div class="flex items-center gap-3">
                    <div class="w-10 h-px bg-royal-purple"></div>
                    <h4 class="font-cormorant text-lg text-royal-purple">October 2nd, 2025, We Said Yes!</h4>
                </div>
            </div>
        </div>

        <!-- Timeline -->
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12" data-aos="fade-up">
                <span class="font-alex text-2xl text-lilac block mb-2">Milestones</span>
                <h3 class="font-cormorant text-3xl sm:text-4xl text-royal-purple">Our Journey Together</h3>
            </div>

            <?php
                $events = [
                    ['icon' => 'ti-heart', 'title' => 'First Meeting', 'date' => '27th June, 2023', 'text' => 'The day our eyes first met across a crowded room, and everything changed forever.', 'highlight' => false],
                    ['icon' => 'ti-star', 'title' => 'First Date', 'date' => '2nd August, 2023', 'text' => 'A perfect evening filled with laughter, conversation, and the beginning of something beautiful.', 'highlight' => false],
                    ['icon' => 'ti-heart', 'title' => 'Falling in Love', 'date' => '3rd September, 2023', 'text' => 'Seasons changed, and so did our hearts. We knew this was forever.', 'highlight' => false],
                    ['icon' => 'ti-medall', 'title' => 'The Proposal', 'date' => '2nd October, 2025', 'text' => 'On one knee, with tears of joy, I asked the question that would change our lives forever.', 'highlight' => true],
                    ['icon' => 'ti-home', 'title' => 'The Wedding', 'date' => '30th May, 2026', 'text' => 'The day we say "I do" and begin our forever together. Join us as we start this new chapter!', 'highlight' => true],
                ];
            ?>

            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-6 md:left-1/2 md:-translate-x-1/2 w-0.5 h-full bg-gradient-to-b from-royal-purple via-lilac to-royal-purple"></div>

                <div class="space-y-8 sm:space-y-12">
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="relative flex items-start md:items-center <?php echo e($i % 2 === 0 ? '' : 'md:flex-row-reverse'); ?>"
                             data-aos="<?php echo e($i % 2 === 0 ? 'fade-right' : 'fade-left'); ?>" data-aos-delay="<?php echo e($i * 100); ?>">

                            <!-- Card (mobile: always right; desktop: alternates) -->
                            <div class="ml-16 md:ml-0 md:w-[calc(50%-2rem)] <?php echo e($i % 2 === 0 ? 'md:pr-8 md:text-right' : 'md:pl-8'); ?>">
                                <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-400 <?php echo e($event['highlight'] ? 'border-2 border-royal-purple ring-2 ring-royal-purple/10' : 'border border-gray-100'); ?>">
                                    <p class="text-xs text-lilac font-nunito font-semibold uppercase tracking-wider mb-1"><?php echo e($event['date']); ?></p>
                                    <h4 class="font-cormorant text-xl text-royal-purple mb-2"><?php echo e($event['title']); ?></h4>
                                    <p class="text-gray-500 text-sm leading-relaxed"><?php echo e($event['text']); ?></p>
                                </div>
                            </div>

                            <!-- Dot -->
                            <div class="absolute left-6 md:left-1/2 -translate-x-1/2 w-12 h-12 bg-gradient-to-br from-royal-purple to-lilac rounded-full flex items-center justify-center z-10 shadow-lg shadow-royal-purple/30 hover:scale-110 transition-transform duration-300">
                                <i class="<?php echo e($event['icon']); ?> text-white text-sm"></i>
                            </div>

                            <!-- Spacer for other side (desktop only) -->
                            <div class="hidden md:block md:w-[calc(50%-2rem)]"></div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <!-- Back to Home -->
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="<?php echo e(route('home')); ?>" class="wedding-button inline-flex items-center justify-center">
                <i class="ti-home mr-2"></i> Back to Home
            </a>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wedding-site\resources\views/story.blade.php ENDPATH**/ ?>