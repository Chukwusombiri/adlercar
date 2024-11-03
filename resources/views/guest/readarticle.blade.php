<x-app-layout>
    {{-- breadcrumb --}}
    <div class="bg-gray-100 py-4">
        <div class="container mx-auto px-4">
            <nav class="text-black font-bold" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <a href="/" class="text-blue-600">Home</a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.293 3.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 9H3a1 1 0 110-2h9.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </li>
                    <li class="flex items-center">
                        <span class="text-gray-600">Insights and Innovations</span>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    @livewire('readarticle', ['article' => $article], key($article->id))
    {{-- related links --}}
    <div class="mycontainer mx-auto py-12">
        <h2 class="text-2xl font-bold mb-6">Related Links</h2>
        <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/3 px-4 mb-8">
            <a href="{{route('about')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
            <h3 class="text-lg font-bold mb-2">About Us</h3>
            <p class="text-gray-600">Learn more about our company and our mission.</p>
            </a>
        </div>
        <div class="w-full md:w-1/3 px-4 mb-8">
            <a href="{{route('faqs')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
            <h3 class="text-lg font-bold mb-2">FAQs</h3>
            <p class="text-gray-600">Learn more about us and our services through Frequently Asked Questions.</p>
            </a>
        </div>
        <div class="w-full md:w-1/3 px-4 mb-8">
            <a href="{{route('testimonials')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
            <h3 class="text-lg font-bold mb-2">Popular Reviews</h3>
            <p class="text-gray-600">Find out what clients have to say about ADLERCARGO, services and our team.</p>
            </a>
        </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-app-layout>