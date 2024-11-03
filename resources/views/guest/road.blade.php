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
                        <span class="text-gray-600">Road Freight</span>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Content -->
    <main class="container mx-auto my-10 px-4">
        <section class="mb-20">
        <h2 class="text-4xl font-bold mb-8">Road Freight</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg">
            <div class="px-6 py-8">
                <img src="{{url('images/road/flexible.jpg')}}" alt="Road Freight" class="h-48 w-full object-cover mb-6 rounded">
                <h3 class="text-2xl font-bold mb-2">Flexible Solutions</h3>
                <p class="text-gray-700 leading-relaxed">We offer a wide range of road freight solutions to meet your unique transportation needs. From full truckload and less-than-truckload to specialized services, we have you covered.</p>
            </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg">
            <div class="px-6 py-8">
                <img src="{{url('images/road/efficient.jpg')}}" alt="Road Freight" class="h-48 w-full object-cover mb-6 rounded">
                <h3 class="text-2xl font-bold mb-2">Efficient Delivery</h3>
                <p class="text-gray-700 leading-relaxed">Our road freight services are designed to get your goods delivered efficiently and on time. We have a well-maintained fleet of trucks and experienced drivers who ensure smooth transportation of your cargo, whether it's across town or across the country.</p>
            </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg">
            <div class="px-6 py-8">
            <img src="{{url('images/road/reliable.jpg')}}" alt="Road Freight" class="h-48 w-full object-cover mb-6 rounded">
            <h3 class="text-2xl font-bold mb-2">Reliable Service</h3>
            <p class="text-gray-700 leading-relaxed">At ADLERCARGO, we take pride in our reliable road freight service. Our team works diligently to ensure that your cargo is handled with care, and we maintain constant communication throughout the transportation process to keep you updated on the status of your shipment.</p>
            </div>
            </div>
            </div>
            </section>
            <section class="mb-20">
                <h2 class="text-4xl font-bold mb-8">Our Road Freight Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="px-6 py-8">
                    <img src="{{url('images/road/less.jpg')}}" alt="LTL Freight" class="h-48 w-full object-cover mb-6 rounded">
                    <h3 class="text-2xl font-bold mb-2">Less-Than-Truckload (LTL) Freight</h3>
                    <p class="text-gray-700 leading-relaxed">Our LTL freight service is perfect for shipments that do not require a full truckload. We consolidate multiple shipments to maximize efficiency and cost savings, while still ensuring timely delivery.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="px-6 py-8">
                    <img src="{{url('images/road/full.jpg')}}" alt="FTL Freight" class="h-48 w-full object-cover mb-6 rounded">
                    <h3 class="text-2xl font-bold mb-2">Full Truckload (FTL) Freight</h3>
                    <p class="text-gray-700 leading-relaxed">Our FTL freight service is ideal for shipments that require the use of an entire truck. We provide dedicated trucks for your cargo, ensuring faster transit times and increased security.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="px-6 py-8">
                    <img src="{{url('images/road/specialized.jpg')}}" alt="Specialized Freight" class="h-48 w-full object-cover mb-6 rounded">
                    <h3 class="text-2xl font-bold mb-2">Specialized Freight</h3>
                    <p class="text-gray-700 leading-relaxed">We offer specialized freight services for cargo that requires special handling, such as hazardous materials, perishable goods, oversized items, and more. Our team has the expertise and equipment to handle your specialized freight needs with care and precision.</p>
                    </div>
                </div>
                </div>
            </section>
            
            <section class="mb-20">
                <h2 class="text-4xl font-bold mb-8">Why Choose ADLERCARGO for Road Freight?</h2>
                <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                <li>Extensive experience in road freight transportation</li>
                <li>Well-maintained fleet of trucks and experienced drivers</li>
                <li>Efficient and reliable service with constant communication</li>
                <li>Flexible options for Less-Than-Truckload (LTL) and Full Truckload (FTL) freight</li>
                <li>Specialized freight handling for hazardous materials, perishable goods, and oversized items</li>
                <li>Competitive pricing and cost-effective solutions</li>
                <li>Excellent customer service and support</li>
                <li>Compliance with industry regulations and safety standards</li>
                <li>Track and trace capabilities to monitor your shipment</li>
                </ul>
                </section>
                <section class="bg-cover bg-center" style="background-image:url('/images/air/support.jpeg')">
                    <div class="bg-gray-900 bg-opacity-50 container mx-auto  py-20 px-8">
                    <h2 class="text-4xl font-bold mb-8 text-white">Contact Us</h2>
                    <p class="text-gray-100 leading-relaxed mb-8">Contact us today to discuss your road freight needs and request a quote. Our team of experts is ready to provide you with the best transportation solutions for your cargo.</p>
                    <div class="flex items-center justify-center">
                        <a href="{{route('quote')}}" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-4 px-8 rounded-full">Get a Quote</a>
                    </div>
                    </div>
                </section>
    </main>
    {{-- related links --}}
    <div class="mycontainer mx-auto py-12">
        <h2 class="text-2xl font-bold mb-6">Related Links</h2>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 px-4 mb-8">
                <a href="{{route('schedule')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
                  <h3 class="text-lg font-bold mb-2">Schedule Pick-up</h3>
                  <p class="text-gray-600">Schedule an instant pick-up with ADLERCARGO online pick-up tool.</p>
                </a>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
                <a href="{{route('about')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
                  <h3 class="text-lg font-bold mb-2">About Us</h3>
                  <p class="text-gray-600">Learn more about our company and our mission.</p>
                </a>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
            <a href="{{route('blogs')}}" class="block bg-gray-100 hover:bg-gray-200 rounded-lg p-4 transition-colors duration-300 hover:underline">
                <h3 class="text-lg font-bold mb-2">Insights</h3>
                <p class="text-gray-600">Learn more about international shipping and latest updates.</p>
            </a>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-app-layout>