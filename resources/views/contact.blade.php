<x-layout>
    <section>
        <div class="">
            <div class="py-16 mx-auto mt-24 text-3xl font-semibold text-center text-white bg-[#00AA00]">Contact BrandBuilders</div>
            <div class="container flex flex-col-reverse gap-12 px-12 py-24 mx-auto sm:flex-row sm:px-0">
                <!-- Left Column -->
                <div class="flex-1 px-8">
                    <h1 class="text-4xl font-bold text-[#2A2744] mb-6">Contact Us</h1>
                    <p class="mb-4 text-lg text-gray-60">
                        Contact BrandBuilders for any enquiries using the enclosed form.
                        We typically reply emails on the same day. You can also reach us via phone.
                    </p>
                    <p class="mb-8 text-lg text-gray-60">We are always ready to hear from you.</p>

                    <!-- Contact Information -->
                    <div class="mb-8 space-y-4 text-lg">
                        <div class="flex flex-wrap items-center space-x-4">
                            <a href="tel:01229873" class="flex items-center text-[#00AA00] hover:text-green-600">
                                <img src="{{asset('img/phone-icon-green.svg')}}" alt="Phone icon green" class="">
                                01 229 8736
                            </a>
                            <a href="tel:09034834608" class="flex items-center text-[#00AA00] hover:text-green-600">
                                <img src="{{asset('img/mobile-icon-green.svg')}}" alt="Mobile icon green" class="">
                                0903 483 4608
                            </a>
                            <a href="https://wa.me/01229873" class="flex items-center text-[#00AA00] hover:text-green-600">
                                <img src="{{asset('img/whatsapp-icon-green.svg')}}" alt="Whatsapp icon green" class="mr-1">
                                01 229 8736
                            </a>
                        </div>
                        <a href="mailto:projects@brandbuilders.agency" class="flex items-center text-[#00AA00] hover:text-green-600">
                            <img src="{{asset('img/message-icon-green.svg')}}" alt="Message icon green" class="mr-1">
                            projects@brandbuilders.agency
                        </a>
                    </div>

                    <!-- Address -->
                    <div class="flex items-start mb-8 text-lg">
                        <img src="{{asset('img/location-icon.svg')}}" alt="Message icon green" class="mr-1">
                        <address class="not-italic text-gray-600">
                            14, Michael Street, Zoo Estate, Legbegbe 103100, Nsukka, Nigeria.
                        </address>
                    </div>

                    <!-- Social Media Links -->
                    <div class="flex space-x-4">
                        <a href="https://x.com/brandbuilders" class="flex items-center justify-center w-10 h-10 text-white transition duration-300 bg-[#00AA00] rounded-full hover:bg-green-600">
                            <img src="{{asset('img/twitter-green.svg')}}" alt="Twitter icon green">
                        </a>
                        <a href="#" class="flex items-center justify-center w-10 h-10 text-white transition duration-300 bg-[#00AA00] rounded-full hover:bg-green-600">
                            <img src="{{asset('img/facebook-icon-green.svg')}}" alt="Facebook icon green">
                        </a>
                        <a href="#" class="flex items-center justify-center w-10 h-10 text-white transition duration-300 bg-[#00AA00] rounded-full hover:bg-green-600">
                            <img src="{{asset('img/instagram-icon-green.svg')}}" alt="instagram icon green">
                        </a>
                        <a href="#" class="flex items-center justify-center w-10 h-10 text-white transition duration-300 bg-[#00AA00] rounded-full hover:bg-green-600">
                            <img src="{{asset('img/github-icon-green.svg')}}" alt="github icon green">
                        </a>
                        <a href="#" class="flex items-center justify-center w-10 h-10 text-white transition duration-300 bg-[#00AA00] rounded-full hover:bg-green-600">
                            <img src="{{asset('img/linkedin-icon-green.svg')}}" alt="linkedin icon green">
                        </a>
                    </div>
                </div>

                <!-- Right Column - Contact Form -->
                <div x-data="{
                    country: 'US',
                    consent: false,
                    formData: {
                        firstName: '',
                        lastName: '',
                        email: '',
                        phone: '',
                        message: ''
                    }
                }" class="flex-1">
                    <form @submit.prevent="// Handle form submission" class="space-y-6 text-md">
                        <div class="grid gap-6 md:grid-cols-2">
                            <div>
                                <label class="block mb-1 font-medium text-gray-700 text-md">
                                    First name<span class="text-orange-500">*</span>
                                </label>
                                <input type="text"
                                       x-model="formData.firstName"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#00AA00] focus:border-[#00AA00]"
                                       placeholder="First name"
                                       required>
                            </div>
                            <div>
                                <label class="block mb-1 font-medium text-gray-700 text-md">
                                    Last name<span class="text-orange-500">*</span>
                                </label>
                                <input type="text"
                                       x-model="formData.lastName"
                                       class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#00AA00] focus:border-[#00AA00]"
                                       placeholder="Last name"
                                       required>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-1 font-medium text-gray-700 text-md">
                                Email<span class="text-orange-500">*</span>
                            </label>
                            <input type="email"
                                   x-model="formData.email"
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#00AA00] focus:border-[#00AA00]"
                                   placeholder="you@company.com"
                                   required>
                        </div>

                        <div>
                            <label class="block mb-1 font-medium text-gray-700 text-md">
                                Phone number<span class="text-orange-500">*</span>
                            </label>
                            <div class="flex">
                                <select x-model="country"
                                        class="px-3 py-2 border border-r-0 border-gray-300 rounded-l-md focus:ring-[#00AA00] focus:border-[#00AA00]">
                                    <option value="US">US</option>
                                    <option value="NG">NG</option>
                                    <option value="GB">GB</option>
                                    <!-- Add more country options as needed -->
                                </select>
                                <input type="tel"
                                       x-model="formData.phone"
                                       class="flex-1 px-4 py-2 border border-gray-300 rounded-r-md focus:ring-[#00AA00] focus:border-[#00AA00]"
                                       placeholder="+1 (555) 000-0000"
                                       required>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-1 font-medium text-gray-700 text-md">
                                Comment or Message<span class="text-orange-500">*</span>
                            </label>
                            <textarea x-model="formData.message"
                                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-[#00AA00] focus:border-[#00AA00]"
                                      rows="4"
                                      required></textarea>
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input type="checkbox"
                                       x-model="consent"
                                       class="w-4 h-4 text-[#00AA00] border-gray-300 rounded focus:ring-[#00AA00]"
                                       required>
                            </div>
                            <div class="ml-3">
                                <p class="text-gray-600 text-md">
                                    By filing this form, you consent to our
                                    <a href="#" class="text-[#00AA00] hover:text-green-600">Privacy Policy</a> and
                                    <a href="#" class="text-[#00AA00] hover:text-green-600">Terms of Service</a>.
                                </p>
                            </div>
                        </div>

                        <button type="submit"
                                :disabled="!consent"
                                class="w-full px-6 py-3 font-medium text-white bg-[#00AA00] rounded-md sm:w-auto hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#00AA00] disabled:opacity-50 disabled:cursor-not-allowed">
                            SEND MESSAGE
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
