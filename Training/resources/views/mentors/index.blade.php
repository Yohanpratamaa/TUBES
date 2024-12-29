<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <!-- Judul di kiri -->
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Find Mentor') }}
            </h2>
            <!-- Ikon di kanan -->
            <div class="flex items-center space-x-4">
                {{ svg('ionicon-document-text-outline', 'w-6 h-6 text-gray-600') }}
                {{ svg('ionicon-cart-outline', 'w-6 h-6 text-gray-600') }}
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <!-- Search and Filters Section -->
                <h1 class="font-bold text-2xl mb-4">249 Result</h1>
                <div class="flex flex-wrap items-center gap-4 mb-6">
                    <!-- Search Bar -->
                    <div class="relative flex items-center">
                        <h1 class="absolute right-6 w-6 h-6 text-gray-300">|</h1>
                        {{ svg('ionicon-search-outline','absolute right-3 w-5 h-5 text-purple-500') }}
                        <input
                            type="text"
                            class="border border-gray-300 rounded-full shadow-sm focus:ring-purple-500 focus:border-purple-500 pl-10 pr-4 py-2 text-sm text-gray-600 placeholder-gray-400 w-64"
                            placeholder="Search Here..."
                        />
                    </div>

                    <!-- Price Button -->
                    <button onclick="alert('Price filter clicked!')" 
                            class="flex items-center space-x-10 border border-gray-300 rounded-full px-4 py-2 text-sm text-gray-600 shadow-sm hover:bg-gray-100">
                        <span class="mr-2">Price</span>
                        <span class="text-purple-500 font-bold">$$</span>
                    </button>

                    <!-- Subject Button -->
                    <button onclick="alert('Subject filter clicked!')" 
                            class="flex items-center space-x-16 border border-gray-300 rounded-full px-4 py-2 text-sm text-gray-600 shadow-sm hover:bg-gray-100">
                        <span>Subject</span>
                        {{ svg('ionicon-chevron-down','ml-2 w-4 h-4 text-gray-400') }}
                    </button>

                    <!-- Filters Button -->
                    <button onclick="alert('Filters clicked!')" 
                            class="flex items-center space-x-28 border border-gray-300 rounded-full px-4 py-2 text-sm text-gray-600 shadow-sm hover:bg-gray-100">
                        <span class="flex">Filters</span>
                        {{ svg('ionicon-options','ml-2 w-4 h-4 text-gray-400') }}
                    </button>
                </div>

                <h1 class="font-bold text-purple-500 mb-4">This in our mentors</h1>

                <!-- Mentors Grid -->
                <div class="flex flex-wrap lg:flex-nowrap w-full">
                    <!-- Content Section -->
                    <div class="w-full lg:w-3/4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 px-4">
                            <!-- Card Template -->
                            <div class="bg-transparent">
                                <div class="bg-white border rounded-lg shadow-lg overflow-hidden w-64">
                                    <img src="https://via.placeholder.com/300x200" alt="Course Image" class="w-full h-40 object-cover">
                                    <div class="p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <p class="text-sm text-gray-600">Natalie Shiren</p>
                                            <div class="flex space-x-1 text-yellow-500">
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-half-sharp', 'w-5 h-5') }}
                                            </div>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800 mb-2">UI/UX Design for Beginners</h3>
                                        <div class="text-purple-500 font-bold text-xl mb-4">$98</div>
                                    </div>
                                </div>
                                <button onclick="alert('Added to cart!')" 
                                        class="relative flex left-16 bottom-5 w-32 bg-purple-300 text-white px-5 py-2 rounded-full hover:bg-purple-600">
                                    Add to Cart
                                </button>
                            </div>
                            <div class="bg-transparent">
                                <div class="bg-white border rounded-lg shadow-lg overflow-hidden w-64">
                                    <img src="https://via.placeholder.com/300x200" alt="Course Image" class="w-full h-40 object-cover">
                                    <div class="p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <p class="text-sm text-gray-600">Natalie Shiren</p>
                                            <div class="flex space-x-1 text-yellow-500">
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-half-sharp', 'w-5 h-5') }}
                                            </div>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800 mb-2">UI/UX Design for Beginners</h3>
                                        <div class="text-purple-500 font-bold text-xl mb-4">$98</div>
                                    </div>
                                </div>
                                <button onclick="alert('Added to cart!')" 
                                        class="relative flex left-16 bottom-5 w-32 bg-purple-300 text-white px-5 py-2 rounded-full hover:bg-purple-600">
                                    Add to Cart
                                </button>
                            </div>
                            <div class="bg-transparent">
                                <div class="bg-white border rounded-lg shadow-lg overflow-hidden w-64">
                                    <img src="https://via.placeholder.com/300x200" alt="Course Image" class="w-full h-40 object-cover">
                                    <div class="p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <p class="text-sm text-gray-600">Natalie Shiren</p>
                                            <div class="flex space-x-1 text-yellow-500">
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-half-sharp', 'w-5 h-5') }}
                                            </div>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800 mb-2">UI/UX Design for Beginners</h3>
                                        <div class="text-purple-500 font-bold text-xl mb-4">$98</div>
                                    </div>
                                </div>
                                <button onclick="alert('Added to cart!')" 
                                        class="relative flex left-16 bottom-5 w-32 bg-purple-300 text-white px-5 py-2 rounded-full hover:bg-purple-600">
                                    Add to Cart
                                </button>
                            </div>
                            <div class="bg-transparent">
                                <div class="bg-white border rounded-lg shadow-lg overflow-hidden w-64">
                                    <img src="https://via.placeholder.com/300x200" alt="Course Image" class="w-full h-40 object-cover">
                                    <div class="p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <p class="text-sm text-gray-600">Natalie Shiren</p>
                                            <div class="flex space-x-1 text-yellow-500">
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-half-sharp', 'w-5 h-5') }}
                                            </div>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800 mb-2">UI/UX Design for Beginners</h3>
                                        <div class="text-purple-500 font-bold text-xl mb-4">$98</div>
                                    </div>
                                </div>
                                <button onclick="alert('Added to cart!')" 
                                        class="relative flex left-16 bottom-5 w-32 bg-purple-300 text-white px-5 py-2 rounded-full hover:bg-purple-600">
                                    Add to Cart
                                </button>
                            </div>
                            <div class="bg-transparent">
                                <div class="bg-white border rounded-lg shadow-lg overflow-hidden w-64">
                                    <img src="https://via.placeholder.com/300x200" alt="Course Image" class="w-full h-40 object-cover">
                                    <div class="p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <p class="text-sm text-gray-600">Natalie Shiren</p>
                                            <div class="flex space-x-1 text-yellow-500">
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-half-sharp', 'w-5 h-5') }}
                                            </div>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800 mb-2">UI/UX Design for Beginners</h3>
                                        <div class="text-purple-500 font-bold text-xl mb-4">$98</div>
                                    </div>
                                </div>
                                <button onclick="alert('Added to cart!')" 
                                        class="relative flex left-16 bottom-5 w-32 bg-purple-300 text-white px-5 py-2 rounded-full hover:bg-purple-600">
                                    Add to Cart
                                </button>
                            </div>
                            <div class="bg-transparent">
                                <div class="bg-white border rounded-lg shadow-lg overflow-hidden w-64">
                                    <img src="https://via.placeholder.com/300x200" alt="Course Image" class="w-full h-40 object-cover">
                                    <div class="p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <p class="text-sm text-gray-600">Natalie Shiren</p>
                                            <div class="flex space-x-1 text-yellow-500">
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-sharp', 'w-5 h-5') }}
                                                {{ svg('ionicon-star-half-sharp', 'w-5 h-5') }}
                                            </div>
                                        </div>
                                        <h3 class="text-lg font-semibold text-gray-800 mb-2">UI/UX Design for Beginners</h3>
                                        <div class="text-purple-500 font-bold text-xl mb-4">$98</div>
                                    </div>
                                </div>
                                <button onclick="alert('Added to cart!')" 
                                        class="relative flex left-16 bottom-5 w-32 bg-purple-300 text-white px-5 py-2 rounded-full hover:bg-purple-600">
                                    Add to Cart
                                </button>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <div class="mt-8 flex justify-center">
                            <nav class="inline-flex rounded-md shadow-sm">
                                <a href="#" onclick="alert('See More clicked!')" 
                                   class="mr-8 px-5 py-2 border border-gray-300 text-white bg-purple-400 rounded-full hover:bg-purple-600">
                                    See More...
                                </a>
                            </nav>
                        </div>
                    </div>

                    <!-- Sidebar Section -->
                    <div class="w-full lg:w-1/4 mt-8 lg:mt-0">
                        <div class="p-4 bg-transparent border rounded-lg w-full max-w-sm">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold text-gray-900">Recent Messages</h3>
                                {{ svg('ionicon-ellipsis-vertical-sharp','ml-2 w-4 h-4 text-gray-400') }}
                            </div>
                            <ul>
                                <li class="flex items-center space-x-4 mb-4 cursor-pointer border-b pb-4" onclick="showAlert('Florencio Dorrance', 'Hey, Let me know if you’re still available...')">
                                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Florencio Dorrance</h4>
                                        <p class="text-sm text-gray-600">Hey, Let me know if you're still available...</p>
                                    </div>
                                </li>
                                <li class="flex items-center space-x-4 mb-4 cursor-pointer border-b pb-4" onclick="showAlert('William Chynita', 'Okay thanks')">
                                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
                                    <div>
                                        <h4 class="font-semibold text-gray-800">William Chynita</h4>
                                        <p class="text-sm text-gray-600">Okay thanks</p>
                                    </div>
                                </li>
                                <li class="flex items-center space-x-4 mb-4 cursor-pointer border-b pb-4" onclick="showAlert('Henry David', 'Alright I’ll get back to you ASAP')">
                                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Henry David</h4>
                                        <p class="text-sm text-gray-600">Alright I’ll get back to you ASAP</p>
                                    </div>
                                </li>
                                <li class="flex items-center space-x-4 cursor-pointer pb-4" onclick="showAlert('Charlotte Flair', 'Sounds good buddy')">
                                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Charlotte Flair</h4>
                                        <p class="text-sm text-gray-600">Sounds good buddy</p>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    function showAlert(name, message) {
        alert(`${name}: ${message}`);
    }
</script>