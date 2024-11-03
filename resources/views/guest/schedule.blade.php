<x-app-layout>
<div class="relative">
  <img src="{{url('images/pickup1.jpg')}}" class="w-full h-[30vh] md:h-[40vh] object-cover" alt="Your Image">
  <div class="absolute inset-0 bg-black bg-opacity-50"></div>
  <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
    <h1 class="text-4xl font-bold">Schedule Pickup</h1>    
    <p class="text-lg">Enter your details below to schedule a pickup</p>
  </div>
</div>
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
          <span class="text-gray-600">Schedule Pickup</span>
        </li>
      </ol>
    </nav>
  </div>
</div>
{{-- introduction --}}
<div class="container mx-auto px-4 my-8">
  <div class="flex flex-wrap -mx-4">    
    <div class="w-full md:w-4/6 px-4">
      <h1 class="text-3xl font-bold text-gray-800 mb-4">Schedule Your Pickup with Ease: Reliable Shipping Services</h1>
      <p class="text-gray-700 leading-relaxed mb-8">We offer a convenient and reliable pickup 
        service for all your shipping needs. Whether you're a small business owner or an individual 
        looking to send a package, our pickup service is designed to make your life easier.</p>
      <p class="text-gray-700 leading-relaxed mb-8">With our easy-to-use online scheduling system, you can schedule your pickup in just 
        a few clicks. Our team of professional drivers will arrive at your location on time and handle your package with care. Plus, 
        with real-time tracking and notifications, you'll always know the status of your shipment.</p> 
      <p class="text-gray-700 leading-relaxed mb-8">We understand that your time is valuable, which is why we offer flexible pickup times 
        to fit your busy schedule. And with our competitive pricing and excellent customer service, you can trust us to deliver your 
        package quickly and efficiently.</p>     
    </div>
  </div>
</div>
<!-- Schedule Pickup Form -->
<section class="bg-white py-12">
  <div class="container mx-auto px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div>        
        <img src="https://source.unsplash.com/collection/1346951/800x600" alt="Delivery Truck" class="rounded-lg shadow-lg">
      </div>
      <div class="flex flex-col justify-center">
        <p class="text-gray-700 leading-relaxed mb-8 font-bold">Thank you for choosing ADLERCARGO for your shipping needs. Let's get started on scheduling your pickup today!</p>
        @livewire('schedule-pickups')
      </div>
    </div>
  </div>  
</section>   
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
      <a href="{{route('quote')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
        <h3 class="text-lg font-bold mb-2">Get a Quote</h3>
        <p class="text-gray-600">Request a quote for our delivery services.</p>
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
  window.addEventListener('pickupSubmitted', function(e){
      Swal.fire({                
          icon: e.detail.icon,
          title: e.detail.title,
          html: e.detail.html,                
      });
  })
</script>