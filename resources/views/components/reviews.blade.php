<section class="px-4 py-16 sm:px-6 lg:px-8" x-data="{
    currentPage: 0,
    reviews: [
        {
            initial: 'I',
            name: 'Ike John',
            date: 'March 22, 2020',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus consequat, pellentesque ut nisl fermentum risus scelerisque risus montes.'
        },
        {
            initial: 'M',
            name: 'Mercy Zoe',
            date: 'March 22, 2020',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus consequat, pellentesque ut nisl fermentum risus scelerisque risus montes.'
        },
        {
            initial: 'P',
            name: 'Paul Benard',
            date: 'March 22, 2020',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus consequat, pellentesque ut nisl fermentum risus scelerisque risus montes.'
        },
        {
            initial: 'R',
            name: 'Ruth Falana',
            date: 'March 22, 2020',
            text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus consequat, pellentesque ut nisl fermentum risus scelerisque risus montes.'
        }
    ],
    init() {
        setInterval(() => {
            this.rotateReviews();
        }, 5000);
    },
    rotateReviews() {
        this.reviews.push(this.reviews.shift());
        this.currentPage = (this.currentPage + 1) % 3;
    }
}">
    <div class="container mx-auto">
        <!-- Section Header -->
        <div class="mb-12 text-center">
            <p class="mb-4 text-sm tracking-wider text-gray-500 uppercase">CUSTOMER REVIEWS</p>
            <h2 class="text-3xl sm:text-5xl font-bold text-[#2B2D42] mb-4">
                Honest Reviews from Real People
            </h2>
            <p class="text-xl text-orange-500">
                *Reviews are moderated and verified by Google MyBusiness
            </p>
        </div>

        <!-- Reviews Container -->
        <div class="relative">
            <div class="flex flex-wrap mb-8 -mx-2">
                <template x-for="(review, index) in reviews.slice(0, 4)" :key="index">
                    <div class="w-full p-2 md:w-1/2 lg:w-1/4">
                        <div class="p-6 text-xl bg-white rounded-lg shadow-sm">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="flex items-center justify-center w-10 h-10 font-medium text-white bg-[#00AA00] rounded-full" x-text="review.initial">
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="font-medium text-gray-900" x-text="review.name"></h3>
                                        <p class="text-sm text-gray-500" x-text="review.date"></p>
                                    </div>
                                </div>
                                <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png"
                                     alt="Google" class="h-5">
                            </div>
                            <div class="flex mb-3">
                                <template x-for="star in 5">
                                    <svg class="w-5 h-5 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </template>
                            </div>
                            <p class="leading-8 text-gray-600" x-text="review.text"></p>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Navigation Dots -->
            <div class="flex justify-center space-x-2">
                <template x-for="i in 3" :key="i">
                    <button @click="currentPage = i - 1"
                            :class="{'bg-[#00AA00]': currentPage === i - 1, 'bg-gray-300': currentPage !== i - 1}"
                            class="w-2 h-2 transition-colors duration-300 rounded-full">
                    </button>
                </template>
            </div>
        </div>
    </div>
</section>
