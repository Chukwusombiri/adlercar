<x-app-layout>
    <!-- Page Header -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold leading-tight text-gray-900">Air Freight</h1>
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
                    <span class="text-gray-600">Air Freight</span>
                </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Introduction -->
    <div class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Fast and Reliable</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            Shipping Your Products via Air Freight
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
            At ADLERCARGO, we understand that time is money, and that's why we offer fast and reliable air freight services to our clients. Whether you need to transport sensitive medical equipment or time-critical perishable goods, our air freight services ensure your products arrive at their destination on time and in good condition.
            </p>
        </div>
        </div>
    </div>
    <!-- Benefits Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Benefits of Air Freight</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                Why Choose Air Freight Over Other Modes of Transportation?
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                Air freight is the preferred mode of transportation for many businesses and individuals because of its numerous benefits. Some of the benefits of air freight include:
                </p>
            </div>
            <div class="mt-20">
                <div class="flex flex-wrap justify-center">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
                        <img class="w-full max-h-56 object-cover" src="{{url('images/air/fast.jpg')}}" alt="Fast Delivery">
                        <div class="px-6 py-4">
                            <h3 class="text-lg font-bold mb-2">Fast Delivery</h3>
                            <p class="text-gray-700 text-base">
                            Air freight is known for its speed and efficiency. It allows for fast delivery of goods, especially over long distances, making it ideal for time-sensitive shipments.
                            </p>
                        </div>
                    </div>
                    <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
                        <img class="w-full max-h-56 object-cover" src="{{url('images/air/global.jpg')}}" alt="Global Reach">
                        <div class="px-6 py-4">
                            <h3 class="text-lg font-bold mb-2">Global Reach</h3>
                            <p class="text-gray-700 text-base">
                            Air freight allows for easy transportation of goods to almost any destination in the world. With a vast network of international airports, air freight provides unparalleled global reach for businesses.
                            </p>
                        </div>
                    </div>
                    <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
                        <img class="w-full max-h-56 object-cover" src="{{url('images/air/risk.jpg')}}" alt="Reduced Risk of Damage">
                        <div class="px-6 py-4">
                            <h3 class="text-lg font-bold mb-2">Reduced Risk of Damage</h3>
                            <p class="text-gray-700 text-base">
                            Air freight minimizes the risk of damage to goods during transportation. Unlike other modes of transportation that may involve multiple handling and transfers, air freight provides a streamlined and secure process.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Offerings Section -->
    <div class="bg-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Our Air Freight Services</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Comprehensive Solutions for Your Air Freight Needs
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    ADLERCARGO offers a wide range of air freight services to cater to the diverse needs of our clients. Our services include:
                </p>
            </div>
            <div class="mt-20">
                <div class="flex flex-wrap justify-center">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
                        <img class="w-full max-h-56 object-cover" src="{{url('images/air/express.jpg')}}" alt="Express Air Freight">
                        <div class="px-6 py-4">
                            <h3 class="text-lg font-bold mb-2">Express Air Freight</h3>
                            <p class="text-gray-700 text-base">
                            For urgent and time-critical shipments, we offer express air freight services that ensure your goods are delivered quickly and efficiently to their destination.
                            </p>
                        </div>
                    </div>
                    <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
                      <img class="w-full max-h-56 object-cover" src="{{url('images/air/door.jpg')}}" alt="Door-to-Door Delivery">
                      <div class="px-6 py-4">
                        <h3 class="text-lg font-bold mb-2">Door-to-Door Delivery</h3>
                        <p class="text-gray-700 text-base">
                          Our door-to-door delivery service offers a seamless end-to-end solution, where we handle the entire process from pickup to delivery, ensuring a hassle-free experience for our clients.
                        </p>
                      </div>
                    </div>
                    <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
                      <img class="w-full max-h-56 object-cover" src="{{url('images/air/custom.jpg')}}" alt="Customs Clearance">
                      <div class="px-6 py-4">
                        <h3 class="text-lg font-bold mb-2">Customs Clearance</h3>
                        <p class="text-gray-700 text-base">
                          We have a team of experienced customs clearance experts who can handle all the necessary paperwork and formalities, ensuring smooth and efficient customs clearance for your air freight shipments.
                        </p>
                      </div>
                    </div>
                    <div class="max-w-sm rounded overflow-hidden shadow-lg m-4">
                      <img class="w-full max-h-56 object-cover" src="{{url('images/air/insurance.jpg')}}" alt="Cargo Insurance">
                      <div class="px-6 py-4">
                        <h3 class="text-lg font-bold mb-2">Cargo Insurance</h3>
                        <p class="text-gray-700 text-base">
                          We offer cargo insurance options to protect your goods during air freight transportation. Our comprehensive insurance coverage provides peace of mind and added security for your valuable shipments.
                        </p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us Section -->
    <div class="bg-cover bg-center" style="background-image: url('/images/air/support.jpeg')">
        <div class="bg-gray-900 bg-opacity-50 h-full max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Contact Us</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-200 sm:text-4xl">
                Get in Touch with ADLERCARGO
                </p>
                <p class="mt-4 max-w-2xl text-xl text-white lg:mx-auto">
                Have a question or need more information about our air freight services? Contact us today and our team will be happy to assist you.
                </p>
            </div>
            <div class="mt-12">
                <div class="flex justify-center rounded-md shadow">
                    <a href="{{route('contact')}}" class="py-4 px-6 bg-indigo-500 hover:bg-indigo-600 font-medium text-white uppercase tracking-wider rounded-md">
                        Contact Us
                    </a>
                </div>
            </div>
        </div> 
    </div>
    {{-- related links --}}
    <div class="mycontainer mx-auto py-12">
        <h2 class="text-2xl font-bold mb-6">Related Links</h2>
        <div class="flex flex-wrap -mx-4">
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