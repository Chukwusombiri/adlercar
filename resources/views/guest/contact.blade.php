<x-app-layout>
     <!-- Contact Us Banner -->
    <header class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold leading-tight sm:text-5xl md:text-6xl">Contact Us</h1>
            <p class="mt-4 text-xl sm:text-2xl md:text-3xl">Get in touch with us for any inquiries or assistance</p>
        </div>
        </div>
    </header>
    <div class="mycontainer mx-auto py-16 px-4 sm:px-6 lg:px-8 bg-white rounded shadow">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
            <div>
                <h2 class="text-2xl font-bold mb-4">Contact Information</h2>
                <p class="text-gray-600 mb-2"><strong>Address:</strong> 3547 Kingsboro road, Atlanta, Georgia, US</p>
                <p class="text-gray-600 mb-2"><strong>Phone:</strong> {{config('app.phone')}}</p>
                <p class="text-gray-600 mb-2"><strong>Email:</strong> info@adlercargo.com</p>
                <p class="text-gray-600 mb-2"><strong>Working Hours:</strong> Mon-Fri: 8am-6pm, Sat-Sun: Closed</p>               
            </div>
        </div>
    </div>
    <div class="mycontainer mx-auto px-4 py-6">
        <div class="flex flex-wrap -mx-4">
          @livewire('contact-form')
          <div class="w-full lg:w-1/2 px-4">
            <img src="{{url('/images/support.jpeg')}}" alt="Contact Us" class="w-full rounded shadow">
          </div>
        </div>
      </div>
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
            <a href="{{route('testimonials')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
              <h3 class="text-lg font-bold mb-2">What have been said</h3>
              <p class="text-gray-600">Find out what clients have to say about Adlercargo and our services.</p>
            </a>
          </div>
          <div class="w-full md:w-1/3 px-4 mb-8">
            <a href="{{route('blogs')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
              <h3 class="text-lg font-bold mb-2">Our Blog</h3>
              <p class="text-gray-600">Read the latest news and updates from our team.</p>
            </a>
          </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-app-layout>
<script>
    Livewire.on('contactFormSubmitted', (e) => {
        toastr.success('Successful! Our team will get in touch with you shortly.');
    })
</script>
