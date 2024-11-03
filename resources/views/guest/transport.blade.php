<x-app-layout>
     <!-- Page header -->
  <header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">ADLERCARGO Transportation and Distribution</h1>
    </div>
  </header>
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
                <span class="text-gray-600">Transport and distribution</span>
            </li>
            </ol>
        </nav>
    </div>
</div>
  <!-- Main content -->
  <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">

    <!-- Features of our Transportation and Distribution services -->
    <div class="bg-white rounded-lg shadow-lg">
      <div class="px-6 py-8">
        <img src="{{url('images/transport/transport.jpg')}}" alt="Transportation and Distribution" class="h-48 w-full object-cover mb-6 rounded">
        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Features of Our Transportation and Distribution Services</h3>
        <ul class="list-disc pl-6">
          <li class="mb-2">Nationwide transportation services for all types of cargo</li>
          <li class="mb-2">Reliable and timely deliveries to all major cities and towns</li>
          <li class="mb-2">Specialized equipment for handling oversized and overweight shipments</li>
          <li class="mb-2">Expedited shipping options for urgent deliveries</li>
          <li class="mb-2">Real-time tracking and monitoring of shipments</li>
          <li class="mb-2">Flexible delivery options to meet your specific needs</li>
          <li class="mb-2">Expert logistics planning and management to optimize efficiency and reduce costs</li>
          <li class="mb-2">Dedicated customer service team to provide support throughout the shipping process</li>
        </ul>
      </div>
    </div>

    <!-- Image section -->
    <div class="bg-gray-100 py-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <img src="{{url('images/transport/transport2.jpg')}}" alt="Truck" class="rounded-lg shadow-lg">
      </div>
    </div>

    <!-- Transportation solutions section -->
    <div class="bg-white rounded-lg shadow-lg">
      <div class="px-6 py-8">
        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Custom Transportation Solutions</h3>
        <p class="mb-4">We understand that every business has unique shipping needs. That's why we offer custom transportation solutions tailored to your specific requirements. Our team of logistics experts will work with you to design a shipping strategy that fits your budget and timeline, and ensures your cargo is delivered safely and securely.</p>
        <ul class="list-disc pl-6">
            <li class="mb-2">Flexible transportation options, including ground, air, and sea</li>
            <li class="mb-2">Specialized equipment and handling for fragile, perishable, or hazardous cargo</li>
            <li class="mb-2">Experienced drivers and operators trained in safety and compliance</li>
            <li class="mb-2">Real-time tracking and monitoring of shipments for transparency and visibility</li>
            <li class="mb-2">Efficient routing and scheduling to optimize delivery times and reduce costs</li>
            <li class="mb-2">Dedicated customer service team available 24/7 for support and assistance</li>
        </ul>
      </div>
    </div>
    <!-- Image section -->
    <div class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <img src="{{url('images/transport/transport3.jpg')}}" alt="Truck" class="rounded-lg shadow-lg">
        </div>
    </div>
  
    <!-- Contact us section -->
    <div class="bg-white rounded-lg shadow-lg">
        <div class="px-6 py-8">
        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Contact Us</h3>
        <p class="mb-4">For inquiries about our Transportation and Distribution services, or to request a quote, please contact our customer service team. We are available 24/7 to assist you with your shipping needs.</p>
        <ul class="list-disc pl-6">
            <li class="mb-2">Phone: 1-800-123-4567</li>
            <li class="mb-2">Email: info@adlercargo.com</li>
            <li class="mb-2">Address: 1234 Main St, Anytown, USA</li>
        </ul>
        </div>
    </div>
  </main>
   {{-- related Links --}}
   <div class="mycontainer mx-auto py-12">
    <h2 class="text-2xl font-bold mb-6">Related Links</h2>
    <div class="flex flex-wrap -mx-4">
      <div class="w-full md:w-1/3 px-4 mb-8">
        <a href="{{route('air')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
          <h3 class="text-lg font-bold mb-2">Air Freight</h3>
          <p class="text-gray-600">Learn more about Our air freight services and its delivery timeframes.</p>
        </a>
      </div>
      <div class="w-full md:w-1/3 px-4 mb-8">
        <a href="{{route('schedule')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
          <h3 class="text-lg font-bold mb-2">Schedule Pick-up</h3>
          <p class="text-gray-600">Schedule an instant pick-up with ADLERCARGO online pick-up tool.</p>
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