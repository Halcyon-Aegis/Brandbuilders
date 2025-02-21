<section class="px-4 py-16 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-3xl mx-auto">
        <h2 class="mb-12 text-3xl font-bold text-center text-gray-900">Website Design Q&A</h2>

        <div class="space-y-4">
            <div x-data="{ open: false }" class="border-b border-gray-200">
                <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-left">
                    <span class="text-lg font-medium text-gray-900">Why should I hire you for Web Design and Online marketing</span>
                    <svg :class="{'rotate-180': open}" class="w-6 h-6 transition-transform duration-200 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open" x-collapse>
                    <div class="pb-4 text-gray-600">
                        We bring expertise, creativity, and a proven track record of delivering successful websites that drive results.
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }" class="border-b border-gray-200">
                <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-left">
                    <span class="text-lg font-medium text-gray-900">How long would it take to build a website?</span>
                    <svg :class="{'rotate-180': open}" class="w-6 h-6 transition-transform duration-200 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open" x-collapse>
                    <div class="pb-4 text-gray-600">
                        Timeline varies based on project complexity, typically 4-8 weeks for most projects.
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }" class="border-b border-gray-200">
                <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-left">
                    <span class="text-lg font-medium text-gray-900">Will I own the website?</span>
                    <svg :class="{'rotate-180': open}" class="w-6 h-6 transition-transform duration-200 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open" x-collapse>
                    <div class="pb-4 text-gray-600">
                        Yes, you'll have full ownership of your website once the project is completed.
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }" class="border-b border-gray-200">
                <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-left">
                    <span class="text-lg font-medium text-gray-900">What's your payment plan?</span>
                    <svg :class="{'rotate-180': open}" class="w-6 h-6 transition-transform duration-200 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open" x-collapse>
                    <div class="pb-4 text-gray-600">
                        We offer flexible payment plans with an initial deposit and milestone-based payments.
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }" class="border-b border-gray-200">
                <button @click="open = !open" class="flex items-center justify-between w-full py-4 text-left">
                    <span class="text-lg font-medium text-gray-900">Do you offer support after launch of website projects?</span>
                    <svg :class="{'rotate-180': open}" class="w-6 h-6 transition-transform duration-200 transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="open" x-collapse>
                    <div class="pb-4 text-gray-600">
                        Yes, we provide ongoing support and maintenance services to keep your website running smoothly.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
